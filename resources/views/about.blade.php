<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from ex-coders.com/html/turmet/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:22 GMT -->
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixel-drop">
        <meta name="description" content="Turmet - Travel & Tour Agency HTML Template">
        <!-- ======== Page title ============ -->
        <title>About Us</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset("/mymountains/assets/img/favicon.svg") }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/bootstrap.min.css") }}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/all.min.css") }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/animate.css") }}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/magnific-popup.css") }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/meanmenu.css") }}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/swiper-bundle.min.css") }}">
        <!--<< Datepickerboot.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/datepickerboot.css") }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/nice-select.css") }}">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/color.css") }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset("/mymountains/assets/css/main.css") }}">
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
                                        <a target="_blank" href="{{ url("#") }}">Main Chowk, Nawab Bazaar, Srinagar</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="{{ url("mailto:info@mymountains.in") }}"><span class="mailto:info@mymountains.in">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
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
       
<hr>
        <!-- About-Section Start -->
        <section class="about-section fix pt-3">
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img src="{{ asset("/mymountains/assets/img/about/03.jpg") }}" alt="img">
                                <div class="shape-image float-bob-y">
                                    <img src="{{ asset("/mymountains/assets/img/about/04.png") }}" alt="img">
                                </div>
                                <div class="group-image float-bob-x">
                                    <img src="{{ asset("/mymountains/assets/img/about/group.png") }}" alt="img">
                                </div>
                                <div class="about-image-2">
                                    <img src="{{ asset("/mymountains/assets/img/about/05.jpg") }}" alt="img">
                                    <div class="plane-shape">
                                        <img src="{{ asset("/mymountains/assets/img/about/plane-shape2.png") }}" alt="img">
                                    </div>
                                    {{-- <div class="circle-image">
                                        <img src="{{ asset("/mymountains/assets/img/about/circle.png") }}" alt="img">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">
                                        Get About Us
                                    </span>
                                    <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                                        We're Strived Only For The
                                        Best In The World
                                    </h2>
                                </div>
                                <p class="wow fadeInUp wow" data-wow-delay=".5s">
                                My Mountains – Indian travel agency/tour operators to fulfill your complete travel requirements. 
                                Find travel in India with My Mountains,
                                 offering you various choices at affordable prices backed by excellent service. 
                                 We provide Indian Travel Packages, International Holidays, 
                                 Flight Tickets, Honeymoon Packages, and several exciting deals!
                                </p>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="about-icon-items">
                                        <div class="icon">
                                            <img src="{{ asset("/mymountains/assets/img/check.png") }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Easy Booking <br> System
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Our hotel also prides itself on <br> offering exceptional services.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="about-icon-items">
                                        <div class="icon">
                                            <img src="{{ asset("/mymountains/assets/img/check.png") }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Easy Booking <br> System
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Our hotel also prides itself on <br> offering exceptional services.
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ url("/kashmir") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".7s">Discover More<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Travel-Feature-Section Start -->
        <section class="travel-feature-section section-padding fix section-bg">
            <div class="shape-1">
                <img src="{{ asset("/mymountains/assets/img/plane-shape1.png") }}" alt="img">
            </div>
            <div class="shape-2">
                <img src="{{ asset("/mymountains/assets/img/plane-shape2.png") }}" alt="img">
            </div>
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="feature-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">
                                        Are you ready to travel?
                                    </span>
                                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                        World Leading Online Tour Booking Platform
                                    </h2>
                                </div>
                                <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                </p>
                               <div class="feature-area">
                                    <div class="line-shape">
                                        <img src="{{ asset("/mymountains/assets/img/line-shape.png") }}" alt="img">
                                    </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="{{ asset("/mymountains/assets/img/icon/08.svg") }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Most Adventure <Br> 
                                                Tour Ever
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            There are many variations of <br>
                                             passages of available,
                                        </li>
                                    </ul>
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="{{ asset("/mymountains/assets/img/icon/09.svg") }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Real Tour Starts <br>
                                                 from Here
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            There are many variations of <br>
                                             passages of available,
                                        </li>
                                    </ul>
                                </div>
                               </div>
                               <a href="{{ url("contact.html") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-image wow fadeInUp wow" data-wow-delay=".3s">
                                <img src="{{ asset("/mymountains/assets/img/man-image.png") }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Counter-Section Start -->
        <section class="counter-section theme-bg fix section-bg-3">
            <div class="container">
                <div class="counter-wrapper-3">
                    <div class="counter-items wow fadeInUp wow" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="{{ asset("/mymountains/assets/img/icon/35.svg") }}" alt="img">
                        </div>
                        <div class="counter-content">
                            <h2><span class="count">100,000</span>+</h2>
                            <p>Our Explorers</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp wow" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{ asset("/mymountains/assets/img/icon/36.svg") }}" alt="img">
                        </div>
                        <div class="counter-content">
                            <h2><span class="count">5,000</span>+</h2>
                            <p>Destinations</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp wow" data-wow-delay=".6s">
                        <div class="icon">
                            <img src="{{ asset("/mymountains/assets/img/icon/37.svg") }}" alt="img">
                        </div>
                        <div class="counter-content">
                            <h2><span class="count">10,000</span>+</h2>
                            <p>More Trips</p>
                        </div>
                    </div>
                    <div class="counter-items style-2 wow fadeInUp wow" data-wow-delay=".8s">
                        <div class="icon">
                            <img src="{{ asset("/mymountains/assets/img/icon/38.svg") }}" alt="img">
                        </div>
                        <div class="counter-content">
                            <h2><span class="count">2,000</span>+</h2>
                            <p>Luxary Hotel</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

         <!-- Testimonial-Section Start -->
        <section class="testimonial-section section-padding fix bg-cover" style="background-image: url(mymountains/assets/img/testimonial/testimonial-bg.jpg);">
            <div class="container">
                <div class="testimonial-wrapper-3">
                   
                    <script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-e7459153-25bb-40d1-acc5-014653ed396b" data-elfsight-app-lazy></div>
                </div>
            </div>
        </section>
          <!-- Instagram Banner Section Start -->
        <div class="instagram-banner fix section-padding">
            <div class="instagram-wrapper">
                <h2 class="text-center wow fadeInUp" data-wow-delay=".3s">Follow Instagram</h2>
                <div class="swiper instagram-banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/01.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/02.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/03.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/04.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/05.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="{{ asset("/mymountains/assets/img/instagram/06.jpg") }}" alt="insta-img">
                                    <a href="{{ url("index.html") }}" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        @include('footer')

        <!--<< All JS Plugins >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery-3.7.1.min.js") }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset("/mymountains/assets/js/viewport.jquery.js") }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset("/mymountains/assets/js/bootstrap.bundle.min.js") }}"></script>
        <!--<< nice-selec Js >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery.nice-select.min.js") }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery.waypoints.js") }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery.counterup.min.js") }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset("/mymountains/assets/js/swiper-bundle.min.js") }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery.meanmenu.min.js") }}"></script>
         <!--<< Datepicker Js >>-->
         <script src="{{ asset("/mymountains/assets/js/bootstrap-datepicker.js") }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset("/mymountains/assets/js/jquery.magnific-popup.min.js") }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset("/mymountains/assets/js/wow.min.js") }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset("/mymountains/assets/js/main.js") }}"></script>
    </body>

<!-- Mirrored from ex-coders.com/html/turmet/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:24 GMT -->
</html>