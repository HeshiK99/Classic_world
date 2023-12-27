@extends('Frontend.Layout.app')
@section('content')

<!-- Slider area -->
<div class="slider-area">
    <div class="container">
        <div class="row">
            <div class="slideshow_container col-md-8 col-sm-12 col-xs-12">
                <!-- slider start -->
                <div class="slider-inner">
                    <div id="mainSlider" class="nivoSlider nevo-slider">
                        <img src="{{ asset('images/homeb/img2.webp') }}" alt="main slider" title="#htmlcaption1" />
                        <img src="{{ asset('images/homeb/img4.png') }}" alt="main slider" title="#htmlcaption2" />
                    </div>
                    <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="slider-content slider-content-1 slider-animated-1">
                                <h1 class="hone">Tan - <br>enhancer</h1>
                                <p class="hp1">advanced pro formula</p>
                                <div class="button-1 hover-btn-2">
                                    <a href="#">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="slider-content slider-content-2 slider-animated-2 pull-left">
                                <h1 class="hone">The <br>Body Care</h1>
                                <p class="hp1">Fruit Face Pack</p>
                                <div class="button-1 hover-btn-2">
                                    <a href="#">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider end -->
            </div>
            <div class="banner_slide col-md-4">
                <div class="banner-box">
                    <a href="shop.html"><img src="assets/images/banner/1_4.webp" alt=""></a>
                </div>
                <div class="banner-box">
                    <a href="shop.html"><img src="assets/images/banner/2_4.webp" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider area end -->

<!-- Policy area -->
<div class="policy-area">
    <div class="container">
        <div class="policy-area-inner">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-policy">
                        <div class="icon"><i class=" fa fa-truck"></i></div>
                        <div class="txt_cms">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-policy">
                        <div class="icon"><i class=" fa fa-credit-card"></i></div>
                        <div class="txt_cms">
                            <h2>Money Guarantee</h2>
                            <p>30 days money back</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-policy">
                        <div class="icon"><i class=" fa fa-question-circle"></i></div>
                        <div class="txt_cms">
                            <h2>Online Support</h2>
                            <p>online 24/24 on day</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-policy">
                        <div class="icon"><i class=" fa fa-sun-o"></i></div>
                        <div class="txt_cms">
                            <h2>Secure Payment</h2>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Policy area end -->

<!-- product tabs container slider -->
<div class="product-tabs-container-slider product_block_container">
    <div class="container">
        <div class="pos_tab">
            <div class="pos_title_cate">
                <h2>Our Products</h2>
            </div>
            <div class="pos_desc">
                <p>Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia Etiam porttitor, lacus in luctus molestie</p>
            </div>
        </div>

        <ul class="nav tabs_slider">
            <li><a href="#newarrival" data-bs-toggle="tab" class="active">New Arrival</a></li>
            <li><a href="#bestseller" data-bs-toggle="tab">Bestseller</a></li>
            <li><a href="#featuredproducts" data-bs-toggle="tab">Featured Products</a></li>
        </ul>

        <div class="tab-content pos_content">
            <div class="tab-pane fade show active" id="newarrival">
                <div class="productTabContent0 owl-carousel">
                    <!-- single product -->
                    @foreach(ProductHelper::newArrivals(8) as $new_arrivals)
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="/product-detail/{{$new_arrivals->id}}" class="thumbnail product-thumbnail">
                                    <img src="{{ asset('storage/products/' . $new_arrivals->image) }}"
                                        alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="/product-detail/{{$new_arrivals->id}}" data-original-title="Quick View"
                                        class="quick_view"><i class="fa fa-search"></i></a>
                                </div>
                                <!-- <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div> -->
                                <!-- <div class="product-price-and-shipping_top">
                                            <span class="discount-percentage discount-product">-8%</span>
                                        </div> -->
                            </div>
                            <div class="product_desc">
                                <!-- <div class="manufacturer">
                                            <a href="shop.html">Studio Design</a>
                                        </div> -->
                                <h1> <a href="/product-detail/{{$new_arrivals->id}}" class="product_name"
                                        title="{{ $new_arrivals->name }}">{{ $new_arrivals->name }}</a></h1>
                                <div class="product-price-and-shipping">
                                    <!-- <span class="regular-price">$23.90</span> -->
                                    <span class="price price-sale">LKR {{ $new_arrivals->price }}</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart" data-id="{{ $new_arrivals->id }}">
                                        <a>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single product end -->
                </div>
            </div>
            <div class="tab-pane fade" id="bestseller">
                <div class="productTabContent0 owl-carousel">
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/1.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/4.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/2.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/5.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/3.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/6.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/4.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/8.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/9.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/11.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/10.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/12.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <div class="tab-pane fade" id="featuredproducts">
                <div class="productTabContent0 owl-carousel">
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/1.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/4.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/2.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/5.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/3.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/6.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/4.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/8.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/9.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/11.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <!-- single product -->
                    <div class="item-product">
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/10.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-miniature js-product-miniature">
                            <div class="img_block">
                                <a href="single-product.html" class="thumbnail product-thumbnail">
                                    <img src="assets/images/product/12.webp" alt="harosa product">
                                </a>
                                <ul class="product-flag">
                                    <li class="new"><span>New</span></li>
                                </ul>
                                <div class="quick-view">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"
                                        data-original-title="Quick View" class="quick_view"><i
                                            class="fa fa-search"></i></a>
                                </div>
                                <div class="hook-reviews">
                                    <div class="comments_note">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price-and-shipping_top">
                                    <span class="discount-percentage discount-product">-8%</span>
                                </div>
                            </div>
                            <div class="product_desc">
                                <div class="manufacturer">
                                    <a href="shop.html">Studio Design</a>
                                </div>
                                <h1> <a href="single-product.html" class="product_name"
                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                <div class="product-price-and-shipping">
                                    <span class="regular-price">$23.90</span>
                                    <span class="price price-sale">$21.99</span>
                                </div>
                                <div class="cart">
                                    <div class="product-add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- product tabs container slider end -->

