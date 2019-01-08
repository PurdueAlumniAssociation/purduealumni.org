<?php
/**
 * The Template for displaying all single posts
 */

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
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
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
                <h1><?php the_title(); ?></h1>
                <?php
                    $start_date = rwmb_meta( 'start_date' );
                    $end_date = rwmb_meta( 'end_date' );
                ?>
                <p><?= date( 'F j', $start_date ), "&ndash;", date( 'j, Y', $end_date); ?></p>
                <?php the_content(); ?>
                <?php
                $image = rwmb_meta( 'thumbnail', array( 'size' => 'thumbnail' ) );
                echo '<img src="', $image['full_url'], '" alt="', $image['alt'] , '"/></a>';
                ?>

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