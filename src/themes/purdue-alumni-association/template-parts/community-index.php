<?php

// set type
$type = get_post_meta( get_the_ID(), 'community_index_type', true );

// get all communities
$args = array(
    'post_type' => 'community',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'nopaging' => true,
    'meta_query' => array(
        'relation' => 'AND',
        'query_community_type' => array(
            'key' => 'community__type',
            'value' => $type, // Optional
        ),
        'query_community_state' => array(
            'key' => 'community__state',
            'compare' => 'EXISTS', // Optional
        ),
        'query_community_city' => array(
            'key' => 'community__city',
            'compare' => 'EXISTS', // Optional
        ),
    ),
    'orderby' => array(
        'query_community_state' => 'ASC',
        'query_community_city' => 'ASC'
    )
);
$the_query = new WP_Query( $args );
$old_state = "";
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {

        $the_query->the_post();
        $community_id = get_the_ID();
        $state = rwmb_meta( 'community__state' );
        $city = rwmb_meta( 'community__city' );

        //check for new state
        if ($old_state != $state) {
            if ($old_state != "" ) {
                echo "</ul></li>";
            }
            echo "<li>${state}<ul>";
            $old_state = $state;
        }

        echo "<li><a href=\"", get_the_permalink(), "\">{$city}</a></li>";
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

//temp styles for local dev
echo "<style>.club-table-wrapper{overflow-x:auto;} .club-state {  font-size: 1.5em;  text-align: left;}.club-social {  text-align: center;} .club-phone, .club-contact{white-space:nowrap;} tbody th {  text-align: left;} .fa-facebook-square { font-size: 1.5em;} @media (min-width: 768px) { .club-state { font-size: 2em; } }</style>";
// filter by type


// sort alphabetically by country
// sort alphabetically by city
// display in a table