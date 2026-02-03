/**
 * Legacy modal setup - now handled by modal-system.js
 * The new system uses portfolio-data.js for content and
 * dynamically renders modals on demand.
 *
 * Benefits:
 * - Single source of truth for portfolio data
 * - Lazy loading of modal content
 * - Better accessibility (focus trap, escape to close)
 * - Keyboard navigation for carousels
 * - Touch swipe support
 */

// Image and video click handlers - video autoplays and loops, only pauses on tap
const coverArt = document.getElementById('coverArt');
const coverVideo = document.getElementById('coverVideo');
const hoverText = document.getElementById('hoverText');
const coverArtContainer = coverArt ? coverArt.closest('.cover-art') : null;

// Ensure video loops continuously and starts playing
if (coverVideo) {
    coverVideo.loop = true;

    // Video play/pause logic handled by user interaction only
    // coverVideo.play() removed to prevent autoplay

    // Function to update hover text based on video playing state
    function updateHoverText() {
        if (!hoverText) return;
        if (coverVideo.paused) {
            hoverText.textContent = 'ride with me';
        } else {
            hoverText.textContent = 'stop the bike!';
        }
    }

    // Update hover text when hovering over cover-art
    if (coverArtContainer) {
        coverArtContainer.addEventListener('mouseenter', function () {
            updateHoverText();
        });
        coverArtContainer.addEventListener('mouseleave', function () {
            // Keep the text updated even on mouse leave
            updateHoverText();
        });
    }

    // Toggle play/pause video on click/tap
    function toggleVideo() {
        if (coverVideo.paused) {
            coverVideo.play().catch(function (error) {
                console.log('Play prevented:', error);
            });
        } else {
            coverVideo.pause();
        }
        updateHoverText();
    }

    // Click handlers for image and video - toggle play/pause
    // Use a flag to prevent double-firing on touch devices (click fires after touchend)
    let touchHandled = false;
    let touchTimer = null;

    function handleVideoToggle(e) {
        if (e && e.type === 'touchend') {
            e.preventDefault();
            e.stopPropagation();
            touchHandled = true;
            // Clear the flag after a delay to allow click events to be ignored
            clearTimeout(touchTimer);
            touchTimer = setTimeout(function () {
                touchHandled = false;
            }, 300);
            toggleVideo();
        } else if (e && e.type === 'click') {
            // Ignore click events that come right after touch events
            if (!touchHandled) {
                toggleVideo();
            }
        } else {
            toggleVideo();
        }
    }

    if (coverArt) {
        coverArt.addEventListener('click', handleVideoToggle);
        coverArt.addEventListener('touchend', handleVideoToggle);
    }

    coverVideo.addEventListener('click', handleVideoToggle);
    coverVideo.addEventListener('touchend', handleVideoToggle);

    // Update hover text when video state changes
    coverVideo.addEventListener('play', updateHoverText);
    coverVideo.addEventListener('pause', updateHoverText);

    // Ensure video restarts when it ends (in case loop attribute doesn't work)
    coverVideo.addEventListener('ended', function () {
        // If video ended and wasn't paused, restart it
        if (!coverVideo.paused) {
            coverVideo.currentTime = 0;
            coverVideo.play();
        }
    });

    // Initial state - update text
    updateHoverText();
}

// Progressive image loading for non-critical images
(function () {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLazy);
    } else {
        initLazy();
    }
    function initLazy() {
        const allImgs = document.querySelectorAll('img');
        allImgs.forEach(img => {
            const id = img.getAttribute('id') || '';
            const cls = img.getAttribute('class') || '';
            if (id === 'coverArt' || cls.includes('logo-placeholder') || cls.includes('hamburger')) return;
            if (!img.hasAttribute('loading')) img.setAttribute('loading', 'lazy');
            if (!img.hasAttribute('decoding')) img.setAttribute('decoding', 'async');
            if (!img.hasAttribute('fetchpriority')) img.setAttribute('fetchpriority', 'low');
        });
    }
})();

