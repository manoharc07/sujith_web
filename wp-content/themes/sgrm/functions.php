<?php
/**
 * Shri Ganesha Rice Mill — Theme Functions
 */

// ─── Theme Setup ─────────────────────────────────────────────────────────────

function sgrm_setup() {
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable featured images
    add_theme_support( 'post-thumbnails' );

    // Register primary navigation menu
    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'sgrm' ),
    ] );
}
add_action( 'after_setup_theme', 'sgrm_setup' );

// ─── Enqueue Scripts & Styles ────────────────────────────────────────────────

function sgrm_enqueue_assets() {

    // Google Fonts: Public Sans + Manrope
    wp_enqueue_style(
        'sgrm-google-fonts',
        'https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600;700;800&family=Manrope:wght@400;600&display=swap',
        [],
        null
    );

    // Material Symbols Outlined
    wp_enqueue_style(
        'sgrm-material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'sgrm-style',
        get_stylesheet_uri(),
        [ 'sgrm-google-fonts', 'sgrm-material-symbols' ],
        '1.0.0'
    );

    // Tailwind CSS CDN (with forms + container-queries plugins)
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com?plugins=forms,container-queries',
        [],
        null,
        false // load in <head> so config inline script follows immediately
    );

    // Inject the Tailwind config as an inline script right after the CDN tag
    $tailwind_config = sgrm_get_tailwind_config();
    wp_add_inline_script( 'tailwindcss', $tailwind_config );

    // Material Symbols font-variation-settings
    wp_add_inline_style( 'sgrm-style', '
        .material-symbols-outlined {
            font-variation-settings: \'FILL\' 1, \'wght\' 400, \'GRAD\' 0, \'opsz\' 24;
        }
    ' );
}
add_action( 'wp_enqueue_scripts', 'sgrm_enqueue_assets' );

// ─── Tailwind Config ─────────────────────────────────────────────────────────

/**
 * Returns the Tailwind config JS string to be injected inline.
 * Mirrors the tailwind.config object from the original static HTML files.
 */
function sgrm_get_tailwind_config() {
    return <<<'JS'
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "inverse-primary": "#a5d0b9",
                "tertiary-fixed-dim": "#f5b7b4",
                "surface-container-lowest": "#ffffff",
                "whatsapp-green": "#25D366",
                "surface-container-highest": "#e2e3e0",
                "on-tertiary-fixed-variant": "#673a39",
                "on-secondary-fixed-variant": "#623f18",
                "surface-dim": "#dadad7",
                "secondary-fixed-dim": "#f0bd8b",
                "inverse-surface": "#2f312f",
                "on-secondary-fixed": "#2c1600",
                "on-tertiary-container": "#d29895",
                "on-tertiary": "#ffffff",
                "secondary-container": "#ffca98",
                "surface-cream": "#FEFAF6",
                "surface-container-high": "#e8e8e5",
                "tertiary-fixed": "#ffdad8",
                "primary-fixed": "#c1ecd4",
                "inverse-on-surface": "#f0f1ee",
                "primary-fixed-dim": "#a5d0b9",
                "error-container": "#ffdad6",
                "on-primary": "#ffffff",
                "secondary-fixed": "#ffdcbd",
                "surface-container": "#eeeeeb",
                "on-tertiary-fixed": "#331111",
                "on-primary-fixed": "#002114",
                "on-background": "#1a1c1a",
                "error": "#ba1a1a",
                "secondary": "#7d562d",
                "surface-bright": "#f9faf6",
                "outline": "#717973",
                "surface": "#f9faf6",
                "primary": "#012d1d",
                "on-error-container": "#93000a",
                "surface-tint": "#3f6653",
                "on-surface-variant": "#414844",
                "surface-container-low": "#f3f4f1",
                "paddy-gold": "#E9C46A",
                "on-secondary-container": "#7a532a",
                "on-secondary": "#ffffff",
                "on-primary-fixed-variant": "#274e3d",
                "tertiary-container": "#5a302f",
                "on-primary-container": "#86af99",
                "rice-silk": "#F8F9FA",
                "surface-variant": "#e2e3e0",
                "tertiary": "#401b1b",
                "on-surface": "#1a1c1a",
                "deep-earth": "#2D2D2D",
                "primary-container": "#1b4332",
                "outline-variant": "#c1c8c2",
                "background": "#f9faf6",
                "on-error": "#ffffff"
            },
            borderRadius: {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            spacing: {
                "stack-md": "1.5rem",
                "gutter": "1.5rem",
                "container-max": "1200px",
                "stack-sm": "0.5rem",
                "stack-lg": "3rem",
                "section-padding": "5rem"
            },
            fontFamily: {
                "display-lg": ["Public Sans"],
                "label-sm": ["Manrope"],
                "body-lg": ["Manrope"],
                "headline-md": ["Public Sans"],
                "headline-lg-mobile": ["Public Sans"],
                "body-md": ["Manrope"],
                "headline-lg": ["Public Sans"]
            },
            fontSize: {
                "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                "label-sm": ["14px", { "lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "600" }],
                "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "600" }],
                "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                "headline-lg": ["32px", { "lineHeight": "1.2", "fontWeight": "600" }]
            }
        }
    }
};
JS;
}

