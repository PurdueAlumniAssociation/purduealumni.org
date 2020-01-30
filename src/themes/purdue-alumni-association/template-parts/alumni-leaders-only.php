<h1><?php the_title(); ?></h1>

<?php

if (is_user_logged_in()) {
    $volunteer = get_user_meta( get_current_user_id(), 'club_volunteer', TRUE );

    $user = wp_get_current_user();
    $roles = (array) $user->roles;
    $is_admin = in_array('administrator', $roles);

    if ( ! empty($volunteer) || $is_admin ) {
        the_content(); ?>
        <?php
    } else {
        echo "Sorry! You must be a club volunteer to view this content. Contact <a href=\"mailto:alumnidigital@purdue.edu?subject=I need help with the club dashboard\">alumnidigital@purdue.edu</a> if you need help.";
    }
} else {
    echo "You must <a href=\"", wp_login_url( get_permalink() ), "\">log in</a> and to view this content.";
}
?>
