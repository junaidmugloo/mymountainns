<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joy Tour and Travels</title>
  <link rel="icon" type="image/x-icon" href="{{asset('/favicon/favicon.ico')}}">
  <meta name="keywords" content="Kashmir Tour Packages,Joy Tour & Travels">
  <meta name="author" content="Joy Tour & Travels">
  <meta name="description" content="Kashmir Tour Packages - Book Kashmir Packages at Best Price with joy tour & travels. Get Best Offers on Kashmir Holiday Packages with Airfare, Hotel and Sightseeing.">
  <meta name="google-site-verification" content="M78KtXPwNrhbLcZxkAiljAAuGGow6Sq7u9xt5eIuDug" />
 <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- BOXICON -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="//code.tidio.co/eye9m7vzljzjpbpghjztcb5n5gijce8m.js" async></script>
  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    
AnimationName animation {
    background-position-x: -66.285%;
    background-position-y: 0px;
}
#pm24::before {
    content: attr(data-before) !important;
}
.card_box spann::before {
    content: 'Premium';
    position: absolute;
    width: 150%;
    height: 40px;
    background: linear-gradient(45deg, #ff6547 0%, #ffb144 51%, #ff7053 100%);
    /* background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0 40%, #e5e5e5 48%); */
    background-position: 100% 0;
    background-size: 200% 100%;
    transform: rotate(-45deg) translateY(-20px);
    display: flex
;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.23);
    animation: AnimationName 2s infinite;
}
    #sss{
  background:rgb(0 0 0 / 56%);
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
  </style>
<!-- TrafficGuard Integration -->
<script>
  var dataTrafficGuard = dataTrafficGuard || [];
  dataTrafficGuard.push(['property', 'tg-015667-001']);
  dataTrafficGuard.push(['event','pageview']);
  (function() {var tg = document.createElement('script'); tg.type = 'text/javascript'; tg.async = true; tg.src = '//tgtag.io/tg.js?pid=tg-015667-001';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(tg, s);})();
</script>
<noscript>
  <img src="//p.tgtag.io/event?property_id=tg-015667-001&event_name=pageview&no_script=1" width="1" height="1" border="0"/></noscript>
<!-- TrafficGuard End-->
  <!-- SPLIDER CSS -->
  <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
  <!-- AOS ANIMATE -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script defer async src='https://cdn.trustindex.io/loader-cert.js?eed023d320640557fc762481dfd'></script>

<script>
  
  </script>
  <link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
</head>


<body>
  
{{-- 
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> --}}

@include('nav')
  <div class="splide" role="group" aria-label="Splide Basic HTML Example">
    <div class="splide__track ">
     
      <!-- fixed; width: 100%;"> -->
      
    
     @php
               $cont=0;
            @endphp
   
      <ul class="splide__list">
        @foreach ($banner as $b)
            @php
               $cont+=1;
            @endphp
       
        <li class="splide__slide">
          <div
            class="ami text-center text-white d-flex w-100 mx-auto justify-content-around  position-absolute  flex-row flex-wrap py-3 row"
            style="z-index: 2; margin-top: 250px;">
            <p class="fs-2 fw-semibold"><span class="text-warning" style="color:{{$b->offer_line_color}}!important;">{{$b->offer_line}}</span></p>
            <p class="fs-1 fw-bolder" style="color:{{$b->heading_color}}!important;">{{$b->heading}}</p>
            <p class="fs-5"  style="color:{{$b->offer_line_color}}!important;" >
              starting at <span class="fs-4 fw-bold"> INR {{$b->discount}} </span><s> INR {{$b->price}} </s>&nbsp;&nbsp;<button
                class="border-0 px-3 py-1 rounded-pill fw-bold text-white"
                style="background:linear-gradient(93deg,#ff7b26,#ec048c); font-size: 14px; cursor: text;">{{$b->tag_line}}</button>
            </p>
            
            <form id="tform2{{$cont}}"  class="w-75  pb-3 mt-2 " style="
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
           
            ">
           
            @csrf
              <div class="row m-3 text-start text-light" style="font-weight: 600" >
                <div class="col form-group" >
                   <label for="" class="text-start">Enter Name</label>
                   <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                </div>
                <div class="col form-group" >
                  <label for="" class="text-start">Contact Number</label>
                  <input type="tel" name="contact" class="form-control" required placeholder="Enter Contact">
               </div>
               <div class="col form-group" >
                <label for=""  class="text-start">Travel Date</label>
                <input type="date"  id="myDate{{$b->id}}" onfocus="chng('{{$b->id}}')"  name="date" class="form-control"  placeholder="Enter Travel Date">
             </div>
             <div class="col form-group" >
              <label for="" class="text-start"></label>
              <button type="submit" class="form-control btn" style="background:#ff7b26;">Submit</button>
           </div>
      
              </div>
        </form>


          </div>
          <img src="top_banner_images/{{$b->image}}" class="d-block w-100 lazy " style=" inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit:cover ;
          " alt="Camera" />
        </li>
        @endforeach
        


