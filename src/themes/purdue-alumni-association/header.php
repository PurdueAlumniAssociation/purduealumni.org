<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KTNT5LJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php // <title> is added dynamically ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,700,900|Vollkorn:400i">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php wp_head();

        // add custom page css if present
        $args = array( 'storage_type' => 'custom_table', 'table' => 'wp_metabox_pageCss' );
        $page_css = rwmb_meta( 'page_css', $args );
        if ( $page_css ) {
            echo "<style type=\"text/css\">", str_replace(" ","",$page_css), "</style>\n";
        }
    ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTNT5LJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a href="#main" class="skip-to">Skip to Main Content</a>
    <header class="black-bar">
        <?php if ( has_nav_menu( 'black-bar-menu' ) ) : ?>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'black-bar-menu',
                    'menu_class'     => 'black-bar-menu__list',
                    'container' => 'nav',
                    'container_class' => 'black-bar-menu'
                 ) );
            ?>
            </div>
        <?php endif; ?>
        <form class="form search-form black-bar-menu__search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="black-bar-search">
                <span class="sr-only">Search for:</span>
            </label>
            <input class="form__input form__input--text" type="search" id="black-bar-search" value="<?php echo get_search_query(); ?>" name="s" />
            <button class="form__button form__button--submit search-form__button black-bar-menu__search-form-button" type="submit"><i class="fas fa-search"></i><span class="sr-only">submit button</span></button>
        </form>
    </header>
    <header class="row row--full-width header">
        <a class="header__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="header__logo" src="<?= get_template_directory_uri() ?>/svg/logo-optimized.svg" alt="Purdue Alumni Association" />
        </a>
        <div class="header__right-content">
            <a class="button button--small button--almost-black primary-menu__mobile-menu-button" id="mobile-menu-toggle" href="#" onclick="return false;"><i class="fas fa-bars primary-menu__mobile-menu-button-icon" rel="js-mobile-menu-button-icon"></i> Menu</a>
            <?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'menu_class'     => 'primary-menu__list',
                        'container' => 'nav',
                        'container_class' => 'primary-menu header__navigation'
                     ) );
                ?>
            <?php endif; ?>
        </div>
    </header>
    <?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
        <nav class="primary-menu primary-menu--mobile" id="mobile-menu">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu-mobile',
                'menu_class'     => 'primary-menu__list',
                'container' => false
             ) );
        ?>
        </nav>
    <?php endif; ?>