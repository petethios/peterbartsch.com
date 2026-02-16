# Retro-Electronic Brutalist Redesign Plan

## Creative Direction Summary

Transform the portfolio from "solid, professional, neutral" to "decisive, opinionated, systems-thinking leader" through:

1. **Retro electronic display aesthetic** - phosphor glow, scanline effects, industrial precision
2. **Ambient dimming system** - background dims without interaction, rewards attention
3. **Cyan accent cursor** - precision tool feel, high contrast
4. **Digital brutalist CTAs** - heavy borders, stark typography, command-like language

---

## Phase 1: Tighten the Hero + Primary CTA

### Problems to Fix
- Hero is too dense, overwhelming on first load
- CTA language is functional but not compelling ("Resume + Case Studies")
- No single, strong call-to-action
- Visual hierarchy doesn't command attention

### Changes

#### 1.1 Hero Copy Rewrite
**Current:**
> "Enterprise UX & Product Leader — Simplifying complex systems for users and businesses. Enabled $3.8B revenue, drove 34%→87% platform adoption across 500K+ users, scaled design org 1→10."

**Proposed:**
> "I turn complex enterprise problems into designs teams actually adopt."
>
> `$3.8B revenue enabled · 500K+ users · 34%→87% adoption`

Shorter. Sharper. Declarative.

#### 1.2 Single Primary CTA
Replace the current dual buttons with ONE dominant CTA:

**Brutalist CTA block:**
```
┌─────────────────────────────────────┐
│  VIEW FLAGSHIP CASE STUDY →         │
│  [Deere: Forced Adoption at Scale]  │
└─────────────────────────────────────┘
```

Secondary actions (Resume PDF, Contact) become smaller, subdued links below.

#### 1.3 Hero Visual Treatment
- Add subtle phosphor text glow to "PETER BARTSCH" name
- Implement scanline overlay effect on hero image
- Reduce hero height by ~20%

---

## Phase 2: Ambient Dimming System

### Concept
The page "powers down" when idle, creating tension and rewarding engagement.

### Implementation
```css
/* Ambient state variables */
:root {
  --ambient-brightness: 1;
  --dim-transition: 2s ease-out;
}

/* Dimmed state */
body.dimmed {
  --ambient-brightness: 0.4;
}

/* Elements that dim */
.dimmable {
  filter: brightness(var(--ambient-brightness));
  transition: filter var(--dim-transition);
}
```

### Behavior
- **Idle timeout:** 3 seconds
- **Dim level:** 40% brightness (not fully black)
- **Wake triggers:** scroll, mousemove, keypress, touch
- **Wake speed:** instant (0ms)
- **Dim speed:** slow decay (2s)

### What dims
- Background elements
- Non-primary content
- Company logos
- Metrics cards

### What stays bright
- Hero headline
- Primary CTA
- Active carousel slide
- Cursor area (subtle spotlight effect)

---

## Phase 3: Cursor Enhancement

