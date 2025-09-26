<!DOCTYPE html>
<html lang="en">
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixel-drop">
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="keywords" content="{{ $seo->meta_keywords }}">

        
        <!-- ======== Page title ============ -->
        <title>My Mountains</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset("mymountains/assets/img/favicon.svg") }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/bootstrap.min.css") }}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/all.min.css") }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset("mymountains/assets/css/animate.css") }}">
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
             {{-- <link rel="stylesheet" href="{{ asset("/assets/css/homepage.css") }}"> --}}
        
        <meta name="google-site-verification" content="OKDOBtdKqC-xYHEzlnnGKFSAJPWOeLtZVK43jKNRxdw" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <style>

  .featured-image {
    height: 400px;
}

.main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.thumbnail {
    height: 100%;
    overflow: hidden;
    cursor: pointer;
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.thumbnail:hover img {
    transform: scale(1.05);
}

.more-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 0.25rem;
    cursor: pointer;
}

.gallery-item {
    cursor: pointer;
    overflow: hidden;
    margin-bottom: 10px;
}

.gallery-item img {
    transition: transform 0.3s ease;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

#modalGallery img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 0.25rem;
}

#modalImage {
    max-height: 80vh;
}

#reviewText {
    transition: max-height 0.3s ease;
    overflow: hidden;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .featured-image {
        height: 250px;
    }
    
    .thumbnail {
        height: 120px;
    }
    
    h1 {
        font-size: 1.5rem;
    }
    
    #modalGallery img {
        height: 150px;
    }
}

