# syntax=docker/dockerfile:1

FROM php:8.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        libicu-dev \
        libonig-dev \
        libzip-dev \
        unzip \
      && docker-php-ext-install -j"$(nproc)" \
        ctype \
        iconv \
        intl \
        mbstring \
        opcache \
        zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Production PHP settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && printf '%s\n' \
        'opcache.validate_timestamps=0' \
        'opcache.memory_consumption=256' \
        'opcache.max_accelerated_files=20000' \
        > "$PHP_INI_DIR/conf.d/opcache.ini"

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_NO_INTERACTION=1

# Apache: point the default vhost at public/ and send unknown paths to the
# Symfony front controller (the Debian default config has no FallbackResource,
# so /about, /work, etc. would 404 even though / works).
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

ENV APP_ENV=prod \
    APP_DEBUG=0

# Copy Composer files first for caching
COPY composer.json composer.lock symfony.lock ./
RUN composer install \
        --no-dev \
        --no-interaction \
        --no-progress \
        --prefer-dist \
        --no-scripts \
        --no-autoloader

# Copy the rest of the app
COPY . .

# Build the app and set permissions
RUN echo "APP_SECRET=$(php -r 'echo bin2hex(random_bytes(16));')" > .env.local \
    && composer dump-autoload --no-dev --optimize --classmap-authoritative \
    && composer dump-env prod \
    && composer run-script auto-scripts \
    && php bin/console cache:warmup --env=prod \
    && chown -R www-data:www-data var

EXPOSE 80

# Healthcheck
HEALTHCHECK --interval=30s --timeout=5s --start-period=15s --retries=3 \
    CMD ["php", "-r", "exit(@file_get_contents('http://127.0.0.1/') === false ? 1 : 0);"]

CMD ["apache2-foreground"]