<?php
function output_graphic_boxes( $ids ) {
    $colors = array( "", "gold", "dark-gray" );
    $color_index = 0;
    $output = '';

    if ( $ids ) {
        // $output = "<section class=\"row row--no-padding front-page__graphic-boxes\">\n
        //         <div class=\"big-info-block\">\n
        //             <div class=\"big-info-block__row bootstrap-row\" style=\"margin-left: 0; margin-right: 0;\">\n";
        $output = "<section class=\"row bootstrap-row row--no-padding front-page__graphic-box-row\">\n";

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

            $output .= "<a class=\"col-xs-12 col-md-4 front-page__graphic-box-wrapper\"${target} href=\"${url}\">
                <div class=\"graphic-box graphic-box--${color}\" style=\"background-image: url('${img_src}')\">
                    <div class=\"graphic-box__content\">
                        <span class=\"graphic-box__category graphic-box__category--${color}\">${title}</span>
                        <span class=\"graphic-box__title\">${cut_line}</span>
                    </div>
                </div>
            </a>";

            $color_index++;
        }
        $output .= "</section>\n";
    } else {
        // fallback
        $output = '';
    }

    echo $output;
}
output_graphic_boxes( rwmb_meta( 'graphic_boxes' ) );
