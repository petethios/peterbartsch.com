// FOUC prevention: apply saved theme before first paint
(function() {
    var saved = localStorage.getItem('pb-theme') || '2026';
    if (saved !== '80s') {
        document.documentElement.setAttribute('data-theme', saved);
    }
})();