</ul>
      <div id="amir" style="z-index: 2;"
        class="p-2 text-center text-white d-flex w-100 mx-auto justify-content-around  position-absolute  flex-row flex-wrap py-3 row">
        <h5 class="text-start" style="font-size: 14px;font-weight:600;">Get up to 50% OFF on</h5>
        <h3 class="text-start" style="font-size: 25px; color:#ffba0a;">KASHMIR Tour Packages!</h3>
        <hr>
        <span class="d-flex">
          <small style="font: 11px">Starting at &nbsp;</small>
          <p style="font: 16px; font-weight:bolder;">INR 12,999 &nbsp;</p>
          <del style="font: 14px">INR 25000</del>
        </span>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn  text-light d-block w-100" style="height: 50px; background:#F37002;">Request
          Callback</button>
      </div>
      <div id="tpp" style="position: absolute; top 90vh;">
        <h1></h1>
      </div>
      <div class="card p-4 d-flex"
        style="position:absolute;top:100vh;bottom:0; width:100%; background: #141414; border: none;border-radius: 0px; justify-content: space-evenly; align-items: center;">

        <div class="card-body text-center" id="trip">
          <div class="row">
            <div class="col-6 col-md-3 p-3">
              <span class="d-flex" style="width: 150px;">
                <span> <i class="fa-solid fa-star sx"  onclick="window.location.href='https://www.trustindex.io/reviews/joytourandtravel.com'" style="color: white;cursor: pointer"></i></span>
                <span class="text-white">
                  <h6 class="p-0 pt-1 m-0 text-start text-white"> &nbsp;4.6/5</h6>
                  <small class="text-start text-white " style="font-size: 0.6rem"> &nbsp;TRUST INDEX</small>
                </span>
              </span>
           </div>
            <div class="col-6 col-md-3 p-3">
              <span class="d-flex" style="width: 150px;">
                <span> <i class="fa-brands fa-google sx" onclick="window.location.href='https://g.co/kgs/CtZ9XWP'" style="color: white; cursor: pointer;"></i></span>
                <span class="text-white">
                  <h6 class="p-0 pt-1 m-0 text-start text-white"> &nbsp;4.6/5</h6>
                  <small class="text-start text-white " style="font-size: 0.6rem"> &nbsp;GOOGLE REVIEW</small>
                </span>
              </span>

            </div>
            <div class="col-6 col-md-3 p-3">
              <span class="d-flex" style="width: 150px;">
                <span> <i class="fa-solid fa-star sx" onclick="window.location.href='https://justdial.com/Srinagar/Joy-Tour-and-Travels-Opposite-Fire-Station/9999PX194-X194-130205124520-S1G8_BZDET'" style="color: white;cursor:pointer"></i></span>
                <span class="text-white">
                  <h6 class="p-0 pt-1 m-0 text-start text-white"> &nbsp;4.6/5</h6>
                  <small class="text-start text-white " style="font-size: 0.6rem"> &nbsp;JUST DIAL</small>
                </span>
              </span>
            </div>
            <div class="col-6 col-md-3 p-3 ">
              <span class="d-flex" style="width: 150px;">
                <span><i class="fa-regular fa-star sx" style="color: #ffffff;"></i></span>
                <span class="text-white">
                  <h6 class="p-0 pt-1 m-0 text-start text-white"> &nbsp;4.6/5</h6>
                  <small class="text-start text-white " style="font-size: 0.6rem"> &nbsp;TRIP ADVISOR</small>
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- model 5 -->

