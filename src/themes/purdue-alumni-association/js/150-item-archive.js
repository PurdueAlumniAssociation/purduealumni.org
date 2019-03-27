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

$("#category-select").change( function( itemIdArray ) {
    if (this.value === 'all') {
        //alert( "show all" );
        $("[data-150-categories]").fadeIn('normal');
    } else {
        //alert( "show " + this.value );
        $("[data-150-categories]").hide(0);
        $("[data-150-categories~='" + this.value + "']").fadeIn('normal');
    }

    var itemIdArray = buildItemIdArray();

    $(".card-container:visible").each( function () {
        updateHref( $(this), itemIdArray );
    });
});

function buildItemIdArray () {
    var array = [];

    $(".card-container:visible").each( function () {
        var id = $(this).attr('data-item-id')

        array.push( id );
    });

    // console.log(array);
    return array;
}

function updateHref (element, array) {
    var card = element.children(".card--150-item");
    card.attr( 'href', card.attr('href').split('?')[0] + "?item-ids=" + array.toString() );
}

$( document ).ready( function () {
    var itemIdArray = buildItemIdArray();
    //console.log( itemIdArray );
    $(".card-container:visible").each( function () {
        updateHref( $(this), itemIdArray );
    });
});