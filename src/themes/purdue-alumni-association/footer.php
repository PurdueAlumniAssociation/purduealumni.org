<footer class="primary-footer">
    <aside class="social-media-box primary-footer__social-media-box">
    <ul class="social-media-box__list">
        <li class="social-media-box__list-item"><a class="social-media-box__link" href="https://www.facebook.com/PurdueAlumniAssociation" onclick="trackOutboundLink('https://www.facebook.com/PurdueAlumniAssociation'); return false;"><i class="fab fa-facebook-f social-media-box__icon"></i><span class="sr-only">Facebook</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" href="https://www.twitter.com/PurdueAlumni" onclick="trackOutboundLink('https://www.twitter.com/PurdueAlumni'); return false;"><i class="fab fa-twitter social-media-box__icon"></i><span class="sr-only">Twitter</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" href="https://www.linkedin.com/company/purdue-alumni-association" onclick="trackOutboundLink('https://www.linkedin.com/company/purdue-alumni-association'); return false;"><i class="fab fa-linkedin-in social-media-box__icon"></i><span class="sr-only">LinkedIn</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" href="https://www.instagram.com/purduealumni/" onclick="trackOutboundLink('https://www.instagram.com/purduealumni/'); return false;"><i class="fab fa-instagram social-media-box__icon"></i><span class="sr-only">Instagram</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" href="https://www.pinterest.com/purduealumni/" onclick="trackOutboundLink('https://www.pinterest.com/purduealumni/'); return false;"><i class="fab fa-pinterest social-media-box__icon"></i><span class="sr-only">Pinterest</span></a></li>
    </ul>
    </aside>
    <?php get_template_part( 'template-parts/sponsors' ); ?>
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
<div id="login-box" class="login-box">
    <div class="login-box__column-wrapper">
        <div class="login-box__column login-box__column--info">
            <h2 class="login-box__title">Your Information</h2>
            <p>Update your address, manage your profile, or make a payment.</p>
            <a href="https://tinyurl.com/ybr3yvcm" class="button button--gold login-box__button">Login</a>
        </div>
        <div class="login-box__column login-box__column--benefits">
            <h2 class="login-box__title">Membership Benefits</h2>
            <p>Access discounts, career services, or any benefit of your Purdue Alumni Association membership.</p>
            <a href="https://purdue.vineup.com/" class="button button--teal login-box__button">Login</a>
        </div>
        <div class="login-box__column login-box__column--desc">
            <h2 class="login-box__title login-box__title--desc">Why two logins?</h2>
            <p>Purdue Alumni is transitioning technology platforms to enhance the online experience. Soon, you will have one login for everything. Until then, don't hesitstate to call or email for assistance.</p>
            <p>800-414-1541<br />
            <a href="mailto:purduealumni@purdue.edu">purduealumni@purdue.edu</a></p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>