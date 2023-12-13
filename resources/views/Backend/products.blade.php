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
</div>
</div>
@stop