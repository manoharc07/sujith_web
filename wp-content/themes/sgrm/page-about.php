<?php
/**
 * About Us page template (page-about.php)
 * Matches slug: /about
 */
get_header();
?>

<main>

    <!-- ── Hero Section ─────────────────────────────────────────────────── -->
    <section class="py-section-padding bg-surface-cream relative overflow-hidden">
        <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-12 gap-stack-lg items-center">

            <!-- Left: Text -->
            <div class="md:col-span-5 z-10">
                <div class="inline-flex items-center gap-2 bg-surface-container px-3 py-1 rounded-full mb-6 border border-outline-variant">
                    <span class="material-symbols-outlined text-paddy-gold text-sm">verified</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">ESTABLISHED 1973</span>
                </div>
                <h1 class="font-display-lg text-display-lg text-primary mb-6">Our Heritage of Quality Milling</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">
                    Rooted in Hullahalli, Karnataka, Shri Ganesha Rice Mill has been synonymous with precision milling and honest business practices for over five decades.
                </p>
            </div>

            <!-- Right: Image -->
            <div class="md:col-span-7 relative">
                <div class="aspect-[4/3] rounded-lg overflow-hidden border border-outline-variant shadow-sm relative z-10">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1Axj_YvJ66MNipwpTV8aJuDnDz2s2lF-EZ4oCCNSrMRGfdKqyH0wHoo20Oyk_TMkW-OpVC0daxcClC-x_0lwiMTuvR4Y_IRF1sBPI3noYDQ26jNxJ14CFaGA4jUjV1Ojo6zNa7uHgnmoEgqpDN12LRbaeEnwPJZAy4OMP-nhEN-2i_eWbOvHPIlb5-z3EjU_gkd3k0FD6Uq8uGLwapyM9dSKqekKkRBjHkhC9MFtZ6GCcveh40lnyZ0hdP5nuWJG9LgFl0SW_5q8"
                         alt="Shri Ganesha Rice Mill Exterior"
                         class="w-full h-full object-cover" />
                </div>
                <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-primary-fixed-dim rounded-full opacity-20 blur-2xl z-0"></div>
            </div>

        </div>
    </section>

    <!-- ── Pillars of Our Process ────────────────────────────────────────── -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-gutter">
            <div class="text-center mb-12">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Pillars of Our Process</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                    We blend traditional values with modern efficiency to deliver uncompromising quality in every grain.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Rice Milling -->
                <div class="bg-surface-container-lowest p-8 rounded border border-outline-variant flex flex-col items-center text-center hover:bg-surface-container-low transition-colors">
                    <div class="w-16 h-16 bg-surface-cream rounded-full flex items-center justify-center mb-6 border border-surface-dim">
                        <span class="material-symbols-outlined text-paddy-gold text-3xl">agriculture</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3">Rice Milling</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        State-of-the-art milling techniques ensuring maximum yield and minimal breakage, preserving the natural aroma and texture.
                    </p>
                </div>

                <!-- Quality Processing -->
                <div class="bg-surface-container-lowest p-8 rounded border border-outline-variant flex flex-col items-center text-center hover:bg-surface-container-low transition-colors">
                    <div class="w-16 h-16 bg-surface-cream rounded-full flex items-center justify-center mb-6 border border-surface-dim">
                        <span class="material-symbols-outlined text-paddy-gold text-3xl">fact_check</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3">Quality Processing</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Rigorous sorting and polishing processes governed by strict quality control standards to deliver pristine grains.
                    </p>
                </div>

                <!-- Reliable Supply -->
                <div class="bg-surface-container-lowest p-8 rounded border border-outline-variant flex flex-col items-center text-center hover:bg-surface-container-low transition-colors">
                    <div class="w-16 h-16 bg-surface-cream rounded-full flex items-center justify-center mb-6 border border-surface-dim">
                        <span class="material-symbols-outlined text-paddy-gold text-3xl">local_shipping</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3">Reliable Supply</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        A robust logistics network guaranteeing timely delivery for wholesale and retail partners across the region.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Story Section ─────────────────────────────────────────────────── -->
    <section class="py-section-padding bg-surface-cream border-t border-outline-variant">
        <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Image -->
            <div class="order-2 md:order-1 relative">
                <div class="aspect-square md:aspect-auto md:h-[600px] rounded bg-surface-dim overflow-hidden border border-outline-variant">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsREoxVxtol4O7EES_oQrYfPUSJCHPXxGD8z7eZ6vBP-WHiWwWSRtUZ1PjGNDYYDqws8flQU5btC55R9FMvPe2jNZEo7jVgcf-qEmnVtmR-H2lzgXLnU90tEzlAVAJ_IjPwWpvUKLcu3_xAIJsXfE_nv1VoWL4qsf9SRTZ_HB0vPPhs_GkCNFFhbbh5c5pWEs-nv50bKXqe0LX0tWZmQgTMt_tT6Zu8LFdlp7U2tb5phIrC_DNI4JjmnXGlb3ZTGh-MEnklTPfY7k"
                         alt="Quality paddy grains"
                         class="w-full h-full object-cover" />
                </div>
            </div>

            <!-- Text -->
            <div class="order-1 md:order-2">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-6">Honest Business Practices Since Day One</h2>
                <div class="space-y-6 font-body-md text-body-md text-on-surface-variant">
                    <p>
                        Founded in 1973 by a family deeply rooted in the agricultural traditions of Karnataka, Shri Ganesha Rice Mill started as a modest facility serving local farmers near Hullahalli. Over the decades, we have grown our capacity and modernised our infrastructure, but our core philosophy remains unchanged.
                    </p>
                    <p>
                        We believe that transparency with our farmers and clients is the bedrock of our success. Every batch of rice that leaves our mill is a testament to our commitment to fair trade, precise processing, and reliable quality.
                    </p>
                    <div class="p-6 bg-surface-container rounded border-l-4 border-paddy-gold mt-8">
                        <p class="font-headline-md text-headline-md text-primary italic">
                            "Our promise is simple: what you see is what you get. Pure, unadulterated quality milled with integrity."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer();
