<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourKites: Data Trust Design | Peter Bartsch Case Study</title>
    <meta name="description" content="Making customers trust real-time tracking when data is uncertain—'Never hide uncertainty' as a design principle.">
    <link rel="canonical" href="https://peterbartsch.com/case-studies/fourkites-tracking">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="FourKites: Data Trust Design | Peter Bartsch">
    <meta property="og:description" content="Designing for trust when data is uncertain—predictive analytics 6-12 hours ahead of competitors.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-studies/fourkites-tracking">

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
        .highlight-quote { font-family: var(--font-display); font-size: 24px; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 20px; margin: 32px 0; }
        @media (max-width: 600px) { .case-study-title { font-size: 28px; } .case-study-metric-value { font-size: 24px; } .highlight-quote { font-size: 20px; } }
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
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / FourKites Tracking</nav>
                <h1 class="case-study-title">FOURKITES: DATA TRUST</h1>
                <p class="case-study-subtitle">Making customers trust real-time tracking when underlying data is uncertain, incomplete, or conflicting</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Lead UX / Manager</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2017 – 2020</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Growth</span><span>$3M → $100M ARR</span></div>
                </div>
            </header>

            <div class="case-study-hero"><img src="../img/fourkites-01.png" alt="FourKites real-time tracking dashboard"></div>

            <section class="case-study-section">
                <h2>The Challenge</h2>
                <p>FourKites processed 10M+ daily tracking events from trucks, trains, ships, and planes. The problem: this data was often uncertain, incomplete, or conflicting. GPS signals drop. Carriers report late. ETAs shift constantly.</p>
                <p>Customers—logistics managers at Fortune 500 companies—needed to trust the system enough to make million-dollar decisions. How do you design for trust when you can't guarantee accuracy?</p>
            </section>

            <p class="highlight-quote">"Never hide uncertainty"</p>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">41%</p><p class="case-study-metric-label">Retention Increase</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">6-12hr</p><p class="case-study-metric-label">Earlier Predictions</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">$120K</p><p class="case-study-metric-label">Avg Contract Growth</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">30+</p><p class="case-study-metric-label">Fortune 2000 Clients</p></div>
            </div>

            <section class="case-study-section">
                <h2>Approach</h2>
                <ul>
                    <li><strong>"Never hide uncertainty":</strong> Established this as a core design principle. If confidence was low, we showed it—with clear explanations of why</li>
                    <li><strong>Progressive disclosure:</strong> Surface level showed simple status; drill-down revealed data sources, confidence intervals, and alternative scenarios</li>
                    <li><strong>Predictive analytics:</strong> Instead of just showing current state, we predicted problems 6-12 hours before they happened</li>
                    <li><strong>Actionable intelligence:</strong> Every alert included recommended actions, not just notifications</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Designed flagship real-time control tower serving 30+ Fortune 2000 companies (Anheuser-Busch, Georgia-Pacific, Tyson)</li>
                    <li>Predictive analytics identified delays 6-12 hours earlier than competitors</li>
                    <li>Increased customer retention 41%</li>
                    <li>Expanded average contract value by $120K annually</li>
                    <li>Products became primary driver of 3x customer expansion</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/fourkites-02.png" alt="FourKites dashboard" loading="lazy">
                    <img src="../img/fourkites-03.png" alt="FourKites predictive analytics" loading="lazy">
                    <img src="../img/fourkites-04.png" alt="FourKites mobile app" loading="lazy">
                </div>
            </section>

            <div class="case-study-cta">
                <a href="../Peter-Bartsch-Case-Study_FourKites_Tracking.pdf" target="_blank"><img src="../pdf.png" alt="" width="18" height="18"> Download Full Case Study (PDF)</a>
            </div>

            <nav class="case-study-nav">
                <a href="deere-nav">← Previous: Deere Navigation</a>
                <a href="fourkites-driver">Next: FourKites Driver →</a>
            </nav>
        </article>
    </main>
</body>
</html>
