<?php
/*
    Template Name: 150 Objects
*/
?>
<?php get_header();

$terms = get_terms( '150-category' );

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
add_filter('posts_fields', 'paa_create_temp_column'); // Add the temporary column filter
add_filter('posts_orderby', 'paa_sort_by_temp_column'); // Add the custom order filter

// query
$the_query = new WP_Query(array(
   'post_type'         => '150-item',
   'posts_per_page'    => -1,
   'orderby'           => 'title',
   'order'             => 'ASC'
));

remove_filter('posts_fields','paa_create_temp_column'); // Remove the temporary column filter
remove_filter('posts_orderby', 'paa_sort_by_temp_column'); // Remove the temporary order filter

echo '<section class="row row--slim bootstrap-row">';
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part( 'template-parts/150-item-card' );
    }
} else {
    get_template_part( 'template-parts/no-posts' );
}
echo "</section>";

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part( 'template-parts/150-item-lightbox' );
    }
}


?>
<div class="p150-lightbox-background p150-lightbox-background--membership" data-lightbox-id="99999">
    <div class="p150-lightbox">
        <a href="#" class="p150-lightbox__close-button"><i class="fas fa-times" aria-hidden></i><span class="sr-only">close</span></a>
        <div class="p150-item-detail">
            <div class="p150-item-detail__flex">
                <div class="p150-item-detail__image-container">
                    <img src="http://via.placeholder.com/500x500" />
                </div>
                <div class="p150-item-detail__content-container">
                    <h3 class="p150-item-detail__title">Want more Purdue history?</h3>
                    <div class="p150-item-detail__description">
                        <p>Join the Purdue Alumni Association today and get the next issue delivered straight to your door.</p>
                        <p>We have two more special sesquicentennial issues coming up.</p>
                        <p>Don’t miss out. <a href="https://www.purduealumni.org/membership/membership-plans">Join today</a>.</p>
                    </div>
                </div>
            </div>
            <div class="p150-item-detail__mobile-nav">
                <a class="p150-item-detail__previous" href="#"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
                <a class="p150-item-detail__next" href="#">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>