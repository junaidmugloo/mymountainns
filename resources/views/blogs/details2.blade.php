<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">   
<meta name="title" content="{{$blog->slug}} | Joy Tour & Travel">
<meta name="description" content='{!! Str::limit(strip_tags($blog->content), 100) !!}'>
<meta name="keywords" content="Winter in Kashmir, Kashmir travel, Gulmarg skiing, snow in Kashmir, Kashmiri cuisine, adventure sports, winter tourism, Dal Lake, Pahalgam, Gondola ride">
<meta name="author" content="Junaid Mugloo">
<meta name="robots" content="index, follow">
<meta property="og:title" content="{{$blog->slug}}">
<title>{{$blog->slug}}</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  

<style>
  .swal-button{
  background: #e34506 !important;
}
.swal-button:hover{
  background: #e34506ba !important;
}
.swal-icon--success__ring{
  border: solid #e34506 4px !important;
}
.swal-icon--success__line{
  background: #e34506ba !important;
}
  .container {
  display: flex;
  max-width: 1200px;
  margin: 0 auto;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  margin-bottom: 2rem;
}

@media (max-width: 576px) {
  .lip {
    flex-direction: column;
    width: 100%!important;
  }
}

@media (max-width: 576px) {
  #con {
    width: 100%;
    padding: 0;
    margin: 0!important;
  }
}

@media (max-width: 576px) {
  .image-section {
    height: 80vh;
    z-index: 2;
    object-fit: cover;
  }
}

.image-section {
  flex: 2;
  position: relative;
}

.image-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media (max-width: 576px) {
  .date-location-info {
    display: none!important;
  }
}

.date-location-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(255, 255, 255, 0.9);
  display: flex;
  padding: 15px;
}

.info-item {
  flex: 1;
  display: flex;
  align-items: center;
}

.info-icon {
  color: #e95420;
  font-size: 24px;
  margin-right: 15px;
}

.info-content h3 {
  color: #555;
  font-weight: normal;
  margin-bottom: 5px;
}

.info-content p {
  font-weight: bold;
  color: #333;
}

.form-section {
  flex: 1;
  background-color: #f9f9f9;
  padding: 20px;
}

.form-header {
  background-color: #e95420;
  color: white;
  padding: 15px;
  margin: -20px -20px 20px;
  font-size: 24px;
  font-weight: bold;
}

.form-group {
  margin-bottom: 15px;
}

.form-control {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 14px;
}

.phone-input {
  display: flex;
}

.country-code {
  display: flex;
  align-items: center;
  background: white;
  border: 1px solid #ddd;
  border-radius: 4px 0 0 4px;
  padding: 0 10px;
  border-right: none;
}

.country-code img {
  width: 20px;
  margin-right: 5px;
}

.phone-number {
  flex: 1;
  border-radius: 0 4px 4px 0;
}

.form-row {
  display: flex;
  gap: 15px;
}

.form-row .form-group {
  flex: 1;
}

.form-icon {
  width: 16px;
  height: 16px;
  margin-left: 5px;
}

textarea.form-control {
  resize: vertical;
  min-height: 100px;
}

.submit-btn {
  width: 100%;
  background-color: #e95420;
  color: white;
  border: none;
  padding: 15px;
  font-size: 18px;
  border-radius: 30px;
  cursor: pointer;
  margin-top: 10px;
  font-weight: bold;
}

@media only screen and (max-width: 768px) {
  body {
    padding: 15px;
  }
}

@media only screen and (max-width: 768px) {
  body {
    padding: 15px;
  }
}

#container {
  padding: 2rem;
  margin-top: 1rem;
}

#container h2 {
  color: black;
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 2rem;
  margin-top: 2rem;
}

#container ul {
  line-height: 35px;
}

li {
  list-style-type: circle;
}
@media (max-width: 768px) {
           
         
           .fxs{
               font-size: 0.8rem;
           }
       }

</style>
</head>

<body>
  @include('nav')
  @include('pop')

  <div class="container" id="con" style=" margin-top:20vh;">
     <div class="d-flex lip">
    <div class="image-section">
     <section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide"><img src="{{asset('blog_images/'.$blog->image)}}"></li>
		</ul>
  </div>
</section>
      <div class="date-location-info">
        <div class="info-item">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#e95420">
              <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"/>
            </svg>
          </div>
          <div class="info-content">
            <h3>Dates :</h3>
            <p>03/04/2024 – 20/04/2025</p>
          </div>
        </div>
        <div class="info-item">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#e95420">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <div class="info-content">
            <h3>Location :</h3>
            <p>Srinagar</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="form-section">
      <form action="post" id="tform21">
      <div class="form-header">{{$blog->title}}</div>
      
      <div class="form-group">
        <input type="text" name="name"  class="form-control" placeholder="Type your name *">
      </div>
      
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Type your email address *">
      </div>
      
      <div class="form-group">
        <div class="phone-input">
          <div class="country-code">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 900 600">
              <rect fill="#f93" width="900" height="200"/>
              <rect fill="#fff" width="900" height="200" y="200"/>
              <rect fill="#128807" width="900" height="200" y="400"/>
              <circle fill="#008" cx="450" cy="300" r="80"/>
            </svg>
            <span>+91</span>
          </div>
          <input type="tel" name="contact" required class="form-control phone-number" placeholder="Mobile No. *">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group">
          <input type="date" name="date" class="form-control" placeholder="Travel Date">
          <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#666">
            <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
          </svg>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="No. of Person">
          <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#666">
            <path d="M7 10l5 5 5-5z"/>
          </svg>
        </div>
      </div>
      
      <div class="form-group">
        <textarea class="form-control" placeholder="Additional Information (Optional)"></textarea>
      </div>
      
      <button type="submit" class="submit-btn">SUBMIT NOW</button>
    </form>
    </div>
     </div>
  </div><div class="container" id="container">
    <div class="row">
        <div class="col-md-12">
            {!!$blog->content!!}
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      var splide = new Splide( '.splide' );
      splide.mount();
    </script>


<script>
  
$("#tform21").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/sendmail2',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
      
      $("#tform21 button").prop('disabled', true);
             
                           },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tform21').trigger("reset");
                      $("#tform21 button").prop('disabled', false);
             
                
                       },
                       error: function(response) {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                       $("#tform21 button").prop('disabled', false);
             
                      $('#tform21').trigger("reset");
                       }
                   });

});

</script>
</body>

</html>