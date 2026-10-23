# syntax=docker/dockerfile:1

FROM php:8.4-apache

# git/unzip for Composer, and the -dev libraries needed to compile the extensions
# this app uses (intl, pdo_pgsql, zip).
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        libicu-dev \
        libonig-dev \
        libpq-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install -j"$(nproc)" \
        intl \
        mbstring \
        opcache \
        pdo_pgsql \
        zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Production PHP settings: no file stat checks, since code doesn't change in the image.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && printf '%s\n' \
        'opcache.validate_timestamps=0' \
        'opcache.memory_consumption=256' \
        'opcache.max_accelerated_files=20000' \
        > "$PHP_INI_DIR/conf.d/opcache.ini"

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Composer runs as root during the build, and never asks questions.
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_NO_INTERACTION=1

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

ENV APP_ENV=prod \
    APP_DEBUG=0

# Dependencies first, so this layer is reused while only app code changes.
COPY composer.json composer.lock symfony.lock ./
RUN composer install \
        --no-dev \
        --no-interaction \
        --no-progress \
        --prefer-dist \
        --no-scripts \
        --no-autoloader

COPY . .

# Build-time secret so the container boots; override APP_SECRET at runtime.
RUN echo "APP_SECRET=$(php -r 'echo bin2hex(random_bytes(16));')" > .env.local \
    && composer dump-autoload --no-dev --optimize --classmap-authoritative \
    && composer dump-env prod \
    && composer run-script auto-scripts \
    && php bin/console cache:warmup --env=prod \
    && chown -R www-data:www-data var

# Apache starts as root, binds :80, then drops to www-data; app code stays
# read-only for the web user, only var/ (cache, logs) is writable.
EXPOSE 80

# Probe the app over HTTP so a 4xx/5xx from a broken container reports unhealthy.
HEALTHCHECK --interval=30s --timeout=5s --start-period=15s --retries=3 \
    CMD ["php", "-r", "exit(@file_get_contents('http://127.0.0.1/') === false ? 1 : 0);"]

CMD ["apache2-foreground"]
