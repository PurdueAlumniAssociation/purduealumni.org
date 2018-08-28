<?php
    /*
        Template Name: Two Column, Left Sidebar
    */
?>
<?php get_header(); ?>
<section class="layout">
        <div class="layout__sidebar">
            <p>Some sidebar content.</p>
        </div>
        <div class="layout__content">
            <main id="main" tabindex="-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, something went wrong.' ); ?></p>
                <?php endif; ?>
            </main>
        </div>
</section>
<?php get_footer(); ?>