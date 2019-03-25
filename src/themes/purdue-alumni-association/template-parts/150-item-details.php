<?php
setup_postdata( $post );

$next_item = get_query_var( "next-item-id" );
$prev_item = get_query_var( "prev-item-id" );

// if ( isset($next_item) && isset($prev_item) ) {
//     if ( $next_item != $prev_item ) {
//         $next_item, $prev_item );
//     }
// }
?>
<div class="p150-item-detail">
    <div class="p150-item-detail__flex">
        <div class="p150-item-detail__image-container">
            <?= get_the_post_thumbnail(
                $post_id,
                'Medium-Large',
                array(
                    'class' => 'p150-item-detail__image',
                    'width' => '500',
                    'height' => '500'
                )
            ); ?>
            <p class="p150-item-detail__image-credit"><i class="fas fa-camera"></i><?=  rwmb_meta( '150_item_photo_credit' ); ?></p>
        </div>
        <div class="p150-item-detail__content-container">
            <h3 class="p150-item-detail__title"><?= the_title(), " next:", $next_item ?></h3>
            <div class="p150-item-detail__description">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
    <!-- <div class="p150-item-detail__mobile-nav">
        <a class="p150-item-detail__previous" href="#"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
        <a class="p150-item-detail__next" href="#">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
    </div> -->
</div>