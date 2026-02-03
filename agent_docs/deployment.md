# Deployment Guide

## 3D Application Deployment

### Build Process

```bash
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d
npm run build
```

This creates a `dist/` folder with production-ready files.

### Deployment to DreamHost

**Method**: Use the `/deploy-3d-app` workflow (see `.agent/workflows/deploy-3d-app.md`)

**Target Directory**: `/home/peterbartsch/peterbartsch.com/3d/`

**Key Steps**:
1. Build the application (`npm run build`)
2. Upload `dist/` contents to DreamHost via SFTP
3. Verify CSP headers in `.htaccess` allow necessary resources
4. Test on live site: https://peterbartsch.com/3d-experiment.php

### Important Notes

- The 3D app requires specific CSP headers for WebAssembly and external resources
- See `3d/.htaccess` for CSP configuration
- Always test locally before deploying
- Verify the link from `3d-experiment.php` points to the correct entry file

## Main Site Deployment

The main PHP site files are deployed directly to DreamHost. Changes to `index.php`, `styles.css`, `script.js`, etc. can be uploaded via SFTP.

**Live Site**: https://peterbartsch.com

## Troubleshooting

**Blank Screen After Deploy**: Check browser console for CSP violations. Update `.htaccess` CSP headers as needed.

**Assets Not Loading**: Verify all asset paths are relative in the built files.

**Physics Not Working**: Ensure WebAssembly is allowed in CSP headers.
