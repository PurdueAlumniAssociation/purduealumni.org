<?php

// exclude purdue.edu from email
// PASE Senior Send Off form
new GWEmailDomainControl(array(
    'form_id' => 30,
    'field_id' => 2,
    'domains' => array('purdue.edu'),
    'validation_message' => __('Whoops! At some point Purdue will delete your <strong>%s</strong> email account, and we want to be able to stay in touch afterwards. Please provide an alternate email address.'),
    'mode' => 'ban'
));

// exclude purdue.edu from email
// Graduating Senior Information form
new GWEmailDomainControl(array(
    'form_id' => 46,
    'field_id' => 3,
    'domains' => array('purdue.edu'),
    'validation_message' => __('Whoops! At some point Purdue will delete your <strong>%s</strong> email account, and we want to be able to stay in touch afterwards. Please provide an alternate email address.'),
    'mode' => 'ban'
));

// exclude purdue.edu from email
// Graduating Senior Information form
new GWEmailDomainControl(array(
    'form_id' => 87,
    'field_id' => 2,
    'domains' => array('purdue.edu'),
    'validation_message' => __('Whoops! At some point Purdue will delete your <strong>%s</strong> email account, and we want to be able to stay in touch afterwards. Please provide an alternate email address.'),
    'mode' => 'ban'
));


function paa_include_paypal_comment1( $args, $form_id ) {
    $form = GFAPI::get_form( $form_id );

    if ( strlen($form['title']) > 0 ) {
        $form_title = substr( $form['title'], 0, 127 );

        $args['COMMENT1'] = $form_title;
    }

    return $args;
}
add_filter( 'gform_paypalpaymentspro_args_before_payment', 'paa_include_paypal_comment1', 10, 2 );