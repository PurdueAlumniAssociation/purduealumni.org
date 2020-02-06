<?php
$memberships = wc_memberships_get_user_active_memberships();

if ( ! empty(wc_memberships_get_user_active_memberships()) ) {
    echo "Details about your membership:", "<br>";
    // one membership
    if ( count($memberships) == 1 ) {
        $membership = $memberships[0];

        echo $membership->plan->name, " Membership", "<br>";
        // TO DO: make sure this works with all types of memberships
        echo "Ends: ", $membership->get_end_date("m/d/Y"), "<br>";

        //echo "<pre>",print_r($membership),"</pre>", "<br>";

    // multiple memberships
    } else {
        // get highest level of membership
        $membership_levels = array();

        foreach ( $memberships as $membership ) {
            $membership_levels[] = array(
                'slug' => $membership->plan->slug,
                'id' => $membership->id
            );
        }

        function searchForSlug($slug, $array) {
           foreach ($array as $key => $val) {
               if ($val['slug'] === $slug) {
                   return $val['id'];
               }
           }
           return null;
        }

        if ( ! empty(searchForSlug("career-max", $membership_levels)) ) {
            $membership_id = searchForSlug("career-max", $membership_levels);
        } elseif ( ! empty(searchForSlug("professional", $membership_levels)) ) {
            $membership_id = searchForSlug("professional", $membership_levels);
        } elseif ( ! empty(searchForSlug("life", $membership_levels)) ) {
            $membership_id = searchForSlug("life", $membership_levels);
        } elseif ( ! empty(searchForSlug("plus", $membership_levels)) ) {
            $membership_id = searchForSlug("plus", $membership_levels);
        } elseif ( ! empty(searchForSlug("basic", $membership_levels)) ) {
            $membership_id = searchForSlug("basic", $membership_levels);
        }

        echo "<pre>", print_r($membership_levels), "</pre>";
        echo "<pre>", $membership_id, "</pre>";

        echo "ID: ", $membership->id, "<br>";
        echo $membership->plan->name, " Membership", "<br>";
        // TO DO: make sure this works with all types of memberships
        echo "Ends: ", $membership->get_end_date("m/d/Y"), "<br>";

        //echo "<pre>",print_r($membership),"</pre>", "<br>";

    }




} else {
    get_template_part( 'template-parts/my-account/no-membership-warning' );
}