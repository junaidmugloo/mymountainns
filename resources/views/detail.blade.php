<!doctype html>
<html lang="en">

<head>
    <title>Package Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Kashmir Tour Packages,Joy Tour & Travels">
    <meta name="author" content="Joy Tour & Travels">
    <meta name="description" content="Kashmir Tour Packages - Book Kashmir Packages at Best Price with joy tour & travels. Get Best Offers on Kashmir Holiday Packages with Airfare, Hotel and Sightseeing.">
  
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- tabler icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css"
        integrity="sha512-tpsEzNMLQS7w9imFSjbEOHdZav3/aObSESAL1y5jyJDoICFF2YwEdAHOPdOr1t+h8hTzar0flphxR76pd0V1zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        background-color: #F5F7FA;
    }

    .box1 {
        background-color: #FFFFFF;
        height: fit-content !important;
        padding: 20px 10px;
    }

    .form {
        background-color: #FFFFFF;
        height: fit-content !important;
        padding: 20px 10px;

    }

    .grp {
        color: #F47C35;
    }

    .grpp {
        height: fit-content !important;
    }

    .img {
        padding: 15px 10px;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 3px 1px #F37221;
    }
    .imgg {
        padding: 15px 10px;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 13px 2px #e2e5e8;
    }

    .bttn {
        background-image: linear-gradient(90deg, #FDAD0F, #F37221);
    }
    .but {
        background-image: linear-gradient(50deg, #FE732E, #ED0B85);
        font-size: 12px !important;
    }
    .rounded-circle{
        border: 1px double #FF5F02;
        
    }
    .span{
        background-color: #FFF5DB;
    }
</style>


<body>
    @include('nav')
    @include('pop')
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container-fluid mx-auto ">
        
        <div class="row  justify-content-center">
            <div class="col-md-6 col-12  my-3">
                <div class="box1 ">
                    <h3>{{$packages->name}}</h3>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="bg-success text-white rounded-2 mx-2 p-2">
                            4.4&nbsp;/&nbsp;5
                        </div>
                        <div class="mx-2">
                            (1271 Reviews)
                        </div>
                        <div class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-9"
                                width="19" height="19" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 12h-3.5" />
                                <path d="M12 7v5" />
                            </svg>{{$packages->day}}D/{{$packages->night}}N
                        </div>
                        <div class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin"
                                width="19" height="19" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>Kashmir
                        </div>
                    </div>
                </div>
                <div class="box1 my-5">
                   
                    <div class="d-flex justify-content-around align-items-center">
                        <div >
                            <img width="50" height="50" src="https://img.icons8.com/?size=100&id=16553&format=png&color=FF5F02" alt="sedan" />
                        </div>
                        <div class="rounded-circle p-1">
                            <img width="35" height="35" src="https://img.icons8.com/?size=100&id=20rgyUMn9R07&format=png&color=FF5F02" class="rounded-circle" />
                        </div>
                        <div class=" rounded-circle p-1">
                            <img width="35" height="35" src="https://img.icons8.com/?size=100&id=26&format=png&color=FF5F02" class="rounded-circle" />
                        </div>
                        <div class="rounded-circle p-1">
                            <img width="35" height="35" src="https://img.icons8.com/?size=100&id=3602&format=png&color=FF5F02" />
                        </div>
                    </div>
                </div>
                <div class="box1 my-5">
                    <h5 class="fw-bold mx-2">Best of Kashmir | {{$packages->name}}</h5>
                    <div class="d-flex justify-content-center my-1 p-1">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-focus-2"
                                width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r=".5" fill="currentColor" />
                                <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M12 3l0 2" />
                                <path d="M3 12l2 0" />
                                <path d="M12 19l0 2" />
                                <path d="M19 12l2 0" />
                            </svg>
                        </span>
                        <span class="mx-2 text-secondary">Set out to discover the paradise on earth,
                            Kashmir, where adventure awaits at every corner and will give you a much-needed break from
                            the
                            busy city life.
                        </span>
                    </div>
                    <div class="d-flex justify-content-center my-1 p-1">
                        <span class=" ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-focus-2"
                                width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r=".5" fill="currentColor" />
                                <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M12 3l0 2" />
                                <path d="M3 12l2 0" />
                                <path d="M12 19l0 2" />
                                <path d="M19 12l2 0" />
                            </svg>
                        </span>
                        <span class="mx-2 text-secondary">Gear up for a horse ride through the golden
                            meadows and captivating landscapes in Sonamarg
                        </span>
                    </div>
                    <div class="d-flex justify-content-center my-1 p-1">
                        <span class=" ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-focus-2"
                                width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r=".5" fill="currentColor" />
                                <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M12 3l0 2" />
                                <path d="M3 12l2 0" />
                                <path d="M12 19l0 2" />
                                <path d="M19 12l2 0" />
                            </svg>
                        </span>
                        <span class=" mx-2 text-secondary">Journey to the clouds on gondola, Asia’s
                            highest
                            cable car ride, as you discover the breathtaking beauty of Gulmarg from above
                        </span>
                    </div>
                    <div class="d-flex justify-content-center my-1 p-1">
                        <span class=" ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-focus-2"
                                width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r=".5" fill="currentColor" />
                                <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M12 3l0 2" />
                                <path d="M3 12l2 0" />
                                <path d="M12 19l0 2" />
                                <path d="M19 12l2 0" />
                            </svg>
                        </span>
                        <span class="mx-2 text-secondary">Ride in a Shikara boat across the serene
                            waters of
                            the Dal Lake, reflecting the pristine Himalayan snowscapes
                        </span>
                    </div>
                    <div class="d-flex justify-content-center my-1 p-1">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-focus-2"
                                width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r=".5" fill="currentColor" />
                                <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M12 3l0 2" />
                                <path d="M3 12l2 0" />
                                <path d="M12 19l0 2" />
                                <path d="M19 12l2 0" />
                            </svg>
                        </span>
                        <span class=" mx-2 text-secondary">Join this group tour to the crown jewel of
                            Himalayas as you create new bonds and everlasting memories with the fellow travelers
                        </span>
                    </div>
                </div>
                <div class="my-5 box1 ">
                    <h5 class="fw-bold mx-2">Best of Kashmir | {{$packages->name}}</h5>
                    <p class="fw-bold mx-2">About the Tour:</p>
                    <p class="mx-2">
                        {!!$packages->description!!}
                        {{-- https://coolsymbol.com/ --}}
                    </p>
                    <p class="fw-bold mx-2">Quick Info:</p>
                    <ul class="">
                        <li>
                            <span class="fw-bold">Route:</span><br>
                            <span id="rouu"> 
                                
                            </span>
                        </li>
                        <li>
                            <span class="fw-bold">Duration: </span><span>  {{$packages->day}} Days and  {{$packages->night}} Nights</span>
                        </li>
                       
                        <li>
                            <span class="fw-bold">Start Point:</span><span> {{$packages->start}}</span>
                        </li>
                        <li>
                            <span class="fw-bold">End Point:</span><span> {{$packages->end}}</span>
                        </li>

                    </ul>

                </div>
            </div>
            <div class=" col-md-4 col-12  my-3">
                <div class="imgg p-3   rounded-4 ">
                    <p class="p-0 m-0 text-muted">Starting from <small><s class="fw-lighter">INR {{$packages->price}}</s></small></p>
                    <div>
                        <span class="fs-2 fw-bold">INR {{$packages->discount}}
                        </span>
                        <span class="text-muted"></span>
                    </div>
                    <div class="my-2">

                        <span class="border-0 rounded-2 span text-warning p-2 fw-bold">
                           @php echo round((($packages->price-$packages->discount)*100)/$packages->price) @endphp % Off</span>
                        <a href="#" role="button" class="  mx-2 px-3 py-1 text-decoration-none border-0 rounded-pill but text-white fw-bold" >
                            {{$packages->tag_line}}</a>
                    </div>
                </div>
                <div class="form my-5">
                    <form action="" method="post" id="tformbooking">
                        <h6 class="fw-bold mb-2">Best&nbsp;of&nbsp;Kashmir&nbsp;|&nbsp;{{$packages->name}}
                            @php echo round((($packages->price-$packages->discount)*100)/$packages->price) @endphp% off!
                        </h6>
                        <input type="hidden" readonly name="package" value="{{$packages->name}}">
                        <input type="text" name="name" placeholder="Your name" class=" form-control my-2" required>
                        <input type="email" name="email" placeholder="Your email" class=" form-control my-2" required>
                        <div class="row my-2">
                            <div class="col-md-3 col-5">
                                <select id="country-code" name="country-code" class="form-control">
                                    <option value="Country code">code</option>
                                    <option value="+1">+1</option>
                                    <option value="+44">+44</option>
                                    <option value="+91" selected>+91</option>
                                    <option value="+81">+81</option>
                                    <option value="+61">+61</option>

                                </select>
                            </div>
                            <div class="col-md-9 col-7">
                                <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        <input type="date" name="date" placeholder="Choose" class="form-control my-2" required />
                        <input type="number" name="count" placeholder="Traveller Count" class="form-control my-2"
                            required />
                        <textarea name="message" class="form-control my-2" rows="3" placeholder="Message" minlength="3"
                            maxlength="500"></textarea>
                        <div class="d-flex justify-content-start my-1 p-1 ">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                            <div class="mx-2 text-secondary">
                                <p>We assure the privacy of your contact data.

                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start my-1 p-1">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                            <div class="mx-2 text-muted">
                                <p>This data will only be used by our team to contact you and no other purposes.
                                </p>
                            </div>
                        </div>
                        <input type="submit" value="Send Enquiry" class="btn w-100 text-white fw-bold "
                            style=" background-image: linear-gradient(90deg,#ff9e61 ,#FF5E00);">
                    </form>
                </div>
                <div class=" form my-5">
                    <h6 class="">Got a Question?</h6>
                    <hr>
                    <p>Our Destination expert will be happy to help you resolve your queries for this tour.</p>
                    <a href="tel:/+91-9906786356" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"
                            width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5E00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            <path d="M15 7a2 2 0 0 1 2 2" />
                            <path d="M15 3a6 6 0 0 1 6 6" />
                        </svg>
                        <span class="mx-2">+91-9906786356</span>
                    </a><br>
                    <small class="text-muted">10:30 AM - 8:00 PM (Mon to Sat)</small>
                </div>
                <div class=" px-2 my-3 img mx-auto text-center rounded-4">
                    <div class="d-flex justify-content-center my-2">
                        <img src="{{asset('./images/group_tour_enqiry.avif')}}" alt="camera" class="grpp">
                        <div class="mx-2 grpp text-start">
                            <small class="grp fw-bold">Bigger Group? Get special offers upto 50% off!</small><br>
                            <small class="text-muted">We create unforgettable adventures, customised for your
                                group.</small>
                        </div>
                    </div>
                    <!-- Button trigger modal -->

                    <button type="button" class="btn bttn text-white w-100" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Get a Callback
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h2 class="modal-title fs-5 fw-medium" id="staticBackdropLabel">Connect with a group tour
                                expert</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body border-0">
                            <form action="" method="post">
                                <input type="text" name="name" placeholder="Full name" class=" form-control my-2"
                                    required>
                                <input type="email" name="email" placeholder="Your email" class=" form-control my-2"
                                    required>
                                <div class="row my-2">
                                    <div class="col-md-2 col-5">
                                        <select id="country-code" name="country-code" class="form-control">
                                            <option value="Country code">code</option>
                                            <option value="+1">+1</option>
                                            <option value="+44">+44</option>
                                            <option value="+91" selected>+91</option>
                                            <option value="+81">+81</option>
                                            <option value="+61">+61</option>

                                        </select>
                                    </div>
                                    <div class="col-md-10 col-7">
                                        <input type="tel" name="phone" placeholder="Phone" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <input type="date" name="date" placeholder="Choose" class="form-control my-2"
                                            required />
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <input type="number" name="count" placeholder="Traveller Count"
                                            class="form-control my-2 col-md-6" required />
                                    </div>
                                </div>
                                <textarea name="message" class="form-control my-2" rows="3" placeholder="Message"
                                    minlength="3" maxlength="500"></textarea>
                                <button type="submit" class="p-2 btn w-100 text-white fw-bold " name="callback"
                                    style=" background-image: linear-gradient(90deg,#ff9e61 ,#FF5E00);">
                                    Get a Callback ⏵
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrow-narrow-right" width="36" height="36"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M15 16l4 -4" />
                                        <path d="M15 8l4 4" />
                                    </svg> -->

                                </button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

        <script>
            
            var numbers = '{{$packages->destination}}';
           var  number = numbers.replace(/ *, */g, '<br>');
            $("#rouu").html(number);
        </script>



<script>
    
$("#tformbooking").submit(function(e){


e.preventDefault();
 $.ajax({
                       url: '/',
                       method: 'POST',
                       data: new FormData(this),
                       dataType: 'JSON',
                       contentType: false,
                       cache: false,
                       processData: false,
                       beforeSend: function() {
      
      $("#tformbooking button").prop('disabled', true);
             
                           },
                       success:function(response)
                       {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                         
                      $('#tformbooking').trigger("reset");
                      $("#tformbooking button").prop('disabled', false);
             
                
                       },
                       error: function(response) {
                         swal({
 title: "Thank you!",
 text: "Our destination expert will reach out to you shortly!!",
 icon: "success",
});
                       $("#tformbooking button").prop('disabled', false);
             
                      $('#tformbooking').trigger("reset");
                       }
                   });

});




</script>
</body>

</html>