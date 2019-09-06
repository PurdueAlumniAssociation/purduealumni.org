<?php
require_once( get_template_directory() . '/classes/Benefit.class.php' );

// $memberships = wc_memberships_get_user_active_memberships();
//
// if (!empty($memberships)) {
//     $membership_levels = array();
//     foreach($memberships as $membership) {
//         $membership_levels[] = $membership->plan->slug;
//     }
// }
//
// if (in_array("career-max", $membership_levels)) {
//     $effective_membership_level = "Career Max";
// } elseif (in_array("professional", $membership_levels)) {
//     $effective_membership_level = "Professional";
// } elseif (in_array("plus", $membership_levels)) {
//     $effective_membership_level = "Plus";
// } elseif (in_array("basic", $membership_levels)) {
//     $effective_membership_level = "Basic";
// } elseif (in_array("pase", $membership_levels)) {
//     $effective_membership_level = "PASE";
// }

$benefits = array();

echo "<h2>My Benefits</h2>";

$args = array(
    'post_type' => 'benefit',
    'posts_per_page' => -1,
    'nopaging' => true
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $benefits[] = new Benefit(
            get_post()->post_title,
            rwmb_meta('benefit_plans'),
            rwmb_meta('benefit_url')
        );
    } // end while
} // endif

wp_reset_postdata();

foreach($benefits as $benefit) {
        $content = "<h3>{$benefit->get_the_title()}</h3>{$benefit->get_the_member_link()}";
        $benefit_levels = implode(",", $benefit->get_the_plans());

        echo do_shortcode("[wcm_restrict plans=\"{$benefit_levels}\"]{$content}[/wcm_restrict]");
}



