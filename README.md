# Kafe Lema — Responsive Product Landing Page


**Mini Project:** MP04 – Responsive Product Landing Page

---

## 1. Introduction

A **product landing page** is a single webpage created to introduce a brand,
product, or service and encourage a specific action from visitors, such as
ordering, visiting, or learning more. Unlike a full business website, a
landing page focuses on one main goal and presents the most important
information in a clear and persuasive way.

For businesses, landing pages are important because they are often the
first impression a customer gets. A well-designed landing page can quickly
communicate what the business offers, why it stands out, and why a customer
should choose it. This is especially useful for cafés, restaurants, and
small businesses that want to attract more visitors and build trust.

**Purpose of this project:** The purpose of this project is to design and
develop a modern product landing page using Laravel, Blade Components, and
Tailwind CSS. The project emphasizes modern UI/UX principles and focuses on
building a clean, responsive, and professional interface that feels refined,
usable, and aligned with current design trends.

This activity is applied to **Kafe Lema**, a mountain-view café known for
premium coffee, freshly baked pastries, signature drinks, and a warm,
eco-conscious community atmosphere. The landing page highlights the café’s
identity, values, and customer experience while demonstrating strong
component-based development, responsive design, and user-centered interface
architecture—skills highly valued in the software industry.

## 2. Objectives

By completing this project, the following learning objectives were achieved:

- Built a fully responsive interface using Tailwind CSS utility classes.
- Understood and applied component-based frontend architecture in Laravel.
- Created seven reusable Blade Components (`navbar`, `hero`, `feature-card`,
  `pricing-card`, `testimonial-card`, `button`, `footer`), plus an additional
  house-rules/community section as encouraged by the brief.
- Applied responsive layouts using CSS Grid and Flexbox across desktop,
  tablet, and mobile breakpoints.
- Translated a real business's existing brand voice, photography, and
  mission statement into a landing page, rather than starting from a
  generic template.

## 3. Responsive Web Design

- **Mobile-First Design:** Base utility classes target small screens first;
  `sm:`, `lg:` breakpoints progressively add multi-column layouts as the
  viewport grows.
- **Responsive Breakpoints:** Tailwind's default breakpoints (`sm`, `md`,
  `lg`) switch the navbar between a hamburger menu (mobile) and a full
  horizontal menu (desktop), and reflow the hero, showcase, and pricing
  grids.
- **Flexbox:** Used for the navbar, button groups, and the CTA section.
- **CSS Grid:** Used for the features grid, the real-photo showcase grid,
  pricing grid, and testimonials grid.
- **User Experience (UX):** Sticky navbar, one highlighted membership tier
  to guide decision-making, and real photography (not generic stock) so the
  page reads as this specific café rather than a template.

## 4. Tailwind CSS

- **Utility-First CSS:** Styling is composed directly in markup instead of
  writing separate CSS classes per component.
- **Advantages:** Faster iteration, no unused CSS bloat, consistent spacing
  and color scales across every component.
- **Responsive Utility Classes:** e.g. `hidden md:flex` toggles the desktop
  nav; `sm:grid-cols-2 lg:grid-cols-3` reflows the features and photo grids.
- **Component Styling:** Tailwind v4's `@theme` block (in
  `resources/css/app.css`) defines the brand's design tokens —
  `--color-ink`, `--color-stone`, `--color-coffee`, `--color-amber`,
  `--color-olive`, `--font-display`, `--font-body` — pulled from Kafe
  Lema's actual logo colors, so every component shares one palette.

## 5. Blade Components

**What are Blade Components?** Reusable, self-contained pieces of markup
(`resources/views/components/*.blade.php`) that accept props and render
consistently wherever they're used.

**Why reusable components improve maintainability:** The pricing card
markup is written once and called three times with different props
(`x-pricing-card`); a future style change only needs to happen in one file.

**Components built for this project:**

| Component | Purpose |
|---|---|
| `x-navbar` | Sticky header with real Kafe Lema logo, desktop menu, mobile hamburger menu |
| `x-hero` | Tagline, headline, welcome copy, CTA buttons, real deck-view photo |
| `x-feature-card` | Icon + title + description, reused 6 times |
| `x-pricing-card` | Plan name, price, feature list, configurable CTA label, reused 3 times |
| `x-testimonial-card` | Customer quote, name, role, avatar initials, reused 3 times |
| `x-button` | Shared button styles (`primary`, `secondary`, `accent` variants) |
| `x-footer` | Logo, brand tagline, quick links, social icons, contact placeholders |

## 6. User Interface Design

- **Color Palette:** Warm cream background (`#F8F5EE`), deep coffee-brown
  ink (`#2A1F1A`), muted amber accent (`#B98549`) drawn from the Kafe Lema
  logo's coffee-cup gradient, and a forest green (`#3F5D44`) used for
  eco/sustainability cues.
- **Typography:** `Playfair Display` (serif) for headlines, echoing the
  logo's classic serif wordmark; `Work Sans` (sans-serif) for body copy so
  paragraphs stay easy to read at small sizes.
- **Iconography:** Simple line-drawn SVG icons per feature, one stroke
  weight throughout for consistency.
- **Button Styles:** Three variants (`primary`, `secondary`, `accent`) so
  the primary action per section always stands out.
- **Card Design:** Consistent `rounded-2xl` corners, hairline borders, and
  a single hover shadow across feature, pricing, and testimonial cards.
- **Layout Consistency:** Shared `max-w-6xl` content width and left-aligned
  section headers throughout.
- **Real photography:** The hero, product showcase, and footer all use
  Kafe Lema's own photos (deck view, exterior, interior, bakery case)
  instead of stock imagery or placeholder blocks, kept in
  `public/images/kafe-lema/`.

## 7. Folder Structure

- `public/images/kafe-lema` — the café's own photography used across the page.
- `resources/views/layouts` — shared `<head>`, fonts, Tailwind/Vite includes.
- `resources/views/components` — self-contained, reusable UI pieces.
- `resources/views/pages` — full pages built by composing components.
- `screenshots` — visual evidence of the responsive design across devices.
- `documentation` — before/after design evolution images.

> **Note:** This repo contains the Laravel-specific files (`resources/`,
> `public/images/`, `routes/web.php`, `vite.config.js`, `package.json`).
> Drop them into a fresh `laravel new week05-product-landing-page` project
> (or your existing Laravel install) to get the full `app/`, `bootstrap/`,
> etc. scaffolding, then run `npm install && npm run dev` alongside
> `php artisan serve`.

## 8. Screenshots

- [x] Desktop View — [`desktop-layout.png`](screenshots/desktop-layout.png)

- [x] Tablet View — [`tablet-layout.png`](screenshots/tablet-layout.png)

- [x] Mobile View — [`mobile-layout.png`](screenshots/mobile-layout.png)

- [x] Navigation Bar (open + mobile menu open) — [`navigation.png`](screenshots/navigation.png)

- [x] Hero Section — [`hero-section.png`](screenshots/hero-section.png)

- [x] Features Section — [`features-section.png`](screenshots/features-section.png)

- [x] Pricing Section — [`pricing-cards.png`](screenshots/pricing-cards.png)

- [x] Testimonials — [`testimonials.png`](screenshots/testimonials.png)

- [x] Footer — [`footer.png`](screenshots/footer.png)

- [x] Blade Components folder (VS Code) — [`blade-components-structure.png`](screenshots/blade-components-structure.png)



