<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function paa_widgets_init() {
    register_sidebar( array(
        'name'          => 'Left Sidebar',
        'id'            => 'left-sidebar',
        'before_title'  => '<h2 class="sr-only">',
        'after_title'   => '</h2>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Travel Sidebar',
        'id'            => 'travel-sidebar',
        'before_title'  => '<h2 class="sr-only">',
        'after_title'   => '</h2>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Primary Footer - Column 1',
        'id'            => 'primary-footer-col-1',
        'before_widget' => '<div class="col-xs-12 col-sm-3 primary-footer__column">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Primary Footer - Column 2',
        'id'            => 'primary-footer-col-2',
        'before_widget' => '<div class="col-xs-12 col-sm-3 primary-footer__column">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Primary Footer - Column 3',
        'id'            => 'primary-footer-col-3',
        'before_widget' => '<div class="col-xs-12 col-sm-3 primary-footer__column">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Primary Footer - Column 4',
        'id'            => 'primary-footer-col-4',
        'before_widget' => '<div class="col-xs-12 col-sm-3 primary-footer__column">',
        'after_widget'  => '</div>'
    ) );
    register_sidebar( array(
        'name'          => 'Sponsors',
        'id'            => 'sponsors',
        'before_widget' => '<div class="sponsors">',
        'after_widget'  => '</div>'
    ) );

}
add_action( 'widgets_init', 'paa_widgets_init' );
