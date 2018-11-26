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
        $plan = ( isset( $_GET['plan'] ) ) ? $_GET['plan'] : "basic" ;
        if ( $plan == "career-max" ) {
            $plan_title = "Career Max";
        } else {
            $plan_title = ucfirst( $plan );
        }
    ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php echo $plan_title, ' '; the_title(); ?></h1>
                <?php the_content();

                // $the_query = new WP_Query(array(
                //     'post_type' => 'benefit',
                //     'post_status' => 'publish'
                // ));
                //
                // if ( $the_query->have_posts() ) {
                // 	while ( $the_query->have_posts() ) {
                // 		$the_query->the_post();
                // 		print_r($post);
                // 	}
                // 	/* Restore original Post Data */
                // 	wp_reset_postdata();
                // } else {
                // 	// no posts found
                // }

                // get the benefit cpt ids
                $benefit_args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_benefits' );

                //$benefit_ids = rwmb_meta( 'benefit_selection', $benefit_args );
                $benefit_ids = rwmb_meta( 'benefit_selection' );

                foreach ( $benefit_ids as $benefit_id ) {
                    // reset vars for the next loop
                    $benefit__plans = "";
                    $benefit__name = "";
                    $benefit__public_description = "";
                    $benefit__member_description = "";
                    $benefit__public_url = "";
                    $benefit__member_url = "";

                    $benefit__plans = rwmb_meta( 'benefit__plans', $benefit_args, $benefit_id );
                    $benefit__name = rwmb_meta( 'benefit__name', $benefit_args, $benefit_id );
                    $benefit__public_description = rwmb_meta( 'benefit__public_description', $benefit_args, $benefit_id );
                    $benefit__member_description = rwmb_meta( 'benefit__member_description', $benefit_args, $benefit_id );
                    $benefit__public_url = rwmb_meta( 'benefit__public_url', $benefit_args, $benefit_id );
                    $benefit__member_url = rwmb_meta( 'benefit__member_url', $benefit_args, $benefit_id );

                    $desc = $benefit__member_description;
                    if ( $desc == '' ) {
                        $desc = $benefit__public_description;
                    }

                    $anchor = '';
                    if ( $benefit__member_url != '' ) {
                        $anchor = " <a href=\"{$benefit__member_url}\" rel=\"noopener\">Access Benefit</a>";
                    }

                    if ( ! is_null( $benefit__plans ) ) { // bugfix - custom table has blank rows
                        if ( in_array( $plan, $benefit__plans ) ) {
                            echo "<h2>{$benefit__name}</h2>\n";
                            echo "<p>", $desc, $anchor, "</p>\n";
                        }
                    }
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
<?php endif; ?>
<?php get_footer(); ?>