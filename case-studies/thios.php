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
    <?php include('../themes/theme-banner.php'); ?>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home">
                <img src="../pblogo.svg" alt="PB logo" height="40" />
            </a>
            <nav aria-label="Breadcrumb" style="display: flex; gap: 16px;">
                <a href="../" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Portfolio</a>
            </nav>
        </div>
    </header>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb">
                    <a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Thios
                </nav>
                <h1 class="case-study-title">THIOS: DESIGN SYSTEMS ON AGENT RAILS</h1>
                <p class="case-study-subtitle">5 surfaces kept aligned by agents · 212 design tokens · 7 drift findings caught in the May audit · 1 designer</p>
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
                        <text x="498" y="60" text-anchor="middle">audit-design-token-drift</text>
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
                <h2>The Strategic Hypothesis</h2>
                <p><strong>By 2026 the bottleneck in design isn't drawing — it's keeping intent, spec, code, and tokens consistent.</strong> Most design systems rot quietly: a hex value drifts, a component ships without an entry in the docs, a Figma variable disagrees with a CSS custom property. By the time anyone notices, dozens of components reference the wrong value.</p>
                <p>What if the designer's deliverable was the <em>rules</em>, and agents were the IC enforcing them across surfaces? I built Thios to test that — and the design system became the proving ground.</p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>Why This Was Hard</h2>
                <p>Solo founder, vanilla stack, real product. Constraints that ruled out most off-the-shelf solutions:</p>
                <ul>
                    <li><strong>No frameworks:</strong> Vanilla PHP, vanilla CSS, vanilla JS. No npm, no React, no build tools. Most modern design-system tooling assumes the opposite.</li>
                    <li><strong>Multi-surface:</strong> Four production subdomains (thios.co · blog · store · partners), plus a Figma file, plus an OnShape parametric model that drives physical product.</li>
                    <li><strong>Six sub-brands:</strong> Thiosphere, Saunosphere, Agrosphere, Ergosphere, Immosphere, Auxosphere — each with its own accent color and product surface.</li>
                    <li><strong>One designer:</strong> Manual drift detection at this surface count is infeasible. The system has to police itself.</li>
                </ul>
                <p style="margin-top: 16px; margin-bottom: 0;"><strong>If "AI-augmented design" only meant a faster Figma cursor, this wouldn't have shipped.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>The Five-Surface Problem</h2>
                <p>Every design decision lives in five places. Without infrastructure, they drift. Each surface is real, in production, and agent-readable today:</p>

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

                <p>Two more pages live alongside design-system.html and exist to document the system itself: <a href="https://thios.co/design-system-loop.html" target="_blank" rel="noopener">design-system-loop.html</a> (the six-step Virtuous Loop with Claude routine callouts) and <a href="https://thios.co/design-system-architecture.html" target="_blank" rel="noopener">design-system-architecture.html</a> (the five-station flow). They're documentation, not surfaces — but they make the system legible to outside agents and to the next person who joins.</p>
            </section>

            <section class="case-study-section">
                <h2>The Agent Stack</h2>
                <p>Each surface has an agent role. Below is what's running today.</p>

                <h3 class="cs-h3">1. DESIGN.md as the canonical rule layer</h3>
                <p>A single markdown file — diffable, version-controlled, agent-native. Section 9 is explicitly labeled "Agent Prompt Guide" and is the first thing any agent reads when generating UI for Thios. Color palette, typography rules, sphere brand colors, and even a Do/Don't list. Agents read it on every task.</p>
                <p>This pattern is now converging across the field — Anthropic is publishing Skill formats, Figma's <a href="https://developers.figma.com/docs/code/bring-your-design-system-package/" target="_blank" rel="noopener">Bring your design system package</a> feature accepts a <code>Guidelines.md</code> for AI-generated apps, and <a href="https://github.com/addyosmani/agent-skills" target="_blank" rel="noopener">addyosmani/agent-skills</a> standardizes a SKILL.md anatomy. DESIGN.md has been live and load-bearing on Thios since 2025.</p>

                <h3 class="cs-h3">2. tokens.json — the bridge to Figma</h3>
                <p>W3C Design Tokens format with three layers (primitive → semantic → surface) so primitive palette decisions are decoupled from role-named usage. Configurator dark mode is its own surface layer; sphere brand colors are first-class semantic tokens with mode variants per product.</p>
                <p>The metadata block tracks brand decisions with dates ("Brand gold is #E8AF00 — decided 2026-04-20") and a <code>cssSyncRequired</code> queue that pre-deploy gates can fail on. Tokens Studio reads it directly into Figma Variables; nothing is retyped by hand.</p>

                <h3 class="cs-h3">3. The audit skill — drift detection as infrastructure</h3>
                <p>The first formal Thios skill, <code>audit-design-token-drift</code>, follows the agent-skills anatomy: frontmatter, when-to-use, core process, rationalizations table, red flags, verification checklist. It diffs all four upstream surfaces and outputs a dated audit file under <code>_agents/</code>. The agent's job is to catch drift; the human's job is to decide what to fix.</p>

                <figure class="artifact-callout" aria-labelledby="artifact-label-1">
                    <figcaption id="artifact-label-1" class="artifact-callout__label">Excerpt · Design Token Audit · May 2026 · first run, baseline</figcaption>
                    <div class="artifact-callout__body">
