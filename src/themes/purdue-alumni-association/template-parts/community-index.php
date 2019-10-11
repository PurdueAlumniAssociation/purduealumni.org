<?php

// set type
$type = 'club';

// get all communities
$args = array(
    'post_type' => 'community',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'nopaging' => true,
    'meta_key' => 'community__type',
    'meta_value' => $type
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $community_id = get_the_ID();
        echo '<li>' . rwmb_meta( 'community__city' ) . ", "  . rwmb_meta( 'community__state' ) . ", " . rwmb_meta( 'community__country' ) . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

// filter by type


// sort alphabetically by country
// sort alphabetically by city
// display in a table