<div class="modal" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"  ">
             
        
        <div class="HeaderSaleLine_saleIcon__pwEFh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg></div>
        <p id="mdh" class="m-0 p-0"></p>
          <button type="button" class="btn-close" onclick="clear_head()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="color: var(--primary-color, #f37002) !important; font-size:1rem;">Login</button>
    </li>
    <li class="nav-item" role="presentation">
      <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="color: var(--primary-color, #f37002) !important; font-size:1rem;">Signup</button>
    </li>
   
  </ul>

  <!-- Tabs content -->
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <form novalidate action="" id="user_login" style=" justify-content: center;
            display: flex !important;">
            @csrf
            <div class="row w-100 h-100">
            <h5 class="mt-2 mb-2 pt-3 pb-3" style="font-weight:600;">Log into Your Account</h5>
             
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                  <small id="email-err1" class="text-danger"></small>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="password" name="password" required class="form-control" placeholder="Your Password">
                  <small id="password-err1" class="text-danger"></small>
                </div>
              </div>
              
              
                    <b style="color: var(--primary-color, #f37002) !important; text-align:end;" class="pb-2">Forgot Password?</b>
            
              <div class="col-12">
                <div class="form-group mb-3">
                  <button id="loginnn" type="submit"  style="background:#e34506;" class="btn text-light d-block w-100">
                    Login & Continue</button>
                </div>
              </div>
            </div>
          </form>
          <div class="text-center" id="responseMessage1"></div>
          <hr>
          {{-- <b style="visibility:hidden;">Book With Confidence</b> --}}
          {{-- <a  class="btn btn-primary">Login with Google</a> --}}
         <div class="d-flex" style="justify-content:center">
          <a href="{{ url('auth/google') }}" style="text-decoration: none;" class="login-with-google-btn mb-2" >
            Sign in with Google
          </a>
        </div>
    </div>
   
   
   
   
   
   
   
   
   
   
   
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <form  novalidate id="user_signup" style=" justify-content: center;
            display: flex !important;">
            @csrf
            <div class="row w-100 h-100">
            <h5 class="mt-2 mb-2 pt-3 pb-3" style="font-weight:600;">Create Your Account</h5>
            <div class="col-12">
                <div class="form-group mb-3">
                  <input type="text" name="name" required class="form-control" placeholder="Your Name">
                  <small id="name-err" class="text-danger"></small>
                </div>
               
            </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                  <small id="email-err" class="text-danger"></small>
                </div>
              </div>
              {{-- <div class="col-12">
                <div class="form-group mb-3">
                  <input type="number" name="number" required class="form-control" placeholder="Your Contact">
                </div>
              </div> --}}
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="password" name="password" required class="form-control" placeholder="Your Password">
                  <small id="password-err" class="text-danger"></small>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="password" name="confirm_password" required class="form-control" placeholder="Confirm Password">
                  <small id="password2-err" class="text-danger"></small>
                </div>
              </div>
              
            

            
              <div class="col-12">
                <div class="form-group mb-3">
                  <button id="loginn"  type="submit" style="background:#e34506;" class="btn text-light d-block w-100">
                    Signup</button>
                </div>
              </div>
            </div>
          </form>
          <div class="text-center" id="responseMessage"></div>
          <hr>
          
          <p class="text-muted text-center">By joining, you agree to the Terms and Privacy Policy.</p>
          
    </div>
    
  </div>
          
        </div>
      </div>
    </div>
</div>
<!-- model5 end -->

  <!-- Modal -->
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"   style="background:linear-gradient(93deg,#ff7b26,#ec048c);">
             
        
        <div class="HeaderSaleLine_saleIcon__pwEFh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg></div>
        <p id="mdh" class="m-0 p-0"></p>
          <button type="button" class="btn-close" onclick="clear_head()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="mx-3" style="font-weight:600;">Save up to <x style="color:#F37002;">50% OFF</x></h5>
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
                  <button  style="background:#e34506;" class="btn text-light d-block w-100">Connect with and
                    Experts</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="deals">
    <div class=" container  rounded  px-5  py-3 d-flex justify-content-between  flex-wrap"
      style="margin: 50px auto 20px auto;background-color: #F4F4F4;">
      <h4 class="fw-bold" style="color: #515151;">{{$tagline->description}}</h4>
      <button type="button" class=" text-capitalize btnn btn btn-white bg-white  border-0 rounded"
      style="color: #F37205;border-color: #F37205;" data-bs-toggle="modal"
      data-bs-target="#exampleModal">Grab&nbsp;a&nbsp;Now</button>

     
    </div>
  </div>
  <div class="container rounded  text-start  py-4 d-flex flex-column flex-grow" style="color: #FCAF17;font-size:25px;">
    <p class="fs-3 mx-2 p-0 mb-1">Staff <span class="fw-semibold" style="color: #FCAF17;font-weight:600">
        Handpicked</span></p>
    <small class=" text-muted mb-1 mx-2" style="font-size: 15px; ">Curated with expertise</small>
    <div class="container swiper mySwiper2 p-0 m-0" id="swiper1">
      <div class="swiper-wrapper ">
        
         @foreach ($premium as $p)
             
         
      
        <div class="swiper-slide swiper22"  id="swiperx" style="background-image: url(package_images/{{$p->image}}); background-size: cover;border-radius: 10px; background-repeat: no-repeat;cursor:pointer;">
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
              <h6 class="text-start">INR {{$p->discount}} : P.P&nbsp;<small>
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
            <img src="landing/clone26.avif" class="d-block  rounded-3 lazy" style="height: 80vh; visibility: hidden;" alt="Camera" />
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="container d-block mx-auto text-center mt-5">
    <h3 class="">People Love Our <span class="" style="color: #F37002;">Kashmir </span>Tours</h3>
  </div>
  <div class="row container mx-auto  d-flex flex-wrap p-2"  >
    <div class=" col-md-4 d-flex align-items-center justify-content-center flex-column border-end ">
      <img src="landing/star.png" class="lazy" alt="" style="width: 60%;"  >
      <h1 class="text-success fw-bold" >4.6</h1>
      <a class="fw-medium text-success fs-5" >16,716 Kashmir Reviews</a>
      <p class="text-muted" >by customers from
        <span class="text-dark  fw-semibold" >65+ countries</span>
      </p>
    </div>
    <div class="col-md-8"  >
      
      <script defer async src='https://cdn.trustindex.io/loader.js?8129a2333aa6198bdd56cea426f'></script>
      
    </div>
  </div>
  <div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-ride="carousel">
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

  <br>

  <div class="container  rounded  text-start  p-3 d-flex flex-column flex-grow" style="color: #515151;">
    @foreach ($packages as $p)
    <p id="gd" class="fs-4  fw-bold mx-0 p-0 mb-3" style="font-size:25px; font-weight:600">{{$p->category}}</p>
    <small id="ll" class="fs-5  mb-4 mx-0" style="font-size: 15px; ">Just For You</small>
    @break
    @endforeach
    <div class=" container swiper mySwiper2 p-0 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages as $p)
            
       
        <div class="swiper-slide swiper22">
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
              <h5 class="fw-bolder text-start" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
                    style="font-size: 14px;">INR
                    {{$p->price}}</s></small>&nbsp;&nbsp;&nbsp;<span>
                  <button class="px-2 py-1  border-0 rounded text-success"
                    style="font-size: 9px;background-color: #E7F3EA;color:#0BB22A">save INR {{$p->price-$p->discount}}</button></span></h5>
              <div class="d-flex justify-content-between" style="align-self: center">
                <a href="tel:{{$p->contact}}" class="btn" style="border-color: #F37002; padding-top: 8px;">
                  <i class="fa-solid fa-phone " role="button" style="color: #F37002"></i>
                </a>
                <a href="#" class="text-capitalize btn  text-white px-5 py-2 border rounded" role="button"
                  style="background-color: #F37002;" onclick="set_head('{{$p->name}}')"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request
                  Callback</a>
                 
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="divider"></div>
  <div class="container  rounded  text-start  p-3 d-flex flex-column flex-grow" style="color: #515151;">
    @foreach ($packages1 as $p)
    <p id="gd" class="fs-4  fw-bold mx-0 p-0 mb-3" style="font-size:25px; font-weight:600">{{$p->category}}</p>
    <small id="ll" class="fs-5  mb-4 mx-0" style="font-size: 15px; ">Just For You</small>
    @break
    @endforeach
    <div class=" container swiper mySwiper2 p-0 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages1 as $p)
            
       
        <div class="swiper-slide swiper22">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img src="package_images/{{$p->image}}" onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="Fissure in Sandstone"
              style="height: 40vh; cursor: pointer;" width="100px" />
            <div class="card-body  ">
              <small style="font-size: 14px;" class="d-flex justify-content-between fw-medium">{{$p->day}} days & {{$p->night}} nights <span
                  style="font-size: 12px;"><i class="rounded-pill px-2 py-2  fa-solid fa-star text-success">4.9 <span
                      class="text-muted">(261)</span></i></span>
              </small>
              <p class="card-title text-start text-dark" style="font-size: 15px;">{{$p->name}}</p>
              <p class="card-text p-0 mb-2 text-start rounded" style="font-size: 12px; background-color: #FFFBF0; ">
               
              <span class="fw-bold">
                @php
    $string = $p->destination;
    $parts = explode(',', $string);
    $firstPart = $parts[0];
    $secondPart = $parts[1];
    $len=0;
    foreach ($parts as $part) {
      $len+=1; // Add the length of each part to the total
    }
    
   
      @endphp
                {{ $p->D1}}</span>  <b>|</b>
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
              <h5 class="fw-bolder text-start" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
                    style="font-size: 14px;">INR
                    {{$p->price}}</s></small>&nbsp;&nbsp;&nbsp;<span>
                  <button class="px-2 py-1  border-0 rounded text-success"
                    style="font-size: 9px;background-color: #E7F3EA;color:#0BB22A">save INR {{$p->price-$p->discount}}</button></span></h5>
              <div class="d-flex justify-content-between" style="align-self: center">
                <a href="tel:{{$p->contact}}" class="btn" style="border-color: #F37002; padding-top: 8px;">
                  <i class="fa-solid fa-phone " role="button" style="color: #F37002"></i>
                </a>
                <a href="#" class="text-capitalize btn  text-white px-5 py-2 border rounded" role="button"
                  style="background-color: #F37002;" onclick="set_head('{{$p->name}}')"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request
                  Callback</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <div class="container  rounded  text-start  p-3 d-flex flex-column flex-grow" style="color: #515151;">
    @foreach ($honeymoon as $p)
    <p id="gd" class="fs-4  fw-bold mx-0 p-0 mb-3" style="font-size:25px; font-weight:600">{{$p->category}}</p>
    <small id="ll" class="fs-5  mb-4 mx-0" style="font-size: 15px; ">Just For You</small>
    @break
    @endforeach
    <div class=" container swiper mySwiper2 p-0 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($honeymoon as $p)
            
       
        <div class="swiper-slide swiper22">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img src="package_images/{{$p->image}}" onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="Fissure in Sandstone"
              style="height: 40vh; cursor: pointer;" width="100px" />
            <div class="card-body  ">
              <small style="font-size: 14px;" class="d-flex justify-content-between fw-medium">{{$p->day}} days & {{$p->night}} nights <span
                  style="font-size: 12px;"><i class="rounded-pill px-2 py-2  fa-solid fa-star text-success">4.9 <span
                      class="text-muted">(261)</span></i></span>
              </small>
              <p class="card-title text-start text-dark" style="font-size: 15px;">{{$p->name}}</p>
              <p class="card-text p-0 mb-2 text-start rounded" style="font-size: 12px; background-color: #FFFBF0; ">
                <span class="fw-bold">
                  @php
                  $string = $p->destination;
                  $parts = explode(',', $string);
                  $firstPart = $parts[0];
                  $secondPart = $parts[1];
                  $len=0;
                  foreach ($parts as $part) {
                    $len+=1; // Add the length of each part to the total
                  }
                  
                 
                    @endphp
                              {{ $p->D1}}</span>  <b>|</b>
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
              <h5 class="fw-bolder text-start" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
                    style="font-size: 14px;">INR
                    {{$p->price}}</s></small>&nbsp;&nbsp;&nbsp;<span>
                  <button class="px-2 py-1  border-0 rounded text-success"
                    style="font-size: 9px;background-color: #E7F3EA;color:#0BB22A">save INR {{$p->price-$p->discount}}</button></span></h5>
              <div class="d-flex justify-content-between" style="align-self: center">
                <a href="tel:{{$p->contact}}" class="btn" style="border-color: #F37002; padding-top: 8px;">
                  <i class="fa-solid fa-phone " role="button" style="color: #F37002"></i>
                </a>
                <a href="#" class="text-capitalize btn  text-white px-5 py-2 border rounded" role="button"
                  style="background-color: #F37002;" onclick="set_head('{{$p->name}}')"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request
                  Callback</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="divider"></div>

  <div class="container  rounded  text-start  p-3 d-flex flex-column flex-grow" style="color: #515151;">
    @foreach ($packages2 as $p)
    <p id="gd" class="fs-4  fw-bold mx-0 p-0 mb-3" style="font-size:25px; font-weight:600">{{$p->category}}</p>
    <small id="ll" class="fs-5  mb-4 mx-0" style="font-size: 15px; ">Just For You</small>
    @break
    @endforeach
    <div class=" container swiper mySwiper2 p-0 m-0" id="swiper1">
      <div class="swiper-wrapper">
        @foreach ($packages2 as $p)
            
       
        <div class="swiper-slide swiper22">
          <div class="card rounded-3  border-0 " data-aos="flip-right" data-aos-duration="4000">
            <img src="package_images/{{$p->image}}" onclick="window.location.href='/details/{{$p->id}}'" class="card-img-top rounded-3 lazy" alt="Fissure in Sandstone"
              style="height: 40vh; cursor: pointer;" width="100px" />
            <div class="card-body  ">
              <small style="font-size: 14px;" class="d-flex justify-content-between fw-medium">{{$p->day}} days & {{$p->night}} nights <span
                  style="font-size: 12px;"><i class="rounded-pill px-2 py-2  fa-solid fa-star text-success">4.9 <span
                      class="text-muted">(261)</span></i></span>
              </small>
              <p class="card-title text-start text-dark" style="font-size: 15px;">{{$p->name}}</p>
              <p class="card-text p-0 mb-2 text-start rounded" style="font-size: 12px; background-color: #FFFBF0; ">
                <span class="fw-bold">
                  @php
                  $string = $p->destination;
                  $parts = explode(',', $string);
                  $firstPart = $parts[0];
                  $secondPart = $parts[1];
                  $len=0;
                  foreach ($parts as $part) {
                    $len+=1; // Add the length of each part to the total
                  }
                  
                 
                    @endphp
                              {{ $p->D1}}</span>  <b>|</b>
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
              <h5 class="fw-bolder text-start" style="font-size: 18px;">INR {{$p->discount}} <small><s class=""
                    style="font-size: 14px;">INR
                    {{$p->price}}</s></small>&nbsp;&nbsp;&nbsp;<span>
                  <button class="px-2 py-1  border-0 rounded text-success"
                    style="font-size: 9px;background-color: #E7F3EA;color:#0BB22A">save INR {{$p->price-$p->discount}}</button></span></h5>
              <div class="d-flex justify-content-between" style="align-self: center">
                <a href="tel:{{$p->contact}}" class="btn" style="border-color: #F37002; padding-top: 8px;">
                  <i class="fa-solid fa-phone " role="button" style="color: #F37002"></i>
                </a>
                <a href="#" class="text-capitalize btn  text-white px-5 py-2 border rounded" role="button"
                  style="background-color: #F37002;" onclick="set_head('{{$p->name}}')"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request
                  Callback</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>




  <div class="divider"></div>

 




  <div class="divider"></div>


 <div class="container mt-5 text-center">
  <h3 class="">Joy <span class="" style="color: #F37002;">Tour Reviews</span></h3>
  <script defer async src='https://cdn.trustindex.io/loader.js?778fc13321f3053c7806146ab18'></script>

  </div>





  
  {{-- <div class=" deals container  rounded  text-start  px-3  py-4 " style="color: #515151;"> --}}
   
    {{-- <div class="row ">
      <div class="col-md-12">
       
        <div class="card rounded-3" data-aos="zoom-in" data-aos-duration="4000">
          <img src="landing/clone69.png" class="card-img-top w-100 rounded-3 " alt="Fissure in Sandstone" />
        </div>
      </div>
      <div class="col-md-5">
        <div class="d-flex justify-content-around my-1 ">
          <div class="card rounded-3 " data-aos="flip-left" data-aos-duration="4000">
            <img src="landing/clone70.avif" class="rounded-3" alt="" style="height: 150px;width: 150px;">
          </div>
          <div class="card rounded-3" data-aos="flip-left" data-aos-duration="4000">
            <img src="landing/clone71.avif" class="rounded-3" alt="" style="height: 150px;width: 150px; ">
          </div>
        </div>
        <div class="d-flex justify-content-around my-1">
          <div class="card rounded-3" data-aos="flip-left" data-aos-duration="4000">
            <img src="landing/clone72.avif" alt="" class="rounded-3" style="height: 150px; width: 150px;">
          </div>
          <div class="card rounded-3" data-aos="flip-left" data-aos-duration="4000">
            <img src="landing/clone73.avif" alt="" class="rounded-3" style="height: 150px; width: 150px;">
          </div>
        </div>
      </div> 
    </div> --}}
  {{-- </div> --}}


  
  <div class=" deals container  rounded  text-start  px-2  py-4 " style="color: #515151;">
    <p class="fs-4  fw-bold text-secondary" scope="col">Youtube Reviews</p>
    <div class="row ">

      {{-- <script defer async src='https://cdn.trustindex.io/loader.js?b0d6e7a3456840862d4613757ea'></script>
       --}}
       <script defer async src='https://cdn.trustindex.io/loader-feed.js?7e6c7cf447b676259146bbf8175'></script>
      </div>
    </div>
  </div>


{{-- gallery v0 --}}


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
</style>

<div class="container mt-4">
  <p class="fs-4  fw-bold text-secondary" scope="col">Traveller image gallery </p>
  
  <!-- Gallery Section -->
  <div class="row gallery-container">
      <!-- Main Featured Image -->
      <div class="col-md-8 mb-4">
          <div class="featured-image position-relative gallery-item" data-index="0">
              @if(count($images) > 0)
                  <img src="{{ asset("gallery_images/".$images[0]['image']) }}"  class="img-fluid rounded main-image">
              @else
                  <img src="{{ asset("gallery_images/".$images[0]['image']) }}" alt="Kashmir Tour" class="img-fluid rounded main-image">
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
                              <img src="{{ asset("gallery_images/".$images[$i]['image']) }}" 
                                   alt="{{ $images[$i]['title'] ?? 'Tour Image '.$i }}" 
                                   class="img-fluid rounded">
                          @else
                              <img src="{{ asset('images/placeholder.jpg') }}" alt="Tour Image" class="img-fluid rounded">
                          @endif
                      </div>
                  </div>
              @endfor
          </div>
      </div>
  </div>
  
  <!-- Review Section -->
  {{-- <div class="card mb-4">
      <div class="card-body">
          <div class="d-flex align-items-center mb-3">
              <img src="{{ asset("gallery_images/".$images[0]['image']) }}" alt="Reviewer" class="rounded-circle me-3 reviewer-img" width="50" height="50">
              <div>
                  <h5 class="mb-0">Shreya Bhowmick</h5>
                  <p class="text-muted mb-0">Reviewed: 27 Nov 2024</p>
              </div>
              <div class="ms-auto">
                  <span class="text-success">
                      <i class="fas fa-star"></i> 5.0/5
                  </span>
              </div>
          </div>
          
          <p class="mb-2"><strong>Booked:</strong> Highlights of Kashmir | FREE Shikara Ride on Dal Lake</p>
          
          <p id="reviewText">Kashmir – A Journey to Remember Made Perfect by the People Who Matter- This trip to Kashmir wasn't just a getaway; it was a deeply personal and unforgettable experience. Every moment felt like stepping into a dream, brought to life by the meticulous planning of my friend Subham Mukherjee and the co...</p>
          
          <button class="btn btn-link p-0" id="readMoreBtn">Read More</button>
          
          <!-- Bottom Thumbnails -->
          <div class="row g-2 mt-3">
              @for($i = 5; $i <= 9; $i++)
                  <div class="col-4 col-md-2">
                      <div class="gallery-item" data-index="{{ $i }}">
                          @if(isset($images[$i]))
                              <img src="{{ asset("gallery_images/".$images[$i]['image']) }}" 
                                   alt="{{ $images[$i]['title'] ?? 'Tour Photo '.($i-4) }}" 
                                   class="img-fluid rounded">
                          @else
                              <img src="{{ asset('images/placeholder.jpg') }}" alt="Tour Photo" class="img-fluid rounded">
                          @endif
                      </div>
                  </div>
              @endfor
              <div class="col-4 col-md-2 position-relative">
                  <div class="gallery-item" data-index="10">
                      @if(isset($images[10]))
                          <img src="{{ $images[10]['thumbnail'] ?? $images[10]['url'] }}" 
                               alt="{{ $images[10]['title'] ?? 'More Photos' }}" 
                               class="img-fluid rounded">
                      @else
                          <img src="{{ asset('images/placeholder.jpg') }}" alt="More Photos" class="img-fluid rounded">
                      @endif
                      <div class="more-overlay">
                          <span>({{ count($images) > 11 ? count($images) - 10 : '0' }}+)</span>
                          <span>View All</span>
                      </div>
                  </div>
              </div>
          </div>a
      </div>
  
 --}}


 <script defer async src='https://cdn.trustindex.io/loader.js?b0d6e7a3456840862d4613757ea'></script>
      

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
                              <img src="{{ asset("gallery_images/".$image['image']) }}" 
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
              <img src="/placeholder.svg" id="modalImage" class="img-fluid" alt="Full size image">
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





<div class="divider"></div>

 
  <div class="accordion  container ">
    <p class="fs-4  fw-bold mx-3 text-secondary">Kashmir Tour FAQs </p>
   
        
   
    <div class="accordion-item">
      @foreach ($faq as $f)
      <input type="checkbox" id="accordion1">
      <label for="accordion1" class="accordion-item-title"><span class="icon " style="color: #f37002;">
        
      </span>
      {{$f->title}}
        </label>
      <div class="accordion-item-desc">  <strong class="text-muted fw-bol">
        {{$f->description}}
      </strong>
       
      </div>
      @endforeach
</div>

</div>
<div class="deals mb-5"></div>

  <div class="container row mx-auto deals ">
    <p class="fs-4 fw-bold  text-secondary">Popular Kashmir Attractions </p>
    <div class="d-flex flex-row flex-wrap justify-content-between ">
      <div class="col-md-5  my-3 ">
        <div class="card border-0 rounded-3" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone74.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.2 );
                  backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
              DAL&nbsp;LAKE</h4>
            <p class="card-text fw-bold">Known to be “The Jewel of Srinagar”, Dal Lake spreads across an area of around
              26 square kilometers and is one of the major attractions included in our Kashmir tour packages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5  my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone75.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end border-0 rounded-3" style="background: rgba( 0, 0, 0, 0.2 );
                  backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
              SHANKARACHARYA&nbsp;TEMPLE</h4>
            <p class="card-text fw-bold">The Shankaracharya Temple, located on the Shankaracharya Hill in Srinagar, is a
              prominent religious site to visit with our Kashmir tour packages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone10.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );       
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
              GULMARG&nbsp;GONDOLA</h4>
            <p class="card-text fw-bold">Gulmarg Gondola is the second highest and second longest cable car ride in the
              world.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone21.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.2 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
              TULIP&nbsp;GARDEN</h4>
            <p class="card-text fw-bold">Opened for public in the year 2007, the Indira Gandhi Memorial Tulip Garden was
              built with the aim of improving floriculture as well as tourism in Kashmir.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card  rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone76.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );;">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
              APHARWAT&nbsp;PEAK</h4>
            <p class="card-text fw-bold">Located at a height of 4,200 m above sea level, Apharwat Peak is one of the
              most significant places in Gulmarg that attributes to the beauty of this attraction.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-3">
        <div class="card rounded-3 border-0" data-aos="zoom-in-up" data-aos-duration="4000">
          <img class="card-img-top rounded-3 lazy" src="landing/clone77.avif" alt="Card image" style="height: 280px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end rounded-3 border-0" style="background: rgba( 0, 0, 0, 0.25 );
          backdrop-filter: blur( 0px );
          -webkit-backdrop-filter: blur( 0px );">
            <h4 class="card-title fw-bolder " style="width: fit-content;  border-bottom: 2px solid#F37002;">
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
      <p class="fs-4 fw-bold  text-secondary">Popular Related Destinations </p>
      <div class="col-md-3 ">
        <div class="card  border-0 rounded-3 my-3" data-aos="flip-right" data-aos-duration="4000" style="background: rgba( 0, 0, 0, 0.25 );       
      backdrop-filter: blur( 0px );
      -webkit-backdrop-filter: blur( 0px );">
          <img class="card-img-top rounded-3 lazy" src="landing/clone78.avif" alt="Card image" style="height: 200px;">
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
          <img class="card-img-top rounded-3 lazy" src="landing/clone79.avif" alt="Card image" style="height: 200px;">
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
          <img class="card-img-top rounded-3 lazy" src="landing/clone80.avif" alt="Card image" style="height: 200px;">
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
          <img class="card-img-top rounded-3 lazy" src="landing/clone81.avif" alt="Card image" style="height: 200px;">
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
          <img class="card-img-top rounded-3 lazy" src="landing/clone82.avif" alt="Card image" style="height: 200px;">
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
          <img class="card-img-top rounded-3 lazy" src="landing/clone83.avif" alt="Card image" style="height: 200px;">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-end ">
            <h5 class="card-title">Jammu</h5>
            <p class="card-text ">Tour Packages</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container  row mx-auto my-5">
    <p class="fs-4 fw-bold  text-secondary">Why Choose Joy Tour & Travels </p>
    <div class="col-md-3 col-5" data-aos="zoom-in" data-aos-duration="4000">
      <img src="landing/clone84.avif" class="card-img-top lazy" alt="..." style="width: 40%;">
      <div class="card-body text-muted">
        <h5 class="fw-semibold">10 Million+</h5>
        <p class="card-text text-wrap">Happy customers from 65+ countries all around.</p>
      </div>
    </div>
    <div class="col-md-3 col-5" data-aos="zoom-in" data-aos-duration="4000">
      <img src="landing/clone85.avif" class="card-img-top" alt="..." style="width: 40%;">
      <div class="card-body text-muted">
        <h5 class="fw-semibold">4.6 / 5.0</h5>
        <p class="card-text text-wrap">Cumulative ratings of our trips across platforms.</p>
      </div>
    </div>
    <div class="col-md-3 col-5" data-aos="zoom-in" data-aos-duration="4000">
      <img src="landing/clone86.avif" class="card-img-top lazy" alt="..." style="width: 40%;">
      <div class="card-body text-muted">
        <h5 class="fw-semibold">Curated with love</h5>
        <p class="card-text text-wrap">Expert-guided trips with meticulous planning.</p>
      </div>
    </div>
    <div class="col-md-3 col-5" data-aos="zoom-in" data-aos-duration="4000">
      <img src="landing/clone87.avif" class="card-img-top lazy" alt="..." style="width: 40%;">
      <div class="card-body text-muted">
        <h5 class="fw-semibold">24*7 Support</h5>
        <p class="card-text text-wrap">We are always there to help you pre, post and on the trip.</p>
      </div>
    </div>
  </div>
  <hr>
  {{-- <div class="d-flex justify-content-center  px-5 " style="background-color: #2F343C;color: #AEAFAF; height: auto;">
    <div class="row  w-100  text-center px-5 py-5">
      <div class="col-md-3 line my-1"></div>
      <div class="col-md-4  my-1"><img id="fff" src="landing/clonelogo.png" alt="" style="width: 170px;"></div>
      <div class="col-md-3 line my-1"></div>
      <div class="col-md-12 text-center my-2 ">
        <div class="row  mx-auto text-center  w-100">
          <a href="http://facebook.com" target="_blank" class="text-decoration-none col-md-3 col-3  my-1">
            <i class='bx bxl-facebook  rounded-circle px-1 py-1 fs-4 '
              style='color:#2f343c;background-color: #B7B7B7;'></i>
          </a>
          <a href="http://instagram.com" target="_blank" class="text-decoration-none col-md-3 col-3 my-1">
            <i class='bx bxl-instagram  rounded-circle px-1 py-1 fs-4 '
              style='color:#2f343c;background-color: #B7B7B7;'></i>
          </a>
          <a href="http://twitter.com" target="_blank" class="text-decoration-none col-md-3 col-3 my-1">
            <i class='bx bxl-twitter  rounded-circle px-1 py-1 fs-4 '
              style='color:#2f343c;background-color: #B7B7B7;'></i>
          </a>
          <a href="http://linkedin.com" target="_blank" class="text-decoration-none col-md-3 col-3 my-1">
            <i class='bx bxl-linkedin  rounded-circle px-1 py-1 fs-4 '
              style='color:#2f343c;background-color: #B7B7B7;'></i>
          </a>
        </div>
      </div>
      <div class="col-md-12 mt-4">
        <p>&copy;2024 Joy Tour & Travels | All rights reserved.</p>
      </div>
      <div class="col-md-12 text-center text-wrap">
        <p> Designed & Developed By KashTech Solutions.</p>
      </div>
    </div>
  </div> --}}

  @include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- MDB -->
  <!-- BOOTSTRAP -->
 
  <!-- SPLIDER -->
  <script src="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
  "></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
