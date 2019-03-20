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
          lazyImage.parentElement.classList.remove("card--fadeinup");
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

/*
jQuery( function ($) {
    var ppp = 10; // Post per page
    var pageNumber = 1;
    var total = $('#totalpages').val();
    var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
        bottomOffset = 1600; // the distance (in px) from the page bottom when you want
    var loader = '<div class="loader"><span class="sr-only">Loading more</span></div>';

    if ( total == pageNumber ) {
        canBeLoaded = false;
    }

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
*/