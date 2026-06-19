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

// Video click handlers - video autoplays and loops, only pauses on tap
const coverVideo = document.getElementById('coverVideo');
const hoverText = document.getElementById('hoverText');
const coverArtContainer = coverVideo ? coverVideo.closest('.cover-art') : null;

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
                // Video autoplay blocked by browser
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
            if (cls.includes('logo-placeholder') || cls.includes('hamburger')) return;
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
        const hash = location.hash || '#about';
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

    // Initialize mobile menu as inert so its contents (including the
    // duplicate era-switcher buttons) are removed from the a11y tree
    // and tab order while the drawer is closed.
    mobileMenu.setAttribute('inert', '');

    function closeMenu() {
        mobileMenu.hidden = true;
        mobileMenu.setAttribute('inert', '');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }

    function openMenu() {
        mobileMenu.hidden = false;
        mobileMenu.removeAttribute('inert');
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

// Contact form: posts to contact-handler.php and reflects state inline.
// (Replaced the old mailto: composer, which silently dead-ended on machines
// with no configured mail client.)
(function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const statusEl = document.getElementById('cf-status');
    const submitBtn = form.querySelector('.form-submit');
    const fallbackAddr = 'peter@peterbartsch.com';

    // Rate limiting: prevent rapid submissions
    let lastSubmitTime = 0;
    const MIN_SUBMIT_INTERVAL = 5000; // 5 seconds between submissions

    function setStatus(kind, html) {
        if (!statusEl) return;
        statusEl.className = 'form-status' + (kind ? ' form-status--' + kind : '');
        statusEl.innerHTML = html || '';
    }

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Rate limiting check
        const now = Date.now();
        if (now - lastSubmitTime < MIN_SUBMIT_INTERVAL) {
            setStatus('error', 'Please wait a moment before submitting again.');
            return;
        }

        const nameEl = document.getElementById('cf-name');
        const emailEl = document.getElementById('cf-email');
        const msgEl = document.getElementById('cf-message');

        const name = nameEl && 'value' in nameEl ? nameEl.value.trim() : '';
        const from = emailEl && 'value' in emailEl ? emailEl.value.trim() : '';
        const msg = msgEl && 'value' in msgEl ? msgEl.value.trim() : '';

        if (!name || name.length < 2) {
            setStatus('error', 'Please enter a valid name (at least 2 characters).');
            if (nameEl) nameEl.focus();
            return;
        }

        if (!from || !validateEmail(from)) {
            setStatus('error', 'Please enter a valid email address.');
            if (emailEl) emailEl.focus();
            return;
        }

        if (!msg || msg.length < 10) {
            setStatus('error', 'Please enter a message (at least 10 characters).');
            if (msgEl) msgEl.focus();
            return;
        }

        lastSubmitTime = now;
        if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'SENDING…'; }
        setStatus('', '');

        fetch('/contact-handler.php', { method: 'POST', body: new FormData(form) })
            .then(function (res) { return res.json(); })
            .then(function (json) {
                if (!json || !json.ok) throw new Error('send-failed');
                form.reset();
                setStatus('success', 'Message sent — I\'ll reply within 1 business day.');
                if (typeof gtag === 'function') {
                    gtag('event', 'contact_form_submit', {
                        'event_category': 'conversion',
                        'event_label': 'contact_form'
                    });
                }
            })
            .catch(function () {
                setStatus('error', 'Something broke — email me directly at <a href="mailto:' + fallbackAddr + '">' + fallbackAddr + '</a>.');
            })
            .finally(function () {
                if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = 'SEND MESSAGE'; }
            });
    });
})();