$(document).ready(function(){
   setTimeout(function(){
       $('#exampleModal').modal('show');
   }, 5000);
});


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



$("#tform23").submit(function(e){


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
      
      $("#tform23 button").prop('disabled', true);
             
                           },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform23').trigger("reset");
                      $("#tform23 button").prop('disabled', false);
             
                
                       },
                       error: function(response) {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                       $("#tform23 button").prop('disabled', false);
             
                      $('#tform23').trigger("reset");
                       }
                   });

});








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











   function set_head(title){
    $("#mdh").html(`<h6 class="text-light m-2" style="font-weight:bold;">${title}</h6>`);
    $("#packagename").val(title)
  }
   function clear_head(){
    $("#mdh").html("");
    $("#packagename").val("")
   }
 


    // Initialize SPLIDER
    var splide = new Splide('.splide', {
      type: 'loop',
      autoplay: true,
    }).mount();
    // Initialize swiper
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
    var swiper = new Swiper(".mySwiper", {

      spaceBetween: 10,
      slidesPerView: 2,

      coverflowEffect: {

        slideShadows: true,
      },
      breakpoints: {
        // when window width is <= 499px
        300: {
          slidesPerView: 1,
          spaceBetweenSlides: 30
        },
        600: {
          slidesPerView: 2,
          spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        999: {
          slidesPerView: 2,
          spaceBetweenSlides: 40
        }
      }

    });
    // Initialize AOS ANIMATE
    AOS.init();



    function chng(id){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#myDate'+id).attr('min', minDate);
}
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#myDate2').attr('min', minDate);
});
  </script>



 <script>
        $(document).ready(function() {
            $('#user_signup').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                let submitButton = $('#loginn');  // Get the submit button

// Disable the button to prevent multiple submissions
            submitButton.prop('disabled', true);
            submitButton.text('Processing...');
                $.ajax({
                    type: 'POST',
                    url: '{{ route("user-signup") }}', // Replace with your signup route
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) {
                      // console.log(response);
                        $('#name-err').html("");
                        $('#email-err').html("");
                        $('#password-err').html("");
                        $('#password2-err').html("");
                        $('#responseMessage').html('<p class="text-success">' + response.message + '</p>');
                        $('#user_signup')[0].reset(); // Reset the form
                        submitButton.prop('disabled', false);
                        submitButton.text('SIGNUP');
                    },
                    error: function(xhr) {
                      // console.log(xhr);
                      
                        // Handle validation errors
                        let errors = xhr.responseJSON.errors;
                        // let errorMessage = '<ul>';
                        // $.each(errors, function(key, value) {
                        //     errorMessage += '<li>' + value[0] + '</li>'; // Get the first error message for each field
                        // });
                        // errorMessage += '</ul>';
                        if(errors.name)
                        $('#name-err').html(errors.name);
                        else
                        $('#name-err').html("");
                        if(errors.email)
                        $('#email-err').html(errors.email);
                        else
                        $('#email-err').html("");
                        if(errors.password)
                        $('#password-err').html(errors.password);
                        else
                        $('#password-err').html("");
                        if(errors.confirm_password)
                        $('#password2-err').html(errors.confirm_password);
                        else
                        $('#password2-err').html("");

                        submitButton.prop('disabled', false);
                        submitButton.text('SIGNUP');
                       
                    }
                });
            });
        });
    </script>


