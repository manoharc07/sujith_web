<?php
/**
 * Fallback template — used when no more specific template is found.
 */
get_header(); ?>

<main class="flex-grow max-w-container-max mx-auto px-gutter py-section-padding">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="font-display-lg text-display-lg text-primary mb-6"><?php the_title(); ?></h1>
        <div class="font-body-md text-body-md text-on-surface-variant">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer();