<!-- home banner -->
<div class="home-banner">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="banner-box m-0">
                    <a href="shop.html"><img src="assets/images/banner/1_1.webp" alt="harosa"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-box m-0">
                    <a href="shop.html"><img src="assets/images/banner/2_1.webp" alt="harosa"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home banner end -->

<!-- categori mini product area -->
<div class="categori-mini-product-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="pos-featured-products  product_block_container">
                    <div class="pos_title">
                        <h2>featured</h2>
                    </div>
                </div>
                <div class=" pos_content row">
                    <div class="feature-item owl-carousel">
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/1.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/2.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/3.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/4.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/5.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/6.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/7.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/8.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/9.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pos-featured-products  product_block_container">
                    <div class="pos_title">
                        <h2>bestsellers</h2>
                    </div>
                </div>
                <div class=" pos_content row">
                    <div class="feature-item owl-carousel">
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/4.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/5.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/6.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/1.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/2.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/3.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/7.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/8.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/9.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pos-featured-products  product_block_container">
                    <div class="pos_title">
                        <h2>recommended</h2>
                    </div>
                </div>
                <div class=" pos_content row">
                    <div class="feature-item owl-carousel">
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/7.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/8.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/9.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/1.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/2.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/3.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                        <div class="item-product">
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/4.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/5.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                            <!-- mini product -->
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="#" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/mini/6.webp" alt="">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="#">Graphic Corner</a>
                                    </div>
                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price ">$9.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart"><a href="cart.html">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- mini product end -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- categori mini product area end -->

<!-- static product -->
<div class="static_product">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="item-static">
                    <div class="banner-box"><a href="#"> <img src="assets/images/product/3_1.webp" alt=""
                                class="img-responsive"></a></div>
                    <div class="content-static">
                        <div class="sale-static">Sale 30% off</div>
                        <h2>NSI Balance Gel Body Builder NUDE</h2>
                        <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item-static">
                    <div class="banner-box"><a href="#"> <img src="assets/images/product/4_1.webp" alt=""
                                class="img-responsive"></a></div>
                    <div class="content-static">
                        <div class="sale-static">Sale 50% off</div>
                        <h2>Buy Nude by Bill Blass For Her EDC 100 ml</h2>
                        <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item-static">
                    <div class="banner-box"><a href="#"> <img src="assets/images/product/5_1.webp" alt=""
                                class="img-responsive"></a></div>
                    <div class="content-static">
                        <div class="sale-static">Sale 20% off</div>
                        <h2>PBM Cream Foundation Makeup</h2>
                        <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- static product -->

