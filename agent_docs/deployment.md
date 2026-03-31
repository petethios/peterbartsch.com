# Deployment Guide

## SSH Configuration

**Host**: dreamhost (configured in `~/.ssh/config`)
**User**: tronicadmin
**Server**: petebartsch.com
**Key**: ~/.ssh/id_ed25519
**Port**: 22

**IMPORTANT**: The web root is `~/petebartsch.com/` (note: no 'r' — pete**b**artsch). The `~/peterbartsch.com/` directory is a redirect domain and should NOT be deployed to.

## Full Site Deployment

Deploy the entire site via rsync:

```bash
rsync -avz --progress \
  --exclude='.git' --exclude='.DS_Store' --exclude='node_modules' \
  --exclude='folio-3d' --exclude='agent_docs' --exclude='.agent' \
  --exclude='.claude' --exclude='CLAUDE.md' --exclude='pb-deploy.tar.gz' \
  --exclude='og-image-generator.html' \
  /Users/peterbartsch/Documents/GitHub/peterbartsch.com/ \
  dreamhost:~/petebartsch.com/
```

## 3D Application Deployment

### Build Process

```bash
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d
npm run build
```

This creates a `dist/` folder with production-ready files.

### Deployment to DreamHost

**Method**: Use the `/deploy-3d-app` workflow (see `.agent/workflows/deploy-3d-app.md`)

**Target Directory**: `~/petebartsch.com/3d/`

**Key Steps**:
1. Build the application (`npm run build`)
2. Upload `dist/` contents via rsync or SFTP
3. Verify CSP headers in `.htaccess` allow necessary resources
4. Test on live site: https://peterbartsch.com/3d-experiment.php

### Important Notes

- The 3D app requires specific CSP headers for WebAssembly and external resources
- See `3d/.htaccess` for CSP configuration
- Always test locally before deploying
- Verify the link from `3d-experiment.php` points to the correct entry file

## Main Site Deployment

The main PHP site files are deployed directly to DreamHost. Changes to `index.php`, `styles.css`, `script.js`, etc. can be uploaded via rsync.

**Live Site**: https://peterbartsch.com

## Theme System Deployment Notes

The `themes/` directory contains all theme CSS files, JS, and the PHP banner include. It is deployed alongside the main site via rsync (not excluded). Ensure all theme CSS files are included:
- `theme-switcher.css`, `theme-switcher.js`, `theme-banner.php`
- `theme-90s.css`, `theme-2000s.css`, `theme-2010s.css`, `theme-2026.css`

Google Fonts are loaded from `fonts.googleapis.com` / `fonts.gstatic.com` — ensure CSP headers in `.htaccess` allow these domains.

## Troubleshooting

**Blank Screen After Deploy**: Check browser console for CSP violations. Update `.htaccess` CSP headers as needed.

**Assets Not Loading**: Verify all asset paths are relative in the built files.

**Physics Not Working**: Ensure WebAssembly is allowed in CSP headers.

**Deployed to wrong directory**: The correct web root is `~/petebartsch.com/` (no 'r'). The `~/peterbartsch.com/` directory is just a redirect.
