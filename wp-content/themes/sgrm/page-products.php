<?php
/**
 * Products page template (page-products.php)
 * Matches slug: /products
 */
get_header();

$contact_url = get_permalink( get_page_by_path( 'contact' ) );
?>

<main class="flex-grow">

    <!-- ── Hero Section ─────────────────────────────────────────────────── -->
    <section class="py-section-padding px-gutter bg-surface-container-low">
        <div class="max-w-container-max mx-auto text-center">
            <h1 class="font-display-lg text-display-lg text-primary mb-stack-md">Our Premium Products</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">
                Cultivated with heritage, processed with precision. Explore our range of high-quality rice and valuable byproducts tailored for household and wholesale needs.
            </p>
        </div>
    </section>

    <!-- ── Featured Product: Small Grain Rice ───────────────────────────── -->
    <section class="py-section-padding px-gutter bg-surface-cream">
        <div class="max-w-container-max mx-auto">

            <div class="flex items-center gap-2 mb-stack-lg">
                <span class="material-symbols-outlined text-paddy-gold" style="font-variation-settings:'FILL' 1;">star</span>
                <h2 class="font-headline-lg text-headline-lg text-primary">Featured Product: Small Grain Rice</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center">

                <!-- Product Image -->
                <div class="rounded-lg overflow-hidden border border-outline-variant/30 shadow-sm bg-white">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsXrH2AcmuBatoMG6LmGjYSa1bQ7iAGu8HwP8BMpXlce7Rgu5DRapZZuwe25TVZzqP73Loh_FAvuxqeRJndKi5dHOBz3oddH1yJYSO9H2ZU3dXE2KJSsfJPg4wPHXrwpzAmSqIii90aHNuumTzzWOt4Y9W1PfbdtcBxtNPg_lOeDMzLEfLWVlmanjcwhePbUNi6vcuQ-sgvDxCfVyMslrBRxjCK1UZE67cYeocEhOcoCthdPEGmvpNFshV5XUqQ7zahPjlUbXvdKE"
                         alt="Small Grain Rice"
                         class="w-full h-[400px] object-cover" />
                </div>

                <!-- Product Details -->
                <div class="flex flex-col gap-stack-md">
                    <div>
                        <div class="flex gap-4 mb-stack-sm">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">Polished</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">Unpolished</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-stack-sm">Premium Small Grain Rice</h3>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            Our signature small grain rice is carefully milled to perfection. Available in both polished (white) and unpolished (brown) variants, it offers exceptional taste and texture. Suitable for daily household use and bulk/wholesale supply.
                        </p>
                    </div>

                    <div class="bg-surface-bright border border-outline-variant/50 rounded-lg p-6 flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-paddy-gold mt-1">restaurant</span>
                            <div>
                                <h4 class="font-label-sm text-label-sm text-primary mb-1">Usage</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant">Ideal for daily meals, traditional dishes, and premium catering services.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-paddy-gold mt-1">inventory_2</span>
                            <div>
                                <h4 class="font-label-sm text-label-sm text-primary mb-1">Availability</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant">10kg, 25kg, 50kg Bags. Bulk wholesale orders accepted.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-stack-sm">
                        <a href="<?php echo esc_url( $contact_url ); ?>"
                           class="bg-primary text-on-primary font-label-sm text-label-sm px-8 py-3 rounded hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm">
                            Enquire Now
                        </a>
                        <button class="border border-secondary text-secondary font-label-sm text-label-sm px-8 py-3 rounded hover:bg-secondary/5 transition-colors">
                            Download Spec Sheet
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Byproducts ────────────────────────────────────────────────────── -->
    <section class="py-section-padding px-gutter bg-surface-container">
        <div class="max-w-container-max mx-auto">

            <div class="mb-stack-lg">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-stack-sm">Valuable Byproducts</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Our zero-waste milling process yields high-quality byproducts essential for agriculture, animal feed, and industrial applications.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-stack-md">

                <!-- Rice Bran -->
                <div class="bg-white rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm flex flex-col group hover:shadow-md transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwLDuarzv18Clv7LVxCPj4g9KpTjaTRkH1cjOoJ71ukqcTAnl1Rh_kcQuqzIsNvIF-sh4tTEKMs4zcmRKejuQra8DrFOxatxiCe7cYninS2IHbpeA21lAQv3YbMqUnLtpVRHrv01diZKwRzj29dKz3sG5B_g3BCYF5NqbaC-dnQgZ26qHwQ2Vd8ICq34dcGn_e07xTrk5TYzC67hfL00fVlDYkvw5wqGSL0ofhJn03sO_atUAztZfsm_Q71bHLPVcQ3w60KVieKT4"
                             alt="Rice Bran"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-headline-md text-headline-md text-primary mb-stack-sm">Rice Bran</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md flex-grow">
                            Nutrient-rich outer layer of the rice grain, carefully extracted during the polishing process. High in oil content and essential vitamins.
                        </p>
                        <div class="space-y-3 mb-stack-md border-t border-outline-variant/30 pt-4">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">eco</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Usage: Animal feed, bran oil extraction</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">local_shipping</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Availability: Bulk truckloads</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url( $contact_url ); ?>"
                           class="w-full text-center border border-primary text-primary font-label-sm text-label-sm py-2 rounded hover:bg-primary/5 transition-colors">
                            Enquire for Bulk
                        </a>
                    </div>
                </div>

                <!-- Rice Husk -->
                <div class="bg-white rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm flex flex-col group hover:shadow-md transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJ9ugImp85wO6A1GX6lSXiG1LGOfSsLW6b3-2FTyhLIl5thn6Jd2EF5SuUGeudpfgygaJhPcTwLysWgZkKxTcCI3V3sxRgPinZHjaW9Tqnr0A2Zh02urW1HQLXOGCS2S0GBKq9RoOuelOumhi7mT0dqv5AXAg0LQto8rTJhrBFgQkyqJbqnna6y76Sx1kimGSHnXcHvXWpjXd-FQCv2WMYvSi3As5rTpERWcl1RPDTHzm2iDOZUMxePvt0R9F7ue_z5Pbj7o5Occs"
                             alt="Rice Husk"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-headline-md text-headline-md text-primary mb-stack-sm">Rice Husk</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md flex-grow">
                            The hard protecting coverings of grains of rice. Clean, dry, and highly combustible, making it an excellent biomass resource.
                        </p>
                        <div class="space-y-3 mb-stack-md border-t border-outline-variant/30 pt-4">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">factory</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Usage: Biomass fuel, bedding, insulation</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">local_shipping</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Availability: Continuous bulk supply</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url( $contact_url ); ?>"
                           class="w-full text-center border border-primary text-primary font-label-sm text-label-sm py-2 rounded hover:bg-primary/5 transition-colors">
                            Enquire for Bulk
                        </a>
                    </div>
                </div>

                <!-- Broken Rice -->
                <div class="bg-white rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm flex flex-col group hover:shadow-md transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtuaDw9mBLSZEpqaUYDC68IW_MWgyJaKDRe0gKGn9gozO7j1tgCsu4qOlmdpGX0-p3EZWNr_qkeyPpSklhdl0HOTV1P1LPnxn2ougfSqOo9t_HfWR74oZQl10tkkF18AwTPZfY1NUtvJPMfZ_7CJFCaaworooWSTW_KOStrHl7Av5y-GA_he1rXDiZoxbTtFX1CiJeHGdjeuekPxAAxU05Lx__5gwkou8hKAy_pV4dnAoGgdOkaV-KZumnHQPYVlY842ZzLOJ5D2M"
                             alt="Broken Rice"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-headline-md text-headline-md text-primary mb-stack-sm">Broken Rice</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md flex-grow">
                            High-quality fragments of rice grains broken during the milling process. Retains the exact same nutritional value as whole rice.
                        </p>
                        <div class="space-y-3 mb-stack-md border-t border-outline-variant/30 pt-4">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">blender</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Usage: Rice flour, brewing, animal feed</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-outline text-sm">local_shipping</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Availability: 50kg Bags, Bulk</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url( $contact_url ); ?>"
                           class="w-full text-center border border-primary text-primary font-label-sm text-label-sm py-2 rounded hover:bg-primary/5 transition-colors">
                            Enquire for Bulk
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Wholesale Enquiry Bar ─────────────────────────────────────────── -->
    <section class="bg-primary text-on-primary py-8 px-gutter">
        <div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h3 class="font-headline-md text-headline-md mb-1">Ready to place a wholesale order?</h3>
                <p class="font-body-md text-body-md text-primary-fixed-dim">Contact our sales team directly for competitive pricing.</p>
            </div>
            <div class="flex gap-4">
                <a href="tel:+919448741172"
                   class="flex items-center gap-2 bg-white text-primary font-label-sm text-label-sm px-6 py-3 rounded hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined">call</span>
                    +91 9448741172
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
