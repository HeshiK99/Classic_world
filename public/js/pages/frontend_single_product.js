$(".login-add-cart").on("click", function() {

    var route = $(".called-route").html();

    $.ajax(
    {
        url: '/update-route-session',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            update_route: route
        },
        success: function (data) {
            console.log("session created successful");
            window.location.href = "/login";
        },
        error: function (error) {
            console.error(error.reponseText);
        },
    });

});

$(".add-cart").on("click", function() {

    var product_id = $(".product-id").html();
    var quantity = $(".quantity").val();

    $.ajax(
    {
        url: '/add-to-cart',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_id: product_id,
            quantity: quantity
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