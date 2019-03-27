$(".p150-item-detail__previous, .p150-item-detail__next").click( function( event ) {
    event.preventDefault();
    console.log(event.target.href);

    $.ajax({
        url: event.target.href,
        success: function(result) {
            console.log("Success");
            $(".featherlight-inner").html(result);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("Error: " + textStatus);
        },
        complete: function() {
            console.log("Complete");
        }
    });
});