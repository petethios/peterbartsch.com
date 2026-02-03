<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thios: AI as Technical Co-founder | Peter Bartsch Case Study</title>
    <meta name="description" content="How I used AI as a technical co-founder to build a complete product ecosystem in 18 months—brand, websites, CAD models, and revenue-generating handbook.">
    <link rel="canonical" href="https://peterbartsch.com/case-studies/thios">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="Thios: AI as Technical Co-founder | Peter Bartsch">
    <meta property="og:description" content="How I used AI as a technical co-founder to build a complete product ecosystem in 18 months.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-studies/thios">
    <meta property="og:image" content="https://peterbartsch.com/img/thios-01.png">

    <!-- Fonts -->
    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <style>
        /* Case Study Page Specific Styles */
        .case-study-page {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 24px 80px;
        }

        .case-study-header {
            margin-bottom: 40px;
        }

        .case-study-breadcrumb {
            font-family: var(--font-body);
            font-size: 13px;
            color: var(--color-text-muted);
            margin-bottom: 20px;
        }

        .case-study-breadcrumb a {
            color: var(--color-primary);
            text-decoration: none;
        }

        .case-study-breadcrumb a:hover {
            text-decoration: underline;
        }

        .case-study-title {
            font-family: var(--font-display);
            font-size: 36px;
            color: var(--color-white);
            margin: 0 0 12px 0;
            text-shadow: 0 0 20px rgba(134, 216, 221, 0.4);
        }

        .case-study-subtitle {
            font-family: var(--font-body);
            font-size: 18px;
            color: var(--color-text-muted);
            margin: 0 0 24px 0;
        }

        .case-study-meta {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-text-muted);
            padding: 16px 0;
            border-top: 1px solid rgba(134, 216, 221, 0.2);
            border-bottom: 1px solid rgba(134, 216, 221, 0.2);
        }

        .case-study-meta-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .case-study-meta-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--color-primary);
        }

        .case-study-hero {
            margin: 40px 0;
            border: 2px solid rgba(134, 216, 221, 0.3);
            overflow: hidden;
        }

        .case-study-hero img {
            width: 100%;
            height: auto;
            display: block;
        }

        .case-study-section {
            margin: 48px 0;
        }

        .case-study-section h2 {
            font-family: var(--font-display);
            font-size: 20px;
            color: var(--color-primary);
            margin: 0 0 20px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .case-study-section p {
            font-family: var(--font-readable);
            font-size: 16px;
            line-height: 1.8;
            color: var(--color-text-primary);
            margin: 0 0 16px 0;
        }

        .case-study-section ul {
            font-family: var(--font-readable);
            font-size: 15px;
            line-height: 1.7;
            color: var(--color-text-primary);
            padding-left: 24px;
            margin: 0 0 16px 0;
        }

        .case-study-section li {
            margin-bottom: 12px;
        }

        .case-study-metrics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin: 32px 0;
        }

        .case-study-metric {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(134, 216, 221, 0.2);
            padding: 24px;
            text-align: center;
        }

        .case-study-metric-value {
            font-family: var(--font-display);
            font-size: 32px;
            color: var(--color-primary);
            margin: 0;
        }

        .case-study-metric-label {
            font-family: var(--font-body);
            font-size: 12px;
            color: var(--color-text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 8px;
        }

        .case-study-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
            margin: 32px 0;
        }

        .case-study-gallery img {
            width: 100%;
            height: auto;
            border: 1px solid rgba(134, 216, 221, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .case-study-gallery img:hover {
            transform: scale(1.02);
            border-color: var(--color-primary);
        }

        .case-study-cta {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 40px;
            padding-top: 40px;
            border-top: 1px solid rgba(134, 216, 221, 0.2);
        }

        .case-study-cta a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-display);
            font-size: 12px;
            color: var(--color-text-primary);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 24px;
            background-color: var(--color-primary-darker);
            border: 3px solid var(--color-primary);
            transition: all 0.3s ease;
        }

        .case-study-cta a:hover {
            background-color: var(--color-primary);
            border-color: var(--color-white);
            transform: translateY(-2px);
        }

        .case-study-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid rgba(134, 216, 221, 0.2);
        }

        .case-study-nav a {
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--color-primary);
            text-decoration: none;
        }

        .case-study-nav a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .case-study-title {
                font-size: 28px;
            }

            .case-study-meta {
                gap: 16px;
            }

            .case-study-metric-value {
                font-size: 24px;
            }
        }
    </style>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-QB3EL923YF');
    </script>
