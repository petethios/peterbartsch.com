<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERE: Real-Time Traffic, Before the World Had It | Peter Bartsch Case Study</title>
    <meta name="description" content="A convention demo putting HERE's near-real-time traffic in front of automakers — a wall of screens that grew 3 to 9 as we showed more data, depth, and history. Powered by DEMPSY, a beat before live traffic and Hadoop reset the field.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/here-traffic">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="HERE: Real-Time Traffic, Before Live Traffic | Peter Bartsch">
    <meta property="og:description" content="A convention demo of HERE's near-real-time traffic for automakers — a wall of screens that grew 3 to 9. Early to live traffic, before the field moved.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/here-traffic">
    <meta property="og:image" content="https://petebartsch.com/img/og-here-traffic.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css?v=<?php echo filemtime(__DIR__ . '/../styles.css'); ?>">
    <link rel="stylesheet" href="case-study.css?v=<?php echo filemtime(__DIR__ . '/case-study.css'); ?>">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HERE: Real-Time Traffic, Before Live Traffic | Peter Bartsch">
    <meta name="twitter:description" content="A convention demo of HERE's near-real-time traffic for automakers — early to live traffic, before the field moved.">
    <meta name="twitter:image" content="https://petebartsch.com/img/og-here-traffic.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script src="/analytics.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "HERE: Real-Time Traffic, Before the World Had It",
      "description": "A convention demo of HERE's near-real-time traffic for automakers, powered by DEMPSY — a growing wall of screens, early to live traffic before the field moved.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/here-traffic",
      "datePublished": "2026-05-05"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / HERE Traffic</nav>
                <h1 class="case-study-title">HERE: REAL-TIME TRAFFIC, BEFORE THE WORLD HAD IT</h1>
                <p class="case-study-subtitle">A convention demo putting HERE's near-real-time traffic in front of automakers—a wall of screens that grew 3 → 6 → 9 as we packed in more data, more depth, and more history. Powered by DEMPSY, a beat before live traffic (and Hadoop) reset the field.</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Product Marketing Manager, HERE Traffic</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>Convention Demo · Real-Time Data Viz · Probe Telematics · DEMPSY</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2012 – 2014</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">3 → 9</p><p class="case-study-metric-label">Screens · more data each time</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Near&nbsp;real-time</p><p class="case-study-metric-label">Traffic + probe feed</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Auto OEMs</p><p class="case-study-metric-label">The convention audience</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Team of 3</p><p class="case-study-metric-label">PM · demo · fixer · UI vision</p></div>
            </div>

            <div class="case-study-hero"><img src="../img/nokia-here-03.png" alt="A large screen showing a live world map with real-time traffic and probe-data flows, at a HERE / Nokia convention demo"></div>

            <section class="case-study-section">
                <h2>01 · The Context</h2>
                <p>HERE—Nokia's mapping arm—sold maps and traffic data to the world's automakers. The asset was a firehose of <strong>GPS probe data</strong> streaming in from connected vehicles, everywhere, continuously. But on a convention floor, in front of OEM buyers, a firehose of telematics is abstract. You can't sell a spreadsheet.</p>
                <p>The job was to <strong>make the data undeniable</strong>—to turn an invisible advantage into something an automaker exec could stand in front of and instantly believe: the world is moving, we can see all of it, right now, and we can hand you that.</p>
            </section>

            <section class="case-study-section">
                <h2>02 · The Wall</h2>
                <p>The answer was physical: a <strong>wall of large screens running a near-real-time traffic and probe feed</strong>, set up at conventions as a live demo of what HERE's data could do. It started with <strong>three</strong> screens. As the team tuned the pipeline to pull in <strong>more data, more depth, and more history</strong>—not just where traffic is now, but how it moves and how it has moved—the wall grew to <strong>six</strong>, then <strong>nine</strong>. Each expansion existed to show more.</p>
                <p>The whole thing was <strong>a team of three</strong>. I didn't write the shell script that drove it—but I product-marketing-managed it, <strong>ran the demo on the convention floor</strong>, was the <strong>fixer</strong> when it broke mid-show, and was the one <strong>envisioning the UI</strong>—what the screens should actually show, and how to make nine of them read as one living map instead of nine busy ones.</p>
            </section>

            <section class="case-study-section">
                <h2>03 · Under the Hood — DEMPSY</h2>
                <p>The wall did double duty: it was also a showcase for <strong>DEMPSY</strong>, the open-source real-time stream-processing engine HERE had built as an alternative to Hadoop. The live feed was the proof DEMPSY worked—billions of probe events, processed and rendered as motion, in near real time. The demo sold two stories at once: HERE's traffic data, and the engine that could move it fast enough to feel live.</p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>04 · Why It Mattered — and the Twist</h2>
                <p>For its moment, this was <strong>genuinely ahead</strong>. Showing real-time global traffic as a living thing in 2012–2014 was a "wow," not a default. The wall previewed the live-traffic era a beat before it arrived.</p>
                <p>Then the field moved—twice. Within a couple of years <strong>Google, Waze, and Android made live traffic ubiquitous</strong>, and <strong>Hadoop won the stream-processing world DEMPSY was built for</strong>. Both bets this demo championed were early, right, and ultimately overtaken.</p>
                <p style="margin-bottom: 0;"><strong>That's not a footnote—it's the lesson.</strong> Being early is its own kind of being right, and the instinct underneath both bets—<em>make real-time data legible enough to feel</em>—outlasted the specific technologies by a decade.</p>
            </section>

            <section class="case-study-section">
                <h2>05 · What It Proves</h2>
                <p>The thread from that wall runs straight through everything since: real-time logistics at FourKites, trust-in-uncertain-data dashboards, enterprise systems at Deere. It started here—on a convention floor, with three people, a shell script, and nine screens—betting that the right visualization could make people <em>feel</em> the data before the rest of the world caught up. The technologies got commoditized. The instinct didn't.</p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/nokia-here-02.png" alt="Near-real-time city traffic map from HERE" loading="lazy">
                    <img src="../img/nokia-here-01.png" alt="HERE routing: blending historical, predictive, and real-time traffic into one ETA" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Making complex, real-time data legible — from a wall of screens to today's systems. Interested, or hiring?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="fourkites-mobile.php">← Previous: Mobile — Subtract vs Compress</a>
                <a href="thios.php">Next: Design Systems on Agent Rails →</a>
            </nav>
        </article>
    </main>

    <script src="/case-studies/case-study-page.js"></script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
