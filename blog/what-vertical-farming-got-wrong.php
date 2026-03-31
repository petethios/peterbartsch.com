<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Vertical Farming Got Wrong | Peter Bartsch</title>
    <meta name="description" content="Billions in VC money burned. The lesson is not about lettuce — it is about what happens when you centralize a fundamentally distributed problem.">
    <link rel="canonical" href="https://petebartsch.com/blog/what-vertical-farming-got-wrong">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="What Vertical Farming Got Wrong | Peter Bartsch">
    <meta property="og:description" content="Billions in VC money burned. The lesson is not about lettuce.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/blog/what-vertical-farming-got-wrong">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="What Vertical Farming Got Wrong | Peter Bartsch">
    <meta name="twitter:description" content="Billions in VC money burned. The lesson is not about lettuce.">

    <link rel="preload" href="../rombyte.woff2" as="font" type="font/woff2" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="blog.css">
    <?php $themeBasePath = '../'; include('../themes/theme-head.php'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-QB3EL923YF');</script>
    <script type="text/javascript">(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window,document,"clarity","script","uhlenklp4t");</script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": "What Vertical Farming Got Wrong",
      "description": "Billions in VC money burned. The lesson is not about lettuce.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/blog/what-vertical-farming-got-wrong",
      "datePublished": "2026-03-23",
      "dateModified": "2026-03-31"
    }
    </script>
