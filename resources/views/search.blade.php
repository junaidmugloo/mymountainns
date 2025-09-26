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
        <style>
            .sp22 {
   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   border-radius: 16px;
}
        </style>
        
 
</head>
<body>
@include('nav')
<hr>
<section class="popular-destination-section pt-4 pb-4">
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
                <a href="/details/{{ $p->id }}" class="text-capitalize btn  text-white px-5 py-2 border rounded"
                  style="background-color: #46bfaf;" >
                  Book Now</a>
                 
              </div>
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
