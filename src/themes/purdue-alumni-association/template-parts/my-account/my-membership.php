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
        echo "Object Name: ", $membership_class, "<br />";
        echo "ID: ", $current_membership->id, "<br />";
        echo $current_membership->plan->name, " Membership", "<br />";
        // // TO DO: make sure this works with all types of memberships
        echo "Ends: ", $current_membership->get_end_date("m/d/Y"), "<br />";
        $type = $current_membership->get_type();

        if ($type == "manually-assigned") {

        }

        // add subscription features like renew
        if ($type == "subscription") {
            echo "<a href=\"", $current_membership->get_renew_membership_url(), "\">Renew</a><br />";
            echo "has_subscription: ", $current_membership->has_subscription(), "<br />";
            //echo "get_subscription: <br /><pre>", print_r($current_membership->get_subscription()), "</pre><br />";
            echo "can_be_renewed: ", $current_membership->can_be_renewed(), "<br />";
        }

        //echo "<pre>", print_r(get_class_methods($current_membership->get_subscription())), "</pre>";

        echo "get_meta_keys: ", get_meta_keys(), "<br />";
        echo "has_installment_plan: ", has_installment_plan(), "<br />";
        //echo "maybe_set_installment_plan: ", maybe_set_installment_plan(), "<br />";
        //echo "remove_installment_plan: ", remove_installment_plan(), "<br />";
        echo "has_subscription: ", has_subscription(), "<br />";
        //echo "set_subscription_id: ", set_subscription_id(), "<br />";
        echo "get_subscription_id: ", get_subscription_id(), "<br />";
        echo "get_subscription: ", get_subscription(), "<br />";
        //echo "delete_subscription_id: ", delete_subscription_id(), "<br />";
        echo "get_renew_membership_url: ", get_renew_membership_url(), "<br />";
        echo "can_be_renewed_early: ", can_be_renewed_early(), "<br />";
        echo "can_be_renewed: ", can_be_renewed(), "<br />";
        echo "get_next_bill_on_date: ", get_next_bill_on_date(), "<br />";
        echo "get_next_bill_on_local_date: ", get_next_bill_on_local_date(), "<br />";
        echo "is_in_free_trial_period: ", is_in_free_trial_period(), "<br />";
        //echo "set_free_trial_end_date: ", set_free_trial_end_date(), "<br />";
        echo "get_free_trial_end_date: ", get_free_trial_end_date(), "<br />";
        echo "get_local_trial_end_date: ", get_local_trial_end_date(), "<br />";
        //echo "delete_free_trial_end_date: ", delete_free_trial_end_date(), "<br />";
        echo "get_end_date: ", get_end_date(), "<br />";
        //echo "schedule_expiration_events: ", schedule_expiration_events(), "<br />";
        echo "get_id: ", get_id(), "<br />";
        echo "get_user_id: ", get_user_id(), "<br />";
        echo "get_user: ", get_user(), "<br />";
        echo "get_plan_id: ", get_plan_id(), "<br />";
        echo "get_plan: ", get_plan(), "<br />";
        echo "get_status: ", get_status(), "<br />";
        echo "get_view_membership_url: ", get_view_membership_url(), "<br />";
        echo "get_type: ", get_type(), "<br />";
        echo "is_type: ", is_type(), "<br />";
        //echo "set_start_date: ", set_start_date(), "<br />";
        echo "get_start_date: ", get_start_date(), "<br />";
        echo "get_local_start_date: ", get_local_start_date(), "<br />";
        echo "has_start_date: ", has_start_date(), "<br />";
        //echo "set_end_date: ", set_end_date(), "<br />";
        echo "get_local_end_date: ", get_local_end_date(), "<br />";
        echo "has_end_date: ", has_end_date(), "<br />";
        echo "get_cancelled_date: ", get_cancelled_date(), "<br />";
        echo "get_local_cancelled_date: ", get_local_cancelled_date(), "<br />";
        //echo "set_cancelled_date: ", set_cancelled_date(), "<br />";
        echo "get_paused_date: ", get_paused_date(), "<br />";
        echo "get_local_paused_date: ", get_local_paused_date(), "<br />";
        //echo "set_paused_date: ", set_paused_date(), "<br />";
        //echo "delete_paused_date: ", delete_paused_date(), "<br />";
        echo "get_paused_intervals: ", get_paused_intervals(), "<br />";
        //echo "set_paused_interval: ", set_paused_interval(), "<br />";
        //echo "delete_paused_intervals: ", delete_paused_intervals(), "<br />";
        echo "get_total_active_time: ", get_total_active_time(), "<br />";
        echo "get_total_inactive_time: ", get_total_inactive_time(), "<br />";
        //echo "unschedule_activation_events: ", unschedule_activation_events(), "<br />";
        //echo "schedule_activation_events: ", schedule_activation_events(), "<br />";
        //echo "unschedule_expiration_events: ", unschedule_expiration_events(), "<br />";
        //echo "schedule_post_expiration_events: ", schedule_post_expiration_events(), "<br />";
        //echo "set_order_id: ", set_order_id(), "<br />";
        echo "get_order_id: ", get_order_id(), "<br />";
        echo "get_order: ", get_order(), "<br />";
        //echo "delete_order_id: ", delete_order_id(), "<br />";
        //echo "set_product_id: ", set_product_id(), "<br />";
        echo "get_product_id: ", get_product_id(), "<br />";
        echo "get_product: ", get_product(), "<br />";
        //echo "delete_product_id: ", delete_product_id(), "<br />";
        echo "has_status: ", has_status(), "<br />";
        //echo "update_status: ", update_status(), "<br />";
        echo "is_cancelled: ", is_cancelled(), "<br />";
        echo "is_expired: ", is_expired(), "<br />";
        echo "is_paused: ", is_paused(), "<br />";
        echo "is_delayed: ", is_delayed(), "<br />";
        echo "is_active: ", is_active(), "<br />";
        echo "is_in_active_period: ", is_in_active_period(), "<br />";
        //echo "pause_membership: ", pause_membership(), "<br />";
        //echo "cancel_membership: ", cancel_membership(), "<br />";
        //echo "expire_membership: ", expire_membership(), "<br />";
        //echo "activate_membership: ", activate_membership(), "<br />";
        echo "can_be_cancelled: ", can_be_cancelled(), "<br />";
        echo "get_cancel_membership_url: ", get_cancel_membership_url(), "<br />";
        echo "get_product_for_renewal: ", get_product_for_renewal(), "<br />";
        echo "get_products_for_renewal: ", get_products_for_renewal(), "<br />";
        echo "get_renewal_login_token: ", get_renewal_login_token(), "<br />";
        echo "generate_renewal_login_token: ", generate_renewal_login_token(), "<br />";
        //echo "delete_renewal_login_token: ", delete_renewal_login_token(), "<br />";
        echo "can_be_transferred: ", can_be_transferred(), "<br />";
        //echo "transfer_ownership: ", transfer_ownership(), "<br />";
        echo "get_previous_owners: ", get_previous_owners(), "<br />";
        echo "get_notes: ", get_notes(), "<br />";
        add_note

        echo "<pre>", print_r(get_class_methods($current_membership)), "</pre>";
    } else {
        echo "An error ocurred. Error code: 62";
    }

} else {
// no active memberships found
    get_template_part( 'template-parts/my-account/no-membership-warning' );
}