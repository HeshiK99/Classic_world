@extends('Backend.Layout.app')
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row">

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
                            <form>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Brand name" id="brandname" name="brandname">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name">
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
    </div>
</div>
@stop