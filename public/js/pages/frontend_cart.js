$(".product-remove").on("click", function() {

    var product_id = $(this).attr("data-id");

    $.ajax(
    {
        url: '/remove-from-cart',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_id: product_id
        },
        success: function (data) {
            console.log("item remove successful");
            location.reload();
        },
        error: function (error) {
            console.error(error.reponseText);
        },
    });

});