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
<h6>Update Package</h6>
</div>
</div>

<div class="card">
<div class="card-body">
   

<input type="hidden" name="id" value="{{$package->id}}">
<div class="row">
    <div class="col-lg-12 col-sm-12 col-12">
    <div class="form-group">
    <label>Select Category</label>
    <select name="category" id="" class="form-select">
        <option value="{{$package->category}}" class="text-muted">{{$package->category}}</option>
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
<input type="text" value="{{$package->name}}" name="name" required placeholder="Enter package name">
</div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-12">
    <div class="form-group">
    <label>Tag Line</label>
    <input type="text" value="{{$package->tag_line}}" name="tag_line" required placeholder="Enter tag line">
    </div>
</div>

<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Price</label>
<input type="text" value="{{$package->price}}" name="price" required placeholder="Enter price">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Discount Price</label>
<input type="text"  name="discount_price" value="{{$package->discount}}" placeholder="Enter discount price">
</div>
</div>

<div class="col-lg-6 col-sm-6 col-6">
<div class="form-group">
<label>Days</label>
<input type="text" name="day" value="{{$package->day}}" required placeholder="Enter No.s of days">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
<div class="form-group">
<label>Nights</label>
<input type="text"  name="night" value="{{$package->night}}" placeholder="Enter No.s of Nights">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Contact Number</label>
    <input type="text" value="{{$package->contact}}"  name="contact" placeholder="Contact number">
    </div>
</div>


<div class="col-lg-6 col-sm-6 col-6">
  <div class="form-group">
  <label>Include</label>
  <textarea name="include" id="">{{$package->include}}</textarea>
  </div>
</div>

<div class="col-lg-6 col-sm-6 col-6">
<div class="form-group">
<label>Exclude</label>
<textarea name="exclude" id="">{{$package->exclude}}</textarea>
</div>
</div>

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Terms</label>
<textarea name="terms" id="">{{$package->terms}}</textarea>
</div>
</div>


{{-- days  --}}



{{-- box --}}
<div id="optionsWrapper" style="border: solid rgb(94, 94, 94) 2px; 
    border-radius: 10px;">
    <!-- Option blocks will appear here -->
</div>
  
<button type="button" class="btn btn-success btn-sm" onclick="addOptionBlock()">Add Option Block</button>
  
