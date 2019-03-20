<?php
setup_postdata( $post );
// print_r($item);
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
            <h3 class="p150-item-detail__title"><?= the_title() ?></h3>
            <div class"p150-item-detail__description">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
    <!-- <div class="p150-item-detail__mobile-nav">
        <a class="p150-item-detail__previous" href="#"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
        <a class="p150-item-detail__next" href="#">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
    </div> -->
</div>