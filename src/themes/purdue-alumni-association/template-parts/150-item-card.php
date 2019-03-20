<div class="col-xs-12 col-sm-6 col-md-4">
    <a href="<?= get_the_permalink(); ?>" data-featherlight="ajax" class="card card--150-item card--fadeinup">
        <?php
        $image = rwmb_meta( '150_item_thumbnail' );
        echo '<img class="card__image lazy" src="http://localhost:8888/paa/wp-content/uploads/PAlogo_V_Black_Web100.jpg" data-src="', $image['full_url'], '" data-srcset="', $image['full_url'], ' 1x" alt="', $image['alt'], '" width=\"300\" height=\"300\">';
        ?>
        <div class="card__content card__content--150-item">
            <h3 class="card__title card__title--150-item"><?php the_title(); ?></h3>
        </div>
    </a>
</div>