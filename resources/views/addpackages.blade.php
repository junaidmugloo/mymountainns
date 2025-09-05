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
  
</style>
<script src="https://cdn.tiny.cloud/1/e8sy33eyrerd5sf11rfkrp1gs22elbc6or3ds275j93opai7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
    
    //      toolbar: 'undo redo | formatselect | bold italic | color | backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat '
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

<style>
    .tox-statusbar__branding{
    display: none !important;
    }
    .bootstrap-tagsinput {
	margin: 0;
	width: 100%;
	padding: 0rem 0.75rem 0;
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

<div class="main-wrapper">

@include('components/topnav')


@include('components/sidenav')

<div class="page-wrapper">
<form method="post" novalidate id="form" enctype="multipart/form-data">
    @csrf
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Add Packages</h4>
<h6>Create Packages</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
        <div class="form-group">
        <label>Select Category</label>
        <select name="category" id="" class="form-select">
            <option value="" class="text-muted">Select Option</option>
            @foreach ($category as $c)
            <option value="{{$c->name}}">{{$c->name}}</option>  
            @endforeach
        </select>
        </div>
    </div>
    
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" required placeholder="Enter package name">
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>Tag Line</label>
    <input type="text" name="tag_line" required placeholder="Enter tag line">
    </div>
    </div>
    

<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Price</label>
<input type="text" name="price" required placeholder="Enter price">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Discount Price</label>
<input type="text"  name="discount_price" placeholder="Enter discount price">
</div>
</div>

<div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Days</label>
    <input type="text" name="day" required placeholder="Enter No.s of days">
    </div>
</div>
    <div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Nights</label>
    <input type="text"  name="night" placeholder="Enter No.s of Nights">
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-6">
        <div class="form-group">
        <label>Contact Number</label>
        <input type="text"  name="contact" value="9906786356" placeholder="Contact number">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-6">
      <div class="form-group">
      <label>Include</label>
      <textarea name="include" id=""></textarea>
      </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Exclude</label>
    <textarea name="exclude" id=""></textarea>
    </div>
  </div>

  <div class="col-lg-12 col-sm-12 col-12">
    <div class="form-group">
    <label>Terms</label>
    <textarea name="terms" id=""></textarea>
    </div>
 </div>


{{-- days  --}}
<div class="col-lg-12 col-sm-12 col-12 pt-2 mt-2 mb-2" id="dayContainer" style="border: solid rgb(94, 94, 94) 2px; border-radius: 10px;">
    <h4>Itinerary Details</h4>
    <div class="form-group">
    <label>Day 1</label>
    <input type="text" readonly name="days[0][index]" value="1">
    <input type="text" name="days[0][title]"  required placeholder="Enter Heading">
    <textarea  name="days[0][description]" class="form-control mt-2" required placeholder="Enter Details"></textarea>
    </div>
    <button type="button" class="btn btn-success btn-sm mb-2" id="addDay">Add Day +</button>
</div>

<div id="message"></div>

{{-- days end --}}




{{-- box --}}
<div id="optionsWrapper" style=" border: solid rgb(94, 94, 94) 2px; 
    border-radius: 10px;">
    <!-- Option blocks will appear here -->
  </div>
  
  <button type="button" class="btn btn-success btn-sm" onclick="addOptionBlock()">Add Option Block</button>
  
{{-- box end --}}
<script>
    const hotelOptions = @json($hotels);
</script>
<script>

let hotelSelectOptions = '';
    hotelOptions.forEach(hotel => {
        hotelSelectOptions += `<option value="${hotel.id}">${hotel.name}</option>`;
    });

    let optionIndex = 0;
    let optionBlocks = []; // Track existing option blocks
  
    function addOptionBlock() {
      const wrapper = document.getElementById('optionsWrapper');
      
      // Find the next available index (first gap or end of array)
      let nextIndex = 0;
      while (optionBlocks.includes(nextIndex)) {
        nextIndex++;
      }
      
      optionBlocks.push(nextIndex);
      
      const block = document.createElement('div');
      block.classList.add('option-block');
      block.setAttribute('data-index', nextIndex);
  
      // Only show remove button if it's not the first option block
      const removeButton = optionBlocks.length > 1 ? 
        `<button type="button" class="btn btn-danger btn-sm mb-2" onclick="removeOptionBlock(${nextIndex})">Remove Option</button>` : '';
  
      block.innerHTML = `
        <div class="d-flex justify-content-between align-items-center">
          <h4>Option ${optionBlocks.indexOf(nextIndex) + 1}</h4>
          ${removeButton}
        </div>

        <div class="form-group" id="hotelContainer-${nextIndex}">
          ${generateHotelFields(nextIndex, 0)}
        </div>
        <button type="button" class="btn btn-success btn-sm mb-2" onclick="addHotel(${nextIndex})">Add Night +</button>
      `;
  
      wrapper.appendChild(block);
      updateOptionLabels();
    }
  
    function generateHotelFields(optionId, hotelIndex) {
      return `
        <div class="hotel-field-group" id="hotel-${optionId}-${hotelIndex}">
          <div class="d-flex justify-content-between align-items-center">
            <label>Select Hotel ${hotelIndex + 1}</label>
            ${hotelIndex > 0 ? `<button type="button" class="btn btn-danger btn-sm" onclick="removeHotel(${optionId}, ${hotelIndex})">Remove Night</button>` : ''}
          </div>
          <select name="hotel[${optionId}][${hotelIndex}][title]" class="form-select">
            ${hotelSelectOptions}
          </select>
          <label>Number of Nights</label>
          <input type="text" name="hotel[${optionId}][${hotelIndex}][nights]" class="form-control" required placeholder="Enter number of nights">
          <hr>
        </div>
      `;
    }
  
    function addHotel(optionId) {
      const container = document.getElementById(`hotelContainer-${optionId}`);
      const hotelCount = container.querySelectorAll(".hotel-field-group").length;
      container.insertAdjacentHTML('beforeend', generateHotelFields(optionId, hotelCount));
    }
    
    function removeHotel(optionId, hotelIndex) {
      const hotelElement = document.getElementById(`hotel-${optionId}-${hotelIndex}`);
      if (hotelElement) {
        hotelElement.remove();
        
        // Reindex remaining hotels to maintain sequence
        const container = document.getElementById(`hotelContainer-${optionId}`);
        const hotelGroups = container.querySelectorAll('.hotel-field-group');
        
        hotelGroups.forEach((group, index) => {
          // Update the ID
          group.id = `hotel-${optionId}-${index}`;
          
          // Update the label
          const label = group.querySelector('label');
          if (label) {
            label.textContent = `Select Hotel ${index + 1}`;
          }
          
          // Update the remove button if it exists
          const removeBtn = group.querySelector('button');
          if (removeBtn && index > 0) {
            removeBtn.setAttribute('onclick', `removeHotel(${optionId}, ${index})`);
          }
          
          // Update the input names
          const select = group.querySelector('select');
          if (select) {
            select.name = `hotel[${optionId}][${index}][title]`;
          }
          
          const inputs = group.querySelectorAll('input[type="date"]');
          if (inputs.length >= 2) {
            inputs[0].name = `hotel[${optionId}][${index}][checkin]`;
            inputs[1].name = `hotel[${optionId}][${index}][checkout]`;
          }
        });
      }
    }
    
    function removeOptionBlock(index) {
      const block = document.querySelector(`.option-block[data-index="${index}"]`);
      if (block) {
        block.remove();
        
        // Remove the index from our tracking array
        const indexPosition = optionBlocks.indexOf(index);
        if (indexPosition !== -1) {
          optionBlocks.splice(indexPosition, 1);
        }
        
        // Update option labels to be sequential
        updateOptionLabels();
        
        // Update remove buttons (first option should not have a remove button)
        updateRemoveButtons();
      }
    }
    
    function updateOptionLabels() {
      // Update all option block labels to be sequential
      const blocks = document.querySelectorAll('.option-block');
      blocks.forEach((block, displayIndex) => {
        const headerElement = block.querySelector('h4');
        if (headerElement) {
          headerElement.textContent = `Option ${displayIndex + 1}`;
        }
      });
    }
    
    function updateRemoveButtons() {
      // Only the first option block should not have a remove button
      const blocks = document.querySelectorAll('.option-block');
      blocks.forEach((block, index) => {
        const buttonContainer = block.querySelector('.d-flex.justify-content-between');
        if (buttonContainer) {
          const existingButton = buttonContainer.querySelector('button');
          if (existingButton) {
            existingButton.remove();
          }
          
          if (index > 0) {
            const dataIndex = block.getAttribute('data-index');
            const newButton = document.createElement('button');
            newButton.type = 'button';
            newButton.className = 'btn btn-danger btn-sm mb-2';
            newButton.onclick = function() { removeOptionBlock(dataIndex); };
            newButton.textContent = 'Remove Option';
            buttonContainer.appendChild(newButton);
          }
        }
      });
    }
  
    // Add one default block on load
    document.addEventListener('DOMContentLoaded', function() {
      // Only add default block if wrapper is empty
      if (document.getElementById('optionsWrapper').children.length === 0) {
        addOptionBlock();
      }
    });
</script>


<div style="border: solid rgb(94, 94, 94) 2px; border-radius: 10px;" class="mt-2 mb-2">
    <h4>Main Page</h4>
    <div class="col-lg-12 col-sm-12 col-12">
        <div class="form-group">
        <label>First</label>
        <input type="text"  name="D1"  placeholder="Eg. D1 srinagar">
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-12">
        <div class="form-group">
        <label>Second</label>
        <input type="text"  name="D2"  placeholder="Eg. D2 srinagar">
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-12">
        <div class="form-group">
        <label>Third</label>
        <input type="text"  name="D3"  placeholder="Eg. D3 srinagar">
        </div>
    </div>
</div>
    <div class="col-lg-12">
        <div class="form-group ">
        <label>Destination</label>
        <input type="text" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="destination">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
        <label>Start Route</label>
        <input type="text" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="start">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
        <label>End Route</label>
        <input type="text" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="end">
        </div>
    </div>

<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea  class="form-control" id="blog_description" placeholder="Enter description" name="description"></textarea>
</div>
</div>





</div>
<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file" name="package_image" onchange="previewImage(this)">
<div class="image-uploads">
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
<div class="mt-3 text-center" id="image_preview" style="display: none;">
    <img id="preview" src="" alt="Preview" style="max-width: 200px; border-radius: 5px;">
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
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

{{-- days --}}
<script>
    let dayIndex = 1;
    let dayBlocks = [0]; // Track existing day indices, starting with day 0

    $('#addDay').click(function () {
        let html = `
        <div class="form-group day-group" data-index="${dayIndex}">
            <div class="d-flex justify-content-between align-items-center">
                <label>Day ${dayIndex+1}</label>
                <button type="button" class="removeDay btn btn-danger btn-sm">Remove Day</button>
            </div>
            <input type="text" readonly name="days[${dayIndex}][index]" value="${dayIndex+1}">
            <input type="text" name="days[${dayIndex}][title]" required placeholder="Enter Heading">
            <textarea name="days[${dayIndex}][description]" class="form-control mt-2" required placeholder="Enter Details"></textarea>
        </div>
        `;
        $('#dayContainer').append(html);
        dayBlocks.push(dayIndex);
        dayIndex++;
    });

    $(document).on('click', '.removeDay', function () {
        const dayGroup = $(this).closest('.day-group');
        const removedIndex = parseInt(dayGroup.attr('data-index'));
        
        // Remove from DOM
        dayGroup.remove();
        
        // Remove from tracking array
        const indexPosition = dayBlocks.indexOf(removedIndex);
        if (indexPosition !== -1) {
            dayBlocks.splice(indexPosition, 1);
        }
        
        // Update day labels to be sequential
        updateDayLabels();
    });
    
    function updateDayLabels() {
        // Update all day labels to be sequential
        $('.day-group').each(function(displayIndex) {
            const actualIndex = parseInt($(this).attr('data-index'));
            const dayNumber = displayIndex + 2; // +2 because we start with day 1 and this loop starts with the second day
            
            $(this).find('label').text(`Day ${dayNumber}`);
            $(this).find('input[readonly]').val(dayNumber);
        });
    }

    // option
    let option=1;
    
    $('#addOption').click(function () {
        let html = `
        <div class="form-group optionGroup">
    <label>Select Hotel ${option+1}</label>
    <select name="hotel[${option}]['title']" id="" class="form-select">
        <option value="">A</option>
        <option value="">B</option>
        <option value="">C</option>
    </select>
    <label>Check In</label>
    <input type="date" name="hotel[${option}][checkin]" class="form-control" required placeholder="Enter Details">
    <label>Check Out</label>
    <input type="date" name="hotel[${option}][checkout]" class="form-control" required placeholder="Enter Details">
     <button type="button" class="removeNight btn btn-danger btn-sm mt-2">Remove Night -</button>
    </div>
    `;
        $('#optionContainer').append(html);
        option++;
    });

    $(document).on('click', '.removeNight', function () {
        $(this).closest('.optionGroup').remove();
        option--;
    });
</script>


{{-- days --}}
<script>
    function previewImage(input) {
        const preview = document.getElementById('preview');
        const imagePreview = document.getElementById('image_preview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                imagePreview.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    // Show existing image on page load
    document.addEventListener('DOMContentLoaded', function() {
        const imagePreview = document.getElementById('image_preview');
        if (document.getElementById('preview').src) {
            imagePreview.style.display = 'block';
        }
    });
    </script>

<script>

$("#dashboard").removeClass("active");
$("#packages").addClass("act");





  
       $(document).ready(function(){

    
$('input[name="destination"]').tagsinput({
    trimValue: true,
    confirmKeys: [44],
    focusClass: 'my-focus-class'
});

$('.bootstrap-tagsinput input').on('focus', function() {
    $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
}).on('blur', function() {
    $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
});


















              $('#form').on('submit', function(event){
                    event.preventDefault();

                    var url = "/addpackages"
                    
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
                                text: "Banner Added Successfully", 
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = '/viewpackages';
                                }
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