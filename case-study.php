<?php
/**
 * Case Study Detail Page Template
 * Usage: case-study.php?id=thios or case-study.php?id=john-deere
 */

// Portfolio data - single source of truth
$portfolioData = [
    'thios' => [
        'id' => 1,
        'company' => 'Thios',
        'slug' => 'thios',
        'role' => 'Founder & Lead Designer',
        'dates' => 'Aug 2024 - Present',
        'description' => 'Treating AI as my technical co-founder, learning how to compress timelines, work across disciplines, and ship products that traditionally require full teams. Building open-source modular shelter systems that transform parking spot sized spaces into productive environments.',
        'bullets' => [
            'Created complete product ecosystem solo in 18 months: brand identity inspired by early 2000s open-source culture, 3 websites (thios.co, blog, store), 5 shelter variants with CAD models, physical prototype, and handbook generating first revenue',
            'Applied full career toolkit simultaneously—product strategy, marketing, and design execution using GitHub Copilot → Cursor → Anti Gravity progression; proving experienced generalists can operate across traditional role boundaries with AI partnership',
            'Established AI-augmented workflows: Obsidian MD + AI for project management and research synthesis; Figma Make for design-to-code; compressed prototyping cycles 70% through conversational development in Cursor and Anti-Gravity & Claude Code',
            'Outcomes: Validated AI as practical force multiplier for startups; demonstrating how to maintain product quality while working at solo-founder velocity; any prototype is possible'
        ],
        'imageCount' => 14,
        'imagePrefix' => 'thios',
        'featured' => true,
        'caseStudyPdf' => 'Peter-Bartsch-Case-Study_Thios.pdf'
    ],
    'john-deere' => [
        'id' => 2,
        'company' => 'John Deere',
        'slug' => 'john-deere',
        'role' => 'Senior Lead UX; Digital Customer Experience',
        'dates' => 'Aug 2020 - Jul 2024',
        'description' => 'Embedded with product teams to modernize 20-year-old systems and drive subscription revenue. Proving enterprise design can move fast when you have the right frameworks.',
        'bullets' => [
            'Redesigned license management system serving 500K+ users across 12 languages—increased authenticated engagement 34%, reduced support tickets 16%, enabled $3.8B in subscription revenue from Automation and AI services',
            'Built scalable design system (40+ components, Figma + Storybook) reducing implementation time 50%, cutting design debt; established governance model adopted by 6 product teams across 3 business units',
            'Led migration strategy for legacy interfaces; identified 45% component reuse across 12 applications, saving estimated $2.1M in development costs',
            'Own prototype-to-production pipeline for AI features; working directly with ML engineers to validate interfaces before development commitment; shipped Computer Vision settings UI',
            'Direct business partnership with platform PM: translated ambiguous requirements into testable designs; facilitated workshops resolving cross-team dependencies'
        ],
        'imageCount' => 14,
        'imagePrefix' => 'deere',
        'featured' => true,
        'caseStudyPdf' => null
    ],
    'fourkites' => [
        'id' => 3,
        'company' => 'FourKites',
        'slug' => 'fourkites',
        'role' => 'Manager, User Experience Design',
        'dates' => 'Aug 2019 - Jul 2020',
        'description' => 'Built the design practice from scratch at a late-stage startup preparing for acquisition. Scaling from zero to impact.',
        'bullets' => [
            'Established design practice: hired 3 designers, created research operations, built component library that reduced implementation cycles 40%, became foundation for $100M ARR platform',
            'Drove core product redesign through direct customer research—synthesized 30+ shipper interviews into personas and journey maps that reframed roadmap priorities',
            'Created design system governance that survived my departure; still in use 4 years later across 15+ product squads',
            'Outcomes: Team grew to 8 designers post-departure; company acquired for $1.2B (2022)'
        ],
        'imageCount' => 7,
        'imagePrefix' => 'fourkites',
        'featured' => true,
        'caseStudyPdf' => null
    ],
    'nokia' => [
        'id' => 6,
        'company' => 'Nokia (HERE Maps)',
        'slug' => 'nokia',
        'role' => 'Senior Visual Designer',
        'dates' => 'Jan 2014 - Jan 2016',
        'description' => 'Visual design for HERE Maps web and mobile applications during Nokia\'s mapping division transition.',
        'bullets' => [
            'Designed UI components and iconography for HERE Maps web application serving 100M+ monthly users',
            'Created visual specifications bridging design-to-engineering handoff across 4 international development teams',
            'Contributed to design system documentation that survived acquisition by consortium of German automakers'
        ],
        'imageCount' => 0,
        'imagePrefix' => 'nokia',
        'featured' => false,
        'caseStudyPdf' => null
    ],
    'gogo' => [
        'id' => 7,
        'company' => 'Gogo Inflight Wi-Fi',
        'slug' => 'gogo',
        'role' => 'Senior Visual Designer',
        'dates' => 'Jan 2016 - Aug 2018',
        'description' => 'Design for in-flight entertainment and connectivity experiences across major airline partners.',
        'bullets' => [
            'Led visual design for entertainment portal serving 25M+ annual passengers across Delta, American, and United',
            'Created white-label design system enabling rapid customization for airline brand requirements',
            'Designed responsive interfaces optimizing for constrained bandwidth and diverse device ecosystems'
        ],
        'imageCount' => 3,
        'imagePrefix' => 'gogo',
        'featured' => false,
        'caseStudyPdf' => null
    ]
];

