<?php
/**
 * The template for displaying archive of trips
 */
?>
<?php
$filter_year = get_query_var( 'trip-year', 'all' );
$page_title = "All Trips";

if ( $filter_year != 'all' ) {
    $page_title = $filter_year . " Trips";
}
?>
 <?php get_header(); ?>
 <?php
    // query
    $the_query = new WP_Query(array(
        'post_type'         => 'trip',
        'posts_per_page'    => -1,
        'meta_key'          => 'start_date',
        'orderby'           => 'meta_value',
        'order'             => 'ASC'
    ));

    if ( $the_query->have_posts() ) : ?>
    <section class="row">
        <p class="text-center">rotator goes here</p>
    </section>
    <section class="row">
        <h1><?= $page_title; ?></h1>
        <?php
        $current_month = "";
        $first = true;

        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            // show all or filter by year passed in URL
            if ( $filter_year == all || date( 'Y', rwmb_meta( 'start_date' ) ) == $filter_year ) {
                // output the month section title (and close trip wrapper)
                if ( date( 'F', rwmb_meta( 'start_date' ) ) != $current_month ) {
                    $current_month = date( 'F', rwmb_meta( 'start_date' ) );
                    if ( ! $first ) {
                        // close flex-wrapper on all but first section
                        echo "</div>";
                    }
                    echo "<h2>${current_month}</h2>";
                    echo "<div class=\"flex-wrapper\">";
                    $first = false;
                }

                get_template_part( 'template-parts/trip-card' );
            }
        }
        ?>
    </section>
<?php else : ?>
    <section class="row">
        <main id="main" tabindex="-1">
            <h1>Oh no!</h1>
            <p>Sorry, something went wrong.</p>
        </main>
    </section>
<?php endif; ?>
<?php get_footer(); ?>