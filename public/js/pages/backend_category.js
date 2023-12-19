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
    $('#categories-form').on('submit', function (event) {
        event.preventDefault();
        var categoryname = $('#category-name').val();
        var brandId = $('#brand-id').val();
        $.ajax(
            {
                url: 'categories-store',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    name: categoryname,
                    brand_id: brandId,
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