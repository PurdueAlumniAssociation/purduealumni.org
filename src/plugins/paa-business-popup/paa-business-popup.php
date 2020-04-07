<?php
/**
 * Plugin Name: Purdue Alumni Association Business Popup
 * Description: Add underwriting sections and popups to pages on the site.
 */

function paau_underwriter_top_output() {

    $current_page_id = get_the_id();

    $args = array(
        'post_type' => 'underwriter',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'nopaging' => true,
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $post_ids = rwmb_meta( 'paau_post_ids' );

            if ( in_array($current_page_id, $post_ids) ) {
                ?>
                <div class="underwriter" style="padding: 2em; background-color:#eee;">This content is underwritten by <a href="<?= rwmb_meta( 'paau_business_url' ); ?>"><?= the_title(); ?></a>.</div>
                <?php
            }
        }
    }

    wp_reset_postdata();
}
add_action( 'paau_underwriter', 'paau_underwriter_top_output' );
?>