<?php
/**
 * The template for displaying archive of 150 items
 */
?>
<?php get_header();

$taxonomy = '150-category';
$terms = get_terms($taxonomy);

?>
<section class="row row--no-padding">
    <img class="alignnone size-full wp-image-2395 banner" src="https://dev.purduealumni.org/wp-content/uploads/web-banner_150-objects.jpg" srcset="<?= wp_get_attachment_image_srcset(2395) ?>" alt="Object Permanence" width="1440" height="355" />
</section>
<section class="row row--slim">
    <div class="items-intro">
        <p class="items-intro__tagline">As Purdue University marks its sesquicentennial on May 6, 2019, we share the history of the University — stories both historic and modern — as told through 150 objects.</p>
        <p class="items-intro__credit">Compiled by Kat Braz (LA’01) and Joel Meredith</p>
        <hr class="items-intro__divider" />
    </div>
</section>
<section class="row" style="padding-bottom: .3em; text-align: right;">
    <h1 class="sr-only">150 Objects</h1>
    <label for="category-select">Filter: </label>
    <select id="category-select">
        <option value="all">All</option>
        <?php foreach( $terms as $category ) { ?>
            <option value="<?= $category->slug ?>"><?= $category->name ?></option>
        <?php } ?>
    </select>
</section>
<?php

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
        get_template_part( 'template-parts/150-item-card' );
    }
} else {
    get_template_part( 'template-parts/no-posts' );
}
echo "</section>";
?>
<?php get_footer(); ?>