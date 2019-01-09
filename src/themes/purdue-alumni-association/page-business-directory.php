<?php
/*
    Template Name: Business Directory
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            $image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);
            ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="<?= $image_alt ?>" />
            </section>
<?php } ?>
    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
        <section class="row">
            <div class="layout">
                <div class="layout__main">
                    <main class="" id="main" tabindex="-1">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </main>
                </div>
                <aside class="layout__sidebar">
                    <?php dynamic_sidebar( 'left-sidebar' ); ?>
                </aside>
            </div>
        </section>
    <?php else : ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
                    // query
                    $the_query = new WP_Query(array(
                        'post_type'         => 'business-listing',
                        'posts_per_page'    => -1,
                        'orderby'           => 'title',
                        'order'             => 'ASC'
                    ));

                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();

                            $title = get_the_title();
                            $listing_type = rwmb_meta( 'listing_type' );
                            $contact_name = rwmb_meta( 'contact_name' );
                            $contact_email = rwmb_meta( 'contact_email' );
                            $website = rwmb_meta( 'website' );
                            $logo = rwmb_meta( 'logo' );

                            echo "<div class=\"directory-listing\">";

                            if ( $listing_type == "Advanced" ) {
                                echo "<img src=\"${logo['full_url']}\" alt=\"${logo['alt']}\"  class=\"directory-listing__logo\" />";
                            }

                            echo "<h3 class=\"directory-listing__title\">${title}</h3>
                                <p><span class=\"directory-listing__name\">${contact_name}</span> - <span class=\"directory-listing__email\"><a href=\"mailto:${contact_email}\">${contact_email}</a></span></p>";

                            if ( $listing_type == "Advanced" ) {
                                echo "<p class=\"directory-listing__website\"><a href=\"${website}\">${website}</a></p>";
                            }

                            echo "</div>";
                        }
                    } else {
                        echo "<p>No businesses found!</p>";
                    }
                    ?>
            </main>
        </section>
    <?php endif; ?>
<?php endwhile; else : ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php endif; ?>
<?php get_footer(); ?>