<!-- <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="p150-item-card">
        <div class="p150-item-card__image-container">
            <?php /*echo get_the_post_thumbnail(
                $post_id,
                'Medium-Large',
                array(
                    'class' => 'p150-item-card__image',
                    'width' => '500',
                    'height' => '500'
                )
            ); */?>
        </div>
        <h3 class="p150-item-card__title"><?php //the_title(); ?></h3>
    </div>
</div> -->
<a href="#">
    <div class="card">
        <?php echo get_the_post_thumbnail(
            $post_id,
            'Medium-Large',
            array(
                'class' => 'card__image'
            )
        ); ?>
        <div class="card__content">
            <h3 class="card__title"><?php the_title(); ?></h3>
        </div>
    </div>
</a>