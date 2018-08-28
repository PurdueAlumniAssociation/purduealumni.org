<?php
    /*
        Template Name: One Column
    */
?>
<?php get_header(); ?>
<section class="layout">
    <main id="main" tabindex="-1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
        <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, something went wrong.' ); ?></p>
        <?php endif; ?>
    </main>
</section>
<?php get_footer(); ?>