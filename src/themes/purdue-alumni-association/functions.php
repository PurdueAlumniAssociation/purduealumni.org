<?php
// Add support for custom features
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_image_size( 'Medium-Large size', 500, 500 );

function paa_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'paa_add_woocommerce_support' );

// Add common styles
function paa_scripts_and_styles() {
    // load custom template styles or default to basic common styles
    switch ( basename( get_page_template() ) ) {
        case "page-membership-tiers.php":
            wp_enqueue_style( 'page-membership-tiers', get_template_directory_uri() . '/css/page-membership-tiers.css' );
            break;
        case "page-object-permanence.php":
            wp_enqueue_style( '150-objects-styles', get_template_directory_uri() . '/css/150-objects.css' );
            wp_enqueue_script( '150-objects-scripts', get_template_directory_uri() . '/js/150-objects.js', array('jquery'), '1.0.0', true ); // true adds it to the footer
            wp_enqueue_script( '150-objects-sharing', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cab956bbac2fc69', true ); // true adds it to the footer
            break;
        case "page-business-directory.php":
            wp_enqueue_style( 'page-biz-dir', get_template_directory_uri() . '/css/page-business-directory.css' );
            break;
        case "page-150-innovations-section.php":
        case "page-150-innovations.php":
            wp_enqueue_style( '150-innovations', get_template_directory_uri() . '/css/150-innovations.css' );
            break;
        case "page-pase-scholarship.php":
            wp_enqueue_script( 'pase-scholarship-scripts', get_template_directory_uri() . '/js/pase-scholarship.js', array('jquery'), '1.0.0', true );
            wp_enqueue_style( 'common-styles', get_template_directory_uri() . '/style.css' );
            break;
        default:
            if ( is_front_page() ) {
                wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css' );

            // add some checks for custom post types
            } elseif ( is_post_type_archive( 'trip' ) ) {
                wp_enqueue_script( 'archive-trip-scripts', get_template_directory_uri() . '/js/trips.js', array('jquery'), '1.0.0', true ); // true adds it to the footer
                wp_enqueue_style( 'archive-trip-styles', get_template_directory_uri() . '/css/archive-trip.css' );
            } elseif ( is_singular( 'trip' ) ) {
                wp_enqueue_style( 'single-trip-styles', get_template_directory_uri() . '/css/single-trip.css' );
			} elseif ( is_singular( 'community' ) ) {
                wp_enqueue_style( 'flag-icon-styles', get_template_directory_uri() . '/css/flag-icon.css');
                wp_enqueue_style( 'single-community-styles', get_template_directory_uri() . '/css/single-community.css' );
            } else {
                wp_enqueue_style( 'common-styles', get_template_directory_uri() . '/style.css' );
            }
    }
    wp_enqueue_script( 'intersection-observer', '//cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js', array(), '0.5.1' );
    //wp_deregister_script( 'jquery' );
    //wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1' );
    wp_enqueue_script( 'featherlight', '//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'common-scripts', get_template_directory_uri() . '/js/common.js', array('jquery'), '1.0.0', true ); // true adds it to the footer
}
add_action( 'wp_enqueue_scripts', 'paa_scripts_and_styles' );

// Add menu locations
function paa_register_menus() {
    register_nav_menus( array(
        'black-bar-menu' => 'Black Bar Menu',
        'primary-menu' => 'Primary Menu',
        'primary-menu-mobile' => 'Primary Mobile Menu',
        'side-menu' => 'Side Menu'
    ) );
}
add_action( 'init', "paa_register_menus" );

include 'function-includes/widgets.php';

function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary-menu-mobile' ) {
        return "<li class='primary-menu__list-item'>
                    <form class='form search-form mobile-menu__search-form' action='" . esc_url( home_url( '/' ) ) . "' id='searchform' method='get' role='search'>
                        <label for='mobile-menu-search'>
                            <span class='sr-only'>Search for:</span>
                        </label>
                        <input class='form__input form__input--text' type='search' value='" . get_search_query() . "' name='s' id='mobile-menu-search'>
                        <button class='form__button form__button--submit search-form__button mobile-menu__search-form-button' type='submit'><i class='fas fa-search'></i><span class='sr-only'>submit button</span></button>
                    </form>
                </li>" . $items;
    }

    return $items;
}
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);

// Custom widgets

