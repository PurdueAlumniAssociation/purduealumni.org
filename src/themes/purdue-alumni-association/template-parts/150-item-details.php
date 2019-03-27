<?php
setup_postdata( $post );

$item_ids = get_query_var( "item-ids" );

$item_array = explode( ",", $item_ids );

$current_index = array_search( get_the_ID(), $item_array );

if ( $current_index - 1 >= 0 ) {
    $prev_id = $item_array[ $current_index - 1 ];
} else {
    $prev_id = $item_array[ count($item_array) - 1 ];
}

if ( $current_index + 1 <= count($item_array) - 1 ) {
    $next_id = $item_array[ $current_index + 1 ];
} else {
    $next_id = $item_array[0];
}

$showNav = false;
if ( $next_id != $prev_id ) {
    $showNav = true;
}

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
            <div class="p150-item-detail__description">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
    <?php if ( $showNav ) { ?>
        <div class="p150-item-detail__mobile-nav">
            <a class="p150-item-detail__previous" data-featherlight="ajax" href="<?= get_permalink($prev_id), "?item-ids=", $item_ids ?>"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
            <a class="p150-item-detail__next" data-featherlight="ajax" href="<?= get_permalink($next_id), "?item-ids=", $item_ids ?>">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
        </div>
    <?php } ?>
</div>
<!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="/paa/wp-content/themes/purdue-alumni-association/js/150-item-detail.js"></script>