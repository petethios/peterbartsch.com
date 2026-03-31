<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Built an Open-Source 3D Configurator | Peter Bartsch</title>
    <meta name="description" content="17,000 lines of Three.js, zero framework dependencies, 10 languages. How a product designer shipped a full 3D configurator solo using AI tooling.">
    <link rel="canonical" href="https://petebartsch.com/blog/open-source-3d-configurator">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="I Built an Open-Source 3D Configurator | Peter Bartsch">
    <meta property="og:description" content="17,000 lines of Three.js, zero dependencies, 10 languages. Solo product designer + AI tooling.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/blog/open-source-3d-configurator">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="I Built an Open-Source 3D Configurator | Peter Bartsch">
    <meta name="twitter:description" content="17,000 lines of Three.js, zero dependencies, 10 languages. Solo product designer + AI tooling.">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="blog.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": "I Built an Open-Source 3D Configurator",
      "description": "17,000 lines of Three.js, zero framework dependencies, 10 languages. How a product designer shipped a full 3D configurator solo using AI tooling.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/blog/open-source-3d-configurator",
      "datePublished": "2026-03-01",
      "dateModified": "2026-03-31"
    }
    </script>
</head>
<body>
    <?php include('../themes/theme-banner.php'); ?>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home"><img src="../pblogo.svg" alt="PB logo" height="40" /></a>
            <nav aria-label="Breadcrumb" style="display: flex; gap: 16px;">
                <a href="./" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Blog</a>
            </nav>
        </div>
    </header>

    <main class="blog-post-page">
        <article>
            <header class="blog-post-header">
                <nav class="blog-breadcrumb"><a href="./">Blog</a> / 3D Configurator</nav>
                <h1 class="blog-post-title">I Built an Open-Source 3D Configurator</h1>
                <p class="blog-post-subtitle">17,000 lines of Three.js, zero framework dependencies, 10 languages. How a product designer shipped a full 3D configurator solo using AI tooling.</p>
                <div class="blog-post-meta">
                    <span class="blog-meta-item"><span class="blog-meta-label">Published</span> March 2026</span>
                    <span class="blog-meta-item"><span class="blog-meta-label">Reading time</span> 15 min</span>
                </div>
                <p class="blog-originally">Originally published on <a href="https://blog.thios.co" target="_blank" rel="noopener noreferrer">blog.thios.co</a> · <a href="https://thios.co/configurator" target="_blank" rel="noopener noreferrer">Try the live configurator</a></p>
            </header>

            <div class="blog-post-content">
                <p><em>This post details the architecture and design decisions behind building a full 3D product configurator as a solo product designer. The full article is available on <a href="https://blog.thios.co/post.php?slug=i-built-an-open-source-3d-configurator" target="_blank" rel="noopener noreferrer">blog.thios.co</a>.</em></p>

                <h2>The Problem</h2>
                <p>Thios manufactures modular geodesic shelters — truncated icosahedron structures with 23 panel types. Customers needed interactive 3D visualization before purchasing. Off-the-shelf configurators couldn't handle the geometric complexity or the multi-stakeholder pipeline from consumer to vendor.</p>

                <h2>Technical Stack</h2>
                <p>Three.js r172 via CDN, vanilla JavaScript (no framework), PHP 8 backend. GLB models with Draco compression, HDRI environment maps, OnShape REST API integration, and a 10-language i18n system supporting 339 translation keys.</p>

                <h2>Key Architecture Decisions</h2>
                <ul>
                    <li><strong>Module system:</strong> 23 panel types managed as instances with flat map structure and state serialization via compressed URL parameters</li>
                    <li><strong>Hex grid layouts:</strong> Hexagonal grid with axial coordinates, presets from single through 12-pack configurations</li>
                    <li><strong>Bill of materials:</strong> Module-to-parts mapping with OnShape REST API integration and 24-hour filesystem caching</li>
                    <li><strong>Consumer-to-vendor pipeline:</strong> Vendor share tokens (64-char cryptographic strings) with read-only access to category-specific parts lists</li>
                    <li><strong>State management:</strong> Single source of truth, 50 undo levels, auto-save every 30 seconds, LZ-String compression for URL sharing</li>
                </ul>

                <h2>Mobile & AR</h2>
                <p>Bottom-drawer panel with swipe gestures, touch-mapped OrbitControls, and AR preview via Model Viewer. The configurator runs on every device from phones to desktops.</p>

                <h2>AI Development Partnership</h2>
                <p>Built the entire 17,000-line codebase using Claude Code as a development partner. 15 years of product design experience directed requirements and architecture; AI handled implementation velocity. The result: a production-quality configurator shipped at solo-founder speed.</p>

                <h2>By the Numbers</h2>
                <ul>
                    <li>17,000 lines of code across 26 files</li>
                    <li>Zero framework dependencies</li>
                    <li>10 languages supported</li>
                    <li>Open-source under CERN-OHL-S license</li>
                </ul>

                <p><a href="https://thios.co/configurator" target="_blank" rel="noopener noreferrer">Try the live configurator →</a></p>
            </div>

            <footer class="blog-post-footer">
                <div class="blog-post-cta">
                    <h3>Design + code + shipping</h3>
                    <p>This is what Staff-level product designers do — close the gap between vision and production.</p>
                    <a href="../#contact">GET IN TOUCH →</a>
                </div>
                <nav class="blog-post-nav">
                    <a href="ux-is-dead-long-live-hx">← Previous: UX Is Dead</a>
                    <a href="what-vertical-farming-got-wrong">Next: Vertical Farming →</a>
                </nav>
            </footer>
        </article>
    </main>

    <script defer src="../themes/theme-switcher.js"></script>
</body>
</html>
