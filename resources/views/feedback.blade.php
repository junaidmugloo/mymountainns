<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Joy Tour & Travels</title>
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    <meta name="keywords" content="Kashmir Tour Packages, Joy Tour & Travels Feedback">
    <meta name="author" content="Joy Tour & Travels">
    <meta name="description" content="Provide your feedback for Joy Tour & Travels. Help us improve your experience with our Kashmir Tour Packages.">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Reusing footer and button styles from the theme */
        body {
            font-family: "Poppins", Helvetica, sans-serif;
        }

        .feedback-container {
            background-color: #f4f6f9;
            padding: 50px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .feedback-header {
            font-size: 36px;
            font-weight: 700;
            background: linear-gradient(92deg, #f37022 1.79%, #fcaf17 97.06%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control, .btn {
            border-radius: 5px;
        }

        .submit-btn {
            background: linear-gradient(91deg, #ffba0a, #f37022);
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        .submit-btn:hover {
            background: linear-gradient(91deg, #f37022, #ffba0a);
        }
        
        .HeaderSaleLine_saleIcon__pwEFh {
         animation: HeaderSaleLine_animateIconMobile__CTSdx 2.5s linear infinite; 
    }


.HeaderSaleLine_saleIcon__pwEFh {
    display: flex; 
     animation: HeaderSaleLine_animateIcon__69qO3 4s linear infinite; 
}
@media (max-width: 768px) {
            .ext, .ext2 {
                font-size: 45px;
                line-height: 55px;
            }
            #glob{
                display: none;
            }
            .fxs{
                font-size: 0.8rem;
            }
        }

  @keyframes HeaderSaleLine_animateIcon__69qO3{
    0% {
    transform: translateX(0);
    opacity: .01;
}
25% {
    transform: translateX(30vw);
    opacity: 1;
}

100% {
    transform: translateX(35vw);
    opacity: 0;
}
/* 100% {
    transform: translateX(100vw);
    opacity: .01;
} */
  }
    </style>
</head>

<body>

    <!-- Feedback Section -->
    <div class="container feedback-container">
        <div class="fxs w-100 d-flex fixed-top mb-5 p-1" style=" background: linear-gradient(93deg, #ff7b26, #ec048c);">
            <svg class="HeaderSaleLine_saleIcon__pwEFh" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M24 0H14.5L5 38H14.5L24 0Z" fill="white" fill-opacity="0.5"></path><path d="M12 0H9.95238L0 38H2.04762L12 0Z" fill="white" fill-opacity="0.5"></path></svg>
            <a href="tel://9906786356" class="text-light" style="text-decoration: none;"><i class="fa-solid fa-phone"></i> +91-9906786356</a> <b class="text-light"> &nbsp; &nbsp;|&nbsp; &nbsp;</b>
            <a href="mailto:joytravelkashmir@gmail.com" style="text-decoration: none;" class="text-light"><i class="fa-solid fa-envelope"></i> joytravelkashmir@gmail.com</a>
        </div>
        <h2 class="feedback-header">Your Feedback Matters!</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Your Feedback</label>
                <textarea class="form-control" id="feedback" rows="5" placeholder="We would love to hear your thoughts!" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
