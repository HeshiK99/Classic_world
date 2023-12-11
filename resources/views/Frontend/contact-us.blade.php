@extends('Frontend.Layout.app')
@section('content')
<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- Contact page content -->
<div class="contact-page-area">

    <!-- contact page map -->
    <div class="contact-page-map">
        <!-- Google Map Start -->
        <div class="container">
            <div id="map"></div>
        </div>
        <!-- Google Map End -->
    </div>
    <!-- contact page map -->

    <!-- contact form area -->
    <div class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form-inner">
                        <h2>TELL US YOUR PROJECT</h2>
                        <form action="https://htmldemo.net/harosa/harosa-v2/mail.php" method="get">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name*" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name*" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Email*" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Subject*" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message *" required></textarea>
                                </div>
                            </div>
                            <div class="contact-submit">
                                <input type="submit" value="Send Email" class="wpcf7-form-control wpcf7-submit button">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-address-area">
                        <h2>CONTACT US</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                            notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                        <ul>
                            <li>
                                <i class="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City
                            </li>
                            <li>
                                <i class="fa fa-phone">&nbsp;</i> Info@roadthemes.com
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>&nbsp;</i> 0(1234) 567 890
                            </li>
                        </ul>
                        <h3>
                            <strong>Working hours</strong>
                        </h3>
                        <p>
                            <strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->

</div>
<!-- Contact page content end -->

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