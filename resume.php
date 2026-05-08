<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Peter Bartsch — Staff Product Designer</title>
    <meta name="description" content="Peter Bartsch — Staff Product Designer. 15+ years designing enterprise systems shipped to 500K+ users. John Deere, FourKites ($1B+ valuation), MavenWave.">
    <link rel="canonical" href="https://petebartsch.com/resume">
    <link rel="icon" type="image/svg+xml" href="pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="Resume | Peter Bartsch — Staff Product Designer">
    <meta property="og:description" content="15+ years designing enterprise systems shipped to 500K+ users.">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://petebartsch.com/resume">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">

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

        .resume-download {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            font-family: var(--font-display);
            font-size: 12px;
            letter-spacing: 1px;
            color: var(--color-primary);
            text-decoration: none;
            border: 1px solid rgba(134, 216, 221, 0.3);
            padding: 8px 16px;
            transition: all 0.2s;
        }

        .resume-download:hover {
            border-color: var(--color-primary);
            background: rgba(134, 216, 221, 0.05);
        }

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
            .resume-download, #site-header, .theme-era-bar { display: none !important; }
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
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="./" class="header-logo" aria-label="Home"><img src="pblogo.svg" alt="PB logo" height="40" /></a>
            <nav aria-label="Breadcrumb" style="display: flex; gap: 16px;"><a href="./" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Portfolio</a></nav>
        </div>
    </header>

    <main class="resume-page">

        <header class="resume-header">
            <h1 class="resume-name">Peter Bartsch</h1>
            <p class="resume-title">Staff Product Designer · Founder</p>
            <p class="resume-summary">Led design for $3.8B platform at Deere (500K users). Built design org 1→10 at FourKites through $3M→$100M ARR ($1B+ valuation). Now founder of Thios — modular structures + agent-native design systems with a published Claude Skill and a pre-registered bench measuring whether the agent infrastructure actually works.</p>
            <a href="Peter-Bartsch-Resume.pdf" class="resume-download" download>↓ DOWNLOAD PDF</a>
        </header>

        <!-- Builder Receipts — concrete artifacts a recruiter can verify in 60 seconds. -->
        <div class="resume-receipts" aria-label="Builder receipts">
            <p class="receipts-label">// BUILDER RECEIPTS</p>
            <div class="receipts-grid">
                <div class="receipts-item"><span class="receipts-num">30</span><span class="receipts-text">Years across web eras &mdash; from CSS hacks to agent-native systems</span></div>
                <div class="receipts-item"><span class="receipts-num">$4B+</span><span class="receipts-text">Combined business impact &mdash; Deere ($3.8B) + FourKites ($1B+ valuation)</span></div>
                <div class="receipts-item"><span class="receipts-num">1</span><span class="receipts-text">Founded company &mdash; <a href="https://thios.co" target="_blank" rel="noopener">Thios</a>, modular structures, 6 sub-brands</span></div>
                <div class="receipts-item"><span class="receipts-num">1</span><span class="receipts-text">Published Claude Skill &mdash; <code>audit-design-token-drift</code></span></div>
                <div class="receipts-item"><span class="receipts-num">1</span><span class="receipts-text">Pre-registered empirical bench &mdash; <a href="https://thios.co/design-system-bench.html" target="_blank" rel="noopener">design-system-bench</a></span></div>
            </div>
        </div>

        <section class="resume-section">
            <h2 class="resume-section-title">Professional Experience</h2>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Thios</h3>
                    <span class="resume-role-dates">Aug 2024 – Present</span>
                </div>
                <p class="resume-role-title">Founder & Lead Designer</p>
                <p class="resume-role-summary">Between enterprise roles — shipped a complete product ecosystem solo using AI tooling to demonstrate full-stack design range.</p>
                <ul class="resume-role-bullets">
                    <li>Created complete product ecosystem solo in 18 months: brand identity inspired by early 2000s open-source culture, 3 websites (thios.co, blog, store), 5 shelter variants with CAD models, physical prototype, and handbook generating first revenue</li>
                    <li>Applied full career toolkit simultaneously—product strategy, marketing, and design execution using GitHub Copilot → Cursor → Anti Gravity progression; proving experienced generalists can operate across traditional role boundaries with AI partnership</li>
                    <li>Established AI-augmented workflows: Obsidian MD + AI for project management and research synthesis; Figma Make for design-to-code; compressed prototyping cycles 70% through conversational development in Cursor and Anti-Gravity & Claude Code</li>
                    <li>Outcomes: Validated AI as practical force multiplier for startups; demonstrating how to maintain product quality while working at solo-founder velocity; any prototype is possible</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">FourKites</h3>
                    <span class="resume-role-dates">Jan 2017 – Jan 2020</span>
                </div>
                <p class="resume-role-title">Lead UX / Manager</p>
                <p class="resume-role-summary">Employee #28 during hypergrowth ($3M to $100M ARR). Built design function from scratch—founding designer to 10-person global team.</p>
                <ul class="resume-role-bullets">
                    <li>Designed flagship products from 0→1: Real-time supply chain control tower and related mobile apps processing 10M+ daily tracking events for 30+ Fortune 2000 companies (Anheuser-Busch, Georgia-Pacific, Tyson); products became primary driver of 3x customer expansion</li>
                    <li>Led bespoke predictive analytics dashboard products identifying shipment delays 6-12 hours earlier than competitors; increased customer retention 41% and expanded average contract value $120K annually</li>
                    <li>Scaled design org: Hired and managed team across Chicago and Chennai; established component library, design operations, and hiring framework—reduced design inconsistencies 65% while maintaining startup velocity</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">John Deere</h3>
                    <span class="resume-role-dates">Aug 2020 – Jul 2024</span>
                </div>
                <p class="resume-role-title">Senior Lead UX; Digital Customer Experience</p>
                <p class="resume-role-summary">Embedded with product teams to modernize 20-year-old systems and drive subscription revenue. Proving enterprise design can move fast when you have the right frameworks.</p>
                <ul class="resume-role-bullets">
                    <li>Redesigned license management system serving 500K+ users across 12 languages—increased authenticated engagement 34%, reduced support tickets 16%, enabled $3.8B in subscription revenue from Automation and AI services</li>
                    <li>Built unified account and navigation framework deployed across 8 product lines (web, mobile, embedded)—consolidated fragmented experiences into single customer view, improved dealer support efficiency 28%</li>
                    <li>Core contributor to enterprise design system in Figma spanning 6 brands and 40+ product teams globally—reduced design-to-development handoff time 45% through standardized components that actually shipped</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">MavenWave Partners</h3>
                    <span class="resume-role-dates">Jan 2014 – Jan 2017</span>
                </div>
                <p class="resume-role-title">Senior UX + Agile Lead (Consultant)</p>
                <p class="resume-role-summary">Led digital product design for Fortune 500 healthcare and pharmaceutical clients. Fast iteration in slow-moving industries.</p>
                <ul class="resume-role-bullets">
                    <li>Designed 6 internal portals for AbbVie supporting 200K+ users across clinical trials and patient support programs—improved medication adherence tracking, reduced hospital readmissions 12%</li>
                    <li>Rebuilt OptumRx pharmacy formulary platform processing 1.4B prescriptions annually—created company's first patient-facing product, reduced fulfillment errors 15% through improved drug interaction warnings</li>
                    <li>Established Lean UX and Agile practices across client engagements while mentoring junior designers and leading cross-functional design sprints</li>
                </ul>
            </div>

        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Skills</h2>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">Design Leadership</h3>
                <p class="resume-skills-list">Enterprise Design Systems • Cross-functional Team Building • Design Operations • Information Architecture • Data Visualization • Accessibility (WCAG 2.1)</p>
            </div>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">Research & Strategy</h3>
                <p class="resume-skills-list">User Research • Usability Testing • Journey Mapping • Design Sprints • Lean UX • Agile/Scrum</p>
            </div>
            <div class="resume-skills-category">
                <h3 class="resume-skills-heading">Tools</h3>
                <p class="resume-skills-list">Figma • Adobe Creative Suite • CAD/3D (OnShape) • HTML/CSS • AI Tools (Claude, Cursor) • Prototyping • AI-Augmented Workflows • AI-Integrated Design • Blender 3D</p>
            </div>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Education</h2>
            <p class="resume-education-item"><strong>Arizona State University</strong> — Bachelor of Arts, Humanities and Architectural Theory</p>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Community</h2>
            <p class="resume-education-item"><strong>Board Director</strong> | How Weird Street Faire 501(c)(3) SF street fair with successful 20 year run (2004 - 2024)</p>
        </section>

    </main>

    <script src="themes/theme-switcher.js"></script>
</body>
</html>