// Resume download dropdown (/resume): close after a format is picked, and let
// users dismiss it by clicking outside. Lives here rather than inline on
// resume.php because the CSP (script-src 'self') blocks inline scripts.
(function () {
    const menu = document.querySelector('.resume-download-menu');
    if (!menu) return;
    menu.querySelectorAll('.resume-download-list a').forEach(function (a) {
        a.addEventListener('click', function () { menu.open = false; });
    });
    document.addEventListener('click', function (e) {
        if (menu.open && !menu.contains(e.target)) menu.open = false;
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
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all scroll-reveal elements
    const els = document.querySelectorAll('.scroll-reveal, .scroll-reveal-stagger');
    els.forEach(el => {
        // If element is already in viewport on load, reveal immediately
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            el.classList.add('visible');
        } else {
            observer.observe(el);
        }
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

    // (Contact form submissions are tracked in the form handler above, on
    // confirmed success rather than on every submit attempt.)

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

// ========================================
// Ambient Dimming System + Screensaver Clock
// ========================================
(function() {
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const IDLE_TIMEOUT = 180000; // 3 minutes
    let idleTimer = null;
    let isDimmed = false;

    // --- Screensaver clock setup ---
    var clockEl = document.createElement('div');
    clockEl.id = 'screensaver-clock';
    var clockText = document.createElement('span');
    clockText.className = 'clock-text';
    var clockTagline = document.createElement('span');
    clockTagline.className = 'clock-tagline';
    clockTagline.textContent = 'Time to talk with Pete';
    clockEl.appendChild(clockText);
    clockEl.appendChild(clockTagline);
    document.body.parentNode.appendChild(clockEl); // append to <html> so it's outside body filter

    var clockText = clockEl.querySelector('.clock-text');
    var clockTagline = clockEl.querySelector('.clock-tagline');
    var animFrame = null;

    // Bounce state
    var posX = Math.random() * 60 + 10; // start 10-70% from left
    var posY = Math.random() * 60 + 10; // start 10-70% from top
    var velX = 0.3 + Math.random() * 0.3; // px per frame speed
    var velY = 0.2 + Math.random() * 0.3;
    if (Math.random() > 0.5) velX *= -1;
    if (Math.random() > 0.5) velY *= -1;

    function updateClockText() {
        var now = new Date();
        var h = now.getHours();
        var m = now.getMinutes();
        var s = now.getSeconds();
        var ampm = h >= 12 ? 'PM' : 'AM';
        h = h % 12;
        if (h === 0) h = 12;
        var timeStr = h + ':' + (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s + ' ' + ampm;
        clockText.textContent = timeStr;
    }

    function animateClock() {
        updateClockText();

        // Get bounds - include tagline height
        var cw = clockText.offsetWidth;
        var ch = clockText.offsetHeight + clockTagline.offsetHeight + 4;
        var vw = window.innerWidth;
        var vh = window.innerHeight;

        // Move
        posX += velX;
        posY += velY;

        // Bounce off edges
        if (posX + cw >= vw) { posX = vw - cw; velX *= -1; }
        if (posX <= 0) { posX = 0; velX *= -1; }
        if (posY + ch >= vh) { posY = vh - ch; velY *= -1; }
        if (posY <= 0) { posY = 0; velY *= -1; }

        clockText.style.left = posX + 'px';
        clockText.style.top = posY + 'px';
        var taglineOffset = (clockText.offsetWidth - clockTagline.offsetWidth) / 2;
        clockTagline.style.left = (posX + taglineOffset) + 'px';
        clockTagline.style.top = (posY + clockText.offsetHeight + 4) + 'px';

        animFrame = requestAnimationFrame(animateClock);
    }

    function startScreensaver() {
        // Randomize starting position
        posX = Math.random() * (window.innerWidth * 0.6) + (window.innerWidth * 0.1);
        posY = Math.random() * (window.innerHeight * 0.6) + (window.innerHeight * 0.1);
        clockEl.classList.add('active');
        updateClockText();
        animFrame = requestAnimationFrame(animateClock);
    }

    function stopScreensaver() {
        clockEl.classList.remove('active');
        if (animFrame) {
            cancelAnimationFrame(animFrame);
            animFrame = null;
        }
    }

    // --- Dimming ---
    function dimPage() {
        if (!isDimmed) {
            document.body.classList.add('dimmed');
            isDimmed = true;
            startScreensaver();
        }
    }

    function wakePage() {
        if (isDimmed) {
            document.body.classList.remove('dimmed');
            isDimmed = false;
            stopScreensaver();
        }
        // Reset the timer
        clearTimeout(idleTimer);
        idleTimer = setTimeout(dimPage, IDLE_TIMEOUT);
    }

    // Wake on any interaction
    const wakeEvents = ['mousemove', 'mousedown', 'keydown', 'scroll', 'touchstart', 'touchmove'];
    wakeEvents.forEach(event => {
        document.addEventListener(event, wakePage, { passive: true });
    });

    // Start the initial timer
    idleTimer = setTimeout(dimPage, IDLE_TIMEOUT);
})();

// ========================================
// Pretext Magazine Layout Init
// ========================================
(function () {
    'use strict';
    if (typeof window.PretextLayout === 'undefined') return;

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            window.PretextLayout.init();
        });
    } else {
        window.PretextLayout.init();
    }
})();

