$(".product-add-to-cart").on("click", function() {

    var product_id = $(this).attr("data-id");

    $.ajax(
    {
        url: '/add-to-cart',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_id: product_id,
            quantity: 1
        },
        success: function (data) {
            console.log("item added to cart");
            location.reload();
        },
        error: function (error) {
            console.error(error.reponseText);
        },
    });

});