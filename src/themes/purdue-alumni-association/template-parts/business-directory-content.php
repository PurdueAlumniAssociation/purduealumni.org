<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php

    // $standard_listings_post_ids = array();
    // $premium_listings_post_ids = array();
    //
    // // query
    // $the_query = new WP_Query(array(
    //     'post_type'         => 'biz-dir-listing'//,
    //     // 'posts_per_page'    => -1,
    //     // 'orderby'           => 'title',
    //     // 'order'             => 'ASC',
    //     // 'post_status'       => 'publish'
    // ));
    //
    // // echo $the_query->found_posts;
    //
    // if ( $the_query->have_posts() ) {
    //     while ( $the_query->have_posts() ) {
    //         $the_query->the_post();
    //
    //         $listing_type = rwmb_meta( 'listing_type' );
    //
    //         if ( $listing_type == "Standard" ) {
    //             $standard_listings_post_ids[] = get_the_ID();
    //         } else { // $listing_type == "Premium"
    //             $premium_listings_post_ids[] = get_the_ID();
    //         }
    //     }
    // } else {
    //     echo "<p>No businesses found!</p>";
    // }

    // echo "standard: <pre>", print_r( $standard_listing_post_ids ), "</pre><br />";
    // echo "premium: <pre>", print_r( $premium_listings_post_ids ), "</pre><br />";

    $premium_listings = get_posts( $premium_listings_post_ids );

    // output any Premium listings here
    $premium_args = array(
        'post_type'         => 'biz-dir-listing',
        'posts_per_page'    => -1,
        'orderby'           => 'title',
        'order'             => 'ASC',
        'post_status'       => 'publish',
        'meta_query'        => array(
            array(
                'key'   => 'listing_type',
                'value' => 'Premium'
            )
        )
    );

    $premium_listings = get_posts( $premium_args );

    //echo "<pre>", print_r($premium_listings), "</pre>";

    foreach( $premium_listings as $listing ) {
        setup_postdata( $post );

        $title = $listing->post_title;
        $contact_name = rwmb_meta( 'contact_name', '', $listing->ID );
        $contact_email = rwmb_meta( 'contact_email', '', $listing->ID );
        $contact_phone = rwmb_meta( 'contact_phone', '', $listing->ID );

        $listing_street = rwmb_meta( 'listing_street', '', $listing->ID );
        $listing_city = rwmb_meta( 'listing_city', '', $listing->ID );
        $listing_state = rwmb_meta( 'listing_state', '', $listing->ID );
        $listing_zip = rwmb_meta( 'listing_zip', '', $listing->ID );

        $listing_email = rwmb_meta( 'listing_email', '', $listing->ID );
        $listing_phone = str_replace( array('(',') '), array('','-'), rwmb_meta( 'listing_phone', '', $listing->ID ) );

        $listing_website = rwmb_meta( 'listing_website', '', $listing->ID );
        //$listing_logo = rwmb_meta( 'listing_logo' );
        $listing_logo_url = rwmb_meta( 'listing_logo', '', $listing->ID );

        $listing_categories = get_the_terms( $listing->ID, 'biz-dir-category', '', $listing->ID ); // array of categories
    ?>
        <ul>
            <li><?= $title ?></li>
            <li><?= $contact_name ?></li>
            <li><?= $contact_email ?></li>
            <li><?= $contact_phone ?></li>
            <li><?= $listing_street ?></li>
            <li><?= $listing_city ?></li>
            <li><?= $listing_state ?></li>
            <li><?= $listing_zip ?></li>
            <li><?= $listing_email ?></li>
            <li><?= $listing_phone ?></li>
            <li><?= $listing_website ?></li>
            <li><?= $listing_logo_url ?></li>
            <li>Categories: <pre><?= print_r($listing_categories) ?></pre></li>
        </ul>
        <hr />
    <?php
    }
    wp_reset_postdata();

    // output and Standard listings here
    ?>