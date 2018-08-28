<form class="form search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-page-input">
        <span class="sr-only">Search for:</span>
    </label>
    <input class="form__input form__input--text" type="search" id="search-page-input" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="form__button form__button--submit search-form__button" type="submit"><i class="fas fa-search"></i><span class="sr-only">submit button</span></button>
</form>