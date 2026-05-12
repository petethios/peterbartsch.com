<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thios: The Open-Hardware Flywheel | Peter Bartsch Case Study</title>
    <meta name="description" content="One OnShape CAD file drives the bill of materials, the configurator's 3D, and the share-alike feedback loop. Open hardware as distribution strategy for a solo founder.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/thios-flywheel">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="Thios: The Open-Hardware Flywheel | Peter Bartsch">
    <meta property="og:description" content="One CAD file drives the BoM, the configurator's 3D, and a maker flywheel that scales without building factories.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/thios-flywheel">
    <meta property="og:image" content="https://petebartsch.com/img/og-thios-agent-rails.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="case-study.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Thios: The Open-Hardware Flywheel | Peter Bartsch">
    <meta name="twitter:description" content="One CAD file drives the BoM, the configurator's 3D, and a maker flywheel that scales without building factories.">
    <meta name="twitter:image" content="https://petebartsch.com/img/og-thios-agent-rails.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Thios: The Open-Hardware Flywheel",
      "description": "One OnShape CAD file drives the BoM, the configurator's 3D, and a maker feedback loop. Open hardware as distribution strategy.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/thios-flywheel",
      "datePublished": "2026-05-11"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb">
                    <a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Thios &mdash; Flywheel
                </nav>
                <h1 class="case-study-title">THIOS: THE OPEN-HARDWARE FLYWHEEL</h1>
                <p class="case-study-subtitle">One CAD file drives the BoM, the configurator's 3D, and a maker feedback loop that improves the CAD &middot; Capital-light distribution for a solo founder</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Role</span>
                        <span>Founder &amp; Lead Designer</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Scope</span>
                        <span>Open Hardware Strategy &middot; CAD &middot; Configurator &middot; Distribution &middot; Brand</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Timeline</span>
                        <span>2024 &ndash; Present</span>
                    </div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric">
                    <p class="case-study-metric-value">1</p>
                    <p class="case-study-metric-label">CAD source of truth</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">6</p>
                    <p class="case-study-metric-label">Sphere variants live</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">OHL-S</p>
                    <p class="case-study-metric-label">CERN strong-reciprocal</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">3</p>
                    <p class="case-study-metric-label">Builder-tool tiers</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">5</p>
                    <p class="case-study-metric-label">First Builders program</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">0</p>
                    <p class="case-study-metric-label">Factories built</p>
                </div>
            </div>

            <!-- 5-node flywheel: CAD as the spine, perimeter loop = the business model -->
            <figure class="flywheel-stage" aria-labelledby="flywheel-caption">
                <!-- Desktop / tablet: radial layout -->
                <svg class="flywheel flywheel--radial" viewBox="0 0 640 580" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Five-node open-hardware flywheel with OnShape CAD at the center">
                    <defs>
                        <marker id="fwArrowOH" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto">
                            <path d="M 0 0 L 10 5 L 0 10 z" fill="#E8AF00"/>
                        </marker>
                        <radialGradient id="fwCenterGlowOH" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#E8AF00" stop-opacity="0.22"/>
                            <stop offset="70%" stop-color="#E8AF00" stop-opacity="0.04"/>
                            <stop offset="100%" stop-color="#E8AF00" stop-opacity="0"/>
                        </radialGradient>
                    </defs>

                    <!-- Decorative outer rings -->
                    <circle cx="320" cy="290" r="252" fill="none" stroke="#E8AF00" stroke-width="1" stroke-dasharray="2 6" opacity="0.22"/>
                    <circle cx="320" cy="290" r="232" fill="none" stroke="#E8AF00" stroke-width="1" opacity="0.10"/>

                    <!-- Five forward arrows tracing the clockwise loop:
                         BoM → Configurator → Maker → Build → Feedback → BoM -->
                    <g class="fw-arrow" marker-end="url(#fwArrowOH)">
                        <!-- BoM → Configurator (diagonal NE) -->
                        <path d="M 369,120 Q 446,139 491,195"/>
                        <!-- Configurator → Maker (vertical down, slight right bow) -->
                        <path d="M 540,283 Q 558,310 540,337"/>
                        <!-- Maker → Build (horizontal left, slight bottom bow) -->
                        <path d="M 482,395 Q 320,425 158,395"/>
                        <!-- Build → Feedback (vertical up, slight left bow) -->
                        <path d="M 100,337 Q 82,310 100,283"/>
                        <!-- Feedback → BoM (diagonal NE) -->
                        <path d="M 149,195 Q 194,139 271,120"/>
                    </g>

                    <!-- Edge labels: each names the MECHANIC running on that arrow -->
                    <g class="fw-edge-label">
                        <text x="160" y="60" text-anchor="middle">share-alike + program</text>
                        <text x="498" y="60" text-anchor="middle">auto-derived from CAD</text>
                        <text x="612" y="305" text-anchor="end">customer quote → local</text>
                        <text x="320" y="567" text-anchor="middle">CERN-OHL-S grant · templates + jigs</text>
                        <text x="28" y="305" text-anchor="start">build photos · honest feedback</text>
                    </g>

                    <!-- Center: OnShape CAD spine -->
                    <g text-anchor="middle">
                        <circle cx="320" cy="290" r="92" fill="url(#fwCenterGlowOH)"/>
                        <circle cx="320" cy="290" r="74" fill="#0c0f12" stroke="#E8AF00" stroke-width="2"/>
                        <text class="fw-center-label" x="320" y="282" font-size="13">ONSHAPE CAD</text>
                        <text class="fw-center-sub" x="320" y="300">PARAMETRIC SPINE</text>
                        <text class="fw-center-sub" x="320" y="316" font-size="8.5">54 elements · 6 sphere variants</text>
                    </g>

                    <!-- Five perimeter nodes (clockwise from top) -->
                    <g text-anchor="middle">
                        <!-- 1. BoM (top) -->
                        <circle cx="320" cy="90" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="320" y="84">BoM</text>
                        <text class="fw-node-sub" x="320" y="100">bill of materials</text>
                        <text class="fw-node-sub fw-node-sub--accent" x="320" y="113">derived, not maintained</text>

                        <!-- 2. Configurator (upper right) -->
                        <circle cx="540" cy="225" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="540" y="219">CONFIG-</text>
                        <text class="fw-node-label" x="540" y="233" font-size="10">URATOR</text>
                        <text class="fw-node-sub" x="540" y="247">3D + quote</text>

                        <!-- 3. Local Maker (lower right) -->
                        <circle cx="540" cy="395" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="540" y="389">LOCAL</text>
                        <text class="fw-node-label" x="540" y="402">MAKER</text>
                        <text class="fw-node-sub" x="540" y="416">MDF · STL jigs</text>

                        <!-- 4. Build (lower left) -->
                        <circle cx="100" cy="395" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="100" y="389">BUILD</text>
                        <text class="fw-node-sub" x="100" y="405">customer in possession</text>
                        <text class="fw-node-sub" x="100" y="417">sauna · greenhouse · …</text>

                        <!-- 5. Feedback / share-alike (upper left) -->
                        <circle cx="100" cy="225" r="58" class="fw-node" stroke-dasharray="4 4"/>
                        <text class="fw-node-label" x="100" y="219">FEED-</text>
                        <text class="fw-node-label" x="100" y="233">BACK</text>
                        <text class="fw-node-sub fw-node-sub--accent" x="100" y="247">share-alike returns</text>
                    </g>
                </svg>

                <!-- Mobile: stacked vertical layout, no rotated labels -->
                <svg class="flywheel flywheel--stacked" viewBox="0 0 320 760" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Open-hardware flywheel, stacked layout">
                    <defs>
                        <marker id="fwArrowOHSm" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto">
                            <path d="M 0 0 L 10 5 L 0 10 z" fill="#E8AF00"/>
                        </marker>
                    </defs>

                    <!-- CAD spine bar at top (the source) -->
                    <g text-anchor="middle">
                        <rect x="35" y="20" width="250" height="74" rx="10" fill="#0c0f12" stroke="#E8AF00" stroke-width="2"/>
                        <text class="fw-center-label" x="160" y="45" font-size="13">ONSHAPE CAD</text>
                        <text class="fw-center-sub" x="160" y="62">PARAMETRIC SPINE</text>
                        <text class="fw-center-sub" x="160" y="77" font-size="8.5">54 elements · 6 sphere variants</text>
                    </g>
                    <line x1="160" y1="100" x2="160" y2="135" class="fw-arrow" marker-end="url(#fwArrowOHSm)"/>

                    <!-- BoM -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="180" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="176">BoM</text>
                        <text class="fw-node-sub" x="160" y="192">derived from CAD</text>
                    </g>
                    <line x1="160" y1="225" x2="160" y2="260" class="fw-arrow" marker-end="url(#fwArrowOHSm)"/>

                    <!-- Configurator -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="305" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="301">CONFIGURATOR</text>
                        <text class="fw-node-sub" x="160" y="317">3D + quote</text>
                    </g>
                    <line x1="160" y1="350" x2="160" y2="385" class="fw-arrow" marker-end="url(#fwArrowOHSm)"/>

                    <!-- Local Maker -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="430" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="426">LOCAL MAKER</text>
                        <text class="fw-node-sub" x="160" y="442">MDF · STL jigs</text>
                    </g>
                    <line x1="160" y1="475" x2="160" y2="510" class="fw-arrow" marker-end="url(#fwArrowOHSm)"/>

                    <!-- Build -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="555" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="551">BUILD</text>
                        <text class="fw-node-sub" x="160" y="567">customer in possession</text>
                    </g>
                    <line x1="160" y1="600" x2="160" y2="635" class="fw-arrow" marker-end="url(#fwArrowOHSm)"/>

                    <!-- Feedback -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="680" r="44" class="fw-node" stroke-dasharray="4 4"/>
                        <text class="fw-node-label" x="160" y="676">FEEDBACK</text>
                        <text class="fw-node-sub fw-node-sub--accent" x="160" y="692">share-alike returns</text>
                    </g>
                    <text class="fw-edge-label" x="160" y="740" text-anchor="middle">↻ flows back into the CAD</text>
                </svg>

                <figcaption id="flywheel-caption" class="flywheel-caption">
                    The CAD is the spine. The five perimeter nodes are the business model. Share-alike + builder feedback loop back into the CAD.
                </figcaption>
            </figure>

            <section class="case-study-section">
                <h2>The Insight</h2>
                <p>Traditional product companies scale by building factories. A solo founder can't build factories. So the question I had to answer in 2024 was: <strong>can a one-person physical-product company scale without manufacturing capital?</strong></p>
                <p>The answer Thios is built around: <strong>the CAD file is the product.</strong> Everything else &mdash; the bill of materials, the configurator's 3D rendering, the local maker's fabrication, the customer's finished structure, and the modifications that flow back &mdash; derives from one parametric OnShape document. Manufacturing is licensed out under <a href="https://thios.co/en/open-hardware-license" target="_blank" rel="noopener">CERN-OHL-S v2</a> (strong reciprocal). Makers build for customers; their builds and modifications flow back to the CAD; the CAD gets better; the next sale ships against a better product.</p>
            </section>

            <section class="case-study-section">
                <h2>The Five-Node Loop</h2>
                <p>The flywheel above isn't aspirational &mdash; each node points at a live URL on thios.co. Here's what sits where, and which mechanic ties each adjacent pair:</p>

                <div class="surface-table-wrap">
                    <table class="surface-table" aria-label="Five nodes of the open-hardware flywheel">
                        <thead>
                            <tr><th>Node</th><th>Role</th><th>Live today</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><a href="https://cad.onshape.com/documents/ab17885c88d65d0d65156850" target="_blank" rel="noopener">OnShape CAD</a></td><td>The parametric source. Every sphere variant is the same geodesic geometry, differently parametrized.</td><td>54 elements · 26 part studios · 11 assemblies · Variable Studio 1</td></tr>
                            <tr><td>Bill of Materials</td><td>Derived from the CAD, not maintained alongside it. When the CAD changes, the BoM changes.</td><td>Auto-derived per sphere variant</td></tr>
                            <tr><td><a href="https://thios.co/configurator/" target="_blank" rel="noopener">Configurator</a></td><td>Customer-facing build-your-own. 3D models come from the same CAD &mdash; not a marketing render.</td><td>Metric / Imperial · &ldquo;Get Quotes from Local Builders&rdquo; handoff</td></tr>
                            <tr><td><a href="https://thios.co/en/builder-tools" target="_blank" rel="noopener">Local maker</a></td><td>Fabrication layer. CERN-OHL-S grants build-and-sell rights; builder tools lower the precision barrier.</td><td>MDF + paper templates (&plusmn;0.1mm CNC) live · 3D-printable jigs + drop-ship kits queued</td></tr>
                            <tr><td>Build (customer)</td><td>Finished sauna, greenhouse, office, shelter. The deliverable.</td><td>6 sphere variants supported</td></tr>
                            <tr><td><a href="https://thios.co/en/first-builders" target="_blank" rel="noopener">Feedback &mdash; share-alike</a></td><td>License-mandated source release on distributed modifications, plus the First Builders program for qualitative signal.</td><td>License live · First Builders program (5 spots) live</td></tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="case-study-section">
                <h2>Why This Beats Building Factories</h2>
                <ul>
                    <li><strong>Capital-light.</strong> Distribution scales without manufacturing CapEx. The investment is in CAD, license, builder tools, and configurator &mdash; all software-shaped leverage.</li>
                    <li><strong>Geography-resilient.</strong> Customers route to the nearest local maker. A sauna built in Helsinki and a greenhouse built in Buenos Aires use the same CAD, same templates, different local materials.</li>
                    <li><strong>Feedback-rich.</strong> Every shipped build is also a research sample. Traditional manufacturers see customer feedback through warranty claims, years late. Thios sees it through share-alike releases at build-cycle latency.</li>
                    <li><strong>Defensible by network, not by IP.</strong> The CAD is open. The moat is the maker network, the configurator UX, the brand, the design system, and the R&amp;D cadence.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>How the Design System Enables This</h2>
                <p>The flywheel only works if the surfaces stay coherent. The customer's 3D in the configurator has to match the maker's CAD download has to match the BoM has to match the finished build. <strong>Drift between any two surfaces and the flywheel jams.</strong></p>
                <p>That's why the design-system case study &mdash; the <a href="thios.php">5-surface infrastructure</a> &mdash; is the prerequisite for this one. DESIGN.md &harr; tokens.json &harr; main.css &harr; design-system.html &harr; OnShape staying aligned via agent-driven audits is what lets the customer-facing 3D, the maker-facing CAD, and the brand-facing site speak the same language. The two case studies are sibling artifacts: this one is the <em>business model</em> the design system makes possible; the design-system one is the <em>infrastructure</em> that keeps this business model coherent.</p>
            </section>

            <section class="case-study-section">
                <h2>Results &mdash; Where the System Is Today</h2>
                <ul>
                    <li><strong>Open-hardware license live</strong> &mdash; CERN-OHL-S v2 published at <a href="https://thios.co/en/open-hardware-license" target="_blank" rel="noopener">thios.co/en/open-hardware-license</a>, with source CAD + GitHub linked from the license page.</li>
                    <li><strong>Configurator live</strong> &mdash; <a href="https://thios.co/configurator/" target="_blank" rel="noopener">thios.co/configurator/</a> with 3D module preview, metric/imperial units, and a &ldquo;Get Quotes from Local Builders&rdquo; handoff.</li>
                    <li><strong>Builder tools shipping</strong> &mdash; MDF + paper templates available now (pre-order model: manufactured after 10 orders). 3D-printable jigs + drop-ship jig kits in the queue.</li>
                    <li><strong>First Builders program live</strong> &mdash; 5 spots, lifetime pass + badge + featured profile in exchange for documented build process and honest feedback.</li>
                    <li><strong>6 sphere variants in the system</strong> &mdash; Saunosphere, Agrosphere, Ergosphere, Immosphere, Thiosphere, Auxosphere &mdash; all derived from one parametric geometry.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Next Loops to Close</h2>
                <ul>
                    <li><strong>Maker directory.</strong> The configurator emits &ldquo;Get Quotes from Local Builders&rdquo; but the routing is manual today. Next: a maker registry with location + capability filters so quoting is one-tap rather than a contact form.</li>
                    <li><strong>BoM versioning.</strong> When the CAD updates, downstream BoMs change. Need an explicit version contract so makers fabricating to a v2024.11 build aren't blindsided by a v2026.01 BoM shift.</li>
                    <li><strong>Structured feedback intake.</strong> First Builders honest-feedback is qualitative today. A structured intake (which step took longest, which template was off, what would you change) lets feedback compound into CAD revisions, not anecdotes.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <p style="font-size: 1.15em; line-height: 1.6; padding: 24px 0; border-top: 1px solid var(--color-light-gray, #eee); margin-top: 16px;">A solo founder can't out-capitalize Ikea. A solo founder can out-loop them. The CAD is the product; the license is the distribution model; the makers are the manufacturing layer; the feedback is the R&amp;D engine. <strong>The flywheel scales without you.</strong></p>
            </section>

            <div class="case-study-cta">
                <a href="https://thios.co/configurator/" target="_blank">
                    Try the 3D Configurator &rarr;
                </a>
            </div>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Interested in open-hardware product strategy, configurator-driven sales, or capital-light distribution for physical products?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/petermbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">&larr; Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="thios.php">&larr; Previous: Thios Design System</a>
                <a href="deere-common-ux.php">Next: Deere Common UX &rarr;</a>
            </nav>
        </article>
    </main>

    <script>
        if (typeof gtag === 'function') {
            gtag('event', 'case_study_view', {
                'event_category': 'engagement',
                'event_label': 'thios_flywheel'
            });
        }
    </script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
