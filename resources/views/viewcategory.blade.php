<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Joy Tour & Travels</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<style>
    /* .swal2-show{
        height: 200px !important;
    } */
</style>
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
<div class="page-header">
<div class="page-title">
<h4>Category List</h4>
<h6>Manage your Category</h6>
</div>
<div class="page-btn">
<a href="/addcategory" class="btn btn-added"><img src="assets/img/icons/plus.svg" class="me-2" alt="img">Add Category</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="assets/img/icons/filter.svg" alt="img">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>

{{-- <a href="/top_banner_preview" data-bs-toggle="tooltip" data-bs-placement="top" title="preview"><img src="assets/img/icons/excel.svg" alt="img"></a> --}}
</li>

</ul>
</div>
</div>

{{-- <div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Brand Name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Brand Description">
</div>
</div>
<div class="col-lg-1 col-sm-6 col-12 ms-auto">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div> --}}

<div class="table-responsive">
<table class="table datanew">
<thead>
<tr>

<th>Image</th>
<th>Name</th>
<th>Description</th>
<th>Options</th>
</tr>
</thead>
<tbody>

@foreach ($category as $s)
    

    <tr>

<td>
<a class="product-img">
<img src="category_images/{{$s->image}}" alt="product">
</a>
</td>
<td>{{$s->name}}</td>
<td>{{$s->description}}</td>
<td>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<a class="me-3" href="/editcategory/{{$s->id}}">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
@if($s->name=='tagline')

@else
<a onclick="Delete('{{$s->id}}')" class="me-3 confirm-text" href="javascript:void(0);">
  <img src="assets/img/icons/delete.svg" alt="img">
</a>
@endif
</td>
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


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

{{-- <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/script.js"></script>


<script>
$("#dashboard").removeClass("active");
  $("#category").addClass("act");


    function Delete(id){
        var token = $("meta[name='csrf-token']").attr("content");
    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {

    $.ajax(
    {
        url: "viewcategory/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            window.location.reload();
        }
    });

    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
    
  }
});
    }


    
</script>
</body>
</html>