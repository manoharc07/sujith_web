<?php
/**
 * Home page template (front-page.php)
 */
get_header();

$contact_url        = get_permalink( get_page_by_path( 'contact' ) );
$products_url       = get_permalink( get_page_by_path( 'products' ) );
$whatsapp_url       = 'https://wa.me/919448741172?text=Hello%2C%20I\'m%20interested%20in%20rice%20supply%20from%20Shri%20Ganesha%20Rice%20Mill.%20Please%20share%20details.';
?>

<main class="flex-grow">

    <!-- ── Hero Section ─────────────────────────────────────────────────── -->
    <section class="relative min-h-[819px] flex items-center justify-center py-section-padding px-gutter overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuhDqdaA64uHUhTJRUTjUbU-14P2XhwZg68hzQrB0be2Sh90UpMAd5yr3jHsxJQrLYvezxgfvRYsJOgrrgcwV3lAg4oSqMtTUVrkQeN1qWjZcekR158Mlz6PtHJDkpkoi1dEWOUUP2raLbCRQ0_lwQmyQASeN4Q3OJWXLIVnKeYHcK3lHgQ8-GTLxFdEWsvn0CIGj8RLO5wenQJuPVMV1ZQ4Ok-dX6jf_834OhUnKPktdt3w6NPO6edSgMAbSoTwTTsXRHPWXPYJI"
                 alt="Premium polished white rice grains"
                 class="w-full h-full object-cover object-center opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-r from-surface-cream/90 to-surface-cream/40 mix-blend-multiply"></div>
        </div>

        <div class="relative z-10 w-full max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

            <!-- Left: Content -->
            <div class="md:col-span-8 lg:col-span-7 flex flex-col gap-6">
                <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-paddy-gold/30 px-4 py-1.5 rounded-full w-fit">
                    <span class="w-2 h-2 rounded-full bg-paddy-gold"></span>
                    <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider">Established 1973</span>
                </div>

                <h1 class="font-display-lg text-display-lg text-primary text-4xl md:text-5xl lg:text-6xl">
                    Trusted Rice Milling Since 1973
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    Supplying quality rice with decades of experience, traditional values, and reliable milling operations from Karnataka.
                </p>

                <div class="flex flex-wrap gap-4 mt-4">
                    <a href="<?php echo esc_url( $contact_url ); ?>"
                       class="bg-primary text-on-primary font-label-sm text-label-sm py-3 px-8 rounded hover:bg-primary-container transition-colors shadow-[0_10px_20px_rgba(0,0,0,0.1)]">
                        Contact Us
                    </a>
                    <a href="<?php echo esc_url( $products_url ); ?>"
                       class="bg-transparent border-2 border-secondary text-secondary font-label-sm text-label-sm py-3 px-8 rounded hover:bg-secondary hover:text-on-secondary transition-colors">
                        View Products
                    </a>
                    <a href="<?php echo esc_url( $whatsapp_url ); ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="bg-whatsapp-green text-white font-label-sm text-label-sm py-3 px-6 rounded hover:bg-green-600 transition-colors flex items-center gap-2 shadow-[0_10px_20px_rgba(37,211,102,0.2)]">
                        <span class="material-symbols-outlined">chat</span>
                        WhatsApp Enquiry
                    </a>
                </div>
            </div>

            <!-- Right: Decorative capacity card -->
            <div class="hidden md:block md:col-span-4 lg:col-span-5 relative h-full min-h-[400px]">
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-full h-[110%] bg-white rounded-l-[3rem] shadow-[0_20px_40px_rgba(0,0,0,0.05)] border-l border-t border-b border-outline-variant/30 overflow-hidden">
                    <div class="absolute inset-0 p-8 flex flex-col justify-between">
                        <div class="flex justify-end">
                            <span class="material-symbols-outlined text-paddy-gold text-5xl">agriculture</span>
                        </div>
                        <div>
                            <p class="font-headline-md text-headline-md text-primary mb-2">1.5 MT/Hour</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">Modern Milling Capacity</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ── Why Choose Us ────────────────────────────────────────────────── -->
    <section class="py-section-padding px-gutter bg-surface-bright relative">
        <div class="max-w-container-max mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Why Choose Us</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                    Decades of commitment to delivering pristine quality straight from the paddy to your plate.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[200px]">

                <!-- 50+ Years Experience (wide) -->
                <div class="md:col-span-2 lg:col-span-2 row-span-1 bg-white rounded-xl p-8 flex flex-col justify-between border border-outline-variant/20 hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)] transition-shadow">
                    <span class="material-symbols-outlined text-paddy-gold text-4xl mb-4">history_edu</span>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">50+ Years Experience</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Three generations of family expertise in sourcing and milling.</p>
                    </div>
                </div>

                <!-- Trusted Local Business -->
                <div class="md:col-span-1 lg:col-span-1 row-span-1 bg-white rounded-xl p-8 flex flex-col justify-between border border-outline-variant/20 hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)] transition-shadow">
                    <span class="material-symbols-outlined text-paddy-gold text-4xl mb-4">handshake</span>
                    <div>
                        <h3 class="font-headline-md text-xl font-semibold text-primary mb-2">Trusted Local Business</h3>
                    </div>
                </div>

                <!-- Consistent Quality -->
                <div class="md:col-span-1 lg:col-span-1 row-span-1 bg-white rounded-xl p-8 flex flex-col justify-between border border-outline-variant/20 hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)] transition-shadow">
                    <span class="material-symbols-outlined text-paddy-gold text-4xl mb-4">verified</span>
                    <div>
                        <h3 class="font-headline-md text-xl font-semibold text-primary mb-2">Consistent Quality</h3>
                    </div>
                </div>

                <!-- Free Doorstep Pickup (wide) -->
                <div class="md:col-span-2 lg:col-span-2 row-span-1 bg-surface-cream rounded-xl p-8 flex items-center gap-6 border border-paddy-gold/20 hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)] transition-shadow">
                    <div class="bg-white p-4 rounded-full shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-4xl">local_shipping</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Free Doorstep Pickup</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Convenient paddy collection directly from local farmers.</p>
                    </div>
                </div>

                <!-- Delivery in JP Nagar (wide) -->
                <div class="md:col-span-1 lg:col-span-2 row-span-1 bg-white rounded-xl p-8 flex items-center gap-6 border border-outline-variant/20 hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)] transition-shadow">
                    <div class="bg-surface-cream p-4 rounded-full">
                        <span class="material-symbols-outlined text-primary text-4xl">location_on</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Delivery in JP Nagar Mysore</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Dedicated local supply chain for regional markets.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Testimonial ───────────────────────────────────────────────────── -->
    <section class="py-section-padding px-gutter bg-white relative overflow-hidden">
        <div class="absolute -right-40 -top-40 w-96 h-96 bg-surface-cream rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
        <div class="max-w-4xl mx-auto relative z-10 text-center">
            <span class="material-symbols-outlined text-paddy-gold text-6xl mb-8 opacity-50">format_quote</span>
            <blockquote class="font-headline-md text-headline-md text-primary leading-relaxed mb-8 italic">
                "Our family has been associated with Shri Ganesha Rice Mill for generations. They are trusted, reliable, and consistent in quality."
            </blockquote>
            <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 bg-surface-container-high rounded-full flex items-center justify-center">
                    <span class="font-label-sm text-primary">S</span>
                </div>
                <div class="text-left">
                    <p class="font-label-sm text-label-sm text-primary">Siddalingaswamy</p>
                    <p class="font-body-md text-sm text-on-surface-variant">Shirmalli</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
