<footer class="primary-footer">
    <?php //if ( is_active_sidebar( 'footer-social-media-box' ) ) {
        //dynamic_sidebar( 'footer-social-media-box' );
    //}
    ?>
    <aside class="social-media-box primary-footer__social-media-box">
	<ul class="social-media-box__list">
		<li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-facebook-f social-media-box__icon"></i></a></li>
		<li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-twitter social-media-box__icon"></i></a></li>
		<li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-linkedin-in social-media-box__icon"></i></a></li>
		<li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-instagram social-media-box__icon"></i></a></li>
		<li class="social-media-box__list-item"><a class="social-media-box__link" href="#"><i class="fab fa-pinterest social-media-box__icon"></i></a></li>
	</ul>
    </aside>
    <div class="primary-footer__columns-container">
        <?php if ( has_nav_menu( 'primary-footer-1' ) ) : ?>
            <div class="primary-footer__column">
            <span class="primary-footer__column-title" id="footer-column-1"><?= paa_get_theme_menu_name('primary-footer-1') ?></span>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer-1',
                    'menu_class'     => 'primary-footer__column-list',
                    'container' => false
                 ) );
            ?>
            </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'primary-footer-2' ) ) : ?>
            <div class="primary-footer__column">
            <span class="primary-footer__column-title" id="footer-column-2"><?= paa_get_theme_menu_name('primary-footer-2') ?></span>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer-2',
                    'menu_class'     => 'primary-footer__column-list',
                    'container' => false
                 ) );
            ?>
            </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'primary-footer-3' ) ) : ?>
            <div class="primary-footer__column">
            <span class="primary-footer__column-title" id="footer-column-3"><?= paa_get_theme_menu_name('primary-footer-3') ?></span>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer-3',
                    'menu_class'     => 'primary-footer__column-list',
                    'container' => false
                 ) );
            ?>
            </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'primary-footer-4' ) ) : ?>
            <div class="primary-footer__column">
            <span class="primary-footer__column-title" id="footer-column-4"><?= paa_get_theme_menu_name('primary-footer-4') ?></span>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer-4',
                    'menu_class'     => 'primary-footer__column-list',
                    'container' => false
                 ) );
            ?>
            </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'primary-footer-5' ) ) : ?>
            <div class="primary-footer__column">
            <span class="primary-footer__column-title" id="footer-column-5"><?= paa_get_theme_menu_name('primary-footer-5') ?></span>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer-5',
                    'menu_class'     => 'primary-footer__column-list',
                    'container' => false
                 ) );
            ?>
            </div>
        <?php endif; ?>
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
<script>
    $(document).ready( function($) {
        //black bar search toggle
        $('.black-bar-menu__link--search').click( function() {
            $('.black-bar-menu__search-form').slideToggle( {
                duration: 'fast',
                easing: 'linear',
                complete: function() {
                    if( $('.black-bar-menu__search-form').css('display') === "none" ) {
                        $('.black-bar-menu__link--search').focus();
                    } else {
                        $('#black-bar-search').focus();
                    }
                }
            });
        });

        // mobile menu toggle
        $('#mobile-menu-toggle').click( function() {
            $('#mobile-menu').slideToggle( {
                duration: 'fast',
                easing: 'linear',
                complete: function() {
                    if( $('#mobile-menu').css('display') === "none" ) {
                        $('#mobile-menu-toggle').focus();
                    } else {
                        $('#mobile-menu.primary-menu__list').focus();
                    }
                }
            });
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>