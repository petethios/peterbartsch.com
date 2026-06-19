<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Deere: Running the Farm from a Phone | Peter Bartsch Case Study</title>
    <meta name="description" content="Bringing John Deere's whole app portfolio—account, equipment, operations, financial—to where farmers actually work: a phone in a gloved hand, in the field, with the signal dropping.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/deere-mobile">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="John Deere: Running the Farm from a Phone | Peter Bartsch">
    <meta property="og:description" content="John Deere's app portfolio, designed for the cab—not the desk.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/deere-mobile">
    <meta property="og:image" content="https://petebartsch.com/img/deere-mobile-account.png">

    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css?v=<?php echo filemtime(__DIR__ . '/../styles.css'); ?>">
    <link rel="stylesheet" href="case-study.css?v=<?php echo filemtime(__DIR__ . '/case-study.css'); ?>">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="John Deere: Running the Farm from a Phone | Peter Bartsch">
    <meta name="twitter:description" content="John Deere's app portfolio, designed for the cab—not the desk.">
    <meta name="twitter:image" content="https://petebartsch.com/img/deere-mobile-account.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script src="/analytics.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "John Deere: Running the Farm from a Phone",
      "description": "John Deere's mobile app portfolio—account, navigation, and onboarding—designed for the field, not the desk.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/deere-mobile",
      "datePublished": "2026-05-05"
    }
    </script>

    <style>
        /* Two-up hero — the shared account in one app | the portfolio hub. */
        .cs-hero-duo {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin: 40px 0;
            padding: 24px;
            background: linear-gradient(180deg, #14181c 0%, #0c0f12 100%);
            border: 1px solid rgba(134, 216, 221, 0.18);
            border-radius: 12px;
        }
        .cs-hero-duo figure { margin: 0; text-align: center; }
        .cs-hero-duo img {
            width: 100%;
            height: 440px;
            object-fit: contain;
            object-position: top center;
            border-radius: 6px;
        }
        .cs-hero-duo figcaption {
            font-family: var(--font-display, 'Space Mono', monospace);
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--color-primary);
            margin-top: 12px;
        }
        /* Mobile craft-decision list */
        .cs-decisions {
            display: grid;
            gap: 0;
            margin-top: 28px;
            border-top: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-decision {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 20px;
            padding: 22px 0;
            border-bottom: 1px solid var(--cs-border-color, rgba(134, 216, 221, 0.2));
        }
        .cs-decision__num {
            font-family: var(--font-display, 'Space Mono', monospace);
            color: var(--color-primary);
            font-size: 15px;
            padding-top: 2px;
        }
        .cs-decision h4 {
            font-family: var(--font-display);
            font-size: 16px;
            color: var(--color-white);
            margin: 0 0 6px 0;
        }
        .cs-decision p {
            font-family: var(--font-readable);
            font-size: 15px;
            line-height: 1.65;
            color: var(--cs-text-color, rgba(255, 255, 255, 0.82));
            margin: 0;
        }
        @media (max-width: 600px) {
            .cs-hero-duo { grid-template-columns: 1fr; gap: 24px; padding: 16px; }
            .cs-hero-duo img { height: auto; max-height: 460px; }
            .cs-decision { grid-template-columns: 34px 1fr; gap: 12px; }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Mobile</nav>
                <h1 class="case-study-title">JOHN DEERE: RUNNING THE FARM FROM A PHONE</h1>
                <p class="case-study-subtitle">Bringing John Deere's whole app portfolio—account, equipment, operations, financial—to where farmers actually work: a phone in a gloved hand, in the field, with the signal dropping.</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Senior Lead UX — Enterprise Platforms</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>Mobile Account &amp; Identity · Navigation · Onboarding · Design System</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2020 – 2024</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">8</p><p class="case-study-metric-label">Apps · One System</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">500K+</p><p class="case-study-metric-label">Users · 12 Languages</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">40+</p><p class="case-study-metric-label">Teams Aligned</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">$3.8B</p><p class="case-study-metric-label">Revenue Enabled</p></div>
            </div>

            <!-- Two-up hero -->
            <div class="cs-hero-duo">
                <figure>
                    <img src="../img/deere-mobile-account.png" alt="John Deere Equipment Mobile — the account shell: organization, profile, and navigation shared across apps" loading="eager">
                    <figcaption>One account · in every app</figcaption>
                </figure>
                <figure>
                    <img src="../img/deere-mobile-appcenter.png" alt="John Deere App Center — the whole mobile portfolio in one place" loading="eager">
                    <figcaption>The whole portfolio · in your hand</figcaption>
                </figure>
            </div>

            <section class="case-study-section">
                <h2>01 · The Problem</h2>
                <p>A farmer runs their business from the cab, not a desk. But John Deere's software grew up on the desktop—so the moment a customer reached for their phone in a field, they hit <strong>five or six separate apps</strong> (equipment, operations, parts, financial, dealer support), each built by a different team, each with its own login and its own idea of navigation.</p>
                <p>Manageable at an office desk. <strong>Miserable standing in a field with gloves on and one bar of signal.</strong> Mobile wasn't a smaller version of the web product—it was the surface where the seams hurt most, and where fixing them mattered most, because the field is where the work actually happens.</p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>02 · Why This Was Hard</h2>
                <p>This wasn't one app's redesign. It was a mobile system that had to land across an organization—and survive the field:</p>
                <ul>
                    <li><strong>40+ product teams</strong> on independent backlogs, across iOS, Android, and in-cab displays</li>
                    <li><strong>6 brands</strong> with distinct identities that still had to feel like one Deere in your hand</li>
                    <li><strong>The field itself:</strong> gloves, glare, dust, and a signal that quits the moment you leave the yard</li>
                    <li><strong>500K+ users across 12 languages</strong>, from highly technical operators to customers without reliable email</li>
                    <li><strong>Account sensitivity:</strong> equipment, financial, and operational data sat behind these flows—the bar for trust on a personal device was high</li>
                </ul>
                <p style="margin-top: 16px; margin-bottom: 0;"><strong>A design imposed top-down would have been ignored. The system had to be good enough that 40+ teams chose it.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>03 · One Account, Every App</h2>
                <p>The fix was the <strong>connective tissue every app shares</strong>—sign-in, account, organization, profile, and navigation—designed once and adopted across the portfolio. On mobile that's not a nicety; it's the difference between working and not:</p>
                <ul>
                    <li><strong>One account, carried everywhere:</strong> sign in once and the same identity, organization, and profile surface in every app—so you're not logging into five apps in a dead zone.</li>
                    <li><strong>One way to navigate:</strong> consistent tabs, section hierarchy, and back-behavior, so a pattern learned in one app transfers to the next when you've no time and no signal to relearn it.</li>
                    <li><strong>One front door:</strong> a portfolio hub to find and move between the apps that fit your operation.</li>
                    <li><strong>Onboarding that earns the data:</strong> progressive account and license setup—the mobile face of the adoption work that lifted authenticated active users.</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>04 · Designed for the Field</h2>
                <p>Every decision started from the customer's hands and their context—a moving cab, direct sun, gloves, and connectivity that quits the moment they leave the yard. The craft was making enterprise software survive that.</p>
                <div class="cs-decisions">
                    <div class="cs-decision"><span class="cs-decision__num">a.</span><div><h4>Built for gloved hands</h4><p>Oversized targets and one-handed reach. Nobody pulls off a work glove to tap a minimum-size button—so nothing critical lived at minimum size.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">b.</span><div><h4>Legible in direct sun</h4><p>High-contrast type and state colors that hold up through glare on a dusty screen, not just in a design tool on a bright monitor.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">c.</span><div><h4>Offline-tolerant by default</h4><p>Account, equipment, and key data cached; actions queue and reconcile when signal returns. The field has dead zones—the app couldn't.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">d.</span><div><h4>One sign-in, no re-login</h4><p>Authenticate once and the identity carries across every app, so a low-signal field never locks a customer out of the next tool they need.</p></div></div>
                    <div class="cs-decision"><span class="cs-decision__num">e.</span><div><h4>Localized at a glance</h4><p>The same patterns had to read correctly across 12 languages—for operators working in English, Spanish, or German—without breaking the layout.</p></div></div>
                </div>
                <p style="margin-top: 24px;">The license and account work specifically—mapping every state (active, expired, transferred, dealer-managed) for the device in a customer's pocket—was the part they actually felt: <strong>+34% monthly active authenticated users and −16% support tickets</strong>, the unlock for $3.8B in connected-services revenue.</p>
            </section>

            <section class="case-study-section">
                <h2>05 · Consistency at Scale</h2>
                <p>None of this holds without a system the teams can build from. As a contributor to the enterprise design system in Figma—spanning <strong>6 brands and 40+ teams</strong>—the account and navigation patterns shipped as dev-ready components: tokens, prop specs, full state coverage. The result was consistency that <strong>didn't depend on willpower</strong>, and roughly <strong>45% faster design-to-development handoffs</strong> on the components that actually shipped.</p>
            </section>

            <section class="case-study-section">
                <h2>06 · What It Proves</h2>
                <p>The hard part of enterprise mobile isn't any single screen—it's making a portfolio built by many teams feel like one product, on the device where customers actually work, in the conditions they actually work in.</p>
                <p><strong>Start from the customer's hands and their field</strong>, design the shared layer once, and give 40+ teams a reason to adopt it. The screens change app to app; the experience of being one customer of one company, out where the work happens, doesn't.</p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/deere-mobile-equipment.png" alt="John Deere Equipment Mobile — equipment detail with consistent tab navigation and content sections" loading="lazy">
                    <img src="../img/deere-mobile-financial.png" alt="John Deere Financial — account summary, the same account system in the financial app" loading="lazy">
                    <img src="../img/deere-mobile-appcenter2.png" alt="John Deere App Center — apps organized by operation" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Complex systems, made clear—on every screen they live on, in the conditions they live in. Interested in enterprise mobile at org scale, or hiring?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="deere-nav.php">← Previous: Platform Unification</a>
                <a href="fourkites-tracking.php">Next: Data Trust →</a>
            </nav>
        </article>
    </main>

    <script src="/case-studies/case-study-page.js"></script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
