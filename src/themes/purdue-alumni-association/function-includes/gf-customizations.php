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

function paa_autobill( $form )
{
    $full_amount = filter_var($_GET['fa'], FILTER_SANITIZE_STRING);
    $payments_remaining = filter_var($_GET['pr'], FILTER_SANITIZE_STRING);
    $payment_amount = filter_var($_GET['pp'], FILTER_SANITIZE_STRING);
    $years = "years";

    if (!empty($full_amount) && !empty($payments_remaining) && !empty($payment_amount)) {
        if ($payments_remaining == 1) {
            $years = "year";
        }

        $fields = $form['fields'];

        foreach( $form['fields'] as &$field ) {
          if ( $field->id == 1 ) { // dev 3, prod 1
            $field->choices[0]['text'] = $field->choices[0]['text'] . " (\${$full_amount})";
            $field->choices[1]['text'] = $field->choices[1]['text'] . " (\${$payment_amount} for {$payments_remaining} more {$years})";
          }
        }

        return $form;
    } else {
        // dont return the form
        add_filter( 'gform_form_not_found_message', function() {
            return "Oops! We are missing some required information. Please contact our <a href=\"mailto:alumnidigital@purdue.edu?subject=Problem with the Recurring Payments Page\">digital team</a> to get it all straightened out.";
        });

        wp_mail(
            "alumnidigital@purdue.edu",
            "Problem with the Recurring Payment Page",
            "IP: {$_SERVER['REMOTE_ADDR']}   Request URI: {$_SERVER['REQUEST_URI']}"
        );
    }
}
add_filter( 'gform_pre_render_182', 'paa_autobill' ); // dev 35, prod 182