// Escape to close mobile menu and set aria-current on nav
(function () {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    function closeMenu() { if (mobileMenu && !mobileMenu.hidden) { mobileMenu.hidden = true; hamburgerBtn?.setAttribute('aria-expanded', 'false'); } }
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeMenu(); });

    function updateAriaCurrent() {
        const links = document.querySelectorAll('#site-header a[href^="#"]');
        const hash = location.hash || '#mobile-intro';
        links.forEach(a => { a.removeAttribute('aria-current'); if (a.getAttribute('href') === hash) a.setAttribute('aria-current', 'page'); });
    }
    window.addEventListener('hashchange', updateAriaCurrent);
    document.addEventListener('DOMContentLoaded', updateAriaCurrent);
})();

// Mobile menu drawer with backdrop
(function () {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const backdrop = document.getElementById('mobileMenuBackdrop');
    const closeBtn = document.getElementById('mobileMenuClose');

    if (!hamburgerBtn || !mobileMenu) return;

    function closeMenu() {
        mobileMenu.hidden = true;
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }

    function openMenu() {
        mobileMenu.hidden = false;
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        if (backdrop) backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
        // Focus first link for accessibility
        const firstLink = mobileMenu.querySelector('a');
        if (firstLink) setTimeout(() => firstLink.focus(), 100);
    }

    function toggleMenu() {
        const expanded = hamburgerBtn.getAttribute('aria-expanded') === 'true';
        if (expanded) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    // Hamburger button click
    hamburgerBtn.addEventListener('click', toggleMenu);

    // Close button inside menu
    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }

    // Backdrop click closes menu
    if (backdrop) {
        backdrop.addEventListener('click', closeMenu);
    }

    // Close when clicking a link
    mobileMenu.addEventListener('click', function (e) {
        const target = e.target;
        if (target && target.tagName === 'A') {
            closeMenu();
        }
    });

    // Escape key closes menu
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !mobileMenu.hidden) {
            closeMenu();
            hamburgerBtn.focus();
        }
    });

    // Focus trap within menu
    mobileMenu.addEventListener('keydown', function (e) {
        if (e.key !== 'Tab') return;

        const focusable = mobileMenu.querySelectorAll('a, button');
        const first = focusable[0];
        const last = focusable[focusable.length - 1];

        if (e.shiftKey && document.activeElement === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    });
})();

// Contact form: compose mailto without exposing address in HTML (pure JS, no TS types)
(function () {
    const form = document.getElementById('contactForm');
    const target = document.getElementById('cf-target');
    if (!form || !target) return;

    // Rate limiting: prevent rapid submissions
    let lastSubmitTime = 0;
    const MIN_SUBMIT_INTERVAL = 5000; // 5 seconds between submissions

    // Input sanitization: remove/escape dangerous characters and limit length
    function sanitizeInput(str, maxLength) {
        if (typeof str !== 'string') return '';
        let sanitized = str.trim()
            .replace(/[<>\"']/g, '') // Remove potential HTML/script injection chars
            .replace(/[\r\n\t]/g, ' ') // Normalize whitespace
            .replace(/\s+/g, ' '); // Collapse multiple spaces
        if (maxLength && sanitized.length > maxLength) {
            sanitized = sanitized.substring(0, maxLength);
        }
        return sanitized;
    }

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function rev(s) { return s.split('').reverse().join(''); }
    const user = rev(target.getAttribute('data-user-rev') || '');
    const domain = rev(target.getAttribute('data-domain-rev') || '');
    const addr = user + '@' + domain; // peter@peterbartsch.com

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Rate limiting check
        const now = Date.now();
        if (now - lastSubmitTime < MIN_SUBMIT_INTERVAL) {
            alert('Please wait a moment before submitting again.');
            return;
        }
        lastSubmitTime = now;

        const nameEl = document.getElementById('cf-name');
        const emailEl = document.getElementById('cf-email');
        const msgEl = document.getElementById('cf-message');

        // Sanitize and validate inputs
        let name = nameEl && 'value' in nameEl ? sanitizeInput(nameEl.value, 100) : '';
        let from = emailEl && 'value' in emailEl ? sanitizeInput(emailEl.value, 254) : '';
        let msg = msgEl && 'value' in msgEl ? sanitizeInput(msgEl.value, 5000) : '';

        // Validation
        if (!name || name.length < 2) {
            alert('Please enter a valid name (at least 2 characters).');
            if (nameEl) nameEl.focus();
            return;
        }

        if (!from || !validateEmail(from)) {
            alert('Please enter a valid email address.');
            if (emailEl) emailEl.focus();
            return;
        }

        if (!msg || msg.length < 10) {
            alert('Please enter a message (at least 10 characters).');
            if (msgEl) msgEl.focus();
            return;
        }

        // Encode for mailto
        const subject = encodeURIComponent(`Message from ${name}`);
        const body = encodeURIComponent(`From: ${name} <${from}>\n\n${msg}`);
        const mailto = `mailto:${addr}?subject=${subject}&body=${body}`;
        window.location.href = mailto;
    });
})();

