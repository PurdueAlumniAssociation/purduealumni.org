<?php
/*
    Template Name: Small Steps
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            $image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);
            ?>
            <section class="row row--no-padding">
                <img class="banner" src="<?php the_post_thumbnail_url(); ?>" alt="<?= $image_alt ?>" />
            </section>
<?php } ?>
    <?php if ( has_nav_menu( 'side-menu' ) ) : ?>
        <section class="row">
            <div class="layout">
                <div class="layout__main">
                    <main class="" id="main" tabindex="-1">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </main>
                </div>
                <div class="layout__sidebar">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side-menu',
                        'menu_class'     => 'side-menu__list',
                        'container' => 'nav',
                        'container_class' => 'side-menu'
                    ) ); ?>
                </div>
            </div>
        </section>
    <?php else : ?>
        <section class="row">
            <main id="main" tabindex="-1">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </main>
        </section>
    <?php endif; ?>
<?php endwhile; else : ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php endif; ?>
<section class="row">
    <?php get_template_part( 'template-parts/sponsors' ); ?>
</section>
<footer class="primary-footer">
    <aside class="social-media-box primary-footer__social-media-box">
        <ul class="social-media-box__list">
            <li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-facebook-f social-media-box__icon"></i><span class="sr-only">Facebook</span></a></li>
            <li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-twitter social-media-box__icon"></i><span class="sr-only">Twitter</span></a></li>
            <li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-linkedin-in social-media-box__icon"></i><span class="sr-only">LinkedIn</span></a></li>
            <li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-instagram social-media-box__icon"></i><span class="sr-only">Instagram</span></a></li>
            <li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-pinterest social-media-box__icon"></i><span class="sr-only">Pinterest</span></a></li>
        </ul>
    </aside>
    <div class="bootstrap-row small-steps">
            <div class="col-sm-6 col-xs-12 small-steps__logo">
                <img class="small-steps__alumni-logo" src="<?= esc_url( home_url( 'wp-content/uploads/PAlogo_H_BlackGold_Web.jpg' ) ); ?>" alt="Purdue Alumni Association" />
            </div>
            <!-- <div class="small-steps__divider"></div> -->
            <div class="col-sm-6 col-xs-12 small-steps__logo">
                <img class="small-steps__150-logo" src="<?= esc_url( home_url( 'wp-content/uploads/150GL_YRS_PU_H_BG_RGB.jpg' ) ); ?>" alt="150 Years of Giant Leaps" />
            </div>
        </div>
    </div>
</footer>
<footer class="secondary-footer">
    <div class="secondary-footer__left-content">
        <?php if ( is_active_sidebar( 'secondary-footer-left' ) ) : ?>
        		<?php dynamic_sidebar( 'secondary-footer-left' ); ?>
        <?php endif; ?>
    </div>
    <div class="secondary-footer__right-content">
        <?php if ( is_active_sidebar( 'secondary-footer-right' ) ) : ?>
        		<?php dynamic_sidebar( 'secondary-footer-right' ); ?>
        <?php endif; ?>
    </div>
</footer>
<?php get_template_part( 'template-parts/login-lightbox' ); ?>
<?php wp_footer(); ?>
</body>
</html>