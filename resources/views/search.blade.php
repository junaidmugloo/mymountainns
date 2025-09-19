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
    .card-custom {
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-img-custom {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .skeleton {
      background-color: #ddd;
      animation: shimmer 1.5s infinite linear;
      background: linear-gradient(90deg, #ddd 25%, #eee 50%, #ddd 75%);
      background-size: 200% 100%;
    }

    .skeleton.text {
      height: 20px;
      margin-bottom: 10px;
    }

    .skeleton.small-text {
      height: 15px;
      margin-bottom: 5px;
      width: 60%;
    }

    .skeleton-btn {
      width: 100%;
      height: 40px;
      background-color: #ddd;
      border-radius: 5px;
      margin-top: 10px;
    }

    .btn-warning {
      background: var(--primary-color, #f37002) !important;
      color: #fff !important;
    }

    .btn-warning:hover {
      background: var(--primary-color, #f36e02bb) !important;
      color: #fff !important;
    }

    .btn-outline-warning:hover{
      background: var(--primary-color, #f37002) !important;
      color: #fff !important;
    }

    .btn-outline-warning{
      border: solid var(--primary-color, #f37002)  2px  !important;
      color: #000000 !important;
    }

    @keyframes shimmer {
      0% {
        background-position: -200px 0;
      }
      100% {
        background-position: 200px 0;
      }
    }

    @media (max-width: 768px) {
           
         
           .fxs{
               font-size: 0.8rem;
           }
       }
   
  </style>
</head>
<body>
@include('nav')
<div ">

  {{-- @include('pop') --}}

<div class="container my-1">
  @if($packages->count()==0)
  <h4 class="text-center mb-4">No data found</h2>
  <script>
  setTimeout(() => {
    window.location.href="/";
  }, 2000);
  </script>
  @else
  {{-- <h2 class="text-center ">Kashmir Travel Packages</h2> --}}
  @endif
  <!-- Search Input -->
 
  <div class="row justify-content-start" id="packageCards">
    @foreach ($packages as $p)
    <div class="col-md-6 col-lg-4  mb-3 package-card" data-title="{{ $p->title }}">
      <div class="card card-custom" id="card-{{ $p->id }}">
        <!-- Skeleton Loader -->
        <div class="skeleton card-img-custom"></div>
        <div class="card-body">
          <div class="skeleton text"></div>
          <div class="skeleton small-text"></div>
          <div class="skeleton text"></div>
          <div class="skeleton-btn"></div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Simulate content loading with a 2s delay
    setTimeout(function() {
    
      @foreach ($packages as $p)
      // Replacing Skeleton Loader with actual content
      document.getElementById('card-{{ $p->id }}').innerHTML = `
       <a href="/details/{{$p->id}}" style="text-decoration:none; color:black;">
        <img src="package_images/{{ $p->image }}" alt="Trip Image" class="card-img-top card-img-custom">
        <div class="card-body">
          <h5 class="card-title">{{ $p->name }}</h5>
          <div class="d-flex justify-content-between mb-2">
            <span>({{ $p->day }} Days & {{$p->night}} Nights)</span>
            <span class="text-success mr-2 text-end">★ 4.6</span>
            
          </div>

          <p class="text-warning h5 mb-1">INR {{ $p->discount }} <del class="text-muted h6">INR {{ $p->price }}</del></p>
          <p class="text-success small">SAVE INR {{ $p->price - $p->discount }}</p>
      </a>
          <div class="d-flex justify-content-between">
           <a href="tel:+91-9906786356" class="btn btn-outline-warning  text-uppercase font-weight-bold"><i class="bx bx-phone"></i></a>
           &nbsp; &nbsp;
           <a href="/details/{{$p->id}}" class="btn btn-warning  text-uppercase font-weight-bold" style="flex:auto;">View Details</a>
          </div>
        </div>
      `;
      @endforeach
    }, 2000); // Simulate a 2s delay for loading
  });

  // Search Functionality
  $(document).ready(function() {
    $('#searchInput').on('keyup', function() {
      var value = $(this).val().toLowerCase();
      $('.package-card').filter(function() {
        $(this).toggle($(this).attr('data-title').toLowerCase().indexOf(value) > -1);
      });
    });
  });
</script>

</body>
</html>
