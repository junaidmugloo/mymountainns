<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>My SEO</title>

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
<h4>My SEO</h4>
<h6>Create Meta Content</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   
<div class="row">

<input type="hidden" name="og_image" >

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Meta Title</label>
<input type="text" name="meta_title" required id="validationTooltip04">
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Meta Keywords</label>
<input type="text" name="meta_keywords" required>
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label>Meta Description</label>
<textarea class="form-control" name="meta_description"></textarea>
</div>
</div>




</div>




<div class="col-lg-12">
<button type="submit"  class="btn btn-submit me-2">Submit</a>
<button type="reset" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>
</form>
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

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>


<script>
  $("#dashboard").removeClass("active");
  $("#banners").addClass("act");

  
       $(document).ready(function(){
              $('#form').on('submit', function(event){
                    event.preventDefault();

                    var url = "/addseo"
                    
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
  title: "SEO",
  text: "SEO Details Added Successfully",
  icon: "success"
});
                          
                       $('form').trigger("reset");
                      
                 
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
                        }
                    });
                });

            });
</script>
</body>
</html>