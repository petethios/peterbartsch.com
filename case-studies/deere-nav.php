<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Deere: Platform Unification | Peter Bartsch Case Study</title>
    <meta name="description" content="Unified navigation across 47 sites with zero-downtime migration—creating a single customer view across 8 product lines.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/deere-nav">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="John Deere: Platform Unification | Peter Bartsch">
    <meta property="og:description" content="Unified navigation across 47 sites with zero-downtime migration.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/deere-nav">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="case-study.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="John Deere: Platform Unification | Peter Bartsch">
    <meta name="twitter:description" content="Unified navigation across 47 sites with zero-downtime migration.">
    <meta name="twitter:image" content="https://petebartsch.com/og-image.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "John Deere: One System, 47 Products",
      "description": "Unifying navigation across 47 product sites without breaking a single live product.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/deere-nav"
    }
    </script>
</head>
<body>
    <?php include('../themes/theme-banner.php'); ?>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home"><img src="../pblogo.svg" alt="PB logo" height="40" /></a>
            <nav aria-label="Breadcrumb" style="display: flex; gap: 16px;"><a href="../" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Portfolio</a></nav>
        </div>
    </header>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Platform Unification</nav>
                <h1 class="case-study-title">DEERE: PLATFORM UNIFICATION</h1>
                <p class="case-study-subtitle">Unifying navigation across 47 acquired properties with zero-downtime migration—enabling a single customer view</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Senior Lead UX — Enterprise Platforms</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>Navigation Systems · Design System Governance · Cross-Platform Patterns</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2021 – 2023</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">47</p><p class="case-study-metric-label">Sites Unified</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">0</p><p class="case-study-metric-label">Downtime</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">45%</p><p class="case-study-metric-label">Faster Handoffs</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">40+</p><p class="case-study-metric-label">Teams Aligned</p></div>
            </div>

            <div class="case-study-hero"><img src="../img/deere-03.png" alt="Deere unified navigation"></div>

            <section class="case-study-section">
                <h2>The Strategic Problem</h2>
                <p>Deere's digital ecosystem had grown organically over 20+ years through acquisitions, resulting in <strong>47 disparate customer experiences with no unified navigation</strong>. A farmer using precision ag software had no clear path to parts ordering or financing—hurting adoption and reinforcing siloed perceptions of value.</p>
                <p><strong>The challenge wasn't just visual consistency. It was creating a unified experience across independent teams, legacy systems, and multiple brands—without breaking anything.</strong></p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>Why This Was Hard</h2>
                <p>This wasn't a design refresh—it was organizational coordination at enterprise scale:</p>
                <ul>
                    <li><strong>Governance complexity:</strong> 40+ product teams with independent backlogs, priorities, and release cycles</li>
                    <li><strong>Brand diversity:</strong> 6 acquired companies with distinct brand identities and customer expectations</li>
                    <li><strong>Technical fragmentation:</strong> Legacy systems with varying tech stacks, APIs, and deployment patterns</li>
                    <li><strong>Zero tolerance for downtime:</strong> Farmers depend on these tools during critical planting and harvest windows</li>
                    <li><strong>Cross-platform scope:</strong> Web, mobile, and in-cab displays all needed consistent patterns</li>
                </ul>
                <p style="margin-top: 16px; margin-bottom: 0;"><strong>A top-down mandate would have created resistance. A bottom-up approach would have taken years.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Strategy</h2>
                <p>We treated this as a <strong>governance problem first, design problem second</strong>. Our approach:</p>
                <ul>
                    <li><strong>Shared Ownership:</strong> Established navigation as a cross-team concern with clear roles, not a central team's mandate</li>
                    <li><strong>Progressive Adoption:</strong> Migrated sites in waves, gathering feedback and iterating between phases—no big-bang rollout</li>
                    <li><strong>Value-First Positioning:</strong> Framed unification as "unlocking cross-sell and customer satisfaction" not "enforcing consistency"</li>
                    <li><strong>Platform Flexibility:</strong> Patterns adapted for context—web, mobile, and in-cab displays—while maintaining conceptual coherence</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>Execution</h2>
                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Design System as Contract</h3>
                <p>Built shared navigation components in Figma with clear specs, usage guidelines, and governance processes. Teams could adopt at their own pace, but the contract was clear.</p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Cross-Functional Alignment</h3>
                <p>Weekly syncs with engineering, product, and brand stakeholders ensured buy-in and surfaced blockers early. Navigation became a shared language, not a design team deliverable.</p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Zero-Downtime Migration</h3>
                <p>Coordinated rollouts with engineering to ensure no customer-facing disruption. Each wave was tested, monitored, and validated before proceeding.</p>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Consolidated <strong>47 fragmented experiences</strong> into a single trusted navigation paradigm</li>
                    <li>Reduced design-to-development handoff time by <strong>45%</strong> through standardized components</li>
                    <li>Achieved <strong>zero downtime</strong> during migration</li>
                    <li>Established an <strong>enterprise design system</strong> used by 6 brands and 40+ teams globally</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>What This Unlocked</h2>
                <p>This work created:</p>
                <ul>
                    <li>A <strong>reusable governance model</strong> for future cross-team initiatives</li>
                    <li><strong>Customer confidence</strong> in Deere as a unified digital platform, not a collection of tools</li>
                    <li>A <strong>foundation for the Forced Adoption work</strong>—unified navigation made cross-product onboarding possible</li>
                </ul>
                <p><strong>The real outcome was proving that enterprise-scale design unification is possible without top-down mandates—if you treat it as a coordination problem.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/deere-03.png" alt="Deere unified navigation system" loading="lazy">
                    <img src="../img/deere-04.png" alt="Deere design system components" loading="lazy">
                    <img src="../img/deere-05.png" alt="Deere cross-platform patterns" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Interested in discussing enterprise design challenges or exploring opportunities?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/petermbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="deere-common-ux.php">← Previous: Forced Adoption</a>
                <a href="fourkites-tracking.php">Next: Data Trust →</a>
            </nav>
        </article>
    </main>

    <script>if (typeof gtag === 'function') { gtag('event', 'case_study_view', { 'event_category': 'engagement', 'event_label': 'deere-nav' }); }</script>
    <script src="../themes/theme-switcher.js"></script>
</body>
</html>