@media (max-width: 576px) {
    .featured-image {
        height: 200px;
    }
    
    .thumbnail {
        height: 100px;
    }
}


    .hero-1 .hero-bg::before {
    
    background: linear-gradient(180deg, rgba(11, 13, 17, 0.6) 0%, rgba(11, 13, 17, 0.2) 30%, #0b0d116d 100%);
}
    
.swiper22 {
   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   border-radius: 16px;
}
/* card box span */

.card_box spann {
  position: absolute;
  overflow: hidden;
  width: 150px;
  height: 150px;
  top: -10px;
  left: -10px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}

.card_box spann::before {
  content: 'Premium';
  position: absolute;
  width: 150%;
  height: 40px;
  background: linear-gradient(45deg, #ff6547 0%, #ffb144  51%, #ff7053  100%);
  /* background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0 40%, #e5e5e5 48%); */
  background-position: 100% 0;
  background-size: 200% 100%;
  transform: rotate(-45deg) translateY(-20px);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  box-shadow: 0 5px 10px rgba(0,0,0,0.23);
  animation: AnimationName 2s infinite;

  
}


.card_box spann::after {
  content: '';
  position: absolute;
  width: 10px;
  bottom: 0;
  left: 0;
  height: 10px;
  z-index: -1;
  background-size: 200% 100%;
  box-shadow: 140px -140px #cc3f47;
  background: linear-gradient(45deg, #FF512F 0%, #F09819  51%, #FF512F  100%);
   /* background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0  40%, #e5e5e5 48%); */
  background-position: 100% 0;
  animation: AnimationName 2s infinite;

}


/* card box span */


@keyframes AnimationName {
  100% {
    background-position: -100% 0;
  }
}



     #sss{
  background:rgb(0 0 0 / 56%);
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
.news-card-items-3 .news-image {
    height: 25vh;
      position: relative;
}
.destination-category-item .category-image {
    
    height: 28vh;
}

.destination-card-items .destination-image img {
    object-fit: cover;
    height: 28vh;
    }


.feature-tour-items .feature-tour-image img {
    height: 28vh;
    object-fit: cover;
   
}

.btn-custom{
    background: linear-gradient(93deg,#20c997,#0dcaf0);
    color: white;
    border: none;
}
   /* for small and medium screen */
    @media (max-width: 450px) {
    .destination-category-section .plane-shape {
    position: absolute;
    left: -30px;
    top: -40px;
}

.float-bob-x{
    width: fit-content;

}
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
                                    <img loading="lazy" src="{{ asset("mymountains/assets/img/logo/solutions.png") }}" alt="My Mountains Tour Company - Premium Kashmir and Ladakh Travel Services Logo">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
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
                                <button href="javascript:void(0)" class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal5"> Login <i class="fa-sharp fa-regular fa-arrow-right"></i></button>
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

        <!-- Header top section start -->
   <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"   style="background: linear-gradient(93deg, #26e2ff, #048fec);">
             
        
        <div class="HeaderSaleLine_saleIcon__pwEFh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg></div>
        <p id="mdh" class="m-0 p-0 text-dark"></p>
          <button type="button" class="btn-close" onclick="clear_head()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="mx-3" style="font-weight:300;">Save up to <x style="color:#20c997;">50% OFF</x></h5>
          <h6 class="mx-3 mb-4" style="font-size:0.8rem;">We'll be needing some of your basic details to help you better with your trip</h6>
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

        <!-- Header Section Start -->
       @include("nav")


       {{-- search  modal --}} 
      

        <!-- Search Area Start -->
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

        <!-- Hero section start -->
        <section class="hero-section">
            <div class="swiper hero-slider pt-0">
                <div class="swiper-wrapper">
                    
                        @foreach ($banner as $b)
                            <div class="swiper-slide" >


                                <div class="hero-1">
                                    <div class="hero-bg bg-cover" style="background-image: url(/top_banner_images/{{$b->image}});"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="hero-content">
                                                    <div class="sub-title" style="color:{{$b->offer_line_color}}!important; font-size:1.5rem;">
                                                        {{$b->offer_line}}

                                                    </div>
                                                    <h1 style="color:{{$b->heading_color}}!important;">
                                                        {{$b->heading}}
                                                        
                                                        
                                                        
                                                    </h1>
                                                    <br>
                                                     <div class="sub-title" style="color:{{$b->offer_line_color}}!important;">
                                                    starting at <span class="fs-4 fw-bold"> INR {{$b->discount}} </span><s> INR {{$b->price}}</s>
                                                    <button
                class="border-0 px-3 py-1 rounded-pill fw-bold text-white"
                style="background:linear-gradient(93deg,#ff7b26,#ec048c); font-size: 14px; cursor: text;">{{$b->tag_line}}</button>
                                                     </div>
                                                    <form action="" method="post" id="tform22{{$b->id}}" style=" justify-content: center;>
                                                          @csrf
                                                    <div class="booking-list-area">
                                                        <div class="booking-list">
                                                            <div class="icon">
                                                                <img loading="lazy" src="{{ asset("mymountains/assets/img/hero/icon-1.png") }}" alt="Travel booking form icon for entering customer name">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Enter Name</h6>
                                                                <div class="form-clt">
                                                                    <input type="text" required id="name" name="name" placeholder="Enter Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="booking-list">
                                                            <div class="icon">
                                                                <img loading="lazy" src="{{ asset("mymountains/assets/img/hero/icon-2.png") }}" alt="Contact information icon for phone number field">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Enter Contact</h6>
                                                                <div class="form-clt">
                                                                    <input type="text" required id="contact" name="contact" placeholder="Enter Contact">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="booking-list ">
                                                            <div class="icon">
                                                                <img loading="lazy" src="{{ asset("mymountains/assets/img/hero/icon-3.png") }}" alt="Calendar icon for selecting travel dates">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Travel Date</h6>
                                                                <div class="form-clt">
                                                                    <input type="date" class="no-calendar" required id="date1" name="date" placeholder="Travel Date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="booking-list">
                                                            <div class="icon">
                                                                <img loading="lazy" src="{{ asset("mymountains/assets/img/hero/icon-2.png") }}" alt="Group icon for number of travelers selection">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Traveler</h6>
                                                                <div class="form-clt">
                                                                    <input type="number" required id="traveler" name="traveler"  value="1" min="1" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="theme-btn" type="submit">Submit</button>
                                                    </div>
                                                    </form>
                                                </div>

                                                <script>
                                                    $("#tform22{{$b->id}}").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail2',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
      
      $("#tform22{{$b->id}} button").prop('disabled', true);
             
                           },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});

                      $('#tform22{{$b->id}}').trigger("reset");
                      $("#tform22{{$b->id}} button").prop('disabled', false);


                       },
                       error: function(response) {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                       $("#tform22{{$b->id}} button").prop('disabled', false);

                      $('#tform22{{$b->id}}').trigger("reset");
                       }
                   });

});
    </script>
                                                </script>

                                                
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        @endforeach
                   
                    
                </div>
            </div>
        </section>

        <!-- Feature Section Start -->
        <section class="feature-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/01.svg") }}" alt="Discount offers icon - special pricing and savings for Kashmir tour packages">
                            </div>
                            <div class="content">
                                <h3>
                                    A Lot of Discount
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                        <div class="feature-card-items">
                            <div class="icon bg-color">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/02.svg") }}" alt="Professional tour guide icon - expert local guides for Kashmir and Ladakh">
                            </div>
                            <div class="content">
                                <h3>
                                    Best Guide
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/03.svg") }}" alt="24/7 customer support icon - round the clock assistance during your journey">
                            </div>
                            <div class="content">
                                <h3>
                                    24/7 Support
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/04.svg") }}" alt="Travel management icon - comprehensive trip planning and coordination services">
                            </div>
                            <div class="content">
                                <h3>
                                    Travel Management
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <div class="container rounded  text-start  py-4 d-flex flex-column flex-grow" style="color: #FCAF17;font-size:25px;">
     <div class="section-title">
                    <span class="sub-title wow fadeInUp">
                        @foreach ($premium as $p)
                        {{$p->category}}
                        @break
                        @endforeach
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".5s">
                        unforgettable Travel Discoveries
                    </h2>
        </div>
                
    <div class="container swiper mySwiper2 p-2 m-0" id="swiper1">
      <div class="swiper-wrapper ">
        
         @foreach ($premium as $p)
             
         
      
        <div class="swiper-slide swiper22" id="swiperx" style="background-image: url(package_images/{{$p->image}}); background-size: cover;border-radius: 10px; background-repeat: no-repeat;cursor:pointer;">
          <div class="d-flex card_box flex-column justify-content-end rounded-3 " data-aos="flip-right"
            data-aos-duration="4000" style="width: 100%;">
            <spann id="pm{{ $p->id }}" data-before="{{ $p->tag_line }}" style="font-size: 10px !important"></spann>

            <style>
                #pm{{ $p->id }}::before {
                    content: attr(data-before) !important;
                    
                }
            </style>
            
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('pm{{ $p->id }}').setAttribute('data-before', '{{ $p->tag_line}}');
                });
            </script>
            
            
            <div class="rounded-3 row position-absolute text-white py-3 mx-auto" style="
               width: fit-content;" id="sss" >
              <small class="d-flex justify-content-between" style="font-size: 13px;">{{$p->day}} Days & {{$p->night}} Nights 
                {{-- <span style="font-size: 13px;">
                  <i
                    class="rounded-pill text-warning px-2 py-0 pb-2 fs-5 fa-solid fa-circle-info" onclick="window.location.href='/details/{{$p->id}}'"></i>
                  </span> --}}
                    <i class="rounded-pill px-2 py-2  fa-solid fa-star text-warning">{{4.9}} <span
                      class="text-light">({{261+$p->id}}) &nbsp;
                    <span style="font-size: 13px;">
                  <i
                    class="rounded-pill text-warning px-2 py-0 pb-0 fs-6 fa-solid fa-circle-info" onclick="window.location.href='/details/{{$p->id}}'"></i>
                  </span>
                    </span></i>
              </small>
              
              <p class="text-start d-flex justify-content-between" style="font-size: 14px;">{{$p->name}}
      
              </p>
             
              <small class="text-start" style="font-size: 12px;"><span class="fw-bold">
                @php
                $des=explode(',',$p->destination);
                foreach($des as $dd)
                echo "<i class='bx bx-current-location'></i> ".$dd.'&nbsp;&nbsp;';
                @endphp
                </span> 
              </small>
                <hr class="mt-2 mb-2">
              <h6 class="text-start text-white pb-2">INR {{$p->discount}} : P.P&nbsp;<small>
                <s style="font-size: 14px;">INR
                {{$p->price}}</s></small>
                  <button class="px-2 py-1 text-white border-0 rounded"
                    style="font-size: 12px;background-color: #AA8D63;">save INR {{$p->price-$p->discount}}</button>
                  
              </h6>
              
              
              
                    <div class="d-flex justify-content-between flex-wrap">
              <button class="btn btn-light-outlined" style="border: solid white 1px;">
                <i class="fa-solid fa-phone text-white" role="button"></i>
              </button>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-light d-block p-2" style="width: 85%;">Request&nbsp;Callback</button>
              </div>
            </div>
            <img loading="lazy" src="landing/clone26.avif" class="d-block  rounded-3 lazy" style="height: 80vh; visibility: hidden;" alt="Camera" />
          </div>
        </div>
        @endforeach
      </div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>
  </div>
        <!-- Destination-category Section Start -->
         <section class="destination-category-section section-padding">
            <div class="plane-shape float-bob-y">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/destination/shape.png") }}" alt="Location Pin Shape">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">Wonderful Place For You</span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                        Browse By Destination Category
                    </h2>
                </div>
            </div>
            <div class="container-fluid">
               
                <div class="swiper category-slider">
                    <div class="swiper-wrapper">
                        @foreach ($category as $c)
                        <div class="swiper-slide">
                            <div class="destination-category-item">
                                <div class="category-image">
                                    <img loading="lazy" src="{{ asset('/category_images/'.$c->image) }}" alt="Category {{$c->name}}" style="object-fit: cover;">
                                    <div class="category-content">
                                        <h5>
                                            <a href="{{ url("/kashmir") }}">{{$c->name}}</a>
                                        </h5>
                                        <p>View Tour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-dot4 mt-5">
                    <div class="dot"></div>
                </div>
            </div>
        </section> 
       
        <!-- About Section Start -->
        <section class="about-section section-padding  fix bg-cover" style="background-image: url(mymountains/assets/img/about/about-bg.jpg);">
            <div class="right-shape float-bob-x">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/about/right-shape.png") }}" alt="Mountain Shape">
            </div>
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/about/01.png") }}" alt="About Image 1" class="wow img-custom-anim-left">
                                <div class="border-image">
                                    <img loading="lazy" src="{{ asset("mymountains/assets/img/about/border.png") }}" alt="Border Image">
                                </div>
                                <div class="vdeo-item">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                        <i class="fa-duotone fa-play"></i>
                                    </a>
                                    <h5>WACTH VIDEO </h5>
                                </div>
                                <div class="about-image-2">
                                    <img loading="lazy" src="{{ asset("mymountains/assets/img/about/02.png") }}" alt="About Image 2" class="wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    <div class="plane-shape float-bob-y">
                                        <img loading="lazy" src="{{ asset("mymountains/assets/img/about/plane-shape.png") }}" alt="Plane Shape">
                                    </div>
                                    <div class="about-tour">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/10.svg") }}" alt="Luxury Tour Icon">
                                        </div>
                                        <div class="content">
                                            <h4>Luxury Tour</h4>
                                            <span>25 years of Experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">Let’s Go Together</span>
                                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                        Great opportunity for <br>
                                        adventure & travels
                                    </h2>
                                </div>
                                <div class="about-area mt-4 mt-md-0">
                                    <div class="line-image">
                                        <img loading="lazy" src="{{ asset("mymountains/assets/img/about/Line-image.png") }}" alt="Line Image">
                                    </div>
                                    <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/05.svg") }}" alt="Adventure Icon">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Exclusive Trip
                                            </h5>
                                            <p>
                                                With carefully planned itineraries and personalized services,<br>every moment of your trip is tailored to give you the best possible experience. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/06.svg") }}" alt="Safety Icon">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Safety first always
                                            </h5>
                                            <p>
                                                 Every aspect of your travel is designed with secure arrangements,<br>
                                                 reliable transportation, and trusted partners. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-items wow fadeInUp wow" data-wow-delay=".7s">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/07.svg") }}" alt="Professional Guide Icon">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Professional Guide
                                            </h5>
                                            <p>
                                                Our expertly trained guides bring each destination to life,<br>offering deep insights, local stories, and professional support throughout your trip. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


          

  <div class="container d-block mx-auto text-center mt-5">
    <h3 class="">People Love Our <span class="" style="color: #46bfaf;">Kashmir </span>Tours</h3>
  </div>
  <div class="row container mx-auto  d-flex flex-wrap p-2"  >
    <div class=" col-md-4 d-flex align-items-center justify-content-center flex-column border-end ">
      <img loading="lazy" src="landing/star.png" class="lazy" alt="Star Rating" style="width: 60%;" >
      <h1 class="text-success fw-bold" >4.6</h1>
      <span class="fw-medium text-success fs-5" >16,716 Kashmir Reviews</span>
      <p class="text-muted" >by customers from
        <span class="text-dark  fw-semibold" >65+ countries</span>
      </p>
    </div>
    <div class="col-md-8"  >
      
     <div class="embedsocial-widget" data-ref="af8158ed8d6e3679b8c59fa39a3ac797"> <a href="https://embedsocial.com/google-reviews-widget/" title="Add Google reviews on a website" target="_blank" class="powered-by-es es-summary-slider" > <img loading="lazy" src="https://embedsocial.com/cdn/icon/embedsocial-logo.webp" alt="EmbedSocial" > <span> Google reviews widget </span> </a> </div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/aht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialWidgetScript")); </script>
      
    </div>
  </div>
  <div id="carouselExampleAutoplaying" class="carousel slide section-padding " data-bs-ride="carousel">
    <div class="carousel-inner">
