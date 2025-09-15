<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Joy Tour & Travels</title>
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    <meta name="keywords" content="Kashmir Tour Packages, Joy Tour & Travels, Travel Blog">
    <meta name="author" content="Joy Tour & Travels">
    <meta name="description" content="Discover travel stories, tips, and updates on the Joy Tour & Travels blog page.">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css">

    <style>
        body {
            font-family: "Poppins", Helvetica, sans-serif;
            background-color: #f8f9fa;
        }

        .blog-header {
            background: linear-gradient(92deg, #f37022 1.79%, #fcaf17 97.06%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .blog-header h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .blog-post {
            background: white;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: 0.3s ease-in-out;
        }

        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .blog-post img {
            width: 100%;
            border-radius: 10px;
        }

        .blog-post h2 {
            font-size: 24px;
            font-weight: 600;
            margin-top: 15px;
        }

        .blog-post p {
            color: #515151;
            font-size: 16px;
            line-height: 28px;
        }

        .blog-post a {
            text-decoration: none;
            color: #f37022;
            font-weight: bold;
        }

        .blog-post a:hover {
            color: #fcaf17;
        }

        @media (max-width: 768px) {
            .blog-header h1 {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex fixed-top p-2" style="background: linear-gradient(93deg, #ff7b26, #ec048c);">
        <a href="tel://7889604545" class="text-light text-decoration-none me-3">
            <i class="fa-solid fa-phone"></i> +91-7889-604545
        </a>
        <a href="mailto:joytravelkashmir@gmail.com" class="text-light text-decoration-none">
            <i class="fa-solid fa-envelope"></i> joytravelkashmir@gmail.com
        </a>
    </div>
    
    @include('nav')
    @include('pop')

    <div class="blog-header position-relative" style="margin-top:20vh;">
        <h1>Our Latest Blogs</h1>
        <p>Explore the world with us through our travel stories and insights.</p>
    </div>

    <div class="container py-5">
        <div class="row">
            @foreach ($blogs as $b)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-post">
                    <img src="{{ asset('blog_images/' . $b->image) }}" alt="{{ $b->title }}">
                    <h2>{{ $b->title }}</h2>
                    <p>{!! Str::limit(strip_tags($b->content), 100) !!}</p>
                    <a href="https://joytourandtravels.com/blogs/{{ $b->slug }}">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
