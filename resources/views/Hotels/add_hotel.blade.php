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
<h4>Add Hotel</h4>
<h6>Create Hotel</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Hotel Name</label>
<input type="text" name="name" required id="validationTooltip04">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
  <div class="form-group">
  <label>Hotel Address</label>
  <input type="text" name="address" required id="validationTooltip04">
  </div>
 </div>

    <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>Hotel Stars</label>
     <select name="stars" id="" class="form-control">
        <option value="">Select Rating</option>
        <option value="2" class="text-warning">★★</option>
        <option value="3" class="text-warning">★★★</option>
        <option value="4" class="text-warning">★★★★</option>
        <option value="5" class="text-warning">★★★★★</option>
     </select>
    </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-12">
        <div class="form-group">
        <label>Single Room Price</label>
        <input type="text" name="single_room" required id="validationTooltip04">
        </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-12">
      <div class="form-group">
      <label>Double Room Price</label>
      <input type="text" name="double_room" required id="validationTooltip04">
      </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>Extra Bed Price</label>
    <input type="text" name="extra_bed" required id="validationTooltip04">
    </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label >Extra Child</label><small style="font-size: 0.7rem;" class="p-0 m-0">Without Bed</small>
    <input type="text" name="extra_child" required id="validationTooltip04">
    </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label >infant</label><small style="font-size: 0.7rem;" class="p-0 m-0">(0-5 years)</small>
    <input type="text" name="infant" required id="validationTooltip04">
    </div>
   </div>
   <hr>
   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>MAP </label>
    <input type="text" name="MAP" required id="validationTooltip04">
    </div>
   </div>
   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>CP </label>
    <input type="text" name="CP" required id="validationTooltip04">
    </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>EP</label>
    <input type="text" name="EP" value="0" required id="validationTooltip04">
    </div>
   </div>










</div>




<div class="col-lg-12">
<button type="submit"  id="hbt" class="btn btn-submit me-2">Submit</a>
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
  
<!-- Edit Modal -->
<!-- Edit Hotel Modal -->
<div class="modal fade" id="editHotelModal" tabindex="-1" aria-labelledby="editHotelModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form id="editHotelForm">
        @csrf
        <input type="hidden" name="id" id="hotel_id">
        <div class="modal-header">
          <h5 class="modal-title">Edit Hotel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body row">

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Hotel Name</label>
              <input type="text" name="name" id="edit_name" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Hotel Address</label>
              <input type="text" name="address" id="edit_address" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Hotel Stars</label>
              <select name="stars" id="edit_stars" class="form-control">
                <option value="">Select Rating</option>
                <option value="2">★★</option>
                <option value="3">★★★</option>
                <option value="4">★★★★</option>
                <option value="5">★★★★★</option>
              </select>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Single Room Price</label>
              <input type="text" name="single_room" id="edit_single_room" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Double Room Price</label>
              <input type="text" name="double_room" id="edit_double_room" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Extra Bed Price</label>
              <input type="text" name="extra_bed" id="edit_extra_bed" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Extra Child <small>(Without Bed)</small></label>
              <input type="text" name="extra_child" id="edit_extra_child" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
              <label>Infant <small>(0-5 years)</small></label>
              <input type="text" name="infant" id="edit_infant" class="form-control" required>
            </div>
          </div>

          <hr>

          <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
              <label>MAP</label>
              <input type="text" name="MAP" id="edit_map" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
              <label>CP</label>
              <input type="text" name="CP" id="edit_cp" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
              <label>EP</label>
              <input type="text" name="EP" id="edit_ep" class="form-control" value="0" required>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- modelbox end --}}



  <div class="table-responsive p-3">
  <table class="table datanew">
  <thead>
  <tr>
  
  
  <th>Name</th>
  <th>Stars</th>
  <th>Address</th>
  <th>Single room</th>
  <th>Double room</th>
  <th>Extra bed</th>
  <th>Extra Child</th>
  <th>Infant</th>
  <th>MAP</th>
  <th>CP</th>
  <th>EP</th>
  <th>Options</th>
  </tr>
  </thead>
  <tbody>
  
  @foreach ($hotels as $s)
      
  
      <tr>
  
  
  <td>{{$s->name}}</td>
  <td>{{$s->stars}}</td>
  <td>{{$s->address}}</td>
  <td>{{$s->single_room}}</td>
  <td>{{$s->double_room}}</td>
  <td>{{$s->extra_bed}}</td>
  <td>{{$s->extra_child}}</td>
  <td>{{$s->infant}}</td>
  <td>{{$s->MAP}}</td>
  <td>{{$s->CP}}</td>
  <td>{{$s->EP}}</td>
  <td>
      <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <a class="me-3" href="/editfaq/{{$s->id}}">
  <img src="assets/img/icons/edit.svg" alt="img">
  </a> --}}
  <a onclick="Delete('{{$s->id}}')" class="me-3 confirm-text" href="javascript:void(0);">
  <img src="assets/img/icons/delete.svg" alt="img">
  </a>
  <a href="javascript:void(0);" class="me-3" onclick="editHotel({{ $s }})">
    <img src="assets/img/icons/edit.svg" alt="Edit">
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
  // edit hotel
  function editHotel(data) {
    $('#hotel_id').val(data.id);
    $('#edit_name').val(data.name);
    $('#edit_address').val(data.address);
    $('#edit_stars').val(data.stars);
    $('#edit_single_room').val(data.single_room);
    $('#edit_double_room').val(data.double_room);
    $('#edit_extra_bed').val(data.extra_bed);
    $('#edit_extra_child').val(data.extra_child);
    $('#edit_infant').val(data.infant);
    $('#edit_map').val(data.MAP);
    $('#edit_cp').val(data.CP);
    $('#edit_ep').val(data.EP);
  
    $('#editHotelModal').modal('show');
  }
  
  $('#editHotelForm').submit(function(e) {
    e.preventDefault();
    const id = $('#hotel_id').val();
    const formData = new FormData(this);
  
    $.ajax({
      url: '/edithotel/' + id,
      method: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        $('#editHotelModal').modal('hide');
        Swal.fire("Success", "Hotel updated successfully", "success");
        window.location.reload();
      },
      error: function(xhr) {
        Swal.fire("Error", "Failed to update hotel", "error");
      }
    });
  });
  </script>
  
<script>















  $("#dashboard").removeClass("active");
  $("#hotel").addClass("act");

  
       $(document).ready(function(){
              $('#form').on('submit', function(event){
                    event.preventDefault();
                    var $button = $('#hbt'); // Cache the button
                    $button.prop('disabled', true).html(`<div class="spinner-border spinner-border-sm" role="status">
                                                             <span class="sr-only">Loading...</span></div>`);


                    var url = "/addhotel"
                    
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
  title: "Hotel",
  text: "Hotel Added Successfully",
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
//window.location.reload();
$button.prop('disabled', false).text('Submit');
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
        url: "addhotel/"+id,
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
      text: "Hotel has been deleted.",
      icon: "success"
    });
    
  }
});
    }







</script>
</body>
</html>