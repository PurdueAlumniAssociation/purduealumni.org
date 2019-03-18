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
    'post_type' => 'biz-dir-listing',
    'post_status' => 'publish',
    //'meta_key' => 'type',
    //'meta_value' => 'object',
    'orderby' => 'title',
    'posts_per_page' => -1
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
echo "<section id=\"ajax-posts\" class=\"row row--slim\">";
if ( $the_query->have_posts() ) {
    echo "<div class=\"bootstrap-row p150-card-list\">";
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part( 'template-parts/150-item-card' );
    }
    echo "</div>";
    wp_reset_postdata();
} else {
    // no objects
    echo "no objects";
}
echo "</section>";

// add template for lightbox
?>
<input type="hidden" id="totalpages" value="<?= $loop->max_num_pages ?>">
<div id="more_posts">Load More</div>
<? get_footer(); ?>