# Project History & Context

## Project Evolution

This portfolio site has evolved through several iterations:

1. **Initial PHP Site**: Traditional portfolio with resume, case studies, and contact form
2. **Design Refinements**: Multiple iterations on button hovers, spacing, responsive behavior
3. **3D Experiment**: Added experimental 3D resume experience (folio-3d)
4. **Analytics Integration**: Added Google Analytics and Microsoft Clarity
5. **Mobile Optimization**: Extensive mobile testing and fixes

## Key Past Decisions

### Why PHP?

The main site uses PHP for:
- Simple server-side includes (if needed in future)
- Contact form handling (obfuscated email)
- Flexibility for future backend features

### Why Separate 3D App?

The 3D experience is a separate React app because:
- Different tech stack (React Three Fiber vs vanilla JS)
- Independent development and deployment
- Experimental/optional feature
- Performance isolation

### Design Choices

**Monospace Fonts**: Custom fonts (Rombyte, Ari) create a unique, technical aesthetic that aligns with the designer's background.

**Dark Theme**: Professional, modern, reduces eye strain, and makes colors pop.

**Grid Overlays**: Adds visual texture and depth without cluttering content.

**Video Hero**: Interactive video (click to play) provides engagement without being intrusive.

## Known Issues & Limitations

### Mobile Responsiveness

Extensive work has been done on mobile responsiveness, particularly:
- Text clipping on iPhone devices
- Section spacing
- Hamburger menu behavior

### 3D Performance

The 3D app can be resource-intensive:
- Complex physics calculations
- Post-processing effects
- Large 3D models

Optimizations have been made, but performance varies by device.

### Browser Compatibility

Site is optimized for modern browsers. Some features may not work in older browsers:
- CSS Grid
- Custom fonts
- Video playback
- WebAssembly (for 3D app)

## Recent Major Changes

### Theme Switcher — Web Design Era Time Machine (2025)

Added a complete theme switching system with 5 design eras:
- **1980s — Retro Terminal** (default): CRT frame, phosphor glow, grid overlay, monospace fonts
- **1990s — GeoCities**: Comic Neue font, hot pink/lime/cyan colors, twinkling stars canvas, Win95 beveled buttons, hit counter
- **2000s — Web 2.0**: Georgia/Verdana, glossy gel buttons, light gray background, rounded corners, drop shadows
- **2010s — Corporate Memphis**: Inter font, pastel colors (coral/lavender/mint), pill buttons, white background, lots of whitespace
- **2026 — Modern/AI**: JetBrains Mono headings, system font body, black-on-white, electric blue accent, CLI-inspired aesthetic

Architecture: Separate CSS files per theme, loaded dynamically via JS. `data-theme` attribute on `<html>`. localStorage persistence with FOUC prevention. See `agent_docs/styling_conventions.md` for full technical details.

### Portfolio Improvements (2025)

- Added dedicated HTML case study pages (replacing PDF-only approach)
- Added company logos section, metrics bar, scroll animations
- Added carousel thumbnails for case studies
- Improved SEO with sitemap and meta tags
- Refactored case-study CSS with custom properties for theme compatibility

### Earlier Changes

See conversation history for detailed context on:
- Dashboard and index refinements
- Favicon fixes
- Language switcher (for other project, not this one)
- 3D app deployment and CSP configuration
- Visual effects and physics in 3D app
- Button spacing and hover refinements
- Microsoft Clarity integration

## Future Considerations

**Potential Enhancements**:
- Contact form backend integration
- More interactive 3D elements
- Additional case studies
- Blog or articles section
- Performance optimizations

**Maintenance**:
- Keep dependencies updated (especially 3D app)
- Monitor analytics for user behavior
- Regular testing on new devices/browsers
- Content updates as career progresses
