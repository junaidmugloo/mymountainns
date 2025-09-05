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
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

@include('components/topnav')


@include('components/sidenav')

<div class="page-wrapper">
<form method="post" novalidate id="form" enctype="multipart/form-data">
    @csrf
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Add Vehicle</h4>
<h6>Create Vechile</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Vehicle Type</label>
<select name="vehicle_type" id="" class="form-control">
  <option value="">Select Type</option>
  <option value="AC">AC</option>
  <option value="Non AC">Non AC</option>
</select>
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
  <div class="form-group">
  <label>Vehicle Category</label>
  <input type="text" name="vehicle_category" required id="validationTooltip04">
  </div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
  <div class="form-group">
  <label>Vehicle Seats</label>
  <input type="text" name="vehicle_seats" required id="validationTooltip04">
  </div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
  <div class="form-group">
  <label>Vehicle Price</label>
  <input type="text" name="vehicle_price" required id="validationTooltip04">
  </div>
</div>










</div>




<div class="col-lg-12">
<button type="submit"  class="btn btn-submit me-2">Submit</a>
<button type="reset" class="btn btn-cancel">Cancel</a>
</div>
</div>

</form>


<hr>

 
  <div class="table-top p-3">
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
  

  <div class="table-responsive p-3">
  <table class="table datanew">
  <thead>
  <tr>
  
  
  <th>Vehicle Type</th>
  <th>Vehicle Category</th>
  <th>Vehicle Seats</th>
  <th>Price</th>
  <th>Options</th>
  </tr>
  </thead>
  <tbody>
  
  @foreach ($vehicles as $s)
      
  
      <tr>
  
      
  <td>{{$s->vehicle_type}}</td>
  <td>{{$s->vehicle_category}}</td>
  <td>{{$s->vehicle_seats}}</td>
  <td>{{$s->vehicle_price}}</td>
  <td>
      <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <a class="me-3" href="/editfaq/{{$s->id}}">
  <img src="assets/img/icons/edit.svg" alt="img">
  </a> --}}
  <a onclick="Delete('{{$s->id}}')" class="me-3 confirm-text" href="javascript:void(0);">
  <img src="assets/img/icons/delete.svg" alt="img">
  </a>
  </td>
  </tr>
  @endforeach
  
  </tbody>
  </table>
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
  $("#vehicle").addClass("act");

  
       $(document).ready(function(){
              $('#form').on('submit', function(event){
                    event.preventDefault();

                    var url = "/addvehicles"
                    
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            Swal.fire({
  title: "Vehicle",
  text: "Vehicle Added Successfully",
  icon: "success"
});
                          
                       $('form').trigger("reset");
                       window.location.reload();
                 
                        },
                        error: function(response) {
                          console.log(response.responseJSON.message);
                          Toastify({
text: response.responseJSON.message,
className: "bg-success",
style: {
    background: "linear-gradient(to right, #dc3545, #dc3545)",
  },
duration: 3000

}).showToast();
// window.location.reload();
                        }
                    });
                });

            });







// delete

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
        url: "addvehicles/"+id,
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
      text: "Vehicle has been deleted.",
      icon: "success"
    });
    
  }
});
    }







</script>
</body>
</html>