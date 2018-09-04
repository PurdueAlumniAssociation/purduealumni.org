<?php
// Add support for custom features
//add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// Add common styles
function paa_scripts_and_styles() {
    wp_enqueue_style( 'common-styles', get_stylesheet_uri() ); // style.css
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true ); // true adds it to the footer
}
add_action( 'wp_enqueue_scripts', 'paa_scripts_and_styles' );

// Add menu locations
function paa_register_menus() {
    register_nav_menus( array(
        'black-bar-menu' => 'Black Bar Menu',
        'primary-menu' => 'Primary Menu',
        'primary-menu-mobile' => 'Primary Mobile Menu',
        'primary-footer-1' => 'Primary Footer Column 1',
        'primary-footer-2' => 'Primary Footer Column 2',
        'primary-footer-3' => 'Primary Footer Column 3',
        'primary-footer-4' => 'Primary Footer Column 4',
        'primary-footer-5' => 'Primary Footer Column 5'
    ) );
}
add_action( 'init', "paa_register_menus" );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function paa_widgets_init() {
    register_sidebar( array(
        'name'          => 'Left Sidebar',
        'id'            => 'left-sidebar',
        'before_widget' => '<aside class="social-media-box primary-footer__social-media-box">',
        'after_widget'  => '</aside>'
    ) );

    register_sidebar( array(
        'name'          => 'Footer Social Media',
        'id'            => 'footer-social-media-box',
        'before_widget' => '<aside class="social-media-box primary-footer__social-media-box">',
        'after_widget'  => '</aside>'
    ) );

    register_sidebar( array(
        'name'          => 'Secondary Footer - Left',
        'id'            => 'secondary-footer-left',
        'before_widget' => '<div class="secondary-footer__left-content">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Secondary Footer - Right',
        'id'            => 'secondary-footer-right',
        'before_widget' => '<div class="secondary-footer__right-content">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'paa_widgets_init' );

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
                </li>
                <li class='primary-menu__list-item'>
                    <a class='primary-menu__link' href='#'><i class='fa fa-key' aria-hidden='true'></i> Login</a>
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
    } elseif ( $args->menu_class === 'primary-footer__column-list' ) {
        $classes[] = 'primary-footer__column-list-item';
    } elseif ( $args->theme_location === 'primary-menu' || $args->theme_location === 'primary-menu-mobile' ) {
        $classes[] = 'primary-menu__list-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'paa_menu_classes', 1, 3);

// read more text to the excerpt
// function paa_excerpt_more( $more ) {
//     global $post;
//     return ' <a href="'.get_permalink($post->ID).'" rel="nofollow">Read More</a>';
// }
// add_filter( 'excerpt_more', 'paa_excerpt_more' );

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

function paa_add_editor_styles() {
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
        $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
    }
    return $menu_item;
}
add_filter('walker_nav_menu_start_el', 'paa_replace_hash', 999);
?>