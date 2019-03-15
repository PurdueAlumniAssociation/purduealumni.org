<?php
/*
    Template Name: 150 Objects
*/
get_header();

// page content
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        // loop stuff
        echo "<section class=\"row\">";
        echo "<h1>", the_title(), "</h1>";
        echo "<p>", the_content(), "</p>";
        echo "</section>";

    }
} else {
    get_template_part( 'template-parts/no-posts' );
}

$args = array(
    'post_type' => '150-item',
    'post_status' => 'publish',
    'meta_key' => 'type',
    'meta_value' => 'object',
    'orderby' => 'title',
    'posts_per_page' => -1
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
echo "<section class=\"row row--slim\">";
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo "<div class=\"bootstrap-row p150-card-list\">";
            get_template_part( 'template-parts/150-item-card' );
        echo "</div>";
    }
    wp_reset_postdata();
} else {
    // no objects
    echo "no objects";
}
echo "</section>";
get_footer(); ?>