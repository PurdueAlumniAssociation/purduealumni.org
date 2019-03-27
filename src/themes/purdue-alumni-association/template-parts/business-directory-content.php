<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php

    // get Premium listings
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

    // output Premium listings
    if ( count( $premium_listings ) > 0 ) {
        echo "<div class=\"bootstrap-row business-directory-listing-container\">";
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
            $listing_logo_url = rwmb_meta( 'listing_logo', '', $listing->ID );

            // $listing_categories = get_the_terms( $listing->ID, 'biz-dir-category', '', $listing->ID ); // array of categories
        ?>
            <div class="business-directory-listing business-directory-listing--premium">
                <div class="business-directory-listing__logo-container">
                    <img class="business-directory-listing__logo" src="<?= $listing_logo_url ?>" />
                </div>
                <div class="business-directory-listing__text-container">
                    <h3 class="business-directory-listing__heading"><?= $title ?></h3>
                    <p class="business-directory-listing__address"><?= "{$listing_street}, {$listing_city}, {$listing_state} $listing_zip" ?></p>
                    <?php if ( ! empty($listing_email) ) { ?>
                         <p class="business-directory-listing__email"><a href="mailto:<?= $listing_email ?>"><?= $listing_email ?></a></p>
                    <?php } ?>
                    <?php if ( ! empty($listing_phone) ) { ?>
                        <p class="business-directory-listing__phone-number"><?= $listing_phone ?></p>
                    <?php } ?>
                    <?php if ( ! empty($listing_website) ) { ?>
                        <p class="business-directory-listing__button"><a href="<?= $listing_website ?>" target="_blank" class="button">Website</a></p>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();

        echo "</div>";
    }

    // get Standard listings
    $standard_args = array(
        'post_type'         => 'biz-dir-listing',
        'posts_per_page'    => -1,
        'orderby'           => 'title',
        'order'             => 'ASC',
        'post_status'       => 'publish',
        'meta_query'        => array(
            array(
                'key'   => 'listing_type',
                'value' => 'Standard'
            )
        )
    );
    $standard_listings = get_posts( $standard_args );

    // output Standard listings
    if ( count( $standard_listings ) > 0 ) {
        echo "<div class=\"bootstrap-row business-directory-listing-container\">";
        foreach( $standard_listings as $listing ) {
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

            // $listing_categories = get_the_terms( $listing->ID, 'biz-dir-category', '', $listing->ID ); // array of categories
        ?>
            <div class="business-directory-listing">
                <h3 class="business-directory-listing__heading"><?= $title ?></h3>
                <p class="business-directory-listing__address"><?= "{$listing_street} {$listing_city}, {$listing_state} $listing_zip" ?></p>
                <p class="business-directory-listing__email"><a href="mailto:<?= $listing_email ?>"><?= $listing_email ?></a></p>
                <p class="business-directory-listing__phone-number"><?= $listing_phone ?></p>
            </div>
        <?php
        }
        wp_reset_postdata();

        // add empty div to align last row items better
        if ( count( $standard_listings ) % 3 == 2 ) {
            echo '<div class="business-directory-listing business-directory-listing--empty"></div>';
        }

        echo "</div>";
    }
    ?>