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

<style>
       .bootstrap-tagsinput {
	margin: 0;
	width: 100%;
	padding: 0.5rem 0.75rem 0;
	font-size: 1rem;
  line-height: 1.25;
	transition: border-color 0.15s ease-in-out;
	
 &.has-focus {
    background-color: #fff;
    border-color: #5cb3fd;
	}
	
	.label-info {
		display: inline-block;
		background-color: #f9b71d;
		padding: 0 .4em .15em;
		border-radius: .25rem;
		margin-bottom: 0.4em;
	}
	
	
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
	content: '\00d7';
}
</style>
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="">



<div class="">
<form  novalidate id="form" enctype="multipart/form-data">
    @csrf
<div class="content">
<div class="page-header">
<div class="page-title mx-3 mt-2">
<h4 onclick="window.history.back()" style="cursor: pointer;"><i class="fa fa-arrow-left"></i> Back</h4>
<h6>Update Faq</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   

<input type="hidden" name="id" value="{{$package->id}}">
<div class="row">
  

<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Heading</label>
<input type="text" value="{{$package->title}}" name="name" required placeholder="Enter package name">
</div>
</div>




<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control" placeholder="Enter description" name="description">{{$package->description}}</textarea>
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
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<script>
    var id='{{$package->id}}'
  
       $(document).ready(function(){

        $('input[name="destination"]').tagsinput({
    trimValue: true,
    confirmKeys: [13, 44, 32],
    focusClass: 'my-focus-class'
});

$('.bootstrap-tagsinput input').on('focus', function() {
    $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
}).on('blur', function() {
    $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
});











              $('#form').on('submit', function(event){
                    event.preventDefault();
                 
                    var url = '/updatefaq'
                   
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
  title: "FAQ",
  text: "Faq Updated Successfully",
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