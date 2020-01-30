<?php

$current_user = wp_get_current_user();

$user_full_name = $current_user->user_firstname . " " . $current_user->user_lastname;

$image_path = get_template_directory_uri() . "/images/blankmembershipcard.jpg";

$memberships = wc_memberships_get_user_active_memberships();

//echo "<pre>",print_r(get_class_methods("WC_Memberships_Integration_Subscriptions_User_Membership")),"</pre>";

//echo "<pre>",print_r($memberships),"</pre>";

if (!empty($memberships)) {
    $membership_levels = array();
    foreach($memberships as $membership) {
        $membership_levels[] = $membership->plan->slug;
        //echo "<pre>" . print_r($membership) . "</pre>";
        if ($membership->get_status() == "active") {
            $expiration_date = $membership->get_next_bill_on_date("m/d/Y");
        } elseif ($membership->get_status() == "pending") {
            $expiration_date = $membership->get_end_date("m/d/Y");
        } else {
            $expiration_date = "";
        }
    }
}
//echo "<pre>",print_r($membership_levels),"</pre>";

if( !empty($membership_levels) ) {
    if (in_array("career-max", $membership_levels)) {
        $effective_membership_level = "Career Max";
    } elseif (in_array("professional", $membership_levels)) {
        $effective_membership_level = "Professional";
    } elseif (in_array("life", $membership_levels)) {
        $effective_membership_level = "Life";
    } elseif (in_array("plus", $membership_levels)) {
        $effective_membership_level = "Plus";
    } elseif (in_array("basic", $membership_levels)) {
        $effective_membership_level = "Basic";
    } elseif (in_array("pase", $membership_levels)) {
        $effective_membership_level = "PASE";
    }

    if ( $effective_membership_level == "Life" ) {
        $display_expiration_date = "Never Expires";
    } elseif ( ! empty($expiration_date) ) {
        $display_expiration_date = "Expires " . $expiration_date;
    } else {
        $display_expiration_date = "";
    }

    ?>
    <div class="membership-card">
        <span class="membership-card__type"><?= $effective_membership_level ?> Member</span>
        <span class="membership-card__expiration"><?= $display_expiration_date ?></span>
        <span class="membership-card__name"><?= $user_full_name ?></span>
        <img class="membership-card__image" src="<?= $image_path ?>" />
    </div>
    <p class="print-hide"><a href="javascript:window.print()"><i class="fas fa-print" aria-hidden style="margin-right: 5px;"></i>Print</a></p>

    <style>
    .membership-card {
        position: relative;
        max-width: 500px;
    }

    .membership-card__type {
        font-size: 2em;
        position: absolute;
        top: 23px;
        left: 23px;
    }

    .membership-card__expiration {
        font-size: 1em;
        position: absolute;
        top: 64px;
        left: 25px;
    }

    .membership-card__name {
        font-size: 1.2em;
        position: absolute;
        bottom: 23px;
        left: 23px;
        background: rgba(0,0,0,.5);
        padding: 5px 8px;;
        color: white;
        max-width: 394px;
        line-height: 1.5;
        border-radius: 6px;
    }

    @media print
    {
    .header, .black-bar, .primary-footer, .secondary-footer, .contact-footer, h1, .woocommerce-MyAccount-navigation, .print-hide {
        display: none;
    }
    .woocommerce-MyAccount-content {
        float: none !important;
    }
    .membership-card {
    max-width: 320px;
    }
    .membership-card__type {
        font-size: 1.2em;
        top: 15px;
        left: 15px;
    }
    .membership-card__expiration {
        font-size: .8em;
        top: 35px;
        left: 16px;
    }
    .membership-card__name {
        font-size: .7em;
        bottom: 15px;
        left: 15px;
    }
    }
    </style>
    <?php
} else {
?>
Oops! Something went wrong. Please contact us at <a href="mailto:alumnidigital@purdue.edu?Subject=I can't view my membership card">alumnidigital@purdue.edu</a>.
<?php
}
?>