<?php
/*
    Template Name: Tier-based Benefits
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
    <?php else :
        // set level from url params, default to "basic"
        $level = ( isset( $_GET['level'] ) ) ? $_GET['level'] : "basic" ;
        if ( $level == "career-max" ) {
            $level_title = "Career Max";
        } else {
            $level_title = ucfirst( $level );
        }
    ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php echo $level_title, ' '; the_title(); ?></h1>
                <?php the_content();

                $query = new WP_Query(array(
                    'post_type' => 'benefit',
                    'post_status' => 'publish'
                ));

                // get the benefit cpt ids
                $benefit_args = array( 'storage_type' => 'custom_table', 'table' => $table_name );

                $post_ids = rwmb_meta( 'benefit_selection', $benefit_args );
                foreach ( $post_ids as $post_id ) {
                    // $query->the_post();
                    // $post_id = get_the_ID();
                    $post_meta = get_post_meta( $post_id );

                    // only display benefits for a certain level
                    if ( in_array( $level, $post_meta['benefit__level'] ) ) {
                        echo "<h3>{$post_meta['benefit__name'][0]}</h3>\n";
                        echo "<p>",$post_meta['benefit__public_description'][0],"</p>\n";
                    }
                }

                wp_reset_query();
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
<?php endif; ?>
<?php get_footer(); ?>