<?php

function paa_remove_tabs_my_account($items)
{
    unset($items['downloads']);
    unset($items['edit-address']);
    unset($items['customer-logout']);
    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_remove_tabs_my_account', 999);

function paa_rename_tabs_my_account($items)
{
    $items['dashboard'] = 'Benefits';
    $items['orders'] = 'Orders';
    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_rename_tabs_my_account', 999);

function paa_add_my_profile_endpoint()
{
    add_rewrite_endpoint('my_profile', EP_ROOT | EP_PAGES);
}
add_action('init', 'paa_add_my_profile_endpoint');

function paa_my_profile_query_vars($vars)
{
    $vars[] = 'my-profile';
    return $vars;
}
add_filter('query_vars', 'paa_my_profile_query_vars', 0);

function paa_add_my_profile_link_my_account($items)
{
    $items['my-profile'] = 'My Profile';
    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_add_my_profile_link_my_account');

function paa_my_profile_content()
{
    echo '<h3>Premium WooCommerce Support</h3><p>Welcome to the WooCommerce support area. As a premium customer, you can submit a ticket should you have any WooCommerce issues with your website, snippets or customization. <i>Please contact your theme/plugin developer for theme/plugin-related support.</i></p>';
    // echo do_shortcode(' /* your shortcode here */ ');
}
add_action('woocommerce_account_my_profile_endpoint', 'paa_my_profile_content');
