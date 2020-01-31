<footer class="primary-footer">
    <aside class="social-media-box primary-footer__social-media-box">
    <ul class="social-media-box__list">
        <li class="social-media-box__list-item"><a class="social-media-box__link" target="_blank" rel="noopener" href="https://www.facebook.com/PurdueAlumniAssociation"><i class="fab fa-facebook-f social-media-box__icon"></i><span class="sr-only">Facebook</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" target="_blank" rel="noopener" href="https://www.twitter.com/PurdueAlumni"><i class="fab fa-twitter social-media-box__icon"></i><span class="sr-only">Twitter</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" target="_blank" rel="noopener" href="https://www.linkedin.com/company/purdue-alumni-association"><i class="fab fa-linkedin-in social-media-box__icon"></i><span class="sr-only">LinkedIn</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" target="_blank" rel="noopener" href="https://www.instagram.com/purduealumni/"><i class="fab fa-instagram social-media-box__icon"></i><span class="sr-only">Instagram</span></a></li>
        <li class="social-media-box__list-item"><a class="social-media-box__link" target="_blank" rel="noopener" href="https://www.pinterest.com/purduealumni/"><i class="fab fa-pinterest social-media-box__icon"></i><span class="sr-only">Pinterest</span></a></li>
    </ul>
    </aside>
    <?php get_template_part( 'template-parts/sponsors' ); ?>
</footer>
<footer class="secondary-footer">
    <?php if ( is_active_sidebar( 'secondary-footer-left' ) ) : ?>
        <?php dynamic_sidebar( 'secondary-footer-left' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'secondary-footer-right' ) ) : ?>
        <?php dynamic_sidebar( 'secondary-footer-right' ); ?>
    <?php endif; ?>
</footer>
<footer class="contact-footer">
        <ul class="contact-footer__list">
            <li><a href="https://www.purduealumni.org/terms-of-use">Terms of Use</a></li>
            <li><a href="https://www.purduealumni.org/privacy-policy">Privacy Statement</a></li>
            <li>Purdue Alumni Association. All Rights Reserved</li>
        </ul>
</footer>
<?php wp_footer(); ?>
</body>
</html>
