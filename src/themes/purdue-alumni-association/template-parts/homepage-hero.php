<?php
function output_hero_banner( $id ) {
    if ( isset( $id ) ) {
        $heading = rwmb_meta( 'heading', '', $id );
        $content = rwmb_meta( 'content', '', $id );
        $button_url = rwmb_meta( 'button_url', '', $id );
        $button_label = rwmb_meta( 'button_label', '', $id );
        $button_target = rwmb_meta( 'button_target', '', $id );
        $background_image = rwmb_meta( 'background_image', '', $id );
        $background_options = rwmb_meta( 'background_options', '', $id );

        $dark_overlay = '';
        if ( isset( $background_options ) && in_array( 'dark', $background_options ) ) {
            $dark_overlay = "<div class=\"homepage-hero__dark-layer\"></div>\n";
        }

        $target = '';
        if ( isset( $button_target ) && $button_target == true ) {
            $target = " target=\"_blank\" rel=\"nofollow\"";
        }

        // get image
        $img_src = $background_image['full_url'];
        $img_alt = $background_image['alt'];
        $img_srcset = $background_image['srcset'];

        // build output
        $output = "<section class=\"row row--no-padding\">
                <div class=\"homepage-hero\">
                    <img class=\"homepage-hero__image\" srcset=\"${img_srcset} 320w,
                    ${img_srcset} 360w,
                    ${img_srcset} 375w,
                    ${img_srcset} 411w,
                    ${img_srcset} 414w,
                    ${img_srcset} 768w,
                    ${img_srcset} 800w,
                    ${img_srcset} 1024w,
                    ${img_srcset} 1600w,
                    ${img_srcset} 1920w,
                    ${img_srcset} 2400w\" src=\"${img_src}\" alt=\"${img_alt}\" />
                    ${dark_overlay}
                    <div class=\"homepage-hero__content-container\">
                        <div class=\"homepage-hero__primary\">
                            <h2 class=\"homepage-hero__title\">${heading}</h2>";

        if ( isset( $button_label ) && !empty( $button_label ) && isset( $button_url ) && !empty( $button_url ) ) {
            $output .= "<a class=\"button button--gold\" href=\"${button_url}\"${target}>${button_label}</a>";
        }

        if ( isset( $content ) ) {
            $output .= "<p>${content}</p>";
        }

        $output .=     "</div>
                    </div>
                </div>
            </section>";
    } else {
        // fallback
        $output = '';
    }

    echo $output;
}
output_hero_banner( rwmb_meta( 'hero_banner' ) );
