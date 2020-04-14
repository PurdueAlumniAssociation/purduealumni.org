jQuery(document).ready( function($) {
    //black bar search toggle
    $('.black-bar-menu__link--search').click( function() {
        $('.black-bar-menu__search-form').slideToggle( {
            duration: 'fast',
            easing: 'linear',
            complete: function() {
                if( $('.black-bar-menu__search-form').css('display') === "none" ) {
                    $('.black-bar-menu__link--search').focus();
                } else {
                    $('#black-bar-search').focus();
                }
            }
        });
    });

    // mobile menu toggle
    $('#mobile-menu-toggle').click( function() {
        $('#mobile-menu').slideToggle( {
            duration: 'fast',
            easing: 'linear',
            complete: function() {
                if( $('#mobile-menu').css('display') === "none" ) {
                    $('#mobile-menu-toggle').focus();
                } else {
                    $('#mobile-menu.primary-menu__list').focus();
                }
            }
        });
    });

    $('#paau_close').click( function() {
        $("#paau_modal").css("display", "none");
    });

    $('#paau_underwriter').click( function() {
        $("#paau_modal").css("display", "block");
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).click( function(event) {
        if ( event.target.id === "paau_modal" ) {
            $("#paau_modal").css("display", "none");
        }
    });
});