// Dynamically adjust iOS toolbar guard to eliminate scroll gap
(function () {
    if (!/iPhone|iPad|iPod/.test(navigator.userAgent)) return;

    const guard = document.querySelector('.ios-toolbar-guard');
    if (!guard) return;

    function adjustGuard() {
        const vh = window.innerHeight;
        const dvh = window.visualViewport ? window.visualViewport.height : vh;
        const toolbarHeight = vh - dvh + 44; // Account for toolbar
        guard.style.height = (Math.max(toolbarHeight, 42) + 2) + 'px';
        guard.style.bottom = '-8px';
    }

    // Initial adjustment
    adjustGuard();

    // Adjust on scroll/resize/viewport changes
    window.addEventListener('scroll', adjustGuard, { passive: true });
    window.addEventListener('resize', adjustGuard);
    if (window.visualViewport) {
        window.visualViewport.addEventListener('resize', adjustGuard);
    }

    // Adjust on touch events (iOS scroll physics)
    let touchTimer;
    document.addEventListener('touchmove', function () {
        clearTimeout(touchTimer);
        adjustGuard();
        touchTimer = setTimeout(adjustGuard, 100);
    }, { passive: true });
})();

// Portfolio Carousel
(function () {
    const carousel = document.querySelector('.portfolio-carousel');
    if (!carousel) return;

    const slides = carousel.querySelectorAll('.portfolio-slide');
    const dotContainers = carousel.querySelectorAll('.portfolio-dots');
    const prevBtns = carousel.querySelectorAll('.portfolio-prev');
    const nextBtns = carousel.querySelectorAll('.portfolio-next');

    let currentIndex = 0;
    let autoRotateInterval;
    const AUTO_ROTATE_DELAY = 5000; // 5 seconds

    // Create dots in ALL containers
    dotContainers.forEach(container => {
        container.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('portfolio-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                goToSlide(index);
            });
            container.appendChild(dot);
        });
    });

    function goToSlide(index) {
        // Remove active class from current slide
        if (slides[currentIndex]) slides[currentIndex].classList.remove('active');

        // Remove active class from dots in ALL containers
        dotContainers.forEach(container => {
            const dots = container.querySelectorAll('.portfolio-dot');
            if (dots[currentIndex]) dots[currentIndex].classList.remove('active');
        });

        // Update index
        currentIndex = index;
        if (currentIndex < 0) currentIndex = slides.length - 1;
        if (currentIndex >= slides.length) currentIndex = 0;

        // Add active class to new slide
        if (slides[currentIndex]) slides[currentIndex].classList.add('active');

        // Add active class to dots in ALL containers
        dotContainers.forEach(container => {
            const dots = container.querySelectorAll('.portfolio-dot');
            if (dots[currentIndex]) dots[currentIndex].classList.add('active');
        });

        // Reset auto-rotate timer
        resetAutoRotate();
    }

    function nextSlide() {
        goToSlide(currentIndex + 1);
    }

    function prevSlide() {
        goToSlide(currentIndex - 1);
    }

    function startAutoRotate() {
        autoRotateInterval = setInterval(nextSlide, AUTO_ROTATE_DELAY);
    }

    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }

    function resetAutoRotate() {
        stopAutoRotate();
        startAutoRotate();
    }

    // Event listeners
    prevBtns.forEach(btn => btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        prevSlide();
    }));
    nextBtns.forEach(btn => btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        nextSlide();
    }));

    // Pause on hover
    carousel.addEventListener('mouseenter', stopAutoRotate);
    carousel.addEventListener('mouseleave', startAutoRotate);

    // Keyboard navigation for carousel
    document.addEventListener('keydown', function(e) {
        // Skip if a modal is open or user is typing in a form
        if (document.querySelector('.modal[style*="block"]')) return;
        if (document.activeElement.tagName === 'INPUT' || document.activeElement.tagName === 'TEXTAREA') return;

        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            prevSlide();
            // Track analytics
            if (typeof gtag === 'function') {
                gtag('event', 'carousel_navigation', {
                    'event_category': 'engagement',
                    'event_label': 'keyboard_left',
                    'value': currentIndex
                });
            }
        } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            nextSlide();
            // Track analytics
            if (typeof gtag === 'function') {
                gtag('event', 'carousel_navigation', {
                    'event_category': 'engagement',
                    'event_label': 'keyboard_right',
                    'value': currentIndex
                });
            }
        }
    });

    // Start auto-rotation
    startAutoRotate();
})();

