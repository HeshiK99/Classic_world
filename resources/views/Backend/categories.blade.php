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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo13/table_dt_live_dom_ordering.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Sep 2022 16:39:48 GMT -->

    </html>
</div>
@stop