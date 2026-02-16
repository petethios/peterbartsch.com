    <!-- Theme Switcher Styles -->
    <link rel="stylesheet" href="<?php echo $themeBasePath ?? ''; ?>themes/theme-switcher.css">

    <!-- Theme fonts (lazy-loaded) -->
    <link id="font-90s" rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,400;0,700;1,400&display=swap"
        media="print">
    <link id="font-2010s" rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        media="print">
    <link id="font-2026" rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap"
        media="print">

    <!-- FOUC prevention -->
    <script>
        (function() {
            var saved = localStorage.getItem('pb-theme');
            if (saved && saved !== '80s') {
                document.documentElement.setAttribute('data-theme', saved);
            }
        })();
    </script>
