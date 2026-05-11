<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Peter Bartsch — Staff Product Designer</title>
    <meta name="description" content="Thoughts on enterprise design systems, AI-augmented workflows, forced adoption, and building products that actually ship. By Peter Bartsch.">
    <link rel="canonical" href="https://petebartsch.com/blog">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="Blog | Peter Bartsch">
    <meta property="og:description" content="Thoughts on enterprise design, AI workflows, and building products that ship.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://petebartsch.com/blog">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog | Peter Bartsch">
    <meta name="twitter:description" content="Thoughts on enterprise design, AI workflows, and building products that ship.">

    <!-- Fonts -->
    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="blog.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "name": "Peter Bartsch Blog",
      "description": "Thoughts on enterprise design systems, AI-augmented workflows, and building products that ship.",
      "url": "https://petebartsch.com/blog",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"}
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="blog-listing">
        <header class="blog-listing-header">
            <h1 class="blog-listing-title">Writing</h1>
            <p class="blog-listing-subtitle">Notes on enterprise design, AI workflows, and building things that ship. Sparse but considered.</p>
        </header>

        <div class="blog-cards">

            <a href="ux-is-dead-long-live-hx" class="blog-card">
                <img src="../peterb.png" alt="Peter Bartsch" class="blog-card-img" loading="lazy">
                <p class="blog-card-date">March 2026</p>
                <h2 class="blog-card-title">UX Is Dead. Long Live HX.</h2>
                <p class="blog-card-excerpt">Why designing for Agents means we finally get to design for Humans — not Users. The end of dark patterns, the beginning of honest experiences.</p>
                <span class="blog-card-meta">6 min read · Originally on LinkedIn</span>
            </a>

            <a href="open-source-3d-configurator" class="blog-card">
                <img src="../img/configurator-screenshot.png" alt="Thios 3D Configurator" class="blog-card-img" loading="lazy">
                <p class="blog-card-date">March 2026</p>
                <h2 class="blog-card-title">I Built an Open-Source 3D Configurator</h2>
                <p class="blog-card-excerpt">17,000 lines of Three.js, zero framework dependencies, 10 languages. How a product designer shipped a full 3D configurator solo using AI tooling.</p>
                <span class="blog-card-meta">15 min read · Originally on blog.thios.co</span>
            </a>

            <a href="what-vertical-farming-got-wrong" class="blog-card">
                <img src="../img/thios-07.png" alt="Thios geodesic greenhouse" class="blog-card-img" loading="lazy">
                <p class="blog-card-date">March 2026</p>
                <h2 class="blog-card-title">What Vertical Farming Got Wrong</h2>
                <p class="blog-card-excerpt">The VC-funded vertical farming collapse is a masterclass in why distributed, platform-based approaches beat centralized factory models.</p>
                <span class="blog-card-meta">8 min read · Originally on blog.thios.co</span>
            </a>

        </div>
    </main>

    <script defer src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