@foreach ($offer as $index => $o)



    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"">
      <div class="container">
        <div class="card text-left p-4 " style="background: url(offer_images/{{$o->image}});background-size:cover;">
    
          <div class="card-body">
            <h5 class="card-title fw-bolder textt">{{$o->heading}}</h5>
            <p class="card-text textt2">{{$o->description}}</p>
            <button type="button" class=" text-capitalize btnn btn btn-white bg-white  border-0 rounded"
              style="color: #F37205;border-color: #F37205;" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Get&nbsp;a&nbsp;Callback</button>
    
          </div>
        </div>
      </div>
    </div>
    
  

 
      
@endforeach
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
  <span class="carousel-control-prev-icon text-dark"  aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
  <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
        
        <!-- Cta Section Start -->
        <section class="cta-section">
            <div class="mobile-shape">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/mobile.png") }}" alt="Icon">
            </div>






          

         <!-- Featured-tour-section Start -->
         



        <!-- Popular-destination Section Start 1-->
 <div class="container  rounded  text-start  p-4 d-flex flex-column flex-grow" style="color: #515151;">
   <div class="section-title-area justify-content-between">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp">
                            Best Recommended Places
                        </span>
                        <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                            @foreach ($packages as $p)
                            {{$p->category}}
                            @break
                            @endforeach
                        </h2>
                    </div>
                    <a href="{{ url("/kashmir") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">View All Tour<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div> 
    <div class=" container swiper mySwiper2 p-2 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages as $p)
            
       
        <div class="swiper-slide swiper22 wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img loading="lazy" src="package_images/{{$p->image}}"  onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="{{$p->name}}"
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
        @endforeach

      </div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>
  </div>

         <!-- Popular-destination Section Start 2 -->
 <div class="container  rounded  text-start  p-4 d-flex flex-column flex-grow" style="color: #515151;">
   <div class="section-title-area justify-content-between">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp">
                            Best Recommended Places
                        </span>
                        <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                            @foreach ($packages1 as $p)
                            {{$p->category}}
                            @break
                            @endforeach
                        </h2>
                    </div>
                    <a href="{{ url("/ladakh") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">View All Tour<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div> 
    <div class=" container swiper mySwiper2 p-2 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages1 as $p)
            
       
        <div class="swiper-slide swiper22 wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" >
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img loading="lazy" src="package_images/{{$p->image}}"  onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="{{$p->name}}"
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
              <h5 class="fw-bolder text-start  pb-2 pt-2 style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
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
        @endforeach

      </div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>
  </div>

         <!-- Popular-destination Section Start 3-->
