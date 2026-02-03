<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourKites: Incentive Design | Peter Bartsch Case Study</title>
    <meta name="description" content="Reconciling competing driver/shipper incentives—41% retention increase through behavioral design.">
    <link rel="canonical" href="https://peterbartsch.com/case-studies/fourkites-driver">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="FourKites: Incentive Design | Peter Bartsch">
    <meta property="og:description" content="Reconciling competing driver/shipper incentives—41% retention increase.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-studies/fourkites-driver">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <style>
        .case-study-page { max-width: 900px; margin: 0 auto; padding: 40px 24px 80px; }
        .case-study-header { margin-bottom: 40px; }
        .case-study-breadcrumb { font-family: var(--font-body); font-size: 13px; color: var(--color-text-muted); margin-bottom: 20px; }
        .case-study-breadcrumb a { color: var(--color-primary); text-decoration: none; }
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
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / FourKites Driver</nav>
                <h1 class="case-study-title">FOURKITES: INCENTIVE DESIGN</h1>
                <p class="case-study-subtitle">Reconciling competing driver/shipper incentives through behavioral design</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Lead UX / Manager</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2018 – 2019</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Focus</span><span>Mobile App, Behavioral Design</span></div>
                </div>
            </header>

            <div class="case-study-hero"><img src="../img/fourkites-05.png" alt="FourKites driver mobile app"></div>

            <section class="case-study-section">
                <h2>The Challenge</h2>
                <p>FourKites needed drivers to share their location—but drivers had no incentive to do so. Worse, they had reasons NOT to: sharing location meant shippers could see if they stopped for breaks, took detours, or ran late.</p>
                <p>The fundamental tension: shippers wanted maximum visibility; drivers wanted privacy and autonomy. How do you design an app that both parties will actually use?</p>
            </section>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">41%</p><p class="case-study-metric-label">Retention Increase</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">3x</p><p class="case-study-metric-label">Customer Expansion</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">10M+</p><p class="case-study-metric-label">Daily Events</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">1→10</p><p class="case-study-metric-label">Team Scaled</p></div>
            </div>

            <section class="case-study-section">
                <h2>Approach</h2>
                <ul>
                    <li><strong>Driver-first value proposition:</strong> Showed drivers benefits they cared about—proof of detention time for billing disputes, traffic-aware routing, facility ratings from other drivers</li>
                    <li><strong>Minimal friction:</strong> One-tap trip start, automatic detection when possible, background tracking that didn't kill battery</li>
                    <li><strong>Privacy controls:</strong> Drivers could see exactly what shippers could see, with clear controls over what was shared</li>
                    <li><strong>Gamification:</strong> Subtle rewards for consistent participation without feeling manipulative</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Created driver app that drivers actually wanted to use—not just tolerated</li>
                    <li>41% increase in retention across the platform</li>
                    <li>Became primary driver of 3x customer expansion</li>
                    <li>Scaled design team from 1 (me) to 10 across Chicago and Chennai</li>
                    <li>Established component library and design operations that reduced inconsistencies by 65%</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/fourkites-06.png" alt="FourKites driver app screens" loading="lazy">
                    <img src="../img/fourkites-07.png" alt="FourKites trip tracking" loading="lazy">
                    <img src="../img/fourkites-08.png" alt="FourKites driver dashboard" loading="lazy">
                </div>
            </section>

            <div class="case-study-cta">
                <a href="../Peter-Bartsch-Case-Study_FourKites_Driver.pdf" target="_blank"><img src="../pdf.png" alt="" width="18" height="18"> Download Full Case Study (PDF)</a>
            </div>

            <nav class="case-study-nav">
                <a href="fourkites-tracking">← Previous: FourKites Tracking</a>
                <a href="thios">Next: Thios →</a>
            </nav>
        </article>
    </main>
</body>
</html>
