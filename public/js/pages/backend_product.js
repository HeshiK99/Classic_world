$.fn.dataTable.ext.order['dom-text'] = function(settings, col) {
    return this.api().column(col, {
        order: 'index'
    }).nodes().map(function(td, i) {
        return $('input', td).val();
    });
}
$.fn.dataTable.ext.order['dom-text-numeric'] = function(settings, col) {
    return this.api().column(col, {
        order: 'index'
    }).nodes().map(function(td, i) {
        return $('input', td).val() * 1;
    });
}
/* Create an array with the values of all the select options in a column */
$.fn.dataTable.ext.order['dom-select'] = function(settings, col) {
    return this.api().column(col, {
        order: 'index'
    }).nodes().map(function(td, i) {
        return $('select', td).val();
    });
}
/* Create an array with the values of all the checkboxes in a column */
$.fn.dataTable.ext.order['dom-checkbox'] = function(settings, col) {
    return this.api().column(col, {
        order: 'index'
    }).nodes().map(function(td, i) {
        return $('input', td).prop('checked') ? '1' : '0';
    });
}
/* Initialise the table with the required column ordering data types */
// $(document).ready(function() {
$('#example').DataTable({
    "columns": [
        null,
        {
            "orderDataType": "dom-text-numeric"
        },
        {
            "orderDataType": "dom-text",
            type: 'string'
        },
        {
            "orderDataType": "dom-select"
        }
    ],
    "oLanguage": {
        "oPaginate": {
            "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
            "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
    },
    "stripeClasses": [],
    "lengthMenu": [7, 10, 20, 50],
    "pageLength": 7
});

var file_name = null;

$(document).ready(function () {
    $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0];

        let reader = new FileReader();
        reader.onload = e => {
            file_name = e.target.result;
            console.log(file_name);
        };
        reader.readAsDataURL(fileName);
    });
});

$(document).ready(function () {
    $('#products-form').on('submit', function (event) {
        event.preventDefault();
        var productname = $('#product-name').val();
        var categoryId = $('#category-id').val();
        var productprice = $('#product-price').val();
        var productquantity = $('#product-quantity').val();
        var fileInput = file_name;

        $.ajax(
            {
                url: 'product-store',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    name: productname,
                    category_id: categoryId,
                    price:productprice,
                    quantity : productquantity,
                    fileInput: fileInput

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