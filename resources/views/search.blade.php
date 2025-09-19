<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kashmir Packages</title>
  <!-- Bootstrap CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        
 
</head>
<body>
@include('nav')
<section class="popular-destination-section pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
               @foreach ($packages as $p)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="destination-card-items mt-0">
                        <div class="destination-image">
                            <img src="package_images/{{ $p->image }}" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                       <div class="destination-content">
                        <h3 class="text-start text-light rounded-pill"
                            style="background:linear-gradient(93deg,#26e2ff,#048fec);font-size:9px;cursor:text;font-weight:900; width:fit-content;padding:0 10px; height:18px;line-height:18px;">
                            {{$p->tag_line}}</h3>
                        <ul class="meta">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                {{-- <span class="fw-bold">{{ $p->D1}}</span>
                                <b>|</b>
                                <span class="fw-bold">{{ $p->D2}}</span>
                                <b>|</b>
                                <span class="fw-bold">{{ $p->D3}}</span> --}}
                            </li>
                            <li class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>4.7</p>
                            </li>
                        </ul>
                        <h5>
                            <a href="{{ url('/details/'.$p->id) }}">
                                {{$p->name}}
                            </a>
                        </h5>
                        <ul class="info">
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                {{$p->day}} days & {{$p->night}} nights
                            </li>
                            <li>
                                <i class="fa-thin fa-users"></i>
                                50+
                            </li>
                        </ul>
                        <div class="price">
                            <h6>₹{{$p->discount}}<span>/Per person</span></h6>
                            <a href="tel:+91-70518 93547" class="theme-btn style-2">
                                Call Now<i class="fa-sharp fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
               
            </div>
          
        </div>
       </section>

@include('footer')
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</body>
</html>
