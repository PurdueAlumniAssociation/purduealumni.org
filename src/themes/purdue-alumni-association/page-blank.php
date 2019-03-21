<?php
/*
    Template Name: Blank
*/
?>
<?php get_header(); ?>
<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/web-banner' );

            if ( is_active_sidebar( 'left-sidebar' ) ) { ?>
                <section class="row">
                    <div class="layout">
                        <div class="layout__main">
                            <?php get_template_part( 'page-content-blank' ); ?>
                        </div>
                        <aside class="layout__sidebar">
                            <?php dynamic_sidebar( 'left-sidebar' ); ?>
                        </aside>
                    </div>
                </section>
            <?php
            } else {
                get_template_part( 'page-content-blank' );
            }
        }
    } else { ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php
    } ?>
<?php get_footer(); ?>