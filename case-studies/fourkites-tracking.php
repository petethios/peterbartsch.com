<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourKites: Data Trust Design | Peter Bartsch Case Study</title>
    <meta name="description" content="Making customers trust real-time tracking when data is uncertain—'Never hide uncertainty' as a design principle.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/fourkites-tracking">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="FourKites: Data Trust Design | Peter Bartsch">
    <meta property="og:description" content="Designing for trust when data is uncertain—predictive analytics 6-12 hours ahead of competitors.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/fourkites-tracking">
    <meta property="og:image" content="https://petebartsch.com/img/fourkites-01.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="case-study.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <style>
        .highlight-quote { font-family: var(--font-display); font-size: 24px; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 20px; margin: 32px 0; }
        @media (max-width: 600px) { .highlight-quote { font-size: 20px; } }
    </style>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FourKites: Data Trust Design | Peter Bartsch">
    <meta name="twitter:description" content="Designing for trust when data is uncertain—predictive analytics 6-12 hours ahead of competitors.">
    <meta name="twitter:image" content="https://petebartsch.com/img/fourkites-01.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "FourKites: Designing for Uncertainty",
      "description": "Introducing confidence levels that showed uncertainty instead of hiding it—41% retention increase.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/fourkites-tracking"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Data Trust</nav>
                <h1 class="case-study-title">FOURKITES: DATA TRUST</h1>
                <p class="case-study-subtitle">Designing for trust when real-time data is uncertain, incomplete, or conflicting—enabling mission-critical decisions</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Lead UX / Manager</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>Real-time Visibility · Predictive Analytics · Control Tower UX</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2017 – 2020</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">41%</p><p class="case-study-metric-label">Retention Increase</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">6-12hr</p><p class="case-study-metric-label">Earlier Predictions</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">$120K</p><p class="case-study-metric-label">Avg Contract Growth</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">30+</p><p class="case-study-metric-label">Fortune 2000 Clients</p></div>
            </div>

            <div class="case-study-hero"><img src="../img/fourkites-01.png" alt="FourKites real-time tracking dashboard"></div>

            <section class="case-study-section">
                <h2>The Strategic Problem</h2>
                <p>FourKites' core product promise was <strong>real-time visibility that customers could trust</strong>—but real-world supply chain data is messy: duplicate sources, stale GPS pings, conflicting carrier feeds, and ETAs that shift every hour.</p>
                <p><strong>The question wasn't "how do we show tracking?" It was: how do we design a visibility experience that customers trust enough to make million-dollar decisions?</strong></p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>Why This Was Hard</h2>
                <p>Trust in data products is fragile—one bad prediction can undo months of credibility:</p>
                <ul>
                    <li><strong>Data quality:</strong> 10M+ daily tracking events from trucks, trains, ships, and planes—often uncertain, incomplete, or conflicting</li>
                    <li><strong>Technical reality:</strong> GPS signals drop, carriers report late, ETAs shift constantly</li>
                    <li><strong>User stakes:</strong> Fortune 500 logistics managers making million-dollar decisions based on this data</li>
                    <li><strong>Competitive pressure:</strong> Needed to differentiate on trust, not just features</li>
                    <li><strong>Hypergrowth context:</strong> Building while scaling from $3M to $100M ARR</li>
                </ul>
                <p style="margin-top: 16px; margin-bottom: 0;"><strong>Hiding uncertainty would have been easier. But it would have destroyed trust the moment predictions failed.</strong></p>
            </section>

            <p class="highlight-quote">"Never hide uncertainty"</p>

            <section class="case-study-section">
                <h2>Strategy</h2>
                <p>We established <strong>"Never hide uncertainty"</strong> as the core design principle. This meant:</p>
                <ul>
                    <li><strong>Confidence as First-Class Data:</strong> Show data confidence alongside status—users know when to trust and when to verify</li>
                    <li><strong>Progressive Disclosure:</strong> Surface reliable status at a glance; reveal sources, confidence intervals, and alternatives on demand</li>
                    <li><strong>Predictive, Not Reactive:</strong> Predict problems 6-12 hours before they happen—give users time to act, not just react</li>
                    <li><strong>Action-First Alerts:</strong> Every notification includes recommended actions, not just status updates</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Execution</h2>
                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Real-Time Control Tower</h3>
                <p>Designed the flagship visibility platform showing shipment status, confidence levels, and predicted exceptions. Users could drill into any data point to understand sources and reliability.</p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Predictive Analytics Dashboard</h3>
                <p>Built interfaces that surfaced delays 6-12 hours before traditional ETAs—turning logistics managers from firefighters into planners.</p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Alert System Redesign</h3>
                <p>Transformed alerts from "something happened" to "here's what happened, why, and what you should do about it."</p>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Increased <strong>customer retention by 41%</strong> YoY</li>
                    <li>Boosted <strong>average contract value by $120K</strong> annually</li>
                    <li>Predictive analytics surfaced issues <strong>6–12 hours earlier</strong> than competitors</li>
                    <li>Enabled a <strong>real-time control tower</strong> trusted by 30+ Fortune 2000 enterprises</li>
                    <li>Made FourKites' platform a <strong>primary driver of 3× customer expansion</strong></li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>What This Unlocked</h2>
                <p>This work established:</p>
                <ul>
                    <li>A <strong>differentiated market position</strong>—trust became FourKites' competitive moat</li>
                    <li>A <strong>design principle</strong> ("Never hide uncertainty") now used across all products</li>
                    <li>The <strong>foundation for the Driver app</strong>—data trust enabled the incentive design work that followed</li>
                </ul>
                <p><strong>The real outcome was proving that transparency about uncertainty builds more trust than false confidence.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/fourkites-02.png" alt="FourKites dashboard" loading="lazy">
                    <img src="../img/fourkites-03.png" alt="FourKites predictive analytics" loading="lazy">
                    <img src="../img/fourkites-04.png" alt="FourKites mobile app" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Interested in discussing enterprise design challenges or exploring opportunities?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="deere-nav.php">← Previous: Platform Unification</a>
                <a href="fourkites-driver.php">Next: Incentive Design →</a>
            </nav>
        </article>
    </main>

    <script>if (typeof gtag === 'function') { gtag('event', 'case_study_view', { 'event_category': 'engagement', 'event_label': 'fourkites-tracking' }); }</script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
