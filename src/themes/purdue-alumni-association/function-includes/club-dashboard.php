<?php
function paa_user_meta_volunteer( $user ) {
?>
<h2>Club Volunteer</h2>
    <table class="form-table">
        <tr>
            <th><label for="user_volunteer">Club Volunteer</label></th>
            <td>
                <input
                    type="checkbox"
                    value="yes"
                    <?php if(get_user_meta($user->ID, 'user_volunteer', true)=='yes') echo 'checked="checked"'; ?>
                    name="user_volunteer"
                    id="user_volunteer"
                /> Yes
                <p class="description">If this user is a club volunteer, check the box.</p>
            </td>
        </tr>
    </table>
</td>
<?php
}
add_action('edit_user_profile', 'paa_user_meta_volunteer'); // editing another user
add_action('user_new_form', 'paa_user_meta_volunteer'); // creating a new user

function paa_user_meta_volunteer_save( $userId ) {
    if (!current_user_can('edit_user', $userId)) {
        return;
    }
    update_user_meta($userId, 'user_volunteer', $_REQUEST['user_volunteer']);
}
//add_action('personal_options_update', 'user_meta_volunteerSave');
add_action('edit_user_profile_update', 'paa_user_meta_volunteer_save');
add_action('user_register', 'paa_user_meta_volunteerSave');