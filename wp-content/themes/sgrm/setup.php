<?php
/**
 * SGRM Theme Setup Script
 *
 * Run this file ONCE via WP-CLI or by visiting it directly (then delete it).
 * It creates the five required WordPress pages with the correct slugs and
 * sets the static front page to "Home".
 *
 * Usage (recommended — WP-CLI):
 *   wp eval-file wp-content/themes/sgrm/setup.php
 *
 * Usage (browser — one-time only):
 *   1. Move this file to your WordPress root (next to wp-load.php), or
 *      add a temporary require_once to wp-config.php.
 *   2. Visit the URL once.
 *   3. DELETE this file immediately after running.
 *
 * Safe to run multiple times — uses get_page_by_path() to avoid duplicates.
 */

// Bootstrap WordPress if running standalone (not via WP-CLI eval-file).
if ( ! defined( 'ABSPATH' ) ) {
    // Adjust the path if this file is not in the theme directory.
    $wp_load = dirname( __FILE__ ) . '/../../../wp-load.php';
    if ( file_exists( $wp_load ) ) {
        require_once $wp_load;
    } else {
        die( 'Could not find wp-load.php. Run this script via WP-CLI instead.' );
    }
}

// Must be logged in as an administrator when running via browser.
if ( ! defined( 'WP_CLI' ) && ( ! function_exists( 'is_user_logged_in' ) || ! current_user_can( 'manage_options' ) ) ) {
    die( 'You must be logged in as an administrator to run this script.' );
}

// ─── Page definitions ─────────────────────────────────────────────────────────
// Each entry: [ title, slug, post_status ]
// The "Home" page has no page-{slug}.php template — WordPress uses front-page.php
// automatically when it is set as the static front page.

$pages = [
    [
        'title'  => 'Home',
        'slug'   => 'home',
        'status' => 'publish',
    ],
    [
        'title'  => 'About Us',
        'slug'   => 'about',
        'status' => 'publish',
    ],
    [
        'title'  => 'Products',
        'slug'   => 'products',
        'status' => 'publish',
    ],
    [
        'title'  => 'Infrastructure',
        'slug'   => 'infrastructure',
        'status' => 'publish',
    ],
    [
        'title'  => 'Contact',
        'slug'   => 'contact',
        'status' => 'publish',
    ],
];

$created = [];
$skipped = [];

foreach ( $pages as $page ) {
    $existing = get_page_by_path( $page['slug'], OBJECT, 'page' );

    if ( $existing ) {
        $skipped[] = $page['title'] . ' (ID: ' . $existing->ID . ', slug: /' . $page['slug'] . ')';
        continue;
    }

    $page_id = wp_insert_post( [
        'post_title'   => $page['title'],
        'post_name'    => $page['slug'],
        'post_status'  => $page['status'],
        'post_type'    => 'page',
        'post_content' => '',
        'post_author'  => 1,
    ], true );

    if ( is_wp_error( $page_id ) ) {
        echo 'ERROR creating "' . esc_html( $page['title'] ) . '": ' . $page_id->get_error_message() . PHP_EOL;
    } else {
        $created[] = $page['title'] . ' (ID: ' . $page_id . ', slug: /' . $page['slug'] . ')';
    }
}

// ─── Set static front page ────────────────────────────────────────────────────
// WordPress requires:
//   show_on_front  = 'page'
//   page_on_front  = ID of the "Home" page
//   page_for_posts = 0 (no blog posts page — this is a brochure site)

$home_page = get_page_by_path( 'home', OBJECT, 'page' );

if ( $home_page ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_page->ID );
    update_option( 'page_for_posts', 0 );
    $front_msg = 'Front page set to "Home" (ID: ' . $home_page->ID . ').';
} else {
    $front_msg = 'WARNING: Could not find the "Home" page to set as front page.';
}

// ─── Output results ───────────────────────────────────────────────────────────

$separator = str_repeat( '-', 60 );

echo $separator . PHP_EOL;
echo 'SGRM Setup Complete' . PHP_EOL;
echo $separator . PHP_EOL;

if ( $created ) {
    echo PHP_EOL . 'Pages created:' . PHP_EOL;
    foreach ( $created as $line ) {
        echo '  + ' . $line . PHP_EOL;
    }
}

if ( $skipped ) {
    echo PHP_EOL . 'Pages already exist (skipped):' . PHP_EOL;
    foreach ( $skipped as $line ) {
        echo '  = ' . $line . PHP_EOL;
    }
}

echo PHP_EOL . $front_msg . PHP_EOL;
echo PHP_EOL . 'Next steps:' . PHP_EOL;
echo '  1. Activate the "sgrm" theme: Appearance > Themes.' . PHP_EOL;
echo '  2. Confirm Reading Settings: Settings > Reading > "A static page" > Front page = Home.' . PHP_EOL;
echo '  3. Assign the Primary Navigation menu: Appearance > Menus (optional — theme uses hardcoded nav).' . PHP_EOL;
echo '  4. DELETE this setup.php file.' . PHP_EOL;
echo $separator . PHP_EOL;
