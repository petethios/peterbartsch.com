<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Deere: Platform Unification | Peter Bartsch Case Study</title>
    <meta name="description" content="Unified navigation across 47 sites with zero-downtime migration—creating a single customer view across 8 product lines.">
    <link rel="canonical" href="https://peterbartsch.com/case-studies/deere-nav">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="John Deere: Platform Unification | Peter Bartsch">
    <meta property="og:description" content="Unified navigation across 47 sites with zero-downtime migration.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-studies/deere-nav">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <style>
        .case-study-page { max-width: 900px; margin: 0 auto; padding: 40px 24px 80px; }
        .case-study-header { margin-bottom: 40px; }
        .case-study-breadcrumb { font-family: var(--font-body); font-size: 13px; color: var(--color-text-muted); margin-bottom: 20px; }
        .case-study-breadcrumb a { color: var(--color-primary); text-decoration: none; }
        .case-study-breadcrumb a:hover { text-decoration: underline; }
        .case-study-title { font-family: var(--font-display); font-size: 36px; color: var(--color-white); margin: 0 0 12px 0; text-shadow: 0 0 20px rgba(134, 216, 221, 0.4); }
        .case-study-subtitle { font-family: var(--font-body); font-size: 18px; color: var(--color-text-muted); margin: 0 0 24px 0; }
        .case-study-meta { display: flex; gap: 24px; flex-wrap: wrap; font-family: var(--font-body); font-size: 14px; color: var(--color-text-muted); padding: 16px 0; border-top: 1px solid rgba(134, 216, 221, 0.2); border-bottom: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-meta-item { display: flex; flex-direction: column; gap: 4px; }
        .case-study-meta-label { font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--color-primary); }
        .case-study-hero { margin: 40px 0; border: 2px solid rgba(134, 216, 221, 0.3); overflow: hidden; }
        .case-study-hero img { width: 100%; height: auto; display: block; }
        .case-study-section { margin: 48px 0; }
        .case-study-section h2 { font-family: var(--font-display); font-size: 20px; color: var(--color-primary); margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 1px; }
        .case-study-section p { font-family: var(--font-readable); font-size: 16px; line-height: 1.8; color: var(--color-text-primary); margin: 0 0 16px 0; }
        .case-study-section ul { font-family: var(--font-readable); font-size: 15px; line-height: 1.7; color: var(--color-text-primary); padding-left: 24px; margin: 0 0 16px 0; }
        .case-study-section li { margin-bottom: 12px; }
        .case-study-metrics { display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 20px; margin: 32px 0; }
        .case-study-metric { background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(134, 216, 221, 0.2); padding: 24px; text-align: center; }
        .case-study-metric-value { font-family: var(--font-display); font-size: 32px; color: var(--color-primary); margin: 0; }
        .case-study-metric-label { font-family: var(--font-body); font-size: 12px; color: var(--color-text-muted); text-transform: uppercase; letter-spacing: 1px; margin-top: 8px; }
        .case-study-gallery { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin: 32px 0; }
        .case-study-gallery img { width: 100%; height: auto; border: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-cta { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-cta a { display: inline-flex; align-items: center; gap: 8px; font-family: var(--font-display); font-size: 12px; color: var(--color-text-primary); text-decoration: none; text-transform: uppercase; letter-spacing: 1px; padding: 12px 24px; background-color: var(--color-primary-darker); border: 3px solid var(--color-primary); transition: all 0.3s ease; }
        .case-study-cta a:hover { background-color: var(--color-primary); border-color: var(--color-white); transform: translateY(-2px); }
        .case-study-nav { display: flex; justify-content: space-between; margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-nav a { font-family: var(--font-body); font-size: 14px; color: var(--color-primary); text-decoration: none; }
        @media (max-width: 600px) { .case-study-title { font-size: 28px; } .case-study-metric-value { font-size: 24px; } }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>
</head>
<body>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home"><img src="../pblogo.svg" alt="PB logo" height="40" /></a>
            <nav style="display: flex; gap: 16px;"><a href="../" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Portfolio</a></nav>
        </div>
    </header>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Deere Navigation</nav>
                <h1 class="case-study-title">DEERE: PLATFORM UNIFICATION</h1>
                <p class="case-study-subtitle">Unified navigation across 47 sites with zero-downtime migration</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Senior Lead UX</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2021 – 2023</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>8 Product Lines, 47 Sites</span></div>
                </div>
            </header>

            <div class="case-study-hero"><img src="../img/deere-03.png" alt="Deere unified navigation"></div>

            <section class="case-study-section">
                <h2>The Challenge</h2>
                <p>Deere's digital ecosystem had grown through 20+ years of acquisitions, resulting in 47 different sites with inconsistent navigation patterns. Customers couldn't easily move between products—a farmer using precision ag software had no clear path to parts ordering or financing.</p>
                <p>The challenge: unify navigation across all properties while migrating live systems with zero downtime.</p>
            </section>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">47</p><p class="case-study-metric-label">Sites Unified</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">8</p><p class="case-study-metric-label">Product Lines</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">0</p><p class="case-study-metric-label">Downtime</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">45%</p><p class="case-study-metric-label">Faster Handoffs</p></div>
            </div>

            <section class="case-study-section">
                <h2>Approach</h2>
                <ul>
                    <li><strong>Design system governance:</strong> Established shared navigation component library in Figma across 40+ teams globally</li>
                    <li><strong>Progressive rollout:</strong> Migrated sites in waves, gathering feedback and iterating between each phase</li>
                    <li><strong>Cross-functional alignment:</strong> Weekly syncs with engineering, product, and brand to ensure consistency</li>
                    <li><strong>Embedded systems support:</strong> Adapted patterns for in-cab displays and mobile apps, not just web</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Consolidated fragmented experiences into single customer view</li>
                    <li>Reduced design-to-development handoff time by 45% through standardized components</li>
                    <li>Zero downtime during migration</li>
                    <li>Established enterprise design system spanning 6 brands and 40+ product teams globally</li>
                </ul>
            </section>

            <div class="case-study-cta">
                <a href="../Peter-Bartsch-Case-Study_Deere_Consistent-Nav.pdf" target="_blank"><img src="../pdf.png" alt="" width="18" height="18"> Download Full Case Study (PDF)</a>
            </div>

            <nav class="case-study-nav">
                <a href="deere-common-ux">← Previous: Deere Common UX</a>
                <a href="fourkites-tracking">Next: FourKites Tracking →</a>
            </nav>
        </article>
    </main>
</body>
</html>
