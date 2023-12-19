@extends('Frontend.Layout.app')
@section('content')
<!-- top breadcrumb -->
<div class="top_breadcrumb">                 
            <div class="breadcrumb_container ">
                <div class="container">
                    <nav data-depth="3" class="breadcrumb">
                        <ol>
                            <li><a href="#"><span>Home</span></a></li>
                            <li><a href="#"><span>Fashion </span></a>
                            </li>
                            <li><a href="#"><span>Shop</span></a></li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
        <!-- top breadcrumb end -->

        <!-- Shop page wraper -->
        <div class="shop-page-wraper">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 shop-content">
                        <div class="product-toolbar">
                            <div class="topbar-title">
                                <h1>Arts & Crafts</h1>
                            </div>
                            <div class="product-toolbar-inner">
                                <div class="product-view-mode">
                                    <ul class="nav nav-tabs">
                                        <li><a data-bs-toggle="tab" href="#grid" class="active"><i class="ion-grid"></i></a></li>
                                        <li><a data-bs-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                                    </ul>
                                </div>
                                <div class="woocommerce-ordering">
                                    <form method="get" class="woocommerce-ordering hidden-xs">
                                        <div class="orderby-wrapper">
                                            <label>Sort By :</label>
                                            <select class="nice-select-menu orderby">
                                                <option dara-display="Select">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <p class="woocommerce-result-count">There are 13 products</p>
                            </div>
                            <div class="shop-page-product-area tab-content">
                                <div id="grid" class="tab-pane fade show active">
                                    <div class="row">
                                        <!-- single product -->
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/1.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/2.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/3.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/4.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/5.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/6.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/7.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/8.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/9.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1> <a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
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

                                <div id="list" class="tab-pane fade">
                                    <div class="row">
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/1.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/2.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/3.webp" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/4.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/5.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                        <!-- single product list view -->
                                        <div class="col-md-12">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <a href="single-product.html" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/6.webp" alt="harosa product">
                                                    </a>
                                                    <ul class="product-flag">
                                                        <li class="new"><span>New</span></li>
                                                    </ul>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
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
                                                    <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                    <div class="product-desc">
                                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                    </div>
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
                                        <!-- single product list view end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#">→</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 sidebar-shop">
                        <div class="sidebar-product-categori">
                            <div class="shop-categori-title">
                                <h3>Arts & Crafts</h3>
                            </div>
                            <div class="product-filter mb-30">
                                <div class="widget-title">
                                    <h3>Filter by price</h3>
                                </div>
                                <div class="widget-content">
                                    <div id="price-range"></div>
                                    <div class="price-values">
                                        <div class="price_text_btn">
                                            <span>Price:</span>
                                            <input type="text" class="price-amount">
                                        </div>
                                        <button class="button" type="submit">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="facet">
                                <h3>Color</h3>
                                <div class="widget-content">
                                    <ul class="product-categories">
                                        <li class="cat-item">
                                            <a href="#">Gold</a>
                                            <span class="count">(6)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Green</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">White</a>
                                            <span class="count">(8)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="facet">
                                <h3>Size</h3>
                                <div class="widget-content">
                                    <ul class="product-categories">
                                        <li class="cat-item">
                                            <a href="#">S</a>
                                            <span class="count">(3)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">M</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">L</a>
                                            <span class="count">(2)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">XL</a>
                                            <span class="count">(7)</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="advertising">
                                <a href="shop.html"><img src="assets/images/banner/advertising.webp" alt="harosa images"></a>
                            </div>
                            <div class="shop-categori-page categori-mini-product-area">
                                <div class="pos-featured-products  product_block_container">
                                    <div class="pos_title"><h2>New products</h2></div>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="#">Graphic Corner</a>
                                                    </div>
                                                    <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price ">$9.00</span>
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
            </div> 
        </div>
        <!-- Shop page wraper end -->

        <!-- footer start -->
        <footer id="footer">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="ft_newsletter">
                            <div id="block-newsletter-label">
                                <div class="title-newsletter">
                                    <h2>Newsletter sign up</h2>
                                    <p class="desc">(Get 30% OFF coupon today subscibers)</p>
                                </div>
                            </div>
                            <form action="#">
                                <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Subscribe" type="submit">
                                <div class="input-wrapper">
                                    <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                                </div>
                            </form>
                        </div>
                        <div class="pos_logo product_block_container">
                            <div class="logo-slider owl-carousel pos_content">
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/3.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/4.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/5.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/6.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop