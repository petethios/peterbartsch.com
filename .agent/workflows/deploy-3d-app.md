---
description: Deploy 3D Application to DreamHost
---

# 3D Application Deployment Guide

This workflow covers the complete process of deploying the 3D React application (folio-3d) to DreamHost, including building the app, uploading files, and handling new .glb model updates.

## Prerequisites

- Node.js and npm installed locally
- FTP/SFTP access to DreamHost server
- The folio-3d application is working correctly in development

## Part 1: Building the Application

### 1. Navigate to the folio-3d directory
```bash
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d
```

### 2. Install dependencies (if not already done)
```bash
npm install
```

### 3. Build the production bundle
// turbo
```bash
npm run build
```

**What this does:**
- Compiles all React components
- Bundles JavaScript with Vite
- Optimizes assets (images, models, etc.)
- Creates a `dist` folder with production-ready files

**Expected output:**
- `dist/index.html` - Main HTML file
- `dist/assets/` - Bundled JS, CSS, and other assets
- All `.glb` models and textures copied to dist

### 4. Verify the build
Check that the `dist` folder contains:
- `index.html`
- `assets/` directory with JS and CSS files
- All `.glb` model files (e.g., `Blockout11.glb`, `Bike.glb`)
- Any texture files or other assets

```bash
ls -la dist/
```

## Part 2: Preparing Files for Upload

### 5. Rename index.html to pb3dcv.html
The main site links to `pb3dcv.html` from `3d-experiment.php`, so we need to rename the file:

```bash
cd dist
mv index.html pb3dcv.html
```

**Why?** The link in `3d-experiment.php` points to `/3d/pb3dcv.html`, not `index.html`.

### 6. Update asset paths in pb3dcv.html (if needed)
Open `pb3dcv.html` and verify that all asset paths are relative (they should be by default from Vite):
- CSS: `./assets/index-[hash].css`
- JS: `./assets/index-[hash].js`
- Models: Should be referenced correctly in the JS bundle

**Note:** Vite handles this automatically, but double-check if you encounter loading issues.

## Part 3: Uploading to DreamHost

### 7. Connect to DreamHost via FTP/SFTP
Use your preferred FTP client (FileZilla, Cyberduck, etc.) or command line:

**Server:** Your DreamHost server address
**Username:** Your DreamHost username
**Password:** Your DreamHost password
**Port:** 22 (SFTP) or 21 (FTP)

### 8. Navigate to the 3d directory
On the server, navigate to:
```
/home/[username]/peterbartsch.com/3d/
```

### 9. Upload all files from dist folder
Upload the following from your local `dist` folder to the server's `3d` folder:
- `pb3dcv.html` (the renamed index.html)
- `assets/` directory (entire folder with all contents)
- All `.glb` model files
- Any other assets (textures, images, etc.)

**Important:** 
- Overwrite existing files when prompted
- Maintain the directory structure (assets folder must remain as-is)
- Ensure file permissions are correct (typically 644 for files, 755 for directories)

### 10. Verify file structure on server
After upload, the server's `3d` folder should contain:
```
3d/
├── pb3dcv.html
├── assets/
│   ├── index-[hash].js
│   ├── index-[hash].css
│   └── [other bundled assets]
├── Blockout11.glb
├── Bike.glb
└── [other .glb files]
```

## Part 4: Handling Content Security Policy (CSP)

### 11. Update CSP in pb3dcv.html
The 3D application requires specific CSP permissions for WebAssembly and external resources.

Open `pb3dcv.html` on the server and ensure the `<meta>` tag in the `<head>` includes:

```html
<meta http-equiv="Content-Security-Policy" content="
  default-src 'self'; 
  script-src 'self' 'unsafe-eval' 'wasm-unsafe-eval'; 
  style-src 'self' 'unsafe-inline'; 
  img-src 'self' data: blob:; 
  font-src 'self' data:; 
  connect-src 'self' https://cdn.jsdelivr.net; 
  worker-src 'self' blob:;
">
```

**Why each directive is needed:**
- `script-src 'unsafe-eval' 'wasm-unsafe-eval'` - Required for Three.js and WebAssembly
- `img-src data: blob:` - For texture loading
- `connect-src https://cdn.jsdelivr.net` - For any CDN resources
- `worker-src blob:` - For web workers used by physics engines

### 12. Update .htaccess (if needed)
If CSP issues persist, add to `/3d/.htaccess`:

```apache
<IfModule mod_headers.c>
    Header set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-eval' 'wasm-unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data: blob:; font-src 'self' data:; connect-src 'self' https://cdn.jsdelivr.net; worker-src 'self' blob:;"
</IfModule>
```

## Part 5: Deploying a New .glb Model

### 13. Export model from Blender
When exporting a new or updated `.glb` model from Blender:

