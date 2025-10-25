<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from ex-coders.com/html/turmet/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:35 GMT -->
<head>
        <!-- ========== Meta Tags ========== -->
           <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="My Mountains Tour Company">
        <meta name="robots" content="index,follow"/>
        <meta name="language" content="english"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://www.mymountains.in/"/>
        <meta property="og:site_name" content="https://www.mymountains.in/"/>
        <meta name="og:description" content="{{ $seo->meta_description }}"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:creator" content="@MyMountains"/>
        <meta name="twitter:title" content="My Mountains - #1 Travel & Holiday Tour Packages Company in kashmir"/>
        <meta name="twitter:description" content="{{ $seo->meta_description }}"/>
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="keywords" content="{{ $seo->meta_keywords }}">
        <meta name="image" content="https://mymountains.in/mymountains/assets/img/logo/solutions.png">
        <meta property="og:image" content="https://mymountains.in/mymountains/assets/img/logo/solutions.png"/>


        
        <!-- ======== Page title ============ -->
        <title>{{ $seo->meta_title}}</title>
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
            <a target="_blank" href="{{ url("#") }}">Main chowk, Nawab Bazaar, Srinagar</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="{{ url("mailto:info@example.com") }}"><span class="mailto:info@example.com">info@example.com</span></a>
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

        <!-- News-Section Start -->
        <section class="news-section  fix">
            <div class="container">
                <div class="row g-4">
                      @foreach ($blogs as $b)
                    <div class="col-xl-4 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items-3 mt-0">
                            <div class="news-image">
                                <img src="{{ asset('blog_images/' . $b->image) }}" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-meta">
                                    <li class="post">{{$b->created_at->format('d M')}}</li>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        Travel
                                    </li>
                                </ul>
                                <h4>
                                    <a href="https://mymountains.in/blogs/{{ $b->slug }}">
                                        {!! Str::limit(strip_tags($b->content), 100) !!}
                                    </a>
                                </h4>
                                <a href="https://mymountains.in/blogs/{{ $b->slug }}" class="link-btn">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="page-nav-wrap text-center">
                    <ul>
                        <li><a class="page-numbers" href="{{ url("#") }}"><i class="fal fa-long-arrow-left"></i></a></li>
                        <li><a class="page-numbers" href="{{ url("#") }}">01</a></li>
                        <li><a class="page-numbers" href="{{ url("#") }}">02</a></li>
                        <li><a class="page-numbers" href="{{ url("#") }}">03</a></li>
                        <li><a class="page-numbers" href="{{ url("#") }}"><i class="fal fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

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

<!-- Mirrored from ex-coders.com/html/turmet/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:37 GMT -->
</html>