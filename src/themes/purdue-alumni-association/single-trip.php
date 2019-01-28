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
                    $start_date = rwmb_meta( 'start_date', $args );
                    $end_date = rwmb_meta( 'end_date', $args );
                ?>
                <p class="trip__date"><?= date( 'F j', $start_date ), "&ndash;", date( 'j, Y', $end_date); ?></p>
                <?php the_content(); ?>
                <?php
                $operator = rwmb_meta( 'operator', $args );
                if ( ! empty( $operator ) ) {
                    echo "<p class=\"trip__operator\">Tour Operator: {$operator}</p>";
                }

                $pricing = rwmb_meta( 'pricing', $args );
                if ( ! empty( $pricing ) ) {
                    echo "<p class=\"trip__pricing\">Pricing: {$pricing}</p>";
                }

                $download_array = array();
                $download_group = rwmb_meta( 'download_group', $args );

                foreach ( $download_group as $download ) {
                    if ( ! empty( $download['download_label'] ) && count( $download['download_upload'] ) > 0 ) {
                        $download_url = wp_get_attachment_url( $download['download_upload'][0] );
                        $download_label = $download['download_label'];

                        $download_array[] = "<li><a href=\"{$download_url}\" download>{$download_label}</a></li>";
                    }
                }

                if ( count( $download_array ) > 0 ) {
                    echo "<h2>Downloads</h2>";
                    echo "<ul>";
                    foreach ( $download_array as $list_item ) {
                        echo $list_item;
                    }
                    echo "</ul>";
                }


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