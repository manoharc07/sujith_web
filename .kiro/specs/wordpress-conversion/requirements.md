# Requirements Document

## Introduction

Convert the existing 5-page static HTML website for Shri Ganesha Rice Mill into a fully functional WordPress site. The WordPress site must preserve all existing content, visual design (Tailwind CSS-based design system with custom color palette), and functionality while enabling easy content management through the WordPress admin panel.

The existing site consists of:
- `index.html` — Home page (hero, why choose us, testimonial)
- `about.html` — About Us page (heritage, values, story)
- `products.html` — Products page (small grain rice, byproducts)
- `infrastructure.html` — Infrastructure page (machinery, storage, logistics)
- `contact.html` — Contact page (form, map, contact details)

## Glossary

- **Theme**: The WordPress theme that controls the visual appearance and layout of the site
- **Custom Theme**: A bespoke WordPress theme built from scratch to replicate the existing HTML design
- **Page Template**: A PHP template file within the theme that renders a specific page's layout
- **ACF**: Advanced Custom Fields — a WordPress plugin for adding custom content fields to pages
- **Tailwind CSS**: The utility-first CSS framework used in the existing static site
- **Design System**: The custom color palette, typography, spacing, and component styles defined in the existing Tailwind config
- **Contact Form**: The enquiry form on the contact page that collects name, phone, email, enquiry type, and message
- **WhatsApp FAB**: The floating action button linking to WhatsApp, visible on mobile
- **Enquire Now CTA**: The primary call-to-action button in the navigation and hero section

## Requirements

### Requirement 1: WordPress Custom Theme Setup

**User Story:** As a developer, I want a custom WordPress theme that replicates the existing static site's design system, so that the converted site looks identical to the original.

#### Acceptance Criteria

1. THE Theme SHALL include a `style.css` with valid WordPress theme headers (Theme Name, Version, Description)
2. THE Theme SHALL enqueue Tailwind CSS (via CDN) and all Google Fonts used in the existing site (Public Sans, Manrope, Material Symbols Outlined)
3. THE Theme SHALL define the complete custom Tailwind configuration (all custom colors, spacing, font families, font sizes, border radii) matching the existing static site
4. THE Theme SHALL include a `functions.php` that registers navigation menus, enqueues scripts/styles, and adds theme support for post thumbnails and title tag
5. THE Theme SHALL include shared template parts: `header.php` (top navigation bar) and `footer.php` (footer with contact links and legal links)
6. WHEN the navigation is rendered, THE Theme SHALL highlight the active page link with the bold underline style used in the existing HTML

### Requirement 2: Home Page

**User Story:** As a site visitor, I want to see the home page with the hero section, "Why Choose Us" bento grid, and testimonial, so that I get an immediate impression of the business.

#### Acceptance Criteria

1. THE Home_Page SHALL render a hero section with the headline "Trusted Rice Milling Since 1973", subheadline, and three CTA buttons (Contact Us, View Products, WhatsApp Enquiry)
2. THE Home_Page SHALL render the "Why Choose Us" bento grid with five feature cards (50+ Years Experience, Trusted Local Business, Consistent Quality, Free Doorstep Pickup, Delivery in JP Nagar Mysore)
3. THE Home_Page SHALL render the testimonial section with the quote from Siddalingaswamy
4. WHEN a visitor clicks "Contact Us" or "Enquire Now", THE Home_Page SHALL navigate to the contact page
5. WHEN a visitor clicks "View Products", THE Home_Page SHALL navigate to the products page
6. WHEN a visitor clicks "WhatsApp Enquiry", THE Home_Page SHALL open `https://wa.me/919448741172` in a new tab

### Requirement 3: About Us Page

**User Story:** As a site visitor, I want to read about the mill's heritage and values, so that I can trust the business.

#### Acceptance Criteria

1. THE About_Page SHALL render a hero section with the headline "Our Heritage of Quality Milling" and the mill exterior image
2. THE About_Page SHALL render the "Pillars of Our Process" section with three cards: Rice Milling, Quality Processing, Reliable Supply
3. THE About_Page SHALL render the story section with the founding narrative and the pull-quote "Our promise is simple: what you see is what you get. Pure, unadulterated quality milled with integrity."

