<?php
/**
 * Contact page template (page-contact.php)
 * Matches slug: /contact
 *
 * sgrm_validate_contact_form() is defined in functions.php.
 */

// ── Form submission handler ───────────────────────────────────────────────────
$success = false;
$errors  = [];
$fields  = [ 'name' => '', 'phone' => '', 'email' => '', 'enquiry_type' => 'wholesale', 'message' => '' ];

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['sgrm_contact_nonce'] ) ) {

    if ( wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sgrm_contact_nonce'] ) ), 'sgrm_contact_form' ) ) {

        // Sanitise inputs
        $fields['name']         = sanitize_text_field( wp_unslash( $_POST['name']         ?? '' ) );
        $fields['phone']        = sanitize_text_field( wp_unslash( $_POST['phone']        ?? '' ) );
        $fields['email']        = sanitize_email(      wp_unslash( $_POST['email']        ?? '' ) );
        $fields['enquiry_type'] = sanitize_text_field( wp_unslash( $_POST['enquiry_type'] ?? 'wholesale' ) );
        $fields['message']      = sanitize_textarea_field( wp_unslash( $_POST['message']  ?? '' ) );

        // Validate
        $errors = sgrm_validate_contact_form( $fields );

        if ( empty( $errors ) ) {
            $enquiry_labels = [
                'wholesale' => 'Wholesale Orders',
                'visit'     => 'Mill Visit',
                'general'   => 'General Enquiry',
            ];
            $enquiry_label = $enquiry_labels[ $fields['enquiry_type'] ] ?? $fields['enquiry_type'];

            $subject = 'New Enquiry from ' . $fields['name'] . ' — ' . $enquiry_label;
            $body    = "Name: {$fields['name']}\n"
                     . "Phone: {$fields['phone']}\n"
                     . "Email: {$fields['email']}\n"
                     . "Enquiry Type: {$enquiry_label}\n\n"
                     . "Message:\n{$fields['message']}";

            wp_mail( 'hssujithsubramanyam@gmail.com', $subject, $body );
            $success = true;
            // Clear fields after success
            $fields = [ 'name' => '', 'phone' => '', 'email' => '', 'enquiry_type' => 'wholesale', 'message' => '' ];
        }

    } else {
        $errors['form'] = 'Security check failed. Please try again.';
    }
}

get_header();
?>

