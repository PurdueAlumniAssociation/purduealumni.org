<?php
    /*
        Template Name: One Column
    */
?>
<?php get_header(); ?>
<section class="layout">
    <main id="main" tabindex="-1">
        <h1>Search Results</h1>
        <p class="callout"><?php printf( __( 'Searching for: %s' ), '<span>' . get_search_query() . '</span>'); ?></p>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                  the_excerpt() ?>
        <?php endwhile;
            the_posts_pagination(
                array(
                    'prev_text'          => '<i class="fas fa-arrow-left"></i><span class="sr-only">' . __( 'Previous Page', 'paa' ) . '</span>',
                    'next_text'          => '<span class="sr-only">' . __( 'Next Page', 'paa' ) . '</span><i class="fas fa-arrow-right"></i>',
                    'before_page_number' => '<span class="meta-nav sr-only">' . __( 'Page', 'paa' ) . ' </span>',
                )
            );
        else : ?>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search. Please try again with something different.' ); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </main>
</section>
<?php get_footer(); ?>