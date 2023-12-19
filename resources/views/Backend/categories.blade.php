@extends('Backend.Layout.app')
@section('content')
<div id="content" class="main-content">
    <!-- <div class="container">
        <div class="container"> -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">

            <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Categories</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{route('categories.store')}}" method="post" id="categories-form">
                            @csrf
                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-control basic" id="brand-id">
                                        @foreach ($brands as $single_brand)
                                        <option value="{{$single_brand->id}}">{{$single_brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col">

                                    <input type="text" class="form-control" placeholder="Categories" id="category-name"
                                        name="categoryname">
                                    <!-- <select name="brand_id" id="brand-id"></select> -->
                                </div>

                            </div>
                            <input type="submit" name="time" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div> -->

</div>
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mt-4 mb-4">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created_Date</th>
                                    <th>Active</th>
                                    <th>Brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $single_categories)
                                <tr>
                                    <td id="category_id" name="category_id">{{$single_categories->id}}</td>
                                    <td><input type="text" id="category_name" class="form-control" name="category_name"
                                            value="{{$single_categories->name}}"></td>
                                    <td><input type="date" id="category_created" class="form-control"
                                            name="category_created" value="{{$single_categories->created_at}}"></td>
                                    <td><select size="1" id="category_status" class="form-control"
                                            name="category_status">
                                            <option value="1" @if($single_categories->active == 1)selected="selected"
                                                @endif>
                                                Active
                                            </option>
                                            <option value="0" @if($single_categories->active == 0)selected="selected"
                                                @endif>
                                                Deactive
                                            </option>

                                        </select></td>
                                    </td>
                                    <td>
                                        <select size="1" id="category_brand" class="form-control" name="category_brand">
                                            @foreach ($brands as $single_brand)
                                            <option value="{{$single_brand->id}}" @if($single_brand->id ==
                                                $single_categories->brand_id) selected="selected" @endif>
                                                {{$single_brand->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
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


    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>

    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <script src="{{asset('js/pages/backend_category.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>
    <script>
    /* Create an array with the values of all the input boxes in a column */
    $.fn.dataTable.ext.order['dom-text'] = function(settings, col) {
        return this.api().column(col, {
            order: 'index'
        }).nodes().map(function(td, i) {
            return $('input', td).val();
        });
    }
    /* Create an array with the values of all the input boxes in a column, parsed as numbers */
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
    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo13/table_dt_live_dom_ordering.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Sep 2022 16:39:48 GMT -->

    </html>
</div>
@stop