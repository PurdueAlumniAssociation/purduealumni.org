<?php
$hero_banner_id = rwmb_meta( 'homepage__hero_banner' );

if ( $hero_banner_id ) {
    //echo print_r( $hero_banner_id );
    $hero_heading = rwmb_meta( 'hero_banner__heading', '', $hero_banner_id );
    $hero_content = rwmb_meta( 'hero_banner__content', '', $hero_banner_id );
    $hero_url = rwmb_meta( 'hero_banner__url', '', $hero_banner_id );
    $hero_button_label = rwmb_meta( 'hero_banner__button_label', '', $hero_banner_id );
    $hero_new_tab = rwmb_meta( 'hero_banner__new_tab', '', $hero_banner_id );
    $hero_background_image = rwmb_meta( 'hero_banner__background_image', array( 'limit' => 1 ), $hero_banner_id );
    $hero_dark_overlay = rwmb_meta( 'hero_banner__dark_overlay', '', $hero_banner_id );

    $dark_overlay = '';
    if ( $hero_dark_overlay ) {
        $dark_overlay = "<div class=\"homepage-hero__dark-layer\"></div>\n";
    }

    $target = '';
    if ( $hero_new_tab ) {
        $target = ' target="_blank" rel="noopener"';
    }

    // get image
    $image = $hero_background_image[0];
    $img_src = $image['full_url'];

    echo "<section class=\"row row--no-padding\">
            <div class=\"homepage-hero\">
                <img class=\"homepage-hero__image\"{$target} src=\"{$img_src}\" />
                {$dark_overlay}
                <div class=\"homepage-hero__content-container\">
                    <div class=\"homepage-hero__primary\">
                        <h1>{$hero_heading}</h1>
                        <a class=\"button button--gold\" href=\"{$hero_url}\">{$hero_button_label}</a>
                        <p>{$hero_content}</p>
                    </div>
                </div>
            </div>
        </section>";
} else {
    // fallback hero

}