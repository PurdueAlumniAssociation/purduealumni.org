<?php get_header(); ?>
<section class="row">
    <main id="main" tabindex="-1">
        <h1>Not Found</h1>
        <p><?php esc_html_e( 'Whoops! The page you are looking for is no longer here. Try searching for the page you are looking for.' ); ?></p>
        <?php get_search_form(); ?>
    </main>
</section>
<?php get_footer(); ?>