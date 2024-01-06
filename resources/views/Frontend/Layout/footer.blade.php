<footer id="footer">

    <div class="footer-container"></div>







    <div class="footer-top">
    </div>



    <div class="container">



        <!-- <div class="pos_logo product_block_container">
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
                </div> -->

        <!-- <div class="ft_newsletter">
                    <div id="block-newsletter-label">
                        <div class="title-newsletter">
                            <h2>Newsletter sign up</h2>
                            
                        </div>
                    </div>
                    <form action="#">
                        <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Subscribe" type="submit">
                        <div class="input-wrapper">
                            <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                        </div>
                    </form>
                </div> -->

    </div>
    </div>        

    <!-- footer main -->
    <div class="footer-main" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 links footer_block">
                    <h3>Contact Info</h3>
                    <div class="footer-contact" >
                        
                        <p class="phone add">076 8722537</p>
                        <p class="email add"><a href="mailto:heshikaushalya@gmail.com">heshikaushalya@gmail.com</a></p>
                        <p class="time add">Working time: 9.00 a.m - 21.00 p.m</p>
                    </div>
                    <div class="social_follow">
                        <ul>
                            <li class="facebook"><a href="https://www.facebook.com/profile.php?id=61554381300044&mibextid=LQQJ4d" target="_blank">Facebook</a></li>
                            <!-- <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                        <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                        <li class="googleplus"><a href="#" target="_blank">Google +</a></li> -->
                            <li class="instagram"><a href="#" target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 links footer_block">
                    <!-- <h3 class="hidden-sm-down">Products</h3>
                        <ul class="footer_list">
                            <li><a href="#">Prices drop</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sales</a></li>
                            <li><a href="#">Stores</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                        </ul> -->
                </div>
                <div class="col-sm-6 col-lg-3 links footer_block">
                    <h3 class="hidden-sm-down">Our company</h3>
                    <ul class="footer_list">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('frontend.shop')}}">Shop</a></li>
                        <li><a href="{{route('frontend.about-us')}}">About us</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="{{route('frontend.contact-us')}}">Contact us</a></li>
                    </ul>
                    <!-- Add other columns as needed -->
                </div>
            </div>

            <!-- Apply blur effect to the background image only -->
            <div class="footer-background" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/assets/images/banner/12.jpg'); background-size: cover; filter: blur(4px); z-index: -1;"></div>
        </div>

        <!-- footer main end -->

    </div>

    <!-- footer copyright area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="copyright-inner">
                <div class="row justify-content-between row-cols-1 row-cols-md-2">
                    <div class="col">
                        <p>&copy; 2024 <span> Classic World </span></p>
                    </div>
                    <div class="col text-md-end">
                        <img src="{{ asset('assets/images/icons/payment-icon.webp') }}" alt="payment icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright area end -->

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/jquery.nivo.slider.pack.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</footer>