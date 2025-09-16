<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$package->name}}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
            <link rel="shortcut icon" href="{{ asset("mymountains/assets/img/favicon.svg") }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/bootstrap.min.css") }}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/all.min.css") }}">
        <!--<< Animate.css >>-->
        {{-- <link rel="stylesheet" href="{{ asset("mymountains/assets/css/animate.css") }}"> --}}
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/magnific-popup.css") }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/meanmenu.css") }}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/swiper-bundle.min.css") }}">
        <!--<< Datepickerboot.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/datepickerboot.css") }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/nice-select.css") }}">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/color.css") }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/main.css") }}">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>

/* card css */

a{
    text-decoration: none !important;
    color: black !important;
}

.tour-image {
            height: 240px;
            object-fit: cover;
            width: 100%;
        }
        
        .heart-icon {
            position: absolute;
            top: 12px;
            left: 12px;
            color: white;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            padding: 7px;
            font-size: 16px;
        }
        
        .tag {
            font-size: 10px;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 3px;
            margin-right: 4px;
        }
        
        .tag-orange {
            background-color: #fff;
            color: #46bfaf;
            border: 1px solid #46bfaf;
        }
        
        .tag-red {
            background-color: #fff;
            color: #46bfaf;
            border: 1px solid #46bfaf;
        }
        
        .tag-purple {
            background-color: #fff;
            color: #8A2BE2;
            border: 1px solid #8A2BE2;
        }
        
        .tour-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 8px;
        }
        
        .all-inclusive {
            color: #0066cc;
            font-weight: 500;
            font-size: 12px;
            display: flex;
            align-items: center;
            margin-top: 4px;
        }
        
        .info-icon {
            color: #0066cc;
            margin-left: 4px;
            font-size: 12px;
        }
        
        .infinity-icon {
            font-size: 16px;
            margin-right: 4px;
        }
        
        .details-section {
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            margin-top: 12px;
        }
        
        .detail-label {
            color: #777;
            font-size: 12px;
        }
        
        .detail-value {
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }
        
        .highlight-text {
            color: #0066cc;
        }
        
        .tour-highlights {
            margin-top: 12px;
        }
        
        .highlight-title {
            color: #4CAF50;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 4px;
        }
        
        .highlight-description {
            font-size: 12px;
        }
        
        .price-section {
            background-color: #f8f9fa;
            padding: 12px;
            border-radius: 6px;
        }
        
        .price-label {
            color: #777;
            font-size: 12px;
            text-align: right;
        }
        
        .price-value {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            text-align: right;
        }
        
        .price-details {
            font-size: 10px;
            color: #777;
            text-align: right;
        }
        
        .emi-text {
            font-size: 12px;
            color: #777;
            text-align: right;
            margin-top: 4px;
        }
        
        .emi-value {
            color: #0066cc;
            font-weight: bold;
        }
        
        .book-btn {
            background-color: #FFD700;
            color: #333;
            font-weight: bold;
            border: none;
            padding: 8px;
            font-size: 13px;
            width: 100%;
            margin-top: 12px;
        }
        
        .view-details-btn {
            color: #0066cc;
            background-color: white;
            border: 1px solid #0066cc;
            font-weight: bold;
            padding: 8px;
            font-size: 13px;
            width: 100%;
            margin-top: 8px;
        }
        
        .action-links {
            display: flex;
            justify-content: flex-end;
            margin-top: 12px;
            font-size: 12px;
        }
        
        .action-link {
            color: #555;
            margin-left: 12px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .action-icon {
            margin-right: 4px;
            font-size: 12px;
        }
/* end */


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #46bfaf;
            --secondary-color: #46bfaf30;
            --bs-primary-rgb: 239, 68, 68;
            --bs-secondary-rgb: 249, 115, 22;
            --theme-gradient: linear-gradient(90deg, #46bfaf 0%, #46bfa3 100%);
            --font-primary: 'Poppins', sans-serif;
            --font-size-xs: 0.75rem;
            --font-size-sm: 0.875rem;
            --font-size-base: 1rem;
            --font-size-lg: 1.125rem;
            --font-size-xl: 1.25rem;
            --font-size-2xl: 1.5rem;
        }

        /* Button styles */
        .btn-warning {
            background: var(--theme-gradient) !important;
            color: #fff !important;
            border: none !important;
            transition: all 0.3s ease;
        }

        .btn-warning:hover {

                background: linear-gradient(90deg, #46bfaf 0%, #46bfa3 100%) !important;

            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.2);
        }

        .btn-light {
            background: #fff;
            border: 2px solid transparent;
            background-image: var(--theme-gradient);
            background-origin: border-box;
            box-shadow: 2px 1000px 1px #fff inset;
            transition: all 0.3s ease;
        }

        .btn-light:hover {
            box-shadow: none;
            color: white;
            transform: translateY(-2px);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: var(--theme-gradient);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link.active:after {
            width: 100%;
        }

        .nav-link:hover:after {
            width: 80%;
        }
        
        body {
            display: block !important;
            padding: 0!important;
            font-family: var(--font-primary);
            /* background-color: #f8f9fa; */
            color: #333;
        }
        
        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        
        .slide-in {
            animation: slideIn 0.3s ease-in-out;
        }
        
        .bounce-in {
            animation: bounceIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { 
                opacity: 0;
                transform: translateY(10px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from { 
                transform: translateY(30px);
                opacity: 0;
            }
            to { 
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes bounceIn {
            0% { 
                transform: scale(0.3);
                opacity: 0;
            }
            50% { 
                transform: scale(1.05);
            }
            70% { 
                transform: scale(0.9);
            }
            100% { 
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Header Styles */
        .header-nav {
            background: var(--theme-gradient);
        }
        
        /* Tour Card */
        .tour-image {
            position: relative;
            overflow: hidden;
        }
        
       
        
        .tour-image img {
            transition: transform 0.5s;
            object-fit: cover;
            height: 300px;
        }
        
        .tour-image:hover img {
            transform: scale(1.05);
        }
        
        @media (min-width: 768px) {
            .fxs{
               font-size: 0.8rem;
           }
            .tour-image img {
                height: 400px;
            }
        }
        @media (max-width: 768px) {
           
         
           .fxs{
               font-size: 0.8rem;
           }
       }
        
        /* Quick Actions */
        .action-icon {
            width: 50px;
            height: 50px;
            background-color: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            transition: all 0.2s;
        }
        
        .action-item:hover .action-icon {
            background: var(--theme-gradient);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Typography adjustments */
h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-primary);
    font-weight: 600;
    letter-spacing: -0.02em;
}

.card-title {
    font-weight: 600;
    color: #2d3748;
}

.text-muted {
    color: #718096 !important;
}

/* Responsive font sizes */
@media (max-width: 768px) {
    :root {
        --font-size-2xl: 1.25rem;
        --font-size-xl: 1.125rem;
        --font-size-lg: 1rem;
        --font-size-base: 0.9375rem;
        --font-size-sm: 0.875rem;
        --font-size-xs: 0.75rem;
    }
}

/* Include Icons */
        .include-icon {
            width: 60px;
            height: 60px;
            background-color: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            transition: all 0.2s;
        }
        
        .include-item:hover .include-icon {
            background: var(--theme-gradient);
            color: white;
            transform: scale(1.1);
        }
        
        /* Month Selection */
        .month-item {
            padding: 10px 0;
            text-align: center;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .month-item:hover {
            border-color: var(--primary-color);
            background-color: rgba(13, 110, 253, 0.05);
        }
        
        .month-item.active {
            background: var(--theme-gradient);
            color: white;
            border-color: var(--primary-color);
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.2);
        }
        
        /* Tour Type Selection */
        .type-radio {
            position: relative;
            width: 24px;
            height: 24px;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .type-radio::before {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            transition: all 0.2s;
        }
        
        .type-radio.active::after {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            background-color: var(--primary-color);
            border-radius: 50%;
            top: 5px;
            left: 5px;
            animation: bounceIn 0.3s;
        }
        
        /* Itinerary */
        .day-number {
            width: 36px;
            height: 36px;
            background: var(--theme-gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            margin-right: 15px;
            transition: all 0.2s;
            flex-shrink: 0;
        }
        
        .accordion-button:not(.collapsed) .day-number {
            background-color: #0b5ed7;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: var(--theme-gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: linear-gradient(90deg, #f97316 0%, #ef4444 100%);
            transform: translateY(-5px);
        }
        
        /* Custom section styles */
        .custom-section {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .custom-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Custom tab styles */
        .nav-tabs .nav-link {
            color: #333;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            font-weight: 500;
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
            body{
                padding: 0 !important;
                margin: 0 !important;
            }
            .include-icon {
                width: 45px;
                height: 45px;
            }
            
            .action-icon {
                width: 40px;
                height: 40px;
            }
            
            .day-number {
                width: 30px;
                height: 30px;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body style="background-image: url(assets/img/about/about-bg.jpg);">
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
        {{-- <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> --}}

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ url("index.html") }}">
                                    <img src="{{ asset("mymountains/assets/img/logo/solutions.png") }}" alt="logo-img">
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
    <!-- Header Navigation -->
  @include('nav')
  <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="post"  action="/search" role="search">
                         <meta name="csrf-token" content="{{ csrf_token() }}">
                 
                        <div class="search-field-holder">
                            <input id="search-input" type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>

                    <ul id="search-results">
                    </ul>
                </div>
            </div>
        </div>

    <!-- Main Content -->
<hr>
    <main class="py-4">
        <div class="container">
            <!-- Tour Card -->
            <div class="card shadow-sm mb-4 fade-in">
                <div class="row g-0">
                    <div class="col-md-7">
                        <div class="tour-image h-100"   style="border-radius: 5px;">
                            <img src="/package_images/{{$package->image}}" 
                                 alt="Golden Temple Amritsar" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card-body p-4">
                            <h1 class="card-title fs-3 fw-bold">{{$package->name}}</h1>
                            <p class="text-muted mb-2">{{$package->day}} Days / {{$package->night}} Nights</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">★★★★★</div>
                                <span>4.8/5 (794 Reviews)</span>
                            </div>
                            <div class="mt-4">
                                <small class="text-muted">Per Person</small>
                                <div class="fs-3 fw-bold mb-3">₹{{$package->discount}}  &nbsp;  &nbsp;  &nbsp; <del>₹{{$package->price}}</del></div>
<a href="#" class="btn btn-warning text-white w-100 py-3 mb-3 pulse" data-bs-toggle="modal" data-bs-target="#requestModal">Request Now</a>

<!-- Request Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestModalLabel">Request Tour Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tform3">
                    <div class="mb-3">
                        <input type="hidden" name="package" id="packagename" value="{{$package->name}}" class="form-control" >
                        <label for="nameInput" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="emailInput" >
                    </div>
                    <div class="mb-3">
                        <label for="contactInput" class="form-label">Contact Number</label>
                        <input type="tel" name="contact" class="form-control" id="contactInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="travelDateInput" class="form-label">Preferred Travel Date</label>
                        <input type="date" name="date"  class="form-control" id="travelDateInput" >
                    </div>
                    <div class="mb-3">
                        <label for="personsInput" class="form-label">Number of Persons</label>
                        <input type="number" name="persons" class="form-control" id="personsInput" min="1" >
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
                                {{-- <a href="#" class="btn btn-light w-100 py-2">Tour Price Inclusions and Exclusions</a> --}}
                            </div>
                            <!-- Small Thumbnails -->
                            {{-- <div class="row  mt-4 mx-auto ">
                                <div class="col-4">
                                    <div class="tour-image">
                                        <img src="/package_images/{{$package->image}}" class="img-fluid rounded" style="height: 80px; object-fit: cover;" alt="Tour thumbnail 1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="tour-image">
                                        <img src="/package_images/{{$package->image}}" class="img-fluid rounded" style="height: 80px; object-fit: cover;" alt="Tour thumbnail 2">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="tour-image">
                                        <img src="/package_images/{{$package->image}}" class="img-fluid rounded" style="height: 80px; object-fit: cover;" alt="Tour thumbnail 3">
                                    </div>
                                </div>
                            </div> --}}
<!-- Special Offer Strip -->
<div class="mt-4 p-3 rounded-3" style="background: var(--theme-gradient)">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="me-3">
                <i class="fas fa-gift text-white fa-2x"></i>
            </div>
            <div>
                <h6 class="text-white mb-0">Special Offer!</h6>
                <p class="text-white-50 small mb-0">Book now and get 20% off</p>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="badge bg-white text-primary me-2 animate__animated animate__pulse animate__infinite" onclick="document.querySelector('.kt').scrollIntoView({behavior: 'smooth'});" style="cursor: pointer;">
                Limited Time
            </div>
            <i class="fas fa-chevron-right text-white"></i>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card shadow-sm mb-4 slide-in">
                <div class="card-body py-3">
                    <div class="row row-cols-2 row-cols-sm-4 g-3 text-center">
                        <div class="col">
                            <a href="#" class="text-decoration-none text-dark action-item">
                                <div class="action-icon mx-auto">
                                    <i class="fas fa-download"></i>
                                </div>
                                <span class="small">Download Itinerary</span>
                            </a>
                        </div>
                        <div class="col"> 
                              
                            <a href="javascript:void(0)" onclick="document.querySelector('.kt2').scrollIntoView({behavior: 'smooth'}); return false;" class="text-decoration-none text-dark action-item">
                                <div class="action-icon mx-auto">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <span class="small">Enquire Now</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-decoration-none text-dark action-item" data-bs-toggle="modal" data-bs-target="#emailModal">
                                <div class="action-icon mx-auto">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span class="small">Email Itinerary</span>
                            </a>

                            <!-- Email Modal -->
                            <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="emailModalLabel">Send Itinerary to Email</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="emailForm">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-labe text-start">Email address</label>
                                                    <input type="email" class="form-control" id="emailInput" required>
                                                </div>
                                                <button type="submit" class="btn btn-warning w-100">Send Itinerary</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="#" class="text-decoration-none text-dark action-item" data-bs-toggle="modal" data-bs-target="#whatsappModal">
                                <div class="action-icon mx-auto">
                                   <img src="https://www.veenaworld.com/assets/images/pdp/icon-whatsapp.svg" width="30" alt="">
                                </div>
                                <span class="small">Send Itinerary</span>
                            </a>

                            <!-- WhatsApp Modal -->
                            <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="whatsappModalLabel">Send Itinerary via WhatsApp</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="whatsappForm">
                                                <div class="mb-3">
                                                    <label for="phoneInput" class="form-label text-start">Phone Number</label>
                                                    <input type="tel" class="form-control" id="phoneInput" placeholder="Enter your WhatsApp number" required>
                                                </div>
                                                <button type="submit" class="btn btn-success w-100">
                                                    <i class="fab fa-whatsapp me-2"></i>Send Itinerary
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour Content Grid -->
            <div class="row g-4">
                <!-- Left Column - Tour Details -->
                <div class="col-lg-8">
                    <!-- Select Departure Month -->
                    <div class="card shadow-sm mb-4 custom-section bounce-in">
                        <div class="card-body">
                        </div>
                    </div>

                    <!-- Tour Includes -->
                    <div class="card shadow-sm mb-4 custom-section slide-in">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3">Tour includes:</h5>
                            <div class="row row-cols-3 row-cols-md-6 g-3 text-center">
                                <div class="col include-item">
                                    <div class="include-icon mx-auto">
                                      <svg _ngcontent-ng-c433597239="" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><rect _ngcontent-ng-c433597239="" x="3.46237" y="6.08789" width="10.9582" height="15.8285" fill="#F2DE72"></rect><rect _ngcontent-ng-c433597239="" x="7.11337" y="17.0461" width="3.65273" height="4.8703" fill="white"></rect><path _ngcontent-ng-c433597239="" d="M22.4248 21.8498H19.8873V0H11.4873V3.8027C11.4873 4.12018 11.7448 4.37772 12.0623 4.37772C12.3798 4.37772 12.6373 4.12016 12.6373 3.8027L12.6371 1.15008H18.7371V6.20766H17.3788C17.0613 6.20766 16.8038 6.46521 16.8038 6.78268C16.8038 7.10014 17.0613 7.3577 17.3788 7.3577H18.7371V9.18731H17.3788C17.0613 9.18731 16.8038 9.44487 16.8038 9.76233C16.8038 10.0798 17.0613 10.3373 17.3788 10.3373H18.7371V12.167H17.3788C17.0613 12.167 16.8038 12.4245 16.8038 12.742C16.8038 13.0594 17.0613 13.317 17.3788 13.317H18.7371V14.8985H17.3788C17.0613 14.8985 16.8038 15.156 16.8038 15.4735C16.8038 15.7909 17.0613 16.0485 17.3788 16.0485H18.7371V21.85H15.0313V5.8243H2.99499V21.85H0.575019C0.257541 21.85 0 22.1075 0 22.425C0 22.7425 0.257555 23 0.575019 23H22.4248C22.7423 23 22.9998 22.7424 22.9998 22.425C22.9998 22.1075 22.7421 21.85 22.4248 21.85L22.4248 21.8498ZM7.17121 21.8498V18.1646H8.43787L8.43805 21.8498H7.17121ZM9.58827 21.8498V18.1646H10.8547V21.8498H9.58827ZM12.0046 21.8498V17.0149H6.02159L6.02177 21.8498H4.14525V6.97369H13.882V21.8498H12.0046Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M6.11276 13.9634H7.3211V15.1721H6.11276V13.9634Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M8.40976 13.9634H9.61848V15.1721H8.40976V13.9634Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.7048 13.9634H11.9137V15.1721H10.7048V13.9634Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M6.11276 11.6265H7.3211V12.8352H6.11276V11.6265Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M8.40976 11.6265H9.61848V12.8352H8.40976V11.6265Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.7048 11.6265H11.9137V12.8352H10.7048V11.6265Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M6.11276 9.28931H7.3211V10.4982H6.11276V9.28931Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M8.40976 9.28931H9.61848V10.4982H8.40976V9.28931Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.7048 9.28931H11.9137V10.4982H10.7048V9.28931Z" fill="#595959"></path></svg>
                                    </div>
                                    <span class="small">Hotel</span>
                                </div>
                                <div class="col include-item">
                                    <div class="include-icon mx-auto">
                                      <svg _ngcontent-ng-c433597239="" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g _ngcontent-ng-c433597239="" clip-path="url(#clip0_6213_4849)"><path _ngcontent-ng-c433597239="" fill-rule="evenodd" clip-rule="evenodd" d="M18.9955 18.1241V23.4416C18.9955 24.0212 18.5257 24.4911 17.9461 24.4911C17.3664 24.4911 16.8966 24.0212 16.8966 23.4416V13.0698L15.7483 11.645C15.7483 9.19254 15.7483 5.43666 15.7483 2.98428C15.7483 2.32785 16.042 1.69824 16.5652 1.23391C17.0883 0.769578 18.256 0.508789 18.9955 0.508789V13.5951" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M10.5868 9.16841V23.3551C10.5868 23.9537 10.1065 24.4416 9.50793 24.4509C8.89756 24.4603 8.3971 23.9692 8.39506 23.3588L8.34789 9.16841C8.34789 9.16841 6.03259 9.17691 6.03259 6.45453C6.03259 3.73214 6.03259 2.91797 6.03259 2.91797H13.0548V6.50541C13.0548 6.50541 12.953 9.16841 10.5868 9.16841Z" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M10.5189 16.3773C10.8 16.3773 11.0278 16.1495 11.0278 15.8685C11.0278 15.5874 10.8 15.3596 10.5189 15.3596C10.2379 15.3596 10.0101 15.5874 10.0101 15.8685C10.0101 16.1495 10.2379 16.3773 10.5189 16.3773Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M18.9897 16.3773C19.2708 16.3773 19.4986 16.1495 19.4986 15.8685C19.4986 15.5874 19.2708 15.3596 18.9897 15.3596C18.7087 15.3596 18.4809 15.5874 18.4809 15.8685C18.4809 16.1495 18.7087 16.3773 18.9897 16.3773Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M19.5044 0.508857C19.5044 0.227866 19.2766 0 18.9955 0C18.297 0 16.9278 0.231683 16.2273 0.853354C15.5995 1.41065 15.2393 2.18737 15.2393 2.98435V11.645C15.2393 11.7612 15.2791 11.8739 15.352 11.9644L16.3877 13.2494V23.4417C16.3877 24.3009 17.0868 25 17.9461 25C18.8053 25 19.5044 24.3009 19.5044 23.4417V18.1242C19.5044 17.8432 19.2766 17.6153 18.9956 17.6153C18.7145 17.6153 18.4867 17.8432 18.4867 18.1242V23.4417C18.4867 23.7398 18.2442 23.9823 17.9461 23.9823C17.648 23.9823 17.4055 23.7398 17.4055 23.4417V13.0698C17.4055 12.9537 17.3657 12.841 17.2928 12.7505L16.2571 11.4655V2.98429C16.2571 2.4706 16.4864 1.98414 16.9029 1.6145C17.2078 1.34389 17.8847 1.13638 18.4867 1.05506V13.5951C18.4867 13.8761 18.7145 14.104 18.9955 14.104C19.2766 14.104 19.5044 13.8761 19.5044 13.5951V0.508857Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.5396 17.6153C10.2586 17.6153 10.0308 17.8432 10.0308 18.1242V23.4219C10.0308 23.7183 9.78969 23.9594 9.49328 23.9594C9.19687 23.9594 8.95577 23.7183 8.95577 23.4219V9.04989C8.95577 8.7689 8.72796 8.54103 8.44692 8.54103C7.38071 8.54103 6.51326 7.67358 6.51326 6.60737V2.74006C6.51326 2.45907 6.28544 2.2312 6.0044 2.2312C5.72336 2.2312 5.49554 2.45907 5.49554 2.74006V6.60737C5.49554 8.06123 6.55239 9.27297 7.93806 9.51488V23.422C7.93806 24.2795 8.6357 24.9772 9.49328 24.9772C10.3509 24.9772 11.0485 24.2795 11.0485 23.422V18.1242C11.0485 17.8431 10.8206 17.6153 10.5396 17.6153Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M13.0034 2.2312C12.7223 2.2312 12.4945 2.45907 12.4945 2.74006V6.60737C12.4945 7.67358 11.6176 8.54103 10.5396 8.54103C10.2586 8.54103 10.0308 8.7689 10.0308 9.04989V13.5952C10.0308 13.8761 10.2586 14.104 10.5396 14.104C10.8207 14.104 11.0485 13.8761 11.0485 13.5952V9.51544C12.446 9.27506 13.5122 8.0625 13.5122 6.60737V2.74006C13.5122 2.45902 13.2844 2.2312 13.0034 2.2312Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M8.04502 7.30283C8.32606 7.30283 8.55388 7.07496 8.55388 6.79397V2.74006C8.55388 2.45907 8.32606 2.2312 8.04502 2.2312C7.76398 2.2312 7.53616 2.45907 7.53616 2.74006V6.79397C7.53616 7.07496 7.76398 7.30283 8.04502 7.30283Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.9627 7.30283C11.2438 7.30283 11.4716 7.07496 11.4716 6.79397V2.74006C11.4716 2.45907 11.2438 2.2312 10.9627 2.2312C10.6817 2.2312 10.4539 2.45907 10.4539 2.74006V6.79397C10.4539 7.07496 10.6817 7.30283 10.9627 7.30283Z" fill="#595959"></path></g></svg>
                                    </div>
                                    <span class="small">Meal</span>
                                </div>
                                <div class="col include-item">
                                    <div class="include-icon mx-auto">
                                       <svg _ngcontent-ng-c433597239="" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path _ngcontent-ng-c433597239="" d="M23.3947 18.8346H6.64074H2.37979C1.47081 18.8346 0.733887 18.0977 0.733887 17.1887V8.59951C0.733887 7.69054 1.47076 6.95361 2.37979 6.95361H23.3947C24.3036 6.95361 25.0406 7.69048 25.0406 8.59951V17.1887C25.0406 18.0976 24.3037 18.8346 23.3947 18.8346Z" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M5.59408 21.1318C6.84778 21.1318 7.8641 20.1155 7.8641 18.8618C7.8641 17.6081 6.84778 16.5918 5.59408 16.5918C4.34039 16.5918 3.32407 17.6081 3.32407 18.8618C3.32407 20.1155 4.34039 21.1318 5.59408 21.1318Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M19.7126 21.1318C20.9662 21.1318 21.9826 20.1155 21.9826 18.8618C21.9826 17.6081 20.9662 16.5918 19.7126 16.5918C18.4589 16.5918 17.4425 17.6081 17.4425 18.8618C17.4425 20.1155 18.4589 21.1318 19.7126 21.1318Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M25.0032 12.4345H0.733887V8.16405C0.733887 7.47492 1.29255 6.91626 1.98168 6.91626H23.7554C24.4446 6.91626 25.0032 7.47492 25.0032 8.16405V12.4345Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M26.2119 9.15765H25.6804V8.54922C25.6804 7.3132 24.6748 6.30762 23.4388 6.30762H15.2709C14.9615 6.30762 14.7105 6.55851 14.7105 6.86802C14.7105 7.17753 14.9615 7.42842 15.2709 7.42842H23.4388C24.0568 7.42842 24.5596 7.93121 24.5596 8.54922V11.8743H16.7924V9.19536C16.7924 8.88585 16.5415 8.63496 16.232 8.63496C15.9226 8.63496 15.6716 8.88585 15.6716 9.19536V11.8743H10.1421V9.19536C10.1421 8.88585 9.89119 8.63496 9.58174 8.63496C9.27229 8.63496 9.02134 8.88585 9.02134 9.19536V11.8743H1.1208V8.54922C1.1208 7.93121 1.62359 7.42842 2.2416 7.42842H10.2553C10.5648 7.42842 10.8157 7.17753 10.8157 6.86802C10.8157 6.55851 10.5648 6.30762 10.2553 6.30762H2.2416C1.00558 6.30762 0 7.3132 0 8.54922V17.2332C0 18.4692 1.00558 19.4748 2.2416 19.4748H2.83132C3.11224 20.7417 4.24392 21.6923 5.59409 21.6923C6.94427 21.6923 8.076 20.7417 8.35687 19.4748H16.9497C17.2307 20.7417 18.3623 21.6923 19.7125 21.6923C21.0627 21.6923 22.1944 20.7417 22.4753 19.4748H23.3019C24.6133 19.4748 25.6803 18.4081 25.6803 17.097V10.2785H26.2118C26.5797 10.2785 26.879 10.5778 26.879 10.9457V12.3336C26.879 12.6431 27.13 12.894 27.4394 12.894C27.7489 12.894 27.9998 12.6431 27.9998 12.3336V10.9457C28 9.95981 27.1978 9.15765 26.2119 9.15765ZM5.59409 20.5715C4.65144 20.5715 3.88448 19.8045 3.88448 18.8618C3.88448 17.9191 4.65144 17.1522 5.59409 17.1522C6.53674 17.1522 7.30371 17.9191 7.30371 18.8618C7.30371 19.8045 6.5368 20.5715 5.59409 20.5715ZM19.7126 20.5715C18.7699 20.5715 18.0029 19.8045 18.0029 18.8618C18.0029 17.9191 18.7699 17.1522 19.7126 17.1522C20.6552 17.1522 21.4222 17.9191 21.4222 18.8618C21.4222 19.8045 20.6552 20.5715 19.7126 20.5715ZM23.302 18.354H22.4965C22.2564 17.0349 21.0998 16.0315 19.7126 16.0315C18.3253 16.0315 17.1688 17.035 16.9287 18.354H8.378C8.13792 17.0349 6.98137 16.0315 5.59409 16.0315C4.20682 16.0315 3.05032 17.035 2.81019 18.354H2.2416C1.62359 18.354 1.1208 17.8512 1.1208 17.2332V12.9951H24.5596V17.097C24.5596 17.7901 23.9955 18.354 23.302 18.354Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M5.58945 19.4409C5.89895 19.4409 6.14986 19.19 6.14986 18.8805C6.14986 18.571 5.89895 18.3201 5.58945 18.3201C5.27995 18.3201 5.02905 18.571 5.02905 18.8805C5.02905 19.19 5.27995 19.4409 5.58945 19.4409Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M19.7162 19.4409C20.0257 19.4409 20.2766 19.19 20.2766 18.8805C20.2766 18.571 20.0257 18.3201 19.7162 18.3201C19.4067 18.3201 19.1558 18.571 19.1558 18.8805C19.1558 19.19 19.4067 19.4409 19.7162 19.4409Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M12.7211 7.43013C13.0306 7.43013 13.2815 7.17923 13.2815 6.86973C13.2815 6.56023 13.0306 6.30933 12.7211 6.30933C12.4116 6.30933 12.1607 6.56023 12.1607 6.86973C12.1607 7.17923 12.4116 7.43013 12.7211 7.43013Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M14.9767 14.0972H8.32914C8.01969 14.0972 7.76874 14.3481 7.76874 14.6576C7.76874 14.9671 8.01969 15.218 8.32914 15.218H14.9767C15.2862 15.218 15.5371 14.9671 15.5371 14.6576C15.5371 14.3481 15.2862 14.0972 14.9767 14.0972Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M17.4752 15.229C17.7847 15.229 18.0356 14.9781 18.0356 14.6686C18.0356 14.3591 17.7847 14.1082 17.4752 14.1082C17.1657 14.1082 16.9148 14.3591 16.9148 14.6686C16.9148 14.9781 17.1657 15.229 17.4752 15.229Z" fill="#595959"></path></svg>
                                    </div>
                                    <span class="small">Transfer</span>
                                </div>
                                <div class="col include-item">
                                    <div class="include-icon mx-auto">
                                       <svg _ngcontent-ng-c433597239="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path _ngcontent-ng-c433597239="" d="M21.9638 19.5379H2.03615C1.19272 19.5379 0.509033 18.8542 0.509033 18.0108V8.08522C0.509033 7.2418 1.19272 6.55811 2.03615 6.55811H21.9638C22.8073 6.55811 23.491 7.2418 23.491 8.08522V18.0108C23.491 18.8542 22.8073 19.5379 21.9638 19.5379Z" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M3.1936 4.46191H7.26072V6.55803H3.1936V4.46191Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M12 17.4903C14.4534 17.4903 16.4422 15.5014 16.4422 13.048C16.4422 10.5946 14.4534 8.60571 12 8.60571C9.54655 8.60571 7.55768 10.5946 7.55768 13.048C7.55768 15.5014 9.54655 17.4903 12 17.4903Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M12 15.4665C13.3357 15.4665 14.4184 14.3838 14.4184 13.0481C14.4184 11.7124 13.3357 10.6296 12 10.6296C10.6643 10.6296 9.58154 11.7124 9.58154 13.0481C9.58154 14.3838 10.6643 15.4665 12 15.4665Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M21.9638 6.049H7.76981V4.46192C7.76981 4.18083 7.54187 3.95288 7.26077 3.95288H3.19361C2.91252 3.95288 2.68457 4.18083 2.68457 4.46192V6.04905H2.03615C0.913419 6.04905 0 6.96247 0 8.08521V18.0107C0 19.1335 0.913419 20.0469 2.03615 20.0469H21.9638C23.0866 20.0469 24 19.1335 24 18.0107V8.08515C24 6.96247 23.0865 6.049 21.9638 6.049ZM3.70265 4.97096H6.75169V6.04905H3.70265V4.97096ZM22.9819 18.0107C22.9819 18.5721 22.5252 19.0288 21.9638 19.0288H2.03615C1.47479 19.0288 1.01808 18.5721 1.01808 18.0107V8.08515C1.01808 7.52379 1.47479 7.06708 2.03615 7.06708H3.19361H7.26072H21.9638C22.5252 7.06708 22.9819 7.52379 22.9819 8.08515L22.9819 18.0107Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M12 8.09668C9.26978 8.09668 7.04865 10.3178 7.04865 13.048C7.04865 15.7782 9.26978 17.9993 12 17.9993C14.7301 17.9993 16.9513 15.7782 16.9513 13.048C16.9513 10.3178 14.7301 8.09668 12 8.09668ZM12 16.9812C9.8312 16.9812 8.06672 15.2168 8.06672 13.0479C8.06672 10.8791 9.83115 9.11471 12 9.11471C14.1688 9.11471 15.9332 10.8791 15.9332 13.0479C15.9332 15.2168 14.1688 16.9812 12 16.9812Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M12 10.1206C10.3858 10.1206 9.07251 11.4339 9.07251 13.0481C9.07251 14.6623 10.3858 15.9756 12 15.9756C13.6142 15.9756 14.9275 14.6623 14.9275 13.0481C14.9275 11.4339 13.6142 10.1206 12 10.1206ZM12 14.9574C10.9471 14.9574 10.0906 14.1009 10.0906 13.048C10.0906 11.9952 10.9471 11.1386 12 11.1386C13.0528 11.1386 13.9094 11.9952 13.9094 13.048C13.9094 14.1009 13.0528 14.9574 12 14.9574Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M2.57007 11.2153C2.28898 11.2153 2.06104 11.4433 2.06104 11.7244V17.222C2.06104 17.5031 2.28898 17.731 2.57007 17.731C2.85116 17.731 3.07911 17.5031 3.07911 17.222V11.7244C3.07911 11.4432 2.85122 11.2153 2.57007 11.2153Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M2.57013 9.94288C2.85127 9.94288 3.07917 9.71498 3.07917 9.43384C3.07917 9.15271 2.85127 8.9248 2.57013 8.9248C2.289 8.9248 2.0611 9.15271 2.0611 9.43384C2.0611 9.71498 2.289 9.94288 2.57013 9.94288Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M21.405 15.3897C21.6861 15.3897 21.914 15.1618 21.914 14.8807V9.38306C21.914 9.10197 21.6861 8.87402 21.405 8.87402C21.1239 8.87402 20.8959 9.10197 20.8959 9.38306V14.8806C20.8959 15.1618 21.1239 15.3897 21.405 15.3897Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M21.405 17.6804C21.6862 17.6804 21.9141 17.4525 21.9141 17.1714C21.9141 16.8903 21.6862 16.6624 21.405 16.6624C21.1239 16.6624 20.896 16.8903 20.896 17.1714C20.896 17.4525 21.1239 17.6804 21.405 17.6804Z" fill="#595959"></path></svg>
                                    </div>
                                    <span class="small">Sightseeing</span>
                                </div>
                                <div class="col include-item">
                                    <div class="include-icon mx-auto">
                                        <svg _ngcontent-ng-c433597239="" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none"><g _ngcontent-ng-c433597239="" clip-path="url(#clip0_59_247)"><path _ngcontent-ng-c433597239="" d="M7.1875 4.04297H1.79688V0.449219H7.1875L6.19922 2.24609L7.1875 4.04297Z" fill="#FFE867"></path><path _ngcontent-ng-c433597239="" d="M7.63672 13.0779H9.77801V22.416H7.63672V13.0779Z" fill="#FFE867"></path><path _ngcontent-ng-c433597239="" d="M19.4961 22.416H17.3548V13.0779H19.4961V22.416Z" fill="#FFE867"></path><path _ngcontent-ng-c433597239="" d="M17.6992 13.1809L15.4999 16.5892L13.5664 14.6556L14.9112 13.1809H17.6992Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M9.43359 13.1809L11.6329 16.5892L13.5664 14.6556L12.2215 13.1809H9.43359Z" fill="white"></path><path _ngcontent-ng-c433597239="" d="M18.957 4.29932H8.17578C7.62998 4.29932 7.1875 4.7418 7.1875 5.2876C7.1875 5.8334 7.62998 6.27588 8.17578 6.27588H18.957C19.5028 6.27588 19.9453 5.8334 19.9453 5.2876C19.9453 4.7418 19.5028 4.29932 18.957 4.29932Z" fill="#FFE867"></path><path _ngcontent-ng-c433597239="" d="M15.2535 1.06494H11.892C10.8354 1.06494 9.979 1.92142 9.979 2.97789V4.29932H17.1665V2.97794C17.1665 1.92142 16.31 1.06494 15.2535 1.06494Z" fill="#FFE867"></path><path _ngcontent-ng-c433597239="" d="M19.4103 13.0631C19.6223 12.5855 19.7429 12.044 19.7429 11.5314C19.7429 10.8678 19.5364 10.2213 19.1566 9.68206C19.2854 9.35417 19.3526 9.00198 19.3526 8.6489C19.3526 7.90589 19.0636 7.2295 18.5926 6.72498H18.9567C19.7493 6.72498 20.3942 6.08013 20.3942 5.28748C20.3942 4.49484 19.7493 3.84998 18.9567 3.84998H17.6147V2.97783C17.6147 1.67532 16.555 0.615609 15.2525 0.615609H11.8909C10.5884 0.615609 9.52877 1.67532 9.52877 2.97783V3.84998H8.17541C7.98143 3.84998 7.79645 3.8888 7.62745 3.95874C7.61874 3.9131 7.60378 3.86836 7.58069 3.82645L6.71158 2.24609L7.58078 0.665697C7.65732 0.526529 7.65472 0.357309 7.5739 0.220566C7.49304 0.0838691 7.34601 0 7.18722 0H1.79659C1.54853 0 1.34737 0.20116 1.34737 0.449219V7.15197C1.31157 7.1627 1.27586 7.17416 1.24046 7.1871C0.263046 7.54351 -0.242145 8.62864 0.11431 9.606C0.114939 9.6078 0.115613 9.60955 0.116287 9.61135L2.13135 14.9271C2.4923 15.8793 3.34514 16.5421 4.35696 16.6567L7.18722 16.9774V22.5508C7.18722 22.7988 7.38838 23 7.63643 23H22.5505C22.7986 23 22.9997 22.7988 22.9997 22.5508V18.1953C22.9997 15.8408 21.5026 13.8295 19.4103 13.0631ZM8.56906 12.7318C8.39813 12.3597 8.29912 11.9269 8.29912 11.5314C8.29912 10.9834 8.49471 10.4516 8.84977 10.0338C8.96814 9.89463 8.99038 9.69755 8.90597 9.53543C8.76222 9.25934 8.68936 8.96111 8.68936 8.6489C8.68936 7.91721 9.09999 7.27977 9.70284 6.95454V8.09344C9.70284 9.57743 10.5444 10.8679 11.7749 11.5147V12.7318H8.56906ZM16.5303 6.72498H16.5309V8.09339C16.5309 9.72824 15.2009 11.0582 13.5661 11.0582C11.9312 11.0582 10.6012 9.72824 10.6012 8.09339V6.72525C10.6053 6.72525 10.6092 6.72494 10.6133 6.72494L16.5303 6.72498ZM14.4617 13.1248L13.566 14.0205L12.6732 13.1277V11.8515C12.96 11.9196 13.2587 11.9568 13.566 11.9568C13.8744 11.9568 14.174 11.9194 14.4617 11.8508V13.1248ZM11.9053 13.6303L12.9307 14.6558L11.7083 15.8782L10.2577 13.6303H11.9053ZM15.2269 13.6303H16.8744L15.4239 15.8782L14.2014 14.6558L15.2269 13.6303ZM17.8037 13.6383C18.2368 13.6635 18.6538 13.7493 19.0465 13.8874V22.1016H17.8037V13.6383ZM18.5308 12.8229C18.2082 12.7632 17.8757 12.7318 17.5361 12.7318H15.3602V11.5133C16.5891 10.866 17.4294 9.57631 17.4294 8.09344V6.9487C18.0384 7.27204 18.4543 7.91267 18.4543 8.6489C18.4543 8.96111 18.3814 9.25939 18.2376 9.53543C18.1532 9.69751 18.1755 9.89463 18.2938 10.0338C18.6489 10.4516 18.8445 10.9834 18.8445 11.5314C18.8444 11.9617 18.7276 12.4334 18.5308 12.8229ZM10.4273 2.97783C10.4273 2.17067 11.0839 1.51405 11.891 1.51405H15.2525C16.0597 1.51405 16.7163 2.17067 16.7163 2.97783V3.84998H10.4273V2.97783ZM8.17545 4.74842H18.9567C19.254 4.74842 19.4958 4.99024 19.4958 5.28748C19.4958 5.58473 19.254 5.82655 18.9567 5.82655H8.17545C7.8782 5.82655 7.63639 5.58473 7.63639 5.28748C7.63639 4.99024 7.8782 4.74842 8.17545 4.74842ZM2.24576 0.898438H6.42741L5.80528 2.02962C5.73112 2.16443 5.73112 2.32781 5.80528 2.46262L6.42741 3.59375H2.24576V0.898438ZM6.97873 4.49219C6.82676 4.72012 6.73795 4.99361 6.73795 5.28748C6.73795 6.08013 7.38281 6.72498 8.17545 6.72498H8.55091C8.07995 7.2295 7.79088 7.90594 7.79088 8.6489C7.79088 9.00198 7.85812 9.35417 7.98696 9.68206C7.6071 10.2213 7.40064 10.8678 7.40064 11.5314C7.40064 11.928 7.47202 12.3419 7.60324 12.7311H5.27031L3.65928 8.31324C3.48664 7.83977 3.13993 7.46184 2.68312 7.24913C2.54171 7.18332 2.39499 7.13584 2.24576 7.10664V4.49219H6.97873ZM1.54817 8.03113C1.79619 7.9407 2.06459 7.95225 2.30389 8.06366C2.54319 8.17506 2.72477 8.37303 2.81524 8.62105L3.00378 9.13805L1.18588 9.89845L0.957404 9.29573C0.772461 8.78443 1.03705 8.21756 1.54817 8.03113ZM2.97139 14.6086L1.50451 10.739L3.31189 9.98299L4.53395 13.3343C4.59859 13.5116 4.76718 13.6296 4.95599 13.6296H7.18717V16.0731L4.45808 15.7639C3.78214 15.6874 3.21248 15.2447 2.97139 14.6086ZM8.08561 13.6303H9.32846V17.2194C9.32846 17.4675 9.52962 17.6686 9.77768 17.6686C10.0257 17.6686 10.2269 17.4675 10.2269 17.2194V15.2394L11.2551 16.8329C11.3287 16.9469 11.45 17.0216 11.585 17.0359C11.6009 17.0377 11.6168 17.0385 11.6326 17.0385C11.7511 17.0385 11.8656 16.9916 11.9502 16.9069L13.5661 15.291L15.182 16.9069C15.2667 16.9916 15.3812 17.0385 15.4996 17.0385C15.5155 17.0385 15.5314 17.0377 15.5473 17.0359C15.6823 17.0216 15.8035 16.9469 15.8771 16.8329L16.9053 15.2394V19.1855H15.2798C15.0317 19.1855 14.8305 19.3867 14.8305 19.6347C14.8305 19.8828 15.0317 20.0839 15.2798 20.0839H16.9053V22.1016H10.2269V21.2623C10.2269 21.0143 10.0257 20.8131 9.77768 20.8131C9.52962 20.8131 9.32846 21.0143 9.32846 21.2623V22.1016H8.08561V13.6303ZM22.1012 22.1016H19.945V14.3193C21.2385 15.1261 22.1012 16.5618 22.1012 18.1953V22.1016Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M13.5659 9.83574C13.7962 9.83574 14.0264 9.74806 14.2018 9.57277C14.3772 9.39735 14.3766 9.1129 14.2011 8.93744C14.0257 8.76206 13.7406 8.76211 13.5652 8.93744C13.3898 8.76206 13.1054 8.76206 12.9299 8.93744C12.7545 9.11286 12.7545 9.39731 12.9299 9.57277C13.1053 9.74806 13.3356 9.83574 13.5659 9.83574Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M9.77783 19.6902C9.89598 19.6902 10.0119 19.6422 10.0954 19.5586C10.1789 19.475 10.2271 19.3592 10.2271 19.241C10.2271 19.1228 10.179 19.0069 10.0954 18.9234C10.0114 18.8399 9.89598 18.7917 9.77783 18.7917C9.65969 18.7917 9.54379 18.8398 9.46023 18.9234C9.37623 19.0069 9.32861 19.1228 9.32861 19.241C9.32861 19.3592 9.37623 19.475 9.46023 19.5586C9.54379 19.6422 9.65924 19.6902 9.77783 19.6902Z" fill="#595959"></path></g></svg>
                                    </div>
                                    <span class="small">Activities</span>
                                </div>
                                <div class="col include-item opacity-50" style="pointer-events: none;">
                                    <div class="include-icon mx-auto">
                                       <svg _ngcontent-ng-c433597239="" xmlns="http://www.w3.org/2000/svg" width="33" height="30" viewBox="0 0 33 30" fill="none"><path _ngcontent-ng-c433597239="" fill-rule="evenodd" clip-rule="evenodd" d="M16.2083 11.2711L12.0564 13.8324C12.0564 13.8324 9.80123 12.7963 7.48138 11.7305C7.11031 11.5601 6.91208 11.1435 7.01516 10.7507C7.11823 10.3579 7.49157 10.1071 7.8933 10.1608C11.7312 10.6733 16.2083 11.2711 16.2083 11.2711Z" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M11.8352 19.4244L13.4064 18.4551L14.7313 24.2333C14.8467 24.7367 15.2581 25.1652 15.6944 25.2366C16.1307 25.308 16.4577 25.0003 16.4601 24.5161L16.499 16.5474L24.1802 11.8089C24.1802 11.8089 21.8095 7.68074 18.5999 9.65769L5.71858 17.604C4.82785 16.3727 3.867 15.1906 2.94641 15.1207C2.69761 15.1012 2.49437 15.2356 2.41113 15.4746C2.32789 15.7136 2.3769 16.022 2.54027 16.2868L5.57724 21.2098C6.08934 22.04 6.99925 22.4077 7.60959 22.0312L8.54385 21.4549" fill="#F2DE72"></path><path _ngcontent-ng-c433597239="" d="M25.4966 6.57325C24.2449 6.23398 22.9197 6.48751 21.5575 7.32689L16.0807 10.7055L7.95437 9.62025C7.29111 9.53163 6.66265 9.95388 6.49241 10.6022C6.32013 11.2588 6.64512 11.942 7.26509 12.2267L10.9043 13.8987L5.88735 16.9936C4.99829 15.8833 4.0139 14.9514 2.85173 15.0134C2.24889 15.0442 1.75416 15.4644 1.62076 16.059C1.54293 16.4057 1.61036 16.7861 1.80564 17.1027L4.64804 21.7103C5.28342 22.7403 6.62102 23.072 7.62975 22.4497L8.80335 21.7258C9.0559 21.57 9.13173 21.2346 8.97262 20.9766C8.81351 20.7187 8.47974 20.636 8.22719 20.7918L7.05359 21.5158C6.54923 21.8269 5.88043 21.661 5.56273 21.1461L2.72034 16.5384C2.67638 16.4672 2.65992 16.3871 2.67532 16.3188C2.70285 16.196 2.8039 16.1094 2.92766 16.1031C3.72012 16.0608 4.55547 17.009 5.3401 18.0401C5.51076 18.2643 5.81958 18.3247 6.05452 18.1798L12.3444 14.2997L16.4962 11.7384L22.1334 8.26096C23.2328 7.58352 24.273 7.36932 25.2251 7.62427C26.2 7.88524 26.8939 8.58784 27.2615 9.04985L18.1572 14.6661C18.0228 14.749 17.9326 14.888 17.9102 15.0462L16.757 23.2026C16.7233 23.4403 16.5101 23.6083 16.2715 23.5854C16.0593 23.5651 15.8839 23.3836 15.8543 23.1541L15.1209 17.4542C15.0972 17.2692 14.9818 17.1075 14.8149 17.0252C14.6481 16.9428 14.4528 16.9513 14.2968 17.0475L12.3356 18.2573C12.0831 18.4131 12.0073 18.7485 12.1664 19.0065C12.3255 19.2644 12.6593 19.3471 12.9118 19.1913L14.158 18.4226L14.7823 23.2748C14.8776 24.015 15.4691 24.6025 16.1889 24.6717C16.5287 24.7043 16.8532 24.6218 17.1234 24.4551C17.4934 24.2269 17.7614 23.8408 17.8271 23.3763L18.9451 15.4694L28.3214 9.68526C28.5664 9.53415 28.6463 9.21273 28.5026 8.95638C28.4603 8.88091 27.4437 7.10104 25.4966 6.57325ZM12.0104 13.2163L7.69757 11.2349C7.57151 11.177 7.50283 11.033 7.53774 10.8999C7.57262 10.767 7.69641 10.6838 7.83226 10.7019L14.6175 11.608L12.0104 13.2163Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M11.8203 17.0003C12.0808 16.8396 12.1591 16.4938 11.995 16.2279C11.831 15.9621 11.4869 15.8768 11.2263 16.0375C10.9658 16.1982 10.8876 16.544 11.0516 16.8099C11.2156 17.0758 11.5598 17.1611 11.8203 17.0003Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M13.7073 15.8363C13.9678 15.6756 14.046 15.3298 13.882 15.0639C13.718 14.798 13.3738 14.7127 13.1133 14.8734C12.8528 15.0341 12.7746 15.38 12.9386 15.6459C13.1026 15.9117 13.4468 15.997 13.7073 15.8363Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M15.5942 14.6722C15.8548 14.5115 15.933 14.1657 15.769 13.8998C15.6049 13.6339 15.2608 13.5487 15.0003 13.7094C14.7398 13.8701 14.6615 14.2159 14.8255 14.4818C14.9896 14.7477 15.3337 14.8329 15.5942 14.6722Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M17.4813 13.5083C17.7418 13.3476 17.82 13.0017 17.656 12.7358C17.492 12.47 17.1478 12.3847 16.8873 12.5454C16.6267 12.7061 16.5485 13.052 16.7125 13.3178C16.8765 13.5837 17.2207 13.669 17.4813 13.5083Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M19.3682 12.3442C19.6287 12.1835 19.7069 11.8377 19.5429 11.5718C19.3789 11.3059 19.0347 11.2207 18.7742 11.3814C18.5137 11.5421 18.4355 11.8879 18.5995 12.1538C18.7635 12.4197 19.1077 12.5049 19.3682 12.3442Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M21.2554 11.18C21.5159 11.0193 21.5941 10.6735 21.4301 10.4076C21.2661 10.1417 20.9219 10.0565 20.6614 10.2172C20.4009 10.3779 20.3227 10.7237 20.4867 10.9896C20.6507 11.2555 20.9949 11.3407 21.2554 11.18Z" fill="#595959"></path><path _ngcontent-ng-c433597239="" d="M10.9968 20.3691C11.1985 20.1382 11.1736 19.7824 10.9411 19.5746C10.7086 19.3667 10.3566 19.3854 10.1548 19.6164C9.95309 19.8473 9.97802 20.2031 10.2105 20.4109C10.443 20.6188 10.795 20.6001 10.9968 20.3691Z" fill="#595959"></path></svg>
                                    </div>
                                    <span class="small">Flight</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upgrades Available -->
                    <div class="card shadow-sm mb-4 custom-section fade-in">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3">Upgrades Available:</h5>
                            <p>Call us at <a href="tel://9906786356">9906786356</a> for Cycle Phone rentals or Business Class upgrades for a premium travel experience.</p>
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs mb-4" id="tourTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="itinerary-tab" data-bs-toggle="tab" data-bs-target="#itinerary" type="button" role="tab">Itinerary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tour-details-tab" data-bs-toggle="tab" data-bs-target="#tour-details" type="button" role="tab">Tour Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="calculate-price-tab" data-bs-toggle="tab" data-bs-target="#calculate-price" type="button" role="tab">Calculate Price</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="need-to-know-tab" data-bs-toggle="tab" data-bs-target="#need-to-know" type="button" role="tab">Hotel Options</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="policy-terms-tab" data-bs-toggle="tab" data-bs-target="#policy-terms" type="button" role="tab">Policy & Terms</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="tourTabsContent">
                        <!-- Itinerary Section -->
                        <div class="tab-pane fade show active" id="itinerary" role="tabpanel">
                            <div class="card shadow-sm mb-4 custom-section">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-2 mb-3">
                                        Itinerary <span class="small fw-normal text-muted">(Day wise)</span>
                                    </h5>
                                    
                                    <div class="accordion" id="itineraryAccordion">
                                        @php
                                        $day=1;
                                        @endphp
                                        <!-- Day 1 -->
                                        @foreach ($days as $d)
                                       
                                       
                                        <div class="accordion-item border mb-3 rounded">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#day{{$day}}" aria-expanded="true">
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="day-number">{{$day}}</div>
                                                        <div>
                                                            <div class="fw-medium">Day 
                                                            @php
                                                            echo $day;
                                                            $day+=1;
                                                            @endphp
                                                             {{$d->title}}
                                                            </div>
                                                            <div class="small text-muted"></div>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="day{{$day-1}}" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                                <div class="accordion-body">
                                                    <div class="mb-3">
                                                        {{-- <div class="fw-medium">{{$d->title}}</div> --}}
                                                        {{-- <div class="small text-muted">2 Nights Stay</div> --}}
                                                    </div>
                                                    <p>
                                                        {{$d->days}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                        <!-- Day 2 -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tour Details Section -->
                        <div class="tab-pane fade" id="tour-details" role="tabpanel">
                            <div class="card shadow-sm mb-4 custom-section">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-2 mb-3">Tour Details</h5>
                                    {!!$package->description!!}
<div class="quick-info-section p-3 bg-light rounded-3 shadow-sm">
    <h5 class="fw-bold mb-4">
        <i class="fas fa-info-circle text-primary me-2"></i>
        Quick Info
    </h5>
    <ul class="list-unstyled">
        <li class="d-flex align-items-start mb-3">
            <i class="fas fa-route text-warning fs-5 me-3 mt-1"></i>
            <div>
                <span class="fw-bold d-block mb-1">Route:</span>
                <span id="rouu" class="text-muted"></span>
            </div>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="far fa-clock text-warning fs-5 me-3 mt-1"></i>
            <div>
                <span class="fw-bold d-block mb-1">Duration:</span>
                <span class="text-muted">{{$package->day}} Days and {{$package->night}} Nights</span>
            </div>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="fas fa-play-circle text-warning fs-5 me-3 mt-1"></i>
            <div>
                <span class="fw-bold d-block mb-1">Start Point:</span>
                <span class="text-muted">{{$package->start}}</span>
            </div>
        </li>
        <li class="d-flex align-items-start mb-3">
            <i class="fas fa-flag-checkered text-warning fs-5 me-3 mt-1"></i>
            <div>
                <span class="fw-bold d-block mb-1">End Point:</span>
                <span class="text-muted">{{$package->end}}</span>
            </div>
        </li>
    </ul>
</div>
                                    
                                    <!-- Tour details content would go here -->
                                </div>
                            </div>
                        </div>

                        <!-- Calculate Price Section -->
                        <div class="tab-pane fade" id="calculate-price" role="tabpanel">
                            <div class="card shadow-sm mb-4 custom-section">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-2 mb-3">Calculate Price</h5>
                                   @include('priceform')
                                    
                                    <!-- Price calculator would go here -->
                                </div>
                            </div>
                        </div>

                        <!-- Need to Know Section -->
                        <div class="tab-pane fade" id="need-to-know" role="tabpanel">
                            <div class="card shadow-sm mb-4 custom-section">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-2 mb-3">Hotels to Stay</h5>
                                  
                                    @foreach ($options as $optionIndex => $hotels)
                                    <div class="card mb-3 border">
                                        <div class="card-body">
                                            <h5 class="card-title">Option {{$optionIndex+1}}</h5>
                                            @foreach ($hotels as $hotel)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div>
                                                    <p class="card-text mb-0">{{$hotel['hotel_name']}}</p>
                                                    <small class="text-muted">{{$hotel['nights']}} nights</small>
                                                    <p class="card-text mb-0">{{$hotel['address']}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    <!-- Need to know content would go here -->
                                </div>
                            </div>
                        </div>

                        <!-- Policy & Terms Section -->
                        <div class="tab-pane fade" id="policy-terms" role="tabpanel">
                            <div class="card shadow-sm mb-4 custom-section">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-2 mb-3">Policy & Terms</h5>
                                    <p>   {{$package->terms}}</p>
                                    
                                    <!-- Policy content would go here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package Options -->
                    <div class="card shadow-sm mb-4 custom-section slide-in">
                        <div class="card-body">
                            <h5 class="card-title text-center border-bottom pb-2 mb-4">Other {{$package->category}}</h5>
                            @foreach($other as $o)
                           


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row g-0">
                                                <!-- Left side with image -->
                                                <div class="col-md-4 position-relative">
                                                    <i class="fas fa-heart heart-icon"></i>
                                                    <img src="/package_images/{{$o->image}}" style="border-radius: 6px;" class="tour-image" alt="Leh Ladakh Manali Kashmir">
                                                </div>
                                                
                                                <!-- Middle section with tour details -->
                                                <div class="col-md-5 p-3">
                                                    <div class="d-flex">
                                                        <span class="tag tag-orange">GROUP TOUR</span>
                                                        <span class="tag tag-red">LHM</span>
                                                        <span class="tag tag-purple">Road Trips</span>
                                                    </div>
                                                    
                                                    <h2 class="tour-title">{{$o->name}}</h2>
                                                    
                                                    <div class="all-inclusive">
                                                        <span class="infinity-icon">∞</span> All Inclusive
                                                        <i class="fas fa-info-circle info-icon"></i>
                                                    </div>
                                                    
                                                    <div class="details-section">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="detail-label">Days</div>
                                                                <div class="detail-value">{{$o->day}} 🔆</div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="detail-label">Nights</div>
                                                                <div class="detail-value">{{$o->night}} 🌙</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <div class="detail-label">Destinations</div>
                                                                <div class="detail-value">
                                                                    <span class="highlight-text">{{$o->D1}}</span> 
                                                                    <span class="highlight-text">{{$o->D2}}</span> 
                                                                    <span class="highlight-text">{{$o->D3}}</span> 
                                                                    
                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    {{-- <div class="tour-highlights">
                                                        <div class="highlight-title">Tour Highlights</div>
                                                        <p class="mb-0 highlight-description">Pinjore Garden, Pandoh Dam and Scenic Kullu Valle... 
                                                            <span class="highlight-text">More</span>
                                                        </p>
                                                    </div> --}}
                                                </div>
                                                
                                                <!-- Right section with pricing -->
                                                <div class="col-md-3 p-3">
                                                    <div class="price-section">
                                                        <div class="price-label">Starts from</div>
                                                        <div class="price-value">₹{{$o->discount}}</div>
                                                        <div class="price-details">per person</div>
                                                        
                                                        <div class="emi-text">
                                                            Original Price <span class="emi-value">₹<del>{{$o->price}}</del></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <button class="btn btn-warning  w-100 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#requestModal">Book Online</button>
                                                    <button class="btn btn btn-danger w-100" onclick="window.location.href='/details/{{$o->id}}'">View Tour Details</button>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                              
                                {{-- <div class="card-body">
                                    <h5 class="card-title">{{$o->name}}</h5>
                                    <p class="text-muted">{{$o->day}} Days, {{$o->night}} Nights</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">INR {{$o->price}}</span>
                                        </div>
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-warning">INR {{$o->discount}}</div>
                                            <small class="text-muted">Per Person</small>
                                        </div>
                                    </div>
                                    <a href="/details/{{$o->id}}" class="text-primary mt-2 d-inline-block">Show Details</a>
                                </div> --}}
                              
                          
                            @endforeach



                           
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Booking Form -->
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4 custom-section bounce-in">
                        <div class="card-body">
                        <form action="/phonepe/payment" method="get">
                            <h5 class="card-title border-bottom pb-2 mb-3 kt">Booking Summary</h5>
                          
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Address">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="PIN Code">
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <select class="form-select" style="max-width: 100px;">
                                        <option value="+91">+91</option>
                                    </select>
                                    <input type="tel" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-warning text-white w-100 py-3">Book Now</button>
                        </form>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4 custom-section bounce-in">
                        <div class="card-body">
                            <form id="tform2">
                            <h5 class="card-title border-bottom pb-2 mb-3">Unsure or to call you?</h5>
                            <input type="hidden" name="package" id="packagename" value="{{$package->name}}" class="form-control" >
                               
                            <div class="mb-3">
                                <input type="text" name="name" required class="form-control" placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <select class="form-select"  style="max-width: 100px;">
                                        <option value="+91">+91</option>
                                        <option value="+1">+1</option>
                                        <option value="+44">+44</option>
                                    </select>
                                    <input type="tel" name="contact" required class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning text-white w-100 py-3">Request Callback</button>
                        </form>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4 custom-section fade-in">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3">Inclusions</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>Accommodation at hotel</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>Welcome drink on arrival</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>Daily breakfast and dinner</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>Non A/C Vehicle for sightseeing</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>Airport/Train Station Transfer</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-success me-3"><i class="fas fa-check"></i></span>
                                    <span>All applicable taxes</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                    <div class="card shadow-sm mb-4 custom-section slide-in">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3">Exclusions</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <span class="text-danger me-3"><i class="fas fa-times"></i></span>
                                    <span>5 % GST</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-danger me-3"><i class="fas fa-times"></i></span>
                                    <span>Entry fees to monuments and Palaces</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-danger me-3"><i class="fas fa-times"></i></span>
                                    <span>Any meals not mentioned, Any transfers, Any insurance</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-danger me-3"><i class="fas fa-times"></i></span>
                                    <span>Anything not mentioned in the inclusions</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4 custom-section fade-in">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3">Term & Condition</h5>
                            <div class="mb-3">
                                <h6>Travel Validity</h6>
                                <p class="small">The date is valid for travel till Tuesday, 30 September 2025.</p>
                            </div>
                            
                            <div class="mb-3">
                                <h6>Easy Cancellation Policy</h6>
                                <p class="small">In case of more than 30 days prior to departure date, initial booking amount and any additional amount of air fare will be charged as penalty. *Less than 30 days: 50% of total tour cost will be charged as penalty.</p>
                            </div>
                            
                            <div class="mb-3">
                                <h6>Guaranteed Dates</h6>
                                <p class="small">Your selected travel dates are guaranteed in the unlikely event of a death and not due guarantee * - 12 days from your preferred dates.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4 custom-section bounce-in">
                        
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2 mb-3 kt2">{{$package->name}}: Get Upto 31% off.</h5>
                            <form id="tform">
                                <input type="hidden" name="package" id="packagename" value="{{$package->name}}" class="form-control" >
                                <div class="mb-3">
                                    <input type="text" required name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" required name="contact" class="form-control" placeholder="Phone">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="date" class="form-control" placeholder="Choose Date of Travel">
                                </div>
                                <div class="mb-3">
                                    <input type="number" name="persons" class="form-control" placeholder="Traveller Count">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control"  name="message" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="privacy" checked>
                                    <label class="form-check-label small text-muted" for="privacy">We assure the privacy of your contact data.</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" checked>
                                    <label class="form-check-label small text-muted" for="terms">This data will only be used by our team to contact you and no other purposes.</label>
                                </div>
                                <button type="submit" class="btn btn-warning text-white w-100 py-3">Send Enquiry</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </main>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>
  
        <footer>
            @include('footer')
         </footer>
    


               <!--<< All JS Plugins >>-->
       
        <script src="{{ asset("mymountains/assets/js/jquery-3.7.1.min.js") }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset("mymountains/assets/js/viewport.jquery.js") }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset("mymountains/assets/js/bootstrap.bundle.min.js") }}"></script>
        <!--<< nice-selec Js >>-->
        <script src="{{ asset("mymountains/assets/js/jquery.nice-select.min.js") }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset("mymountains/assets/js/jquery.waypoints.js") }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset("mymountains/assets/js/jquery.counterup.min.js") }}"></script>
         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        {{-- <script src="{{ asset("mymountains/assets/js/swiper-bundle.min.js") }}"></script> --}}
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset("mymountains/assets/js/jquery.meanmenu.min.js") }}"></script>
         <!--<< Datepicker Js >>-->
         <script src="{{ asset("mymountains/assets/js/bootstrap-datepicker.js") }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset("mymountains/assets/js/jquery.magnific-popup.min.js") }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset("mymountains/assets/js/wow.min.js") }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset("mymountains/assets/js/main.js") }}"></script>
        {{-- sweet alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Back to Top Button
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Month Selection
            const monthItems = document.querySelectorAll('.month-item');
            
            monthItems.forEach(item => {
                item.addEventListener('click', function() {
                    monthItems.forEach(month => {
                        month.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
            
            // Tour Type Selection
            const typeRadios = document.querySelectorAll('.type-radio');
            
            typeRadios.forEach(radio => {
                radio.addEventListener('click', function() {
                    typeRadios.forEach(r => {
                        r.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
            
            // Animate elements when they come into view
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.custom-section:not(.animated)');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('animated');
                        
                        if (!element.classList.contains('fade-in') && 
                            !element.classList.contains('slide-in') && 
                            !element.classList.contains('bounce-in')) {
                            element.classList.add('fade-in');
                        }
                    }
                });
            };
            
            // Run on load
            animateOnScroll();
            
            // Run on scroll
            window.addEventListener('scroll', animateOnScroll);
            
            // Add loading animation to submit buttons
            const submitButtons = document.querySelectorAll('.btn-warningx');
            
            submitButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Prevent default only for demo purposes
                    e.preventDefault();
                    
                    const originalText = this.innerHTML;
                    this.innerHTML = '<span class="loading"></span>Processing...';
                    this.disabled = true;
                    
                    // Simulate form submission
                    setTimeout(() => {
                        this.innerHTML = 'Success!';
                        this.classList.remove('btn-warning');
                        this.classList.add('btn-success');
                        
                        // Reset after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('btn-success');
                            this.classList.add('btn-warning');
                            this.disabled = false;
                        }, 2000);
                    }, 1500);
                });
            });
        });
    </script>
     <script>
            
        var numbers = '{{$package->destination}}';
       var  number = numbers.replace(/ *, */g, '<br>');
        $("#rouu").html(number);
    </script>






<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#tform").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
       
$("#tform button").prop('disabled', true);
       
                     },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform').trigger("reset");
                     
                      $("#tform button").prop('disabled', false);
  
                       },
                       error: function(response) {
                        swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform').trigger("reset");
                     
                      $("#tform button").prop('disabled', false);
                     
                       }
                   });

});
</script>
<script>
    $("#tform2").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
       
$("#tform2 button").prop('disabled', true);
       
                     },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform2').trigger("reset");
                     
                      $("#tform2 button").prop('disabled', false);
  
                       },
                       error: function(response) {
                        swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform2').trigger("reset");
                     
                      $("#tform2 button").prop('disabled', false);
                     
                       }
                   });

});
</script>
<script>
    $("#tform3").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
       
$("#tform3 button").prop('disabled', true);
       
                     },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform3').trigger("reset");
                     
                      $("#tform3 button").prop('disabled', false);
  
                       },
                       error: function(response) {
                        swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform3').trigger("reset");
                     
                      $("#tform3 button").prop('disabled', false);
                     
                       }
                   });

});
</script>
</body>
</html>