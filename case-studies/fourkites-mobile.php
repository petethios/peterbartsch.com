<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourKites Mobile: Subtract vs Compress | Peter Bartsch Case Study</title>
    <meta name="description" content="One real-time system, two opposite mobile problems — a driver app designed by subtraction and a yard-manager view designed by compression. Mobile craft is judgment, not a default.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/fourkites-mobile">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="FourKites Mobile: Subtract vs Compress | Peter Bartsch">
    <meta property="og:description" content="One real-time system, two opposite mobile problems. Mobile craft is knowing which one the moment calls for.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/fourkites-mobile">
    <meta property="og:image" content="https://petebartsch.com/img/fourkites-mobile-dash.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css?v=<?php echo filemtime(__DIR__ . '/../styles.css'); ?>">
    <link rel="stylesheet" href="case-study.css?v=<?php echo filemtime(__DIR__ . '/case-study.css'); ?>">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FourKites Mobile: Subtract vs Compress | Peter Bartsch">
    <meta name="twitter:description" content="One real-time system, two opposite mobile problems.">
    <meta name="twitter:image" content="https://petebartsch.com/img/fourkites-mobile-dash.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script src="/analytics.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "FourKites Mobile: Subtract vs Compress",
      "description": "One real-time system, two opposite mobile problems — a driver app designed by subtraction, a yard-manager view designed by compression.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/fourkites-mobile",
      "datePublished": "2026-05-05"
    }
    </script>

    <style>
        /* ============ THESIS SPLIT — the signature device ============
           Two columns that embody the contrast: left = subtract (calm, sparse),
           right = compress (dense, layered). Themed with site CSS variables so it
           adapts across the era themes; safe fallbacks for any theme that omits them. */
        .cs-thesis {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            margin: 40px -24px;
            border-top: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
            border-bottom: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-thesis__col { padding: 32px 24px; }
        .cs-thesis__col--subtract {
            border-right: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-thesis__col--compress {
            background: var(--cs-metric-bg, rgba(0, 0, 0, 0.4));
        }
        .cs-thesis__tag {
            font-family: var(--font-display, 'Space Mono', monospace);
            font-size: 11px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--color-primary);
            margin: 0 0 14px 0;
        }
        .cs-thesis__col h3 {
            font-family: var(--font-display);
            font-size: 19px;
            line-height: 1.25;
            color: var(--color-white);
            margin: 0 0 12px 0;
        }
        .cs-thesis__col p {
            font-family: var(--font-readable);
            font-size: 15.5px;
            line-height: 1.7;
            color: var(--cs-text-color, rgba(255, 255, 255, 0.85));
            margin: 0;
        }
        .cs-thesis__statement {
            margin-top: 22px;
            font-family: var(--font-display);
            font-size: clamp(22px, 4vw, 30px);
            line-height: 1.12;
            letter-spacing: -0.01em;
            color: var(--color-primary);
            text-shadow: var(--cs-title-glow, 0 0 14px rgba(134, 216, 221, 0.3));
        }
        .cs-datarow {
            font-family: var(--font-readable, 'Space Mono', monospace);
            font-size: 12.5px;
            line-height: 1.5;
            color: var(--cs-text-color, rgba(255, 255, 255, 0.8));
            margin-top: 20px;
            display: grid;
            gap: 6px;
        }
        .cs-datarow span {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            border-bottom: 1px dotted var(--cs-border-color, rgba(134, 216, 221, 0.25));
            padding-bottom: 5px;
        }
        .cs-datarow em { color: var(--color-primary); font-style: normal; }

        /* ============ DECISION LIST — the craft moves screeners read ============ */
        .cs-decisions {
            display: grid;
            gap: 0;
            margin-top: 28px;
            border-top: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-decision {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 20px;
            padding: 22px 0;
            border-bottom: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-decision__num {
            font-family: var(--font-display, 'Space Mono', monospace);
            color: var(--color-primary);
            font-size: 15px;
            padding-top: 2px;
        }
        .cs-decision h4 {
            font-family: var(--font-display);
            font-size: 16px;
            color: var(--color-white);
            margin: 0 0 6px 0;
        }
        .cs-decision p {
            font-family: var(--font-readable);
            font-size: 15px;
            line-height: 1.65;
            color: var(--cs-text-color, rgba(255, 255, 255, 0.82));
            margin: 0;
        }

        @media (max-width: 720px) {
            .cs-thesis { grid-template-columns: 1fr; margin: 32px -16px; }
            .cs-thesis__col--subtract {
                border-right: none;
                border-bottom: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
            }
            .cs-decision { grid-template-columns: 34px 1fr; gap: 12px; }
        }

        /* Two-up hero — driver app | yard-manager app, side by side on a dark
           stage so the "two opposite problems" thesis lands in one glance. */
        .cs-hero-duo {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin: 40px 0;
            padding: 24px;
            background: linear-gradient(180deg, #14181c 0%, #0c0f12 100%);
            border: 1px solid rgba(134, 216, 221, 0.18);
            border-radius: 12px;
        }
        .cs-hero-duo figure { margin: 0; text-align: center; }
        .cs-hero-duo img {
            width: 100%;
            height: 440px;
            object-fit: contain;
            object-position: top center;
            border-radius: 6px;
        }
        .cs-hero-duo figcaption {
            font-family: var(--font-display, 'Space Mono', monospace);
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--color-primary);
            margin-top: 12px;
        }
        @media (max-width: 600px) {
            .cs-hero-duo { grid-template-columns: 1fr; gap: 24px; padding: 16px; }
            .cs-hero-duo img { height: auto; max-height: 460px; }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Mobile</nav>
                <h1 class="case-study-title">FOURKITES: ONE SYSTEM, TWO MOBILE PROBLEMS</h1>
                <p class="case-study-subtitle">A driver app stripped to near-nothing, and a yard-manager view packed with live data—because mobile craft is knowing which one the moment calls for.</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Lead UX / Founding Designer</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Platform</span><span>iOS · Android</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2017 – 2020</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">10M+</p><p class="case-study-metric-label">Tracking Events / Day</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">3×</p><p class="case-study-metric-label">Customer Expansion</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">2</p><p class="case-study-metric-label">Opposite UX Disciplines</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">iOS · Android</p><p class="case-study-metric-label">Platforms Shipped</p></div>
            </div>

            <div class="cs-hero-duo">
                <figure>
                    <img src="../img/fourkites-mobile-driver.jpg" alt="FourKites CarrierLink driver app — facility ratings and average wait times" loading="eager">
                    <figcaption>Driver app · CarrierLink</figcaption>
                </figure>
                <figure>
                    <img src="../img/fourkites-mobile-dash.png" alt="FourKites app — yard-manager dashboard: at-risk, ETA, and loads at a glance" loading="eager">
                    <figcaption>Yard manager · FourKites</figcaption>
                </figure>
            </div>

            <!-- THESIS SPLIT -->
            <section class="cs-thesis" aria-label="Two opposite mobile problems">
                <div class="cs-thesis__col cs-thesis__col--subtract">
                    <p class="cs-thesis__tag">The Driver app — subtract</p>
                    <h3>Built for a glance at 65&nbsp;mph.</h3>
                    <p>A driver is in a cab, moving, gloves on, attention on the road. Every design decision was subtraction: one-handed reach, the fewest possible taps, legible at a glance, forgiving on a dropped signal.</p>
                    <p class="cs-thesis__statement">One screen.<br>One action.<br>No mistakes.</p>
                </div>
                <div class="cs-thesis__col cs-thesis__col--compress">
                    <p class="cs-thesis__tag">The Yard Manager — compress</p>
                    <h3>Built to run a whole facility from a phone.</h3>
                    <p>A yard manager tracks dozens of moving assets in real time. The opposite challenge: maximum information density on a small screen, without it ever tipping into noise.</p>
                    <div class="cs-datarow">
                        <span>TRAILER 4471 <em>· dock 12 · on-time</em></span>
                        <span>TRAILER 2208 <em>· yard · delayed 0:42</em></span>
                        <span>TRAILER 9135 <em>· gate · arriving</em></span>
                        <span>+ 38 more in view</span>
                    </div>
                </div>
            </section>

            <section class="case-study-section">
                <h2>01 · The Problem</h2>
                <p>Real-time logistics doesn't stop when the user leaves their desk. FourKites tracks freight in real time — <strong>10M+ GPS and telematics events a day</strong> across thousands of shipments. The web control tower handled the office. But the people who actually move freight aren't at a desk: they're drivers on the road and yard managers walking a facility.</p>
                <p>Mobile wasn't a smaller version of the web product. It was two distinct products with two distinct users, two distinct contexts, and — critically — two <strong>opposite</strong> design requirements. Getting one right would have been a normal mobile project. Getting both right, coherently, on the same platform, is the work.</p>
            </section>

            <section class="case-study-section">
                <h2>02 · The Driver App — Designing by Subtraction</h2>
                <p>The hardest thing to design is the screen with almost nothing on it. A driver opens the app in a moving truck. The design constraint isn't aesthetic, it's <strong>safety</strong>: anything that requires reading, precision, or thought is a failure. So the whole craft was removing — until what remained could be operated in a single glance, with one thumb, on a screen catching glare through a windshield.</p>
                <div class="cs-decisions">
                    <div class="cs-decision"><span class="cs-decision__num">a.</span><div><h4>One primary action per screen</h4><p>Whatever the driver needed to do next was the only thing competing for attention. No secondary actions within reach of a distracted tap.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">b.</span><div><h4>Thumb-reach and oversized targets</h4><p>Every interactive element lived in the lower-screen one-handed zone, sized well beyond minimums so a gloved thumb couldn't miss.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">c.</span><div><h4>Glanceable state, not text</h4><p>Status read as color and shape before words — recognizable in the half-second a driver can spare.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">d.</span><div><h4>Forgiving on a dropped signal</h4><p>Actions queued and confirmed when connectivity returned; the driver never waited on a spinner or lost an update in a dead zone.</p></div></div>
                </div>
            </section>

            <section class="case-study-section">
                <h2>03 · The Yard Manager — Designing by Compression</h2>
                <p>The opposite discipline: maximum density that never tips into noise. A yard manager isn't driving — they're orchestrating. Dozens of trailers, docks, and gates, all moving, all live. Here the failure mode flips: <strong>too little</strong> information means they walk the lot to find out what the screen should have told them. The craft was fitting a control-room's worth of live data onto a phone and keeping it scannable.</p>
                <div class="cs-decisions">
                    <div class="cs-decision"><span class="cs-decision__num">a.</span><div><h4>Information hierarchy did the heavy lifting</h4><p>Typographic weight, spacing, and a disciplined color system let a single row carry ID, location, status, and dwell time without feeling crowded.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">b.</span><div><h4>Exceptions surfaced themselves</h4><p>The manager scanned for problems, so delays and anomalies were weighted to pull the eye first — the normal stuff stayed quiet.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">c.</span><div><h4>Progressive disclosure over fewer screens</h4><p>Density up front, detail one tap deep — so power users moved fast without the list ever hiding what mattered.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">d.</span><div><h4>Real-time without the jitter</h4><p>Live updates settled in calmly instead of reshuffling under the user's thumb — the list stayed trustworthy to read while it changed.</p></div></div>
                </div>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>04 · What It Proves</h2>
                <p>Mobile craft is judgment, not a default. The same designer, the same real-time system, the same week — and two interfaces that share almost no visual DNA, because their users didn't share a context. The driver app and the yard manager aren't a style; they're two correct answers to two different questions.</p>
                <p style="margin-bottom: 0;">That's the throughline of how I work on mobile: <strong>start from the user's hands and their moment</strong>, then decide whether the job is subtraction or compression. Most products need both, somewhere.</p>
            </section>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value" style="font-size:18px;">Subtraction</p><p class="case-study-metric-label">Driver · safety-first · one-handed</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value" style="font-size:18px;">Compression</p><p class="case-study-metric-label">Yard manager · density · exception-led</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value" style="font-size:18px;">One spine</p><p class="case-study-metric-label">Single real-time data platform</p></div>
            </div>

            <section class="case-study-section">
                <h2>05 · Mobile Range — Beyond FourKites</h2>
                <p>This wasn't a one-off. The driver-vs-manager problem is a pattern I've designed for repeatedly — complex operational data, put in the hands of people who are rarely at a desk.</p>
                <div class="cs-decisions">
                    <div class="cs-decision"><span class="cs-decision__num">→</span><div><h4>John Deere — Operations Center Mobile</h4><p>Farm operations management on mobile: equipment, fields, and agronomic data for operators running a business from the cab. Enterprise complexity, field conditions.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">→</span><div><h4>John Deere — OnLink Mobile</h4><p>Connected operations on a phone — another data-dense enterprise surface for users who needed answers on the move, not at a workstation.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">→</span><div><h4>Earlier consumer mobile</h4><p>Gogo and Trapster — consumer apps that grounded the native-platform instincts the enterprise work later leaned on.</p></div></div>
                </div>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/fourkites-mobile-list.png" alt="FourKites — dense, exception-led load list with late-load countdowns" loading="lazy">
                    <img src="../img/fourkites-mobile-map.jpg" alt="FourKites — live tracking map with route and stops" loading="lazy">
                    <img src="../img/fourkites-mobile-timeline.png" alt="FourKites — chronological load event timeline" loading="lazy">
                    <img src="../img/fourkites-mobile-filters.png" alt="FourKites — load status filters and progressive disclosure" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Complex systems, made clear — on every screen they live on. Interested in mobile craft for operational data, or hiring?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="fourkites-driver.php">← Previous: Incentive Design</a>
                <a href="here-traffic.php">Next: HERE — Real-Time Traffic →</a>
            </nav>
        </article>
    </main>

    <script src="/case-studies/case-study-page.js"></script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
