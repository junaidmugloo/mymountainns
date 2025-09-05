



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Joy AI</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
.bx{
    font-size: 4vh;
}
.active{
    color: orange !important;
}
.active::after{
    background: orange !important;
    content: "";
    display: block;
    height: 3px;
   
}
.tab-pane::after{
    background: transparent !important; 
}
.nav-link{
    color: rgba(0, 0, 0, .54) ;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col-12 col-md-3"></div>
        <div class="col-12 col-md-6">
            <div class="card text-center rounded-0">
               <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="package_images/1711788685.jpg" style="object-fit: cover" height="400" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="package_images/1711788685.jpg"  style="object-fit: cover" height="400" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="package_images/1711788685.jpg"  style="object-fit: cover" height="400" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>






                
                
                
                <div class="card-body p-0">
                    
                    <div class="d-flex p-2 justify-content-start position-absolute  top-0 pt-2 text-light" style="width: -webkit-fill-available;">
                        <div class="">
                            <i class='bx bx-arrow-back'></i>
                        </div>
                        <div style="flex-grow:1!important" ></div>
                        <div class="">
                            <i class='bx bxs-phone '></i>
                        </div>
                        <div class="">
                            <i class='bx bxs-share-alt px-2'></i>
                        </div>
                      </div>
                    <p class="card-text">
                        <div class="container ">
                            <!-- Tabs Navigation -->
                            <ul class=" nav nav-tabs flex justify-content-evenly" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <i class='bx bx-home' ></i>
                                </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class='bx bx-location-plus'></i>
                                </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class='bx bx-building-house'></i>
                                </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="exp-tab" data-bs-toggle="tab" data-bs-target="#exp" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                   <svg data-v-7378495b="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.7 74.8" width="25" height="25" aria-label="nearby experience">
                                    <g stroke-width="1" fill="grey" stroke="grey" transform="translate(551.312 200.026)">
                                        <path d="M-515.2-127.1h-.7c-2.3-.3-4.2-1.8-5.1-3.9-.5-1.3-.6-2.7-.5-4.1l.1-7.4c.1-1.2 0-2.5-.4-3.7-.1-.3-.3-.6-.5-.9v.3c-.1.9-.5 1.7-1.1 2.4l-9 12.4c-1.2 1.9-2.9 3.5-4.9 4.4-2.1.8-4.6.2-6.1-1.5-1.7-2-1.7-4.8-.1-6.9.8-1.3 1.7-2.5 2.6-3.7 1.4-1.8 2.6-3.8 3.7-5.8 1.5-2.6 2.1-5.7 1.6-8.7-2 .8-4.2 1.2-6.4 1.1-3 .1-5.8-1.5-7.3-4.1-.5-1.3-.7-2.7-.6-4.1v-16.2c-.1-1.4.1-2.7.6-4 1.5-2.9 4.5-4.6 7.8-4.5 2.4-.1 4.7.7 6.5 2.3.5-.7 1.1-1.3 1.7-1.7-2-2.1-2.8-5.1-2-7.9 1.3-3.5 4.8-5.8 8.5-5.6 3.8.1 7 2.8 7.7 6.5.1 3.4-1.5 6.6-4.2 8.6l7.2 4.5c.7.5 1.4.9 2.2 1.2 2.1.6 4.3.7 6.4.3h.1c2.9-.5 5.9-.3 8.6.7 1.4.6 2.6 1.8 3.3 3.2.6 1.2.6 2.7 0 3.9-.9 1.6-2.3 2.7-4 3.2-2.8.8-5.8 1-8.7.7h-2c-2 .1-4-.1-6-.5-1.9-.6-3.7-1.5-5.3-2.7l-1.5-1v6.3c0 .3 0 .5.1.8.2.3.5.5.8.7l8.8 6.1c1.1.7 2.1 1.6 2.8 2.7.6 1.2.9 2.6.8 3.9.1 5.5.1 11.1.1 16.6.1 1-.1 2.1-.4 3-.9 1.9-2.9 3.2-5.2 3.1zm-8.9-23.6l.8.2c1.9.4 3.4 1.7 4.1 3.5.5 1.5.6 3 .5 4.5l-.1 7.4c-.1 1.1 0 2.2.4 3.3.5 1.2 1.6 2.1 2.9 2.3 1.2.2 2.4-.4 3-1.5.2-.7.3-1.4.3-2.1 0-5.5 0-11-.1-16.5.1-1-.1-1.9-.5-2.8-.5-.8-1.2-1.4-2-1.8l-8.8-6.1c-.6-.4-1.2-.9-1.6-1.6-.2-.6-.3-1.2-.3-1.8V-174l1.9.8c1.4.6 2.6 1.3 3.8 2.2 1.3 1 2.8 1.8 4.4 2.3 1.8.4 3.5.5 5.3.5h2c2.6.3 5.2.1 7.7-.6 1-.3 1.9-1 2.4-1.9.3-.6.3-1.4 0-2-.4-.9-1.1-1.5-2-1.9-2.3-.8-4.8-.9-7.2-.5h-.1c-2.6.5-5.3.3-7.8-.5-.9-.4-1.8-.8-2.6-1.4l-10-6.2 1.3-1.1c3.3-2.7 4.8-5.2 4.5-7.6-.5-2.5-2.6-4.3-5.2-4.4-2.6-.1-4.9 1.5-5.8 3.9-.7 2.4.3 5 2.4 6.4l1.9 1.3-2.1.9c-1.5.6-2.6 1.8-2.9 3.4l-1.2 5.8-1.5-5.7c-.5-1.9-3.1-3-5.3-3-2.2-.1-4.2 1-5.3 2.9-.3 1-.5 2.1-.4 3.1v16.2c-.1 1.1.1 2.1.4 3.1 1.1 1.7 2.9 2.6 4.9 2.6 2.3-.1 4.6-.6 6.8-1.5l1.2-.4.4 1.1c1.3 3.9.8 8.3-1.3 11.8-1.2 2.1-2.5 4.1-3.9 6-.8 1.2-1.7 2.4-2.5 3.6-1.6 2.4-.5 3.7-.1 4.1.8.8 2 1.1 3 .7 1.5-.8 2.8-2 3.7-3.5l9-12.4c.3-.4.6-.8.6-1.2 0-.2 0-.4-.1-.7-.3-.8-.1-1.7.4-2.5l.7-.4z"></path><path d="M-536-182.1h2.7v26.4h-2.7z"></path><path d="M-522.6-147.9c-5-.7-9.7-3.2-13.1-7l2.1-1.5-1.1.8 1.1-.8c3 3.3 6.9 5.4 11.3 6.1l-.3 2.4z"></path><path d="M-524.3-181.5c-4.5-.3-8.6-2.8-10.9-6.7l2.4-1c1.8 3.1 5.1 5.1 8.7 5.3l-.2 2.4z"></path><path d="M-548.5-173.8h13.9v2.5h-13.9z"></path>
                                    <path d="M-503.6-167.1l.9 40.5-2.7.1-.9-40.5 2.7-.1z"></path></g></svg>
                                </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bus-tab" data-bs-toggle="tab" data-bs-target="#bus" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class='bx bx-bus'></i>
                                </button>
                              </li>
                            </ul>
                          
                            <!-- Tabs Content -->
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="p-2">
                                   
                                    aspernatur ipsam maxime illum saepe quasi tempore
                                     dolore velit quis dicta sint eum!
                                     Lorem ipsum dolor sit amet consectetur adipisicing 
                                    elit. Aliquam deserunt incidunt, mollitia perspiciatis 
                                    non unde alias numquam 
                                    aspernatur ipsam maxime illum saepe quasi tempore
                                     dolore velit quis dicta sint eum!

                                </p>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <img src="assets/img/bookings/location.svg" alt="" srcset="">
                                <p>No spot found.</p>
                                <a href="" class=" pb-3">Retry</a>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <img src="assets/img/bookings/hotel.svg" alt="" srcset="">
                                <p>No hotel found.</p>
                                <a href="" class=" pb-3">Retry</a>
                              </div>

                              <div class="tab-pane fade" id="exp" role="tabpanel" aria-labelledby="exp-tab">
                                <img src="assets/img/bookings/exp.svg" alt="" srcset="">
                                <p>No exp found.</p>
                                <a href="" class=" pb-3">Retry</a>
                              </div>
                              <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                                <img src="assets/img/bookings/bus.svg" alt="" srcset="">
                                <p>No bus found.</p>
                                <a href="" class=" pb-3">Retry</a>
                              </div>
                            </div>
                          </div>
                    </p>
                </div>
            </div>
            
        </div>
        <div class="col-md-3 col-12"></div>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 d-flex" id="exampleModalLabel">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
            </svg>
            <p style="font-size: 0.8rem;" class="p-1 px-2">Joy AI</p>
          </h1>
          <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="master-container">
                <div class="card cart">
                  <label class="title">Customize People</label>
                  <div class="products">
                    <span class="mb-2">Number of persons:</span>
                    <div class="input-group mb-0 w-50">
                        <span class="input-group-text h-75">
                            <button  style="border: none; background:transparent;font-size:1.2rem;font-weight:bolder; ">-</button>
                        </span>
                        <input id="person" type="text"  readonly class="form-control h-75" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text h-75">
                            <button style="border: none; background:transparent;font-size:1.2rem;font-weight:bolder; ">+</button></span>
                      </div>
                  </div>
                </div>

                <div class="card checkout">
                    <label class="title">Select Destinations</label>
                    <div class="details mt-1 mb-1 p-0 px-3">
                        <div class="input-group mb-1 ">
                            <span class="input-group-text" id="basic-addon1">
                                <input type="checkbox" class="form-check">
                            </span>
                            <input type="text" @readonly(true) value="Srinagar" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    <div class="details mt-1 mb-1 p-0 px-3">
                          <div class="input-group mb-1 ">
                            <span class="input-group-text" id="basic-addon1">
                                <input type="checkbox" class="form-check">
                            </span>
                            <input type="text" @readonly(true) value="Pahalgam" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    
                  </div>
              
                <div class="card coupons">
                  <label class="title">Apply coupons</label>
                  <form class="form">
                      <input type="text" required placeholder="Apply your coupons here" class="input_field">
                      <button>Apply</button>
                  </form>
                </div>

              
                <div class="card checkout">
                  <label class="title">Checkout</label>
                  <div class="details">
                    <span>Your subtotal:</span>
                    <span>47.99₹</span>
                    <span>Discount through applied coupons:</span>
                    <span>3.99₹</span>
                    <span>Discount through Joy Travels:</span>
                    <span>4.99₹</span>
                  </div>
                  <div class="checkout--footer">
                    <label class="price"><sup>₹</sup>57.99</label>
                    <button class="checkout-btn">Checkout</button>
                  </div>
                </div>
              </div>
          
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>



<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/perlin.js'></script>

</body>
</html>
