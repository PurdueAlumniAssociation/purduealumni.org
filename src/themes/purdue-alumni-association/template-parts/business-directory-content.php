<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php

    $standard_listing_post_ids = array();
    $premium_listings_post_ids = array();

    // query
    $the_query = new WP_Query(array(
        'post_type'         => 'biz-dir-listing',
        'posts_per_page'    => -1,
        'meta_key'          => 'listing_heading',
        'orderby'           => 'meta_value',
        'order'             => 'ASC'
    ));

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $listing_type = rwmb_meta( 'listing_type' );

            if ( $listing_type == "Standard" ) {
                $standard_listing_post_ids[] = get_the_ID();
            } else { // $listing_type == "Premium"
                $premium_listings_post_ids[] = get_the_ID();
            }
        }
    } else {
        echo "<p>No businesses found!</p>";
    }

    // output any Premium listings here
    $premium_listings = get_posts( $premium_listings_post_ids );
    foreach( $premium_listings as $listing ) {
        $title = get_the_title();
        $contact_name = rwmb_meta( 'contact_name' );
        $contact_email = rwmb_meta( 'contact_email' );
        $contact_phone = rwmb_meta( 'contact_phone' );

        $listing_street = rwmb_meta( 'listing_street' );
        $listing_city = rwmb_meta( 'listing_city' );
        $listing_state = rwmb_meta( 'listing_state' );
        $listing_zip = rwmb_meta( 'listing_zip' );

        $listing_email = rwmb_meta( 'listing_email' );
        $listing_phone = rwmb_meta( 'listing_phone' );

        $listing_website = rwmb_meta( 'listing_website' );
        $listing_logo = rwmb_meta( 'listing_logo' );

        $listing_categories = get_the_terms( get_the_ID(), 'biz-dir-category' ); // array of categories
    ?>
        <div class="business-directory-listing">
            <img src="<?= $listing_logo['full_url'] ?>" alt="<?= $listing_logo['alt'] ?>" class="directory-listing__logo" />
            <h3 class="directory-listing__title"><?= $title ?></h3>
            <p><span class="directory-listing__name"><?= $contact_name ?></span> - <span class="directory-listing__email"><a href="mailto:<?= $contact_email ?>"><?= $contact_email ?></a></span></p>
            <p class="directory-listing__website"><a href="<?= $website ?>"><?= $website ?></a></p>
        </div>
    <?php
    }
    wp_reset_postdata();

    // output and Standard listings here
    ?>