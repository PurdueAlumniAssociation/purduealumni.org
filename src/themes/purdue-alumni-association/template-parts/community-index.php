<?php

// set type
$type = get_post_meta( get_the_ID(), 'community_index_type', true );


if ($type == "club") {
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
            'query_community_state' => 'ASC',
            'post_title' => 'ASC',
        ),
    );
} elseif ($type == "international") {
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
            'query_community_country' => array(
                'key' => 'community__country',
                'compare' => 'EXISTS', // Optional
            ),
        ),
        'orderby' => array(
            'query_community_country' => 'ASC',
            'post_title' => 'ASC',
        ),
    );
} elseif ($type == "affinity") {
    $args = array(
        'post_type' => 'community',
        'post_status' => 'any',
        'posts_per_page' => -1,
        'nopaging' => true,
        'meta_key' => 'community__type',
        'meta_value' => 'affinity',
        'orderby' => 'post_title',
        'order' => 'ASC',
    );
}

$the_query = new WP_Query( $args );
$old_location = "";
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {

        $the_query->the_post();
        $community_id = get_the_ID();

        if ($type == "club" || $type == "international") {
            if ($type == "club") {
                $location = rwmb_meta( 'community__state' );
            } elseif ($type == "international") {
                $location = rwmb_meta( 'community__country' );
            }

            //check for new location
            if ($old_location != $location) {
                if ($old_location != "" ) {
                    echo "</ul></li>";
                }
                echo "<li>${location}<ul>";
                $old_location = $location;
            }

            echo "<li><a href=\"", get_the_permalink(), "\">", get_the_title(), "</a></li>";
        } elseif ($type == "affinity") {
            echo "<li><a href=\"", get_the_permalink(), "\">", get_the_title(), "</a></li>";
        }
    }
    echo '</ul>';
} else {
    // no posts found
}

wp_reset_postdata();