### Implementation
- Custom cyan (#86d8dd) ring around cursor
- Subtle glow on hover over interactive elements
- NO novelty shapes, NO trails
- Accessibility: ensure contrast, don't replace system cursor entirely

```css
/* Cursor accent ring */
.cursor-ring {
  position: fixed;
  width: 24px;
  height: 24px;
  border: 2px solid var(--color-primary);
  border-radius: 50%;
  pointer-events: none;
  transform: translate(-50%, -50%);
  transition: transform 0.1s ease, opacity 0.2s;
  mix-blend-mode: screen;
}

/* Glow on interactive hover */
.cursor-ring.hovering {
  transform: translate(-50%, -50%) scale(1.5);
  box-shadow: 0 0 20px var(--color-primary);
}
```

---

## Phase 4: Typography & Text Animation

### Phosphor Glow Effect
Apply to:
- Hero name "PETER BARTSCH"
- Section headers
- CTA text

```css
.phosphor-text {
  text-shadow:
    0 0 5px var(--color-primary),
    0 0 10px var(--color-primary),
    0 0 20px rgba(134, 216, 221, 0.5);
  animation: phosphor-flicker 4s infinite;
}

@keyframes phosphor-flicker {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.95; }
  52% { opacity: 1; }
  54% { opacity: 0.98; }
}
```

### Scanline Overlay
Subtle CRT scanline effect on images and video:
```css
.scanlines::after {
  content: '';
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    0deg,
    transparent,
    transparent 2px,
    rgba(0, 0, 0, 0.1) 2px,
    rgba(0, 0, 0, 0.1) 4px
  );
  pointer-events: none;
}
```

---

## Phase 5: Brutalist CTA Sections

### Design Language
- Heavy borders (2-4px solid)
- Stark monospace typography
- Minimal copy
- Command-like verbs

### CTA Block Styles
```css
.brutalist-cta {
  border: 3px solid var(--color-primary);
  padding: 24px 32px;
  background: rgba(0, 0, 0, 0.8);
  position: relative;
}

.brutalist-cta::before {
  content: '>';
  position: absolute;
  left: 12px;
  color: var(--color-primary);
  animation: cursor-blink 1s step-end infinite;
}

.brutalist-cta-text {
  font-family: var(--font-display);
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
```

### CTA Copy Updates
| Current | Proposed |
|---------|----------|
| "Resume + Case Studies" | "VIEW PRIMARY CASE →" |
| "Everything in Figma" | "ACCESS FULL SYSTEM" |
| "Send Message" | "INITIATE CONTACT" |
| "View More →" | "EXPAND RECORD →" |

---

## Phase 6: Case Study Cards Enhancement

### Problem
Cards show title + image + impact bullets but lack **problem → approach → outcome** structure.

### Solution
Add a one-line "design thinking" preview:

**Current:**
> DEERE: FORCED ADOPTION
> Drove 34%→87% engagement without destroying trust • $3.8B revenue enabled

**Proposed:**
> DEERE: FORCED ADOPTION
> **Challenge:** Force data adoption across 500K users without destroying trust
> **Method:** Multi-channel progressive disclosure strategy
> **Result:** 34%→87% engagement • $3.8B revenue enabled

### Visual Treatment
- Flagship case study breaks the grid (spans wider, larger imagery)
- Add subtle terminal-style border frame
- Scanline overlay on thumbnails

---

## Phase 7: Navigation Simplification

### Current Nav
- Top
- Experience
- All in Figma
- Resume (PDF)
- Portfolio (PDF)
- Case Studies (5 items)
- Contact

### Proposed Nav
```
WORK · CASES · RESUME · CONTACT
```

- **WORK** → scroll to experience section
- **CASES** → scroll to carousel
- **RESUME** → direct PDF download (tracked)
- **CONTACT** → scroll to contact form

Remove redundancy. One click to anything important.

---

## Phase 8: Add Testimonials Section

### Placement
After metrics, before experience table.

### Design
Brutalist quote blocks:
```
┌──────────────────────────────────────────────────┐
│  "Peter's design strategy tripled onboarding     │
│   completion in 6 weeks."                        │
│                                                  │
│   — [NAME], [ROLE] at [COMPANY]                  │
└──────────────────────────────────────────────────┘
```

### Suggested Sources
- LinkedIn recommendations
- Slack messages (with permission)
- Performance review excerpts

---

## Phase 9: Visual Hierarchy Improvements

### Whitespace Increases
- Section padding: 60px → 80px
- Between carousel and metrics: add 40px
- Hero bottom margin: increase 20%

### Typography Scale
- Hero name: 48px → 64px (desktop)
- Section headers: 24px → 32px
- Body: keep 16px but increase line-height

### Contrast
- Alternate sections between full dark and slightly lifted backgrounds
- Use border-top on sections for visual breaks

---

## Implementation Order (Recommended)

### Sprint 1: Foundation (High Impact)
1. Hero copy rewrite + single CTA
2. Phosphor text effect on hero name
3. Basic ambient dimming system
4. Brutalist CTA styling

### Sprint 2: Polish
5. Cursor enhancement
6. Scanline overlays
7. Navigation simplification
8. Case study card enhancements

### Sprint 3: Trust & Conversion
9. Testimonials section
10. Visual hierarchy tweaks
11. Performance optimization

---

## Success Criteria

### Before/After Signals
| Before | After |
|--------|-------|
| "Solid, professional portfolio" | "Decisive, opinionated systems leader" |
| "Designed for designers" | "Commands executive attention" |
| "Politely asks to be read" | "Insists on what matters" |
| "Very good IC portfolio" | "Design leader who sets direction" |

### Measurable Goals
- Time to first CTA click: decrease by 30%
- Resume downloads: increase by 20%
- Bounce rate: decrease by 15%
- Session duration: increase (engagement with dimming system)

---

## Technical Considerations

### Performance
- CSS animations only (no JS animation libraries)
- Use `will-change` sparingly
- Respect `prefers-reduced-motion`

### Accessibility
- Dimming must not affect readability
- Cursor ring is decorative, system cursor still functions
- All animations can be disabled
- Contrast ratios maintained in dimmed state

### Browser Support
- Modern browsers only (CSS custom properties, mix-blend-mode)
- Graceful degradation for older browsers

---

## Files to Modify

1. `styles.css` - New CSS variables, animations, brutalist components
2. `index.php` - Hero copy, navigation structure, CTA markup
3. `script.js` - Ambient dimming logic, cursor tracking
4. Case study pages - Enhanced card markup
5. New: `ambient.js` - Dedicated ambient interaction system

---

## Questions for You

1. **Testimonials:** Do you have 2-3 quotes ready, or should we add placeholder structure?
2. **Dimming intensity:** 40% feels right, but want to confirm before implementing
3. **CTA language:** "INITIATE CONTACT" vs "LET'S TALK" - how aggressive?
4. **Flagship case study:** Confirm Deere: Forced Adoption is the one to emphasize?
