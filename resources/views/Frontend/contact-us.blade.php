@extends('Frontend.Layout.app')
@section('content')
<!-- top breadcrumb -->
<!-- top breadcrumb -->
<div  class="top_breadcrumb">
    <div class="breadcrumb_container">
        <div  class="container">
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
        
    

<!-- top breadcrumb end -->

<!-- Contact page content -->
<!-- <div class="contact-page-area"> -->

    <!-- contact page map with banner image -->
    <!-- <div class="contact-page-map" >
        Google Map Start -->
        <!-- <div class="container">
            <div id="map"></div>
        </div> -->
        <!-- Google Map End -->
    <!-- </div>  -->
    <!-- contact page map with banner image end -->
<!-- </div--></div></div></div>
<!-- Contact page content end -->

    <!-- contact page map -->

    <!-- contact form area -->
    <div style="background-image: url('/assets/images/banner/95.jpg');"class="contact-form-area">
        <div style="background-image: url('/assets/images/banner/95.jpg');" class="container">
            <div style="background-image: url('/assets/images/banner/95.jpg');"class="row">
                <div style="background-image: url('/assets/images/banner/95.jpg');"class="col-lg-6">
                    <div style="background-image: url('/assets/images/banner/95.jpg');"class="contact-form-inner">
                        <h2>TELL US YOUR REQUIREMENT</h2>
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
                                    <input type="text" class="form-control" placeholder="Phone number*" required>
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
                <div style="background-image: url('/assets/images/banner/95.jpg');"class="col-lg-6">
                    <div style="background-image: url('/assets/images/banner/95.jpg');"class="contact-address-area">
                        <h2>CONTACT US</h2>
                        <p> We're delighted to connect with our valued skincare community. Whether you have inquiries about  products, or just want to share your skincare journey with us, we're here for you. Reach out through the provided channels, and our dedicated team of skincare enthusiasts will ensure you receive the support and information you need. 
                            Your radiant skin journey starts with a conversation – let's talk!</p>
                        <ul>
                            <!-- <li>
                                <i class="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City
                            </li> -->
                            <li>
                                <i class="fa fa-phone">&nbsp;</i> heshikaushalya@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>&nbsp;</i> 076 8722537
                            </li>
                        </ul>
                        <h3>
                            <strong>Working hours</strong>
                        </h3>
                        <p>
                            <strong>Monday – Saturday</strong>: &nbsp;09AM – 21PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->

</div>
<!-- Contact page content end -->


        @stop