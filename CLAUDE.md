# Peter Bartsch Portfolio Website

## Project Overview

**What**: Personal portfolio website showcasing UX/Product Design work with an experimental 3D resume experience.

**Why**: Professional portfolio to demonstrate design leadership, enterprise design systems work, and technical capabilities to potential employers.

**Tech Stack**:
- Main site: PHP, HTML, CSS, JavaScript (vanilla)
- 3D experience: React + Three.js (Vite)
- Hosting: DreamHost (SFTP deployment)

## Project Structure

```
peterbartsch.com/
├── index.php              # Main portfolio page
├── styles.css             # Global styles
├── script.js              # Main site interactions
├── 3d-experiment.php      # 3D resume landing page
├── folio-3d/              # 3D React application
│   ├── src/
│   │   ├── App.jsx        # Main 3D scene
│   │   └── components/    # 3D components (vehicle, environment, etc.)
│   ├── package.json
│   └── vite.config.js
├── 3d/                    # Deployed 3D build
├── *.pdf                  # Resume and case study PDFs
└── img/                   # Portfolio images
```

## Key Conventions

**File References**: When suggesting file paths, always use absolute paths from `/Users/peterbartsch/Documents/GitHub/peterbartsch.com/`

**Design Philosophy**: Premium, modern aesthetics with smooth animations and professional polish. Avoid basic/minimal designs.

**3D Application**: Based on Bruno Simon's folio-2025 reference. Uses React Three Fiber, Rapier physics, and post-processing effects.

## How to Work on This Project

### Running Locally

**Main PHP site**:
```bash
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com
php -S localhost:8000
```

**3D React app** (development):
```bash
cd /Users/peterbartsch/Documents/GitHub/peterbartsch.com/folio-3d
npm run dev
```

### Building & Deploying

See `agent_docs/deployment.md` for complete deployment workflows.

### Testing Changes

1. Test locally first
2. Build production version
3. Deploy to DreamHost
4. Verify on live site (https://peterbartsch.com)

## Additional Documentation

Task-specific documentation is available in `agent_docs/`:
- `deployment.md` - Deployment workflows and commands
- `3d_development.md` - 3D application architecture and development
- `styling_conventions.md` - CSS patterns and design tokens
- `project_history.md` - Context on past decisions and iterations

**When to read these**: If working on a specific area, read the relevant doc first. If unsure which applies, ask before proceeding.
