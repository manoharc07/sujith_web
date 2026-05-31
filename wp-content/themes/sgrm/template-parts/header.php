<!DOCTYPE html>
<html class="light" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-surface-cream text-on-surface font-body-md antialiased min-h-screen flex flex-col' ); ?>>

<?php
// Helper: build nav link classes based on whether this link is active
function sgrm_nav_link_class( bool $is_active ): string {
    if ( $is_active ) {
        return 'text-primary font-bold border-b-2 border-primary pb-1 font-body-md text-body-md opacity-80 transition-opacity duration-150';
    }
    return 'text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md hover:bg-surface-container-low px-3 py-2 rounded';
}

$home_url           = home_url( '/' );
$about_url          = get_permalink( get_page_by_path( 'about' ) );
$products_url       = get_permalink( get_page_by_path( 'products' ) );
$infrastructure_url = get_permalink( get_page_by_path( 'infrastructure' ) );
$contact_url        = get_permalink( get_page_by_path( 'contact' ) );

$is_home           = is_front_page();
$is_about          = is_page( 'about' );
$is_products       = is_page( 'products' );
$is_infrastructure = is_page( 'infrastructure' );
$is_contact        = is_page( 'contact' );
?>

<header class="bg-surface-cream border-b border-outline-variant sticky top-0 z-50 w-full">
    <div class="flex justify-between items-center px-gutter py-4 w-full max-w-container-max mx-auto">

        <!-- Brand -->
        <a href="<?php echo esc_url( $home_url ); ?>"
           class="text-headline-md font-display-lg font-bold text-primary">
            Shri Ganesha Rice Mill
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex gap-6 items-center">
            <a href="<?php echo esc_url( $home_url ); ?>"
               class="<?php echo sgrm_nav_link_class( $is_home ); ?>">Home</a>

            <a href="<?php echo esc_url( $about_url ); ?>"
               class="<?php echo sgrm_nav_link_class( $is_about ); ?>">About Us</a>

            <a href="<?php echo esc_url( $products_url ); ?>"
               class="<?php echo sgrm_nav_link_class( $is_products ); ?>">Products</a>

            <a href="<?php echo esc_url( $infrastructure_url ); ?>"
               class="<?php echo sgrm_nav_link_class( $is_infrastructure ); ?>">Infrastructure</a>

            <a href="<?php echo esc_url( $contact_url ); ?>"
               class="<?php echo sgrm_nav_link_class( $is_contact ); ?>">Contact</a>
        </nav>

        <!-- Desktop CTA -->
        <div class="hidden md:flex items-center gap-4">
            <a href="<?php echo esc_url( $contact_url ); ?>"
               class="bg-primary text-on-primary font-label-sm text-label-sm py-2 px-6 rounded hover:bg-primary-container transition-colors">
                Enquire Now
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button id="sgrm-mobile-menu-btn"
                class="md:hidden text-primary p-2"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="sgrm-mobile-menu">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="sgrm-mobile-menu"
         class="hidden md:hidden flex-col gap-2 px-gutter pb-4 bg-surface-cream border-t border-outline-variant">
        <a href="<?php echo esc_url( $home_url ); ?>"
           class="block py-2 px-3 rounded font-body-md text-body-md <?php echo $is_home ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary'; ?>">Home</a>
        <a href="<?php echo esc_url( $about_url ); ?>"
           class="block py-2 px-3 rounded font-body-md text-body-md <?php echo $is_about ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary'; ?>">About Us</a>
        <a href="<?php echo esc_url( $products_url ); ?>"
           class="block py-2 px-3 rounded font-body-md text-body-md <?php echo $is_products ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary'; ?>">Products</a>
        <a href="<?php echo esc_url( $infrastructure_url ); ?>"
           class="block py-2 px-3 rounded font-body-md text-body-md <?php echo $is_infrastructure ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary'; ?>">Infrastructure</a>
        <a href="<?php echo esc_url( $contact_url ); ?>"
           class="block py-2 px-3 rounded font-body-md text-body-md <?php echo $is_contact ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary'; ?>">Contact</a>
        <a href="<?php echo esc_url( $contact_url ); ?>"
           class="mt-2 inline-block bg-primary text-on-primary font-label-sm text-label-sm py-2 px-6 rounded hover:bg-primary-container transition-colors">
            Enquire Now
        </a>
    </div>
</header>

<script>
(function() {
    var btn  = document.getElementById('sgrm-mobile-menu-btn');
    var menu = document.getElementById('sgrm-mobile-menu');
    if (!btn || !menu) return;
    btn.addEventListener('click', function() {
        var open = menu.classList.toggle('hidden');
        btn.setAttribute('aria-expanded', String(!open));
        menu.classList.toggle('flex', !open);
    });
})();
</script>
