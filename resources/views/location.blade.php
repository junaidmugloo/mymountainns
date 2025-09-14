<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from ex-coders.com/html/turmet/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:50:41 GMT -->
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixel-drop">
        <meta name="description" content="Turmet - Travel & Tour Agency HTML Template">
        <!-- ======== Page title ============ -->
        <title>My Mountains</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset("/mymountains/assets//img/favicon.svg") }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/bootstrap.min.css") }}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/all.min.css") }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/animate.css") }}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/magnific-popup.css") }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/meanmenu.css") }}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/swiper-bundle.min.css") }}">
        <!--<< Datepickerboot.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/datepickerboot.css") }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/nice-select.css") }}">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/color.css") }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets//css/main.css") }}">
    </head>
    <body>

        <!-- Preloader Start -->
       <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="u" class="letters-loading">
                        u
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="t" class="letters-loading">
                        t
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="s" class="letters-loading">
                        s
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- Back To Top Start -->
         <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ url("index.html") }}">
                                    <img src="{{ asset("/mymountains/assets/img/logo/black-logo.svg") }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="{{ url("#") }}">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="{{ url("mailto:info@mymountains.in") }}"><span class="mailto:info@mymountains.in">info@mymountains.in</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        Main Chowk, Nawab Bazaar, Srinagar             <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="{{ url("#") }}">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="{{ url("tel:+11002345909") }}">+91-9906786356</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="{{ url("contact.html") }}" class="theme-btn"> Request A Quote <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ url("#") }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ url("#") }}"><i class="fab fa-youtube"></i></a>
                                <a href="{{ url("#") }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
       @include('nav')

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- breadcrumb-wrappe-Section Start -->
        <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(/mymountains/assets/img/breadcrumb/breadcrumb.jpg);">
            <div class="container">
                <div class="row">
                    <div class="page-heading">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="{{ url("index.html") }}">Home</a>
                            </li>
                            <li><i class="fa-solid fa-chevrons-right"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

         <!-- Contact-us Section Start -->
        <section class="contact-us-section fix section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="{{ asset("/mymountains/assets/img/icon/18.svg") }}" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        Our Address
                                    </h3>
                                    <p>
                                        Main Chowk, Nawab Bazaar, Srinagar
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main style-2">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="{{ asset("/mymountains/assets/img/icon/19.svg") }}" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ url("mailto:info@tripco.com") }}">info@mymountains.in</a>
                                    </h3>
                                    <p>
                                        Email us anytime for anykind <br> ofquety.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-us-main">
                            <div class="contact-box-items">
                                <div class="icon">
                                    <img src="{{ asset("/mymountains/assets/img/icon/20.svg") }}" alt="img">
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ url("tel:Hot+208-666-0112") }}">+91-9906786356</a>
                                    </h3>
                                    <p>
                                        Call us any kind suppor,we will wait for it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Contact-us Section-2 Start -->
         <section class="contact-us-section-2 section-bg-2 fix">
            <div class="container">
                <div class="contact-us-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-us-contact">
                                <div class="section-title">
                                    <span class="sub-title text-white wow fadeInUp">
                                        Contact us
                                    </span>
                                    <h2 class=" text-white wow fadeInUp wow" data-wow-delay=".2s">
                                        Send Message Anytime
                                    </h2>
                                </div>
                                <div class="comment-form-wrap">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="email" id="email4" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <select class="country-select" style="display: none;">
                                                        <option value="Residential">Real Estate</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="theme-btn">
                                                    Submit Massage
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="map-area">
                                <div class="google-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.1667953303877!2d74.7993693!3d34.09086729999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e18559a8c9e733%3A0xd0af9e4f232ecf7d!2sMy%20Mountains%20Tour%20and%20Travels!5e0!3m2!1sen!2sin!4v1757831270302!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

       <!-- Footer Section Start -->
       @include('footer')

        <!--<< All JS Plugins >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery-3.7.1.min.js") }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset("/mymountains/assets//js/viewport.jquery.js") }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset("/mymountains/assets//js/bootstrap.bundle.min.js") }}"></script>
        <!--<< nice-selec Js >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery.nice-select.min.js") }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery.waypoints.js") }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery.counterup.min.js") }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset("/mymountains/assets//js/swiper-bundle.min.js") }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery.meanmenu.min.js") }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset("/mymountains/assets//js/jquery.magnific-popup.min.js") }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset("/mymountains/assets//js/wow.min.js") }}"></script>
         <!--<< Datepicker Js >>-->
         <script src="{{ asset("/mymountains/assets//js/bootstrap-datepicker.js") }}"></script>
        <!--<< Ajax Mail Js >>-->
        <script src="{{ asset("/mymountains/assets//js/ajax-mail.js") }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset("/mymountains/assets//js/main.js") }}"></script>
    </body>

<!-- Mirrored from ex-coders.com/html/turmet/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:50:43 GMT -->
</html>