<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from ex-coders.com/html/turmet/news-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:45 GMT -->
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
                                        <a target="_blank" href="{{ url("#") }}">Main Chowk, Nawab Bazaar, Srinagar</a>
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
        {{-- <section class="breadcrumb-wrapper fix bg-cover" style="background-image: url(/mymountains/assets/img/breadcrumb/breadcrumb.jpg);">
            <div class="container">
                <div class="row">
                    <div class="page-heading">
                        <h2>Blog Details</h2>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="{{ url("index.html") }}">Home</a>
                            </li>
                            <li><i class="fa-solid fa-chevrons-right"></i></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- News-details-Section Start -->
        <hr>
        <section class="news-details fix pt-4">
            <div class="container">
                <div class="news-details-area">
                    <div class="row g-5">
                        <div class="col-12 col-lg-8">
                            <div class="blog-post-details">
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url({{asset('blog_images/'.$blog->image)}});">
                                        <div class="post">
                                            <h3>
                                               {{$blog->created_at->format('d M')}}
                                            </h3>
                                         </div>
                                    </div>

                                    <div class="post-content">
                                        <ul class="post-list d-flex align-items-center">
                                            <li>
                                                <i class="fa-regular fa-user"></i>
                                                By Admin
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-comment"></i>
                                                2 Comments
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-tag"></i>
                                                Tour
                                            </li>
                                        </ul>
                                        <h3>
                                            {{ $blog->title }}
                                        </h3>
                                        <p class="mb-3">
                                             {!! $blog->content!!}
                                        </p>
                                       
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="details-image">
                                                    <img src="{{ asset("/mymountains/assets/img/news/post-5.jpg") }}" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="details-image">
                                                    <img src="{{ asset("/mymountains/assets/img/news/post-6.jpg") }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="pt-4">
                                            The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.
                                        </p>
                                        <div class="hilight-text mt-4 mb-4">
                                            <p>
                                                Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel ultricies <br> urnacondimentum, sapien neque lobortis tortor, quis efficitur mi ipsum eu metus. <br> Praesent eleifend orci sit amet est vehicula.
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                                <path d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z" stroke="#63AB45"/>
                                                <path d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z" stroke="#63AB45"/>
                                              </svg>
                                        </div>
                                        <p class="mt-4 mb-5">
                                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.
                                        </p>
                                    </div>
                                </div>
                                <div class="row tag-share-wrap mt-4 mb-5">
                                    <div class="col-lg-8 col-12">
                                        <div class="tagcloud">                                   
                                            <a href="{{ url("news-details.html") }}">Travel</a>
                                            <a href="{{ url("news-details.html") }}">Services</a>
                                            <a href="{{ url("news-details.html") }}">Agency</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                        <div class="social-share">
                                            <span class="me-3">Share:</span>
                                            <a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ url("#") }}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{ url("#") }}"><i class="fab fa-linkedin-in"></i></a>     
                                            <a href="{{ url("#") }}"><i class="fa-brands fa-youtube"></i></a>                               
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>02 Comments</h3>
                                    </div>
                                    <div class="blog-single-comment d-flex gap-4 pt-4 pb-4">
                                        <div class="image">
                                            <img src="{{ asset("/mymountains/assets/img/news/comment.png") }}" alt="image">
                                        </div>
                                        <div class="content">
                                            <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div class="con">
                                                    <h5><a href="{{ url("news-details.html") }}">Leslie Alexander</a></h5>
                                                    <span>February 10, 2024 at 2:37 pm</span>
                                                </div>
                                                <a href="{{ url("news-details.html") }}" class="reply">Reply</a>
                                            </div>
                                            <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et quasi
                                                architecto var sed efficitur turpis gilla sed
                                                sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        </div>
                                    </div>
                                    <div class="blog-single-comment d-flex gap-4 pt-5 pb-4">
                                        <div class="image">
                                            <img src="{{ asset("/mymountains/assets/img/news/comment-2.png") }}" alt="image">
                                        </div>
                                        <div class="content">
                                            <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div class="con">
                                                    <h5><a href="{{ url("news-details.html") }}">Ralph Edwards</a></h5>
                                                    <span>February 10, 2024 at 2:37 pm</span>
                                                </div>
                                                <a href="{{ url("news-details.html") }}" class="reply">Reply</a>
                                            </div>
                                            <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et quasi
                                                architecto var sed efficitur turpis gilla sed
                                                sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form-wrap pt-5">
                                    <h3>Leave a comments</h3>
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Name*</span>
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Email*</span>
                                                    <input type="text" name="email" id="email6" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <span>Message*</span>
                                                    <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="theme-btn ">
                                                    post comment<i class="fa-solid fa-arrow-right-long"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sideber">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Search</h4>
                                    </div>
                                    <div class="search-widget">
                                        <form action="#">
                                            <input type="text" placeholder="Search here">
                                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Services</h4>
                                    </div>
                                    <div class="news-widget-categories">
                                        <ul>
                                            <li><a href="{{ url("news-details.html") }}">Travel</a><span>04</span></li>
                                            <li><a href="{{ url("news-details.html") }}">System</a><span>03</span></li>
                                            <li><a href="{{ url("news-details.html") }}">Agency</a><span>02</span></li>
                                            <li><a href="{{ url("news-details.html") }}">Restaurant</a><span>05</span></li>
                                            <li><a href="{{ url("news-details.html") }}">Rant A Car</a><span>06</span></li>
                                            <li><a href="{{ url("news-details.html") }}">Blueprint Builders</a><span>(03)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Recent Post</h4>
                                    </div>
                                    <div class="recent-post-area">
                                        <div class="recent-items">
                                            <div class="recent-thumb">
                                                <img src="{{ asset("/mymountains/assets/img/news/pp1.jpg") }}" alt="img">
                                            </div>
                                            <div class="recent-content">
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        14 Feb, 2024
                                                    </li>
                                                </ul>
                                                <h6>
                                                    <a href="{{ url("news-details.html") }}">
                                                        Get Best Advertised Your
                                                        Side Pocket.
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="recent-items">
                                            <div class="recent-thumb">
                                                <img src="{{ asset("/mymountains/assets/img/news/pp2.jpg") }}" alt="img">
                                            </div>
                                            <div class="recent-content">
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        12 Mar, 2024
                                                    </li>
                                                </ul>
                                                <h6>
                                                    <a href="{{ url("news-details.html") }}">
                                                        Supervisor Disapproved
                                                        of Latest Work. 
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="recent-items">
                                            <div class="recent-thumb">
                                                <img src="{{ asset("/mymountains/assets/img/news/pp3.jpg") }}" alt="img">
                                            </div>
                                            <div class="recent-content">
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        23 Feb, 2024
                                                    </li>
                                                </ul>
                                                <h6>
                                                    <a href="{{ url("news-details.html") }}">
                                                        Sakura dreams and 
                                                        samurai tales.
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <div class="news-widget-categories">
                                        <div class="tagcloud">
                                            <a href="{{ url("news-details.html") }}">Agency</a>     
                                            <a href="{{ url("news-details.html") }}">Traveling</a>
                                            <a href="{{ url("news-details.html") }}">Design</a>
                                            <a href="{{ url("news-details.html") }}">Travel</a>
                                            <a href="{{ url("news-details.html") }}">Change</a>
                                            <a href="{{ url("news-details.html") }}">Video</a>
                                            <a href="{{ url("news-details.html") }}">World</a>     
                                            <a href="{{ url("news-details.html") }}">Startup</a>
                                            <a href="{{ url("news-details.html") }}">Services</a>
                                        </div>
                                    </div>
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

<!-- Mirrored from ex-coders.com/html/turmet/news-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:47 GMT -->
</html>