// Custom Functions
function paa_get_theme_menu_name( $theme_location ) {
    if( ! $theme_location ) return false;

    $theme_locations = get_nav_menu_locations();
    if( ! isset( $theme_locations[$theme_location] ) ) return false;

    $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
    if( ! $menu_obj ) $menu_obj = false;
    if( ! isset( $menu_obj->name ) ) return false;

    return $menu_obj->name;
}

// Add custom classes dynamically to list items in certain menus
function paa_menu_classes($classes, $item, $args) {
    if( $args->theme_location === 'black-bar-menu' ) {
        $classes[] = 'black-bar-menu__list-item';
    } elseif ( $args->menu_class === 'side-menu__list' ) {
        $classes[] = 'side-menu__list-item';
    } elseif ( $args->menu_class === 'primary-footer__column-list' ) {
        $classes[] = 'primary-footer__column-list-item';
    } elseif ( $args->theme_location === 'primary-menu' || $args->theme_location === 'primary-menu-mobile' ) {
        $classes[] = 'primary-menu__list-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'paa_menu_classes', 1, 3);

function paa_login_logo() { ?>
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,700" rel="stylesheet">
    <style type="text/css">
        #login {
            font-family: "Barlow", sans-serif;
            font-size: 16px;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/svg/logo-optimized.svg);
            width: 100%;
            height: 68px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 0;
        }

        #login .message {
            border-color: #c28e0e;
        }

        #login .button-primary {
            background: #c28e0e;
            border-color: #c28e0e;
            box-shadow: 0 1px 0 #98700d;
            color: #000;
            text-decoration: none;
            text-shadow: none;
            font-size: initial;
        }

        #login label {
            font-size: initial;
        }

        #login .privacy-policy-link, #login .privacy-policy-link:visited {
            color: #383838;
        }

        #login .privacy-policy-link:hover {
            color: #5e5e5e;
        }

        #login .privacy-policy-link:active {
            color: #383838;
        }

        #login #nav, #login #backtoblog {
            font-size: initial;
        }
    </style>
<?php
}
add_action( 'login_enqueue_scripts', 'paa_login_logo' );

function paa_login_header_url($url) {
     return home_url();
}
add_filter( 'login_headerurl', 'paa_login_header_url' );
/*
    Show styles in the backend and add a custom format dropdown to the editor
    to easily add style to content.
*/
// Callback function to insert 'styleselect' into the $buttons array
function paa_mce_buttons_row_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'paa_mce_buttons_row_2' );

// Callback function to filter the MCE settings
function paa_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'Paragraph Callout',
			'block' => 'p',
			'classes' => 'callout',
			'wrapper' => false
		)
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

    // add a bit of padding to the visual editor
    $styles = 'body#tinymce.mce-content-body { padding: 15px !important; }';
    if ( isset( $init_array['content_style'] ) ) {
        $init_array['content_style'] .= ' ' . $styles . ' ';
    } else {
        $init_array['content_style'] = $styles . ' ';
    }

	return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'paa_mce_before_init_insert_formats' );

function paa_allow_button_onclick_mce($settings) {
  $settings['extended_valid_elements'] =  "a[rel|rev|charset|hreflang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur|onclick]";
  return $settings;
}
add_filter('tiny_mce_before_init', 'paa_allow_button_onclick_mce');

