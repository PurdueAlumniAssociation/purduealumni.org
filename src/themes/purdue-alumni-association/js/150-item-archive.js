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
    //console.log( itemIdArray );
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
    var thisId = element.attr('data-item-id'),
        thisIndex = $.inArray( thisId, array ),
        card = element.children(".card--150-item");

    // set previous id
    if ( thisIndex - 1 >= 0 ) {
        prevId = array[ thisIndex - 1 ];
    } else {
        prevId = array[ array.length - 1 ]; // loop back to the end
    }

    // set next id
    if ( thisIndex + 1 <= array.length - 1 ) {
        nextId = array[ thisIndex + 1 ];
    } else {
        nextId = array[0]; // loop back to the beginning
    }

    card.attr( 'href', card.attr('href').split('?')[0] + "?prev=" + prevId + "&next=" + nextId );
}

$( document ).ready( function () {
    var itemIdArray = buildItemIdArray();
    //console.log( itemIdArray );
    $(".card-container:visible").each( function () {
        updateHref( $(this), itemIdArray );
    });
});