**Export settings:**
- Format: glTF Binary (.glb)
- Include: Selected Objects (or All, depending on needs)
- Transform: +Y Up
- Geometry: Apply Modifiers ✓
- Materials: Export ✓
- Compression: None (or Draco if file size is large)

**Best practices:**
- Keep polygon count reasonable (< 100k for environments)
- Use simple colliders for physics (separate from visual mesh)
- Name objects clearly in Blender (they become node names in Three.js)
- Apply all transforms before export (Ctrl+A → All Transforms)

### 14. Add model to folio-3d project
Place the new `.glb` file in:
```
/Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d/public/
```

**Why public folder?** Vite copies everything from `public/` to `dist/` during build.

### 15. Generate React component (if needed)
If you need a new React component for the model:

```bash
npx gltfjsx public/YourModel.glb -o src/components/YourModel.jsx
```

**Options:**
- `-t` - Add TypeScript types
- `-r` - Add React Three Fiber hooks
- `-s` - Simplify output

### 16. Import and use in your scene
In your main scene file (e.g., `src/App.jsx` or `src/Experience.jsx`):

```javascript
import YourModel from './components/YourModel'

// In your component:
<YourModel />
```

### 17. Test locally
```bash
npm run dev
```

Verify:
- Model loads correctly
- Textures are applied
- No console errors
- Physics work as expected (if applicable)

### 18. Rebuild and redeploy
Follow steps 3-10 to rebuild and upload the updated application.

## Part 6: Verification and Testing

### 19. Test the deployed application
Visit: `https://peterbartsch.com/3d-experiment.php`

Click the link to the 3D experience and verify:
- ✓ Page loads without errors
- ✓ 3D scene renders correctly
- ✓ Models are visible
- ✓ Controls work (WASD, mouse)
- ✓ No CSP errors in browser console (F12)
- ✓ Physics interactions work
- ✓ Mobile controls appear on mobile devices

### 20. Check browser console for errors
Open Developer Tools (F12) and check:
- **Console tab:** No red errors (warnings are usually OK)
- **Network tab:** All assets load (200 status codes)
- **Performance:** Page loads in reasonable time

### 21. Test on multiple devices
- Desktop (Chrome, Firefox, Safari)
- Mobile (iOS Safari, Android Chrome)
- Different screen sizes

## Common Issues and Solutions

### Issue: Black screen or models not visible
**Solutions:**
1. Check camera position and target in your scene
2. Verify lighting is present (ambient + directional)
3. Check model scale (might be too small or too large)
4. Verify materials are exported correctly from Blender

### Issue: CSP errors in console
**Solutions:**
1. Update CSP meta tag in pb3dcv.html (step 11)
2. Add/update .htaccess file (step 12)
3. Check for blocked resources in Network tab

### Issue: Models not loading (404 errors)
**Solutions:**
1. Verify .glb files are in the correct location on server
2. Check file paths in component code (case-sensitive!)
3. Ensure files were uploaded completely (check file sizes)

### Issue: Controls not working
**Solutions:**
1. Check for JavaScript errors in console
2. Verify event listeners are attached
3. Test with keyboard and mouse separately
4. Check if physics body is properly initialized

### Issue: Physics not working or browser crashes
**Solutions:**
1. Simplify collision meshes (use boxes/spheres instead of complex meshes)
2. Reduce polygon count on physics colliders
3. Check for duplicate physics bodies
4. Verify Rapier physics engine is loaded correctly

### Issue: Slow loading or performance issues
**Solutions:**
1. Compress .glb files (use Draco compression)
2. Optimize textures (reduce resolution, use compressed formats)
3. Reduce polygon count on models
4. Implement LOD (Level of Detail) for distant objects
5. Use `lazy` loading for non-critical components

## File Checklist

Before considering deployment complete, verify:

- [ ] `npm run build` completes without errors
- [ ] `dist/pb3dcv.html` exists (renamed from index.html)
- [ ] All `.glb` files are in dist folder
- [ ] Assets folder contains all bundled files
- [ ] Files uploaded to server's `3d/` directory
- [ ] CSP meta tag is correct in pb3dcv.html
- [ ] Link in `3d-experiment.php` points to `/3d/pb3dcv.html`
- [ ] Application loads on live site
- [ ] No console errors on live site
- [ ] Controls work on live site
- [ ] Tested on desktop and mobile

## Quick Reference Commands

```bash
# Build the app
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d
npm run build

# Rename output file
cd dist
mv index.html pb3dcv.html

# Generate component from .glb
npx gltfjsx public/ModelName.glb -o src/components/ModelName.jsx

# Test locally
npm run dev
```

## Notes

- Always test locally before deploying
- Keep a backup of the previous working build
- Document any custom configurations or workarounds
- Update this guide if you discover new issues or solutions
