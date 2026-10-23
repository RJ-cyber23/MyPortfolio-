(function () {
    var sliders = document.querySelectorAll('[data-slider]');
    if (!sliders.length) return;

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    sliders.forEach(function (slider) {
        var track = slider.querySelector('[data-slider-track]');
        if (!track) return;

        var slides = Array.prototype.slice.call(track.querySelectorAll('.slide'));
        var prev = slider.querySelector('[data-slider-prev]');
        var next = slider.querySelector('[data-slider-next]');
        var dots = Array.prototype.slice.call(slider.querySelectorAll('[data-slider-dot]'));
        var currentEl = slider.querySelector('[data-slider-current]');
        var totalEl = slider.querySelector('[data-slider-total]');
        var index = 0;

        if (!slides.length) return;
        if (totalEl) totalEl.textContent = slides.length;

        var update = function () {
            dots.forEach(function (dot, i) {
                var active = i === index;
                dot.classList.toggle('is-active', active);
                if (active) {
                    dot.setAttribute('aria-current', 'true');
                } else {
                    dot.removeAttribute('aria-current');
                }
            });

            if (currentEl) currentEl.textContent = index + 1;
            if (prev) prev.disabled = index === 0;
            if (next) next.disabled = index === slides.length - 1;
        };

        var goTo = function (target) {
            index = Math.max(0, Math.min(slides.length - 1, target));
            track.scrollTo({
                left: index * track.clientWidth,
                behavior: reduceMotion ? 'auto' : 'smooth'
            });
            update();
        };

        if (prev) {
            prev.addEventListener('click', function () { goTo(index - 1); });
        }
        if (next) {
            next.addEventListener('click', function () { goTo(index + 1); });
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { goTo(i); });
        });

        slider.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowLeft') {
                event.preventDefault();
                goTo(index - 1);
            } else if (event.key === 'ArrowRight') {
                event.preventDefault();
                goTo(index + 1);
            }
        });

        var ticking = false;
        track.addEventListener('scroll', function () {
            if (ticking) return;
            ticking = true;

            window.requestAnimationFrame(function () {
                ticking = false;
                var newIndex = Math.round(track.scrollLeft / track.clientWidth);
                if (newIndex !== index) {
                    index = newIndex;
                    update();
                }
            });
        });

        window.addEventListener('resize', function () {
            track.scrollLeft = index * track.clientWidth;
        });

        update();
    });
})();
