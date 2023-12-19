@extends('Backend.Layout.app')
@section('content')
<div id="content" class="main-content">
    <!--div class="container">
        <div class="container"-->
    

            <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form>
                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-control  basic">

                                        <option selected="selected">Select Categories</option>
                                        <option>Dr.Rashel</option>
                                        <option>CeraVe</option>
                                        <option>Ordinary</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Product Name" id="ProductName" name="ProductName">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Price" id="Price" name="Price">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Quantity" id="Quantity" name="Quantity">
                                </div>
                            </div>
                            <input type="submit" name="time" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!--/div-->
<!--/div-->
</div>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mt-4 mb-4">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Categories</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as $single_product)
                                <tr>
                                <td><select size="1" id="row-1-office" class="form-control" name="row-1-office">
                                            <option value="Edinburgh" selected="selected">
                                                Edinburgh
                                            </option>
                                            <option value="London">
                                                London
                                            </option>
                                           
                                        </select></td>

                                
                                    <td><input type="text" id="productname" class="form-control" name="productname" value="{{$single_product->name}}"></td>
                                    <td><input type="text" id="productprice" class="form-control" name="productprice" value="{{$single_product->price}}"></td>
                                    <td><input type="text" id="productquantoty" class="form-control" name="productquantity" value="{{$single_product->qauntity}}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('js/pages/backend_product.js')}}"></script>
<script>
    /* Create an array with the values of all the input boxes in a column */
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
    // } );
</script>
<!-- END PAGE LEVEL CUSTOM SCRIPTS -->

@stop