// Get requested case study
$slug = isset($_GET['id']) ? strtolower(preg_replace('/[^a-zA-Z0-9-]/', '', $_GET['id'])) : '';

// Find case study
$caseStudy = isset($portfolioData[$slug]) ? $portfolioData[$slug] : null;

// 404 if not found
if (!$caseStudy) {
    http_response_code(404);
    $pageTitle = 'Case Study Not Found';
    $showError = true;
} else {
    $pageTitle = $caseStudy['company'] . ' - Peter Bartsch';
    $showError = false;
}

// Generate image array
function getImages($prefix, $count) {
    $images = [];
    for ($i = 1; $i <= $count; $i++) {
        $images[] = "img/{$prefix}-" . str_pad($i, 2, '0', STR_PAD_LEFT) . ".png";
    }
    return $images;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <?php if (!$showError && $caseStudy): ?>
    <meta name="description" content="<?php echo htmlspecialchars($caseStudy['role'] . ' at ' . $caseStudy['company'] . '. ' . substr($caseStudy['description'], 0, 150)); ?>...">
    <meta property="og:title" content="<?php echo htmlspecialchars($caseStudy['company']); ?> - Peter Bartsch Portfolio">
    <meta property="og:description" content="<?php echo htmlspecialchars($caseStudy['description']); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://peterbartsch.com/case-study.php?id=<?php echo htmlspecialchars($slug); ?>">
    <?php endif; ?>

    <link rel="canonical" href="https://peterbartsch.com/case-study.php?id=<?php echo htmlspecialchars($slug); ?>">
    <link rel="stylesheet" href="styles.css">
    <link rel="preload" href="rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="ari.ttf" as="font" type="font/ttf" crossorigin>

    <style>
        /* Case Study Page Specific Styles */
        .case-study-page {
            max-width: 900px;
            margin: 0 auto;
            padding: var(--space-xl) var(--space-lg);
        }

        .case-study-header {
            margin-bottom: var(--space-xl);
        }

        .case-study-back {
            display: inline-flex;
            align-items: center;
            gap: var(--space-sm);
            color: var(--color-primary);
            text-decoration: none;
            font-family: var(--font-display);
            font-size: 14px;
            margin-bottom: var(--space-lg);
            transition: color var(--transition-fast);
        }

        .case-study-back:hover {
            color: var(--color-white);
        }

        .case-study-title {
            font-family: var(--font-display);
            font-size: 48px;
            color: var(--color-white);
            margin: 0 0 var(--space-md) 0;
            text-shadow: 0 0 20px rgba(134, 216, 221, 0.3);
        }

        .case-study-meta {
            font-family: var(--font-body);
            font-size: 18px;
            color: var(--color-text-muted);
            margin-bottom: var(--space-sm);
        }

        .case-study-dates {
            font-family: var(--font-display);
            font-size: 14px;
            color: var(--color-primary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .case-study-description {
            font-family: var(--font-body);
            font-size: 20px;
            line-height: 1.6;
            color: var(--color-text-primary);
            margin: var(--space-xl) 0;
            padding: var(--space-lg);
            background: rgba(0, 0, 0, 0.2);
            border-left: 4px solid var(--color-primary);
        }

        .case-study-section {
            margin: var(--space-xl) 0;
        }

        .case-study-section h3 {
            font-family: var(--font-display);
            font-size: 16px;
            color: var(--color-primary);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: var(--space-lg);
        }

        .case-study-bullets {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .case-study-bullets li {
            font-family: var(--font-body);
            font-size: 16px;
            line-height: 1.6;
            color: var(--color-text-primary);
            padding: var(--space-md) 0;
            padding-left: var(--space-lg);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
        }

        .case-study-bullets li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 24px;
            width: 8px;
            height: 8px;
            background: var(--color-primary);
        }

        .case-study-bullets li:last-child {
            border-bottom: none;
        }

        .case-study-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: var(--space-md);
            margin-top: var(--space-lg);
        }

        .case-study-gallery img {
            width: 100%;
            height: auto;
            display: block;
            border: 1px solid rgba(134, 216, 221, 0.2);
            transition: transform var(--transition-base), border-color var(--transition-base);
            cursor: pointer;
        }

        .case-study-gallery img:hover {
            transform: scale(1.02);
            border-color: var(--color-primary);
        }

        .case-study-cta {
            margin-top: var(--space-2xl);
            padding-top: var(--space-xl);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            gap: var(--space-md);
            flex-wrap: wrap;
        }

        .error-page {
            text-align: center;
            padding: var(--space-2xl);
        }

        .error-page h1 {
            font-family: var(--font-display);
            font-size: 48px;
            color: var(--color-primary);
        }

        .error-page p {
            font-family: var(--font-body);
            font-size: 18px;
            color: var(--color-text-muted);
        }

        @media (max-width: 768px) {
            .case-study-title {
                font-size: 32px;
            }

            .case-study-description {
                font-size: 16px;
                padding: var(--space-md);
            }

            .case-study-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Skip to content -->
    <a href="#main-content" class="visually-hidden">Skip to main content</a>

    <!-- Header -->
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="index.php" class="header-logo" aria-label="Home">
                <img src="pblogo.svg" alt="PB logo" height="40" />
            </a>
            <nav class="header-nav" aria-label="Primary">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#right">Experience</a></li>
                    <li><a href="index.php#footer">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <?php if ($showError): ?>
        <div class="case-study-page error-page">
            <h1>404</h1>
            <p>Case study not found.</p>
            <a href="index.php" class="button">← Back to Portfolio</a>
        </div>
        <?php else: ?>
        <article class="case-study-page">
            <div class="case-study-header">
                <a href="index.php#right" class="case-study-back">← Back to Experience</a>
                <h1 class="case-study-title"><?php echo htmlspecialchars($caseStudy['company']); ?></h1>
                <p class="case-study-meta"><?php echo htmlspecialchars($caseStudy['role']); ?></p>
                <p class="case-study-dates"><?php echo htmlspecialchars($caseStudy['dates']); ?></p>
            </div>

            <div class="case-study-description">
                <?php echo htmlspecialchars($caseStudy['description']); ?>
            </div>

            <section class="case-study-section">
                <h3>Key Contributions</h3>
                <ul class="case-study-bullets">
                    <?php foreach ($caseStudy['bullets'] as $bullet): ?>
                    <li><?php echo htmlspecialchars($bullet); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <?php if ($caseStudy['imageCount'] > 0): ?>
            <section class="case-study-section">
                <h3>Gallery</h3>
                <div class="case-study-gallery">
                    <?php
                    $images = getImages($caseStudy['imagePrefix'], $caseStudy['imageCount']);
                    foreach ($images as $index => $image):
                    ?>
                    <img src="<?php echo htmlspecialchars($image); ?>"
                         alt="<?php echo htmlspecialchars($caseStudy['company']); ?> project image <?php echo $index + 1; ?>"
                         loading="lazy">
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <div class="case-study-cta">
                <a href="index.php#right" class="button">← View All Experience</a>
                <?php if ($caseStudy['caseStudyPdf']): ?>
                <a href="<?php echo htmlspecialchars($caseStudy['caseStudyPdf']); ?>" class="button button2" target="_blank">
                    Download Case Study (PDF)
                </a>
                <?php endif; ?>
                <a href="Peter-Bartsch-Resume.pdf" class="button button2" target="_blank">
                    Download Resume
                </a>
            </div>
        </article>
        <?php endif; ?>
    </main>

    <footer id="site-footer-final" style="text-align:center; padding:20px 12px;">
        <p style="margin:0;">© 2025 Peter Bartsch</p>
    </footer>
</body>
</html>
