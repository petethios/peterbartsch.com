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

All styles are in `styles.css` (single file, ~56KB).

### Key Patterns

**Custom Properties**: Not heavily used; most values are hardcoded.

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