### Requirement 4: Products Page

**User Story:** As a wholesale buyer, I want to browse the available rice products and byproducts, so that I can make an enquiry.

#### Acceptance Criteria

1. THE Products_Page SHALL render the featured product section for "Premium Small Grain Rice" with polished/unpolished variant badges, usage details, and availability details
2. THE Products_Page SHALL render the byproducts bento grid with three cards: Rice Bran, Husk, Broken Rice — each with image, description, usage, and availability
3. THE Products_Page SHALL render the wholesale enquiry bar at the bottom with the phone number +91 9448741172
4. WHEN a visitor clicks any "Enquire Now" or "Enquire for Bulk" button, THE Products_Page SHALL navigate to the contact page

### Requirement 5: Infrastructure Page

**User Story:** As a potential wholesale client, I want to see the mill's infrastructure and capacity, so that I can assess operational capability.

#### Acceptance Criteria

1. THE Infrastructure_Page SHALL render a dark hero section with the headline "Precision Milling Operations" and the capacity badge "1.5 MT/Hour Capacity"
2. THE Infrastructure_Page SHALL render the facility bento grid with four image cards: Advanced Milling Machinery (large, col-span-8), Paddy Cleaning (col-span-4), Climate-Controlled Storage (col-span-6), Efficient Logistics (col-span-6)

### Requirement 6: Contact Page

**User Story:** As a potential customer, I want to contact the mill via form, phone, or WhatsApp, so that I can make an enquiry.

#### Acceptance Criteria

1. THE Contact_Page SHALL render three contact info cards: Phone (+91 9448741172 with WhatsApp link), Email (hssujithsubramanyam@gmail.com), Location (Near Hullahalli, Karnataka, hours: All days 9:00 AM to 6:00 PM)
2. THE Contact_Page SHALL render an enquiry form with fields: Full Name (required), Phone Number (required), Email Address (optional), Enquiry Type (select: Wholesale Orders, Mill Visit, General Enquiry), Message (required)
3. WHEN a visitor submits the contact form with all required fields filled, THE Contact_Form SHALL process the submission and display a success message
4. IF a visitor submits the contact form with required fields empty, THEN THE Contact_Form SHALL prevent submission and display validation errors
5. THE Contact_Page SHALL render a Google Maps location image/embed linking to `https://maps.app.goo.gl/9WMA1WNApcs2uPbX6`
6. WHEN a visitor clicks the WhatsApp link on the contact page, THE Contact_Page SHALL open `https://wa.me/919448741172` in a new tab

### Requirement 7: Global Navigation and Footer

**User Story:** As a site visitor, I want consistent navigation and footer across all pages, so that I can move between pages easily.

#### Acceptance Criteria

1. THE Navigation SHALL be sticky (fixed to top) and display the site name "Shri Ganesha Rice Mill" and links to all five pages
2. THE Navigation SHALL include an "Enquire Now" button on desktop that links to the contact page
3. THE Footer SHALL display the site name, copyright notice, contact details (address, phone), and legal links (Privacy Policy, Terms of Service)
4. THE WhatsApp_FAB SHALL be visible on mobile as a fixed floating button linking to `https://wa.me/919448741172`
5. WHILE on mobile, THE Navigation SHALL show a hamburger menu icon instead of the full nav links

### Requirement 8: Content Management

**User Story:** As a site owner, I want to update page content through the WordPress admin panel, so that I can maintain the site without editing code.

#### Acceptance Criteria

1. THE WordPress_Admin SHALL allow the site owner to edit page content (text, images) through the standard WordPress page editor or Gutenberg blocks
2. THE Theme SHALL register five WordPress pages corresponding to the five site pages: Home, About Us, Products, Infrastructure, Contact
3. WHERE Advanced Custom Fields plugin is available, THE Theme SHALL use ACF fields for structured content (product details, testimonials, contact info) to simplify editing
