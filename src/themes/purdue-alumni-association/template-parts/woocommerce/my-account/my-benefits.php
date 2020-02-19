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
    $benefit_args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_benefits' );

    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $benefit_title = get_post()->post_title;
        $benefit_plans = rwmb_meta( 'benefit__plans', $benefit_args );
        $benefit_description = rwmb_meta( 'benefit__member_description', $benefit_args );
        $benefit_member_url = rwmb_meta( 'benefit__member_url', $benefit_args );

        $benefits[] = new Benefit(
            $benefit_title,
            $benefit_plans,
            $benefit_description,
            $benefit_member_url
        );
    } // end while
} // endif

wp_reset_postdata();

foreach($benefits as $benefit) {
        $content = "<h3>{$benefit->get_the_title()}</h3><p>{$benefit->get_the_member_description()}</p>";

        if ( !empty($benefit->get_the_member_link()) ) {
            $content .= "<p>{$benefit->output_the_member_link()}</p>";
        }

        $benefit_levels = implode(",", $benefit->get_the_plans());

        // life members get the same benefits as the plus level
        $benefit_levels = str_replace("plus", "plus,life", $benefit_levels);

        echo do_shortcode("[wcm_restrict plans=\"{$benefit_levels}\"]{$content}[/wcm_restrict]");
}



