<?php
/*
    Template Name: Standard
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            $image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);
            ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="<?= $image_alt ?>" />
            </section>
<?php } ?>
    <?php if ( has_nav_menu( 'side-menu' ) ) : ?>
        <section class="row">
            <div class="layout">
                <div class="layout__main">
                    <main class="" id="main" tabindex="-1">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </main>
                </div>
                <div class="layout__sidebar">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side-menu',
                        'menu_class'     => 'side-menu__list',
                        'container' => 'nav',
                        'container_class' => 'side-menu'
                    ) ); ?>
                </div>
            </div>
        </section>
    <?php else : ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </main>
        </section>
    <?php endif; ?>
<?php endwhile; else : ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php endif; ?>
<?php get_footer(); ?>