<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Peter Bartsch — Staff Product Designer</title>
    <meta name="description" content="Peter Bartsch — Staff Product Designer — design systems · AI-native workflow. Led UX for $3.8B platform at Deere (500K users). Built design org 1→10 at FourKites ($1B+ valuation). Now founder of Thios — AI-native workflow shipping a CAD-driven configurator and dev-grade design system.">
    <link rel="canonical" href="https://petebartsch.com/resume">
    <link rel="icon" type="image/svg+xml" href="pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://petebartsch.com/resume">
    <meta property="og:title" content="Resume | Peter Bartsch — Staff Product Designer — design systems · AI-native workflow">
    <meta property="og:description" content="Design systems · AI-native workflow. $3.8B platform at Deere across web, mobile, embedded. Design org 1→10 at FourKites scaling IoT asset-tracking ($1B+ valuation). Now founder of Thios — AI-native workflow, CAD-driven configurator, dev-grade design system.">
    <meta property="og:site_name" content="Peter Bartsch">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Peter Bartsch — Staff Product Designer — design systems · AI-native workflow">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Resume | Peter Bartsch — Staff Product Designer — design systems · AI-native workflow">
    <meta name="twitter:description" content="Design systems · AI-native workflow. $3.8B platform at Deere across web, mobile, embedded. Design org 1→10 at FourKites scaling IoT asset-tracking ($1B+ valuation). Now founder of Thios — AI-native workflow, CAD-driven configurator, dev-grade design system.">
    <meta name="twitter:image" content="https://petebartsch.com/og-image.png">
    <meta name="twitter:image:alt" content="Peter Bartsch — Staff Product Designer — design systems · AI-native workflow">

    <!-- Fonts -->
    <link rel="preload" href="rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="case-studies/case-study.css">
    <?php $themeBasePath = './'; include('themes/theme-head.php'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>

    <style>
        /* Resume-specific styles */
        .resume-page {
            max-width: 800px;
            margin: 0 auto;
            padding: 32px 24px 80px;
        }

        .resume-header {
            margin-bottom: 32px;
        }

        .resume-name {
            font-family: var(--font-display);
            font-size: 32px;
            color: var(--color-text-primary, #fff);
            margin: 0 0 4px 0;
            letter-spacing: -0.02em;
        }

        .resume-title {
            font-family: var(--font-display);
            font-size: 14px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--color-primary);
            margin: 0 0 16px 0;
        }

        .resume-summary {
            font-family: var(--font-body);
            font-size: 16px;
            line-height: 1.6;
            color: var(--color-text-primary, #ccc);
            margin: 0;
        }

        /* Primary CTA dropdown. <details> wraps a <summary> styled as the
           button; the menu is .resume-download-list absolute-positioned below.
           2026 theme overrides to filled blue — see themes/theme-2026.css. */
        .resume-download-menu {
            position: relative;
            display: inline-block;
            margin-top: 24px;
        }
        /* Kill the native disclosure triangle so the chevron is the only marker. */
        .resume-download-menu > summary { list-style: none; cursor: pointer; }
        .resume-download-menu > summary::-webkit-details-marker { display: none; }
        .resume-download-menu > summary::marker { content: ""; }

        .resume-download {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: var(--font-display);
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--color-black, #000);
            background-color: var(--color-primary);
            text-decoration: none;
            border: 1px solid var(--color-primary);
            padding: 12px 28px;
            transition: all 0.2s;
            user-select: none;
        }

        .resume-download:hover {
            background-color: var(--color-white, #fff);
            color: var(--color-black, #000);
            transform: translateY(-2px);
        }

        .resume-download-chevron {
            display: inline-block;
            font-size: 12px;
            transition: transform 0.2s ease;
        }
        details[open] > .resume-download .resume-download-chevron {
            transform: rotate(180deg);
        }

        .resume-download-list {
            position: absolute;
            top: calc(100% + 6px);
            left: 0;
            min-width: 280px;
            margin: 0;
            padding: 6px;
            list-style: none;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 6px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            z-index: 50;
        }

        .resume-download-list li { margin: 0; }
        .resume-download-list a {
            display: flex;
            align-items: baseline;
            justify-content: flex-start;
            gap: 14px;
            padding: 9px 12px;
            text-decoration: none;
            color: #111;
            border-radius: 4px;
            transition: background-color 0.12s;
        }
        .resume-download-list a:hover,
        .resume-download-list a:focus {
            background-color: #f5f7fa;
            outline: none;
        }

        .resume-download-ext {
            font-family: 'JetBrains Mono', 'SF Mono', Menlo, monospace;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #111;
            min-width: 48px;
        }
        .resume-download-desc {
            font-family: var(--font-body, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif);
            font-size: 12px;
            color: #666;
        }

        /* Featured (PDF) row: subtle blue tint + thin left accent, no extra weight. */
        .resume-download-list__featured a {
            background-color: rgba(0, 102, 255, 0.06);
            box-shadow: inset 3px 0 0 #0066FF;
            padding-left: 14px;
        }
        .resume-download-list__featured a:hover,
        .resume-download-list__featured a:focus {
            background-color: rgba(0, 102, 255, 0.10);
        }
        .resume-download-list__featured .resume-download-ext { color: #0066FF; }

        .resume-section {
            margin-top: 40px;
        }

        .resume-section-title {
            font-family: var(--font-display);
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--color-text-muted, #888);
            margin: 0 0 20px 0;
            padding-bottom: 8px;
            border-bottom: 1px solid rgba(134, 216, 221, 0.15);
        }

        .resume-role {
            margin-bottom: 28px;
        }

        .resume-role-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 4px;
        }

        .resume-role-company {
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 700;
            color: var(--color-text-primary, #fff);
            margin: 0;
        }

        /* Small inline URL next to the company name (Thios → thios.co).
           Lighter weight + smaller so it reads as ancillary, not co-equal. */
        .resume-role-url {
            font-family: 'SF Mono', Menlo, monospace;
            font-size: 12px;
            font-weight: 400;
            color: var(--color-primary);
            text-decoration: none;
            margin-left: 8px;
            opacity: 0.85;
        }
        .resume-role-url:hover { opacity: 1; text-decoration: underline; }

        .resume-role-dates {
            font-family: var(--font-display);
            font-size: 12px;
            color: var(--color-text-muted, #888);
            white-space: nowrap;
        }

        .resume-role-title {
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-primary);
            margin: 0 0 8px 0;
        }

        .resume-role-bullets {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .resume-role-bullets li {
            font-family: var(--font-body);
            font-size: 14px;
            line-height: 1.5;
            color: var(--color-text-primary, #ccc);
            padding: 3px 0 3px 16px;
            position: relative;
        }

        .resume-role-bullets li::before {
            content: '–';
            position: absolute;
            left: 0;
            color: var(--color-text-muted, #666);
        }

        .resume-role-summary {
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-text-muted, #999);
            margin: 0 0 8px 0;
            font-style: italic;
        }

        .resume-earlier-section {
            border-top: 1px solid rgba(134, 216, 221, 0.1);
            padding-top: 16px;
            margin-top: 8px;
        }

        .resume-skills-category {
            margin-bottom: 12px;
        }

        .resume-skills-heading {
            font-family: var(--font-display);
            font-size: 12px;
            letter-spacing: 1px;
            color: var(--color-text-primary, #fff);
            margin: 0 0 4px 0;
            text-transform: uppercase;
        }

        .resume-skills-list {
            font-family: var(--font-body);
            font-size: 13px;
            color: var(--color-text-muted, #888);
            margin: 0;
            line-height: 1.6;
        }

        .resume-education-item {
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-text-primary, #ccc);
            margin-bottom: 4px;
        }

        .resume-education-item strong {
            color: var(--color-text-primary, #fff);
        }

        /* Print styles */
        @media print {
            .resume-download-menu, .resume-download, #site-header, .theme-era-bar { display: none !important; }
            .resume-page { padding: 0; max-width: 100%; }
            .resume-name { font-size: 24px; }
            .resume-role-bullets li { font-size: 12px; }
            body { background: #fff !important; color: #000 !important; }
            * { color: #000 !important; border-color: #ccc !important; }
        }

        @media (max-width: 600px) {
            .resume-role-header { flex-direction: column; gap: 2px; }
            .resume-name { font-size: 24px; }
            .resume-summary { font-size: 14px; }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/lib/site-header.php'; ?>

    <main class="resume-page">

        <header class="resume-header">
            <h1 class="resume-name">Peter Bartsch</h1>
            <p class="resume-title">Staff Product Designer — design systems · AI-native workflow</p>
            <p class="resume-summary">Led UX for a $3.8B subscription platform at Deere across web, mobile, and embedded equipment systems (500K users, 12 languages). Built design org 1→10 at FourKites scaling a real-time IoT asset-tracking platform processing 10M+ daily events ($3M→$100M ARR, $1B+ valuation). Now founder of Thios (<a href="https://thios.co" target="_blank" rel="noopener">thios.co</a>) — running an AI-native workflow (Claude, Cursor, Figma Make) to ship a CAD-driven configurator, dev-grade design system with its own Claude Skill, and physical hardware.</p>
            <!-- Download dropdown — PDF featured at top; all 7 formats available.
                 Uses <details>/<summary> so the menu open/close is browser-native
                 (no JS needed for that). A tiny script at the bottom closes it
                 after a click so it doesn't linger after the file starts saving. -->
            <details class="resume-download-menu">
                <summary class="resume-download" aria-label="Download resume">
                    <span class="resume-download-label">↓ DOWNLOAD RESUME</span>
                    <span class="resume-download-chevron" aria-hidden="true">▾</span>
                </summary>
                <ul class="resume-download-list" role="menu">
                    <li class="resume-download-list__featured" role="none">
                        <a href="Peter-Bartsch-Resume.pdf" download role="menuitem">
                            <span class="resume-download-ext">PDF</span>
                            <span class="resume-download-desc">Recommended &middot; the standard</span>
                        </a>
                    </li>
                    <li role="none"><a href="Peter-Bartsch-Resume.docx" download role="menuitem"><span class="resume-download-ext">DOCX</span><span class="resume-download-desc">Word &middot; ATS-friendly</span></a></li>
                    <li role="none"><a href="Peter-Bartsch-Resume.rtf"  download role="menuitem"><span class="resume-download-ext">RTF</span><span class="resume-download-desc">Rich Text Format</span></a></li>
                    <li role="none"><a href="Peter-Bartsch-Resume.odt"  download role="menuitem"><span class="resume-download-ext">ODT</span><span class="resume-download-desc">OpenDocument &middot; LibreOffice</span></a></li>
                    <li role="none"><a href="Peter-Bartsch-Resume.txt"  download role="menuitem"><span class="resume-download-ext">TXT</span><span class="resume-download-desc">Plain text &middot; accessibility</span></a></li>
                    <li role="none"><a href="Peter-Bartsch-Resume.md"   download role="menuitem"><span class="resume-download-ext">MD</span><span class="resume-download-desc">Markdown &middot; developer-friendly</span></a></li>
                    <li role="none"><a href="Peter-Bartsch-Resume.epub" download role="menuitem"><span class="resume-download-ext">EPUB</span><span class="resume-download-desc">eBook reader</span></a></li>
                </ul>
            </details>
        </header>

        <!-- Builder Receipts — concrete artifacts a recruiter can verify in 60 seconds. -->
        <div class="resume-receipts" aria-label="Builder receipts">
            <p class="receipts-label">// BUILDER RECEIPTS</p>
            <div class="receipts-grid">
                <div class="receipts-item"><span class="receipts-num">500K+</span><span class="receipts-text">Users on Deere's $3.8B subscription platform &mdash; web, mobile, embedded</span></div>
                <div class="receipts-item"><span class="receipts-num">$4B+</span><span class="receipts-text">Combined business impact &mdash; Deere ($3.8B) + FourKites ($1B+ valuation)</span></div>
                <div class="receipts-item"><span class="receipts-num">1</span><span class="receipts-text">Founded company &mdash; <a href="https://thios.co" target="_blank" rel="noopener">Thios</a>, modular structures, 6 sub-brands</span></div>
                <div class="receipts-item"><span class="receipts-num">6</span><span class="receipts-text">Thios sphere variants from one parametric CAD &mdash; <a href="https://thios.co/configurator/" target="_blank" rel="noopener">3D configurator</a></span></div>
                <div class="receipts-item"><span class="receipts-num">1</span><span class="receipts-text">Published Claude Skill &mdash; <a href="https://github.com/Thios-and-Company/audit-design-token-drift" target="_blank" rel="noopener"><code>audit-design-token-drift</code></a></span></div>
            </div>
        </div>

        <section class="resume-section">
            <h2 class="resume-section-title">Professional Experience</h2>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Thios <a href="https://thios.co" target="_blank" rel="noopener" class="resume-role-url">thios.co</a></h3>
                    <span class="resume-role-dates">Aug 2024 – Present</span>
                </div>
                <p class="resume-role-title">Founder & Lead Designer</p>
                <p class="resume-role-summary">Open-source modular structures running on a 5-surface design system where I'm the only designer and agents are the engineering team, every surface (DESIGN.md &harr; tokens.json &harr; main.css &harr; design-system.html &harr; OnShape) ships from one source of truth.</p>
                <ul class="resume-role-bullets">
                    <li><strong>Shipped a complete product ecosystem solo in 21 months</strong> &mdash; 6 sphere variants with CAD models, prototype, first revenue across every surface.</li>
                    <li><strong>Designed and built parametric OnShape CAD as the single source of truth</strong> driving BOM and the <a href="https://thios.co/configurator/" target="_blank" rel="noopener">3D configurator at thios.co/configurator</a> &mdash; customers manipulate real geometry with full configuration state (valid/invalid combinations, loading, error, empty, BOM hand-off), not marketing renders</li>
                    <li><strong>Built a 5-surface, dev-grade design system</strong>, published its first Claude Skill (<a href="https://github.com/Thios-and-Company/audit-design-token-drift" target="_blank" rel="noopener"><code>audit-design-token-drift</code></a>) that catches design-token drift across canonical surfaces with file:line citations. Design system as dev tooling, not a Figma library nobody opens &mdash; <a href="https://www.thios.co/design-system-architecture.html" target="_blank" rel="noopener">thios.co/design-system-architecture</a></li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">John Deere</h3>
                    <span class="resume-role-dates">Aug 2020 – Jul 2024</span>
                </div>
                <p class="resume-role-title">Senior Lead UX; Digital Customer Experience</p>
                <p class="resume-role-summary">Embedded with product teams to modernize 20-year-old systems and drive subscription revenue across connected agricultural equipment. Proving enterprise design can move fast with the right frameworks.</p>
                <ul class="resume-role-bullets">
                    <li><strong>Redesigned the license management system</strong> for connected ag equipment (Automation/AI services) serving 500K+ users across 12 languages &mdash; mapped flows, license states, and edge cases (expired/renewed/transferred/dealer-managed); +34% monthly active authenticated users, &ndash;16% support tickets, enabled $3.8B in subscription revenue</li>
                    <li><strong>Built a unified account and navigation framework</strong> deployed across 8 product lines spanning web, mobile, and embedded equipment systems &mdash; consolidated fragmented experiences into a single customer view; +28% first-contact resolution on dealer support</li>
                    <li><strong>Core contributor to the enterprise design system in Figma</strong> spanning 6 brands and 40+ product teams globally &mdash; produced dev-ready handoffs (tokens, prop specs, full state coverage) that reduced design-to-development time 45% on components that actually shipped</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">FourKites</h3>
                    <span class="resume-role-dates">Jan 2017 – Jan 2020</span>
                </div>
                <p class="resume-role-title">Lead UX / Manager</p>
                <p class="resume-role-summary">Employee #28 during hypergrowth, $3M → $100M ARR ($1B+ valuation). Built the design function from scratch &mdash; founding designer to a 10-person global team.</p>
                <ul class="resume-role-bullets">
                    <li><strong>Designed flagship IoT asset-tracking platform 0→1</strong> &mdash; real-time supply chain control tower (web) and mobile apps processing 10M+ daily GPS/telematics events for 30+ Fortune 2000 customers (Anheuser-Busch, Georgia-Pacific, Tyson); high-density dashboards with map, list, and timeline views became the primary driver of 3x customer expansion</li>
                    <li><strong>Led predictive analytics dashboards</strong> (data viz, anomaly states, alerting workflows) that identified shipment delays 6&ndash;12 hours earlier than competitors; +41% retention, +$120K avg ACV</li>
                    <li><strong>Scaled the design org across Chicago and Chennai</strong> embedded in engineering sprint cadence; established component library, design ops, and hiring framework &mdash; &ndash;65% one-off component variants while maintaining startup velocity</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">MavenWave Partners</h3>
                    <span class="resume-role-dates">Jan 2014 – Jan 2017</span>
                </div>
                <p class="resume-role-title">Senior UX + Agile Lead</p>
                <p class="resume-role-summary">Led digital product design for Fortune 500 healthcare and pharma clients. Fast iteration in slow-moving industries.</p>
                <ul class="resume-role-bullets">
                    <li><strong>Designed 6 internal portals for AbbVie</strong> supporting 200K+ users across clinical trials and patient support programs &mdash; improved medication adherence tracking, &ndash;12% hospital readmissions</li>
                    <li>Rebuilt OptumRx pharmacy formulary platform processing 1.4B prescriptions annually &mdash; created the company's first patient-facing product; &ndash;15% drug-interaction–related fulfillment errors</li>
                    <li><strong>Established Lean UX</strong> and Agile/sprint-cadence practices across client engagements while mentoring junior designers and leading cross-functional design sprints</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Nokia / HERE Maps</h3>
                    <span class="resume-role-dates">Aug 2012 &ndash; Jan 2014</span>
                </div>
                <p class="resume-role-title">Product Marketing Manager, HERE Traffic</p>
                <p class="resume-role-summary">Product work across real-time vehicle-telematics data products and an open-source distributed computing project (DEMPSY, a Hadoop alternative).</p>
                <ul class="resume-role-bullets">
                    <li><strong>Designed GPS probe visualizations</strong> and a probe viewer app for real-time connected-vehicle telematics analysis</li>
                    <li><strong>Wireframed and led project delivery for HERE Real-Time Traffic and Trapster app</strong> integrations across connected-vehicle data products</li>
                    <li><strong>Owned go-to-market for DEMPSY,</strong> an open-source distributed computing platform &mdash; early exposure to designing for developer audiences</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Gogo Inflight Internet</h3>
                    <span class="resume-role-dates">Apr 2008 &ndash; Aug 2012</span>
                </div>
                <p class="resume-role-title">Product Manager &mdash; Signature Services</p>
                <p class="resume-role-summary">Aerospace connectivity: launched in-flight internet across major US airlines &mdash; onboard hardware + Air-to-Ground RF network. $700M to <em>get</em> to market.</p>
                <ul class="resume-role-bullets">
                    <li><strong>Owned airborne products and onboard hardware UX</strong> for major US airlines, including initial rollout testing across fleets</li>
                    <li><strong>Authored FAA-approved documentation</strong> for business and commercial fleet Air-to-Ground (ATG) RF connectivity systems</li>
                    <li><strong>Designed an in-flight flight tracker 0→1</strong> (real-time positional data + passenger UX) that drove successful sponsorship deals</li>
                </ul>
            </div>

        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Skills</h2>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">UX Systems</h3>
                <p class="resume-skills-list">User flows &middot; journey mapping &middot; IA &middot; interaction design &middot; state management &middot; edge-case coverage (idle/loading/success/error/empty) &middot; information density &middot; dashboards &middot; enterprise design systems &middot; design tokens &middot; accessibility (WCAG 2.1)</p>
            </div>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">Research & Methods</h3>
                <p class="resume-skills-list">User interviews &middot; usability testing &middot; design sprints &middot; Lean UX &middot; Agile/Scrum sprint cadence &middot; PRD/RFC participation</p>
            </div>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">AI-Native Workflow</h3>
                <p class="resume-skills-list">Claude (incl. authoring custom Claude Skill) &middot; Cursor &middot; Figma Make &middot; Adobe Firefly &middot; Midjourney &middot; Obsidian as knowledge base</p>
            </div>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">Tools</h3>
                <p class="resume-skills-list">Figma &middot; OnShape CAD &middot; Blender 3D &middot; HTML/CSS &middot; Adobe Creative Suite</p>
            </div>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Education</h2>
            <p class="resume-education-item"><strong>Arizona State University</strong> — Bachelor of Arts, Humanities and Architectural Theory</p>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Community</h2>
            <p class="resume-education-item"><strong>Member, Board of Directors</strong> | How Weird Street Faire 501(c)(3) San Francisco Street Fair 2000 &ndash; 2024</p>
        </section>

    </main>

    <script>
        // Close the resume download dropdown after a format is picked,
        // and let users dismiss it by clicking outside.
        (function () {
            var menu = document.querySelector('.resume-download-menu');
            if (!menu) return;
            menu.querySelectorAll('.resume-download-list a').forEach(function (a) {
                a.addEventListener('click', function () { menu.open = false; });
            });
            document.addEventListener('click', function (e) {
                if (menu.open && !menu.contains(e.target)) menu.open = false;
            });
        })();
    </script>
    <script src="themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
