<?php
    // set audience, default to self
    if ( isset( $_GET['purchaser'] ) ) {
        $audience = $_GET['purchaser'];
    } else {
        $audience = "self";
    }

    // set message content, default to self
    if ( $audience !== "self" ) {
        $message = rwmb_meta( 'wysiwyg_other' );
    } else { // audience == "self"
        $message = rwmb_meta( 'wysiwyg_self' );
    }

    // output the message
    echo do_shortcode( wpautop( $message ) );