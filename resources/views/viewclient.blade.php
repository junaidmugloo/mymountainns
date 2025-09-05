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
<h4>Customer List</h4>
<h6>Manage your Customers</h6>
</div>
<div class="page-btn">
<a href="/customer" class="btn btn-added"><img src="assets/img/icons/plus.svg" class="me-2" alt="img">Add Data</a>
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
      <li>
          <a href="#" id="exportCSV" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Export CSV">
              <img src="assets/img/icons/excel.svg" alt="csv">
          </a>
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


<th>Name</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>
<th>Status</th>
<th>Date ofTravel</th>
<th>Agent_Name</th>
<th>Source</th>
<th>Alternative Number</th>
<th>Options</th>
</tr>
</thead>
<tbody>

@foreach ($topslider as $s)
    

    <tr>


<td>{{$s->name}}</td>
<td>{{$s->email}}</td>
<td>{{$s->phone}}</td>
<td><p style="text-wrap: wrap;width:30rem; display:block;">{{$s->address}}</p></td>
<td>{{$s->status}}</td>
<td>{{$s->Date_of_Travel}}</td>
<td>{{$s->Agent_Name}}</td>
<td>{{$s->Source}}</td>
<td>{{$s->AltNumber}}</td>
<td>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
<a class="me-3" href="/editcustomer/{{$s->id}}">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
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
  $("#faqx").addClass("act");

  

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
        url: "customer/"+id,
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
      text: "Faq has been deleted.",
      icon: "success"
    });
    
  }
});
    }


    
</script>

<script>
  // ... existing scripts ...
  
  document.getElementById('exportCSV').addEventListener('click', function(e) {
      e.preventDefault();
      
      // Get DataTable instance
      const table = $('.datanew').DataTable();
      
      // Get headers (excluding Options column)
      const headers = [];
      $('.datanew thead th').each(function() {
          if ($(this).text() !== 'Options') {
              headers.push($(this).text());
          }
      });
  
      // Get all data from DataTable
      const data = table.data().toArray();
      
      // Create CSV content
      let csvContent = headers.join(',') + '\n';
      
      // Add all rows
      data.forEach(row => {
          const rowData = [];
          headers.forEach((header, index) => {
              rowData.push(row[index]);
          });
          csvContent += rowData.join(',') + '\n';
      });
  
      // Create and trigger download
      const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
      const link = document.createElement('a');
      const url = URL.createObjectURL(blob);
      link.setAttribute('href', url);
      link.setAttribute('download', `customer_list_${new Date().toISOString().slice(0,10)}.csv`);
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      URL.revokeObjectURL(url);
  });
  </script>
</body>
</html>