</head>
<body>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home">
                <img src="../pblogo.svg" alt="PB logo" height="40" />
            </a>
            <nav style="display: flex; gap: 16px;">
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
                <h1 class="case-study-title">THIOS: AI AS TECHNICAL CO-FOUNDER</h1>
                <p class="case-study-subtitle">Building a complete product ecosystem solo in 18 months using AI as a force multiplier</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Role</span>
                        <span>Founder & Lead Designer</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Timeline</span>
                        <span>Aug 2024 – Present</span>
                    </div>
                    <div class="case-study-meta-item">
                        <span class="case-study-meta-label">Skills</span>
                        <span>Product Strategy, CAD, Web Dev, AI Workflows</span>
                    </div>
                </div>
            </header>

            <div class="case-study-hero">
                <img src="../img/thios-01.png" alt="Thios modular shelter system">
            </div>

            <section class="case-study-section">
                <h2>The Challenge</h2>
                <p>Can AI compress the timeline from idea to market for a solo founder shipping physical products? I wanted to test whether an experienced generalist could operate across traditional role boundaries—product strategy, marketing, design, and development—using AI as a technical co-founder.</p>
                <p>The goal: Build open-source modular shelter systems that transform parking-spot-sized spaces into productive environments, from brand identity through physical prototype and revenue.</p>
            </section>

            <div class="case-study-metrics">
                <div class="case-study-metric">
                    <p class="case-study-metric-value">18mo</p>
                    <p class="case-study-metric-label">Idea to Revenue</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">70%</p>
                    <p class="case-study-metric-label">Faster Prototyping</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">5</p>
                    <p class="case-study-metric-label">Shelter Variants</p>
                </div>
                <div class="case-study-metric">
                    <p class="case-study-metric-value">3</p>
                    <p class="case-study-metric-label">Websites Built</p>
                </div>
            </div>

            <section class="case-study-section">
                <h2>Approach</h2>
                <p>I treated AI as my technical co-founder, using different tools for different phases:</p>
                <ul>
                    <li><strong>Research & Strategy:</strong> Obsidian MD + AI for project management and research synthesis</li>
                    <li><strong>Design:</strong> Figma for visual design, with AI-assisted design-to-code workflows</li>
                    <li><strong>Development:</strong> Progressed from GitHub Copilot → Cursor → Claude Code, with each tool enabling faster iteration</li>
                    <li><strong>CAD/Physical:</strong> OnShape for 3D modeling, with AI helping translate concepts into precise specifications</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Created complete product ecosystem: brand identity inspired by early 2000s open-source culture, 3 websites (thios.co, blog, store), 5 shelter variants with CAD models, physical prototype, and handbook generating first revenue</li>
                    <li>Compressed prototyping cycles 70% through conversational development</li>
                    <li>Validated AI as practical force multiplier for startups—proving that any prototype is possible with the right workflows</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
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
                <a href="../Peter-Bartsch-Case-Study_Thios.pdf" target="_blank">
                    <img src="../pdf.png" alt="" width="18" height="18"> Download Full Case Study (PDF)
                </a>
                <a href="https://thios.co/configurator" target="_blank">
                    Try the 3D Configurator →
                </a>
            </div>

            <nav class="case-study-nav">
                <a href="../">← Back to Portfolio</a>
                <a href="deere-common-ux">Next: Deere Common UX →</a>
            </nav>
        </article>
    </main>

    <script>
        // Track page view
        if (typeof gtag === 'function') {
            gtag('event', 'case_study_view', {
                'event_category': 'engagement',
                'event_label': 'thios'
            });
        }
    </script>
</body>
</html>
