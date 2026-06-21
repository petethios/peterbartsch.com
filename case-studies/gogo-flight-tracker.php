<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gogo: Are We There Yet? | Peter Bartsch Case Study</title>
    <meta name="description" content="The in-flight flight tracker I built 0→1 at Gogo — by finding a local position file that didn't need the air-to-ground connection. It answered the passenger's #1 question and kept ad inventory selling even when the Wi-Fi dropped.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/gogo-flight-tracker">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="Gogo: Are We There Yet? | Peter Bartsch">
    <meta property="og:description" content="An in-flight flight tracker built 0→1 on a local position file — so it answered 'are we there yet?' and kept selling ads even when the air-to-ground connection dropped.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/gogo-flight-tracker">
    <meta property="og:image" content="https://petebartsch.com/img/gogo-flight-tracker.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css?v=<?php echo filemtime(__DIR__ . '/../styles.css'); ?>">
    <link rel="stylesheet" href="case-study.css?v=<?php echo filemtime(__DIR__ . '/case-study.css'); ?>">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gogo: Are We There Yet? | Peter Bartsch">
    <meta name="twitter:description" content="An in-flight flight tracker built 0→1 on a local position file — answering 'are we there yet?' even when the connection dropped.">
    <meta name="twitter:image" content="https://petebartsch.com/img/gogo-flight-tracker.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script src="/analytics.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Gogo: Are We There Yet?",
      "description": "An in-flight flight tracker built 0→1 on a local position file independent of the air-to-ground connection — answering the passenger's #1 question and keeping sponsorship inventory live through outages.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/gogo-flight-tracker",
      "datePublished": "2026-06-21"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Gogo Flight Tracker</nav>
                <h1 class="case-study-title">GOGO: ARE WE THERE YET?</h1>
                <p class="case-study-subtitle">The in-flight flight tracker I built 0&nbsp;&rarr;&nbsp;1 at the dawn of airborne Wi-Fi&mdash;by finding a local position file that didn't need the air-to-ground connection. So it answered the passenger's #1 question, and kept the ad inventory selling, even when the Wi-Fi dropped.</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Product Manager, Signature Services</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>In-Flight UX · 0→1 Product · Real-Time Positional Data · Sponsorship</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2008 – 2012</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">0 → 1</p><p class="case-study-metric-label">Built the tracker from scratch</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Offline-proof</p><p class="case-study-metric-label">Ran on a local feed, not the ATG link</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Are we<br>there yet?</p><p class="case-study-metric-label">The #1 passenger question, answered</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">Ads stayed live</p><p class="case-study-metric-label">Sponsorship inventory through outages</p></div>
            </div>

            <div class="case-study-hero"><img src="../img/gogo-flight-tracker.png" alt="Gogo in-flight Flight Tracker — a map showing American Airlines flight 228 from Los Cabos to Chicago O'Hare with departure, arrival, and estimated times, plus a Gogo sponsorship ad"></div>

            <section class="case-study-section">
                <h2>01 · The Context</h2>
                <p>In-flight internet was brand new. Gogo's <strong>air-to-ground (ATG) network</strong>&mdash;cell towers on the ground beaming up to the plane&mdash;<em>was</em> the product, and in the early days it was touch-and-go: it dropped, it lagged, it cut out between cells and over water. The headline feature was the part you couldn't count on.</p>
                <p>Meanwhile, every passenger on every flight was asking the same thing&mdash;the question cabin crews hear most: <strong>are we there yet?</strong> Where are we, how much longer. The obvious way to answer it&mdash;show live flight progress on a map&mdash;looked like it required the connection. Which was exactly the part that kept failing.</p>
            </section>

            <section class="case-study-section">
                <h2>02 · The Discovery — a Local .json</h2>
                <p>Digging through Gogo's onboard software, I found something nobody was using: a local <strong>.json file</strong> carrying the plane's position and flight data, written on the onboard server&mdash;<strong>separate from the aircraft's avionics, and separate from the air-to-ground link.</strong> The plane always knew where it was. That data was already onboard. It didn't need the internet to exist.</p>
                <p>Which meant a flight tracker could read it <strong>locally</strong> and render progress whether or not the ATG connection was up. The reliability problem had a side door.</p>
            </section>

            <section class="case-study-section">
                <h2>03 · The Tracker — 0 → 1</h2>
                <p>I designed and shipped the in-flight flight tracker from scratch: a map with the route, the plane's position along it, departure and arrival airports, scheduled vs. actual times, and a live ETA&mdash;the passenger's "are we there yet?" answered at a glance. Because it ran off the local feed, <strong>it kept working when the connection didn't.</strong> On a product that was still finding its footing, this was the one page guaranteed to load.</p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>04 · Why It Mattered</h2>
                <p>That reliability did two jobs at once.</p>
                <p><strong>For passengers</strong>, it answered the single most-asked question on any flight&mdash;dependably. A real service win on a product whose marquee feature was still flaky.</p>
                <p style="margin-bottom: 0;"><strong>For the business</strong>, it kept the lights on. The tracker page always rendered, so it always had <strong>ad and sponsorship inventory</strong> to sell&mdash;even during a connectivity outage, when nothing else on Gogo would load. An always-on page in front of a captive audience is exactly what sponsors pay for. The tracker drove successful sponsorship deals: it turned a reliability problem into a revenue surface.</p>
            </section>

            <section class="case-study-section">
                <h2>05 · What It Proves</h2>
                <p>The headline feature was broken half the time. Instead of waiting for the network to get better, I found the data that was <em>already onboard</em> and shipped the thing passengers actually wanted&mdash;then turned that reliability into something the business could sell. The instinct underneath it&mdash;<em>the useful data is usually already there; go find it, and ship</em>&mdash;is the same one behind the Thios single-source-of-truth work and the FourKites trust dashboards two decades later. The technologies changed. The instinct didn't.</p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/gogo-flight-tracker-2.webp" alt="Gogo Flight Tracker — flight progress map with route, position, and estimated arrival" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Finding the data that's already there and shipping the thing people actually need&mdash;from a flight tracker to today's systems. Interested, or hiring?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="here-traffic.php">← Previous: HERE — Real-Time Traffic</a>
                <a href="deere-common-ux.php">Next: Deere — 34%→87% Adoption →</a>
            </nav>
        </article>
    </main>

    <script src="/case-studies/case-study-page.js"></script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