<pre>## Summary

Total drift findings: 7
- Critical: 2  (rules-layer disagreement)
- High:     1  (DESIGN.md ↔ tokens.json mismatch)
- Medium:   3  (main.css ↔ design-system.html gap)
- Low:      1  (orphan token)

CRT-1 — DESIGN.md self-contradiction on canonical brand gold
  Section 2, line 35:  #E8AF00 (canonical, dated 2026-04-20)
  Section 9, line 440: Gold (#F0B800)
  → The agent guide teaches the wrong gold. Production code is fine.
    Fix: align Section 9 to #E8AF00. Loop step: 6 (Document).

CRT-2 — "Premium gold" #D4A000 has no entry in tokens.json
  Documented in DESIGN.md Section 2; used by .hero-cta-primary.
  → Add primitive.color.gold.600 + semantic.brand.secondaryPremium.
    Loop step: 3 (Tokenize).</pre>
                    </div>
                </figure>

                <p>This is the first formal token-drift audit; it's the baseline for the trend line. Next month's run will show whether the system tightens.</p>

                <h3 class="cs-h3">4. design-system.html — the live spec</h3>
                <p>A 109 KB self-contained HTML page at <a href="https://thios.co/design-system.html" target="_blank" rel="noopener">thios.co/design-system.html</a>. Every token, every component, every pattern with working examples. It's the live answer to "what does our <code>.btn-primary</code> look like? what variants of <code>.alert</code> exist?" — and it's the surface the audit skill diffs main.css against.</p>

                <h3 class="cs-h3">5. OnShape API — parametric CAD on agent rails</h3>
                <p>The Thiosphere CAD document holds 54 elements: 26 part studios (hex panels, pent panels, edge rails, foundation), 11 assemblies, 9 BOMs, and one Variable Studio that drives every dimension. Sphere parameters in DESIGN.md (panel size, stud length, foundation height) flow into the Variable Studio via the OnShape API — the same shape as tokens.json flowing into Figma Variables, but for physical product.</p>
                <p>Cross-sphere parts are named with a strict convention (<code>Thiosphere SDK – ...</code>, <code>Saunosphere – ...</code>) so a future CAD-hygiene agent can enforce the same brand discipline on geometry that the token-drift skill enforces on color.</p>
            </section>

            <section class="case-study-section">
                <h2>Sphere Branding — Proof the System Scales</h2>
                <p>Six sub-brands currently share the system: <strong>Thiosphere</strong> (brown <code>#96643F</code>), <strong>Saunosphere</strong> (red <code>#E25141</code>), <strong>Agrosphere</strong> (teal — same as primary, intentionally), <strong>Ergosphere</strong> (blue <code>#1D63BE</code>), <strong>Immosphere</strong> (purple <code>#4D04AC</code>), <strong>Auxosphere</strong> (gray). Each is a first-class semantic token with mode variants in Figma — one component template, six brand surfaces.</p>
                <p>The May audit found a real drift here: Auxosphere reads <code>#909090</code> in DESIGN.md but resolves to <code>#6c757d</code> in tokens.json. That's the kind of bug a single-surface workflow ships silently. Six sub-brands plus four production sites is exactly where manual drift detection breaks.</p>
            </section>

            <section class="case-study-section">
                <h2>The Designer's New Role</h2>
                <p>My deliverables stopped being screens and started being rules. The agents are the IC; I'm the design lead reviewing their PRs. At FourKites I scaled a design org from 1 to 10. On Thios I'm scaling from 1 to ∞ — same shape, different leverage. The skill catalog is the new portfolio of patterns; each skill compounds because every agent that runs it gets better at the task than the last one.</p>
                <p><strong>The interesting career question for senior designers in 2026 isn't "can you use AI?" — it's "have you written infrastructure agents follow?"</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li><strong>Five surfaces in sync today</strong> — DESIGN.md, tokens.json, main.css, design-system.html, OnShape — all readable by agents, all mutually diffable, all referenced from a single canonical rule layer.</li>
                    <li><strong>212 design tokens</strong> in tokens.json (W3C format), spanning primitive / semantic / surface layers with sphere-brand modes.</li>
                    <li><strong>4 production subdomains</strong> kept in CSS-sync via a <code>make check-css-sync</code> deploy gate — no silent rot between thios.co, blog, store, and partners.</li>
                    <li><strong>54 OnShape elements</strong> driven by a single Variable Studio, ready for parametric agent updates from sphere specs in DESIGN.md.</li>
                    <li><strong>7 drift findings caught</strong> in the first formal token audit (May 2026), including a self-contradiction inside DESIGN.md and a documented brand color absent from tokens.json.</li>
                    <li><strong>1 published skill</strong> (<code>audit-design-token-drift</code>) following the agent-skills anatomy, with 5 more on the roadmap.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Industry Context</h2>
                <p>This isn't operating in isolation. Three converging signals say markdown-as-instruction-layer is the shape design systems are settling on for the agent era:</p>
                <ul>
                    <li><strong>Anthropic's Skill format</strong> — prompted markdown skills with frontmatter and verification, shipped in Claude Code.</li>
                    <li><strong>Figma's <a href="https://developers.figma.com/docs/code/bring-your-design-system-package/" target="_blank" rel="noopener">Bring your design system package</a></strong> — accepts an npm-published React design system plus a <code>Guidelines.md</code>, then uses both to generate apps in Figma Make. Validates the pattern; locked to React/Vite/npm. Thios's vanilla stack is incompatible by design — but DESIGN.md is the same shape as Guidelines.md, shipping a year ahead and stack-agnostic.</li>
                    <li><strong><a href="https://github.com/addyosmani/agent-skills" target="_blank" rel="noopener">addyosmani/agent-skills</a></strong> — 20 SKILL.md files standardizing the workflow-as-markdown pattern across Claude Code, Cursor, Gemini, Windsurf, Copilot. Thios's <code>_agents/skills/</code> follows this anatomy and is structured to publish back upstream.</li>
                </ul>
                <p>Stack-agnostic markdown rule layers are the convergent answer. The Thios experiment was just early to it.</p>
            </section>

            <section class="case-study-section">
                <h2>Next Surfaces (Roadmap)</h2>
                <p>Three surfaces are designed but not yet running. Each will be added to the audit skill before it goes live so drift detection scales with the system.</p>
                <ul>
                    <li><strong>Cron-driven audits</strong> — <code>audit-design-token-drift</code> runs on demand today. Wiring it to a weekly schedule turns drift detection from a willpower problem into infrastructure. Next month's audit-vs-this-month delta becomes the trend line.</li>
                    <li><strong>Figma MCP</strong> — Tokens Studio + html.to.design plugins documented in design-system-loop.html step 2; once Figma Dev Mode MCP is enabled on the Thios-logo file, agents will read and write Figma Variables the same way they audit DESIGN.md today.</li>
                    <li><strong>CAD hygiene agent</strong> — feature naming conventions, mate health, build-correctness checks on the OnShape document. Same diff-then-fix shape as the token audit, applied to physical geometry. The 54-element inventory is the baseline.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>What This Proves</h2>
                <p>The next generation of design leadership won't measure output in screens shipped — it'll measure the leverage of the system the team operates inside. A designer-of-one running on agent rails should be able to ship at the same quality bar as a team of ten, because the system enforces the bar and the agents catch the lapses.</p>
                <p><strong>The work isn't using AI. The work is writing the rules AI follows.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Physical product range</h2>
                <p>The agent infrastructure runs on a real product. Thios builds open-source modular structures — saunas, greenhouses, offices — from geodesic geometry. Brand identity, three websites, five shelter variants, a 3D configurator (React + Three.js), and a revenue-generating handbook. The flywheel above is what kept all of it consistent.</p>
                <div class="case-study-gallery">
                    <img src="../img/thios-02.png" alt="Thios brand identity" loading="lazy">
                    <img src="../img/thios-03.png" alt="Thios website" loading="lazy">
                    <img src="../img/thios-04.png" alt="Thios CAD model" loading="lazy">
                    <img src="../img/thios-05.png" alt="Thios shelter variant" loading="lazy">
                    <img src="../img/thios-06.png" alt="Thios physical prototype" loading="lazy">
                    <img src="../img/thios-07.png" alt="Thios configurator" loading="lazy">
                </div>
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
                <a href="deere-common-ux.php">Next: Forced Adoption →</a>
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
</body>
</html>
