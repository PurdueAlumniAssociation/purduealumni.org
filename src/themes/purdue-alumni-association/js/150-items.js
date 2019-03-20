document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

  if ("IntersectionObserver" in window) {
    let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.classList.remove("lazy");
          // TO DO: add/remove class for animation
          lazyImageObserver.unobserve(lazyImage);
        }
      });
    });

    lazyImages.forEach(function(lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  } else {
    // Possibly fall back to a more compatible method here
  }
});

// jQuery(function($){
//     var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
//         bottomOffset = 1600; // the distance (in px) from the page bottom when you want to load more posts
//
//     $(window).scroll(function(){
//         var data = {
//             'action': 'loadmore',
//             'query': paa_loadmore_params.posts,
//             'page' : paa_loadmore_params.current_page
//         };
//             // console.log( "st: "+$(document).scrollTop() );
//             // console.log( "dh-bo:"+($(document).height() - bottomOffset) );
//             // console.log( "cbl: "+canBeLoaded );
//             // console.log( paa_loadmore_params.current_page );
//         if( $(document).scrollTop() > ( $(document).height() - bottomOffset ) && canBeLoaded == true ){
//             //console.log("here2" );
//             console.log( "data.action: " + data.action );
//             console.log( "data.query: " + data.query );
//             console.log( "data.page: " + data.page );
//             console.log( "paa_loadmore_params.ajaxurl: " + paa_loadmore_params.ajaxurl );
//             $.ajax({
//                 url: paa_loadmore_params.ajaxurl,
//                 data: data,
//                 type: 'POST',
//                 beforeSend: function( xhr ){
//                     // you can also add your own preloader here
//                     // you see, the AJAX call is in process, we shouldn't run it again until complete
//                     canBeLoaded = false;
//                 },
//                 success: function( data ){
//                     //console.log("here3" );
//                     console.log( "Success: " + data )
//                     if( data ) {
//                         // $('#main').find('article:last-of-type').after( data ); // where to insert posts
//                         canBeLoaded = true; // the ajax is completed, now we can run it again
//                         $("#ajax-posts").find('h3:last-of-type').after( data);
//                         paa_loadmore_params.current_page++;
//                     }
//                 },
//                 error: function() {
//                     console.warning( "Error!" );
//                 }
//             });
//         }
//     });
// });

jQuery( function ($) {
    var ppp = 10; // Post per page
    var pageNumber = 1;
    var total = $('#totalpages').val();
    var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
        bottomOffset = 1600; // the distance (in px) from the page bottom when you want
    var loader = '<div class="loader"><span class="sr-only">Loading more</span></div>';

    $(window).scroll( function () {
        if ( $(document).scrollTop() > ( $(document).height() - bottomOffset ) && canBeLoaded == true ) {
            pageNumber++;
            var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
            jQuery.ajax({
                type: "POST",
                dataType: "html",
                url: the_ajax_script.ajaxurl,
                data: str,
                beforeSend: function () {
                    // the AJAX call is in process, we shouldn't run it again until complete
                    canBeLoaded = false;

                    $("#ajax-posts").append(loader);
                },
                success: function ( data ) {
                    // the ajax is completed, now we can run it again
                    canBeLoaded = true;

                    var $data = jQuery( data );

                    // we have some posts, append them to the list
                    if ( $data.length ) {
                        $("#ajax-posts").append( $data );
                    }

                    // we've displayed all the posts, stop future ajax calls
                    if ( total == pageNumber ) {
                        canBeLoaded = false;
                    }
                },
                error: function () {
                    console.log( "Error!" );
                },
                complete: function () {
                    $(".loader").remove();
                }
            }); // end ajax
        }
        return false;
    }); // end scroll event
});