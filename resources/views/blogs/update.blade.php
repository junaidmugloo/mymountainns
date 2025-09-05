<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<!-- Update the page title and header -->
<title>Joy Tour & Travels - Update Blog</title>


<link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/animate.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/plugins/select2/css/select2.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/dataTables.bootstrap4.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/plugins/fontawesome/css/fontawesome.min.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/plugins/fontawesome/css/all.min.css") }}">

<link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
<script src="https://cdn.tiny.cloud/1/e8sy33eyrerd5sf11rfkrp1gs22elbc6or3ds275j93opai7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<style>
     .tox-statusbar__branding{
    display: none !important;
    }
</style>
<script>
    // tinymce.init({
    //     selector: 'textarea#blog_description',
    //     height: 300,
    //     menubar: false,
    //     plugins: [
    //         'advlist autolink lists link image charmap print preview anchor',
    //         'searchreplace visualblocks code fullscreen',
    //         'insertdatetime media table paste code help wordcount'
    //     ],
    //     toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
    // });

    const demoBaseConfig = {
  selector: 'textarea#blog_description',
  width: "100%",
  height: 500,
  resize: false,
  menubar: 'edit view format tools table',
  autosave_ask_before_unload: false,
  powerpaste_allow_local_images: true,
  plugins: [
    'advlist', 'anchor', 'autolink', 'fullscreen', 'help',
    'tinydrive', 'lists', 'link', 'media', 'preview',
    'searchreplace', 'table', 'visualblocks', 'wordcount'
  ],
  toolbar: 'a11ycheck undo redo | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist ',
  spellchecker_dialog: true,
  spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
  tinydrive_demo_files_url: '../_images/tiny-drive-demo/demo_files.json',
  tinydrive_token_provider: (success, failure) => {
    success({ token: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJqb2huZG9lIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.Ks_BdfH4CWilyzLNk8S2gDARFhuxIauLa8PwhdEQhEo' });
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
};

tinymce.init(demoBaseConfig);
</script>
</head>
<body>
<div class="main-wrapper">
    @include('components/topnav')
    @include('components/sidenav')
    <div class="page-wrapper">
        <form method="post" id="form" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Update Blog</h4>
                        <h6>Edit blog post</h6>
                    </div>
                </div>
                <!-- Update the form fields to show existing data -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Blog Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" required placeholder="Enter blog title" class="form-control">
                                <input type="hidden" name="id" value="{{$blog->id}}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="blog_description" name="content">{{$blog->content}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Blog Image</label>
                                <input type="file" name="image" class="form-control">
                                <div class="mt-2">
                                    <img src="{{ asset('blog_images/' . $blog->image) }}" alt="Current Image" style="max-width: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                            <a href="{{ url("/viewblogs") }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
                <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
                <!-- Update the Ajax call -->
                <script>
                $(document).ready(function() {
                    $('#form').on('submit', function(event) {
                        event.preventDefault();
                        $.ajax({
                            url: '/updateblog',
                            method: 'POST',
                            data: new FormData(this),
                            dataType: 'JSON',
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function(response) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Blog Updated Successfully",
                                    icon: "success",
                                    showConfirmButton: true,
                                    confirmButtonText: 'OK'
                                    }).then((result) => {
                                     if (result.isConfirmed) {
                                     window.location.href = '/viewblog';
                                    } else {
                                      window.location.href = '/viewblog';
                                     }
                                });
                            },
                            error: function(response) {
                                Swal.fire({
                                    title: "Error",
                                    text: response.responseJSON.message,
                                    icon: "error"
                                });
                            }
                        });
                    });
                });
                </script>
            </div>
        </form>
    </div>
</div>


<script src="{{ asset("/assets/js/jquery-3.6.0.min.js") }}"></script>

<script src="{{ asset("/assets/js/feather.min.js") }}"></script>

<script src="{{ asset("/assets/js/jquery.slimscroll.min.js") }}"></script>

<script src="{{ asset("/assets/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/assets/js/dataTables.bootstrap4.min.js") }}"></script>

<script src="{{ asset("/assets/js/bootstrap.bundle.min.js") }}"></script>

<script src="{{ asset("/assets/plugins/select2/js/select2.min.js") }}"></script>

<script src="{{ asset("/assets/plugins/sweetalert/sweetalert2.all.min.js") }}"></script>
<script src="{{ asset("/assets/plugins/sweetalert/sweetalerts.min.js") }}"></script>

<script src="{{ asset("/assets/js/script.js") }}"></script>

<script>
     $("#dashboard").removeClass("active");
     $("#blogs").addClass("act");

    $(document).ready(function() {
        $('#form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '/updateblog',
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Success",
                        text: "Blog Added Successfully",
                        icon: "success"
                    });
                    $('#form').trigger("reset");
                    tinymce.get('blog_description').setContent('');
                },
                error: function(response) {
                    Swal.fire({
                        title: "Error",
                        text: response.responseJSON.message,
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
</body>
</html>
