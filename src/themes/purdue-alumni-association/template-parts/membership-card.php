<?php

$current_user = wp_get_current_user();

$user_full_name = $current_user->user_firstname . " " . $current_user->user_lastname;

$image_path = get_template_directory_uri() . "/images/blankmembershipcard.jpg";

//echo "<pre>",print_r($memberships),"</pre>";
function get_expiration_date($membership) {
    $expiration_date = "";

    $membership_class = get_class($membership);

    if ( $membership_class = "WC_Memberships_User_Membership" ) {
        $expiration_date = $membership->get_end_date("m/d/Y");
    } elseif ( $membership_class = "WC_Memberships_Integration_Subscriptions_User_Membership" ) {
        if ($membership->get_status() == "active") {
            $expiration_date = $membership->get_next_bill_on_date("m/d/Y");
        } elseif ($membership->get_status() == "pending") {
            $expiration_date = $membership->get_end_date("m/d/Y");
        }
    }

    return $expiration_date;
}

$memberships = wc_memberships_get_user_active_memberships();

if ( ! empty($memberships) ) {
    foreach($memberships as $membership) {
        $membership_slug = $membership->plan->slug;
        $membership_expiration_date = get_expiration_date($membership);

        if ( $membership_slug == "career-max" ) {
            $membership_name = "Career Max";
            $output_membership_expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "professional" ) {
            $membership_name = "Professional";
            $output_membership_expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "life" ) {
            $membership_name = "Life";
            $output_membership_expiration_date = "Never Expires";
            break;
        } elseif ( $membership_slug == "plus" ) {
            $membership_name = "Plus";
            $output_membership_expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "basic" ) {
            $membership_name = "Basic";
            $output_membership_expiration_date = "Expires " . $membership_expiration_date;
        } else {
            $output_membership_expiration_date = "";
        }
    }

    //echo "<pre>",print_r($membership_levels),"</pre>";
    //echo "<pre>",print_r(get_class_methods("WC_Memberships_Integration_Subscriptions_User_Membership")),"</pre>";
    ?>
    <div class="membership-card">
        <span class="membership-card__type"><?= $membership_name ?> Member</span>
        <span class="membership-card__expiration"><?= $output_membership_expiration_date ?></span>
        <span class="membership-card__name"><?= $user_full_name ?></span>
        <img class="membership-card__image" src="<?= $image_path ?>" />
    </div>
    <p class="print-hide"><a href="javascript:window.print()"><i class="fas fa-print" aria-hidden style="margin-right: 5px;"></i>Print</a></p>
    <?php
} else {
?>
Oops! Something went wrong. Please contact us at <a href="mailto:alumnidigital@purdue.edu?Subject=I can't view my membership card">alumnidigital@purdue.edu</a>.
<?php
}
?>