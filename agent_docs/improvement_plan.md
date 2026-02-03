# Portfolio Site Improvement Plan

## Quick Wins (Low Effort, High Impact)

### 1. Company Logo Parade
- Add "Worked With" section with logos: John Deere, FourKites, MavenWave, Gogo, etc.
- Builds instant credibility
- Location: Below hero or above Professional Experience

### 2. Metrics Callouts
- Pull key stats into visual cards: "500K+ Users", "$3.8B Revenue Impact", "40+ Teams"
- Make impact scannable at a glance
- Style as accent boxes within case studies

### 3. Testimonials
- Add 1-2 quotes from colleagues/managers
- LinkedIn recommendations are a good source
- Location: After case studies or in sidebar

### 4. 3D Experience Prominence
- Make the experimental 3D resume more discoverable
- Consider a thumbnail preview or animation
- Current banner is easy to miss

### 5. Calendly Integration
- Add "Schedule a Call" link
- Direct conversion path for interested parties

---

## Medium Effort Improvements

### 6. Dedicated Case Study Pages
- Individual URLs for each case study (better SEO, shareable)
- Deeper content: process, iterations, learnings
- Route: /case-studies/thios, /case-studies/deere-adoption, etc.

### 7. Scroll Animations
- Fade-in content as user scrolls
- Subtle parallax on hero image
- Micro-interactions on hover states

### 8. Keyboard Navigation
- Arrow keys for carousel
- Escape to close modals
- Tab navigation for accessibility

### 9. Analytics Events
- Track: case study clicks, resume downloads, time on page
- Understand what content resonates
- Already have GA4 and Clarity installed

### 10. Performance Optimization
- Lazy load images below fold
- Preload critical fonts
- Target 90+ Lighthouse score

---

## Larger Initiatives

### 11. Blog/Writing Section
- Thought leadership content
- Design system articles, AI in design, etc.
- Builds SEO and demonstrates expertise

### 12. Interactive Project Demos
- Embedded Figma prototypes
- Live component examples
- Shows hands-on capability

### 13. Video Walkthroughs
- 60-second Loom for each major project
- Personal touch, shows communication skills
- Embed in case study modals

### 14. Service Worker / PWA
- Offline capability
- Instant repeat visits
- App-like experience

---

## Priority Order (Recommended)

1. **Company logos** - Immediate credibility boost
2. **Metrics callouts** - Make impact visible
3. **Testimonial** - Social proof
4. **Calendly link** - Conversion path
5. **Case study pages** - SEO + depth
6. **Scroll animations** - Polish
7. **Everything else** - As time permits

---

## Notes

- Current domain setup: `peterbartsch.com` redirects to `petebartsch.com`
- Deploy script: `./deploy_main.sh` (will prompt for password)
- 3D app in `/folio-3d/` - separate build/deploy process
