<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Joy Tour & Travels</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset("/assets/img/favicon.jpg") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/animate.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/dataTables.bootstrap4.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/plugins/fontawesome/css/fontawesome.min.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/plugins/fontawesome/css/all.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">

</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

@include('components/topnav')

@include('components/sidenav')

<div class="page-wrapper">
<div class="content">
<div class="row">



<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>100</h4>
<h5>Customers</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<h4>10k</h4>
<h5>Total Reviews</h5>
</div>
<div class="dash-imgs">
<i data-feather="user-check"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Purchase Invoice</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das4">
    <div class="dash-counts">
    <h4>{{count($packages)}}</h4>
    <h5>Total Packages</h5>
    </div>
    <div class="dash-imgs">
    <i data-feather="file-text"></i>
    </div>
    </div>
    </div>


<div class="col-lg-12 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h4 class="card-title mb-0">Recently Added Packages</h4>
<div class="dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
<i class="fa fa-ellipsis-v"></i>
</a>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="viewpackages" class="dropdown-item">Package List</a>
</li>
<li>
<a href="addpackages" class="dropdown-item">Package Add</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Name</th>
<th>Image</th>
<th>Category</th>
<th>Price</th>
</tr>
</thead>
<tbody>
    @foreach ($packages as $p)
        
 
<tr>
<td>
    {{$p->name}}
</td>

<td class="productimgname">
<a href="{{ url('package_images/'.$p->image) }}" class="product-img">
    <img src="{{ asset('package_images/'.$p->image) }}" alt="product">
</a>

</td>
<td>
    {{$p->category}}
</td>
<td>{{$p->price}}</td>
</tr>

@endforeach


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>


<script src="{{ asset("/assets/js/jquery-3.6.0.min.js") }}"></script>

<script src="{{ asset("/assets/js/feather.min.js") }}"></script>

<script src="{{ asset("/assets/js/jquery.slimscroll.min.js") }}"></script>

<script src="{{ asset("/assets/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/assets/js/dataTables.bootstrap4.min.js") }}"></script>

<script src="{{ asset("/assets/js/bootstrap.bundle.min.js") }}"></script>

<script src="{{ asset("/assets/plugins/apexchart/apexcharts.min.js") }}"></script>
<script src="{{ asset("/assets/plugins/apexchart/chart-data.js") }}"></script>

<script src="{{ asset("/assets/js/script.js") }}"></script>
</body>
</html>