<div class="container  rounded  text-start  p-4 d-flex flex-column flex-grow" style="color: #515151;">
   <div class="section-title-area justify-content-between">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp">
                            Best Recommended Places
                        </span>
                        <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                            @foreach ($packages2 as $p)
                            {{$p->category}}
                            @break
                            @endforeach
                        </h2>
                    </div>
                    <a href="{{ url("/kashmir") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">View All Tour<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div> 
    <div class=" container swiper mySwiper2 p-2 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages2 as $p)
            
       
        <div class="swiper-slide swiper22 wow fadeInUp wow" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img loading="lazy" src="package_images/{{$p->image}}"  onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="{{$p->name}}"
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
              <h5 class="fw-bolder text-start pb-2 pt-2" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
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
        @endforeach

      </div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>
  </div>











    
    <!-- Navigation -->
    

    <div class="car-shape float-bob-x">
        <img loading="lazy" src="{{ asset("mymountains/assets/img/destination/car.png") }}" alt="Car Shape">
    </div>
        <!-- Deals-offer Section Start -->
        <section class="deals-offer-section section-padding fix bg-cover" style="background-image: url(mymountains/assets/img/offer/bg.jpg);">
           
            <div class="deals-offer-wrapper">
                
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="price-items">
                            <div class="price-image wow fadeInUp wow" data-wow-delay=".2s">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/offer/price.png") }}" alt="Price Image" width="200">
                            </div>
                            <div class="coming-soon-timer">
                                <div class="timer-content wow fadeInUp" data-wow-delay=".2s">
                                    <h2 id="day">00</h2>
                                    <p>Days</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".4s">
                                    <h2 id="hour">00</h2>
                                    <p>Hours</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".6s">
                                    <h2 id="min">00</h2>
                                    <p>Minutes</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".8s">
                                    <h2 id="sec">00</h2>
                                    <p>Secound</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title-area">
                            <div class="section-title">
                                <span class="sub-title text-white wow fadeInUp">
                                    Deals & Offers
                                </span>
                                <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s">
                                    Incredible Last-Minute Offers
                                </h2>
                            </div>
                            <div class="array-button justify-content-center wow fadeInUp wow" data-wow-delay=".5s">
                                <button class="array-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></button>
                                <button class="array-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="offer-slide-items">
                            <div class="swiper offer-slider">
                                <div class="swiper-wrapper">
                                     @foreach ($offer as $o)
                                    <div class="swiper-slide">
                                        <div class="offer-items">
                                            <div class="offer-image">
                                                <img loading="lazy" style="height: 30vh; object-fit: cover;" src="{{ asset('/offer_images/'.$o->image) }}" alt="Offer Image">
                                                <div class="offer-content">
                                                    <ul class="offer-btn">
                                                        <li class="bg-color">Featured</li>
                                                    </ul>
                                                    <div class="content">
                                                        <h3>
                                                            <a href="{{ url("/kashmir") }}">
                                                                {{$o->heading}}
                                                            </a>
                                                        </h3>
                                                        <span>
                                                            {{$o->description}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section section-padding fix bg-cover">
            <div class="bag-shape float-bob-x">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/testimonial/bag-shape.png") }}" alt="Bag Shape">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                        Testimonial
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                        Our Clients Feedback
                    </h2>
                </div>
                <div class="testimonial-wrapper">
                    <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card-items">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                    My tour Of kashmir was handled very professionally, hotels and transport service was very good.
                                     Special thanks to Ms Asima Bhatt who took care of everything..
                                     My mountains is a good choice for Kashmir Packages..
                                    </p>
                                    <div class="client-info-items">
                                        <div class="client-info">
                                            <div class="client-image">
                                                <img loading="lazy" style="width:65%" src="https://lh3.googleusercontent.com/a/ACg8ocLWhtWWBxg4DUdMjF9G378SWLk-p_BkhtPy9tRHJJwOQFJcIw=w90-h90-p-rp-mo-br100" alt="google review image">
                                            </div>
                                            <div class="text">
                                                <h4>
Sameer Arora</h4>
                                                <p>Traveller</p>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                <path d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z" fill="#FFA31A"/>
                                                <path d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z" fill="#FFA31A"/>
                                              </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-items style-2">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        Had a great experience with my mountains tour and travel ..
                                         Ms. Maviyah gave us an amazing services .. thank you very much 🙂

                                    </p>
                                    <div class="client-info-items">
                                        <div class="client-info">
                                            <div class="client-image">
                                                <img loading="lazy" style="width:65%" src="https://lh3.googleusercontent.com/a-/ALV-UjX93QdqES6S5HVve4tyeunyQwGbeCiBxUqM2hpC-6T743SIRH8=w90-h90-p-rp-mo-br100" alt="google review image">
                                            </div>
                                            <div class="text">
                                                <h4>Darshu Gupta</h4>
                                                <p>Traveller</p>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                <path d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z" fill="#63AB45"/>
                                                <path d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z" fill="#63AB45"/>
                                              </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-items">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        Kashmir Tour means my mountains by Aliya.l am mesmerized with their arrangement, 
                                        execution plan. I am really glad to have them as my travel partner in Kashmir. 
                                        Thanks a lot to my TA Aliya. She did a wonderful job as my tour...
                                     </p>
                                    <div class="client-info-items">
                                        <div class="client-info">
                                            <div class="client-image">
                                                <img loading="lazy" style="width:65%" src="https://lh3.googleusercontent.com/a/ACg8ocLWhtWWBxg4DUdMjF9G378SWLk-p_BkhtPy9tRHJJwOQFJcIw=w90-h90-p-rp-mo-br100" alt="google review image">
                                            </div>
                                            <div class="text">
                                                <h4>Saira Mohanty</h4>
                                                <p>Traveller</p>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                <path d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z" fill="#FFA31A"/>
                                                <path d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z" fill="#FFA31A"/>
                                              </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="array-button">
                            <button class="array-prevs">Previews</button>
                            <button class="array-nexts">Next</button>
                        </div>
                    </div>
                    <!-- Elfsight Google Reviews | Untitled Google Reviews -->
               </div>
            </div>
        </section>

        <!-- Travel-Feature-Section Start -->
        <section class="travel-feature-section  fix" style="background-image: url('assets/img/travel-bg.jpg');">
            <div class="shape-1 float-bob-y">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/plane-shape1.png") }}" alt="shape 1">
            </div>
            <div class="shape-2 float-bob-x">
                <img loading="lazy" src="{{ asset("mymountains/assets/img/plane-shape2.png") }}" alt="shape 2">
            </div>
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="feature-content mt-2">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">
                                        Are you ready to travel?
                                    </span>
                                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                     Leading Online Tour Booking Platform
                                    </h2>
                                </div>
                                <p class="wow fadeInUp wow text-dark" data-wow-delay=".3s">
                                    Discover Kashmir like never before with our trusted online tour booking platform. We specialize in curating unforgettable journeys through the breathtaking valleys, snow-capped peaks, and serene lakes of Kashmir.
                                </p>
                               <div class="feature-area">
                                    <div class="line-shape">
                                        <img loading="lazy" src="{{ asset("mymountains/assets/img/line-shape.png") }}" alt="line shape">
                                    </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/08.svg") }}" alt="icon 08">
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
                                            <span class="text-dark">
                                               Get ready for the journey of a lifetime!<br>
                                               This isn’t just another trip—it’s the most adventurous tour ever.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img loading="lazy" src="{{ asset("mymountains/assets/img/icon/09.svg") }}" alt="icon 09">
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
                                            <span class="text-dark">
                                                Your real adventure begins the moment you step in.<br>
                                                No more ordinary trips—this is where true exploration starts. 
                                               
                                            </span>
                                       </li>
                                    </ul>
                                </div>
                               </div>
                               <a href="{{ url("contact.html") }}" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">Contact US<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-image wow img-custom-anim-left">
                                <img loading="lazy" src="{{ asset("mymountains/assets/img/man-image.png") }}" alt="man image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
        

        <!-- Cta-bg-Section Start -->
       
         <section class="faq-section pt-2 pb-5 fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                        What people ask
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                        Kashmir Tour FAQs
                    </h2>
                </div>
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="faq-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion2"> 
                                        @foreach ($faq as $f)   


                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".1s"  id="faq{{$f->id}}">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" style="font-size: 1rem;" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{$f->id}}" aria-expanded="true" aria-controls="faq{{$f->id}}"> 
                                                 {{$f->title}}
                                                </button>   
                                            </h5>
                                            <div id="faq{{$f->id}}" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{$f->description}}
                                                </div>
                                            </div>
                                        </div>

                                          @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="faq-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion3">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".1s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                                    How to Install WordPress theme on cPanel?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                    Do you have Custom Hosting Service?
                                                </button>
                                            </h5>
                                            <div id="faq6" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                                    Better Security And Faster Server?
                                                </button>
                                            </h5>
                                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                                    Deployment Within Few Minutes
                                                </button>
                                            </h5>
                                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- News-Section Start -->
        {{-- gallery v0 --}}




