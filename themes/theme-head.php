    <!-- Theme Switcher Styles -->
    <link rel="stylesheet" href="<?php echo $themeBasePath ?? ''; ?>themes/theme-switcher.css">

    <!-- Default theme, statically linked so the first paint is 2026 and not the
         base (80s) theme. theme-switcher.js swaps #theme-stylesheet to the saved era. -->
    <link id="theme-stylesheet" rel="stylesheet" href="<?php echo $themeBasePath ?? ''; ?>themes/theme-2026.css">

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

    <!-- FOUC prevention: external file because the CSP (script-src 'self')
         blocks inline scripts. Same script the homepage uses. -->
    <script src="<?php echo $themeBasePath ?? ''; ?>theme-init.js"></script>
