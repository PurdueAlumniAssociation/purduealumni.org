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

$( document ).ready( function () {
    var viewCount = 0;
    var threshold = 5;
    var prevId, nextId;

    $("[data-150-categories]").addClass("visible");

    $("#category-select").change( function() {

        if (this.value === 'all') {
            //alert( "show all" );
            $("[data-150-categories]").fadeIn('normal').addClass("visible");
        } else {
            //alert( "show " + this.value );
            $("[data-150-categories]").hide(0).removeClass("visible");
            $("[data-150-categories~='" + this.value + "']").fadeIn('normal').addClass("visible");
        }
    });

    $(".card-container").click( function(event) {
        event.preventDefault();
        viewCount = 0;
        var lightbox = $("[data-lightbox-id='" + $(this).attr("data-object-id") + "']")
        lightbox.show().addClass("visible");
        lightbox.find(".p150-lightbox__close-button").focus();
        $("body").toggleClass("no-scroll");

    })

    $(".p150-lightbox__close-button").click( function(event) {
        event.preventDefault();
        hideAllLightboxes()
    })

    $(".p150-lightbox-background").click( function(event) {
        if ( event.target == this ) {
            hideAllLightboxes()
        }
    })

    $(".p150-item-detail__previous, .p150-item-detail__next").click( function(event) {
        event.preventDefault();

        viewCount += 1;

        var currentLightbox = $(".p150-lightbox-background:visible");

        currentLightbox.hide().removeClass("visible");

        var currentId = currentLightbox.attr("data-lightbox-id");

        if ( currentId != 99999 ) {
            prevId = $(".card-container[data-object-id='"+currentId+"']").prev(".card-container:visible").attr("data-object-id");
            nextId = $(".card-container[data-object-id='"+currentId+"']").next(".card-container:visible").attr("data-object-id");
        }

        // handle looping
        if ( prevId == undefined ) {
            prevId = $(".card-container:visible").last().attr("data-object-id");
        }
        if ( nextId == undefined ) {
            nextId = $(".card-container:visible").first().attr("data-object-id");
        }

        if ( viewCount % threshold == 0 ) {
            $(".p150-lightbox-background--membership").show().addClass("visible");
        } else {
            if ( $(this).attr("class").indexOf("next") != -1 ) {
                $(".p150-lightbox-background[data-lightbox-id='"+nextId+"']").show().addClass("visible");
            } else {
                $(".p150-lightbox-background[data-lightbox-id='"+prevId+"']").show().addClass("visible");
            }
        }
    })

    function hideAllLightboxes() {
        $(".p150-lightbox-background").hide().removeClass("visible");
        $("body").toggleClass("no-scroll");
    }
});