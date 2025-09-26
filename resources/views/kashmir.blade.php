<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from ex-coders.com/html/turmet/destination.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:51:28 GMT -->
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

        <style>
            .destination-card-items .destination-image img {
    object-fit: cover;
    height: 28vh;
    }


.feature-tour-items .feature-tour-image img {
    height: 28vh;
    object-fit: cover;
   
}
.sp22 {
   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   border-radius: 16px;
}

        </style>
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

    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"   style="background: linear-gradient(93deg, #26e2ff, #048fec);">
             
        
        <div class="HeaderSaleLine_saleIcon__pwEFh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg></div>
        <p id="mdh" class="m-0 p-0"></p>
          <button type="button" class="btn-close" onclick="clear_head()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="mx-3" style="font-weight:300;">Save up to <x style="color:#20c997;">50% OFF</x></h5>
          <h6 class="mx-3 mb-4" style="font-size:0.8rem;">We’ll be needing some of your basic details to help you better with your trip</h6>
          <form action="" id="tform" style=" justify-content: center;
            display: flex !important;">
            @csrf
            <div class="row w-100 h-100">
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="hidden" name="package" id="packagename" value="" class="form-control" >
                  <input type="text" name="name" required class="form-control" placeholder="Enter Full Name">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="tel" name="contact" required class="form-control" placeholder="Your Phone">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="date"  id="myDate2"  name="date"  class="form-control" placeholder="Travel Data">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="number" name="persons"  class="form-control" placeholder="Travel Count">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group mb-3">
                  <textarea type="text" name="message"  class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <button  style="background:#20c997;" class="btn text-light d-block w-100">Connect with and
                    Experts</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>




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
                        <h2>Destination</h2>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="{{ url("index.html") }}">Home</a>
                            </li>
                            <li><i class="fa-solid fa-chevrons-right"></i></li>
                            <li>Destination</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
<hr>


       <!-- Popular-destination Section Start -->
       <section class="popular-destination-section ">
       
        <div class="container">
            <div class="section-title">
                   
                    <h2 class="wow fadeInUp wow text-center" data-wow-delay=".5s">
                       
                        @foreach ($packages as $p)
                        {{$p->category}}
                        @break
                        @endforeach
                    </h2>
             </div>
            <div class="row g-4">
               @foreach ($packages as $p)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                   
            
       
        <div class="sp22 wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img src="package_images/{{$p->image}}"  onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="Fissure in Sandstone"
              style="height: 40vh; cursor: pointer;" width="100px" />
            <div class="card-body  ">
              <small style="font-size: 14px;" class="d-flex justify-content-between fw-medium">{{$p->day}} days & {{$p->night}} nights <span
                  style="font-size: 12px;"><i class="rounded-pill px-2 py-2  fa-solid fa-star text-success">4.9 <span
                      class="text-muted">(261)</span></i></span>
              </small>
              <p class="card-title text-start text-dark" style="font-size: 15px;">{{$p->name}}</p>
              <p class="card-text p-0 mb-2 text-start rounded" style="font-size: 12px; background-color: #fffbf0; ">
                <span class="fw-bold">

                  @php
                  $string = $p->destination;
                  $parts = explode(',', $string);
                  // $firstPart = $parts[0];
                  // $secondPart = $parts[1];
                  $len=0;
                  foreach ($parts as $part) {
                    $len+=1; // Add the length of each part to the total
                  }
                  
                 
                    @endphp
                              {{ $p->D1}}</span> 
                              <b>|</b>
                              <span class="fw-bold">{{ $p->D2}}</span>
                              <b>|</b>
                              <span class="fw-bold">{{ $p->D3}}</span>
                              <span class="fw-bold text-danger" onclick="window.location.href='/details/{{$p->id}}'" style="cursor: pointer;">&nbsp;&nbsp;&nbsp;+{{ $len}}</span> 
                           
              </p>
              <p class="card-text p-0 mb-2 text-start rounded" style="font-size: 12px; background-color:  #fffbf0; ">
                <span class="fw-bold"><i class="fa-solid fa-hotel"></i> </span> Hotel &nbsp; &nbsp; &nbsp;
                <span class="fw-bold"><i class="fa-solid fa-utensils"></i></span> Food  &nbsp; &nbsp; &nbsp;
                <span class="fw-bold"><i class="fa-solid fa-car"></i> </span> Transport 
              </p>
              <h3 class="text-start text-light rounded-pill"
                style="background:linear-gradient(93deg,#ff7b26,#ec048c);font-size:9px;cursor:text;font-weight:900; width:fit-content;padding-right:10px; padding-left:10px; height:18px;line-height:18px;">
                {{$p->tag_line}}</h3>
              <h5 class="fw-bolder text-start  pb-2 pt-2" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
                    style="font-size: 14px;">INR
                    {{$p->price}}</s></small>&nbsp;&nbsp;&nbsp;<span>
                  <button class="px-2 py-1  border-0 rounded text-success"
                    style="font-size: 9px;background-color: #E7F3EA;color:#0BB22A">save INR {{$p->price-$p->discount}}</button></span></h5>
              <div class="d-flex justify-content-between " style="align-self: center " >
                <a href="tel:{{$p->contact}}" class="btn" style="border-color: #46bfaf; padding-top: 8px;">
                  <i class="fa-solid fa-phone " role="button" style="color: #46bfaf"></i>
                </a>
                <a href="#" class="text-capitalize btn  text-white px-5 py-2 border rounded" role="button"
                  style="background-color: #46bfaf;" onclick="set_head('{{$p->name}}')"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request
                  Callback</a>
                 
              </div>
            </div>
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
       
    {{-- <!-- watch-video-section Start -->
    <section class="watch-video-section fix">
        <div class="bg-shape">
            <img src="{{ asset("/mymountains/assets/img/map-bg.png") }}" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">
                    Watch Our Story
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                    Unforgettable Travel Experiences <br>
                    Get Your Guide
                </h2>
            </div>
            <div class="video-wrapper">
                <div class="watch-button">
                    <a href="{{ url("contact.html") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">Contact Us<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    <a href="{{ url("tour-details.html") }}" class="theme-btn style-2 wow fadeInUp wow" data-wow-delay=".7s">Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
                <div class="video-image bg-cover" style="background-image: url(/mymountains/assets/img/video-bg.jpg);">
                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                        <i class="fa-duotone fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

     <!-- Featured-tour-section Start -->
     <section class="featured-tour-section section-padding section-bg">
        <div class="left-shape">
            <img src="{{ asset("/mymountains/assets/img/feature/plane-shape.png") }}" alt="img">
        </div>
        <div class="right-shape">
            <img src="{{ asset("/mymountains/assets/img/feature/plane-shape.png") }}" alt="img">
        </div>
        <div class="array-button">
            <button class="array-prev">
                <i class="fa-regular fa-arrow-right-long"></i>
            </button>
            <button class="array-next">
                <i class="fa-regular fa-arrow-left-long"></i>
            </button>
        </div>
        <div class="container">
            <div class="section-title">
                <span class="sub-title wow fadeInUp">
                    Featured Tour
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".5s">
                    unforgettable Travel Discoveries
                </h2>
            </div>
            <p class="wow fadeInUp wow" data-wow-delay=".7s">
                There are many variations of passages of  available, but the majority have suffered alteration in some <br> form, by injected humour words which don't look even slightly believable 
            </p>
            <div class="swiper tour-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feature-tour-items">
                            <div class="feature-tour-image">
                                <img src="{{ asset("/mymountains/assets/img/feature/01.jpg") }}" alt="img">
                                <ul class="location">
                                    <li>
                                        <i class="fa-light fa-location-dot"></i>
                                        Nederland
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-tour-content">
                                <h4>
                                    <a href="{{ url("tour-details.html") }}">
                                        Best Time Ever to Explore <br>
                                        Molina's Nature
                                    </a>
                                </h4>
                                <h5>
                                    $49.00<span>/Per day</span>
                                </h5>
                                <a href="{{ url("tour-details.html") }}" class="icon">
                                    <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-tour-items">
                            <div class="feature-tour-image">
                                <img src="{{ asset("/mymountains/assets/img/feature/02.jpg") }}" alt="img">
                                <ul class="location">
                                    <li>
                                        <i class="fa-light fa-location-dot"></i>
                                        Thailand
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-tour-content">
                                <h4>
                                    <a href="{{ url("tour-details.html") }}">
                                        Bathing and Kayaking at <br>
                                        Nonrival Beach
                                    </a>
                                </h4>
                                <h5>
                                    $49.00<span>/Per day</span>
                                </h5>
                                <a href="{{ url("tour-details.html") }}" class="icon">
                                    <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-tour-items">
                            <div class="feature-tour-image">
                                <img src="{{ asset("/mymountains/assets/img/feature/03.jpg") }}" alt="img">
                                <ul class="location">
                                    <li>
                                        <i class="fa-light fa-location-dot"></i>
                                        Austria
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-tour-content">
                                <h4>
                                    <a href="{{ url("tour-details.html") }}">
                                        5 Best Tips for an Amazing <br>
                                        Molina Trip
                                    </a>
                                </h4>
                                <h5>
                                    $49.00<span>/Per day</span>
                                </h5>
                                <a href="{{ url("tour-details.html") }}" class="icon">
                                    <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-tour-items">
                            <div class="feature-tour-image">
                                <img src="{{ asset("/mymountains/assets/img/feature/04.jpg") }}" alt="img">
                                <ul class="location">
                                    <li>
                                        <i class="fa-light fa-location-dot"></i>
                                        Slingerland
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-tour-content">
                                <h4>
                                    <a href="{{ url("tour-details.html") }}">
                                        Discover Beautiful Moliva: <br>
                                        Nature's Paradise
                                    </a>
                                </h4>
                                <h5>
                                    $49.00<span>/Per day</span>
                                </h5>
                                <a href="{{ url("tour-details.html") }}" class="icon">
                                    <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section> --}}
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
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

<script>
     $(document).ready(function () {
                setTimeout(function () {
                    $('#exampleModal').modal('show');
                }, 5000);
            });


            // popup default on site load 
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

    </html>