<!-- home banner -->
<div class="home-banner">
    <div class="banner-box">
        <a href="#"> <img src="assets/images/banner/3_4.webp" alt="" class="img-responsive"></a>
    </div>
</div>
<!-- home banner end -->

<div class="home_blog_post_area general product_block_container">
    <div class="home_blog_post">
        <div class="container">
            <div class="page_title_area pos_title">
                
                <h3>Hydrate <span>and</span> Glow</h3>
                <p> Essential  Skin  Care  For  Everyday</p>
            </div>
            <div class="home_blog_post_inner">
                <div class="blog_slider owl-carousel">
                    <!-- single blog item -->
                    <div class="item">
                         <div class="blog_post">
                            <div class="post_thumbnail">
                                <a href="single-blog.html" class="img_content">
                                    <img src="assets/images/blog/1.webp" alt="">
                                </a>
                                <!-- <a href="single-blog-html.html" class="read-more">Read More</a> -->
                            </div> 
                            <div class="post_content">
                                <!-- <div class="date_time">
                                    <span class="moth_time">April</span>
                                    <span class="day_time">01</span>
                                </div>  -->
                                <div class="content-inner">
                                    <h4 class="post_title" style="font-size: 20px ; text-align:center;">NATURAL</h4>
                                    <div class="post_meta">
                                        <!-- <span class="meta_date">
                                            <i class="fa fa-calendar"></i>
                                            Apr 01, 2018
                                        </span> / <span class="meta_author">
                                            <i class="fa fa-user"></i>
                                            Demo Posthemes
                                        </span> -->
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- single blog item end -->
                    <!-- single blog item -->
                    <div class="item">
                        <div class="blog_post">
                            <div class="post_thumbnail">
                                <a href="single-blog.html" class="img_content">
                                    <img src="assets/images/blog/2.webp" alt="">
                                </a>
                                
                            </div>
                            <div class="post_content">
                                <!-- <div class="date_time">
                                    <span class="moth_time">April</span>
                                    <span class="day_time">01</span>
                                </div> -->
                                <div class="content-inner">
                                    <h4 class="post_title"style="font-size: 20px ; text-align:center;" >ORGANIC</h4>
                                    <div class="post_meta">
                                        <!-- <span class="meta_date">
                                            <i class="fa fa-calendar"></i>
                                            Apr 01, 2018
                                        </span> / <span class="meta_author">
                                            <i class="fa fa-user"></i>
                                            Demo Posthemes
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single blog item end -->
                    <!-- single blog item -->
                    <div class="item">
                        <div class="blog_post">
                            <div class="post_thumbnail">
                                <a href="single-blog.html" class="img_content">
                                    <img src="assets/images/blog/3.webp" alt="">
                                </a>
                                <!-- <a href="single-blog-html.html" class="read-more">Read More</a> -->
                            </div>
                            <div class="post_content">
                                <!-- <div class="date_time">
                                    <span class="moth_time">April</span>
                                    <span class="day_time">01</span>
                                </div> -->
                                <div class="content-inner">
                                    <h4 class="post_title" style="font-size: 20px ; text-align:center;">LUXURY</h4>
                                    <div class="post_meta">
                                        <!-- <span class="meta_date">
                                            <i class="fa fa-calendar"></i>
                                            Apr 01, 2018
                                        </span> / <span class="meta_author">
                                            <i class="fa fa-user"></i>
                                            Demo Posthemes
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single blog item end -->
                    <!-- single blog item -->
                    <div class="item">
                        <div class="blog_post">
                            <!-- <div class="post_thumbnail">
                                <a href="single-blog.html" class="img_content">
                                    <img src="assets/images/blog/4.webp" alt="">
                                </a>
                                <a href="single-blog-html.html" class="read-more">Read More</a>
                            </div> -->
                            <div class="post_content">
                                <!-- <div class="date_time">
                                    <span class="moth_time">April</span>
                                    <span class="day_time">01</span>
                                </div> -->
                                <div class="content-inner">
                                    <!-- <h4 class="post_title">This is Secound Post For XipBlog</h4>
                                    <div class="post_meta">
                                        <span class="meta_date">
                                            <i class="fa fa-calendar"></i>
                                            Apr 01, 2018
                                        </span> / <span class="meta_author">
                                            <i class="fa fa-user"></i>
                                            Demo Posthemes
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single blog item end -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/pages/frontend_home.js')}}"></script>

@stop