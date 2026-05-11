<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Page Not Found | Peter Bartsch</title>
    <link rel="icon" type="image/svg+xml" href="/pblogo.svg">
    <link rel="preload" href="/rombyte.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="/styles.css">
    <?php $themeBasePath = '/'; include('themes/theme-head.php'); ?>
    <style>
        .error-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            text-align: center;
            padding: 40px 24px;
        }
        .error-code {
            font-family: var(--font-display);
            font-size: 96px;
            color: var(--color-primary);
            margin: 0;
            line-height: 1;
        }
        .error-message {
            font-family: var(--font-body);
            font-size: 18px;
            color: var(--color-text-primary, #ccc);
            margin: 16px 0 32px;
        }
        .error-link {
            font-family: var(--font-display);
            font-size: 13px;
            letter-spacing: 1px;
            color: var(--color-primary);
            text-decoration: none;
            border: 1px solid rgba(134, 216, 221, 0.3);
            padding: 10px 24px;
            transition: all 0.2s;
        }
        .error-link:hover {
            border-color: var(--color-primary);
            background: rgba(134, 216, 221, 0.05);
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/lib/site-header.php'; ?>
    <main class="error-page">
        <h1 class="error-code">404</h1>
        <p class="error-message">This page doesn't exist. Maybe it used to.</p>
        <a href="/" class="error-link">← BACK TO PORTFOLIO</a>
    </main>
    <script src="/themes/theme-switcher.js"></script>
    <script defer src="/script.js"></script>
</body>
</html>
