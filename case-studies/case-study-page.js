// Shared per-page behaviors for case-study pages. Lives in an external file
// because the site CSP (script-src 'self', no 'unsafe-inline') blocks inline
// scripts — anything inline here silently no-ops in production.

// GA view event — label derived from the URL slug (works with and without .php).
(function () {
    if (typeof gtag !== 'function') return;
    var label = (location.pathname.split('/').pop() || '').replace(/\.php$/, '') || 'unknown';
    gtag('event', 'case_study_view', { 'event_category': 'engagement', 'event_label': label });
})();

// Scroll-fade indicator on artifact callouts: shown only while content overflows.
document.querySelectorAll('.artifact-callout__body').forEach(function (el) {
    var update = function () {
        var atEnd = el.scrollLeft + el.clientWidth >= el.scrollWidth - 2;
        var overflows = el.scrollWidth > el.clientWidth + 1;
        el.classList.toggle('artifact-callout__body--scrollable', overflows && !atEnd);
    };
    update();
    el.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
});
