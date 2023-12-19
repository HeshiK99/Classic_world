$(document).ready(function () {
    $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
            //Handle the successful response here 
            console.log('GET Request Successful:', response);
        },
        error: function (error) {
            //handle errors here
            console.log('Error in GET Request:', response);
        }
    });
});
$(document).ready(function () {
    $('#products-form').on('submit', function (event) {
        event.preventDefault();
        var productname = $('#product-name').val();
        var categoryId = $('#category-id').val();
        var productprice =$('#product-price').val();
        var productquantity =$('product-quantity').val();
        $.ajax(
            {
                url: 'product-store',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    name: productname,
                    category_id: categoryId,
                    price:productprice,
                    quantity : productquantity

                },
                success: function (data) {

                    console.log("category created successful");
                    location.reload();


                },
                error: function (error) {
                    console.error(error.reponseText);
                },
            });
    });
});