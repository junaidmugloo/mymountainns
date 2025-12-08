<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy & Payment Policy | Joy Tour and Travels</title>
  <meta name="keywords" content="Kashmir Tour Packages, Joy Tour & Travels">
  <meta name="author" content="Joy Tour & Travels">
  <meta name="description" content="Read the Privacy, Payment & Refund Policy of Joy Tour and Travels to learn how we collect, use, and protect your personal information when you use our website and services.">
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


</head>

<body>
  <div class="container-fluid">
    @include('nav')

    <div class="row about px-5 pt-5">
      <div class="col-12 col-md-6">
        <br><br><br><br><br>
        <b>Mymountains</b>
        <h1 class="ext2">Shaping the</h1>
        <h1 class="ext">Future Of Travel!</h1>
        <p>Changing the Way People Travel the World</p>
        <a href="#abt" style="text-decoration: none;">
          <button class="GradientButton">Read more</button>
        </a>
      </div>
      <div class="col-12 col-md-6 mt-4" id="glob">
        <canvas id="cobe" style="width: 500px; height: 500px" width="800" height="800"></canvas>
      </div>
    </div>

    <div style="background: #f4f6f9" class="mt-5 w-100" id="abt">
      <h1 class="ext text-center pt-5">Privacy, Payment & Refund Policy</h1>
      <div class="p-5 policy-section">
        <h4><strong>Privacy Policy</strong></h4>
        <p>At <strong>MyMountains</strong>, we value your privacy and are committed to protecting your personal information. We collect only the necessary details such as your name, email, phone number, travel preferences, and payment information to process your bookings and enhance your travel experience. All sensitive payment data is handled securely by trusted payment gateways and never stored on our servers.</p>

        <p>We use cookies to improve user experience, analyze traffic, and remember your preferences. You may disable cookies in your browser settings, but some features may not function properly.</p>

        <p>Your information will never be sold or rented. It may only be shared with trusted partners (airlines, hotels, logistics, etc.) strictly for completing your bookings.</p>

        <hr>

        <h4><strong>Payment Policy</strong></h4>
        <ul>
          <li>50% Advance payment on booking confirmation.</li>
          <li>30% remaining payment before 07 days from date of Arrival.</li>
          <li>20% remaining payment within 48 hours from date of Arrival.</li>
        </ul>

        <hr>

        <h4><strong>Cancellation & Refund Policy</strong></h4>
        <ul>
          <li>50% Cancellation charge applies for cancellations made before 45 Days of tour Departure.</li>
          <li>No refund for cancellations within 7 days of arrival or for no-shows.</li>
          <li>Refunds, if applicable, will be processed within 7–10 working days after cancellation approval.</li>
        </ul>

        <hr>

        <h4><strong>Contact Us</strong></h4>
        <p>For any queries related to privacy, payment, or refund, please contact us at:</p>
        <p><strong>Email:</strong> <a href="mailto:info@mymountains.com">info@mymountains.com</a><br>
          <strong>Website:</strong> <a href="https://mymountains.com" target="_blank">mymountains.com</a>
        </p>
      </div>
    </div>

    @include('footer')
  </div>
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
  <script type="module">
    import createGlobe from 'https://cdn.skypack.dev/cobe'
    let phi = 0;
    let canvas = document.getElementById('cobe');
    const globe = createGlobe(canvas, {
      devicePixelRatio: 2,
      width: 1000,
      height: 1000,
      phi: 0,
      theta: 0,
      dark: 0,
      diffuse: 1.2,
      scale: 1,
      mapSamples: 16000,
      mapBrightness: 6,
      baseColor: [1, 1, 1],
      markerColor: [1, 0.5, 1],
      glowColor: [1, 1, 1],
      markers: [
        { location: [37.7595, -122.4367], size: 0.03 },
        { location: [40.7128, -74.006], size: 0.1 },
      ],
      onRender: (state) => {
        state.phi = phi;
        phi += 0.01;
      },
    });
  </script>
</body>
</html>