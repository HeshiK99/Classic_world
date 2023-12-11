<!-- Body main wrapper start -->

<!-- HEADER AREA START -->

    </style>
<header class="header-area" style="background-color:#a89842 ;">


    <!-- Header top area start -->
    <div class="header-top-area d-none d-lg-block" style="background-color:#a89842;">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="top-bar-left">
                    <div class="contact-link">
                        <div class="info_box phone">
                            Call us : <span>(076) 8722537</span>
                        </div>
                        <div class="info_box email">
                            email : <a href="mailto:demo@example.com">demo@example.com</a>
                        </div>
                    </div>
                    <div class="social_follow">
                        <ul>
                            <li class="facebook"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="instagram"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-nav">
                    <!-- my account -->
                    <div class="dropdown menu-my-account-container">
                        <button data-bs-toggle="dropdown">
                            <i class="first-icon fa fa-user-circle"></i> My Account <i class="ion-ios-arrow-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('dashboard')}}">My Account</a></li>
                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                            <li><a href="register.html">Sign in</a></li>
                        </ul>
                    </div>
                    <!-- currency-menu -->
                    <!--div class="dropdown currency">
                        <button data-bs-toggle="dropdown">$ USD<i class="ion-ios-arrow-down"></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">$ USD</a></li>
                            <li><a href="#">€ EUR</a></li>
                        </ul>
                    </div-->
                    <!-- language-menu -->
                    <!--div class="dropdown language">
                        <button data-bs-toggle="dropdown">
                            <img src="assets/images/icons/en.webp" alt="language-selector">English
                            <i class="ion-ios-arrow-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <img src="assets/images/icons/en.webp" alt="French">
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/icons/fr.webp" alt="French">
                                    <span>French</span>
                                </a>
                            </li>
                        </ul>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar area end -->

    <div class="header-top">
        <div class="container">
            <div class="header-bottom-wrapper">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{asset('images/logo/img1.jpg')}}" alt="" width="100">
                    </a>
                </div>

                <!--div class="ft_newsletter search_top">
                    <form action="#">
                        <input class="btn btn-primary float-xs-right hidden-xs-down" name="search" value="Search" type="submit">
                        <div class="input-wrapper">
                            <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                        </div>
                    </form>
                </div-->

                <div class="header-bottom-action">

                    <!-- Cart -->
                    <div class="dropdown" >
                        <button class="cart-icon" data-bs-toggle="dropdown" >
                            <i class="fa fa-shopping-basket" ></i>
                            <span class="item_txt"> Cart</span>
                            <span class="item_count">(2)</span>
                            <span class="item_total">- $57.99</span>
                        </button>
                        <div class="header-cart dropdown-menu">
                            <ul>
                                <li>
                                    <div class="img_content">
                                        <img class="product-image img-responsive" src="assets/images/product/cat/cat1.webp" alt="" title="">
                                        <span class="product-quantity">1x</span>
                                    </div>
                                    <div class="right_block">
                                        <span class="product-name">Hummingbird printed t-shirt</span>
                                        <span class="product-price">$21.99</span>
                                        <a href="#" class="remove-from-cart"> <i class="fa fa-remove pull-xs-left"></i></a>
                                        <div class="attributes_content">
                                            <span><strong>Size</strong>: S</span><br>
                                            <span><strong>Color</strong>: White</span><br>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img_content">
                                        <img class="product-image img-responsive" src="assets/images/product/cat/cat2.webp" alt="" title="">
                                        <span class="product-quantity">1x</span>
                                    </div>
                                    <div class="right_block">
                                        <span class="product-name">The adventure begins Framed poster</span>
                                        <span class="product-price">$29.00</span>
                                        <a href="#" class="remove-from-cart"><i class="fa fa-remove pull-xs-left"></i></a>
                                        <div class="attributes_content">
                                            <span><strong>Dimension</strong>: 40x60cm</span><br>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="price_content">
                                <div class="cart-subtotals">
                                    <div class="products price_inline">
                                        <span class="label">Subtotal</span>
                                        <span class="value">$50.99</span>
                                    </div>
                                    <div class=" price_inline">
                                        <span class="label"></span>
                                        <span class="value"></span>
                                    </div>
                                    <div class="shipping price_inline">
                                        <span class="label">Shipping</span>
                                        <span class="value">$7.00</span>
                                    </div>
                                    <div class="tax price_inline">
                                        <span class="label">Taxes</span>
                                        <span class="value">$0.00</span>
                                    </div>
                                </div>
                                <div class="cart-total price_inline">
                                    <span class="label">Total</span>
                                    <span class="value">$57.99</span>
                                </div>
                            </div>
                            <div class="checkout">
                                <a href="checkout.html" class="btn btn-primary">checkout</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-action-toggle d-lg-none">
                        <button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Header bottom area start -->
    <div class="header-bottom-area d-none d-lg-block">
        <div class="container" >
            <div class="row">
                <div class="col-lg-3">
                    <div class="categori-menu">
                        <span class="categorie-title">Categories</span>
                        <nav>
                            <ul class="categori-menu-list menu-hidden">
                                <li><a href="shop.html">Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <!-- categori Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu first-megamenu">
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Cameras</li>
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                                <li><a href="index-5.html">Home Shop 5</a></li>
                                                <li><a href="index-6.html">Home Shop 6</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Digital Cameras</li>
                                                <li><a href="shop.html">Camera one</a></li>
                                                <li><a href="shop.html">Camera two</a></li>
                                                <li><a href="shop.html">Camera three</a></li>
                                                <li><a href="shop.html">Camera four</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Digital Cameras</li>
                                                <li><a href="shop.html">Camera one</a></li>
                                                <li><a href="shop.html">Camera two</a></li>
                                                <li><a href="shop.html">Camera three</a></li>
                                                <li><a href="shop.html">Camera four</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- categori Mega-Menu End -->
                                </li>
                                <li><a href="shop.html">Electronics<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <!-- categori Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-two">
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Men’s Fashion</li>
                                                <li><a href="shop.html">Blazers</a></li>
                                                <li><a href="shop.html">Boots</a></li>
                                                <li><a href="shop.html">pants</a></li>
                                                <li><a href="shop.html">Tops & Tees</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Women’s Fashion</li>
                                                <li><a href="shop.html">Bags</a></li>
                                                <li><a href="shop.html">Bottoms</a></li>
                                                <li><a href="shop.html">Shirts</a></li>
                                                <li><a href="shop.html">Tailored</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- categori Mega-Menu End -->
                                </li>
                                <li><a href="shop.html">Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <!-- categori Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-two">
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Large Appliances</li>
                                                <li><a href="shop.html">Armchairs</a></li>
                                                <li><a href="shop.html">Bunk Bed</a></li>
                                                <li><a href="shop.html">Mattress</a></li>
                                                <li><a href="shop.html">Sideboard</a></li>
                                                <li><a href="index-5.html">Home Shop 5</a></li>
                                                <li><a href="index-6.html">Home Shop 6</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Small Appliances</li>
                                                <li><a href="shop.html">Bootees Bags</a></li>
                                                <li><a href="shop.html">Jackets</a></li>
                                                <li><a href="shop.html">Shelf</a></li>
                                                <li><a href="shop.html">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- categori Mega-Menu End -->
                                </li>
                                <li><a href="shop.html">Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <!-- categori Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-two">
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Tablet</li>
                                                <li><a href="shop.html">tablet one</a></li>
                                                <li><a href="shop.html">tablet two</a></li>
                                                <li><a href="shop.html">tablet three</a></li>
                                                <li><a href="shop.html">tablet four</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Smartphone</li>
                                                <li><a href="shop.html">phone one</a></li>
                                                <li><a href="shop.html">phone two</a></li>
                                                <li><a href="shop.html">phone three</a></li>
                                                <li><a href="shop.html">phone four</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- categori Mega-Menu End -->
                                </li>
                                <li><a href="shop.html">TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <!-- categori Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-two">
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Gaming Desktops</li>
                                                <li><a href="shop.html">Alpha Desktop</a></li>
                                                <li><a href="shop.html">rober Desktop</a></li>
                                                <li><a href="shop.html">Ultra Desktop </a></li>
                                                <li><a href="shop.html">beta desktop</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">Women’s Fashion</li>
                                                <li><a href="shop.html">3D-Capable</a></li>
                                                <li><a href="shop.html">Clearance</a></li>
                                                <li><a href="shop.html">Free Shipping Eligible</a></li>
                                                <li><a href="shop.html">On Sale</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- categori Mega-Menu End -->
                                </li>
                                <li><a href="shop.html">Beauty</a>
                                </li>
                                <li><a href="shop.html">Sport & tourism</a>
                                </li>
                                <li><a href="shop.html">Fruits & Veggies</a></li>
                                <li><a href="shop.html">Computer & Laptop</a></li>
                                <li><a href="shop.html">Meat & Seafood</a></li>
                                <li><a href="shop.html">Samsung</a></li>
                                <li><a href="shop.html">Sanyo</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9"style="color:white;">
                    <!-- main-menu -->
                    <div class="main-menu" >
                        <nav>
                            <ul>
                                <li class="current">
                                <li><a href="{{route('home')}}" >Home<!--i class="fa fa-angle-down"></i--></a></li>
                                
                                <!-- ul class="submenu">
                                        <li><a href="index.html">Home Shop 1</a></li>
                                        <li><a href="index-2.html">Home Shop 2</a></li>
                                        <li><a href="index-3.html">Home Shop 3</a></li>
                                        <li><a href="{{route('home')}}">Home Shop 4</a></li>
                                        <li><a href="index-5.html">Home Shop 5</a></li>
                                        <li><a href="index-6.html">Home Shop 6</a></li>
                                    </ul -->
                                
                                <li><a href="{{route('shop')}}">Shop</a></li>
                                <!--li><a href="blog.html">Blog</a></li-->
                                <li><a href="{{route('about-us')}}">About Us</a></li>
                                <li><a href="{{route('contact-us')}}">Contact</a></li>
                                <!--li><a href="#">Features <i class="fa fa-angle-down"></a></i>
                                    <ul class="megamenu-3-column">
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="faq.html">Frequently Questins</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                <li><a href="blog.html">Sidebar right</a></li>
                                                <li><a href="single-blog.html">Image Format</a></li>
                                                <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                <li><a href="single-blog-video.html">Video Format</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-list.html">Shop List View</a></li>
                                                <li><a href="shop-right.html">Shop Right</a></li>
                                                <li><a href="single-product.html">Shop Single</a></li>
                                                <li><a href="cart.html">Shoping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header bottom area end -->

