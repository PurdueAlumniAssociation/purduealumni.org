<?php
function output_news_events( $ids ) {
    if ( isset( $ids ) ) {
        foreach ( $ids as $id ) {
            $title = rwmb_meta( 'title', '', $id );
            $description = rwmb_meta( 'description', '', $id );
            $button_url = rwmb_meta( 'button_url', '', $id );
            $button_label = rwmb_meta( 'button_label', '', $id );
            $button_target = rwmb_meta( 'button_target', '', $id );
            $image = rwmb_meta( 'thumbnail_image', '', $id );

            $target = '';
            if ( isset( $button_target ) && $button_target == true ) {
                $target = ' target="_blank" rel="nofollow"';
            }

            // get image
            $img_src = $image['full_url'];
            $img_alt = $image['alt'];

            $output = "<div class=\"news-event\">
                <img class=\"news-event__image\" src=\"${img_src}\" alt=\"${img_alt}\" />
                <div>
                    <h3 class=\"news-event__title\">${title}</h3>
                    <p class=\"news-event__description\">${description}</p>";

            if ( isset( $button_label ) && !empty( $button_label ) && isset( $button_url ) && !empty( $button_url ) ) {
                $output .= "<a class=\"button\" class=\"news-event__cta\" href=\"${url}\"${target}>${button_label}</a>";
            }

            $output .= "</div>
                </div>";
        }
    } else {
        // fallback
        $output = '';
    }

    echo $output;
}
output_news_events( rwmb_meta( 'homepage__news_events' ) );
