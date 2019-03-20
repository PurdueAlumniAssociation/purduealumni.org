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
    'meta_key' => '150_item_type',
    'meta_value' => 'object',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => 10
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
echo "<section id=\"ajax-posts\" class=\"row row--slim bootstrap-row\">";
if ( $the_query->have_posts() ) {
    $max_num_pages = $the_query->max_num_pages;
    //echo "<div class=\"bootstrap-row p150-card-list\">";
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $counter = 0;
        while ($counter < 8) {
            get_template_part( 'template-parts/150-item-card' );
            $counter++;
        }
        // echo "<h3>", the_title(), "</h3>";
    }
    //echo "</div>";
    wp_reset_postdata();
} else {
    // no objects
    echo "no objects";
}
echo "</section>";

// add template for lightbox
?>
<input type="hidden" id="totalpages" value="<?= $max_num_pages ?>">
<?php get_footer(); ?>