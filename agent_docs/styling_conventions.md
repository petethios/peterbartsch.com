# Styling Conventions

## Design Philosophy

**Premium, Modern Aesthetics**: The site should WOW users with:
- Vibrant, curated color palettes (not generic colors)
- Modern typography (Rombyte, Ari custom fonts)
- Smooth gradients and transitions
- Subtle micro-animations
- Glassmorphism and depth effects

**Avoid**: Basic, minimal, or generic designs. This is a professional portfolio that needs to stand out.

## CSS Architecture

### Theme System

The site supports 5 design era themes via a switcher dropdown. The default (80s Retro Terminal) uses `styles.css`. Additional themes are loaded dynamically as separate CSS files.

```
themes/
├── theme-switcher.css      # Dropdown UI (always loaded)
├── theme-switcher.js       # Switching logic, localStorage, stars animation
├── theme-banner.php        # Shared banner HTML (included in index.php + case studies)
├── theme-90s.css           # GeoCities overrides
├── theme-2000s.css         # Web 2.0 overrides
├── theme-2010s.css         # Corporate Memphis overrides
└── theme-2026.css          # Modern/AI overrides
```

**How It Works**:
- `data-theme` attribute on `<html>` drives theme selection
- Each theme CSS uses `[data-theme="X"]` selectors to override `:root` custom properties
- Only the active theme's CSS `<link>` is in the DOM (JS loads/unloads)
- Google Fonts are lazy-loaded via `media="print"` and activated per-theme
- Theme persists via `localStorage('pb-theme')`
- FOUC prevention: inline `<script>` in `<head>` sets `data-theme` before first paint

**Key Technical Details**:
- `background` shorthand must be used (not `background-color`) to override `background: linear-gradient(...)` — use `background: color !important`
- The sticky banner sits at `z-index: 2001`, the site header at `z-index: 2000` with `top: var(--banner-h)`
- 90s theme has a canvas-based twinkling stars animation (created/destroyed on theme switch)
- Light themes (2000s, 2010s, 2026) need logo `filter` adjustments and dark text overrides for hero-stats

**Adding a New Theme**:
1. Create `themes/theme-XXXX.css` with `[data-theme="XXXX"]` selectors
2. Add entry to `THEME_CSS_MAP` in `theme-switcher.js`
3. Add font IDs to `THEME_FONTS_MAP` if needed
4. Add `<option>` to `theme-banner.php`
5. Add FOUC-prevention exclusions in `theme-switcher.css` (CRT frame, grid overlay removal)

### Base Styles

All base styles are in `styles.css` (single file, ~3000 lines).

### Key Patterns

**Custom Properties**: Defined in `:root` for colors, fonts, spacing. Themes override these via `[data-theme] :root` selectors.

**Color Palette**:
- Primary accent: `#86d8dd` (cyan/teal)
- Dark backgrounds: `#000000`, `#1a1a1a`
- Text: `#ffffff`, `rgba(255,255,255,0.8)`

**Typography**:
- Headers: `Rombyte` (custom monospace)
- Body: `Ari` (custom monospace)
- Fallback: `monospace`

**Responsive Design**:
- Mobile-first approach
- Breakpoints defined inline in media queries
- Key breakpoint: ~768px for mobile/desktop split

### Button Styles

`.button` and `.button2` classes with:
- Hover effects (slight font-size increase, color shifts)
- Transitions for smooth interactions
- Icon support (PDF, Figma icons)

### Layout

- Main layout: Two-column (`#left` sidebar, `#right` content)
- Sticky header with hamburger menu on mobile
- Experimental banner at top
- Grid overlays for visual texture

## Animation Principles

**Micro-interactions**: Subtle hover effects on all interactive elements.

**Transitions**: Smooth, typically 0.2-0.3s ease.

**Video**: Hero video plays on user click, not autoplay.

## Accessibility

- Semantic HTML5 elements
- ARIA labels on interactive elements
- Skip-to-content link
- Keyboard navigation support
- High contrast text

## Common Modifications

**Changing Colors**: Search for hex values in `styles.css` and update consistently.

**Adjusting Spacing**: Most spacing uses `margin` and `padding` in px units.

**Adding Animations**: Use CSS transitions or keyframe animations. Keep them subtle and performant.

## References

See existing styles in:
- `styles.css` (lines 1-1400+)
- `index.php` for HTML structure
- `script.js` for interactive behaviors
