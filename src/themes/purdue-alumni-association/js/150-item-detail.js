$(".p150-item-detail__previous, .p150-item-detail__next").click( function( event ) {
    event.preventDefault();

    if ( event.target.href !== undefined ) {
        $.ajax({
            url: event.target.href,
            success: function(result) {
                $(".featherlight-inner").html(result);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Error: " + textStatus);
            }
        });
    }
});