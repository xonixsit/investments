---
name: Ghaf Heritage Investment System
colors:
  surface: '#fbf9f4'
  surface-dim: '#dbdad5'
  surface-bright: '#fbf9f4'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f3ee'
  surface-container: '#f0eee9'
  surface-container-high: '#eae8e3'
  surface-container-highest: '#e4e2dd'
  on-surface: '#1b1c19'
  on-surface-variant: '#44474c'
  inverse-surface: '#30312e'
  inverse-on-surface: '#f2f1ec'
  outline: '#74777d'
  outline-variant: '#c4c6cd'
  surface-tint: '#4f6073'
  primary: '#041627'
  on-primary: '#ffffff'
  primary-container: '#1a2b3c'
  on-primary-container: '#8192a7'
  inverse-primary: '#b7c8de'
  secondary: '#775a19'
  on-secondary: '#ffffff'
  secondary-container: '#fed488'
  on-secondary-container: '#785a1a'
  tertiary: '#08190e'
  on-tertiary: '#ffffff'
  tertiary-container: '#1c2e21'
  on-tertiary-container: '#829685'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d2e4fb'
  primary-fixed-dim: '#b7c8de'
  on-primary-fixed: '#0b1d2d'
  on-primary-fixed-variant: '#38485a'
  secondary-fixed: '#ffdea5'
  secondary-fixed-dim: '#e9c176'
  on-secondary-fixed: '#261900'
  on-secondary-fixed-variant: '#5d4201'
  tertiary-fixed: '#d3e8d5'
  tertiary-fixed-dim: '#b7ccb9'
  on-tertiary-fixed: '#0e1f13'
  on-tertiary-fixed-variant: '#394b3d'
  background: '#fbf9f4'
  on-background: '#1b1c19'
  surface-variant: '#e4e2dd'
typography:
  headline-xl:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  caption:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 48px
---

## Brand & Style

The design system is anchored in the concept of "Deep Roots, Infinite Growth," drawing direct inspiration from the Ghaf tree—the national tree of the UAE. It targets high-net-worth investors and property seekers in the Dubai market, demanding an interface that balances desert heritage with cutting-edge financial stability.

The visual style is **Corporate Modern with Tactile Accents**. It utilizes expansive white space to denote luxury and clarity, while subtle Ghaf-inspired patterns (vein-like lines and organic nodes) provide a unique cultural narrative. The emotional goal is to evoke a sense of permanent stability, resilience, and premium exclusivity.

## Colors

The palette is divided into two primary pillars: **Stability** and **Growth**.

- **Navy Blue (#1A2B3C):** Used for primary navigation, headings, and high-authority surfaces. It represents the depth of financial expertise and structural stability.
- **Desert Gold (#C5A059):** Applied to high-intent actions, highlights, and premium signifiers. It should be used sparingly to maintain its value.
- **Ghaf Green (#4A5D4E):** A muted, sophisticated green used for progress indicators, success states, and growth-related data visualizations.
- **Warm Neutrals:** The background is a soft Cream (#F9F7F2) rather than pure white, providing a warmer, more welcoming "parchment" feel that reduces eye strain and feels more bespoke.

## Typography

This design system uses a dual-sans-serif approach to maximize authority and readability. **Montserrat** is utilized for headlines to provide a bold, geometric presence that feels architectural and modern. **Inter** is the functional workhorse for body copy and data, chosen for its exceptional legibility in financial contexts.

All labels and captions should utilize slightly increased letter spacing (0.05em) when set in uppercase to enhance the "luxury brand" feel. Headlines should use tighter tracking (-0.01em to -0.02em) to appear more cohesive on large displays.

## Layout & Spacing

The design system follows a **12-column fixed grid** for desktop and a **4-column fluid grid** for mobile. The spacing rhythm is based on an 8px base unit to ensure mathematical harmony across all components.

- **Desktop:** 1280px max-width container with 48px outside margins. 
- **Tablet:** 8-column grid with 32px margins.
- **Mobile:** 4-column grid with 16px margins.

Vertical rhythm is strictly maintained through multiples of 8px. For high-level sections (e.g., Hero to Featured Properties), use a generous 120px (15 units) vertical gap to reinforce the premium, "un-cluttered" aesthetic.

## Elevation & Depth

Hierarchy is established through **Ambient Shadows** and **Tonal Layering**. 

1.  **Base Layer:** The warm neutral background (#F9F7F2).
2.  **Mid Layer (Cards/Containers):** Pure white (#FFFFFF) surfaces with a very soft, diffused shadow (0px 4px 20px rgba(26, 43, 60, 0.05)). This subtle lift makes properties feel tangible without appearing "heavy."
3.  **High Layer (Modals/Popovers):** Deeper shadows with a slight navy tint (0px 12px 40px rgba(26, 43, 60, 0.12)) to draw immediate focus.

To lean into the Ghaf theme, use "Ghost Outlines" (1px solid #E5E1D8) for secondary containers instead of shadows, creating a flatter, more architectural depth.

## Shapes

The shape language is **Professional and Structured**. A `0.25rem` (4px) base radius is used for primary UI elements like buttons and input fields to maintain a crisp, sharp appearance that feels disciplined. 

Larger containers like property cards may use `rounded-lg` (8px) to soften the overall interface slightly. Avoid "pill" shapes for buttons; stick to rectangular forms with soft corners to preserve the institutional, trustworthy feel required for high-value investments.

## Components

### Buttons
- **Primary:** Solid Navy (#1A2B3C) with White text. High-contrast, authoritative.
- **Secondary:** Solid Gold (#C5A059) with White text. Used exclusively for primary "Invest" or "Contact" CTAs.
- **Ghost:** Navy outline (1px) with Navy text. Used for secondary navigation or filter resets.

### Input Fields
Inputs should feature a subtle "bottom-border only" look for a sophisticated, editorial feel, or a full-stroke box with a 1px #E5E1D8 border. On focus, the border transitions to Navy (#1A2B3C).

### Cards
Property cards are the core component. They feature a white background, the "Soft" elevation shadow, and a 4px Gold accent bar at the top or left edge for "Premium" listings. 

### Iconography
Icons must be thin-line (1.5pt stroke). Where possible, incorporate "root" or "branch" motifs—for example, using a leaf shape for a "Growth" indicator or a rooted line for "Stability" metrics.

### Featured Component: The Investment Tree
A custom data visualization component that uses an abstract Ghaf tree structure. The "Roots" represent historical stability (past data), and the "Branches" represent projected ROI (future growth).