// ─── Contact Form Validation ──────────────────────────────────────────────────

/**
 * Validates contact form submission data.
 *
 * @param array $data  Associative array of form fields (name, phone, email, message).
 * @return array       Associative array of field => error message. Empty = valid.
 */
function sgrm_validate_contact_form( array $data ) {
    $errors = [];

    if ( empty( trim( $data['name'] ?? '' ) ) ) {
        $errors['name'] = 'This field is required.';
    }

    if ( empty( trim( $data['phone'] ?? '' ) ) ) {
        $errors['phone'] = 'This field is required.';
    }

    if ( ! empty( $data['email'] ) && ! filter_var( $data['email'], FILTER_VALIDATE_EMAIL ) ) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if ( empty( trim( $data['message'] ?? '' ) ) ) {
        $errors['message'] = 'This field is required.';
    }

    return $errors;
}

// ─── ACF Field Registration (optional — only if ACF plugin is active) ─────────

if ( class_exists( 'ACF' ) ) {
    function sgrm_register_acf_fields() {
        // Home page fields
        acf_add_local_field_group( [
            'key'      => 'group_home',
            'title'    => 'Home Page',
            'fields'   => [
                [ 'key' => 'field_hero_headline',    'label' => 'Hero Headline',    'name' => 'hero_headline',    'type' => 'text' ],
                [ 'key' => 'field_hero_subheadline', 'label' => 'Hero Subheadline', 'name' => 'hero_subheadline', 'type' => 'textarea' ],
                [ 'key' => 'field_testimonial_quote','label' => 'Testimonial Quote','name' => 'testimonial_quote','type' => 'textarea' ],
                [ 'key' => 'field_testimonial_author','label'=> 'Testimonial Author','name'=> 'testimonial_author','type'=> 'text' ],
                [ 'key' => 'field_testimonial_location','label'=> 'Testimonial Location','name'=> 'testimonial_location','type'=> 'text' ],
            ],
            'location' => [ [ [ 'param' => 'page', 'operator' => '==', 'value' => get_option( 'page_on_front' ) ] ] ],
        ] );

        // Contact page fields
        acf_add_local_field_group( [
            'key'      => 'group_contact',
            'title'    => 'Contact Info',
            'fields'   => [
                [ 'key' => 'field_contact_phone',   'label' => 'Phone',   'name' => 'contact_phone',   'type' => 'text' ],
                [ 'key' => 'field_contact_email',   'label' => 'Email',   'name' => 'contact_email',   'type' => 'email' ],
                [ 'key' => 'field_contact_address', 'label' => 'Address', 'name' => 'contact_address', 'type' => 'text' ],
                [ 'key' => 'field_contact_hours',   'label' => 'Hours',   'name' => 'contact_hours',   'type' => 'text' ],
            ],
            'location' => [ [ [ 'param' => 'page', 'operator' => '==', 'value' => 'contact' ] ] ],
        ] );
    }
    add_action( 'acf/init', 'sgrm_register_acf_fields' );
}
