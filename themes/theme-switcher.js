/**
 * Theme Switcher — Web Design Era Time Machine
 * Handles theme switching, localStorage persistence, font loading,
 * and era-specific effects (90s stars animation).
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'pb-theme';
    var THEME_CSS_MAP = {
        '80s': null,
        '90s': 'theme-90s.css',
        '2000s': 'theme-2000s.css',
        '2010s': 'theme-2010s.css',
        '2026': 'theme-2026.css'
    };

    var THEME_FONTS_MAP = {
        '80s': [],
        '90s': ['font-90s'],
        '2000s': [],
        '2010s': ['font-2010s'],
        '2026': ['font-2026']
    };

    var currentStylesheet = null;
    var starsAnimFrame = null;
    var starsResizeHandler = null;

    // Determine base path for theme CSS files
    var scripts = document.getElementsByTagName('script');
    var basePath = '';
    for (var i = 0; i < scripts.length; i++) {
        var src = scripts[i].src || '';
        if (src.indexOf('theme-switcher.js') !== -1) {
            basePath = src.substring(0, src.lastIndexOf('/') + 1);
            break;
        }
    }

    function loadThemeCSS(themeId) {
        if (currentStylesheet) {
            currentStylesheet.remove();
            currentStylesheet = null;
        }

        var cssFile = THEME_CSS_MAP[themeId];
        if (!cssFile) return;

        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = basePath + cssFile;
        link.id = 'theme-stylesheet';
        document.head.appendChild(link);
        currentStylesheet = link;
    }

    function activateFonts(themeId) {
        // Deactivate all theme fonts
        var allFontIds = [];
        Object.keys(THEME_FONTS_MAP).forEach(function (key) {
            THEME_FONTS_MAP[key].forEach(function (id) {
                if (allFontIds.indexOf(id) === -1) allFontIds.push(id);
            });
        });
        allFontIds.forEach(function (id) {
            var el = document.getElementById(id);
            if (el) el.media = 'print';
        });

        // Activate fonts for current theme
        var fonts = THEME_FONTS_MAP[themeId] || [];
        fonts.forEach(function (id) {
            var el = document.getElementById(id);
            if (el) el.media = 'all';
        });
    }

    function setTheme(themeId) {
        // Set data-theme on <html>
        if (themeId === '80s') {
            document.documentElement.removeAttribute('data-theme');
        } else {
            document.documentElement.setAttribute('data-theme', themeId);
        }

        loadThemeCSS(themeId);
        activateFonts(themeId);

        // Handle 90s stars
        handle90sStars(themeId === '90s');

        // Save
        localStorage.setItem(STORAGE_KEY, themeId);

        // Update dropdown
        var select = document.getElementById('theme-select');
        if (select) select.value = themeId;

        // Analytics
        if (typeof gtag === 'function') {
            gtag('event', 'theme_switch', {
                'event_category': 'engagement',
                'event_label': themeId
            });
        }
    }

    // ========================================
    // 90s Twinkling Stars Animation
    // ========================================
    function handle90sStars(show) {
        var canvas = document.getElementById('geocities-stars');
        if (show && !canvas) {
            canvas = document.createElement('canvas');
            canvas.id = 'geocities-stars';
            document.body.insertBefore(canvas, document.body.firstChild);
            startStarAnimation(canvas);
        } else if (!show && canvas) {
            stopStarAnimation();
            canvas.remove();
        }
    }

    function stopStarAnimation() {
        if (starsAnimFrame) {
            cancelAnimationFrame(starsAnimFrame);
            starsAnimFrame = null;
        }
        if (starsResizeHandler) {
            window.removeEventListener('resize', starsResizeHandler);
            starsResizeHandler = null;
        }
    }

    function startStarAnimation(canvas) {
        var ctx = canvas.getContext('2d');
        var stars = [];
        var STAR_COUNT = 250;

        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = document.documentElement.scrollHeight;
        }
        resize();
        starsResizeHandler = resize;
        window.addEventListener('resize', starsResizeHandler);

        // Initialize stars across full page height
        for (var i = 0; i < STAR_COUNT; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: Math.random() * 2 + 0.5,
                twinkleSpeed: Math.random() * 0.04 + 0.008,
                phase: Math.random() * Math.PI * 2,
                baseOpacity: Math.random() * 0.5 + 0.5
            });
        }

        function animate() {
            if (!document.getElementById('geocities-stars')) return;

            // Resize canvas to match scroll height
            var newHeight = document.documentElement.scrollHeight;
            if (canvas.height !== newHeight) {
                canvas.height = newHeight;
            }
            var newWidth = window.innerWidth;
            if (canvas.width !== newWidth) {
                canvas.width = newWidth;
            }

            ctx.clearRect(0, 0, canvas.width, canvas.height);
            var time = Date.now() * 0.001;

            for (var i = 0; i < stars.length; i++) {
                var star = stars[i];
                var opacity = star.baseOpacity *
                    (0.3 + 0.7 * Math.abs(Math.sin(time * star.twinkleSpeed * 60 + star.phase)));

                ctx.fillStyle = 'rgba(255, 255, 255, ' + opacity + ')';
                ctx.beginPath();
                ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
                ctx.fill();
            }

            starsAnimFrame = requestAnimationFrame(animate);
        }
        animate();
    }

    // ========================================
    // Init
    // ========================================
    function init() {
        var saved = localStorage.getItem(STORAGE_KEY) || '80s';
        setTheme(saved);

        var select = document.getElementById('theme-select');
        if (select) {
            select.addEventListener('change', function () {
                setTheme(this.value);
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