<main class="flex-grow w-full max-w-container-max mx-auto px-gutter py-section-padding grid grid-cols-1 lg:grid-cols-12 gap-stack-lg">

    <!-- ── Page Header ───────────────────────────────────────────────────── -->
    <div class="col-span-1 lg:col-span-12 text-center mb-stack-lg">
        <h1 class="font-display-lg text-display-lg text-primary mb-stack-sm">Get in Touch</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
            We welcome enquiries for wholesale rice distribution, mill visits, and general questions about our products and processes.
        </p>
    </div>

    <!-- ── Contact Info Cards ────────────────────────────────────────────── -->
    <div class="col-span-1 lg:col-span-4 flex flex-col gap-stack-md">

        <!-- Phone -->
        <div class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg shadow-sm">
            <div class="flex items-center gap-stack-sm mb-4">
                <span class="material-symbols-outlined text-paddy-gold text-3xl">call</span>
                <h3 class="font-headline-md text-headline-md text-primary">Phone</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface mb-2">
                <a href="tel:+919448741172" class="hover:text-primary transition-colors">+91 9448741172</a>
            </p>
            <a href="https://wa.me/919448741172?text=Hello%2C%20I'm%20interested%20in%20Shri%20Ganesha%20Rice%20Mill"
               target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 text-whatsapp-green font-label-sm text-label-sm hover:underline mt-2">
                <span class="material-symbols-outlined">chat</span> Chat on WhatsApp
            </a>
        </div>

        <!-- Email -->
        <div class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg shadow-sm">
            <div class="flex items-center gap-stack-sm mb-4">
                <span class="material-symbols-outlined text-paddy-gold text-3xl">mail</span>
                <h3 class="font-headline-md text-headline-md text-primary">Email</h3>
            </div>
            <a href="mailto:hssujithsubramanyam@gmail.com"
               class="font-body-md text-body-md text-on-surface hover:text-primary transition-colors break-all">
                hssujithsubramanyam@gmail.com
            </a>
        </div>

        <!-- Location -->
        <div class="bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg shadow-sm">
            <div class="flex items-center gap-stack-sm mb-4">
                <span class="material-symbols-outlined text-paddy-gold text-3xl">location_on</span>
                <h3 class="font-headline-md text-headline-md text-primary">Location</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface mb-2">Near Hullahalli, Karnataka</p>
            <div class="mt-4 flex items-center gap-stack-sm">
                <span class="material-symbols-outlined text-outline">schedule</span>
                <p class="font-body-md text-body-md text-on-surface-variant">All days — 9:00 AM to 6:00 PM</p>
            </div>
        </div>

    </div>

    <!-- ── Form + Map ────────────────────────────────────────────────────── -->
    <div class="col-span-1 lg:col-span-8 flex flex-col gap-stack-lg">

        <!-- Enquiry Form -->
        <div class="bg-surface-cream border border-outline-variant p-stack-md lg:p-stack-lg rounded-xl shadow-sm">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-stack-md">Send an Enquiry</h2>

            <?php if ( $success ) : ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-start gap-3">
                    <span class="material-symbols-outlined text-green-600 mt-0.5">check_circle</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-green-800">Message sent successfully!</p>
                        <p class="font-body-md text-body-md text-green-700 mt-1">Thank you for your enquiry. We'll get back to you shortly.</p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( ! empty( $errors['form'] ) ) : ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <p class="font-body-md text-body-md text-red-700"><?php echo esc_html( $errors['form'] ); ?></p>
                </div>
            <?php endif; ?>

            <form method="POST" action="" class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                <?php wp_nonce_field( 'sgrm_contact_form', 'sgrm_contact_nonce' ); ?>

                <!-- Full Name -->
                <div class="col-span-1">
                    <label for="name" class="block font-label-sm text-label-sm text-on-surface mb-1">
                        Full Name <span class="text-error">*</span>
                    </label>
                    <input type="text" id="name" name="name" required
                           value="<?php echo esc_attr( $fields['name'] ); ?>"
                           class="w-full bg-surface-container-lowest border <?php echo ! empty( $errors['name'] ) ? 'border-error' : 'border-outline-variant'; ?> rounded p-3 focus:ring-2 focus:ring-paddy-gold focus:outline-none transition-shadow font-body-md text-on-surface" />
                    <?php if ( ! empty( $errors['name'] ) ) : ?>
                        <p class="mt-1 font-label-sm text-label-sm text-error"><?php echo esc_html( $errors['name'] ); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Phone Number -->
                <div class="col-span-1">
                    <label for="phone" class="block font-label-sm text-label-sm text-on-surface mb-1">
                        Phone Number <span class="text-error">*</span>
                    </label>
                    <input type="tel" id="phone" name="phone" required
                           value="<?php echo esc_attr( $fields['phone'] ); ?>"
                           class="w-full bg-surface-container-lowest border <?php echo ! empty( $errors['phone'] ) ? 'border-error' : 'border-outline-variant'; ?> rounded p-3 focus:ring-2 focus:ring-paddy-gold focus:outline-none transition-shadow font-body-md text-on-surface" />
                    <?php if ( ! empty( $errors['phone'] ) ) : ?>
                        <p class="mt-1 font-label-sm text-label-sm text-error"><?php echo esc_html( $errors['phone'] ); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Email Address -->
                <div class="col-span-1 md:col-span-2">
                    <label for="email" class="block font-label-sm text-label-sm text-on-surface mb-1">Email Address</label>
                    <input type="email" id="email" name="email"
                           value="<?php echo esc_attr( $fields['email'] ); ?>"
                           class="w-full bg-surface-container-lowest border <?php echo ! empty( $errors['email'] ) ? 'border-error' : 'border-outline-variant'; ?> rounded p-3 focus:ring-2 focus:ring-paddy-gold focus:outline-none transition-shadow font-body-md text-on-surface" />
                    <?php if ( ! empty( $errors['email'] ) ) : ?>
                        <p class="mt-1 font-label-sm text-label-sm text-error"><?php echo esc_html( $errors['email'] ); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Enquiry Type -->
                <div class="col-span-1 md:col-span-2">
                    <label for="enquiry_type" class="block font-label-sm text-label-sm text-on-surface mb-1">Enquiry Type</label>
                    <select id="enquiry_type" name="enquiry_type"
                            class="w-full bg-surface-container-lowest border border-outline-variant rounded p-3 focus:ring-2 focus:ring-paddy-gold focus:outline-none transition-shadow font-body-md text-on-surface appearance-none">
                        <option value="wholesale" <?php selected( $fields['enquiry_type'], 'wholesale' ); ?>>Wholesale Orders</option>
                        <option value="visit"     <?php selected( $fields['enquiry_type'], 'visit' ); ?>>Mill Visit</option>
                        <option value="general"   <?php selected( $fields['enquiry_type'], 'general' ); ?>>General Enquiry</option>
                    </select>
                </div>

                <!-- Message -->
                <div class="col-span-1 md:col-span-2">
                    <label for="message" class="block font-label-sm text-label-sm text-on-surface mb-1">
                        Message <span class="text-error">*</span>
                    </label>
                    <textarea id="message" name="message" rows="4" required
                              class="w-full bg-surface-container-lowest border <?php echo ! empty( $errors['message'] ) ? 'border-error' : 'border-outline-variant'; ?> rounded p-3 focus:ring-2 focus:ring-paddy-gold focus:outline-none transition-shadow font-body-md text-on-surface resize-y"><?php echo esc_textarea( $fields['message'] ); ?></textarea>
                    <?php if ( ! empty( $errors['message'] ) ) : ?>
                        <p class="mt-1 font-label-sm text-label-sm text-error"><?php echo esc_html( $errors['message'] ); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Submit -->
                <div class="col-span-1 md:col-span-2 mt-2">
                    <button type="submit"
                            class="w-full md:w-auto bg-primary text-on-primary font-label-sm text-label-sm px-8 py-4 rounded hover:bg-primary-container transition-colors shadow-sm">
                        Send Message
                    </button>
                </div>

            </form>
        </div>

        <!-- Google Maps -->
        <div class="rounded-xl overflow-hidden border border-outline-variant shadow-sm h-80 relative">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrbiSgm4u8XJYqjakCkZZJjFNiVlDoSXBjecA7Z0qjsfz5aK4nPPw0ifgQgNJLBfCKY3DKkLB7zwDJevm5vId6UEiYtVeIQeSZQronlXUTP5d37MEXYyOH4DJDEfK-qo_zbBYCNGoBZY6RK-cquIay97aRoxOqDDahuk7tPSg7FFZHV8rG7_RBM1FWPimw7d-JApwvmnGIotfzcjBMrpNilHbsGOW8BnLEDXjZyC8a1WltxQbxkbFjALP32WJQTXOgm8ASLHpJYzo"
                 alt="Location map — Near Hullahalli, Karnataka"
                 class="w-full h-full object-cover" />
            <div class="absolute inset-0 flex items-center justify-center bg-black/20 hover:bg-black/10 transition-colors">
                <a href="https://maps.app.goo.gl/9WMA1WNApcs2uPbX6"
                   target="_blank" rel="noopener noreferrer"
                   class="bg-surface-container-lowest text-primary font-label-sm text-label-sm px-6 py-3 rounded-full shadow-md flex items-center gap-2 hover:bg-surface-cream transition-colors">
                    <span class="material-symbols-outlined">map</span> View on Google Maps
                </a>
            </div>
        </div>

    </div>

</main>

<?php get_footer();
