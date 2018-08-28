<?php
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
                    <form action='http://example.com/' id='searchform' method='get'>
                        <input type='text' name='s' id='s' placeholder='Search'>
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
<?php }
add_action( 'login_enqueue_scripts', 'paa_login_logo' );