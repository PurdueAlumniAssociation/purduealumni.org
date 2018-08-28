<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,700,900|Vollkorn:400i">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18595276-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-18595276-1', { 'send_page_view': false });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
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
            <a class="button button--small button--almost-black primary-menu__mobile-menu-button" id="mobile-menu-toggle" href="javascript:void(0)"><i class="fas fa-bars primary-menu__mobile-menu-button-icon" rel="js-mobile-menu-button-icon"></i> Menu</a>
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