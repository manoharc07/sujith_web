# Implementation Plan: WordPress Conversion

## Overview

Build a custom WordPress theme (`sgrm`) that ports the existing 5-page static HTML site for Shri Ganesha Rice Mill into WordPress page templates, preserving the exact Tailwind-based design system and all functionality.

## Tasks

- [x] 1. Scaffold the custom theme directory and core files
  - Create `wp-content/themes/sgrm/` directory structure
  - Create `style.css` with valid WordPress theme headers (Theme Name: Shri Ganesha Rice Mill, Version: 1.0.0, Description, Author)
  - Create `index.php` as a minimal fallback template that calls `get_header()` and `get_footer()`
  - Create empty placeholder files: `front-page.php`, `page-about.php`, `page-products.php`, `page-infrastructure.php`, `page-contact.php`
  - Create `template-parts/` directory with empty `header.php` and `footer.php`
  - _Requirements: 1.1, 1.5_

- [x] 2. Implement `functions.php` — theme setup, asset enqueuing, and Tailwind config
  - [x] 2.1 Write `functions.php` with theme support declarations and nav menu registration
    - `add_theme_support('title-tag')`, `add_theme_support('post-thumbnails')`
    - `register_nav_menus(['primary' => 'Primary Navigation'])`
    - _Requirements: 1.4_
  - [x] 2.2 Enqueue Tailwind CDN, Google Fonts (Public Sans, Manrope), and Material Symbols Outlined via `wp_enqueue_scripts`
    - Use `wp_enqueue_style()` and `wp_enqueue_script()` with correct handles
    - _Requirements: 1.2_
  - [x] 2.3 Inject the complete Tailwind config object as an inline script using `wp_add_inline_script()`
    - Copy the full tailwind.config object from the existing HTML (all custom colors, spacing, fontFamily, fontSize, borderRadius)
    - _Requirements: 1.3_

- [x] 3. Implement shared `template-parts/header.php` — navigation bar
  - Port the `<header>` HTML from the existing pages into `template-parts/header.php`
  - Add PHP conditional logic using `is_front_page()`, `is_page('about')`, `is_page('products')`, `is_page('infrastructure')`, `is_page('contact')` to apply the active link style (bold + `border-b-2 border-primary`)
  - Include the `<!DOCTYPE html>`, `<html>`, `<head>` (with `wp_head()`), and `<body>` opening tags
  - _Requirements: 1.5, 1.6, 7.1, 7.2, 7.5_

- [x] 4. Implement shared `template-parts/footer.php` — footer and WhatsApp FAB
  - Port the `<footer>` HTML from the existing pages into `template-parts/footer.php`
  - Include the floating WhatsApp FAB `<a>` element linking to `https://wa.me/919448741172`
  - Include `wp_footer()` call and closing `</body></html>` tags
  - _Requirements: 1.5, 7.3, 7.4_

- [x] 5. Create theme root `header.php` and `footer.php` wrappers
  - `header.php`: calls `get_template_part('template-parts/header')`
  - `footer.php`: calls `get_template_part('template-parts/footer')`
  - These allow `get_header()` / `get_footer()` to work correctly in page templates
  - _Requirements: 1.5_

- [x] 6. Implement `front-page.php` — Home page
  - [x] 6.1 Port the hero section from `index.html` (headline, subheadline, three CTA buttons, decorative right panel)
    - "Contact Us" button links to `<?php echo get_permalink(get_page_by_path('contact')); ?>`
    - "View Products" button links to the products page
    - "WhatsApp Enquiry" button links to `https://wa.me/919448741172` with `target="_blank"`
    - _Requirements: 2.1, 2.4, 2.5, 2.6_
  - [x] 6.2 Port the "Why Choose Us" bento grid section (five feature cards)
    - _Requirements: 2.2_
  - [x] 6.3 Port the testimonial section (quote from Siddalingaswamy)
    - _Requirements: 2.3_

