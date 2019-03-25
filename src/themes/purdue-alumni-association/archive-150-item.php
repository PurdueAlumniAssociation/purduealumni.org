<?php
/**
 * The template for displaying archive of 150 items
 */
?>
<?php get_header();

$taxonomy = '150-category';
$terms = get_terms($taxonomy);

?>
<section class="row">
    <h1>150 Objects</h1>
    <select id="category-select">
        <option value="all">All</option>
        <?php foreach( $terms as $category ) { ?>
            <option value="<?= $category->slug ?>"><?= $category->name ?></option>
        <?php } ?>
    </select>
</section>
<?php

// get GET param called trip-year or default to 'all' if none present
//$filter_year = get_query_var( 'item-type', 'objects' );

// query
$the_query = new WP_Query(array(
   'post_type'         => '150-item',
   'posts_per_page'    => -1,
   'orderby'           => 'title',
   'order'             => 'ASC'
));

echo "<section class=\"row row--slim bootstrap-row\">";
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        // $counter = 0;
        // while ( $counter < 25 ) {
            get_template_part( 'template-parts/150-item-card' );
        //     $counter++;
        // }
    }
} else {
    get_template_part( 'template-parts/no-posts' );
}
echo "</section>";
?>
<?php get_footer(); ?>