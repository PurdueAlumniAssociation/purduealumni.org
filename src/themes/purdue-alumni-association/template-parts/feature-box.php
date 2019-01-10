<?php
function output_feature_box( $id ) {
    if ( isset( $id ) ) {
        $title = rwmb_meta( 'title', '', $id );
        $content = rwmb_meta( 'content', '', $id );
        $button_label = rwmb_meta( 'button_label', '', $id );
        $button_url = rwmb_meta( 'button_url', '', $id );
        $button_target = rwmb_meta( 'button_target', '', $id );
        $image = rwmb_meta( 'image', '', $id );

        $target = '';
        if ( isset( $button_target ) && $button_target == true ) {
            $target = ' target="_blank" rel="noopener"';
        }

        // get image
        $img_src = $image['full_url'];
        $img_alt = $image['alt'];

        $output = "<aside class=\"feature-box\">
                <img class=\"feature-box__image\" src=\"${img_src}\" alt=\"${img_alt}\">
                <div class=\"feature-box__content\">
                    <p class=\"feature-box__text\">${content}</p>";

        if ( isset( $button_label ) && !empty( $button_label ) && isset( $button_url ) && !empty( $button_url ) ) {
            $output .= "<p><a class=\"button button--almost-black\" href=\"${button_url}\"${target}>${button_label}</a></p>";
        }

        $output .= "</div>
            </aside>";
    } else {
        // fallback
        $output = '';
    }

    echo $output;
}
output_feature_box( rwmb_meta( 'homepage__feature_box' ) );
