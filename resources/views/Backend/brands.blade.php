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
                            <h4>Add Brand</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action ="{{route('brands.store')}}" method="post" id="brand-form">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Brand Name" id="brand-name" name="brandname" required>
                            </div>
                            <!-- <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div> -->
                        </div>
                        <input type="submit" name="time" class="btn btn-primary">
                        
                    </form>
                </div>

            </div>
            </div> 
             </div> 
</div>

        <!-- </div> -->
    <!-- </div> -->
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
                                </tr>
                            </thead>
                            <tbody>
                        
                                @foreach ($brands as $single_brand)
                                <tr>
                                    <td id="brandid" name="brandid">{{$single_brand->id}}</td>
                                    <td><input type="text" id="brand-name" class="form-control" name="brandname" value="{{$single_brand->name}}"></td>
                                    <td><input type="date" id="createdate" class="form-control" name="createdate" value="{{$single_brand->created_at}}"></td>
                                    <td><select size="1" id="activestatus" class="form-control" name="activestatus">
                                            <option value="1" @if($single_brand->active == 1)selected="selected" @endif>
                                                Active
                                            </option>
                                            <option value="0" @if($single_brand->active == 0)selected="selected" @endif>
                                                Deactive
                                            </option>
                                            
                                        </select></td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Craeted_Date</th>
                                    <th>Active</th>
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


<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('js/pages/backend_brands.js')}}"></script>
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