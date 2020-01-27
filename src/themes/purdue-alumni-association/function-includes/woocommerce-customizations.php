<?php
function paa_add_css_to_all_woocommerce_emails($css, $email)
{
    //$css .= 'a { color: blue !important; }
       #template_header_image img { max-width: 600px; }
       #template_header, #template_body, #credit { border: 1px solid #e5e5e5; }
       #template_header { border-bottom-left-radius: 0 !important; border-bottom-right-radius: 0 !important; border-bottom: 0 !important; }
       #template_body { border-radius: 0 !important; border-top: 0 !important; border-bottom: 0 !important; }
       #credit { background-color: #eee; padding: 1em; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important; border-top: 0 !important;}
    //';

    $css .= '
        a { color: blue !important; }
        h1 { font-size: 1.5em; line-height: 1.5; }
        #template_header_image img { max-width: 550px; }
    ';
    return $css;
}
add_filter( 'woocommerce_email_styles', 'paa_add_css_to_all_woocommerce_emails', 9999, 2 );

function paa_add_css_to_specific_emails($css, $email)
{
    // if ($email->id == 'new_order') {}
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
    $items['membership-card'] = 'My Membership Card';

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
    $vars[] = 'membership-card';

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
        'membership-card'        => __( 'My Membership Card', 'woocommerce' ),
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
        } elseif ( isset( $wp->query_vars['membership-card'] ) ) {
            $post_title = 'My Membership Card';
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

function paa_profile_update_notification( $user_id, $old_user_data ) {
    $body = "This is the most recent data for the member.\r\n\r\n";

    $meta_keys = array(
        'constituent_id',
        'first_name',
        'last_name',
        'email',
        'billing_first_name',
        'billing_last_name',
        'billing_company',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_country',
        'billing_phone',
        'billing_email',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_company',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_state',
        'shipping_postcode',
        'shipping_country',
        'gender',
        'birthday',
        'graduation_year',
        'purdue_connection',
        'purdue_global',
        'user_constituentId'
    );

    foreach( $meta_keys as $key ) {
        $value = get_user_meta($user_id, $key, true);

        if ( ! empty($value) ) {
            $body .= "{$key}: {$value}\r\n";
        }

        unset($value);
    }

    wp_mail("alumnimembership@purdue.edu", "User Profile Updated", $body);
}
add_action( 'profile_update', 'paa_profile_update_notification', 10, 2 );

function paa_before_single_product() {
    $categories = wc_get_product_category_list($id);

    // only apply to membership products
    if (strstr($categories, 'membership')) {
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_product_description_tab', 40 );

        // Remove the product description title
        add_filter( 'woocommerce_product_description_heading', function() { return ''; } );
    }
}
add_action('woocommerce_before_single_product', 'paa_before_single_product', 10);

function userMetaConstituentId( $user ) {
?>
<h2>Constituent ID</h2>
    <table class="form-table">
        <tr>
            <th><label for="user_constituentId">Constituent ID</label></th>
            <td>
                <input
                    type="text"
                    value="<?php echo esc_attr(get_user_meta($user->ID, 'user_constituentId', true)); ?>"
                    name="user_constituentId"
                    id="user_constituentId"
                >
                <p class="description">The Constituent ID assigned by Purdue University.</p>
            </td>
        </tr>
    </table>
<?php
}
//add_action('show_user_profile', 'userMetaConstituentId'); // editing your own profile
add_action('edit_user_profile', 'userMetaConstituentId'); // editing another user
add_action('user_new_form', 'userMetaConstituentId'); // creating a new user

function userMetaConstituentIdSave( $userId ) {
    if (!current_user_can('edit_user', $userId)) {
        return;
    }

    update_user_meta($userId, 'user_constituentId', $_REQUEST['user_constituentId']);
}
//add_action('personal_options_update', 'userMetaConstituentIdSave');
add_action('edit_user_profile_update', 'userMetaConstituentIdSave');
add_action('user_register', 'userMetaConstituentIdSave');


function paa_woocommerce_auto_complete_order( $order_id ) {
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}
add_action( 'woocommerce_thankyou', 'paa_woocommerce_auto_complete_order' );

function paa_custom_refund_message( $subscription ) {
    wc_add_notice( _x( 'Your account will remain active until the membership end date. If you would instead prefer to stop your membership completely and request a refund, please contact our <a href="mailto:alumnimembership@purdue.edu">membership team</a>.', 'Notice displayed to user confirming their action.', 'woocommerce-subscriptions' ), 'notice' );
}
add_action('woocommerce_customer_changed_subscription_to_cancelled', 'paa_custom_refund_message');


/////////////////////////////
function paa_subscriptions_custom_price_string( $pricestring ) {
    global $product;

    $products_to_change = array( 4523, 11149, 175186, 191584, 191734, 190430 );

    if ( in_array( $product->id, $products_to_change ) ) {
        $pricestring = str_replace( 'for 1 year', '', $pricestring );
    }
    return $pricestring;
}
add_filter( 'woocommerce_subscriptions_product_price_string', 'paa_subscriptions_custom_price_string', 100, 1 );
add_filter( 'woocommerce_subscription_price_string', 'paa_subscriptions_custom_price_string', 100, 1 );

function paa_life_custom_cart_button_text( $button_text ) {
    global $product;

    $products_to_change = array( 4523, 11149, 175186, 191584, 191734, 190430 );

    if ( in_array( $product->id, $products_to_change ) ) {
        return __('Join Now', 'woocommerce');
    }

    return $button_text;
}
add_filter('woocommerce_product_single_add_to_cart_text', 'paa_life_custom_cart_button_text');
