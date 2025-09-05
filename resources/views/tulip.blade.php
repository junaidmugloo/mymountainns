<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tulip Festival</title>
    
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
  
  <div class="container" id="con" style=" margin-top:20vh;">
     <div class="d-flex lip">
    <div class="image-section">
     <section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide"><img src="{{asset('assets/img/tulip-garden.jpg')}}"></li>
			<li class="splide__slide"><img src="{{asset('assets/img/tulip-garden.jpg')}}"></li>
			<li class="splide__slide"><img src="{{asset('assets/img/tulip-garden.jpg')}}"></li>
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
      <div class="form-header">Tulip Festival</div>
      
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
        <div class="col-md-12"><p>Tulip Festival in Srinagar is a grand affair of natural beauty where flower beds are scattered upon several terraces. Your trip to Kashmir in April 2025 would not be considered complete without visiting Asia’s most extensive Tulip Garden. This magnificent festival in Srinagar is celebrated every year with full fervor and joy. The Floriculture Department organizers announced plans to plant 1.5 million tulip bulbs of 62 varieties in 2025 Tulip Garden. The picturesque garden sprawls over 30 hectares. In short, the Tulip Festival in 2025 will take your breath away!

This is a detailed guide for Tulip Festival Kashmir for you to decide whether to visit or not and, if yes, what to expect.</p>
            <h2>Starting and Ending Dates of Tulip Festival in 2025</h2>
            <p>Tulip Festival is hosted in Kashmir Valley during the onset of the Spring Season. You can get ready to be a part of it in April 2025 as the festival will commence from 3rd April to 20th April 2025.</p>
            <h2>Timings of Tulip Garden
</h2><p>The Tulip Garden opens at 8 am and closes at 7 pm.</p>
            <h2>Entry Fee at Tulip Garden in 2025</h2>
            <p>The entry fee to the garden is INR 25 for children and INR 60 for adults.</p>
            <h2>Major Highlights of the Tulip Festival in 2025</h2>
            <p>Tulip Festival 2025 is a must-attend event for flower enthusiasts, nature lovers, fans, aficionados, tulip lovers, and tourists worldwide. There are many varieties of these amazing flowers; some are mentioned below. Let’s see how many of them you can find at the Tulip Festival.</p>
            <ul>
                <li><span class="fw-bold">Standard Tulips</span>&nbsp;-These are the normal tulips available from florists to local gardens.</li>
                <li><span class="fw-bold">Double Bloom</span>&nbsp;-Instead of a single petal of a standard tulip, the double bloom has many layers.</li>
                <li><span class="fw-bold">Parrot Tuplips</span>&nbsp;-They appear as ruffled petals in various hues depicting the plumage of tropical parrot.</li>
                <li><span class="fw-bold">Fringed Tulips</span>&nbsp;-The edges and shape are frilly and fringed.</li>
                <li><span class="fw-bold">Bi-Color Standard Tulips</span>&nbsp;-They display a variation in terms of color when compared with the standard tulip.</li>
                <li><span class="fw-bold">Rembrandt</span>&nbsp;-pale-colored tall tulips</li>
                 <li><span class="fw-bold">Fosteriana Tulips</span>&nbsp;-They vary in height and have pretty buds.</li>
                 <li><span class="fw-bold">Lily-Flowering Tulips</span>&nbsp;- These flowers have long, pointed petals with an arch at the tips.
</li>
                 <li><span class="fw-bold">Single Late Tulips</span> &nbsp;-Stunning cup-shaped tulips with the widest range of colors</li>
            </ul>
             <h2>What’s special about the Tulip Festival Srinagar of 2025?</h2>
            <p>There are some added attractions in the Tulip Festival of 2025. Nature has bestowed the garden with more varieties of flowers this year. Moreover, visitors can benefit from surplus facilities like free Wi-Fi, more fountains, washrooms (separate for the specially-abled persons), and drinking points.</p>
            <p>More green spaces are included in the garden area keeping in mind the comforts of the tourists. Extra plants like daffodils, hyacinths, narcissus, and other ornamental plants are planted to ornate the area. In addition, the water channels running through the terraces will add charm to the g</p>
            <p>Visitors will now be able to buy souvenirs and savor Kashmiri dishes from outside the garden area. This will be possible because of the decorated stalls and kiosks exhibiting the cuisine and handicrafts of Kashmir.</p>
            <p>If you want to witness the beautiful Tulip Garden and explore the city, book Kashmir tour packages with Indian Holiday for a smooth and memorable travel experience.</p>
            <h3>Places to visit near Tulip Garden Srinagar</h3>
            <p>The prime location of the Tulip Garden makes it the most visited place in Srinagar. This park is surrounded by scenic hills, attractive gardens of the Mughal era, and most importantly, it overlooks the awe-inspiring Dal Lake. Given below are some other attractions that lie nearby</p>
             <ul>
                <li><span class="fw-bold">Chashme Shahi Garden – </span> &nbsp;This garden is the center of attraction for housing a natural spring that flows from it.</li>
                <li><span class="fw-bold">Pari Mahal –</span>&nbsp;Overlooking the amazing Chashm-E-Shahi Gardens, this historic monument was once a Buddhist Monastery.</li>
                <li><span class="fw-bold">Shankaracharya Temple – </span>&nbsp;Soak in the beauty of the snow-laden Pin Panjal Range from this age-old temple situated at 1100 feet.</li>
                 <li><span class="fw-bold">Dal Lake –</span>&nbsp;Dal Lake is truly a paradise on Earth. The beauty of this breathtaking lake is beyond description. A Shikara Ride is a must here.</li>
                 <li><span class="fw-bold">Nishat Gardens – </span> Spotted at a distance of 3.2 km from Tulip Garden, Nishat Bagh is home to long avenues of Cypress and Chinar trees, rare flowers, and fountains.</li>
                
            </ul>
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