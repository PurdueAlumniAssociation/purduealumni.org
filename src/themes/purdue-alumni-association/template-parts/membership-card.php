<?php

$current_user = wp_get_current_user();

$user_full_name = $current_user->user_firstname . " " . $current_user->user_lastname;

$image_path = get_template_directory_uri() . "/images/blankmembershipcard.jpg";

//echo "<pre>",print_r($memberships),"</pre>";
function get_expiration_date($membership) {
    $expiration_date = "";

    $membership_class = get_class($membership);

    if ( $membership_class == "WC_Memberships_User_Membership" ) {
        $expiration_date = $membership->get_end_date("m/d/Y");
    } elseif ( $membership_class == "WC_Memberships_Integration_Subscriptions_User_Membership" ) {
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
            $expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "professional" ) {
            $membership_name = "Professional";
            $expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "life" ) {
            $membership_name = "Life";
            $expiration_date = "Never Expires";
            break;
        } elseif ( $membership_slug == "plus" ) {
            $membership_name = "Plus";
            $expiration_date = "Expires " . $membership_expiration_date;
            break;
        } elseif ( $membership_slug == "basic" ) {
            $membership_name = "Basic";
            $expiration_date = "Expires " . $membership_expiration_date;
        } else {
            $expiration_date = "";
        }
    }

    //echo "<pre>",print_r($membership_levels),"</pre>";
    //echo "<pre>",print_r(get_class_methods("WC_Memberships_Integration_Subscriptions_User_Membership")),"</pre>";
    ?>
    <div class="membership-card">
        <span class="membership-card__type"><?= $membership_name ?> Member</span>
        <span class="membership-card__expiration"><?php if ( ! empty($expiration_date) ) { echo $expiration_date; }  ?></span>
        <span class="membership-card__name"><?= $user_full_name ?></span>
        <img class="membership-card__image" src="<?= $image_path ?>" />
    </div>
    <p class="print-hide"><a href="javascript:window.print()"><i class="fas fa-print" aria-hidden style="margin-right: 5px;"></i>Print</a></p>
    <p class="print-hide">If you have issues with your membership card, please <a href="mailto:alumnidigital@purdue.edu?Subject=There's a problem with my membership card">contact us</a>.</p>

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
        font-size: 0.8em;
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