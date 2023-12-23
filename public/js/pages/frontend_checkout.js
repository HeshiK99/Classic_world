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
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Checkout Success",
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = "/";
            },
            error: function (error) {
                console.error(error.reponseText);
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Try Again",
                    showConfirmButton: false,
                    timer: 1500
                });
            },
        });

    });
});