<?php
function paa_add_css_to_all_woocommerce_emails($css, $email)
{
    $css .= '
       a { color: blue !important; }
       #credit { background-color: #eee; padding: 1em; border-top-left-radius: 0; border-top-right-radius: 0; }
       #template_container { border-bottom-left-radius: 6px !important; border-bottom-right-radius: 6px !important; }
    ';
    return $css;
}
add_filter( 'woocommerce_email_styles', 'paa_add_css_to_all_woocommerce_emails', 9999, 2 );

function paa_add_css_to_specific_emails($css, $email)
{
    // if ($email->id == 'new_order') {
    //    $css .= '
    //       h2 { color: red }
    //       h3 { font-size: 30px }
    //    ';
    // }
    // if ( $email->id == 'cancelled_order' ) {}
    // if ( $email->id == 'customer_completed_order' ) {}
    // if ( $email->id == 'customer_invoice' ) {}
    // if ( $email->id == 'customer_new_account' ) {}
    // if ( $email->id == 'customer_note' ) {}
    // if ( $email->id == 'customer_on_hold_order' ) {}
    // if ( $email->id == 'customer_refunded_order' ) {}
    // if ( $email->id == 'customer_reset_password' ) {}
    // if ( $email->id == 'failed_order' ) {}
    return $css;
}
add_filter( 'woocommerce_email_styles', 'paa_add_css_to_specific_emails', 9999, 2 );

function paa_add_subscription_name_to_table($subscription)
{
    foreach ( $subscription->get_items() as $item_id => $item ) {
        $_product = apply_filters('woocommerce_subscriptions_order_item_product', $subscription->get_product_from_item($item), $item);

        if (apply_filters('woocommerce_order_item_visible', true, $item)) {
            echo wp_kses_post(
                apply_filters('woocommerce_order_item_name', $item['name'], $item));
        }
    }
}
add_action( 'woocommerce_my_subscriptions_after_subscription_id', 'paa_add_subscription_name_to_table', 35 );

function paa_alter_woocommerce_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'paa_alter_woocommerce_checkout_fields' );
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

function paa_remove_tabs_my_account($items)
{
    unset($items['dashboard']);
    unset($items['downloads']);
    unset($items['edit-address']);
    unset($items['members-area']);
    unset($items['orders']);

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_remove_tabs_my_account', 999);

function paa_rename_tabs_my_account($items)
{
    $items['subscriptions'] = 'My Membership';
    $items['edit-account'] = 'My Profile';
    $items['payment-methods'] = 'Payment Methods';

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_rename_tabs_my_account', 999);

function paa_add_my_account_links($items)
{
    $items['my-benefits'] = 'My Benefits';
    $items['membership-card'] = 'Membership Card';

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
    add_rewrite_endpoint('membership-card', EP_ROOT | EP_PAGES);
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

function paa_membership_card_content()
{
    get_template_part('template-parts/membership-card');
}
add_action('woocommerce_account_membership-card_endpoint', 'paa_membership_card_content');

function paa_my_account_menu_order()
{
    $items = array(
        'my-benefits'            => __( 'My Benefits', 'woocommerce' ),
        'subscriptions'          => __( 'My Membership', 'woocommerce'),
        'edit-account'           => __( 'My Profile', 'woocommerce' ),
        'membership-card'        => __( 'Membership Card', 'woocommerce' ),
        'payment-methods'        => __( 'Payment Methods', 'woocommerce' ),
        'customer-logout'        => __( 'Logout', 'woocommerce' )
    );

    return $items;
}
add_filter('woocommerce_account_menu_items', 'paa_my_account_menu_order');

function add_custom_titles_for_endpoints( $post_title )
{
    if ( ! is_account_page() ) {
        return $post_title;
    }

    if( is_admin() || in_the_loop() ) {
        global $wp;

        if ( isset( $wp->query_vars['my-benefits'] ) ) {
            $post_title = 'My Benefits';
        } elseif ( isset( $wp->query_vars['edit-account'] ) ) {
            $post_title = 'My Profile';
        } elseif ( isset( $wp->query_vars['subscriptions'] ) ) {
            $post_title = 'My Membership';
        } elseif ( isset( $wp->query_vars['view-subscription'] ) ) {
            $post_title = 'My Membership';
        } elseif ( isset( $wp->query_vars['payment-methods'] ) ) {
            $post_title = 'Payment Methods';
        }
    }

    return $post_title;
}
add_filter( 'the_title', 'add_custom_titles_for_endpoints', 20);

// must test in dev
// function paa_profile_update_notification( $user_id, $old_user_data ) {
//     wp_mail("bholaday@purdue.edu", "update", "works");
// }
// add_action( 'profile_update', 'paa_profile_update_notification', 10, 2 );
