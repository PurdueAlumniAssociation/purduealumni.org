<?php
/*
    Template Name: 150 Objects
*/
?>
<?php get_header();

$terms = get_terms( '150-category' );

?>
<section class="row row--no-padding" class="banner">
    <video width="1440" height="378" loop="loop" muted="true" autoplay="autoplay" playsinline="playsinline" poster="https://www.purduealumni.org/wp-content/uploads/150-objects_web-banner.jpg" class="banner__video">
        <source src="https://www.purduealumni.org/wp-content/uploads/150-objects_video-banner.mp4" type="video/mp4">
    </video>
</section>
<section class="row row--slim">
    <div class="items-intro">
        <p class="items-intro__tagline">As Purdue University marks its sesquicentennial on May 6, 2019, we share the history of the University — stories both historic and modern — as told through 150 objects.</p>
        <p class="items-intro__credit">Compiled by Kat Braz (LA’01) and Joel Meredith</p>
        <hr class="items-intro__divider" />
    </div>
</section>
<section class="row row--slim">
    <div class="foreward">
        <h2>How did we get here?</h2>
        <p>More than once over the past few months, I’ve exclaimed to any colleagues within earshot at the alumni association office: “This may be the worst idea I have ever had!” The problem is, 150 somehow manages to be a vastly numerous yet hopelessly inadequate number at the same time.<span class="forewardHidden"> Distilling a sesquicentennial into a collection of 150 miscellaneous objects is a formidable and time-consuming task — to say nothing of the intriguing rabbit holes that can hijack entire afternoons and led me to basements and attics and closets and boxes that held all sorts of wondrous things.</span></p>

        <span class="forewardHidden"><p>The winnowed compilation presented on these pages is by no means exhaustive. Nor is it meant to be a comprehensive account of the University’s history. Rather, it’s an assemblage of artifacts that struck me as interesting, whether they commemorate a significant occurrence or influential personage in Purdue’s history or merely invoked my curiosity. The list leans toward my proclivities as editor, which encompass both the nostalgic and the obscure.</p>

        <p>It’s been fascinating to sift through collections public and private in search of meaningful and compelling items to feature. Thank you to everyone who made suggestions, sent along images, or started me off on wild goose chases (one of which led to a peacock!). There are a few individuals to whom I am especially indebted.</p>

        <p>I am grateful to my stalwart copywriter, Joel Meredith, who spent his first few months on the job painstakingly researching and culling an enormous catalog of possibilities. Thanks also to author John Norberg, the quintessential Purdue storyteller, and to collector Pete Bill (A’75, DVM’80, PhD V’90), whose knowledge of enthralling university tidbits is matched only by his enthusiasm for sharing them.</p>

        <p>Lastly, my earnest appreciation for Adriana Harmeyer, archivist for university history at Purdue’s Karnes Archives and Special Collections Research Center and possibly the most amiable person in the world. She answered heaps of questions, imparted expert insight, and facilitated access to some of the University’s most treasured artifacts. Adriana exudes joy in preserving history and educating others about the past. I would not have completed this gargantuan endeavor without her assistance. Any errors are my own.</p>

        <p>This process has been both engrossing and educational. It is my sincere hope that <em>Purdue Alumnus</em> readers find the end result as rewarding as I do. <span style="color:#bababa;">—KAT BRAZ (LA’01)</span></p></span>
        <a href="#" id="readmore">Read More</a>
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

echo '<section class="row row--slim">
    <div class="bootstrap-row">';
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part( 'template-parts/150-item-card' );
    }
} else {
    get_template_part( 'template-parts/no-posts' );
}
echo "</div>
</section>";

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
                    <img src="https://www.purduealumni.org/wp-content/uploads/150-objects_alumnus.jpg" alt="Purdue Alumnus magazine cover" />
                </div>
                <div class="p150-item-detail__content-container">
                    <h3 class="p150-item-detail__title">Want more Purdue history?</h3>
                    <div class="p150-item-detail__description">
                        <p>Join the Purdue Alumni Association today and get the next issue delivered straight to your door.</p>
                        <p>We have two more special sesquicentennial issues coming up.</p>
                        <p>Don’t miss out. <a href="https://www.purduealumni.org/membership/membership-plans" id="alumnus-150-join">Join today</a>.</p>
                    </div>
                </div>
            </div>
            <div class="p150-item-detail__nav">
                <a class="p150-item-detail__previous" href="#"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
                <a class="p150-item-detail__next" href="#">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>