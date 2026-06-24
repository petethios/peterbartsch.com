<?php
/**
 * Shared site header — mirrors the homepage exactly, using absolute paths
 * (`/foo`) so the same file renders identically from any directory depth.
 *
 * Include with:
 *   <?php include __DIR__ . '/../lib/site-header.php'; ?\>     // one level deep
 *   <?php include __DIR__ . '/lib/site-header.php'; ?\>        // project root
 *
 * (The closing PHP tag in the example above is escaped — a literal `?` then `>`
 * inside a single-line `//` comment terminates the PHP block early and leaks
 * the file's actual closing tag into the rendered HTML.)
 */
?>
<a href="#main" class="visually-hidden skip-link">Skip to main content</a>
<!-- Sticky Header Nav (shared include — keep in sync with homepage) -->
<header id="site-header" role="banner">
    <div class="header-inner">
        <a href="/" class="header-logo" aria-label="Home">
            <img src="/pblogo.svg" alt="PB logo" height="40" />
        </a>
        <nav class="header-nav header-nav-simplified" aria-label="Primary">
            <ul class="nav-primary">
                <li><a href="/resume.php">RESUME</a></li>
                <li><a href="/Peter-Bartsch-Portfolio.pdf" target="_blank" rel="noopener">PORTFOLIO (PDF)</a></li>
                <li><a href="/#portfolio-carousel">CASE STUDIES</a></li>
                <li><a href="/blog/">WRITINGS</a></li>
                <li><a href="/#contact">CONTACT</a></li>
            </ul>
        </nav>
        <!-- Compact era dropdown — replaces the 6-button row so the era switcher doesn't crowd the header next to the hamburger -->
        <div class="theme-era-select-wrap" title="Every era of the web. Built for enterprise. Same operator.">
            <select class="theme-era-select" aria-label="Switch design era theme">
                <option value="80s">1980s &middot; Terminal</option>
                <option value="90s">1990s &middot; GeoCities</option>
                <option value="matrix">2000 &middot; Matrix</option>
                <option value="2000s">2000s &middot; Web 2.0</option>
                <option value="2010s">2010s &middot; Memphis</option>
                <option value="2026" selected>2026 &middot; Modern AI</option>
            </select>
        </div>
        <button class="hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false"
            aria-controls="mobileMenu">
            <span></span><span></span><span></span>
        </button>
    </div>
    <!-- Mobile menu backdrop -->
    <div id="mobileMenuBackdrop" class="mobile-menu-backdrop"></div>

    <!-- Mobile navigation drawer -->
    <nav id="mobileMenu" class="mobile-menu" aria-label="Mobile" hidden inert>
        <button id="mobileMenuClose" class="mobile-menu-close" aria-label="Close menu"></button>
        <ul class="mobile-nav-primary">
            <li><a href="/resume.php">RESUME</a></li>
            <li><a href="/Peter-Bartsch-Portfolio.pdf" target="_blank" rel="noopener">PORTFOLIO (PDF)</a></li>
            <li><a href="/#portfolio-carousel">CASE STUDIES</a></li>
            <li><a href="/blog/">WRITINGS</a></li>
            <li><a href="/#contact">CONTACT</a></li>
        </ul>
        <div class="mobile-menu-divider"></div>
        <div class="mobile-menu-header">Case Studies</div>
        <ul>
            <li><a href="/case-studies/thios.php">Thios: 6-Surface Design System</a></li>
            <li><a href="/case-studies/thios-flywheel.php">Thios: Open-Hardware Flywheel</a></li>
            <li><a href="/case-studies/deere-common-ux.php">Deere: Forced Adoption</a></li>
            <li><a href="/case-studies/deere-nav.php">Deere: Platform Unification</a></li>
            <li><a href="/case-studies/deere-mobile.php">Deere: Mobile</a></li>
            <li><a href="/case-studies/fourkites-tracking.php">FourKites: Data Trust</a></li>
            <li><a href="/case-studies/fourkites-driver.php">FourKites: Incentive Design</a></li>
            <li><a href="/case-studies/fourkites-mobile.php">FourKites: Mobile</a></li>
            <li><a href="/case-studies/here-traffic.php">HERE: Real-Time Traffic</a></li>
            <li><a href="/case-studies/gogo-flight-tracker.php">Gogo: Flight Tracker</a></li>
        </ul>
        <div class="mobile-menu-divider"></div>
        <div class="mobile-menu-header">Design Era</div>
        <div class="mobile-theme-buttons" role="group" aria-label="Switch design era theme">
            <button class="theme-era-btn" data-theme="80s" aria-label="1980s Retro Terminal" aria-pressed="false">80s</button>
            <button class="theme-era-btn" data-theme="90s" aria-label="1990s GeoCities" aria-pressed="false">90s</button>
            <button class="theme-era-btn" data-theme="matrix" aria-label="2000 Matrix Digital Rain" aria-pressed="false">2000</button>
            <button class="theme-era-btn" data-theme="2000s" aria-label="2000s Web 2.0" aria-pressed="false">00s</button>
            <button class="theme-era-btn" data-theme="2010s" aria-label="2010s Corporate Memphis" aria-pressed="false">10s</button>
            <button class="theme-era-btn active" data-theme="2026" aria-label="2026 Modern AI" aria-pressed="true">2026</button>
        </div>
    </nav>
</header>
