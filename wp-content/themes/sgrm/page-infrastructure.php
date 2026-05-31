<?php
/**
 * Infrastructure page template (page-infrastructure.php)
 * Matches slug: /infrastructure
 */
get_header();
?>

<main class="flex-grow flex flex-col">

    <!-- ── Hero Section ─────────────────────────────────────────────────── -->
    <section class="relative w-full bg-deep-earth text-on-primary py-section-padding px-gutter flex items-center justify-center min-h-[409px] overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDprO-yBAp0AzR4EpZ2sHmdsJcjzQUl_zyF_w9O0Z09CaqYtvdk8Mn-JHs8QJnLVII3-C4nqmb-W_0nAqACZgDwB6XR3zndbSTlTo2glxf-2mjwVAhSRNqBuHd7cXWI6P504dQYctQJzowupKkRMj-m3Uf7vxkydq2fLG98mvL05OXcSXXcEAvJ5zXWC-MsyEFTODR2VPUJXLfYI8zIGL46U7VE22GoypSXXcvqvdGDj8Q6cjmsSQt3bHx8ScZJx6CogtDjU1PmRz8"
                 alt="Industrial rice milling facility"
                 class="w-full h-full object-cover opacity-40" />
        </div>
        <div class="relative z-10 max-w-container-max mx-auto text-center flex flex-col items-center gap-stack-md">
            <div class="inline-flex items-center gap-2 bg-primary-container/80 backdrop-blur-sm px-4 py-2 rounded-full border border-primary-fixed/30">
                <span class="material-symbols-outlined text-paddy-gold" style="font-variation-settings:'FILL' 1;">precision_manufacturing</span>
                <span class="font-label-sm text-label-sm text-primary-fixed">1.5 MT/Hour Capacity</span>
            </div>
            <h1 class="font-display-lg text-display-lg text-on-primary max-w-3xl">Precision Milling Operations</h1>
            <p class="font-body-lg text-body-lg text-inverse-on-surface max-w-2xl">
                State-of-the-art Binny rice milling setup ensuring the highest quality output with uncompromising transparency and heritage since 1973.
            </p>
        </div>
    </section>

    <!-- ── Facility Bento Grid ───────────────────────────────────────────── -->
    <section class="py-section-padding px-gutter w-full bg-surface-cream">
        <div class="max-w-container-max mx-auto">

            <div class="mb-stack-lg text-center md:text-left flex flex-col md:flex-row md:items-end justify-between gap-stack-md">
                <div class="max-w-2xl">
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-2">Our Facility</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">A closer look at the advanced machinery and structured processes that power Shri Ganesha Rice Mill.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-stack-md auto-rows-[minmax(300px,auto)]">

                <!-- Advanced Milling Machinery (col-span-8) -->
                <div class="md:col-span-8 relative rounded-xl overflow-hidden group bg-surface border border-outline-variant/30 shadow-sm min-h-[400px]">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdwArUMxMyAurOqR8mDYiXUKLSVJt2AI_3-lfv3LFj-rplbnWCPch3BoaQhRngotp91Nci-PLoqqdEkizYYrxnK5NhYC0wMhzrj8UXwnj113kPBBnUMPwMhnoCNrBD0FxEtV0GS74MB-3YX4UjnuflxcJ2BWtMdO8kZGdjU_VgPUr1rk9Fkxt9Q1KwN-0-keFn3yWjm2qMUEItSWDpFX4bjgftsqlIJPBvSBmjZCnGv5A6BL2DdJX4oHFkFEEWPAYE6Ra3dCzYq2M"
                         alt="Advanced rice milling machinery"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-earth/90 via-deep-earth/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-stack-md w-full">
                        <div class="bg-surface/90 backdrop-blur-md p-stack-md rounded-lg border border-outline-variant/20">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-paddy-gold" style="font-variation-settings:'FILL' 1;">settings</span>
                                <h3 class="font-headline-md text-headline-md text-primary">Advanced Milling Machinery</h3>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Our core setup features a high-efficiency Binny milling system capable of processing 1.5 metric tons per hour, ensuring consistent grain quality and minimal breakage.</p>
                        </div>
                    </div>
                </div>

                <!-- Paddy Cleaning (col-span-4) -->
                <div class="md:col-span-4 relative rounded-xl overflow-hidden group bg-surface border border-outline-variant/30 shadow-sm min-h-[400px]">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeMhmXPAKYkBBgJ7IV4xMLv-BUbze0XRMzH5v1OV5LDdBgyurXFiTXTkACVDQGxaNY9GN7UzInAozbo5rr4pUBSBAL2Q4mIBXfeufdV6qTDez29gHp7WIuiULA-c5eoUTFMiKp-lV-BJepeKlN-nk4-3uxmue51sST9S3TB-RnaG_ygtRDKxw6HyQ4U1LpCPBM40uWH7t27-3nFEYWeOCe-H4Sz7NAkZWdVOZM4J1rgT8C6TrSqwzZxIT8hm1ja0MxGKPgFtdyrbw"
                         alt="Paddy cleaning process"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-earth/90 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-stack-md">
                        <span class="material-symbols-outlined text-paddy-gold mb-2 block" style="font-variation-settings:'FILL' 1;">filter_alt</span>
                        <h3 class="font-headline-md text-headline-md text-on-primary mb-2">Paddy Cleaning</h3>
                        <p class="font-body-md text-body-md text-inverse-on-surface line-clamp-3">Multi-stage pre-cleaning systems remove impurities, stones, and dust before the milling process begins, safeguarding purity.</p>
                    </div>
                </div>

                <!-- Climate-Controlled Storage (col-span-6) -->
                <div class="md:col-span-6 relative rounded-xl overflow-hidden group bg-surface border border-outline-variant/30 shadow-sm min-h-[350px]">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuATEiZurULuJLwffUgRs42hOQ3HbccQweHek9rGcPorQ1MpxUaIBscsv1nr6T4XfldYJH3xBuYY0QqI2ax5x2QV8_o2a0DZewJ5VOH7VxZW-em6vZFI_B9R60lTrWm89kamyn180G0F8LMBtZuQf6aSxTRYQ7VqegbtHg8wUMpzdvew6yyXGJCNCo2A3zJC1S51o076JALVwrOpf2bgNuWKvPE4cuzUYBl7PdhegkxOgCBZSK3ZUpe4JdvzUdAFe8EmNSCfM2CotkY"
                         alt="Climate-controlled rice storage warehouse"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-earth/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-stack-md">
                        <span class="material-symbols-outlined text-paddy-gold mb-2 block" style="font-variation-settings:'FILL' 1;">warehouse</span>
                        <h3 class="font-headline-md text-headline-md text-on-primary mb-2">Climate-Controlled Storage</h3>
                        <p class="font-body-md text-body-md text-inverse-on-surface">Expansive, dry storage areas designed to maintain optimal moisture levels for both raw paddy and finished rice products.</p>
                    </div>
                </div>

                <!-- Efficient Logistics (col-span-6) -->
                <div class="md:col-span-6 relative rounded-xl overflow-hidden group bg-surface border border-outline-variant/30 shadow-sm min-h-[350px]">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCF2iTiWEmZHP5FU7mqBlhcM-mli7exIozSXdOuGtNhzl2ZJLqURhwu83RE_85qmSwHtL1p_8roO_dT29Jv6DnND3f6RqWUoXksREoW9KPVr3Gwkd9OcJoUDtvTEetMYdUEdZz7OA4Wl2U0xqNbugF6TCSdk1BW3Jmomp-B0r0DMgdwSTPwyBiuc2WWtvZ5yBvAnxn3xIbiWI6C_wOSPwC1T3j_zbA-_KzF6ccmdx43VYg_IF-WlN8Ni3YiYCcTiYL3-tmgLvAse4Y"
                         alt="Logistics and loading area"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-earth/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-stack-md">
                        <span class="material-symbols-outlined text-paddy-gold mb-2 block" style="font-variation-settings:'FILL' 1;">local_shipping</span>
                        <h3 class="font-headline-md text-headline-md text-on-primary mb-2">Efficient Logistics</h3>
                        <p class="font-body-md text-body-md text-inverse-on-surface">Streamlined loading and unloading zones facilitate rapid dispatch and secure receiving of raw materials, ensuring continuous operation.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer();
