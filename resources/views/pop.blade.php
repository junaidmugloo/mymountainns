<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

{{-- model auto --}}

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"   style="background:linear-gradient(93deg,#ff7b26,#ec048c);">
             
        
        <div class="HeaderSaleLine_saleIcon__pwEFh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg></div>
        <p id="mdh" class="m-0 p-0"></p>
          <button type="button" class="btn-close" onclick="clear_head()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="mx-3" style="font-weight:600;">Save up to <x style="color:#F37002;">50% OFF</x></h5>
          <h6 class="mx-3 mb-4" style="font-size:0.8rem;">We’ll be needing some of your basic details to help you better with your trip</h6>
          <form action="" id="tform" style=" justify-content: center;
            display: flex !important;">
            @csrf
            <div class="row w-100 h-100">
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="hidden" name="package" id="packagename" value="" class="form-control" >
                  <input type="text" name="name" required class="form-control" placeholder="Enter Full Name">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="tel" name="contact" required class="form-control" placeholder="Your Phone">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="date"  id="myDate2"  name="date"  class="form-control" placeholder="Travel Data">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="number" name="persons"  class="form-control" placeholder="Travel Count">
                </div>
              </div>
  
              <div class="col-12">
                <div class="form-group mb-3">
                  <textarea type="text" name="message"  class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <button  style="background:#e34506;" class="btn text-light d-block w-100">Connect with and
                    Experts</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- model auto close --}}






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
   setTimeout(function(){
       $('#exampleModal').modal('show');
   }, 5000);
});



$("#tform").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
       
$("#tform button").prop('disabled', true);
       
                     },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform').trigger("reset");
                     
                      $("#tform button").prop('disabled', false);
  
                       },
                       error: function(response) {
                        swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform').trigger("reset");
                     
                      $("#tform button").prop('disabled', false);
                     
                       }
                   });

});
    </script>
</body>
</html>