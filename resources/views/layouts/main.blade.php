<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') - Future Logistic Transnational Company</title>
    <!-- favicon -->
    <link rel=icon href={{ asset('futurelogistic_logoonly.png') }} sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @yield('top-assets')

</head>

<body>
<!-- //. search Popup -->
<div class="body-overlay" id="body-overlay"></div>

<div class="header-style-01">
    <div class="topbar-area style-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar-inner">
                        <div class="left-contnet">
                            <ul class="info-items">
                                <li><a href="tel:000111555"><i class="flaticon-phone"></i> +15068001777</a></li>
                                <li><a href="mailto:info@fltransnational.com"><i class="flaticon-mail"></i> info@fltransnational.com</a></li>
                                <li><a href=""><i class="flaticon-clock"></i> 10:00 Am - 06:00 Pm</a></li>
                            </ul>
                        </div>
                        <div class="right-contnet">
                            <div class="social-link">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support bar area end -->
    <nav class="navbar navbar-area has-topbar navbar-expand-lg nav-style-02">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('futurelogistic_logo.png') }}" width="300" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('track-shipment') }}">Track Shipment</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <div class="btn-wrapper">
                    <a href="{{ url('signup') }}" class="request-btn">Sign up</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->
</div>

@yield('contents')

<!-- call to action area start  -->
<div class="call-to-action-area bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner bg-image">
                    <div class="icon">
                        <i class="flaticon-24-hours"></i>
                    </div>
                    <div class="content">
                        <h2 class="title">Call us for any inquiry we are open 24/7</h2>
                        <span class="subtitle">+15068001777</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- call to action area end -->

<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top padding-top-115 padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="{{ url('/') }}" class="footer-logo"> <img src="{{ asset('futurelogistic_logo.png') }}" alt="footer logo"></a>
                            <p>We are able to guarantee a very high level of satisfaction for our clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Our services</h4>
                        <ul>
                            <li><a href="{{ url('services') }}">Warhouse</a></li>
                            <li><a href="{{ url('services') }}">Air Fright Soultions for all</a></li>
                            <li><a href="{{ url('services') }}">Sea Fright solutions & Catering</a></li>
                            <li><a href="{{ url('services') }}">Storage</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">our support</h4>
                        <ul>
                            <li><a href="">Privacy & Policy</a></li>
                            <li><a href="">FAQS</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget ">
                        <h4 class="widget-title">Contact us</h4>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="details">
                                    Fifth Avenue , Broadway, New York
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="details">
                                    +15068001777
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="details">
                                    info@fltransnational.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        &copy; Copyright {{ date('Y') }} Future Logistic Transnational Company All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="cancel-preloader">
            <a href="#">Cancel Preloader</a>
        </div>
        <div class="TruckLoader">
            <div class="TruckLoader-cab"></div>
            <div class="TruckLoader-smoke"></div>
        </div>
        <hr/>
    </div>
</div>
<!-- preloader area end -->

<!-- jquery -->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<!-- wow -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- imageloaded -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/601c2e93a9a34e36b973e46b/1etn1bssp';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
