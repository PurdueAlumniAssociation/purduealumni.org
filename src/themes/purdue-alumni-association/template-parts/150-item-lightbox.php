<div class="p150-lightbox-background" data-lightbox-id="<?= get_the_ID(); ?>">
    <div class="p150-lightbox">
        <a href="#" class="p150-lightbox__close-button"><i class="fas fa-times" aria-hidden></i><span class="sr-only">close</span></a>
        <div class="p150-item-detail">
            <div class="p150-item-detail__flex">
                <div class="p150-item-detail__image-container">
                    <?php the_post_thumbnail(); ?>
                    <p class="p150-item-detail__image-credit"><i class="fas fa-camera"></i><?=  rwmb_meta( '150_item_photo_credit' ); ?></p>
                    <?php if ( rwmb_meta( '150_item_courtesy_checkbox' ) ) { ?>
                        <p class="p150-item-detail__courtesy">
                            <?= rwmb_meta( '150_item_courtesy' ); ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="p150-item-detail__content-container">
                    <h3 class="p150-item-detail__title"><?= the_title() ?></h3>
                    <div class="p150-item-detail__description">
                        <?= the_content(); ?>
                    </div>
                    <?php
                        $terms = wp_get_post_terms( get_the_ID(), "150-category", array( 'fields' => 'names' ) );

                        if ( count( $terms ) > 0 ) {
                            echo "CATEGORIES: ";
                            foreach ( $terms as $term ) {
                                echo "<span class=\"p150-item-detail__category\">{$term}</span>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="p150-item-detail__mobile-nav">
                <a class="p150-item-detail__previous" href="#"><i class="fas fa-chevron-left p150-item-detail__previous-icon"></i>Previous</a>
                <a class="p150-item-detail__next" href="#">Next<i class="fas fa-chevron-right p150-item-detail__next-icon"></i></a>
            </div>
        </div>
    </div>
</div>
