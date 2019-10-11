<h1><?php the_title(); ?></h1>

<?php

if (is_user_logged_in()) {
    $volunteer = get_user_meta( get_current_user_id(), 'club_volunteer', TRUE );

    if ( ! empty($volunteer) ) {
        the_content(); ?>
        <iframe id="club-dashboard" src="https://tableau.itap.purdue.edu/views/EntityMapNEW/Overview?:embed=y&amp;:showShareOptions=true&amp;:display_count=no&amp;:showVizHome=no"></iframe>
        <?php
    } else {
        echo "Sorry! You must be a club volunteer to view the dashboard. Contact <a href=\"mailto:alumnidigital@purdue.edu?subject=I need help with the club dashboard\">alumnidigital@purdue.edu</a> if you need help.";
    }
} else {
    echo "You must <a href=\"", wp_login_url( get_permalink() ), "\">log in</a> and to view the dashboard.";
}
?>
