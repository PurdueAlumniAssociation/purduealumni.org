<?php
$graphic_box_ids = rwmb_meta( 'homepage__graphic_boxes' );

if ( $graphic_box_ids ) {
    $graphic_box_colors = array( "green", "orange", "dark-gray" );
    $color_index = 0;

    echo "<section class=\"row row--no-padding front-page__graphic-boxes\">\n
            <div class=\"big-info-block\">\n
                <div class=\"big-info-block__row\">\n";

    foreach( $graphic_box_ids as $box_id ) {
        $box_title = rwmb_meta( 'graphic_box__title', '', $box_id );
        $box_cut_line = rwmb_meta( 'graphic_box__cut_line', '', $box_id );
        $box_url = rwmb_meta( 'graphic_box__url', '', $box_id );
        $box_new_tab = rwmb_meta( 'graphic_box__new_tab', '', $box_id );
        $box_background_image = rwmb_meta( 'graphic_box__background_image', array( 'limit' => 1 ), $box_id );
        $color = $graphic_box_colors[$color_index];

        $target = '';
        if ( $hero_new_tab ) {
            $target = ' target="_blank" rel="noopener"';
        }

        // get image
        $image = $box_background_image[0];
        $img_src = $image['full_url'];

        echo "<a class=\"big-info-block__third-box\"{$target} href=\"{$box_url}\">
            <div class=\"graphic-box graphic-box--{$color}\" style=\"background-image: url('{$img_src}')\">
                <div class=\"graphic-box__content\">
                    <span class=\"graphic-box__category graphic-box__category--{$color}\">{$box_title}</span>
                    <span class=\"graphic-box__title\">{$box_cut_line}</span>
                </div>
            </div>
        </a>";
        $color_index++;
    }
    echo "</div>\n
        </div>\n
    </section>\n";
}