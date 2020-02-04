<footer class="sponsors-footer">
    <?php get_template_part( 'template-parts/sponsors' ); ?>
</footer>
<footer class="primary-footer">
    <?php if ( is_active_sidebar( 'primary-footer-col-1' ) ) : ?>
        <?php dynamic_sidebar( 'primary-footer--col-1' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'primary-footer-col-2' ) ) : ?>
        <?php dynamic_sidebar( 'primary-footer--col-2' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'primary-footer-col-3' ) ) : ?>
        <?php dynamic_sidebar( 'primary-footer--col-3' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'primary-footer-col-4' ) ) : ?>
        <?php dynamic_sidebar( 'primary-footer--col-4' ); ?>
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
