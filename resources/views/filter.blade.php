<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jammu And Kashmir Holiday Packages</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
    <style>
        :root {
            --primary-blue: linear-gradient(93deg,#20c997,#0dcaf0); /* This is your target theme gradient */
            --orange: #20c997;
            --pink: #ff385c; /* Used for some badges in example, can be customized */
            --yellow-btn: #ffc107; /* Veena world uses a yellow for book button */
            --text-dark: #343a40;
            --text-muted: #6c757d;
            --border-color: #dee2e6;
            --light-gray-bg: #f8f9fa;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: var(--light-gray-bg);
            color: var(--text-dark);
            font-size: 14px;
        }
        .btn:active{
          background: var(--primary-blue) !important;
        }

        .filter-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 13px;
        }

        .filter-header {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .filter-header h6 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0;
        }

        .clear-link {
            /* color: var(--primary-blue); */ /* Replaced with text gradient */
            background: var(--primary-blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }
        .clear-link:hover {
            text-decoration: underline;
        }

        .filter-section {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
        }
        .filter-section:last-child {
            border-bottom: none;
        }
        .btn-filter-toggle {
            display: none; /* Hidden by default, shown on small screens */
            position: fixed;
            font-size: 1rem;
            bottom: 20px;
            left: 10px;
            z-index: 1050; /* Ensure it's above other content */
        }
        .filter-section h6 {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .filter-section h6 .fa-chevron-up, .filter-section h6 .fa-chevron-down {
            font-size: 0.75rem;
        }

        .price-range-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem;
        }
        .price-range-options .btn {
            font-size: 0.8rem;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            background-color: white;
            color: var(--text-dark);
        }
        .price-range-options .btn.active {
            background: var(--primary-blue);
            color: white;
            /* border-color: var(--primary-blue); */ /* Border might be redundant if background is full gradient */
            border: none; /* Or remove border if covered by gradient */
        }

        .tour-duration-slider {
            position: relative;
            height: 4px;
            /* background-color: var(--border-color); */ /* Base track color */
            background-color: #e0e0e0; /* Light grey for base track */
            margin: 2rem 0.5rem 1.5rem 0.5rem; /* Added margin for handles */
        }
        .tour-duration-slider .slider-track {
            position: absolute;
            height: 100%;
            background: var(--primary-blue); /* Use the gradient for the active track */
            left: 10%; /* Example */
            right: 20%; /* Example */
        }
        .tour-duration-slider .slider-handle {
            position: absolute;
            top: -6px; /* Adjust to center on the line */
            width: 16px;
            height: 16px;
            background-color: white;
            border: 2px solid #20c997; /* Solid color from the gradient (orange part) */
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }
        .tour-duration-slider .slider-handle.min {
            left: 10%; /* Example */
        }
        .tour-duration-slider .slider-handle.max {
            right: 20%; /* Example */
        }
        .duration-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-bottom: 0.75rem;
        }

        .date-input {
            font-size: 0.875rem;
            padding: 0.5rem;
        }

        .form-check-label {
            font-size: 0.875rem;
        }
        .form-check-input {
            width: 1em;
            height: 1em;
        }
        .joining-leaving-info {
            font-size: 0.75rem;
            color: var(--text-muted);
            background-color: #f8f9fa; /* Light background for info box */
            padding: 0.5rem;
            border-radius: 4px;
            margin-top: 0.5rem;
        }

        .package-type-options .btn {
            font-size: 0.8rem;
            padding: 0.5rem 0.75rem;
        }


        .package-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .package-image {
            height: 220px; /* Adjusted height */
            object-fit: cover;
        }

        .badge-group {
            position: absolute;
            top: 1rem;
            left: 1rem;
            display: flex;
            gap: 0.5rem;
        }

        .badge-custom {
            font-size: 0.65rem; /* Smaller font */
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-weight: 600; /* Bolder */
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-orange {
            background: var(--orange);
            color: white;
        }

        .badge-pink { /* Example for other types if needed */
            background: var(--pink);
            color: white;
        }
        .badge-blue { /* For customized holidays */
            background: linear-gradient(93deg,#20c997,#0dcaf0); /* A blue color */
            color: white;
        }


        .heart-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: white;
            font-size: 1.25rem;
            cursor: pointer;
            filter: drop-shadow(0 1px 2px rgba(0,0,0,0.5));
        }
        .heart-icon:hover {
            color: #ffc107; /* Yellow on hover */
        }

        .package-details {
            padding: 1rem;
        }
        .package-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .rating {
            font-size: 0.8rem;
            color: var(--text-muted);
        }
        .rating .fa-star {
            color: #ffc107; /* Yellow stars */
        }

        .all-inclusive {
            /* color: var(--primary-blue); */ /* Replaced with text gradient */
            background: var(--primary-blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            font-size: 0.8rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            margin-bottom: 0.75rem;
        }
        .all-inclusive .fa-info-circle { /* Icon within all-inclusive */
            color: #20c997; /* Solid color from the gradient for the icon */
            background: none; /* Ensure no background from parent interferes */
            -webkit-text-fill-color: initial; /* Reset for icon */
            text-fill-color: initial; /* Reset for icon */
        }

        .info-grid {
            display: flex;
            /* grid-template-columns: repeat(3, 1fr); */
            gap: 1rem;
            margin: 1rem 0;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .info-item {
            font-size: 0.8rem;
        }
        .info-item div:first-child { /* Label */
            color: var(--text-muted);
            margin-bottom: 0.1rem;
            font-size: 0.75rem;
        }
        .info-item div:last-child { /* Value */
            font-weight: 500;
        }
        
        .tour-highlights {
            font-size: 0.8rem;
        }
        .tour-highlights .info-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-bottom: 0.25rem;
        }
        .tour-highlights a {
            /* color: var(--primary-blue); */ /* Replaced with text gradient */
            background: var(--primary-blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            text-decoration: none;
            font-weight: 500;
        }

        .price-section {
            text-align: right;
        }
        .price-label {
            color: var(--text-muted);
            font-size: 0.75rem;
        }
        .price-amount {
            font-size: 1.5rem; /* Larger price */
            font-weight: 700;
            color: var(--text-dark);
            margin: 0.1rem 0;
        }
        .emi-text {
            font-size: 0.8rem;
            color: var(--text-muted);
        }
        .emi-amount {
            /* color: var(--primary-blue); */ /* Replaced with text gradient */
            /* background: var(--primary-blue); */
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            /* background-clip: text; */
            /* text-fill-color: transparent; */
            /* text-decoration: none;  */
            color: #20c997;
            font-weight: 500;
        }

        .action-buttons .btn {
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.6rem 0;
            width: 100%;
            margin-bottom: 0.5rem;
        }
        .btn-book {
            background: var(--yellow-btn);
            color: var(--text-dark);
            border: none;
        }
        .btn-book:hover {
            background: #20c997;
            transform: scale(1.03); /* Slight zoom on hover */
        }
        .btn-details {
            background: #20c997;
            color: white;
            border: #20c997;
            transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease; /* Added transition */
        }
        .btn-details:hover {
            background:linear-gradient(93deg,#20c997,#0dcaf0); /* Light blue hover */
            transform: scale(1.03); /* Slight zoom on hover */
        }
        .btn-dates-prices { /* For customized holidays */
            background: var(--primary-blue);
            color: white;
            border: none;
            transition: background-color 0.2s ease, transform 0.2s ease; /* Added transition */
        }
        .btn-dates-prices:hover {
            background-color: #0056b3; /* Darker blue on hover */
            transform: scale(1.03); /* Slight zoom on hover */
        }

        .compare-enquire .form-check-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-muted);
        }
        .compare-enquire .form-check-input {
            margin-top: 0.2em;
        }


        .page-header {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        .page-subheader {
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .sort-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .sort-controls .form-select {
            font-size: 0.875rem;
            padding: 0.375rem 1.75rem 0.375rem 0.75rem; /* Adjust padding for icon */
            width: auto;
            border-color: var(--border-color);
        }
        .sort-controls .btn-grid-view {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
            color: var(--text-muted);
            border: 1px solid var(--border-color);
        }
        .sort-controls .btn-grid-view .fa-th {
            margin-right: 0.25rem;
        }

        .bottom-info-banner {
            background-color: #e7f3ff; /* Light blue background */
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            text-align: center;
        }
        .bottom-info-banner h6 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        .bottom-info-banner .btn-group .btn {
            font-size: 0.8rem;
            margin: 0 0.25rem;
            border: 1px solid #20c997; /* Solid color from gradient start for outline */
            color: #20c997; /* Solid color from gradient start for text */
            background-color: transparent; /* Ensure outline style */
        }
        .bottom-info-banner .btn-group .btn:hover {
            background: var(--primary-blue); /* Full gradient on hover */
            color: white;
            border-color: transparent; /* Hide border when background is full */
        }
        .bottom-info-banner p {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 0.75rem;
        }
        .bottom-info-banner p a {
            /* color: var(--primary-blue); */ /* Replaced with text gradient */
            background: var(--primary-blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            font-weight: 500;
        }

        /* Added for filter toggle button */
        

        @media (max-width: 991.98px) { /* Bootstrap's lg breakpoint */
            .filter-sidebar-container {
                display: none; /* Hide filter sidebar by default on small screens */
                position: fixed;
                top: 0;
                left: -280px; /* Start off-screen for slide-in animation */
                width: 280px; /* Or your desired width */
                height: 100%;
                background-color: white;
                z-index: 1040;
                overflow-y: auto;
                box-shadow: 2px 0 5px rgba(0,0,0,0.1);
                transition: left 0.3s ease-in-out; /* Animation for sliding */
            }
            .filter-sidebar-container.show {
                display: block; /* Keep this to ensure visibility */
                left: 0; /* Slide in to view */
            }
            .btn-filter-toggle {
                display: block; /* Show button on small screens */
            }
            .filter-card {
                height: 100%;
                border-radius: 0; /* Optional: full height look */
                border-right: 1px solid var(--border-color);
            }
            .package-listings-container {
                width: 100%; /* Ensure package listings take full width when filter is hidden/overlayed */
            }
        }

    </style>
</head>
<body class="">

<!-- Request Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="requestModalLabel">Request Tour Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="tform">
                  <div class="mb-3">
                      {{-- <input type="hidden" name="package" id="packagename" value="{{$package->name}}" class="form-control" > --}}
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
                  <button type="submit" class="btn btn-details w-100">Submit Request</button>
              </form>
          </div>
      </div>
  </div>
</div>



  @include('nav')
  <hr>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="page-header">All Tour Packages</h1>
                <p class="page-subheader">Showing 1-5 packages from {{$packages->total()}} packages</p>
            </div>
            <div class="sort-controls">
                <i class="fas fa-sort-amount-down me-1" style="color: var(--text-muted);"></i>
                <select class="form-select form-select-sm">
                    <option>Sort by: Deals</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
                {{-- <button class="btn btn-sm btn-grid-view"><i class="fas fa-th"></i> Grid View</button> --}}
            </div>
        </div>

        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3 filter-sidebar-container" id="filterSidebar">
                <div class="filter-card">
                    <div class="filter-header">
                        <h6><i class="fas fa-filter me-1"></i> Filter Your Tour</h6>
                        <a href="#" class="clear-link">Clear All</a>
                    </div>
                    
                    <div class="filter-section">
                        <h6>Price Range <i class="fas fa-chevron-up"></i></h6>
                        <div class="price-range-options">
                            <button class="btn active">₹98,000 - ₹1.3L</button>
                            <button class="btn">₹1.3L - ₹1.7L</button>
                            <button class="btn">₹1.7L - ₹2.1L</button>
                            <button class="btn">₹2.1L & above</button>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h6>Tour Duration <i class="fas fa-chevron-up"></i></h6>
                        <div class="tour-duration-slider">
                            <div class="slider-track"></div>
                            <div class="slider-handle min" style="left: 0%;"></div>
                            <div class="slider-handle max" style="left: 100%;"></div>
                        </div>
                        <div class="duration-labels">
                            <span>Min. 5 days</span>
                            <span>Max. 40 days</span>
                        </div>
                        <div class="price-range-options"> <!-- Reusing class for similar button grid -->
                            <button class="btn">5 - 14 days</button>
                            <button class="btn">14 - 23 days</button>
                            <button class="btn">23 - 32 days</button>
                            <button class="btn">32 - 40 days</button>
                        </div>
                    </div>

                    
                    
                    

                    

                    <div class="filter-section">
                        <h6>Speciality Tour <i class="fas fa-chevron-up"></i></h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="specialityTour" id="roadTrips" checked>
                            <label class="form-check-label" for="roadTrips">Road Trips (3)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="specialityTour" id="customHolidaysSpecial">
                            <label class="form-check-label" for="customHolidaysSpecial">Customized Holidays (1)</label>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Package Listings -->
            <div class="col-lg-9" style="height: 98vh; overflow-y: auto;">
                <!-- Sample Package Card 1 -->
               

                <!-- Sample Package Card 2 (Customized Holiday Example) -->
                
                
            
                @include('packages_list')

              
                <!-- Add more package cards as needed -->

                {{-- <div class="bottom-info-banner">
                    <h6>View Jammu and Kashmir Tour Packages</h6>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm">3 tours from Mumbai</button>
                        <button type="button" class="btn btn-sm">1 tours joining & leaving from Leh</button>
                        <button type="button" class="btn btn-sm">1 tours joining & leaving from Chandigarh</button>
                    </div>
                    <p class="mt-2">Can't find tours from your city? Check our Joining & leaving option. <a href="#">Book your own flights and join directly</a> at the first destination of the tour.</p>
                </div> --}}

            </div>
            
        </div>
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
        {{-- sweet alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Basic JS for active state on filter buttons if needed
        document.querySelectorAll('.price-range-options .btn, .package-type-options label.btn').forEach(button => {
            button.addEventListener('click', function() {
                // For radio buttons in btn-group, Bootstrap handles active state via input:checked
                // For standalone buttons, you might need to manage 'active' class
                if (!this.control || this.control.type !== 'radio') { // if it's not a label for radio
                    this.closest('.price-range-options, .package-type-options').querySelectorAll('.btn.active').forEach(activeBtn => {
                        if (activeBtn !== this) activeBtn.classList.remove('active');
                    });
                    this.classList.toggle('active');
                }
            });
        });
    </script>
</body>
</html>

    <!-- Filter Toggle Button for Small Screens -->
    <button class="btn btn-primary btn-lg btn-filter-toggle" style=" background:linear-gradient(93deg, #20c997 0%, #0dcaf0 100%);" type="button">
        <i class="fas fa-filter"></i> Filters
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Basic JS for active state on filter buttons if needed
        document.querySelectorAll('.price-range-options .btn, .package-type-options label.btn').forEach(button => {
            button.addEventListener('click', function() {
                // For radio buttons in btn-group, Bootstrap handles active state via input:checked
                // For standalone buttons, you might need to manage 'active' class
                if (!this.control || this.control.type !== 'radio') { // if it's not a label for radio
                    this.closest('.price-range-options, .package-type-options').querySelectorAll('.btn.active').forEach(activeBtn => {
                        if (activeBtn !== this) activeBtn.classList.remove('active');
                    });
                    this.classList.toggle('active');
                }
            });
        });

        // jQuery for filter toggle on small screens
        $(document).ready(function() {
            $('.btn-filter-toggle').on('click', function() {
                $('#filterSidebar').toggleClass('show');
                // Optional: Add an overlay to the rest of the page when filter is open
                // if ($('#filterSidebar').hasClass('show')) {
                //     $('body').append('<div class="filter-overlay" style="position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:1030;"></div>');
                // } else {
                //     $('.filter-overlay').remove();
                // }
            });

            // Optional: Close filter when clicking outside on small screens (if overlay is used)
            // $(document).on('click', '.filter-overlay', function() {
            //     $('#filterSidebar').removeClass('show');
            //     $(this).remove();
            // });
        });
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
</body>
</html>
