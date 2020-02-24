<?php

// check for different memebrship statuses
$memberships = wc_memberships_get_user_memberships();

$message = "<p>You don't have an active membership! <a href=\"https://www.purduealumni.org/membership/\">Purchase a new mebership</a>.</p>";

foreach ( $memberships as $membership ) {
    //echo "<pre>", print_r(get_class_methods($membership)), "</pre>";

    if ( $membership->status == "wcm-delayed" ) {
        $start_date = date("F j, Y", strtotime($membership->get_start_date()));
        $message = "<p>Your membership is not active yet. Check back on or after {$start_date}.</p>";
    }
}

echo $message;
?>
<p>If this is an error, please let us know by emailing <a href="mailto:alumnidigital@purdue.edu">alumnidigital@purdue.edu</a></p>