function paa_add_editor_styles() {
    add_editor_style( 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
    add_editor_style( 'https://fonts.googleapis.com/css?family=Barlow:400,700,900|Vollkorn:400i' );
    add_editor_style( 'style.css' );
}
add_action( 'init', 'paa_add_editor_styles' );


/**
 * Replace # with js
 * @param string $menu_item item HTML
 * @return string item HTML
 */
function paa_replace_hash($menu_item) {
    if (strpos($menu_item, 'href="#"') !== false) {
        $menu_item = str_replace('href="#"', 'href="#" onclick="return false;"', $menu_item);
    }
    return $menu_item;
}
add_filter('walker_nav_menu_start_el', 'paa_replace_hash', 999);

function paa_excerpt_more( $more ) {
    return sprintf( '... <a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'paa_excerpt_more' );

/**
 * Add custom tables for meta box
 */
function paa_create_tables() {
    if ( ! class_exists( 'MB_Custom_Table_API' ) ) {
        return;
    }

    global $wpdb;
    $prefix = $wpdb->prefix . "metabox_";

    MB_Custom_Table_API::create( "{$prefix}page_css", array(
        'page_css' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}hero_banners", array(
        'heading' => 'TEXT NOT NULL',
        'content' => 'TEXT NOT NULL',
        'button_label' => 'TEXT NOT NULL',
        'button_url' => 'TEXT NOT NULL',
        'button_target' => 'TEXT NOT NULL',
        'background_image' => 'TEXT NOT NULL',
        'background_options' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}graphic_boxes", array(
        'title' => 'TEXT NOT NULL',
        'cut_line' => 'TEXT NOT NULL',
        'url' => 'TEXT NOT NULL',
        'target' => 'TEXT NOT NULL',
        'background_image' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}feature_boxes", array(
        'content' => 'TEXT NOT NULL',
        'button_label' => 'TEXT NOT NULL',
        'button_url' => 'TEXT NOT NULL',
        'button_target' => 'TEXT NOT NULL',
        'image' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}news_events", array(
        'title' => 'TEXT NOT NULL',
        'description' => 'TEXT NOT NULL',
        'button_label' => 'TEXT NOT NULL',
        'button_url' => 'TEXT NOT NULL',
        'button_target' => 'TEXT NOT NULL',
        'image' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}benefits", array(
        'benefit__name' => 'TEXT NOT NULL',
        'benefit__plans' => 'TEXT NOT NULL',
        'benefit__public_url' => 'TEXT NOT NULL',
        'benefit__member_url' => 'TEXT NOT NULL',
        'benefit__public_description' => 'TEXT NOT NULL',
        'benefit__member_description' => 'TEXT NOT NULL',
        'benefit__cut_line' => 'TEXT NOT NULL',
        'benefit__image' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}homepage", array(
        'hero_banner' => 'TEXT NOT NULL',
        'graphic_boxes' => 'TEXT NOT NULL',
        'news_events' => 'TEXT NOT NULL',
        'column_2_title' => 'TEXT NOT NULL',
        'feature_box' => 'TEXT NOT NULL'
    ) );

    MB_Custom_Table_API::create( "{$prefix}trips", array(
        'start_date' => 'TEXT NOT NULL',
        'end_date' => 'TEXT NOT NULL',
        'thumbnail' => 'TEXT NOT NULL',
        'operator' => 'TEXT NOT NULL',
        'pricing' => 'TEXT NOT NULL',
        'download_group' => 'TEXT NOT NULL'
    ) );
}
add_action( 'init', 'paa_create_tables' );

// remove yoast on certain post types
function my_remove_wp_seo_meta_box() {
    remove_meta_box('wpseo_meta', 'graphic-box', 'normal');
    remove_meta_box('wpseo_meta', 'hero-banner', 'normal');
    remove_meta_box('wpseo_meta', 'news-event', 'normal');
    remove_meta_box('wpseo_meta', 'feature-box', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box', 100);

// Exclude pages from WordPress Search
if (!is_admin()) {

    function paa_search_filter( $query ) {
        if ( $query->is_search && $query->is_main_query() ) {
            include 'function-includes/exclude-post-ids.php';
            if ( isset( $exclude_post_ids ) ) {
                $query->set( 'post__not_in', $exclude_post_ids ); // add ids (comma separated) of posts to exclude
            }
        }
        return $query;
    }
    add_filter('pre_get_posts','paa_search_filter');
}

include 'function-includes/custom-query-vars.php';

require_once 'classes/GWEmailDomainControl.class.php';
include 'function-includes/gf-customizations.php';
include 'function-includes/woocommerce-customizations.php';

// 150 Objects Filters
function paa_create_temp_column($fields) {
  global $wpdb;
  $has_the = " CASE
      WHEN $wpdb->posts.post_title regexp '^(The)[[:space:]]'
        THEN trim(substr($wpdb->posts.post_title from 4))
      ELSE $wpdb->posts.post_title
        END AS title2";
  if ($has_the) {
    $fields .= ( preg_match( '/^(\s+)?,/', $has_the ) ) ? $has_the : ", $has_the";
  }
  return $fields;
}

function paa_sort_by_temp_column ($orderby) {
  $custom_orderby = " TRIM( LEADING '\‘' FROM TRIM( LEADING '''' FROM UPPER(title2) ) )";
  if ($custom_orderby) {
    $orderby = $custom_orderby;
  }
  return $orderby;
}

include 'function-includes/club-dashboard.php';
include 'function-includes/shortcode-community-index.php';

function paa_custom_mime_types( $mimes ) {
    // new allowed mime types
    $mimes['svg'] = 'image/svg+xml';
    $mimes['csv'] = 'text/csv';

    return $mimes;
}
add_filter( 'upload_mimes', 'paa_custom_mime_types' );
?>