- [x] 7. Implement `page-about.php` — About Us page
  - Port all three sections from `about.html`: hero, Pillars of Our Process cards, story section with pull-quote
  - _Requirements: 3.1, 3.2, 3.3_

- [x] 8. Implement `page-products.php` — Products page
  - [x] 8.1 Port the hero section and featured product section (Small Grain Rice with variant badges, usage, availability)
    - "Enquire Now" button links to the contact page
    - _Requirements: 4.1, 4.4_
  - [x] 8.2 Port the byproducts bento grid (Rice Bran, Husk, Broken Rice cards)
    - Each "Enquire for Bulk" button links to the contact page
    - _Requirements: 4.2, 4.4_
  - [x] 8.3 Port the wholesale enquiry bar with phone number
    - _Requirements: 4.3_

- [x] 9. Implement `page-infrastructure.php` — Infrastructure page
  - Port the dark hero section with capacity badge and the facility bento grid (four image cards with correct col-span values)
  - _Requirements: 5.1, 5.2_

- [x] 10. Implement `page-contact.php` — Contact page with form handler
  - [x] 10.1 Write the PHP form validation function `sgrm_validate_contact_form($data)` at the top of the template
    - Validates `name`, `phone`, `message` are non-empty after `trim()`
    - Validates `email` with `filter_var()` if provided
    - Returns an associative array of field errors (empty array = valid)
    - _Requirements: 6.3, 6.4_
  - [x] 10.2 Write the form submission handler
    - Check `$_SERVER['REQUEST_METHOD'] === 'POST'` and verify nonce with `wp_verify_nonce()`
    - Call `sgrm_validate_contact_form($_POST)`
    - On valid: call `wp_mail()` to send to `hssujithsubramanyam@gmail.com`, set `$success = true`
    - On invalid: set `$errors` array for display
    - _Requirements: 6.3, 6.4_
  - [x] 10.3 Port the contact info cards (Phone, Email, Location) and the Google Maps image/link
    - WhatsApp link opens `https://wa.me/919448741172` with `target="_blank"`
    - _Requirements: 6.1, 6.5, 6.6_
  - [x] 10.4 Port the enquiry form HTML with nonce field, error display, and success message
    - Pre-fill field values from `$_POST` on validation failure
    - Show success banner when `$success === true`
    - _Requirements: 6.2, 6.3, 6.4_

- [ ]* 10.5 Write PHPUnit tests for `sgrm_validate_contact_form()`
  - Unit tests: empty submission, whitespace-only name, valid submission, invalid email
  - **Property 1: Valid form submission always succeeds** — data provider with 100 random valid inputs
  - **Property 2: Invalid form submission always fails validation** — data provider with 100 random invalid inputs (at least one required field empty)
  - **Validates: Requirements 6.3, 6.4**

- [ ] 11. Checkpoint — Verify all five pages render correctly
  - Ensure all tests pass, ask the user if questions arise.
  - Manually verify: pages load without PHP errors, nav active states work, WhatsApp links are correct, contact form submits and validates

- [x] 12. WordPress page setup and final wiring
  - [x] 12.1 Create a `setup.php` or document the WordPress admin steps to create the five pages with correct slugs (`/`, `about`, `products`, `infrastructure`, `contact`) and set the front page to "Home"
    - _Requirements: 8.2_
  - [ ]* 12.2 Add ACF field group registration in `functions.php` for structured content fields (hero headline, testimonial, product details)
    - Wrap in `if (class_exists('ACF'))` check so the theme works without ACF installed
    - _Requirements: 8.3_

- [ ] 13. Final checkpoint — Ensure all tests pass
  - Ensure all tests pass, ask the user if questions arise.

## Notes

- Tasks marked with `*` are optional and can be skipped for a faster MVP
- All page templates use `get_header()` / `get_footer()` which pull from the shared template parts
- The Tailwind CDN approach (same as the existing static site) means no build step is required
- Images in the templates use the same external URLs from the existing HTML — replace with WordPress media library uploads when real photos are available
- The contact form uses native PHP + `wp_mail()` — no Contact Form 7 or other plugin needed
