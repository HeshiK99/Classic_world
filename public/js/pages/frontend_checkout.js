$(document).ready(function () {
    $(".place-order").on("click", function() {

        var order_note = $("#checkout-mess").val();

        $.ajax(
        {
            url: '/order-checkout',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                order_note: order_note
            },
            success: function (data) {
                console.log("checkout successful");
                window.location.href = "/";
            },
            error: function (error) {
                console.error(error.reponseText);
            },
        });

    });
});