<?php

global $wp_query;

// register our main script but do not enqueue it yet
wp_register_script( 'paa_loadmore', get_stylesheet_directory_uri() . '/js/150-items.js', array('jquery') );

wp_localize_script( 'paa_loadmore', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));

wp_enqueue_script( 'paa_loadmore' );