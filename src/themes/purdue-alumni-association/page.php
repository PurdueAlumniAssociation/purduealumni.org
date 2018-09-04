<?php
/*
    Template Name: One Column
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) { ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="" />
            </section>
<?php } ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </main>
    </section>
<?php endwhile; else : ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php endif; ?>
<?php get_footer(); ?>