# Alvin Atsegwasi, Design System

Derived from the `ui-ux-pro-max` skill (Exaggerated Minimalism / editorial / spacious /
WCAG AA) blended with the client brand direction. This is the single source of truth for
tokens, type, motion, and layout rhythm. Reference for tone: tonyelumelu.com.

## Style
- Pattern: editorial, image-led, magazine sections, confident whitespace.
- Style family: Exaggerated Minimalism, refined and statesmanlike (not loud).
- Modes: light only (premium airy white). Dark hero overlays for legibility.

## Color tokens
| Token | Hex | Use |
|---|---|---|
| `--color-white` | #FFFFFF | dominant base |
| `--color-tint` | #EAF5FB | pale section backgrounds |
| `--color-tint-deep` | #DCEEF8 | secondary pale panels |
| `--color-sky` | #4FA8D8 | accent: links, buttons, rules, highlights |
| `--color-sky-deep` | #2E82B0 | accent hover / darker text-on-white accent |
| `--color-ink` | #14171C | near-black display text |
| `--color-body` | #333A42 | body text |
| `--color-muted` | #6B7480 | secondary text, captions |
| `--color-border` | #E4EAF0 | hairline rules, card borders |
Sky blue is an ACCENT ONLY. The page must read airy white, never blue-heavy.

## Typography (Classic Elegant pairing)
- Display / headings: **Playfair Display** (400,500,600,700), letter-spacing tight on large sizes.
- Body / UI: **Inter** (300,400,500,600,700).
- Base 16px, body line-height 1.6, headings line-height ~1.1.
- Display scale uses clamp() for fluid editorial sizing.

## Motion (GSAP + Lenis, subtle tier)
- Scroll reveal: `opacity 0 -> 1, y 12 -> 0, 0.35s, power1.out`, ScrollTrigger start `top 88%`,
  `toggleActions: play none none reverse`.
- Card grids: stagger 0.07, max ~8 children, y 20.
- Hero: gentle intro fade/rise on load.
- Respect `prefers-reduced-motion` (disable transforms, keep content visible).
- Lenis smooth scroll, lerp ~0.08.

## Layout rhythm (spacious / density 3)
- Section vertical padding: clamp(5rem, 10vw, 9rem).
- Content max-width: 80rem (1280px) container; prose columns ~65ch.
- Generous gaps: 2rem mobile, 3-4rem desktop.
- Mobile-first breakpoints: 375 / 768 / 1024 / 1280 / 1536.

## Navbar
- Sticky, transparent over hero (white text), transitions to white bg + soft shadow +
  ink text after ~40px scroll (Alpine-driven).

## Pre-delivery checklist (from skill)
- [ ] SVG icons only, no emoji as icons
- [ ] cursor-pointer + 150-300ms hover transitions on interactives
- [ ] text contrast >= 4.5:1
- [ ] visible focus rings for keyboard nav
- [ ] prefers-reduced-motion respected
- [ ] responsive at 375 / 768 / 1024 / 1280 / 1536
- [ ] ZERO en dashes / em dashes in all copy