<script>
  $(document).ready(function() {
      $('#user_login').on('submit', function(e) {
          e.preventDefault(); // Prevent the default form submission
          let submitButton2 = $('#loginnn');  // Get the submit button

// Disable the button to prevent multiple submissions
      submitButton2.prop('disabled', true);
      submitButton2.text('Processing...');
          $.ajax({
              type: 'POST',
              url: '{{ route("user-login") }}', // Replace with your signup route
              data: $(this).serialize(), // Serialize form data
              success: function(response) {
                 console.log(response);
                 
                  $('#email-err1').html("");
                  $('#password-err1').html("");
                  // $('#responseMessage1').html('<p class="text-success">' + response.message + '</p>');
                 if(response.message=="Login successful")
                    window.location.reload();
                 
                  $('#user_login')[0].reset(); // Reset the form
                  submitButton2.prop('disabled', false);
                  submitButton2.text('Login & Continue');
              },
              error: function(xhr2) {
                 console.log(xhr2);
                
                  submitButton2.prop('disabled', false);
                  submitButton2.text('Login & Continue');

                  let errors2 = xhr2.responseJSON.errors;
                  let error = xhr2.responseJSON.error;
                 if(error){
                  $('#responseMessage1').html('<p class="text-danger">' + error + '</p>');
                  $('#email-err1').html("");
                  $('#password-err1').html(""); 
                }
                 

                  if(errors2.email)
                  $('#email-err1').html(errors2.email);
                  else
                  $('#email-err1').html("");
                  if(errors2.password)
                  $('#password-err1').html(errors2.password);
                  else
                  $('#password-err1').html("");
                 
                 
                 
              }
          });
      });
  });
</script>


  
</body>

</html>