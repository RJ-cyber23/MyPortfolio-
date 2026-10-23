(function () {
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.nav-toggle');
    var menu = document.getElementById('nav-menu');
    var dropdown = document.querySelector('.dropdown');
    var dropdownToggle = dropdown ? dropdown.querySelector('.dropdown-toggle') : null;

    function closeMenu() {
        if (!menu || !toggle) return;
        menu.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
    }

    function closeDropdown() {
        if (!dropdown || !dropdownToggle) return;
        dropdown.classList.remove('open');
        dropdownToggle.setAttribute('aria-expanded', 'false');
    }

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            var open = menu.classList.toggle('open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            if (!open) closeDropdown();
        });
    }

    if (dropdown && dropdownToggle) {
        dropdownToggle.addEventListener('click', function (event) {
            event.stopPropagation();
            var open = dropdown.classList.toggle('open');
            dropdownToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    }

    document.addEventListener('click', function (event) {
        if (dropdown && !dropdown.contains(event.target)) closeDropdown();
        if (menu && menu.classList.contains('open') &&
            !menu.contains(event.target) && !toggle.contains(event.target)) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeDropdown();
            closeMenu();
        }
    });

    if (menu) {
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    }

    var yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    var typedEl = document.querySelector('.typed');
    if (typedEl) {
        var role = typedEl.getAttribute('data-role') || 'Software Developer';
        var charIndex = 0;
        var deleting = false;

        var typeLoop = function () {
            if (!deleting) {
                charIndex += 1;
                typedEl.textContent = role.slice(0, charIndex);

                if (charIndex === role.length) {
                    deleting = true;
                    setTimeout(typeLoop, 2400);
                    return;
                }

                setTimeout(typeLoop, 90 + Math.random() * 50);
            } else {
                charIndex -= 1;
                typedEl.textContent = role.slice(0, charIndex);

                if (charIndex === 0) {
                    deleting = false;
                    setTimeout(typeLoop, 700);
                    return;
                }

                setTimeout(typeLoop, 45);
            }
        };

        setTimeout(typeLoop, 500);
    }

    var revealEls = document.querySelectorAll('[data-reveal]');
    if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    if (header) {
        var onScroll = function () {
            header.style.boxShadow = window.scrollY > 8
                ? '0 10px 30px -22px rgba(15, 23, 42, .35)'
                : 'none';
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }
})();
