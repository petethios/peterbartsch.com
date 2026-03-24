<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Peter Bartsch — Staff Product Designer</title>
    <meta name="description" content="Peter Bartsch — Staff Product Designer. 15+ years designing enterprise systems shipped to 500K+ users. John Deere, FourKites ($1.2B exit), MavenWave.">
    <link rel="canonical" href="https://peterbartsch.com/resume">
    <link rel="icon" type="image/svg+xml" href="pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="Resume | Peter Bartsch — Staff Product Designer">
    <meta property="og:description" content="15+ years designing enterprise systems shipped to 500K+ users.">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://peterbartsch.com/resume">
    <meta property="og:image" content="https://peterbartsch.com/og-image.png">

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

        .resume-earlier {
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-text-muted, #888);
            font-style: italic;
        }

        .resume-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .resume-skill {
            font-family: var(--font-display);
            font-size: 11px;
            letter-spacing: 0.5px;
            color: var(--color-text-muted, #888);
            border: 1px solid rgba(134, 216, 221, 0.15);
            padding: 4px 10px;
            white-space: nowrap;
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
            <p class="resume-title">Staff Product Designer</p>
            <p class="resume-summary">Staff Product Designer with 15+ years shipping enterprise systems at scale. Senior IC at a $38B company (John Deere), founding designer at a $1.2B-exit startup (FourKites), and consultant to Fortune 500 clients (AbbVie, OptumRx). I build the systems that get adopted and the teams that sustain them.</p>
            <a href="Peter-Bartsch-Resume.pdf" class="resume-download" download>↓ DOWNLOAD PDF</a>
        </header>

        <section class="resume-section">
            <h2 class="resume-section-title">Experience</h2>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">John Deere</h3>
                    <span class="resume-role-dates">2020 – 2024</span>
                </div>
                <p class="resume-role-title">Senior Lead UX — Digital Customer Experience</p>
                <ul class="resume-role-bullets">
                    <li>Drove profile completion from 34%→87% across 500K+ users, unlocking $3.8B in subscription revenue</li>
                    <li>Built unified navigation framework deployed across 8 product lines (web, mobile, embedded)</li>
                    <li>Established enterprise design system adopted by 40+ teams globally — 45% faster design-to-dev handoffs</li>
                    <li>Enabled predictive maintenance and dealer-led service experiences at scale</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">FourKites</h3>
                    <span class="resume-role-dates">2017 – 2020</span>
                </div>
                <p class="resume-role-title">Lead UX / Design Manager</p>
                <ul class="resume-role-bullets">
                    <li>Employee #28 during hypergrowth ($3M→$100M ARR) — company acquired for $1.2B in 2022</li>
                    <li>Designed flagship tracking platform serving 30+ Fortune 2000 companies; 41% retention increase</li>
                    <li>Built predictive analytics 6–12 hours ahead of competitors; 3x customer expansion</li>
                    <li>Scaled design org from 1→10 designers across US and India</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">MavenWave Partners</h3>
                    <span class="resume-role-dates">2014 – 2017</span>
                </div>
                <p class="resume-role-title">Senior UX + Agile Lead (Consultant)</p>
                <ul class="resume-role-bullets">
                    <li>Designed 6 internal portals for AbbVie (200K+ users) and rebuilt OptumRx pharmacy platform (1.4B prescriptions/year)</li>
                    <li>Led design for 8 enterprise engagements across financial services, manufacturing, and retail</li>
                    <li>Created reusable workshop frameworks that became standard methodology across the firm</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Thios + Co</h3>
                    <span class="resume-role-dates">2024 – Present</span>
                </div>
                <p class="resume-role-title">Designer & Founder</p>
                <ul class="resume-role-bullets">
                    <li>Between-roles project testing AI as a design force multiplier</li>
                    <li>Shipped full product ecosystem solo in 18 months — brand, 3 websites, 5 CAD variants, revenue</li>
                    <li>Used AI as technical co-founder for code, CAD, and brand work; 70% faster prototyping cycles</li>
                    <li>Built 3D product configurator (Three.js, React) with AR preview</li>
                </ul>
            </div>

            <div class="resume-role">
                <div class="resume-role-header">
                    <h3 class="resume-role-company">Nokia (HERE Maps)</h3>
                    <span class="resume-role-dates">2012 – 2014</span>
                </div>
                <p class="resume-role-title">Product Marketing Manager</p>
                <ul class="resume-role-bullets">
                    <li>UI components and iconography for HERE Maps serving 100M+ monthly users</li>
                    <li>Visual specifications bridging design-to-engineering across 4 international teams</li>
                </ul>
            </div>

            <p class="resume-earlier">Earlier: Gogo Inflight Wi-Fi (Product Manager), Cognistar (Co-Founder), SkyMall.com, tronicmedia</p>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Skills</h2>
            <div class="resume-skills">
                <span class="resume-skill">Design Systems</span>
                <span class="resume-skill">Enterprise UX</span>
                <span class="resume-skill">0→1 Product Design</span>
                <span class="resume-skill">Org Building</span>
                <span class="resume-skill">Information Architecture</span>
                <span class="resume-skill">Data Visualization</span>
                <span class="resume-skill">User Research</span>
                <span class="resume-skill">Design Sprints</span>
                <span class="resume-skill">Figma</span>
                <span class="resume-skill">HTML/CSS/JS</span>
                <span class="resume-skill">Three.js / React</span>
                <span class="resume-skill">AI-Augmented Workflows</span>
                <span class="resume-skill">Accessibility</span>
                <span class="resume-skill">CAD / Blender 3D</span>
            </div>
        </section>

        <section class="resume-section">
            <h2 class="resume-section-title">Education</h2>
            <p class="resume-education-item"><strong>Arizona State University</strong> — BA, Humanities & Architectural Theory</p>
        </section>

    </main>

    <script src="themes/theme-switcher.js"></script>
</body>
</html>
