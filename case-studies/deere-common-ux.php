<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Deere: Forced Adoption at Scale | Peter Bartsch Case Study</title>
    <meta name="description" content="How I drove 34%→87% profile completion across 500K+ users while enabling $3.8B in connected-services revenue—without destroying trust.">
    <link rel="canonical" href="https://petebartsch.com/case-studies/deere-common-ux">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <!-- Open Graph -->
    <meta property="og:title" content="John Deere: Forced Adoption at Scale | Peter Bartsch">
    <meta property="og:description" content="Driving platform adoption without destroying trust—profile completion 34% to 87%.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/case-studies/deere-common-ux">
    <meta property="og:image" content="https://petebartsch.com/img/og-deere-common-ux.png">

    <!-- Fonts -->
    <link rel="preload" href="../rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../ari.ttf" as="font" type="font/ttf" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css?v=<?php echo filemtime(__DIR__ . '/../styles.css'); ?>">
    <link rel="stylesheet" href="case-study.css?v=<?php echo filemtime(__DIR__ . '/case-study.css'); ?>">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="John Deere: Forced Adoption at Scale | Peter Bartsch">
    <meta name="twitter:description" content="Driving platform adoption without destroying trust—profile completion 34% to 87%.">
    <meta name="twitter:image" content="https://petebartsch.com/img/og-deere-common-ux.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script src="/analytics.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "John Deere: Forced Adoption at Scale",
      "description": "How I drove 34%→87% profile completion across 500K+ users while enabling $3.8B in connected-services revenue.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/case-studies/deere-common-ux"
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="case-study-page">
        <article>
            <header class="case-study-header">
                <nav class="case-study-breadcrumb"><a href="../">Portfolio</a> / <a href="../#right">Case Studies</a> / Forced Adoption</nav>
                <h1 class="case-study-title">DEERE: FORCED ADOPTION AT SCALE</h1>
                <p class="case-study-subtitle">Driving platform-wide data adoption across 500K+ users without destroying trust—enabling $3.8B in connected-services revenue</p>
                <div class="case-study-meta">
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Role</span><span>Senior Lead UX — Enterprise Platforms</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Scope</span><span>Account Systems · Identity · Dealer Workflows · Multi-channel Onboarding</span></div>
                    <div class="case-study-meta-item"><span class="case-study-meta-label">Timeline</span><span>2020 – 2024</span></div>
                </div>
            </header>

            <div class="case-study-metrics">
                <div class="case-study-metric"><p class="case-study-metric-value">34%→87%</p><p class="case-study-metric-label">Profile Completion</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">$3.8B</p><p class="case-study-metric-label">Revenue Enabled</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">-16%</p><p class="case-study-metric-label">Support Burden</p></div>
                <div class="case-study-metric"><p class="case-study-metric-value">500K+</p><p class="case-study-metric-label">Users · 12 Languages</p></div>
            </div>

            <p class="case-study-outcome">Drove forced adoption 34%&rarr;87% across 500K users &mdash; unlocking $3.8B without breaking trust.</p>

            <div class="case-study-hero"><img src="../img/deere-01.png" alt="John Deere Common UX platform"></div>

            <section class="case-study-section">
                <h2>The Strategic Problem</h2>
                <p>John Deere's future depended on connected services, automation, and AI—but those capabilities required high-quality customer data. The existing model relied on optional data sharing across a fragmented ecosystem of legacy systems, which resulted in low adoption, incomplete profiles, and limited downstream value.</p>
                <p><strong>The challenge wasn't convincing users to click through forms. It was forcing adoption without eroding trust in a 185-year-old brand built on reliability.</strong></p>
            </section>

            <section class="case-study-section case-study-constraints">
                <h2>Why This Was Hard</h2>
                <p>This problem sat at the intersection of business risk, user trust, and organizational complexity:</p>
                <ul>
                    <li><strong>User diversity:</strong> Customers ranged from highly technical operators to users without email access—and accessibility couldn't be an afterthought across that range</li>
                    <li><strong>Data sensitivity:</strong> Sharing triggered deep concerns around surveillance, ownership, and value exchange</li>
                    <li><strong>System fragmentation:</strong> Decades of acquisitions left inconsistent data models, legacy systems, and accumulated tech debt</li>
                    <li><strong>Sales-model variance:</strong> The same equipment was sold a dozen ways—per acre, per hour of use, outright, dealer-financed—so there was no single "customer" or "transaction" to design the flow around</li>
                    <li><strong>Relationship complexity:</strong> Dealers—not Deere—owned many customer relationships</li>
                    <li><strong>Hardware on a waterfall:</strong> Connected services ride on machines shipped on multi-year manufacturing cycles—you can't sprint embedded-equipment UX when the tractor it lives on is on a manufacturing waterfall</li>
                    <li><strong>Global scale:</strong> 12 languages across diverse regulatory environments</li>
                </ul>
                <p style="margin-top: 16px; margin-bottom: 0;"><strong>A purely coercive approach would have increased churn and damaged long-term brand trust.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>The System Underneath</h2>
                <p>Designing the adoption flow meant first modelling the system it lived in &mdash; every state, every transition, every edge case &mdash; so we built for reality, not the happy path.</p>

                <figure class="license-diagram" aria-label="License lifecycle: Unclaimed to Claimed to Active to Expired, renewed each cycle">
                    <div class="lc-flow">
                        <div class="lc-state"><span class="lc-state-name">UNCLAIMED</span></div>
                        <span class="lc-arrow" aria-hidden="true">&rarr;</span>
                        <div class="lc-state"><span class="lc-state-name">CLAIMED</span></div>
                        <span class="lc-arrow" aria-hidden="true">&rarr;</span>
                        <div class="lc-state lc-state--goal"><span class="lc-state-name">ACTIVE</span><span class="lc-state-tag">goal state</span></div>
                        <span class="lc-arrow" aria-hidden="true">&rarr;</span>
                        <div class="lc-state"><span class="lc-state-name">EXPIRED</span></div>
                    </div>
                    <p class="lc-loop">&#8635; renewed each cycle</p>
                    <p class="lc-callout"><span class="lc-callout-edge">CLAIMED &rarr; ACTIVE</span> &mdash; the unlock: the equipment <strong>owner</strong> accepts the data terms, not the dealer.</p>
                    <div class="lc-edges">
                        <span class="lc-edge"><strong>TRANSFERRED</strong> new owner re-accepts terms</span>
                        <span class="lc-edge"><strong>DEALER-MANAGED</strong> dealer sets up, owner still signs</span>
                        <span class="lc-edge"><strong>12 LANGUAGES</strong> per-region terms &amp; states</span>
                    </div>
                    <figcaption>This license-state model is what the 34%&rarr;87% climb was actually built on: the contextual prompts, dealer tooling, and trust messaging all hung off these states.</figcaption>
                </figure>
            </section>

            <section class="case-study-section">
                <h2>Strategy</h2>
                <p>Instead of "forcing" adoption directly, we reframed the problem as <strong>progressive value exchange</strong>. Our strategy was built on four principles:</p>
                <ul>
                    <li><strong>Value Before Friction:</strong> Users should experience tangible benefits before being asked to share more data</li>
                    <li><strong>Transparency Builds Trust:</strong> Make it clear what data is requested, why, and how it's used—no dark patterns</li>
                    <li><strong>Multiple Paths, One Outcome:</strong> Support adoption through digital flows, dealer-assisted onboarding, and in-field support</li>
                    <li><strong>Graceful Degradation:</strong> Users who didn't complete profiles immediately still retained access—urgency was created through value, not lockout</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>What We Ruled Out</h2>
                <p>Three faster paths were on the table—and each was a trap:</p>
                <ul>
                    <li><strong>Hard-gate the account</strong>—lock features until the profile's complete. The fastest line to the number, but it spikes churn, floods dealers with angry calls, and on a 185-year-old reliability brand, forcing the door is a one-way trust hit.</li>
                    <li><strong>Dark-pattern nudges</strong>—pre-checked consent, buried opt-outs, manufactured urgency. Converts short-term and poisons the exact relationship you're building: the moment a customer feels tricked about <em>their own machine data</em>, connected services is dead on arrival.</li>
                    <li><strong>One universal flow</strong>—clean in Figma, impossible in reality given the sales-model variance, dealer-owned relationships, and 12 languages.</li>
                </ul>
                <p style="margin-bottom: 0;"><strong>Killing the easy options was the strategy—the win was refusing the shortcut.</strong></p>
                <div style="border-left: 3px solid var(--color-primary); padding: 4px 0 4px 22px; margin: 28px 0 0;">
                    <p style="margin: 0;"><strong>The bet.</strong> Progressive value exchange traded a fast, forced curve for a slower, durable one—and it cost real work: contextual prompts at every value moment, dealer tooling, and per-region trust messaging instead of one blocking form. The wager was that <strong>adoption that survives the relationship beats a number that burns it.</strong></p>
                </div>
            </section>

            <section class="case-study-section">
                <h2>Execution</h2>
                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Progressive Profile Completion</h3>
                <p>Instead of a single blocking form, we designed contextual prompts tied to moments of value: predictive maintenance, equipment insights, automation features. Each step answered one question: <strong>"What do I get if I do this right now?"</strong></p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Dealer-Enabled Adoption</h3>
                <p>Dealers became UX multipliers, not just support. Clear dealer workflows for assisting customers, shared visibility into completion state, and consistent language across touchpoints reduced friction while preserving trust in local relationships.</p>

                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">Trust-First Messaging</h3>
                <p>We replaced abstract legal language with plain-language explanations, explicit benefit statements, and clear reassurance around data use and control. This dramatically reduced resistance during onboarding.</p>
            </section>

            <section class="case-study-section">
                <h2>Where It Got Hard: The Dealer Problem</h2>
                <p>The hardest part wasn't the flow. It was the dealer.</p>
                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">What We Got Wrong First</h3>
                <p>Our first instinct was <strong>dealer-up</strong>: arm the dealers, let adoption grassroots from the people who own the customer relationship. It didn't hold. Dealers sell too many ways—per acre, per usage, outright, concierge—to build coherent happy paths from the bottom up. We pivoted to <strong>top-down and user-centric</strong>: design the canonical flow around the end user and the value they get, then make the dealer a multiplier <em>on top</em> of it, not the foundation under it.</p>
                <h3 style="font-family: var(--font-display); font-size: 16px; color: var(--color-white); margin: 24px 0 12px 0;">The B2B2C Twist</h3>
                <p>Deere reaches most customers through the dealer, and for the biggest accounts dealers run white-glove concierge—they do <em>everything</em> for the customer, including the digital setup. But the account that unlocks connected services carries Terms of Use and a data-sharing agreement that, legally, the equipment <strong>owner</strong> has to accept—not the dealer on their behalf. The thing standing between us and the data wasn't a form; it was <strong>agency</strong>. So we flipped the incentive: reward dealers for bringing customers <em>into</em> the digital relationship—their own account, their own data, their own sovereignty—instead of proxying it. <strong>That shift, more than any single flow, is what turned completion from a wall into a climb.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Results</h2>
                <ul>
                    <li>Profile completion increased from <strong>34% to 87%</strong></li>
                    <li>Enabled <strong>$3.8B in connected-services revenue</strong></li>
                    <li>Reduced support tickets related to account setup by <strong>16%</strong></li>
                    <li>Improved dealer efficiency by <strong>28%</strong></li>
                    <li>Established a reusable adoption framework used across multiple Deere platforms</li>
                </ul>
            </section>

            <section class="case-study-section">
                <h2>What This Unlocked</h2>
                <p>This work didn't just solve onboarding. It created:</p>
                <ul>
                    <li>A <strong>scalable foundation</strong> for AI-driven services</li>
                    <li>A <strong>repeatable model</strong> for introducing "forced" change without backlash</li>
                    <li>A <strong>trust-based approach</strong> now reused across Deere's digital ecosystem</li>
                </ul>
                <p><strong>The real outcome was organizational confidence in using UX to drive adoption—not just usability.</strong></p>
            </section>

            <section class="case-study-section">
                <h2>Gallery</h2>
                <div class="case-study-gallery">
                    <img src="../img/deere-02.png" alt="Deere platform overview" loading="lazy">
                    <img src="../img/deere-03.png" alt="Deere user flow" loading="lazy">
                    <img src="../img/deere-04.png" alt="Deere design system" loading="lazy">
                    <img src="../img/deere-05.png" alt="Deere mobile experience" loading="lazy">
                </div>
            </section>

            <section class="case-study-contact">
                <h3>LET'S TALK</h3>
                <p>Interested in discussing enterprise design challenges or exploring opportunities?</p>
                <div class="case-study-contact-links">
                    <a href="mailto:peter@peterbartsch.com">Email Me</a>
                    <a href="https://www.linkedin.com/in/peterbartsch/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                    <a href="../" class="secondary">← Back to Portfolio</a>
                </div>
            </section>

            <nav class="case-study-nav" aria-label="Case study navigation">
                <a href="thios-flywheel.php">← Previous: Open-Hardware Flywheel</a>
                <a href="deere-nav.php">Next: Platform Unification →</a>
            </nav>
        </article>
    </main>

    <script src="/case-studies/case-study-page.js"></script>
    <script src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
