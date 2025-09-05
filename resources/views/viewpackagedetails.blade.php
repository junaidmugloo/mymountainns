<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Joy Tour & Travels - Package Details">
<meta name="keywords" content="travel, tour, package, holiday, vacation">
<meta name="author" content="Joy Tour & Travels">
<meta name="robots" content="noindex, nofollow">
<title>Package Details - Joy Tour & Travels</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.jpg')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<style>
    .package-header {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .package-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .day-card {
        margin-bottom: 15px;
        border-left: 4px solid #f9b71d;
    }
    .option-card {
        background-color: #f8f9fa;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
    }
    .hotel-card {
        background-color: white;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .price-tag {
        font-size: 24px;
        font-weight: bold;
        color: #f9b71d;
    }
    .discount-price {
        text-decoration: line-through;
        color: #6c757d;
        margin-right: 10px;
    }
    .tag-line {
        font-style: italic;
        color: #6c757d;
    }
</style>
</head>
<body>
<div id="global-loader">
    <div class="whirly-loader"></div>
</div>

<div class="main-wrapper">
    {{-- @include('components/topnav') --}}
    {{-- @include('components/sidenav') --}}

    <div class="m-2">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4><a href="/viewpackages" class="btn btn-link"><i class="fa fa-arrow-left"></i> Back</a> Package Details</h4>
                    <h6>View complete package information</h6>
                </div>
                <div class="page-btn">
                    <a href="/editpackages/{{$package->id}}" class="btn btn-added">
                        <i class="fa fa-edit"></i> Edit Package
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Package Header -->
                            <div class="package-header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>{{$package->name}}</h2>
                                        <p class="tag-line">{{$package->tag_line}}</p>
                                        <div class="mb-2">
                                            <span class="badge bg-info">{{$package->category}}</span>
                                            <span class="badge bg-primary">{{$package->day}} Days</span>
                                            <span class="badge bg-primary">{{$package->night}} Nights</span>
                                        </div>
                                        <p><strong>Destination:</strong> {{$package->destination}}</p>
                                        <p><strong>Route:</strong> {{$package->start}} to {{$package->end}}</p>
                                        <p><strong>Contact:</strong> {{$package->contact}}</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <div class="price-tag">
                                            @if($package->discount)
                                                <span class="discount-price">₹{{$package->price}}</span>₹{{$package->discount}}
                                            @else
                                                ₹{{$package->price}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Package Image -->
                            <div class="text-center">
                                <img src="/package_images/{{$package->image}}" alt="{{$package->name}}" class="package-image">
                            </div>

                            <!-- Package Description -->
                            <div class="mb-4">
                                <h4>Description</h4>
                                <div>{!! $package->description !!}</div>
                            </div>

                            <!-- Itinerary -->
                            <div class="mb-4">
                                <h4>Itinerary</h4>
                                @if(count($days) > 0)
                                    @foreach($days as $day)
                                        <div class="day-card card">
                                            <div class="card-body">
                                                <h5>Day {{$day->day_index}}: {{$day->title}}</h5>
                                                <p>{{$day->days}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No itinerary details available.</p>
                                @endif
                            </div>

                            <!-- Stay Options -->
                            <div class="mb-4">
                                <h4>Stay Options</h4>
                                @if(count($options) > 0)
                                    @foreach($options as $optionIndex => $hotels)
                                        <div class="option-card">
                                            <h5>Option {{$optionIndex + 1}}</h5>
                                            @foreach($hotels as $hotel)
                                                <div class="hotel-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6>{{$hotel['hotel_name']}}</h6>
                                                        </div>
                                                        <div class="col-md-6 text-end"
                                                            <p><strong>No of Nights:</strong> {{$hotel['checkout']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                @else
                                    <p>No stay options available.</p>
                                @endif
                            </div>

                            <!-- Additional Information -->
                            @if($package->D1 || $package->D2 || $package->D3)
                                <div class="mb-4">
                                    <h4>Additional Information</h4>
                                    <ul class="list-group">
                                        @if($package->D1)
                                            <li class="list-group-item">{{$package->D1}}</li>
                                        @endif
                                        @if($package->D2)
                                            <li class="list-group-item">{{$package->D2}}</li>
                                        @endif
                                        @if($package->D3)
                                            <li class="list-group-item">{{$package->D3}}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

<script>
    $(document).ready(function() {
        $("#dashboard").removeClass("active");
        $("#packages").addClass("active");
    });
</script>
</body>
</html>