<?php
$memberships = wc_memberships_get_user_active_memberships();

if ( ! empty(wc_memberships_get_user_active_memberships()) ) {
    echo "Details about your membership:", "<br>";
    // one membership
    if ( count($memberships) == 1 ) {
        $current_membership = $memberships[0];
    } else {
    // multiple memberships
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

        //echo "<pre>", print_r($membership_levels), "</pre>";
        //echo "<pre>", $membership_id, "</pre>";

        // echo "ID: ", $membership->id, "<br>";
        // echo $membership->plan->name, " Membership", "<br>";
        // // TO DO: make sure this works with all types of memberships
        // echo "Ends: ", $membership->get_end_date("m/d/Y"), "<br>";

        //echo "<pre>",print_r($membership),"</pre>", "<br>";

        $current_membership = wc_memberships_get_user_membership($membership_id);
    }

    // now that we have the current, highest level of membership, display the details
    if ( $current_membership !== false ) {
        $membership_class = get_class($current_membership);
        //echo "Object Name: ", $membership_class, "<br />";
        //echo "ID: ", $current_membership->id, "<br />";
        echo "Plan Name: ", $current_membership->plan->name, " Membership", "<br />";
        // // TO DO: make sure this works with all types of memberships
        echo "Ends: ", $current_membership->get_end_date("m/d/Y"), "<br />";

        $type = $current_membership->get_type();

        if ($type == "manually-assigned") {
            echo "Autorenew: False", "<br />";
        }

        // add subscription features like renew
        if ($type == "subscription") {
            //echo "<a href=\"", $current_membership->get_renew_membership_url(), "\">Renew</a><br />";
            //echo "has_subscription: ", $current_membership->has_subscription(), "<br />";
            //echo "get_subscription: <br /><pre>", print_r($current_membership->get_subscription()), "</pre><br />";
            echo "can_be_renewed: ", $current_membership->can_be_renewed(), "<br />";
            echo "can_be_renewed_early: ", $current_membership->can_be_renewed_early(), "<br />";
        }

        echo "<br /><br />Methods for ", get_class($current_membership), ":<br />";
        echo "<pre>", print_r(get_class_methods($current_membership)), "</pre>";
    } else {
        echo "An error ocurred. Error code: 62";
    }

} else {
// no active memberships found
    get_template_part( 'template-parts/my-account/no-membership-warning' );
}