{{-- box end --}}
<script>
    const hotelOptions = @json($hotels);
    const existingOptions = @json($options);
     console.log(existingOptions);
    console.log(hotelOptions);
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
  
    function generateHotelFields(optionId, hotelIndex, hotelData = null) {
      let selectedHotel = '';
      let nights = '';
      let option_index = optionId;
  
      if (hotelData) {
        selectedHotel = hotelData.hotel_id;
        nights = hotelData.nights || '';
        option_index = hotelData.option_index !== undefined ? hotelData.option_index : optionId;
      }
  
      return `
        <div class="hotel-field-group" id="hotel-${optionId}-${hotelIndex}">
          <div class="d-flex justify-content-between align-items-center">
            <label>Select Hotel ${hotelIndex + 1}</label>
            ${hotelIndex > 0 ? `<button type="button" class="btn btn-danger btn-sm" onclick="removeHotel(${optionId}, ${hotelIndex})">Remove Night</button>` : ''}
          </div>
          <input type="hidden" name="hotel[${optionId}][${hotelIndex}][option_index]" value="${option_index}">
          <select name="hotel[${optionId}][${hotelIndex}][hotel_id]" class="form-select">
            ${hotelOptions.map(hotel => `<option value="${hotel.id}" ${selectedHotel == hotel.id ? 'selected' : ''}>${hotel.name}</option>`).join('')}
          </select>
          <label>Number of Nights</label>
          <input type="text" name="hotel[${optionId}][${hotelIndex}][nights]" class="form-control" value="${nights}" required placeholder="Enter number of nights">
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
      const container = document.getElementById(`hotelContainer-${optionId}`);
      const hotelGroups = container.querySelectorAll('.hotel-field-group');
      if (hotelGroups.length <= 1) {
        // Prevent removing the last hotel field
        return;
      }
      const hotelElement = document.getElementById(`hotel-${optionId}-${hotelIndex}`);
      if (hotelElement) {
        hotelElement.remove();
  
        // Reindex remaining hotels to maintain sequence
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
            select.name = `hotel[${optionId}][${index}][hotel_id]`;
          }
  
          const nightsInput = group.querySelector('input[name^="hotel"]');
          if (nightsInput) {
            nightsInput.name = `hotel[${optionId}][${index}][nights]`;
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
    
    // Function to populate existing options from database
    function populateExistingOptions() {
      // Group options by option_index (already grouped in formattedOptions)
      const groupedOptions = existingOptions;
  
      Object.keys(groupedOptions).forEach(optionIndex => {
        const optionGroup = groupedOptions[optionIndex];
        const wrapper = document.getElementById('optionsWrapper');
        const block = document.createElement('div');
        block.classList.add('option-block');
        block.setAttribute('data-index', optionIndex);
        optionBlocks.push(parseInt(optionIndex));
        const removeButton = optionBlocks.length > 1 ? 
          `<button type="button" class="btn btn-danger btn-sm mb-2" onclick="removeOptionBlock(${optionIndex})">Remove Option</button>` : '';
        block.innerHTML = `
          <div class="d-flex justify-content-between align-items-center">
            <h4>Option ${optionBlocks.length}</h4>
            ${removeButton}
          </div>
          <div class="form-group" id="hotelContainer-${optionIndex}">
            <!-- Hotel fields will be added here -->
          </div>
          <button type="button" class="btn btn-success btn-sm mb-2" onclick="addHotel(${optionIndex})">Add Night +</button>
        `;
        wrapper.appendChild(block);
        const container = document.getElementById(`hotelContainer-${optionIndex}`);
        optionGroup.forEach((hotel, hotelIndex) => {
          container.insertAdjacentHTML('beforeend', generateHotelFields(optionIndex, hotelIndex, hotel));
        });
      });
      updateOptionLabels();
      if (optionBlocks.length > 0) {
        optionIndex = Math.max(...optionBlocks) + 1;
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      if (existingOptions && (Array.isArray(existingOptions) ? existingOptions.length > 0 : Object.keys(existingOptions).length > 0)) {
        populateExistingOptions(); // This will make all options visible if present
      } else {
        addOptionBlock();
      }
    });
</script>





<div class="col-lg-12 col-sm-12 col-12 pt-2 mt-2 mb-2" id="dayContainer" style="border: solid rgb(94, 94, 94) 2px; border-radius: 10px;">
    <h4>Itinerary Details</h4>
    <!-- Days will be populated dynamically -->
    <button type="button" class="btn btn-success btn-sm mb-2" id="addDay">Add Day +</button>
</div>

<div id="message"></div>

{{-- days end --}}



<div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Fisrt</label>
    <input type="text"  name="D1" value="{{$package->D1}}"  placeholder="Eg. D1 srinagar">
    </div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Second</label>
    <input type="text"  name="D2" value="{{$package->D2}}" placeholder="Eg. D2 srinagar">
    </div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Third</label>
    <input type="text"  name="D3" value="{{$package->D3}}"  placeholder="Eg. D3 srinagar">
    </div>
</div>





<div class="col-lg-12">
    <div class="form-group">
    <label>Destination</label>
    <input type="text" value="{{$package->destination}}" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="destination">
    </div>
</div>
<div class="col-lg-12">
    <div class="form-group">
    <label>Start Rout</label>
    <input type="text" value="{{$package->start}}" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="start">
    </div>
</div>
<div class="col-lg-12">
    <div class="form-group">
    <label>End Rout</label>
    <input type="text" value="{{$package->end}}" class="form-control" placeholder="Enter destination Sparate with , Eg Kashmir,Ladakh" name="end">
    </div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control" id="blog_description" placeholder="Enter description" name="description">
    {{$package->description}}
</textarea>
</div>
</div>




</div>
<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file" name="package_image"  onchange="previewImage(this)">
<div class="image-uploads">
<img src="{{asset('assets/img/icons/upload.svg')}}" alt="img" id="upload_icon">
<h4>Drag and drop a file to upload</h4>
</div>
<div class="mt-3 text-center" id="image_preview" style="display: none;">
    <img id="preview" src="/package_images/{{$package->image}}" alt="Preview" style="max-width: 200px; border-radius: 5px;">
</div>
</div>
</div>
</div>

<div class="col-lg-12">
<button type="submit" class="btn btn-submit me-2">Update</button>
<button onclick="window.history.back()" class="btn btn-cancel">Back</button>
</div>

<!-- Add this script before the closing </body> tag -->
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
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>-->

<script src="{{asset('assets/js/feather.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
   
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdn.tiny.cloud/1/e8sy33eyrerd5sf11rfkrp1gs22elbc6or3ds275j93opai7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

{{-- days --}}
<script>
    let dayIndex = 1;
    const existingDays = @json($days ?? []);

    // Function to populate existing days from database
    function populateExistingDays() {
        if (existingDays && existingDays.length > 0) {
            // Clear existing content except heading and button
            const dayContainer = document.getElementById('dayContainer');
            const heading = dayContainer.querySelector('h4');
            const addButton = dayContainer.querySelector('#addDay');
            dayContainer.innerHTML = '';
            dayContainer.appendChild(heading);
            
            existingDays.forEach(day => {
                const dayIndexValue = parseInt(day.day_index);
                
                let html = `
                <div class="form-group day-group" data-index="${dayIndexValue - 1}">
                    <div class="d-flex justify-content-between align-items-center">
                        <label>Day ${dayIndexValue}</label>
                        ${dayIndexValue > 1 ? `<button type="button" class="removeDay btn btn-danger btn-sm">Remove Day</button>` : ''}
                    </div>
                    <input type="text" readonly name="days[${dayIndexValue - 1}][index]" value="${dayIndexValue}">
                    <input type="text" name="days[${dayIndexValue - 1}][title]" value="${day.title}" required placeholder="Enter Heading">
                    <textarea name="days[${dayIndexValue - 1}][description]" class="form-control mt-2" required placeholder="Enter Details">${day.days}</textarea>
                </div>
                `;
                dayContainer.insertAdjacentHTML('beforeend', html);
                
                // Track the highest day index for adding new days
                if (dayIndexValue > dayIndex) {
                    dayIndex = dayIndexValue;
                }
            });
            
            // Add the button back
            dayContainer.appendChild(addButton);
        } else {
            // If no existing days, add a default day
            let html = `
            <div class="form-group day-group" data-index="0">
                <label>Day 1</label>
                <input type="text" readonly name="days[0][index]" value="1">
                <input type="text" name="days[0][title]" required placeholder="Enter Heading">
                <textarea name="days[0][description]" class="form-control mt-2" required placeholder="Enter Details"></textarea>
            </div>
            `;
            $('#dayContainer').prepend(html);
            dayIndex = 1;
        }
    }

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
        dayIndex++;
    });

    $(document).on('click', '.removeDay', function () {
        $(this).closest('.day-group').remove();
        // Don't decrement dayIndex as it would cause duplicate indices
    });
    
    // Initialize days on page load
    $(document).ready(function() {
        populateExistingDays();
    });
</script>


{{-- days --}}



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

<script>
    var id='{{$package->id}}'
  
       $(document).ready(function(){

        $('input[name="destination"]').tagsinput({
    trimValue: true,
    confirmKeys: [44], // Only use comma (44) for separation
    focusClass: 'my-focus-class'
});

$('.bootstrap-tagsinput input').on('focus', function() {
    $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
}).on('blur', function() {
    $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
});











              $('#form').on('submit', function(event){
                    event.preventDefault();
                 
                    var url = '/updatepackages'
                   
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
  title: "Package",
  text: "Package Updated Successfully",
  icon: "success",
  showConfirmButton: true,
  confirmButtonText: 'OK'
  }).then((result) => {
      if (result.isConfirmed) {
          window.location.href = '/viewpackages';
      } else {
        window.location.href = '/viewpackages';
      }
  });
                      

 
                    //   window.history.back();
                      
                 
                        },
                        error: function(response) {
                            console.log(response);
                            
                        //   console.log(response.responseJSON.message);
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
