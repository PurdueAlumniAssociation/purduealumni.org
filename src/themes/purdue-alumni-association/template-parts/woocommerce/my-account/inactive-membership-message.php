<?php

function convert_level_to_int($membership) {
    switch ($membership->plan->slug) {
        case "basic":
            return 1;
        case "plus":
            return 2;
        case "life":
            return 3;
        case "professional":
            return 4;
        case "career-max":
            return 5;
    }
}

function sort_by_membership_level($membership1, $membership2) {
    if (convert_level_to_int($membership1) == convert_level_to_int($membership2)) {
        return 0;
    }
    return (convert_level_to_int($membership1) > convert_level_to_int($membership2)) ? -1 : 1;
}

$memberships = wc_memberships_get_user_memberships();

if ( ! empty($memberships) ) {
    // get the effective membership from the array of active memberships
    if ( count($memberships) == 1 ) {
        $effective_membership = $membership;
    } elseif ( count($memberships) > 1 ) {
        //$active_and_pending_memberships = array();
        $delayed_memberships = array();
        $expired_and_cancelled_memberships = array();

        foreach ( $memberships as $membership ) {
            // if ( $membership->status == "wcm-active" || $membership->status == "wcm-pending" ) {
            //     $active_and_pending[] = $membership;
            //} elseif ( $membership->status == "wcm-delayed" ) {
            if ( $membership->status == "wcm-delayed" ) {
                $delayed_memberships[] = $membership;
            } elseif ( $membership->status == "wcm-expired" || $membership->status == "wcm-cancelled" ) {
                $expired_and_cancelled_memberships[] = $membership;
            }
        }

        // if ( ! empty($active_and_pending_memberships) ) {
        //     usort($active_and_pending_memberships, "sort_by_membership_level");
        //     $effective_membership = $active_and_pending_memberships[0];
        // } elseif ( ! empty($delayed_memberships) ) {
        if ( ! empty($delayed_memberships) ) {
            usort($delayed_memberships, "sort_by_membership_level");
            $effective_membership = $delayed_memberships[0];
        } elseif ( ! empty($expired_and_cancelled_memberships) ) {
            usort($expired_and_cancelled_memberships, "sort_by_membership_level");
            $effective_membership = $expired_and_cancelled_memberships[0];
        }
    }

    switch ($effective_membership->status) {
        // case "wcm-active":
        // case "wcm-pending":
        //     // do nothing
        //     break;
        case "wcm-delayed":
            $start_date = date("F j, Y", strtotime($effective_membership->get_start_date()));
            $message = "<p>Your membership is not active yet. Check back on or after {$start_date}.</p>";
            break;
        case "wcm-expired":
        case "wcm-cancelled":
            $message = "<p>Your membership is expired! <a href=\"https://www.purduealumni.org/membership/\">Renew by purchasing a new membership</a>. Because you are already logged in, any information saved in your profile will be automatically filled out during checkout.</p>";
            break;
    }
} else { // $memberships is empty
    $message = "<p>You don't have an active membership! <a href=\"https://www.purduealumni.org/membership/\">Purchase a new mebership</a>.</p>";
}

echo $message;

echo "<pre>", print_r($effective_membership) ,"</pre>";
?>
<p>If this is an error, please let us know by emailing <a href="mailto:alumnidigital@purdue.edu">alumnidigital@purdue.edu</a></p>