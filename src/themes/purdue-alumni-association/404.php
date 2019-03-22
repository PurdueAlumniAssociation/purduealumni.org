<?php get_header(); ?>
<!-- <section class="row">
    <main id="main" tabindex="-1">
        <h1>Not Found</h1>
        <p><?php //esc_html_e( 'Whoops! The page you are looking for is no longer here. Try searching for the page you are looking for.' ); ?></p>
        <?php //get_search_form(); ?>
    </main>
</section> -->
<div style="position:relative">
<h1 class="content--404-title">Whoops! The page you are looking for is no longer here. Try searching for the page you are looking for. </h1>
<img src="<?php echo esc_url( home_url( 'wp-content/uploads/404-Page-bg-13.svg' ) ); ?>" class="content--background">
<img src="<?php echo esc_url( home_url( 'wp-content/uploads/404-Page-astro.svg' ) ); ?>" class="content--astro">
<img src="<?php echo esc_url( home_url( 'wp-content/uploads/404-Page-astro-03.svg' ) ); ?>" class="content--hands">
<form class="form search-form search-form--404" role="search" method="get" action="https://www.purduealumni.org"/>
  <div class="">
    <input class="search-form__input search-form__input--404" type="search" id="search-page-input-404" value name="s"/>
  </div>
  <button class="form__404-button form__404-button--submit search-form__404-button" type="submit">
    <i class= "fas fa-search">
    </i>
    <span class="sr-only">submit button</span>
    </button>
</form>
</div>
<?php get_footer(); ?>