// ========================================
// Scroll Reveal Animations
// ========================================
(function() {
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        // Make all elements visible immediately
        document.querySelectorAll('.scroll-reveal, .scroll-reveal-stagger').forEach(el => {
            el.classList.add('visible');
        });
        return;
    }

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optionally unobserve after revealing
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all scroll-reveal elements
    document.querySelectorAll('.scroll-reveal, .scroll-reveal-stagger').forEach(el => {
        observer.observe(el);
    });
})();

// ========================================
// Analytics Event Tracking
// ========================================
(function() {
    // Helper to safely call gtag
    function trackEvent(eventName, params) {
        if (typeof gtag === 'function') {
            gtag('event', eventName, params);
        }
    }

    // Track case study clicks
    document.querySelectorAll('.project-link, a[href*="Case-Study"]').forEach(link => {
        link.addEventListener('click', function() {
            const label = this.textContent.trim() || this.getAttribute('href');
            trackEvent('case_study_click', {
                'event_category': 'engagement',
                'event_label': label
            });
        });
    });

    // Track resume/portfolio downloads
    document.querySelectorAll('a[href*="Resume.pdf"], a[href*="Portfolio.pdf"]').forEach(link => {
        link.addEventListener('click', function() {
            const fileName = this.getAttribute('href').split('/').pop();
            trackEvent('resume_download', {
                'event_category': 'engagement',
                'event_label': fileName
            });
        });
    });

    // Track modal opens
    document.querySelectorAll('[id^="openModal"]').forEach(trigger => {
        trigger.addEventListener('click', function() {
            const modalId = this.id.replace('openModal', '');
            const companyName = this.textContent.trim();
            trackEvent('modal_open', {
                'event_category': 'engagement',
                'event_label': companyName,
                'value': parseInt(modalId) || 0
            });
        });
    });

    // Track external links (Figma, configurator, etc.)
    document.querySelectorAll('a[target="_blank"]').forEach(link => {
        const href = link.getAttribute('href') || '';
        if (href.includes('figma.com') || href.includes('thios.co')) {
            link.addEventListener('click', function() {
                trackEvent('external_link_click', {
                    'event_category': 'engagement',
                    'event_label': href.includes('figma') ? 'figma' : 'thios_configurator'
                });
            });
        }
    });

    // Track contact form submissions
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function() {
            trackEvent('contact_form_submit', {
                'event_category': 'conversion',
                'event_label': 'contact_form'
            });
        });
    }

    // Track configurator CTA click
    document.querySelectorAll('[data-track="configurator_click"]').forEach(el => {
        el.addEventListener('click', function() {
            trackEvent('configurator_click', {
                'event_category': 'engagement',
                'event_label': 'configurator_cta'
            });
        });
    });
})();
