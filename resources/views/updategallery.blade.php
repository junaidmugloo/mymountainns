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

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.jpg')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="">



<div class="">
<form  novalidate id="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$slider->id}}">
<div class="content">
<div class="page-header">
<div class="page-title mx-3 mt-2">
<h4 onclick="window.history.back()" style="cursor: pointer;"><i class="fa fa-arrow-left"></i> Back</h4>
<h6>Update Gallery</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   

<div class="col-lg-12">
<div class="form-group">
<label> Gallery Image</label>
<div class="image-upload">
<input type="file" name="category_image">
<div class="image-uploads">
<img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>



<div class="col-lg-12">
<button type="submit"  class="btn btn-submit me-2">Update</a>
<button onclick="window.history.back()" class="btn btn-cancel">Back</a>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/feather.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>


<script>
    var id='{{$slider->id}}'
  
       $(document).ready(function(){
              $('#form').on('submit', function(event){
                    event.preventDefault();
                 
                    var url = '/updategallery'
                   
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
  title: "Banner",
  text: "Gallery image Updated Successfully",
  icon: "success"
});
                          
                      window.history.back();
                      
                 
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