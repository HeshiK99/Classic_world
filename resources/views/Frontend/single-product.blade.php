@extends('Frontend.Layout.app')
@section('content')

<!-- single product area -->
<div class="single-product-page-area">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="images-container">
                    <div class="product-cover">
                        <div class="tab-content">
                            <div class="tab-pane active" id="red">
                                <img src="{{ asset('storage/products/' . $product_details['image']) }}" alt="harosa single product">
                                <div class="layer hidden-sm-down">
                                    <i class="material-icons zoom-in"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="h1 namne_details">{{ $product_details['name'] }}</h1>
                <p class="called-route d-none">/product-detail/{{ $product_details['id'] }}</p>
                <p class="product-id d-none">{{ $product_details['id'] }}</p>
                <!-- <p class="reference">Reference: demo_1</p> -->
                <div id="product_comments_block_extra" class="no-print">
                    <div class="hook-reviews">
                        <div class="comments_note">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <ul class="comments_advices">
                        <li>
                            <a href="#idTab5" class="reviews _mPS2id-h">Read reviews (<span>1</span>)</a>
                        </li>
                        <li>
                            <a class="open-comment-form">Write a review</a>
                        </li>
                    </ul>
                </div>
                <div class="product-prices">
                    <!-- <div class="product-discount">
                        <span class="regular-price">$23.90</span>
                    </div> -->
                    <div class="product-price h5 has-discount">
                        <div class="current-price">
                            <span>LKR {{ $product_details['price'] }}</span>
                            <!-- <span class="discount discount-percentage">Save 8%</span> -->
                        </div>
                    </div>
                </div>
                <div class="product-information">
                    <div class="product-desc">
                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton.
                            </span></p>
                    </div>
                    <div class="product-actions">
                        <form action="#">
                            <div class="product-add-to-cart">
                                <span class="control-label">Quantity</span>
                                <div class="box-quantity d-flex">
                                    <input class="quantity mr-40" min="1" max="{{ $product_details['quantity'] }}" value="1" type="number">
                                    @if(!isset(auth()->user()->id))
                                    <a class="login-add-cart" style="cursor: pointer;"><i class="fa fa-shopping-cart"></i> Login</a>
                                    @else
                                    <a class="add-cart" style="cursor: pointer;"><i class="fa fa-shopping-cart"></i> add to
                                        cart</a>
                                    @endif
                                </div>
                            </div>
                            <div class="product-additional-info">
                                <div class="social-sharing">
                                    <span>Connect with us:</span>
                                    <ul>
                                        <li class="facebook"><a href="#" title="Share" target="_blank">Share</a></li>
                                        <li class="twitter"><a href="#" title="Tweet" target="_blank">Tweet</a></li>
                                        <li class="googleplus"><a href="#" title="Google+" target="_blank">Google+</a>
                                        </li>
                                        <li class="pinterest"><a href="#" title="Pinterest"
                                                target="_blank">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- single product area -->

<script src="{{asset('js/pages/frontend_single_product.js')}}"></script>

@stop