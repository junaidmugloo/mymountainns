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
<div style="margin-top: 22vh;">

  @include('pop')

<div class="container my-5">
  @if($packages->count()==0)
  <h4 class="text-center mb-4">No data found</h2>
  <script>
  setTimeout(() => {
    window.location.href="/";
  }, 2000);
  </script>
  @else
  <h2 class="text-center mb-4">Kashmir Travel Packages</h2>
  @endif
  <!-- Search Input -->
 
  <div class="row justify-content-start" id="packageCards">
    @foreach ($packages as $p)
    <div class="col-md-6 col-lg-4 mt-3 mb-3 package-card" data-title="{{ $p->title }}">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simulate content loading with a 2s delay
    setTimeout(function() {
        @foreach ($packages as $p)
        // Replacing Skeleton Loader with actual content
        const cardEl = document.getElementById('card-{{ $p->id }}');
        if(cardEl){
            cardEl.innerHTML = `
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="destination-card-items mt-0 package-card" data-title="{{ strtolower($p->name) }}">
                        <div class="destination-image">
                            <img src="{{ asset('package_images/'.$p->image) }}" alt="img">
                            <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3 class="text-start text-light rounded-pill"
                                style="background:linear-gradient(93deg,#26e2ff,#048fec);font-size:9px;cursor:text;font-weight:900; width:fit-content;padding:0 10px; height:18px;line-height:18px;">
                                {{ $p->tag_line }}
                            </h3>
                            <ul class="meta">
                                <li>
                                    <i class="fa-thin fa-location-dot"></i>
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
                                    {{ $p->name }}
                                </a>
                            </h5>
                            <ul class="info">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                    {{ $p->day }} days & {{ $p->night }} nights
                                </li>
                                <li>
                                    <i class="fa-thin fa-users"></i>
                                    50+
                                </li>
                            </ul>
                            <div class="price">
                                <h6>₹{{ $p->discount }}<span>/Per person</span></h6>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal" class="theme-btn style-2">
                                    Book Now<i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }
        @endforeach
    }, 2000); // Simulate a 2s delay for loading
});

// Search Functionality
$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.package-card').filter(function() {
            $(this).toggle($(this).data('title').indexOf(value) > -1);
        });
    });
});
</script>


</body>
</html>
