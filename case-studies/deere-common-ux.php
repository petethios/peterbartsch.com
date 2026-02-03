<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Deere: Forced Adoption at Scale | Peter Bartsch Case Study</title>
    <meta name="description" content="How I drove 34%→87% profile completion across 500K+ users while enabling $3.8B in subscription revenue—without destroying trust.">
    <link rel="canonical" href="https://peterbartsch.com/case-studies/deere-common-ux">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="John Deere: Forced Adoption at Scale | Peter Bartsch">
    <meta property="og:description" content="Driving platform adoption without destroying trust—34% to 87% engagement.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-studies/deere-common-ux">
    <meta property="og:image" content="https://peterbartsch.com/img/deere-01.png">

    <!-- Fonts -->
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
        .case-study-gallery img { width: 100%; height: auto; border: 1px solid rgba(134, 216, 221, 0.2); cursor: pointer; transition: transform 0.3s ease, border-color 0.3s ease; }
        .case-study-gallery img:hover { transform: scale(1.02); border-color: var(--color-primary); }
        .case-study-cta { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-cta a { display: inline-flex; align-items: center; gap: 8px; font-family: var(--font-display); font-size: 12px; color: var(--color-text-primary); text-decoration: none; text-transform: uppercase; letter-spacing: 1px; padding: 12px 24px; background-color: var(--color-primary-darker); border: 3px solid var(--color-primary); transition: all 0.3s ease; }
        .case-study-cta a:hover { background-color: var(--color-primary); border-color: var(--color-white); transform: translateY(-2px); }
        .case-study-nav { display: flex; justify-content: space-between; margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(134, 216, 221, 0.2); }
        .case-study-nav a { font-family: var(--font-body); font-size: 14px; color: var(--color-primary); text-decoration: none; }
        .case-study-nav a:hover { text-decoration: underline; }
        @media (max-width: 600px) { .case-study-title { font-size: 28px; } .case-study-meta { gap: 16px; } .case-study-metric-value { font-size: 24px; } }
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
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Deere Common UX</nav>
                <h1 class="case-study-title">DEERE: FORCED ADOPTION AT SCALE</h1>
                <p class="case-study-subtitle">Driving platform-wide data adoption across 500K+ users without destroying trust—enabling $3.8B subscription revenue</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Senior Lead UX</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2020 – 2024</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Company</span><span>John Deere ($38B Enterprise)</span></div>
                </div>
            </header>

            <div class="case-study-hero"><img src="../img/deere-01.png" alt="John Deere Common UX platform"></div>

            <section class="case-study-section">
                <h2>The Challenge</h2>
                <p>John Deere needed to force platform-wide data adoption across 500K+ users—farmers, dealers, and enterprise customers—to enable a $3.8B subscription revenue stream from Automation and AI services. The catch: do it without destroying trust in a 185-year-old brand.</p>
                <p>Users had fragmented experiences across 20+ years of acquired products. Profile completion sat at 34%. Support tickets were high. The existing approach of optional data sharing wasn't working.</p>
            </section>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">34%→87%</p><p class="case-study-metric-label">Profile Completion</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">$3.8B</p><p class="case-study-metric-label">Revenue Enabled</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">-16%</p><p class="case-study-metric-label">Support Tickets</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">12</p><p class="case-study-metric-label">Languages</p></div>
            </div>

            <section class="case-study-section">
                <h2>Approach</h2>
                <ul>
                    <li><strong>Multi-channel forced adoption strategy:</strong> Designed progressive disclosure that made data sharing feel valuable rather than extractive</li>
                    <li><strong>Trust through transparency:</strong> Clear value exchange messaging—"Share your equipment data to unlock predictive maintenance"</li>
                    <li><strong>Dealer enablement:</strong> Built tools so dealers could help customers complete profiles, reducing friction</li>
                    <li><strong>Graceful degradation:</strong> Non-compliant users could still access core features, but premium features required profile completion</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Increased authenticated engagement from 34% to 87%</li>
                    <li>Reduced support tickets by 16%</li>
                    <li>Enabled $3.8B in subscription revenue from Automation and AI services</li>
                    <li>Deployed across 12 languages and 8 product lines</li>
                    <li>Improved dealer support efficiency by 28%</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/deere-02.png" alt="Deere platform overview" loading="lazy">
                    <img src="../img/deere-03.png" alt="Deere user flow" loading="lazy">
                    <img src="../img/deere-04.png" alt="Deere design system" loading="lazy">
                    <img src="../img/deere-05.png" alt="Deere mobile experience" loading="lazy">
                </div>
            </section>

            <div class="case-study-cta">
                <a href="../Peter-Bartsch-Case-Study_Deere_Common-UX.pdf" target="_blank"><img src="../pdf.png" alt="" width="18" height="18"> Download Full Case Study (PDF)</a>
            </div>

            <nav class="case-study-nav">
                <a href="thios">← Previous: Thios</a>
                <a href="deere-nav">Next: Deere Navigation →</a>
            </nav>
        </article>
    </main>

    <script>if (typeof gtag === 'function') { gtag('event', 'case_study_view', { 'event_category': 'engagement', 'event_label': 'deere-common-ux' }); }</script>
</body>
</html>
