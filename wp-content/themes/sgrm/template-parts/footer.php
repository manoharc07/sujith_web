<footer class="bg-primary w-full py-stack-lg">
    <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-3 gap-stack-md text-on-primary font-body-md text-body-md">

        <!-- Brand & Copyright -->
        <div class="flex flex-col gap-4">
            <span class="text-headline-md font-display-lg text-primary-fixed">Shri Ganesha Rice Mill</span>
            <p class="font-label-sm text-label-sm text-primary-fixed-dim opacity-80 mt-auto">
                &copy; <?php echo date( 'Y' ); ?> Shri Ganesha Rice Mill. Established 1973. All Rights Reserved.
            </p>
        </div>

        <!-- Contact -->
        <div class="flex flex-col gap-3">
            <h4 class="font-label-sm text-label-sm text-paddy-gold font-bold mb-2">Contact</h4>
            <a href="https://maps.app.goo.gl/9WMA1WNApcs2uPbX6"
               target="_blank" rel="noopener noreferrer"
               class="text-primary-fixed-dim opacity-80 hover:opacity-100 hover:text-whatsapp-green transition-colors focus:ring-2 focus:ring-paddy-gold focus:outline-none w-fit">
                Near Hullahalli, Karnataka
            </a>
            <a href="tel:+919448741172"
               class="text-primary-fixed-dim opacity-80 hover:opacity-100 hover:text-whatsapp-green transition-colors focus:ring-2 focus:ring-paddy-gold focus:outline-none w-fit">
                +91 9448741172
            </a>
        </div>

        <!-- Legal -->
        <div class="flex flex-col gap-3">
            <h4 class="font-label-sm text-label-sm text-paddy-gold font-bold mb-2">Legal</h4>
            <a href="#"
               class="text-primary-fixed-dim opacity-80 hover:opacity-100 hover:text-whatsapp-green transition-colors focus:ring-2 focus:ring-paddy-gold focus:outline-none w-fit">
                Privacy Policy
            </a>
            <a href="#"
               class="text-primary-fixed-dim opacity-80 hover:opacity-100 hover:text-whatsapp-green transition-colors focus:ring-2 focus:ring-paddy-gold focus:outline-none w-fit">
                Terms of Service
            </a>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919448741172?text=Hello%2C%20I'm%20interested%20in%20rice%20supply%20from%20Shri%20Ganesha%20Rice%20Mill.%20Please%20share%20details."
   target="_blank" rel="noopener noreferrer"
   class="fixed bottom-6 right-6 z-50 bg-whatsapp-green text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-colors flex items-center justify-center"
   aria-label="Chat on WhatsApp">
    <span class="material-symbols-outlined text-3xl">chat</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