<div class="container mt-4">
  
   <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                       Gallery
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                       Traveller image gallery
                    </h2>
                </div>
  <!-- Gallery Section -->
  <div class="row gallery-container">
      <!-- Main Featured Image -->
      <div class="col-md-8 mb-4">
          <div class="featured-image position-relative gallery-item" data-index="0">
              @if(count($images) > 0)
                  <img loading="lazy" src="{{ asset("gallery_images/".$images[0]['image']) }}"  class="img-fluid rounded main-image" alt="{{ $images[0]['title'] ?? 'Kashmir Tour' }}">
              @else
                  <img loading="lazy" src="{{ asset("gallery_images/".$images[0]['image']) }}" alt="Kashmir Tour" class="img-fluid rounded main-image" alt="Tour Image">
              @endif
              <button class="btn btn-light btn-sm position-absolute bottom-0 start-0 m-3" id="viewAllBtn">
                  <i class="fas fa-images"></i> View All ({{ count($images) }})
              </button>
          </div>
      </div>
      
      <!-- Thumbnail Grid -->
      <div class="col-md-4 mb-4">
          <div class="row g-2">
              @for($i = 1; $i <= 4; $i++)
                  <div class="col-6">
                      <div class="thumbnail gallery-item" data-index="{{ $i }}">
                          @if(isset($images[$i]))
                              <img loading="lazy" src="{{ asset("gallery_images/".$images[$i]['image']) }}" 
                                   alt="{{ $images[$i]['title'] ?? 'Tour Image '.$i }}" 
                                   class="img-fluid rounded">
                          @else
                              <img loading="lazy" src="{{ asset('images/placeholder.jpg') }}" alt="Tour Image" class="img-fluid rounded">
                          @endif
                      </div>
                  </div>
              @endfor
          </div>
      </div>
  </div>
  
  <!-- Review Section -->



     <div class="container row mx-auto deals ">
 
     <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                       Attractions
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                       Popular Kashmir Attractions
                    </h2>
                </div>
    <div class="d-flex flex-row flex-wrap justify-content-between ">
      <div class="col-md-5  my-3 ">
        <div class="card border-0 rounded-3" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone74.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.2 );
                  backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              DAL&nbsp;LAKE</h4>
            <p class="card-text fw-bold">Known to be “The Jewel of Srinagar”, Dal Lake spreads across an area of around
              26 square kilometers and is one of the major attractions included in our Kashmir tour packages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5  my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone75.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end border-0 rounded-3" style="background: rgba( 0, 0, 0, 0.2 );
                  backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              SHANKARACHARYA&nbsp;TEMPLE</h4>
            <p class="card-text fw-bold">The Shankaracharya Temple, located on the Shankaracharya Hill in Srinagar, is a
              prominent religious site to visit with our Kashmir tour packages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone10.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );       
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              GULMARG&nbsp;GONDOLA</h4>
            <p class="card-text fw-bold">Gulmarg Gondola is the second highest and second longest cable car ride in the
              world.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone21.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.2 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              TULIP&nbsp;GARDEN</h4>
            <p class="card-text fw-bold">Opened for public in the year 2007, the Indira Gandhi Memorial Tulip Garden was
              built with the aim of improving floriculture as well as tourism in Kashmir.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone76.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );;">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              APHARWAT&nbsp;PEAK</h4>
            <p class="card-text fw-bold">Located at a height of 4,200 m above sea level, Apharwat Peak is one of the
              most significant places in Gulmarg that attributes to the beauty of this attraction.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone77.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#46bfaf;">
              MUGHAL&nbsp;GARDEN</h4>
            <p class="card-text fw-bold">Forming the largest garden of the 3 breathtaking Mughal Gardens, the amazingly
              laid out Shalimar Bagh makes for one of the most sublime places to see in Srinagar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="deals">
    <div class="container row mx-auto  ">
     
      <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                       Destinations
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                      Popular Related Destinations
                    </h2>
                </div>
      <div class="col-md-3 ">
        <div class="card  border-0 rounded-3 my-3" data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone78.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Jammu and Kashmir</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="card  border-0 rounded-3 my-3" data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone79.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Srinagar</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="card  border-0 rounded-3 my-3" data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone80.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Ladakh</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="card border-0 rounded-3 my-3 " data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone81.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Pahalgam</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="card border-0 rounded-3 my-3 " data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone82.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Gulmarg</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="card  border-0 rounded-3 my-3" data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img loading="lazy" class="card-img-top rounded-3 lazy" src="landing/clone83.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Jammu</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!-- Modal for Gallery -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscreen-md-down">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Kashmir Tour Gallery</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row g-3" id="modalGallery">
                  @foreach($images as $index => $image)
                      <div class="col-6 col-md-4 col-lg-3">
                          <div class="gallery-item" data-index="{{ $index }}">
                              <img loading="lazy" src="{{ asset("gallery_images/".$image['image']) }}" 
                                   alt="{{ $image['title'] ?? 'Gallery Image '.$index }}" 
                                   class="img-fluid">
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Modal for Single Image View -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content bg-dark">
          <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-0">
              <img loading="lazy" src="/placeholder.svg" id="modalImage" class="img-fluid" alt="Full size image">
          </div>
          <div class="modal-footer border-0 justify-content-center">
              <button type="button" class="btn btn-outline-light me-2" id="prevImageBtn">
                  <i class="fas fa-chevron-left"></i> Previous
              </button>
              <button type="button" class="btn btn-outline-light" id="nextImageBtn">
                  Next <i class="fas fa-chevron-right"></i>
              </button>
          </div>
      </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap components
    const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));
    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
    
    // DOM elements
    const modalImage = document.getElementById('modalImage');
    const prevImageBtn = document.getElementById('prevImageBtn');
    const nextImageBtn = document.getElementById('nextImageBtn');
    const readMoreBtn = document.getElementById('readMoreBtn');
    const reviewText = document.getElementById('reviewText');
    
    // Gallery state
    let currentImageIndex = 0;
    let galleryImages = [];
    
    // Get image data from PHP
    function initializeGalleryData() {
        // This will be populated with data from the Blade template
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        // Create an array to store image data
        galleryImages = Array.from(galleryItems).map(item => {
            const index = parseInt(item.getAttribute('data-index'));
            const img = item.querySelector('img');
            return {
                index: index,
                url: img.src,
                title: img.alt
            };
        });
        
        // Sort by index to ensure correct order
        galleryImages.sort((a, b) => a.index - b.index);
    }
    
    // Open image modal with specific image
    function openImageModal(index) {
        if (index >= 0 && index < galleryImages.length) {
            currentImageIndex = index;
            modalImage.src = galleryImages[index].url;
            modalImage.alt = galleryImages[index].title;
            
            // If gallery modal is open, close it
            if (document.querySelector('#galleryModal.show')) {
                galleryModal.hide();
                setTimeout(() => {
                    imageModal.show();
                }, 500);
            } else {
                imageModal.show();
            }
        }
    }
    
    // Navigate to previous image
    function showPreviousImage() {
        currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
        modalImage.src = galleryImages[currentImageIndex].url;
        modalImage.alt = galleryImages[currentImageIndex].title;
    }
    
    // Navigate to next image
    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
        modalImage.src = galleryImages[currentImageIndex].url;
        modalImage.alt = galleryImages[currentImageIndex].title;
    }
    
    // Event listener for "View All" button
    document.getElementById('viewAllBtn').addEventListener('click', function(e) {
        e.preventDefault();
        galleryModal.show();
    });
    
    // Event listener for the "More" overlay in review section
    const moreOverlay = document.querySelector('.more-overlay');
    if (moreOverlay) {
        moreOverlay.addEventListener('click', function() {
            galleryModal.show();
        });
    }
    
    // Make all gallery items clickable
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const index = parseInt(this.getAttribute('data-index'));
            
            // If it has the more-overlay, open the gallery modal
            if (this.querySelector('.more-overlay')) {
                galleryModal.show();
            } else {
                // Otherwise open the image modal
                openImageModal(index);
            }
        });
    });
    
    // Make modal gallery items clickable
    document.querySelectorAll('#modalGallery .gallery-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const index = parseInt(this.getAttribute('data-index'));
            openImageModal(index);
        });
    });
    
    // Navigation button event listeners
    prevImageBtn.addEventListener('click', showPreviousImage);
    nextImageBtn.addEventListener('click', showNextImage);
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.querySelector('#imageModal.show')) {
            if (e.key === 'ArrowLeft') {
                showPreviousImage();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'Escape') {
                imageModal.hide();
            }
        }
    });
    
    // Read more button functionality
    if (readMoreBtn && reviewText) {
        // Set initial state
        const fullText = reviewText.textContent;
        const shortText = fullText.substring(0, 200) + '...';
        let isExpanded = false;
        
        // Initial state - collapsed
        reviewText.textContent = shortText;
        
        readMoreBtn.addEventListener('click', function() {
            if (isExpanded) {
                reviewText.textContent = shortText;
                readMoreBtn.textContent = 'Read More';
            } else {
                reviewText.textContent = fullText;
                readMoreBtn.textContent = 'Read Less';
            }
            isExpanded = !isExpanded;
        });
    }
    
    // Initialize gallery data
    initializeGalleryData();
});
</script>
{{-- gallery end --}}
        
        
        <!-- Footer Section Start -->
       @include("footer")
        
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




        <script>
               var swiper2 = new Swiper("#swiper1", {
      slidesPerView: 3,
      type: 'loop',
      autoplay: true,
      spaceBetween: 30,
      pagination: {
        clickable: true,
      },
      breakpoints: {
        // when window width is <= 499px
        300: {

          slidesPerView: 1,
          // centeredSlides: true,
          spaceBetweenSlides: 10
        },
        600: {
          slidesPerView: 2,
          spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        999: {
          slidesPerView: 3,
          spaceBetweenSlides: 40
        }
      }
    });
        </script>

        <script>
            
   function set_head(title){
    $("#mdh").html(`<h6 class="text-dark m-2" style="font-weight:bold;">${title}</h6>`);
    $("#packagename").val(title)
  }
   function clear_head(){
    $("#mdh").html("");
    $("#packagename").val("")
   }
        </script>

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


        {{-- search script --}}
        <script>

         // public/js/scripts.js
$(document).ready(function() {
    // Set up CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#search-input').on('input', function() {
        var query = $(this).val();

        if (query.length < 3) {
            $('#search-results').empty();
            return;
        }

        $('#search-results').html(`
           <li class="dropdown-item text-center" >
            <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>
            </li>
           
          
        `);

        $.ajax({
            url: '/searchfl',
            method: 'POST',
            data: { slug: query },
            success: function(data) {
                var resultsHtml = data.map(function(item) {
                    return `
                        <div class="result-item result-item card mt-1 mb-1 px-2">
                            <li onclick="$('#search-input').val('${item.name}')" class="dropdown-item" style="cursor:pointer;">${item.name}</li>
                            
                        </div>
                    `;
                }).join('');
                
                $('#search-results').html(resultsHtml);
            },
            error: function(xhr) {
                console.error('Error fetching data:', xhr);
            }
        });
    });
});

   
    </script>
    {{-- 
    
    tform22 --}}


    <script>
        
