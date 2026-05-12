<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thios: Design Systems on Agent Rails | Peter Bartsch Case Study</title>
    <meta name="description" content="Five surfaces, one source of truth. How DESIGN.md, tokens.json, main.css, design-system.html, and the OnShape API stay aligned via agent-driven audits — for a company of one.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/thios">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="Thios: Design Systems on Agent Rails | Peter Bartsch">
    <meta property="og:description" content="Five surfaces, one source of truth. Agent-driven design-system infrastructure for a company of one.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/thios">
    <meta property="og:image" content="https://petebartsch.com/img/og-thios-agent-rails.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="case-study.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Thios: Design Systems on Agent Rails | Peter Bartsch">
    <meta name="twitter:description" content="Five surfaces, one source of truth. Agent-driven design-system infrastructure for a company of one.">
    <meta name="twitter:image" content="https://petebartsch.com/img/og-thios-agent-rails.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Thios: Design Systems on Agent Rails",
      "description": "Five surfaces, one source of truth. DESIGN.md, tokens.json, main.css, design-system.html, and the OnShape API kept aligned via agent-driven audits.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/thios",
      "datePublished": "2026-05-05"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb">
                    <a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Thios
                </nav>
                <h1 class="case-study-title">THIOS: DESIGN SYSTEMS ON AGENT RAILS</h1>
                <p class="case-study-subtitle">5 surfaces kept aligned by agents · 212 design tokens · 6 sub-brands · 4 production sites · 1 designer</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Role</span>
                        <span>Founder & Lead Designer</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Scope</span>
                        <span>Design Systems · Agent Infrastructure · Token Architecture · CAD · Web</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Timeline</span>
                        <span>2024 – Present</span>
                    </div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric">
                    <p class="case-study-metric-value">5</p>
                    <p class="case-study-metric-label">Surfaces in sync</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">212</p>
                    <p class="case-study-metric-label">Design tokens</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">4</p>
                    <p class="case-study-metric-label">Production sites</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">54</p>
                    <p class="case-study-metric-label">OnShape elements</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">6</p>
                    <p class="case-study-metric-label">Sub-brands</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">1</p>
                    <p class="case-study-metric-label">Designer</p>
                </div>
            </div>

            <!-- Flywheel diagram (hero) — dark stage so node colors stay legible across all era themes -->
            <figure class="flywheel-stage" aria-labelledby="flywheel-caption">
                <!-- Desktop / tablet: radial layout -->
                <svg class="flywheel flywheel--radial" viewBox="0 0 640 580" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Five-surface design system flywheel with DESIGN.md at the center">
                    <defs>
                        <marker id="fwArrow" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto">
                            <path d="M 0 0 L 10 5 L 0 10 z" fill="#E8AF00"/>
                        </marker>
                        <radialGradient id="fwCenterGlow" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#E8AF00" stop-opacity="0.22"/>
                            <stop offset="70%" stop-color="#E8AF00" stop-opacity="0.04"/>
                            <stop offset="100%" stop-color="#E8AF00" stop-opacity="0"/>
                        </radialGradient>
                    </defs>

                    <!-- Decorative outer rings -->
                    <circle cx="320" cy="290" r="252" fill="none" stroke="#E8AF00" stroke-width="1" stroke-dasharray="2 6" opacity="0.22"/>
                    <circle cx="320" cy="290" r="232" fill="none" stroke="#E8AF00" stroke-width="1" opacity="0.10"/>

                    <!-- Five forward arrows tracing the clockwise loop:
                         Figma → Tokens → Main.css → Design-system → OnShape → Figma -->
                    <g class="fw-arrow" marker-end="url(#fwArrow)">
                        <!-- Figma → Tokens (diagonal NE) -->
                        <path d="M 369,120 Q 446,139 491,195"/>
                        <!-- Tokens → Main.css (vertical down, slight right bow) -->
                        <path d="M 540,283 Q 558,310 540,337"/>
                        <!-- Main.css → Design-system (horizontal left, slight bottom bow) -->
                        <path d="M 482,395 Q 320,425 158,395"/>
                        <!-- Design-system → OnShape (vertical up, slight left bow) -->
                        <path d="M 100,337 Q 82,310 100,283"/>
                        <!-- OnShape → Figma (diagonal NE) -->
                        <path d="M 149,195 Q 194,139 271,120"/>
                    </g>

                    <!-- Edge labels: horizontal text in the angular gaps between adjacent nodes.
                         Each label names the agent process running on that arrow. -->
                    <g class="fw-edge-label">
                        <text x="160" y="60" text-anchor="middle">MCP audit · next surface</text>
                        <text x="498" y="60" text-anchor="middle">token-drift audit</text>
                        <text x="612" y="305" text-anchor="end">cssSyncRequired</text>
                        <text x="320" y="567" text-anchor="middle">design-system-loop.html</text>
                        <text x="28" y="305" text-anchor="start">parametric agent</text>
                    </g>

                    <!-- Center: DESIGN.md spine -->
                    <g text-anchor="middle">
                        <circle cx="320" cy="290" r="92" fill="url(#fwCenterGlow)"/>
                        <circle cx="320" cy="290" r="74" fill="#0c0f12" stroke="#E8AF00" stroke-width="2"/>
                        <text class="fw-center-label" x="320" y="282" font-size="15">DESIGN.md</text>
                        <text class="fw-center-sub" x="320" y="300">CANONICAL RULES</text>
                        <text class="fw-center-sub" x="320" y="316" font-size="8.5">~65 tokens · agent-readable</text>
                    </g>

                    <!-- Five surface nodes (clockwise from top) -->
                    <g text-anchor="middle">
                        <!-- 1. Figma (top) — aspirational, dashed border -->
                        <circle cx="320" cy="90" r="58" class="fw-node" stroke-dasharray="4 4"/>
                        <text class="fw-node-label" x="320" y="84">FIGMA</text>
                        <text class="fw-node-sub" x="320" y="100">visual source</text>
                        <text class="fw-node-sub fw-node-sub--accent" x="320" y="113">via Tokens Studio</text>

                        <!-- 2. tokens.json (upper right) -->
                        <circle cx="540" cy="225" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="540" y="219">TOKENS</text>
                        <text class="fw-node-label" x="540" y="233" font-size="10">.JSON</text>
                        <text class="fw-node-sub" x="540" y="247">212 tokens · W3C</text>

                        <!-- 3. main.css (lower right) -->
                        <circle cx="540" cy="395" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="540" y="389">MAIN.CSS</text>
                        <text class="fw-node-sub" x="540" y="405">18,000+ lines</text>
                        <text class="fw-node-sub" x="540" y="417">→ 4 sites</text>

                        <!-- 4. design-system.html (lower left) -->
                        <circle cx="100" cy="395" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="100" y="385">DESIGN</text>
                        <text class="fw-node-label" x="100" y="398" font-size="10">SYSTEM.HTML</text>
                        <text class="fw-node-sub" x="100" y="414">live demo · 109 KB</text>

                        <!-- 5. OnShape (upper left) -->
                        <circle cx="100" cy="225" r="58" class="fw-node"/>
                        <text class="fw-node-label" x="100" y="219">ONSHAPE</text>
                        <text class="fw-node-sub" x="100" y="235">54 elements</text>
                        <text class="fw-node-sub" x="100" y="247">Variable Studio 1</text>
                    </g>
                </svg>

                <!-- Mobile: stacked vertical layout, no rotated labels -->
                <svg class="flywheel flywheel--stacked" viewBox="0 0 320 760" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Five-surface design system flywheel, stacked layout">
                    <defs>
                        <marker id="fwArrowSm" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto">
                            <path d="M 0 0 L 10 5 L 0 10 z" fill="#E8AF00"/>
                        </marker>
                    </defs>

                    <!-- Figma (top, aspirational) -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="50" r="44" class="fw-node" stroke-dasharray="4 4"/>
                        <text class="fw-node-label" x="160" y="46">FIGMA</text>
                        <text class="fw-node-sub fw-node-sub--accent" x="160" y="62">via Tokens Studio</text>
                    </g>
                    <line x1="160" y1="100" x2="160" y2="135" class="fw-arrow" marker-end="url(#fwArrowSm)"/>

                    <!-- tokens.json -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="180" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="174">TOKENS</text>
                        <text class="fw-node-label" x="160" y="188" font-size="10">.JSON</text>
                        <text class="fw-node-sub" x="160" y="202">212 · W3C</text>
                    </g>
                    <line x1="160" y1="230" x2="160" y2="265" class="fw-arrow" marker-end="url(#fwArrowSm)"/>

                    <!-- main.css -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="310" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="306">MAIN.CSS</text>
                        <text class="fw-node-sub" x="160" y="322">18k+ lines · 4 sites</text>
                    </g>
                    <line x1="160" y1="360" x2="160" y2="395" class="fw-arrow" marker-end="url(#fwArrowSm)"/>

                    <!-- DESIGN.md spine bar -->
                    <g text-anchor="middle">
                        <rect x="35" y="405" width="250" height="74" rx="10" fill="#0c0f12" stroke="#E8AF00" stroke-width="2"/>
                        <text class="fw-center-label" x="160" y="430" font-size="14">DESIGN.md</text>
                        <text class="fw-center-sub" x="160" y="447">CANONICAL RULES</text>
                        <text class="fw-center-sub" x="160" y="462" font-size="8.5">spine · agents read on every task</text>
                    </g>
                    <line x1="160" y1="485" x2="160" y2="515" class="fw-arrow" marker-end="url(#fwArrowSm)"/>

                    <!-- design-system.html -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="560" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="554">DESIGN</text>
                        <text class="fw-node-label" x="160" y="568" font-size="10">SYSTEM.HTML</text>
                        <text class="fw-node-sub" x="160" y="584">live demo · 109 KB</text>
                    </g>
                    <line x1="160" y1="610" x2="160" y2="645" class="fw-arrow" marker-end="url(#fwArrowSm)"/>

                    <!-- OnShape -->
                    <g text-anchor="middle">
                        <circle cx="160" cy="690" r="44" class="fw-node"/>
                        <text class="fw-node-label" x="160" y="684">ONSHAPE</text>
                        <text class="fw-node-sub" x="160" y="700">54 elements</text>
                        <text class="fw-node-sub" x="160" y="712">Variable Studio 1</text>
                    </g>
                    <text class="fw-edge-label" x="160" y="748" text-anchor="middle">↻ loops back · MCP audit on next surface</text>
                </svg>

                <figcaption id="flywheel-caption" class="flywheel-caption">
                    DESIGN.md is the spine. Five surfaces orbit it. Agents enforce the spokes.
                </figcaption>
            </figure>

            <section class="case-study-section">
                <h2>What Thios Is</h2>
                <p>Open-source modular structures &mdash; saunas, greenhouses, offices &mdash; from geodesic geometry. Six sub-brands. Four production subdomains. One Figma file. One OnShape document. <strong>One designer.</strong></p>
                <p>By 2026 the bottleneck in design isn't drawing &mdash; it's keeping intent, spec, code, and tokens consistent across that surface count. What if the designer's deliverable was the <em>rules</em>, and agents were the IC enforcing them? The case study below is the answer.</p>
                <div class="case-study-gallery">
                    <img src="../img/thios-02.png" alt="Thios brand identity" loading="lazy">
                    <img src="../img/thios-03.png" alt="Thios website" loading="lazy">
                    <img src="../img/thios-04.png" alt="Thios CAD model" loading="lazy">
                    <img src="../img/thios-05.png" alt="Thios shelter variant" loading="lazy">
                    <img src="../img/thios-06.png" alt="Thios physical prototype" loading="lazy">
                    <img src="../img/thios-07.png" alt="Thios configurator" loading="lazy">
                </div>
            </section>

            <section class="case-study-section">
                <h2>The Five-Surface Problem</h2>
                <p>Most design systems rot quietly: a hex drifts, a Figma variable disagrees with a CSS custom property, a component ships without an entry in the docs. By the time anyone notices, dozens of components reference the wrong value. Thios's design decisions live in five places, all readable by agents, all mutually diffable, all referenced from one canonical rule layer:</p>

                <div class="surface-table-wrap">
                    <table class="surface-table" aria-label="Five canonical design system surfaces">
                        <thead>
                            <tr><th>Surface</th><th>Role</th><th>Today</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><a href="https://github.com/peterbartsch/thios.co" target="_blank" rel="noopener">DESIGN.md</a></td><td>Canonical rules. Section 9 is an explicit "Agent Prompt Guide."</td><td>484 lines · ~65 named tokens · 6 sphere brands</td></tr>
                            <tr><td>tokens.json</td><td>The bridge. W3C Design Tokens format, three-layer (primitive → semantic → surface).</td><td>212 tokens · designed for Tokens Studio import to Figma</td></tr>
                            <tr><td>main.css</td><td>Running production code.</td><td>18,000+ lines · 254 KB minified · synced across 4 subdomains</td></tr>
                            <tr><td><a href="https://thios.co/design-system.html" target="_blank" rel="noopener">design-system.html</a></td><td>Live, self-contained demo of every component.</td><td>109 KB · all components with working examples</td></tr>
                            <tr><td><a href="https://cad.onshape.com/documents/ab17885c88d65d0d65156850" target="_blank" rel="noopener">OnShape document</a></td><td>Parametric CAD source. Sphere geometry driven by Variable Studio 1.</td><td>54 elements · 26 part studios · 11 assemblies · 1 Variable Studio</td></tr>
                        </tbody>
                    </table>
                </div>

            </section>

            <section class="case-study-section">
                <h2>How the Surfaces Stay Aligned</h2>
                <p><strong>DESIGN.md is the spine</strong> &mdash; agent-native markdown; Section 9 is explicitly an &ldquo;Agent Prompt Guide,&rdquo; the first thing any agent reads when generating UI. <strong>tokens.json is the bridge</strong> &mdash; W3C Design Tokens, three layers (primitive / semantic / surface), imported into Figma Variables via Tokens Studio. <strong>main.css is the running code</strong> (18,000+ lines, kept in sync across four subdomains by a deploy gate). <strong>design-system.html is the live spec</strong> (109 KB, every component with working examples). <strong>OnShape is the parametric source</strong> for sphere geometry &mdash; 54 elements driven by one Variable Studio, the same shape as tokens.json flowing into Figma, but for physical product.</p>
                <p>Each surface gets diffed against the spine on demand. Agents catch drift; the human decides what to fix. The complete loop is documented at <a href="https://thios.co/design-system-loop.html" target="_blank" rel="noopener">thios.co/design-system-loop.html</a>.</p>
            </section>

            <section class="case-study-section">
                <h2>Sphere Branding — Proof the System Scales</h2>
                <p>Six sub-brands currently share the system: <strong>Thiosphere</strong> (brown <code>#96643F</code>), <strong>Saunosphere</strong> (red <code>#E25141</code>), <strong>Agrosphere</strong> (teal &mdash; same as primary, intentionally), <strong>Ergosphere</strong> (blue <code>#1D63BE</code>), <strong>Immosphere</strong> (purple <code>#4D04AC</code>), <strong>Auxosphere</strong> (gray). Each is a first-class semantic token with mode variants in Figma &mdash; one component template, six brand surfaces.</p>
                <p>The kind of bug a single-surface workflow ships silently: Auxosphere reads <code>#909090</code> in DESIGN.md but resolves to <code>#6c757d</code> after the primitive&rarr;semantic indirection in tokens.json. Six sub-brands plus four production sites is exactly where manual drift detection breaks.</p>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li><strong>Five surfaces in sync today</strong> &mdash; all readable by agents, all mutually diffable, all referenced from a single canonical rule layer.</li>
                    <li><strong>4 production subdomains</strong> kept in CSS-sync via a <code>make check-css-sync</code> deploy gate &mdash; no silent rot between thios.co, blog, store, and partners.</li>
                    <li><strong>6 sub-brands</strong> generated from one component template via Figma mode variants &mdash; one design, six brand surfaces.</li>
                    <li><strong>212 design tokens, three layers</strong> (primitive / semantic / surface) &mdash; the same shape as tokens.json flowing into Figma also flows into OnShape&rsquo;s Variable Studio for physical product.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Next Surfaces (Roadmap)</h2>
                <p>Three surfaces are designed but not yet running. Each will be wired into the diff layer before it goes live so drift detection scales with the system.</p>
                <ul>
                    <li><strong>Scheduled drift checks</strong> &mdash; the diff runs on demand today. Wiring it to a weekly schedule turns drift detection from a willpower problem into infrastructure. Month-over-month delta becomes the trend line.</li>
                    <li><strong>Figma MCP</strong> &mdash; Tokens Studio + html.to.design plugins documented in design-system-loop.html step 2; once Figma Dev Mode MCP is enabled on the Thios-logo file, agents will read and write Figma Variables the same way they reason about DESIGN.md today.</li>
                    <li><strong>CAD hygiene agent</strong> &mdash; feature naming conventions, mate health, build-correctness checks on the OnShape document. Same diff-then-fix shape, applied to physical geometry. The 54-element inventory is the baseline.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <p style="font-size: 1.15em; line-height: 1.6; padding: 24px 0; border-top: 1px solid var(--color-light-gray, #eee); margin-top: 16px;">The interesting career question for senior designers in 2026 isn't <em>&ldquo;can you use AI?&rdquo;</em> &mdash; it's <strong>&ldquo;have you written infrastructure agents follow?&rdquo;</strong> The work isn't using AI. The work is writing the rules AI follows.</p>
            </section>

            <div class="case-study-cta">
                <a href="https://thios.co/configurator" target="_blank">
                    Try the 3D Configurator →
                </a>
            </div>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Interested in agent-driven design systems, or hiring for a Staff/Principal IC role with design infrastructure experience?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/petermbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="fourkites-driver.php">← Previous: Incentive Design</a>
                <a href="thios-flywheel.php">Next: Open-Hardware Flywheel →</a>
            </nav>
        </article>
    </main>

    <script>
        if (typeof gtag === 'function') {
            gtag('event', 'case_study_view', {
                'event_category': 'engagement',
                'event_label': 'thios_v2_agent_rails'
            });
        }
        // Scroll-fade indicator on the artifact callout: shown only when content actually overflows.
        document.querySelectorAll('.artifact-callout__body').forEach(function(el) {
            var update = function() {
                var atEnd = el.scrollLeft + el.clientWidth >= el.scrollWidth - 2;
                var overflows = el.scrollWidth > el.clientWidth + 1;
                el.classList.toggle('artifact-callout__body--scrollable', overflows && !atEnd);
            };
            update();
            el.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
        });
    </script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
