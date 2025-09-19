<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kashmir Packages - My Mountains</title>

  <!-- Boxicons + Bootstrap -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f8f9fb;
      color: #333;
    }

    h2 {
      font-weight: 700;
      color: #222;
    }

    /* Package Card */
    .package-card {
      transition: all 0.3s ease-in-out;
    }
    .package-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .destination-card-items {
      border-radius: 15px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    .destination-image img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: 0.3s;
    }
    .destination-image img:hover {
      transform: scale(1.05);
    }

    .heart-icon {
      position: absolute;
      top: 12px;
      right: 12px;
      background: rgba(255,255,255,0.9);
      padding: 6px 9px;
      border-radius: 50%;
      color: #f37002;
      cursor: pointer;
    }

    .destination-content {
      padding: 15px;
    }

    .destination-content h5 a {
      text-decoration: none;
      color: #222;
      font-weight: 600;
    }

    .destination-content h5 a:hover {
      color: #f37002;
    }

    .meta, .info {
      padding: 0;
      margin: 0;
      list-style: none;
      font-size: 14px;
      color: #666;
      display: flex;
      gap: 15px;
      margin-bottom: 10px;
    }

    .meta li i, .info li i {
      color: #f37002;
      margin-right: 5px;
    }

    .price {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .price h6 {
      margin: 0;
      color: #048fec;
      font-weight: 700;
    }

    .theme-btn {
      background: linear-gradient(93deg,#26e2ff,#048fec);
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 30px;
      text-decoration: none;
      font-size: 14px;
      transition: 0.3s;
    }

    .theme-btn:hover {
      opacity: 0.9;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .destination-image img {
        height: 180px;
      }
    }
  </style>
</head>
<body>
@include('nav')

<div style="margin-top: 18vh;">
  @include('pop')

  <div class="container my-5">
    @if($packages->count()==0)
      <h4 class="text-center mb-4">No data found</h4>
      <script>
        setTimeout(() => { window.location.href="/"; }, 2000);
      </script>
    @else
      <h2 class="text-center mb-5">Kashmir Travel Packages</h2>
    @endif

    <div class="row g-4" id="packageCards">
      @foreach ($packages as $p)
      <div class="col-md-6 col-lg-4 package-card" data-title="{{ $p->title }}">
        <div class="destination-card-items position-relative">
          <div class="destination-image position-relative">
            <img src="package_images/{{ $p->image }}" alt="Package Image">
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
          </div>
          <div class="destination-content">
            <h3 class="text-start text-light rounded-pill px-3 py-1"
                style="background:linear-gradient(93deg,#26e2ff,#048fec);font-size:10px;font-weight:600;display:inline-block;">
              {{ $p->tag_line }}
            </h3>

            <ul class="meta">
              <li><i class="bx bx-map"></i> Kashmir</li>
              <li class="rating"><i class="bx bxs-star"></i> 4.7</li>
            </ul>

            <h5>
              <a href="{{ url('/details/'.$p->id) }}">
                {{ $p->name }}
              </a>
            </h5>

            <ul class="info">
              <li><i class="bx bx-time-five"></i> {{ $p->day }} days / {{ $p->night }} nights</li>
              <li><i class="bx bx-group"></i> 50+</li>
            </ul>

            <div class="price mt-3">
              <h6>₹{{ $p->discount }} <span style="font-size:12px;font-weight:400;">/Per person</span></h6>
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="theme-btn">
                Book Now <i class="bx bx-right-arrow-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@include('footer')

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
