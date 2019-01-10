<?php
function output_graphic_boxes( $ids ) {
    $colors = array( "green", "orange", "dark-gray" );
    $color_index = 0;
    $output = '';

    if ( $ids ) {
        $output = "<section class=\"row row--no-padding front-page__graphic-boxes\">\n
                <div class=\"big-info-block\">\n
                    <div class=\"big-info-block__row\">\n";

        foreach( $ids as $id ) {
            $title = rwmb_meta( 'title', '', $id );
            $cut_line = rwmb_meta( 'cut_line', '', $id );
            $url = rwmb_meta( 'url', '', $id );
            $new_tab = rwmb_meta( 'new_tab', '', $id );
            $background_image = rwmb_meta( 'background_image', '', $id );
            $color = $colors[$color_index];

            $target = '';
            if ( isset( $target ) && $target == true ) {
                $target = " target=\"_blank\" rel=\"nofollow\"";
            }

            // get image
            $img_src = $background_image['full_url'];

            $output .= "<a class=\"big-info-block__third-box\"${target} href=\"${url}\">
                <div class=\"graphic-box graphic-box--${color}\" style=\"background-image: url('${img_src}')\">
                    <div class=\"graphic-box__content\">
                        <span class=\"graphic-box__category graphic-box__category--${color}\">${title}</span>
                        <span class=\"graphic-box__title\">${cut_line}</span>
                    </div>
                </div>
            </a>";

            $color_index++;
        }
        $output .= "</div>\n
            </div>\n
        </section>\n";
    } else {
        // fallback
        $output = '';
    }

    echo $output;
}
output_graphic_boxes( rwmb_meta( 'homepage__graphic_boxes' ) );
