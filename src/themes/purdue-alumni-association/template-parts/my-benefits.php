<?php
require_once( get_template_directory() . '/classes/Benefit.class.php' );

$benefits = array();

echo "<h2>My Benefits</h2>";

$args = array(
    'post_type' => 'benefit',
    'posts_per_page' => -1,
    'nopaging' => true
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    $args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_benefits' );

    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $benefits[] = new Benefit(
            get_post()->post_title,
            rwmb_meta('benefit__plans', $args ),
            rwmb_meta('benefit__member_url', $args )
        );
    } // end while
} // endif

wp_reset_postdata();

foreach($benefits as $benefit) {
        $content = "<h3>{$benefit->get_the_title()}</h3>{$benefit->get_the_member_link()}";
        $benefit_levels = implode(",", $benefit->get_the_plans());

        echo do_shortcode("[wcm_restrict plans=\"{$benefit_levels}\"]{$content}[/wcm_restrict]");
}



