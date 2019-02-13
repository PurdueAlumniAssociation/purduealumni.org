<?php
/**
 * The Template for displaying all single trips
 */
$args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_trips' );

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            $image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);
            ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="<?= $image_alt ?>" />
            </section>
<?php } ?>
    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
        <section class="row">
            <div class="layout">
                <div class="layout__main">
                    <main class="" id="main" tabindex="-1">
                        <?php get_template_part( 'template-parts/trip-content' ) ?>
                    </main>
                </div>
                <aside class="layout__sidebar">
                    <?php dynamic_sidebar( 'left-sidebar' ); ?>
                </aside>
            </div>
        </section>
    <?php else : ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <?php get_template_part( 'template-parts/trip-content' ) ?>
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
<?php endif;
get_footer();
?>