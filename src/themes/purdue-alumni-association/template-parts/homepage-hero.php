<?php
$hero_banner_id = rwmb_meta( 'homepage__hero_banner' );

if ( $hero_banner_id ) {
    $hero_heading = rwmb_meta( 'heading', '', $hero_banner_id );
    $hero_content = rwmb_meta( 'content', '', $hero_banner_id );
    $hero_button_url = rwmb_meta( 'button_url', '', $hero_banner_id );
    $hero_button_label = rwmb_meta( 'button_label', '', $hero_banner_id );
    $hero_button_target = rwmb_meta( 'button_target', '', $hero_banner_id );
    $hero_background_image = rwmb_meta( 'background_image', $hero_banner_id );
    $hero_background_options = rwmb_meta( 'background_options', '', $hero_banner_id );

    $dark_overlay = '';
    if ( isset( $hero_background_options ) && in_array( 'dark', $hero_background_options ) {
        $dark_overlay = "<div class=\"homepage-hero__dark-layer\"></div>\n";
    }

    $target = '';
    if ( isset( $hero_button_target ) ) {
        $target = " target=\"${hero_button_target}\"";

        if ( $hero_button_target == "_blank" ) {
            $target .= " rel=\"noopener\"";
        }
    }

    // get image
    $hero_img_src = $hero_background_image['full_url'];
    $hero_img_alt =  $hero_background_image['alt'];

    echo "<section class=\"row row--no-padding\">
            <div class=\"homepage-hero\">
                <img class=\"homepage-hero__image\" src=\"{$hero_img_src}\" alt=\"${$hero_img_alt}\" />
                {$dark_overlay}
                <div class=\"homepage-hero__content-container\">
                    <div class=\"homepage-hero__primary\">
                        <h1>{$hero_heading}</h1>";

    if ( isset( $hero_button_label ) && isset( $hero_button_url ) ) {
                   echo "<a class=\"button button--gold\" href=\"{$hero_url}\"{$target}>{$hero_button_label}</a>";
    }

    if ( isset( $hero_content ) ) {
                   echo "<p>{$hero_content}</p>";
    }
    echo "          </div>
                </div>
            </div>
        </section>";
} else {
    // fallback
}