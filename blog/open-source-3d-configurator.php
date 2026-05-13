<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Built an Open-Source 3D Configurator | Peter Bartsch</title>
    <meta name="description" content="17,000 lines of Three.js, zero framework dependencies, 10 languages. How a product designer shipped a full 3D configurator solo using AI tooling.">
    <link rel="canonical" href="https://petebartsch.com/blog/open-source-3d-configurator">
    <link rel="icon" type="image/svg+xml" href="../pblogo.svg">

    <meta property="og:title" content="I Built an Open-Source 3D Configurator | Peter Bartsch">
    <meta property="og:description" content="17,000 lines of Three.js, zero dependencies, 10 languages. Solo product designer + AI tooling.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://petebartsch.com/blog/open-source-3d-configurator">
    <meta property="og:image" content="https://petebartsch.com/og-image.png">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="I Built an Open-Source 3D Configurator | Peter Bartsch">
    <meta name="twitter:description" content="17,000 lines of Three.js, zero dependencies, 10 languages. Solo product designer + AI tooling.">

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
      "headline": "I Built an Open-Source 3D Configurator for Geodesic Shelters",
      "description": "Three.js, vanilla JavaScript, 23 modules, 10 languages, and zero frameworks.",
      "author": {"@type": "Person", "name": "Peter Bartsch", "url": "https://petebartsch.com"},
      "url": "https://petebartsch.com/blog/open-source-3d-configurator",
      "datePublished": "2026-03-01",
      "dateModified": "2026-03-31"
    }
    </script>

    <style>
        .blog-post-content pre {
            background: rgba(134, 216, 221, 0.05);
            border: 1px solid var(--color-gray-dark, rgba(134, 216, 221, 0.15));
            padding: 16px;
            overflow-x: auto;
            font-family: 'Space Mono', monospace;
            font-size: 13px;
            line-height: 1.5;
            margin: 20px 0;
            color: var(--color-text-primary, #ccc);
        }
        .blog-post-content code {
            font-family: 'Space Mono', monospace;
            font-size: 13px;
            background: rgba(134, 216, 221, 0.08);
            padding: 2px 6px;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../lib/site-header.php'; ?>

    <main class="blog-post-page">
        <article>
            <header class="blog-post-header">
                <nav class="blog-breadcrumb"><a href="./">Blog</a> / 3D Configurator</nav>
                <h1 class="blog-post-title">I Built an Open-Source 3D Configurator for Geodesic Shelters</h1>
                <p class="blog-post-subtitle">Three.js, vanilla JavaScript, 23 modules, 10 languages, and zero frameworks. Here is how it works.</p>
                <div class="blog-post-meta">
                    <span class="blog-meta-item"><span class="blog-meta-label">Published</span> March 1, 2026</span>
                    <span class="blog-meta-item"><span class="blog-meta-label">Reading time</span> 15 min</span>
                </div>
                <p class="blog-originally">Originally published on <a href="https://blog.thios.co/post.php?slug=i-built-an-open-source-3d-configurator" target="_blank" rel="noopener noreferrer">blog.thios.co</a> · <a href="https://thios.co/configurator" target="_blank" rel="noopener noreferrer">Try the live configurator</a></p>
            </header>

            <div class="blog-post-content">

                <img src="../img/configurator-screenshot.png" alt="Thios 3D Configurator interface showing module selection and geodesic structure" loading="eager" style="width:100%; border-radius: 8px; margin-bottom: 24px;">

                <p><em>Context: Thios is my between-roles venture — an open-source modular shelter platform. This post is a technical deep-dive on the 3D configurator I built solo, and what it demonstrates about the collapsing barrier between design and engineering.</em></p>

                <p>Most product configurators are built by teams of 10 engineers using React, Redux, and a year of runway. I built one by myself using Three.js, vanilla JavaScript, and stubbornness — and I am not a software engineer.</p>

                <p>I am a product designer. For 15 years I have designed enterprise software at places like John Deere and FourKites, led design teams, built design systems, and obsessed over user research. I know Figma and OnShape. I know HTML and CSS. Before this project, I had never written a production JavaScript application.</p>

                <p>The Thios configurator lets you design a modular geodesic structure in 3D, choose materials, generate a bill of materials, and get quotes from local suppliers — all in the browser. It supports 10 languages, runs on mobile, and the entire codebase is about 17,000 lines of JavaScript with zero framework dependencies.</p>

                <p>I built it with Claude Code as my technical co-founder.</p>

                <p>This is how it works.</p>

                <h2>The Problem</h2>

                <p>Thios makes modular geodesic shelters. Each structure is a truncated icosahedron — a football shape — built from 23 distinct panel types. Roof panels, wall sections, windows, doors, corners, and structural supports. You mix and match them to create saunas, greenhouses, offices, or whatever else you need.</p>

                <p>The problem: how does a customer figure out which panels they need?</p>

                <p>A PDF catalog does not work. You need to see how panels fit together in 3D space. You need to rotate the structure, swap materials, add a door where a wall used to be. You need to understand what you are building before you commit to buying $4,000 worth of lumber.</p>

                <p>So I built a configurator.</p>

                <h2>The Stack</h2>

                <p>Here is the full stack. No surprises, no magic:</p>

                <ul>
                    <li><strong>3D rendering:</strong> Three.js r172 (ES modules via CDN)</li>
                    <li><strong>Frontend:</strong> Vanilla JavaScript. No React. No Vue. No build step. 26 JS files loaded in dependency order.</li>
                    <li><strong>Backend:</strong> PHP 8 with PDO (MySQL). The same stack as the rest of the site.</li>
                    <li><strong>3D models:</strong> GLB format (GLTF 2.0) with Draco compression. 23 modules, each 5-15 MB uncompressed, 60-900 KB compressed.</li>
                    <li><strong>Environment:</strong> 7 HDRI environment maps for realistic lighting.</li>
                    <li><strong>CAD integration:</strong> OnShape REST API for live bill-of-materials data.</li>
                    <li><strong>i18n:</strong> Custom translation system — 339 keys across 10 languages.</li>
                </ul>

                <p>I chose vanilla JS deliberately. The configurator has complex state (module instances, 3D transforms, undo history, pricing), and I wanted to control all of it without fighting a framework's opinions about reactivity.</p>

                <h2>Three.js Scene Architecture</h2>

                <p>The 3D viewport is a standard Three.js setup with a few specific decisions:</p>

                <p><strong>OrbitControls for camera.</strong> Users expect to click-drag to rotate and scroll to zoom. OrbitControls does this out of the box with auto-rotate on load — so the structure spins slowly when the page first renders, giving you an immediate sense of the 3D model.</p>

                <p><strong>OutlinePass for selection.</strong> When you hover over a panel, it gets a gold outline glow. This uses Three.js post-processing (EffectComposer + OutlinePass) rather than changing the material itself. Cleaner visually, and the original material stays untouched.</p>

                <p><strong>HDRI environments for lighting.</strong> Flat lighting makes 3D models look like plastic toys. HDRI maps give you realistic reflections and ambient light. I included 7 presets (studio, courtyard, forest, sunset, etc.) — the user can switch between them to see how their structure looks in different contexts.</p>

                <p><strong>Draco compression for models.</strong> The raw GLB files are too large for web. Draco compresses geometry data (vertices, normals, UVs) dramatically. A panel that is 15 MB raw becomes 60 KB with Draco. The tradeoff is decode time, but the WASM-based Draco decoder handles this in under 100ms.</p>

                <h2>The Module System</h2>

                <img src="../img/thios-03.png" alt="Exploded view of geodesic shelter showing 23 module types" loading="lazy" style="width:100%; border-radius: 8px; margin-bottom: 24px;">

                <p>This is the core of the configurator. A Thiosphere is not a single model — it is an assembly of 23 panel types that the user combines.</p>

                <p>Each module has a unique ID, a 3D model (GLB file), a category (roof, walls, windows, corners, doors, structure), a price, a maximum quantity, and a set of subparts (the actual lumber cuts, hardware, and materials).</p>

                <p>When a user adds a module, the system checks if the GLB is already loaded (clones if yes, loads if not), creates a unique instance ID, positions it in the 3D scene, updates the price calculator, pushes a snapshot to the undo history, and triggers an auto-save to localStorage.</p>

                <p>Module instances are tracked in a flat map:</p>

                <pre>moduleInstances = {
  'module01instance_0': { mesh: THREE.Group, data: {...} },
  'module05instance_2': { mesh: THREE.Group, data: {...} }
}</pre>

                <p>This flat structure makes serialization trivial. When you save a configuration, I just serialize the instance map, compress it with LZ-String, and encode it as a URL parameter. Sharing a configuration is sharing a URL.</p>

                <h2>Hex Grid: Multi-Sphere Layouts</h2>

                <p>A single Thiosphere is useful. But the real power is in multi-sphere configurations — two, three, four, or more structures connected by door panels.</p>

                <p>The placement system uses a hexagonal grid with axial coordinates (q, r). Each sphere sits at a hex position, and door panels create passageways between adjacent hexes.</p>

                <pre>hexDistance(a, b) = (|a.q - b.q| + |a.q + a.r - b.q - b.r| + |a.r - b.r|) / 2</pre>

                <p>The configurator includes presets for common layouts: single, duo, trio, quad, 7-pack, and 12-pack. Each preset places spheres on the hex grid with appropriate spacing and rotation.</p>

                <h2>Bill of Materials Generation</h2>

                <p>This is where software meets physical reality.</p>

                <p>Each module is not just a 3D model — it maps to real physical parts. Module 01 (a roof panel) requires specific lumber cuts, fasteners, and sealing materials.</p>

                <p>When you click "Generate BOM," the configurator sends your module selections to the API. It aggregates subparts across all selected modules, groups them by material type (timber, hardware, glass, insulation), and returns a complete parts list with costs.</p>

                <p>The real trick: OnShape integration. The physical CAD models live in OnShape (a cloud CAD platform with a REST API). The BOM API fetches the latest part data directly from the CAD source, ensuring that if I update a design in OnShape, the configurator reflects the change without manual database updates. OnShape data is cached for 24 hours to avoid API rate limits.</p>

                <h2>The Consumer-to-Vendor Pipeline</h2>

                <p>This is the part that makes the configurator more than a 3D toy.</p>

                <p>After designing a structure, the user hits "Build Summary." This shows module count, estimated cost, and parts grouped by supplier category. A zip code field finds nearby building suppliers via an OpenStreetMap/Overpass API proxy.</p>

                <p>It then creates vendor share tokens — unique URLs that give suppliers read-only access to the parts list for their specific category. A timber yard sees only the lumber cuts. A hardware store sees only the fasteners. A glass supplier sees only the glazing. Nobody sees the full BOM or pricing for other categories.</p>

                <p>Each token is a 64-character cryptographically secure string. The vendor opens the URL, sees a clean parts list, and can submit a quote. The entire flow — from 3D design to vendor quotes — happens without a phone call.</p>

                <h2>Internationalization</h2>

                <p>The configurator supports 10 languages: English, Spanish, German, French, Swedish, Japanese, Dutch, Polish, Portuguese, and Italian.</p>

                <p>339 translation keys stored in JSON files. Language detection follows a priority chain: URL parameter, localStorage, document referrer path, browser language, default English. The translation function supports interpolation for dynamic values.</p>

                <p>One non-obvious challenge: emoji handling. Many UI strings use emoji prefixes (like a checkmark or warning icon). These must stay outside the translation call because emojis are language-independent and should not be duplicated in every language file.</p>

                <h2>State Management Without a Framework</h2>

                <p>The configurator has complex state: module selections, 3D instances and transforms, material selections, camera position, and undo/redo history up to 50 levels.</p>

                <p>Without React or Redux, I manage this with a few simple patterns:</p>

                <ul>
                    <li><strong>Single source of truth:</strong> The selectedModules array and moduleInstances map are the canonical state. Everything else derives from these.</li>
                    <li><strong>HistoryManager:</strong> Records state snapshots before each mutation. Undo pops the last snapshot. Max 50 levels.</li>
                    <li><strong>Auto-save:</strong> Every 30 seconds, the current state serializes to localStorage. No registration required.</li>
                    <li><strong>Config serialization:</strong> The entire configuration compresses to a URL-safe string via LZ-String. A complex multi-sphere layout compresses to maybe 200 characters.</li>
                </ul>

                <h2>Mobile UX</h2>

                <p>Half of configurator traffic is mobile. 3D on mobile is hard.</p>

                <p>The mobile UI uses a bottom drawer panel (like Google Maps). Swipe up to see modules, swipe down to collapse. The 3D viewport fills the screen above the drawer.</p>

                <p>Touch gestures map to OrbitControls: one-finger drag rotates, two-finger pinch zooms, two-finger drag pans. The gesture system uses raw touch events rather than a library — because the interaction between the drawer panel and the 3D viewport requires careful control over which element receives which events.</p>

                <p>There is also an AR preview via Model Viewer. Export your configuration as a GLB, then view it in your actual backyard through your phone camera. No app install required.</p>

                <h2>Performance Decisions</h2>

                <ul>
                    <li><strong>Deferred mesh instantiation:</strong> GLB files are loaded once and cached in memory. Each new instance is a scene.clone().</li>
                    <li><strong>Service Worker:</strong> Static assets cached aggressively. After the first load, the configurator works offline.</li>
                    <li><strong>CSS containment:</strong> After a user reported scroll jank on older Android devices, I added contain: layout style and will-change: transform to the right elements.</li>
                    <li><strong>Batch analytics:</strong> Events accumulate in memory and flush every 5 seconds or when the batch hits 10 events.</li>
                </ul>

                <h2>How Claude Code Changed What Is Possible</h2>

                <p>I need to be direct about this: the configurator would not exist without AI.</p>

                <p>Not because the code is particularly clever. Most of it is straightforward — load a 3D model, track state, serialize to JSON, call an API. The kind of code a mid-level engineer writes without thinking. But I am not an engineer. I am a designer who has spent 15 years on the other side of the handoff.</p>

                <p>My progression went: GitHub Copilot for autocomplete, then Cursor for conversational coding, then Claude Code for full-stack development. Each step expanded what I could build alone.</p>

                <p>The critical insight: I was never learning to code. I was directing an implementation the same way I have always directed implementations — with clear requirements, user scenarios, and acceptance criteria. The difference is that my engineering partner works at 3am, never forgets context (within a session), and does not need a sprint planning meeting.</p>

                <p>What made this work was not AI writing code. It was a designer with 15 years of product experience knowing exactly what to build. The hard part of software has never been typing the code. It is knowing what the code should do, for whom, and why. That is design.</p>

                <p>The entire Thios platform — three websites, a 3D configurator, a store with Stripe integration, a blog, a partner portal, APIs, databases, 10-language i18n — was built by one person in 21 months. Not because I learned to be a developer. Because the barrier between "knowing what to build" and "building it" collapsed.</p>

                <p><strong>If you are a designer reading this and thinking you could never build something like this: you are wrong. You already have the hardest skill. You know how to think about users, define problems, and make decisions under ambiguity. The code is the easy part now.</strong></p>

                <h2>What I Would Do Differently</h2>

                <ul>
                    <li><strong>Use TypeScript.</strong> 17,000 lines of untyped JavaScript works, but refactoring is scary.</li>
                    <li><strong>Use a module bundler from the start.</strong> The 26-file sequential load chain works but is fragile.</li>
                    <li><strong>Separate the UI layer.</strong> The main file is 3,000+ lines handling both 3D logic and UI updates.</li>
                    <li><strong>Write tests.</strong> The BOM calculation, hex grid math, and pricing engine are all testable in isolation.</li>
                </ul>

                <img src="../carousel-thumb-thios.png" alt="Physical prototype of Thios geodesic shelter built from lumber" loading="lazy" style="width:100%; border-radius: 8px; margin-bottom: 24px;">

                <h2>Try It</h2>

                <p>The configurator is live at <a href="https://thios.co/configurator" target="_blank" rel="noopener noreferrer">thios.co/configurator</a>. Place some modules, rotate the model, switch environments, generate a BOM. The full experience takes about 5 minutes.</p>

                <p>The source is available on <a href="https://github.com/thios-co" target="_blank" rel="noopener noreferrer">GitHub</a>. It is open-source under the CERN-OHL-S license — the same license used for open-source hardware at CERN.</p>

            </div>

            <footer class="blog-post-footer">
                <div class="blog-post-cta">
                    <h3>Design + code + shipping</h3>
                    <p>This is what Staff-level product designers do — close the gap between vision and production.</p>
                    <a href="../#contact">GET IN TOUCH →</a>
                </div>
                <nav class="blog-post-nav">
                    <a href="ux-is-dead-long-live-hx">← Previous: UX Is Dead</a>
                    <a href="what-vertical-farming-got-wrong">Next: Vertical Farming →</a>
                </nav>
            </footer>
        </article>
    </main>

    <script defer src="../themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