$("#tform21").submit(function(e){


 e.preventDefault();
  $.ajax({
                        url: '/sendmail2',
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
       
       $("#tform21 button").prop('disabled', true);
              
                            },
                        success:function(response)
                        {
                          swal({
  title: "Thank you!",
  text: "Our destination expert will reach out to you shortly!!",
  icon: "success",
});
                          
                       $('#tform21').trigger("reset");
                       $("#tform21 button").prop('disabled', false);
              
                 
                        },
                        error: function(response) {
                          swal({
  title: "Thank you!",
  text: "Our destination expert will reach out to you shortly!!",
  icon: "success",
});
                        $("#tform21 button").prop('disabled', false);
              
                       $('#tform21').trigger("reset");
                        }
                    });

});




$("#tform22").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail2',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
      
      $("#tform22 button").prop('disabled', true);
             
                           },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform22').trigger("reset");
                      $("#tform22 button").prop('disabled', false);
             
                
                       },
                       error: function(response) {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                       $("#tform22 button").prop('disabled', false);
             
                      $('#tform22').trigger("reset");
                       }
                   });

});
    </script>




<script>
    var heroSwiper = new Swiper(".hero-slider", {
        loop: true, // Enable looping
        autoplay: {
            delay: 2000, // Time between slides (in ms)
            disableOnInteraction: false, // Keep autoplay after user interaction

        },
        speed: 1000, // Slide transition speed
        effect: "fade", // Optional (fade effect)
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    const heroEl = document.querySelector(".hero-slider");

heroEl.addEventListener("mouseenter", () => {
    heroSwiper.autoplay.stop();
});
heroEl.addEventListener("mouseleave", () => {
    heroSwiper.autoplay.start();
});

heroEl.addEventListener("focusin", () => {
    heroSwiper.autoplay.stop();
});
heroEl.addEventListener("focusout", () => {
    heroSwiper.autoplay.start();
});
</script>
    </body>

<!-- Mirrored from ex-coders.com/html/turmet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Apr 2025 11:50:32 GMT -->
</html>