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
    ),
    'orderby' => array(
        'query_community_state' => 'ASC'
    )
);
$the_query = new WP_Query( $args );
$old_state = "";
// The Loop
if ( $the_query->have_posts() ) {
    echo '<div class="club-table-wrapper"><table class="club-table" cellspacing="5" cellpadding="5"><caption class="sr-only">Purdue Alumni Association Clubs by State</caption>';
    while ( $the_query->have_posts() ) {

        $the_query->the_post();
        $community_id = get_the_ID();
        $state = rwmb_meta( 'community__state' );
        $city = rwmb_meta( 'community__city' );

        //check for new state
        if ($old_state != $state) {
            echo "<tr><th id=\"{$state}\" class=\"club-state\" colspan=\"0\" scope=\"colgroup\">{$state}</th></tr>";
            $old_state = $state;
        }

        echo "<tr><th id=\"{$city}\" headers=\"{$state}\"><a href=\"", get_the_permalink(), "\">{$city}</a></th></tr>";
    }
    echo '</table></div>';
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