</header>
<!-- HRADER AREA END -->

<!-- offcanvas Start -->
<div class="offcanvas offcanvas-start" id="offcanvasMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Offcanvas</h5>
        <button class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">

        <div class="contact-link">
            <div class="info_box phone">
                Call us : <span>(012) 800 456 789</span>
            </div>
            <div class="info_box email">
                email : <a href="mailto:demo@example.com">demo@example.com</a>
            </div>
        </div>

        <div class="offcanvas-accordion accordion" id="accordionExample">
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"><i class="first-icon fa fa-user-circle"></i> My Account</button>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li><a href="{{route('dashboard')}}">My Account</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="register.html">Sign in</a></li>
                    </ul>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">$ USD</button>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li><a href="#">$ USD</a></li>
                        <li><a href="#">€ EUR</a></li>
                    </ul>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"><img src="assets/images/icons/en.webp" alt="language-selector">English</button>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li>
                            <a href="#">
                                <img src="assets/images/icons/en.webp" alt="French">
                                <span>English</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/images/icons/fr.webp" alt="French">
                                <span>French</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <nav class="canvas-menu">
            <ul>
                <li class="current"><a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Shop 1</a></li>
                        <li><a href="index-2.html">Home Shop 2</a></li>
                        <li><a href="index-3.html">Home Shop 3</a></li>
                        <li><a href="index-4.html">Home Shop 4</a></li>
                        <li><a href="index-5.html">Home Shop 5</a></li>
                        <li><a href="index-6.html">Home Shop 6</a></li>
                    </ul>
                </li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="contact-us.html">Contact</a></li>
                <li><a href="#">Features </a>
                    <ul class="mega-sub-menu">
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="faq.html">Frequently Questins</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                <li><a href="blog.html">Sidebar right</a></li>
                                <li><a href="single-blog.html">Image Format</a></li>
                                <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                <li><a href="single-blog-audio.html">Audio Format</a></li>
                                <li><a href="single-blog-video.html">Video Format</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-list.html">Shop List View</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="cart.html">Shoping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="social_follow">
            <ul>
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="instagram"><a href="#"></a></li>
            </ul>
        </div>

    </div>
</div>
<!-- offcanvas END -->