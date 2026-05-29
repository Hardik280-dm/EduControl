---
name: Academic Precision
colors:
  surface: '#f9f9ff'
  surface-dim: '#d3daea'
  surface-bright: '#f9f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f0f3ff'
  surface-container: '#e7eefe'
  surface-container-high: '#e2e8f8'
  surface-container-highest: '#dce2f3'
  on-surface: '#151c27'
  on-surface-variant: '#434654'
  inverse-surface: '#2a313d'
  inverse-on-surface: '#ebf1ff'
  outline: '#737686'
  outline-variant: '#c3c5d7'
  surface-tint: '#1353d8'
  primary: '#003fb1'
  on-primary: '#ffffff'
  primary-container: '#1a56db'
  on-primary-container: '#d4dcff'
  inverse-primary: '#b5c4ff'
  secondary: '#8126d1'
  on-secondary: '#ffffff'
  secondary-container: '#9b47ec'
  on-secondary-container: '#fffbff'
  tertiary: '#00544c'
  on-tertiary: '#ffffff'
  tertiary-container: '#006e65'
  on-tertiary-container: '#84f0e2'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dbe1ff'
  primary-fixed-dim: '#b5c4ff'
  on-primary-fixed: '#00174d'
  on-primary-fixed-variant: '#003dab'
  secondary-fixed: '#f0dbff'
  secondary-fixed-dim: '#ddb8ff'
  on-secondary-fixed: '#2c0051'
  on-secondary-fixed-variant: '#6800b4'
  tertiary-fixed: '#89f5e7'
  tertiary-fixed-dim: '#6bd8cb'
  on-tertiary-fixed: '#00201d'
  on-tertiary-fixed-variant: '#005049'
  background: '#f9f9ff'
  on-background: '#151c27'
  surface-variant: '#dce2f3'
typography:
  h1:
    fontFamily: Public Sans
    fontSize: 36px
    fontWeight: '700'
    lineHeight: '1.2'
  h2:
    fontFamily: Public Sans
    fontSize: 30px
    fontWeight: '600'
    lineHeight: '1.3'
  h3:
    fontFamily: Public Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: '1'
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1'
    letterSpacing: 0.05em
  tabular-nums:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1'
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 4px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 48px
  gutter: 20px
  margin-edge: 32px
---

## Brand & Style

The brand personality for this design system is authoritative yet accessible. It is designed to facilitate the high-stakes management of academic data while reducing the cognitive load on administrators, faculty, and students. The emotional response should be one of "controlled efficiency"—users should feel that the system is powerful enough to handle complex tasks but intuitive enough to navigate without specialized training.

The design style follows a **Corporate / Modern** aesthetic with elements of **Minimalism**. It prioritizes clarity and functional density over decorative flair. The interface uses high-quality whitespace to separate complex data modules and relies on a rigid structural hierarchy to guide the user's eye through dense information environments.

## Colors

This design system utilizes a palette rooted in "Trust Blue" to convey institutional stability. The primary blue is used for critical actions and navigational anchors. Neutral greys manage the background architecture and secondary information tiers, ensuring that the interface feels professional and "low-noise."

- **Primary (#1A56DB):** Used for primary buttons, active states, and brand-identifying landmarks.
- **Secondary (#7E22CE):** Used sparingly for specialized academic functions, such as "Honors" tracking or faculty-specific portals.
- **Tertiary (#0D9488):** Reserved for positive indicators like "Paid" status, "Graduated," or "Success" notifications.
- **Surface Colors:** Uses a range of cool greys (from #F9FAFB to #111827) to create distinct content zones without relying on heavy borders.

## Typography

The typography strategy focuses on legibility in data-dense environments. **Public Sans** is used for headings to provide a clean, institutional feel that remains friendly. **Inter** is the workhorse for body text and data, chosen for its excellent readability and specialized numerical features.

For tables and financial data, always enable `tabular-nums` to ensure columns of figures align perfectly. Headlines should maintain a tight line height to keep page headers compact, while body text uses a generous 1.5-1.6x line height to prevent "wall of text" fatigue during long reading sessions or grading.

## Layout & Spacing

This design system employs a **Fluid Grid** with fixed maximum widths for specific content types (e.g., student profiles). A 12-column system is used for dashboard layouts, while a specialized 8-column layout is used for deep-level configuration screens.

The spacing rhythm is based on a **4px baseline grid**. Use `md` (16px) for standard padding within cards and `lg` (24px) for margins between major layout sections. For data tables, a "Compact" mode using `sm` (8px) vertical padding is recommended to maximize information density without sacrificing horizontal scanability.

## Elevation & Depth

Visual hierarchy is established primarily through **Tonal Layers** and **Low-contrast outlines**. 

- **Level 0 (Background):** #F3F4F6 (Light Grey) – used for the main application canvas.
- **Level 1 (Cards/Surface):** #FFFFFF (White) – used for the primary content containers. These feature a 1px solid border in #E5E7EB.
- **Level 2 (Interactive/Floating):** Uses a soft, ambient shadow (0px 4px 6px -1px rgba(0, 0, 0, 0.1)) to indicate elements that are draggable or temporary, such as dropdown menus and modals.

Avoid heavy drop shadows or vibrant blurs. The goal is to make the interface feel flat and stable, with depth used only to indicate functional priority or temporary state changes.

## Shapes

The shape language is **Soft**, utilizing a 0.25rem (4px) base radius. This provides a professional, geometric look that feels slightly more modern and "human" than sharp 0px corners, without moving into the overly casual territory of highly rounded or pill-shaped systems.

Buttons and input fields should strictly adhere to the 4px radius. Large containers, such as dashboard cards, may use the `rounded-lg` (8px) variant to create a softer visual framing for complex data tables.

## Components

### Buttons
- **Primary:** Solid #1A56DB with white text. 4px radius. 
- **Secondary:** White background with #D1D5DB border and #374151 text.
- **Ghost:** No background/border, blue text. Used for "Cancel" or low-priority actions.

### Input Fields
- Inputs should have a 1px border (#D1D5DB) and a subtle 14px label placed 8px above the field. 
- Active state uses a 2px #1A56DB outer ring with 0% offset.

### Data Tables
- Use alternating row stripes (Zebra striping) in #F9FAFB for tables exceeding 10 rows.
- Header cells use `label-sm` typography with #6B7280 text and a bottom border.

### Status Chips
- Use "Subtle Fill" style: A background with 10% opacity of the status color and 100% opacity text of the same color (e.g., Success: Green background 10%, Green text 100%).

### Cards
- Standard containers for modules. Must include a header section with a bottom divider if the card contains a list or table.

### Contextual Components
- **Progress Steppers:** Used for multi-step student registration or course creation.
- **Data Badges:** Small circular indicators for "In-Progress" assignments or "Unread" notifications.