</head>
<body>
    <?php include('../themes/theme-banner.php'); ?>
    <header id="site-header" role="banner">
        <div class="header-inner">
            <a href="../" class="header-logo" aria-label="Home"><img src="../pblogo.svg" alt="PB logo" height="40" /></a>
            <nav aria-label="Breadcrumb" style="display: flex; gap: 16px;">
                <a href="./" style="color: var(--color-text-primary); text-decoration: none; font-family: var(--font-body); font-size: 14px;">← Back to Blog</a>
            </nav>
        </div>
    </header>

    <main class="blog-post-page">
        <article>
            <header class="blog-post-header">
                <nav class="blog-breadcrumb"><a href="./">Blog</a> / Vertical Farming</nav>
                <h1 class="blog-post-title">What Vertical Farming Got Wrong</h1>
                <p class="blog-post-subtitle">Billions in VC money burned. The lesson is not about lettuce.</p>
                <div class="blog-post-meta">
                    <span class="blog-meta-item"><span class="blog-meta-label">Published</span> March 23, 2026</span>
                    <span class="blog-meta-item"><span class="blog-meta-label">Reading time</span> 8 min</span>
                </div>
                <p class="blog-originally">Originally published on <a href="https://blog.thios.co/post.php?slug=what-vertical-farming-got-wrong" target="_blank" rel="noopener noreferrer">blog.thios.co</a></p>
            </header>

            <div class="blog-post-content">

                <p><em>Context: Thios is my between-roles venture — an open-source modular shelter platform. This post uses the vertical farming collapse to explain the design philosophy behind the platform approach.</em></p>

                <p>The vertical farming industry was a darling of venture capital a decade ago, and now most of the companies are dead.</p>

                <p>Bowery Farming raised $938 million and is out of business. AppHarvest raised $792 million and is out of business. Three years ago, 23 companies signed a Vertical Farming Manifesto committing to transform food systems. Fewer than 10 are still alive.</p>

                <p>I read the story and kept circling the same thought: this is exactly the failure mode we designed Thios to avoid.</p>

                <p>Not because we're smarter. Because we've seen this movie before, across dozens of industries, and the plot is always the same.</p>

                <h2>The Pattern</h2>

                <p>Here is what happened to vertical farming, condensed:</p>

                <ol>
                    <li><strong>Real problem identified.</strong> Modern agriculture has genuine issues — pesticide use, water consumption, long-distance trucking. Vertical farms could use 95% less water, zero pesticides, and be built in cities near customers.</li>
                    <li><strong>VC money floods in.</strong> Silicon Valley gets excited. Billions flow to companies promising to remake agriculture.</li>
                    <li><strong>Companies build like they are already huge.</strong> Instead of starting small and learning, they build massive warehouses, proprietary hardware, custom software. Competing head-on against the most efficient conventional farms on the planet.</li>
                    <li><strong>Reality hits.</strong> Energy costs rise. Interest rates tighten. Margins that were already thin become nonexistent.</li>
                    <li><strong>The survivors pivot to niches.</strong> Plenty, which raised nearly $1 billion, closed farms and now grows strawberries for high-end restaurants. The survivors stopped trying to replace conventional farming and started finding where their approach actually made sense.</li>
                </ol>

                <h2>Why This Matters for Shelter</h2>

                <p>Substitute "farming" for "housing" and the parallels are uncomfortable.</p>

                <p>Pre-fab housing companies have followed the same arc. Katerra raised $2 billion in VC funding to revolutionize construction. They built massive factories, hired thousands of people, and tried to vertically integrate every part of the building process. They went bankrupt in 2021.</p>

                <p>The pattern repeats because the underlying mistake is the same: treating a distributed, local, relationship-driven industry like a software company that can be scaled from a single headquarters.</p>

                <p>Agriculture is local. Construction is local. The supply chains are local. The labor is local. The regulations are local. The relationships are local.</p>

                <p>You cannot centralize a fundamentally distributed problem and expect the economics to work. You can raise a billion dollars and it still will not work, because the structure of the approach is wrong.</p>

                <h2>What the Survivors Did Differently</h2>

                <p>The vertical farming companies that survived share three traits:</p>

                <p><strong>They started small.</strong> One founder put it plainly: "My colleagues and competitors made big mistakes with big money and big farms. We made small mistakes with small money and small farms."</p>

                <p><strong>They found their niche.</strong> Instead of competing with California lettuce growers on commodity pricing, survivors found specific markets where their advantages actually justified the cost.</p>

                <p><strong>They stopped trying to replace the existing system.</strong> The surviving vertical farms complement conventional agriculture. They handle the highest-value, most perishable produce. They sit next to regional distribution centers.</p>

                <p>Meanwhile, high-tech greenhouses — which use many of the same technologies but rely on the sun instead of artificial lights — are flourishing. They work with natural systems instead of trying to replace them entirely.</p>

                <h2>The Thios Approach</h2>

                <p>When I started Thios, I had a choice. The conventional startup playbook says: raise money, build a factory, manufacture a product, scale distribution, capture the market.</p>

                <p>I chose the opposite.</p>

                <p>Thios does not manufacture anything. We do not own a factory. We do not ship products across the country. We do not compete with local builders on price.</p>

                <p>Instead, we built an open-source platform. You design a structure in our 3D configurator. The system generates a precise bill of materials. You share that BOM with your local lumberyard, your local hardware store, your local glass supplier. They quote you real prices for real materials that are already in their inventory, five miles from your build site.</p>

                <p>We are the operating system, not the factory.</p>

                <h2>Platform vs. Product</h2>

                <p>The vertical farming story is ultimately about the difference between building a product and building a platform.</p>

                <p>A product company says: "We will grow the lettuce better and cheaper than anyone else." Then they discover that conventional farmers, with free sunlight and decades of optimization, are extraordinarily hard to beat.</p>

                <p>A platform company says: "We will give growers better tools, connect them to better markets, and let the network create value that no single farm could create alone."</p>

                <p>Thios says: "We will give builders better design tools, connect them to local suppliers, and let the network create value that no single manufacturer could create alone."</p>

                <p>The designs are open source. Anyone can inspect them, modify them, improve them. That is not a weakness — it is the moat. You cannot out-trust a system where every dimension, every joint, every material spec is public and verifiable.</p>

                <h2>The Mondragon Model</h2>

                <p>There is a cooperative in the Basque Country called Mondragon. It is the world's largest federation of worker cooperatives — over 80,000 employees, billions in revenue. It works because it distributes ownership and value creation across the network instead of concentrating it at the top.</p>

                <p>The Thios vision is similar: 100,000 locally-grown millionaires rather than one cent-billionaire.</p>

                <p>Every consumer who walks into their local lumberyard with a Thios BOM is doing our distribution for us. The supplier does not adopt the standard because we asked — they adopt it because their customer walked in with a spec sheet. As more suppliers join the network, quotes get faster and more accurate, which attracts more consumers, which brings in more suppliers.</p>

                <p>This is a flywheel that runs on local relationships, not venture capital.</p>

                <h2>The Lesson</h2>

                <p>The vertical farming collapse is not a story about lettuce. It is a story about what happens when you try to solve a distributed problem with a centralized solution, funded by impatient capital that demands hockey-stick growth.</p>

                <p>The companies that survived did so by getting small, getting specific, and finding their place within the existing ecosystem rather than trying to replace it.</p>

                <p>That is the Thios playbook from Day 1:</p>

                <ul>
                    <li>Start with the simplest product (a backyard sauna, not a full house)</li>
                    <li>Use standard materials (2x4 lumber from any hardware store, not proprietary components)</li>
                    <li>Enable local supply chains (your lumberyard, your hardware store, your glazer)</li>
                    <li>Open-source the designs (trust through transparency, not marketing)</li>
                    <li>Take a small slice of a growing pie (platform fees, not factory margins)</li>
                </ul>

                <p>The question is not whether people will build their own backyard structures — they already do, in huge numbers, with terrible tools and no support.</p>

                <p>The question is whether the platform that helps them will be a VC-funded factory trying to ship kits across the country, or a distributed network of local suppliers using open-source designs.</p>

                <p>We are betting on the network.</p>

                <p><a href="https://thios.co/configurator" target="_blank" rel="noopener noreferrer">Design your own structure in the Thios 3D Configurator</a> — free, no account required.</p>

            </div>

            <footer class="blog-post-footer">
                <div class="blog-post-cta">
                    <h3>Systems thinking applied to real products</h3>
                    <p>I bring this same platform-vs-product analysis to enterprise design challenges.</p>
                    <a href="../#contact">GET IN TOUCH →</a>
                </div>
                <nav class="blog-post-nav">
                    <a href="open-source-3d-configurator">← Previous: 3D Configurator</a>
                    <a href="./">All Posts →</a>
                </nav>
            </footer>
        </article>
    </main>

    <script defer src="../themes/theme-switcher.js"></script>
</body>
</html>
