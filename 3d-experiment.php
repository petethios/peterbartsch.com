<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="Content-Language" content="en">
    <link rel="icon" type="image/svg+xml" href="pblogo.svg">
    <link rel="apple-touch-icon" href="pblogo.png">
    <meta name="description"
        content="Peter Bartsch – 3D Interactive Resume Experiment. An experimental 3D portfolio experience built with Three.js.">
    <meta name="keywords"
        content="Peter Bartsch, 3D portfolio, interactive resume, Three.js, experimental design, webGL">
    <meta name="author" content="Peter Bartsch">
    <link rel="canonical" href="https://peterbartsch.com/3d-experiment.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://peterbartsch.com/3d-experiment.php">
    <meta property="og:title" content="Peter Bartsch - 3D Interactive Resume Experiment">
    <meta property="og:description"
        content="An experimental 3D portfolio experience built with Three.js. Explore my work in an immersive 3D environment.">
    <meta property="og:site_name" content="Peter Bartsch">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Peter Bartsch - 3D Interactive Resume Experiment">
    <meta name="twitter:description" content="An experimental 3D portfolio experience built with Three.js.">

    <meta name="theme-color" content="#2f4f50">
    <meta name="theme-color" content="#2f4f50" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#000000" media="(prefers-color-scheme: dark)">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Security Headers -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
    <meta http-equiv="Permissions-Policy" content="geolocation=(), microphone=(), camera=()">
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com https://www.clarity.ms https://*.clarity.ms; style-src 'self' 'unsafe-inline'; img-src 'self' data: https: https://*.clarity.ms https://c.bing.com; font-src 'self'; connect-src 'self' https://www.google-analytics.com https://www.clarity.ms https://*.clarity.ms; frame-ancestors 'self'; base-uri 'self'; form-action 'self' mailto:;">

    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB3EL923YF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-QB3EL923YF');
    </script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "uhlenklp4t");
    </script>

    <title>3D Interactive Resume Experiment | Peter Bartsch</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <link rel="preload" href="rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="ari.ttf" as="font" type="font/ttf" crossorigin>
    <a href="#main" class="visually-hidden"
        style="position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden;">Skip to main content</a>

    <!-- Experimental Banner -->
    <div id="experimental-banner">
        <a href="index.php">&lt; BACK</a> <strong>EXPERIMENTAL</strong>
    </div>

    <!-- Sticky Header Nav -->
    <header id="site-header" role="banner">
        <h1 id="page-title" class="visually-hidden">3D Interactive Resume Experiment</h1>
        <div class="header-inner">
            <a href="index.php" class="header-logo" aria-label="Home">
                <img src="pblogo.svg" alt="PB logo" height="40" />
            </a>
            <nav class="header-nav" aria-label="Primary">
                <ul>
                    <li><a href="index.php">Back to Resume</a></li>
                    <li><a href="index.php#right">Experience</a></li>
                </ul>
            </nav>
            <button class="hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false"
                aria-controls="mobileMenu">
                <span></span><span></span><span></span>
            </button>
        </div>
        <nav id="mobileMenu" class="mobile-menu" aria-label="Mobile" hidden>
            <ul>
                <li><a href="index.php">Back to Resume</a></li>
                <li><a href="index.php#right">Experience</a></li>
            </ul>
        </nav>
    </header>

    <!-- Mobile-only intro -->
    <section id="mobile-intro">
        <header>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h4><a href="index.php" style="text-decoration:none; color:inherit;">3D EXPERIMENT</a></h4>
            </div>
            <h2 style="font-family: Rombyte, monospace; margin-top: 10px; color:#ffffff;">INTERACTIVE RESUME</h2>
        </header>
        <section>
            <p
                style="text-align: justify; font-family: Ari, monospace; font-size: 24px; font-weight: 400; margin-top: 20px;">
                An experimental 3D portfolio experience built with <strong>Three.js</strong>. Navigate through my work
                in an immersive 3D environment. Based on Bruno Simon's folio-2025 template.
            </p>
        </section>
    </section>

    <div id="frame-container">
        <main id="main" role="main" aria-labelledby="page-title">


            <section id="right">
                <div style="padding: 40px 20px; text-align: center;">
                    <div style="max-width: 600px; margin: 0 auto;">
                        <h2
                            style="font-family: Rombyte, monospace; font-size: 48px; margin-bottom: 30px; color: #ffffff;">
                            3D INTERACTIVE EXPERIENCE
                        </h2>
                        <p
                            style="font-family: Ari, monospace; font-size: 20px; line-height: 1.6; margin-bottom: 40px; color: #86d8dd;">
                            Explore my portfolio in an immersive 3D environment. Navigate through projects,
                            interact with elements, and experience my work in a new dimension.
                        </p>

                        <div style="background: rgba(0, 0, 0, 0.3); padding: 40px; border: 2px solid rgba(134, 216, 221, 0.3); 
                                    margin: 40px 0; border-radius: 4px;">
                            <h3
                                style="font-family: Rombyte, monospace; font-size: 32px; margin-bottom: 20px; color: #ffffff;">
                                READY TO EXPLORE?
                            </h3>
                            <p
                                style="font-family: Ari, monospace; font-size: 16px; line-height: 1.6; margin-bottom: 30px; color: #ffffff;">
                                Click the button below to launch the 3D experience. Make sure you have a modern browser
                                and WebGL support enabled.
                            </p>
                            <a href="3d/pb3dcv.html" target="_blank" class="button button2" rel="noopener noreferrer"
                                style="font-size: 20px; padding: 20px 40px; display: inline-block; text-align: center; 
                                       background: rgba(134, 216, 221, 0.2); border: 2px solid #86d8dd;">
                                🚀 LAUNCH 3D EXPERIENCE
                            </a>
                        </div>

                        <div
                            style="margin-top: 60px; padding: 30px; background: rgba(0, 0, 0, 0.2); border-radius: 4px;">
                            <h4
                                style="font-family: Rombyte, monospace; font-size: 24px; margin-bottom: 20px; color: #86d8dd;">
                                EXPERIMENTAL FEATURES
                            </h4>
                            <ul style="text-align: left; font-family: Ari, monospace; font-size: 16px; line-height: 2; 
                                       list-style: none; padding: 0; max-width: 400px; margin: 0 auto;">
                                <li style="margin-bottom: 10px;">✓ Real-time 3D rendering</li>
                                <li style="margin-bottom: 10px;">✓ Physics-based interactions</li>
                                <li style="margin-bottom: 10px;">✓ Immersive navigation</li>
                                <li style="margin-bottom: 10px;">✓ Interactive portfolio elements</li>
                                <li style="margin-bottom: 10px;">✓ Dynamic lighting & weather</li>
                            </ul>
                        </div>

                        <div style="margin-top: 40px; font-size: 14px; opacity: 0.7;">
                            <p>Based on <a href="https://github.com/brunosimon/folio-2025" target="_blank"
                                    rel="noopener noreferrer" style="color: #86d8dd;">Bruno Simon's folio-2025</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- iOS Safari toolbar guard -->
    <div class="ios-toolbar-guard" aria-hidden="true"></div>

    <script src="script.js"></script>
    <footer id="site-footer-final" style="text-align:center; padding:20px 12px;">
        <p style="margin:0;">
            © 2025 Peter Bartsch</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </footer>
</body>

</html>