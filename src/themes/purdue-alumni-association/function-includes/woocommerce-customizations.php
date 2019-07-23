<?php

function paa_remove_tabs_my_account($items)
{
    unset($items['dashboard']);
    unset($items['downloads']);
    unset($items['edit-address']);
    unset($items['members-area']);

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_remove_tabs_my_account', 999);

function paa_rename_tabs_my_account($items)
{
    $items['subscriptions'] = 'My Membership';
    $items['edit-account'] = 'My Profile';
    $items['orders'] = 'Purchase History';
    $items['payment-methods'] = 'Payment Methods';

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_rename_tabs_my_account', 999);

function paa_add_my_account_links($items)
{
    $items['my-benefits'] = 'My Benefits';

    return $items;
}
add_filter( 'woocommerce_account_menu_items', 'paa_add_my_account_links', 999 );

// show addresses in My Profile page
add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_address' );

function paa_rename_shipping_address_text( $translated, $text, $domain )
{
    if ( $text === 'Shipping address' ) {
        $translated = __('Mailing address', $domain );
    }

    return $translated;
}
add_filter( 'gettext', 'paa_rename_shipping_address_text', 10, 3 );

// add My Benefits section
function paa_add_my_account_endpoints()
{
    add_rewrite_endpoint('my-benefits', EP_ROOT | EP_PAGES);
}
add_action('init', 'paa_add_my_account_endpoints');

function paa_my_account_add_query_vars($vars)
{
    $vars[] = 'my-benefits';

    return $vars;
}
add_filter('query_vars', 'paa_my_account_add_query_vars', 0);

function paa_my_benefits_content()
{
    get_template_part('template-parts/my-benefits');
}
add_action('woocommerce_account_my-benefits_endpoint', 'paa_my_benefits_content');

function paa_my_account_menu_order()
{
    $items = array(
        'my-benefits'            => __( 'My Benefits', 'woocommerce' ),
        'subscriptions'          => __( 'My Membership', 'woocommerce'),
        'edit-account'           => __( 'My Profile', 'woocommerce' ),
        'orders'                 => __( 'Purchase History', 'woocommerce' ),
        'payment-methods'        => __( 'Payment Methods', 'woocommerce' ),
        'customer-logout'        => __( 'Logout', 'woocommerce' )
    );

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_my_account_menu_order');
