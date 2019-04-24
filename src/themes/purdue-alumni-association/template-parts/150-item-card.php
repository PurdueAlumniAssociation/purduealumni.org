<?php
setup_postdata( $post );

$item_terms = wp_get_post_terms( get_the_ID(), '150-category', array( 'fields' => 'slugs' ) );
$data_categories_string = implode( " ", $item_terms );
$image = rwmb_meta( '150_item_thumbnail' );

echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3 card-container\" data-150-categories=\"{$data_categories_string}\" data-object-id=\"".get_the_ID()."\" aria-labelledby=\"".get_the_ID()."-card-title\">
    <a href=\"".get_the_permalink()."\" class=\"card card--150-item card--fadeinup\">
        <img class=\"card__image lazy\" src=\"https://www.purduealumni.org/wp-content/uploads/PAlogo_V_Black_Web100.jpg\" data-src=\"{$image['full_url']}\" data-srcset=\"{$image['full_url']} 1x\" alt=\"{$image['alt']}\" width=\"300\" height=\"300\">
        <div class=\"card__content card__content--150-item\">
            <h3 class=\"card__title card__title--150-item\" id=\"".get_the_ID()."-card-title\">".get_the_title()."</h3>
        </div>
    </a>
</div>";
