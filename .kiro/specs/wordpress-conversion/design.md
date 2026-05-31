# Design Document: WordPress Conversion

## Overview

Convert the Shri Ganesha Rice Mill static HTML site (5 pages, Tailwind CSS design system) into a custom WordPress theme. The approach is a **classic PHP theme** (no block editor / Full Site Editing) that directly ports the existing HTML templates into WordPress page templates, preserving the exact visual design and all functionality.

No page builder plugins are required. The theme is self-contained and uses WordPress's native template hierarchy.

## Architecture

```
wp-content/themes/sgrm/          ← Custom theme root
├── style.css                    ← Theme headers + base styles
├── functions.php                ← Theme setup, enqueue, menus, ACF
├── index.php                    ← Fallback template
├── front-page.php               ← Home page template
├── page-about.php               ← About Us template
├── page-products.php            ← Products template
├── page-infrastructure.php      ← Infrastructure template
├── page-contact.php             ← Contact template
├── template-parts/
│   ├── header.php               ← Shared nav bar
│   └── footer.php               ← Shared footer + WhatsApp FAB
└── screenshot.png               ← Theme preview (optional)
```

WordPress uses the **template hierarchy** to select templates. Pages with specific slugs (`about`, `products`, `infrastructure`, `contact`) will automatically use `page-{slug}.php` templates. The home page uses `front-page.php`.

## Components and Interfaces

### Theme Setup (`functions.php`)

Responsibilities:
- `add_theme_support('title-tag')` — lets WordPress manage `<title>`
- `add_theme_support('post-thumbnails')` — enables featured images
- `register_nav_menus(['primary' => 'Primary Navigation'])` — registers nav menu location
- `wp_enqueue_scripts` action — enqueues Tailwind CDN, Google Fonts, Material Symbols
- Inline script injection for the Tailwind config object (same config as existing HTML)
- ACF field group registration (if ACF active)

### Shared Header (`template-parts/header.php`)

Ports the `<header>` nav bar from the existing HTML. Key logic:
- Uses `is_front_page()`, `is_page('about')`, etc. to apply the active link style (bold + border-b-2)
- Desktop nav links + "Enquire Now" button
- Mobile hamburger button (static HTML; JS for toggle is optional/progressive enhancement)

### Shared Footer (`template-parts/footer.php`)

Ports the `<footer>` from the existing HTML plus the floating WhatsApp FAB. Static content (address, phone, legal links).

### Page Templates

Each page template follows this structure:
```php
<?php get_header(); ?>
<main>
  <!-- Page-specific HTML ported from the static file -->
</main>
<?php get_footer(); ?>
```

The `get_header()` / `get_footer()` calls include `template-parts/header.php` and `template-parts/footer.php` respectively via a custom `header.php` / `footer.php` wrapper at theme root.

### Contact Form (`page-contact.php`)

The contact form uses WordPress's native `$_POST` handling (no plugin required for MVP):
- Form posts to the same page (`action=""`)
- PHP at the top of the template processes the submission
- Validates required fields: `name`, `phone`, `message`
- On success: sets a `$success` flag, displays a success message
- On failure: sets `$errors` array, re-renders form with error messages and pre-filled values

For production, the form handler should use `wp_mail()` to send submissions to `hssujithsubramanyam@gmail.com`. A nonce (`wp_nonce_field`) is included for CSRF protection.

### Tailwind CSS Integration

The existing Tailwind config is injected as an inline `<script>` via `wp_add_inline_script()` in `functions.php`, immediately after the Tailwind CDN script is enqueued. This ensures the custom design system (colors, spacing, fonts, font sizes) is available globally.

## Data Models

Since this is a content-display site with no dynamic data beyond the contact form, the data model is minimal:

**Contact Form Submission**
```
name:         string (required, non-empty after trim)
phone:        string (required, non-empty after trim)
email:        string (optional, validated as email if provided)
enquiry_type: enum { 'wholesale', 'visit', 'general' } (defaults to 'wholesale')
message:      string (required, non-empty after trim)
```

**ACF Fields (optional, for CMS editing)**
- Home page: hero headline, hero subheadline, testimonial quote, testimonial author
- Products page: product name, product description, byproduct entries (repeater)
- Contact page: phone, email, address, hours

## Correctness Properties

*A property is a characteristic or behavior that should hold true across all valid executions of a system — essentially, a formal statement about what the system should do. Properties serve as the bridge between human-readable specifications and machine-verifiable correctness guarantees.*

### Property 1: Valid form submission always succeeds

*For any* contact form submission where `name`, `phone`, and `message` are all non-empty strings (after trimming whitespace), the form handler SHALL return a success state (no validation errors).

**Validates: Requirements 6.3**

### Property 2: Invalid form submission always fails validation

*For any* contact form submission where at least one of `name`, `phone`, or `message` is empty or whitespace-only, the form handler SHALL return at least one validation error and SHALL NOT send an email or display a success message.

**Validates: Requirements 6.4**

## Error Handling

- **Form submission errors**: Displayed inline above the form as a styled error banner. Individual field errors shown below each field.
- **Missing required fields**: PHP `trim()` + empty check. Error message: "This field is required."
- **Invalid email**: PHP `filter_var($email, FILTER_VALIDATE_EMAIL)` check. Error message: "Please enter a valid email address."
- **wp_mail failure**: If email sending fails, the success message is still shown to the user (form data is not lost). A fallback could log to a custom DB table, but is out of scope for MVP.
- **Template not found**: WordPress falls back to `index.php` which renders a minimal page with the header/footer.

## Testing Strategy

### Unit Tests (PHPUnit)

WordPress unit tests use the WP test suite bootstrapped via `wp-env` or a local install. Tests focus on the form handler logic which is the only non-trivial PHP logic.

- Test that `sgrm_validate_contact_form([])` returns errors for all three required fields
- Test that `sgrm_validate_contact_form(['name'=>'  '])` returns an error for name (whitespace-only)
- Test that `sgrm_validate_contact_form(['name'=>'Test','phone'=>'123','message'=>'Hello'])` returns no errors
- Test that an invalid email in the optional email field returns an email validation error

### Property-Based Tests (PHPUnit + data providers)

PHP does not have a mainstream property-based testing library equivalent to fast-check or Hypothesis, but we can approximate PBT using PHPUnit data providers with randomized inputs.

**Property 1: Valid form submission always succeeds**
- Generate random non-empty strings for `name`, `phone`, `message`
- Assert `sgrm_validate_contact_form($data)` returns an empty errors array
- Run 100+ iterations via data provider
- Tag: **Feature: wordpress-conversion, Property 1: Valid form submission always succeeds**

**Property 2: Invalid form submission always fails validation**
- Generate submissions with at least one required field empty/whitespace
- Assert `sgrm_validate_contact_form($data)` returns a non-empty errors array
- Run 100+ iterations covering all combinations of missing fields
- Tag: **Feature: wordpress-conversion, Property 2: Invalid form submission always fails validation**

### Manual / Integration Checks

Since most requirements are about HTML structure and visual rendering, the following should be verified manually or via browser-based tests (e.g., Playwright):

- All five pages load without PHP errors
- Navigation active state highlights the correct page
- WhatsApp links open the correct URL
- Contact form shows success message on valid submission
- Contact form shows errors on invalid submission
- Mobile hamburger menu button is present
- WhatsApp FAB is visible on mobile viewport
