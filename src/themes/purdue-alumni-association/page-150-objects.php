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
    'post_type' => 'post',
    //'meta_key' => 'type',
    //'meta_value' => 'object',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => 10
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
echo "<section id=\"ajax-posts\" class=\"row row--slim\">";
if ( $the_query->have_posts() ) {
    $max_num_pages = $the_query->max_num_pages;
    //echo "<div class=\"bootstrap-row p150-card-list\">";
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        //get_template_part( 'template-parts/150-item-card' );
        echo "<h3>",the_title(),"</h3>";
    }
    //echo "</div>";
    wp_reset_postdata();
} else {
    // no objects
    echo "no objects";
}
echo "<style>.loader {
  border: 5px solid #f3f3f3;
  border-top: 5px solid #555;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
  margin: auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}</style>";
echo "</section>";

// add template for lightbox
?>
<input type="hidden" id="totalpages" value="<?= $max_num_pages ?>">
<!-- <div id="more_posts">Load More</div> -->
<? get_footer(); ?>