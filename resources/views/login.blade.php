<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Joy Admin Login</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.jpg') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="account-page">

<div class="main-wrapper">
    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="img">
                    </div>
                    <div class="login-userheading">
                        <h3>Sign In</h3>
                        <h4>Please login to your account</h4>
                    </div>
                    <form method="POST" id="admin">
                        @csrf
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" name="password" class="pass-input" placeholder="Enter your password" required>
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            <div class="alreadyuser">
                                {{-- <h4><a href="{{ route('password.request') }}" class="hover-a">Forgot Password?</a></h4> --}}
                            </div>
                        </div>
                        <div class="form-login">
                            <button type="submit" id="lo" class="btn btn-login">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-img">
                <img src="{{ asset('assets/img/login.jpg') }}" alt="img">
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#admin').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "/login", // ✅ use Laravel route
            method: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $('#lo').prop('disabled', true).addClass('mdi mdi-replay');
            },
            success: function(data) {
                $('#admin')[0].reset();
                $('#lo').removeClass('mdi mdi-replay').prop('disabled', false);

                if (data.message === 'success') {
                    window.location.href = "{{ url('/admin') }}";
                } else if (data.message === 'success1') {
                    window.location.href = "{{ url('/customer') }}";
                }
            },
            error: function(response) {
                console.log(response);
                $('#lo').removeClass('mdi mdi-replay').prop('disabled', false);

                Toastify({
                    text: response.responseJSON?.message || "Login failed",
                    className: "bg-danger",
                    style: { background: "linear-gradient(to right, #dc3545, #dc3545)" },
                    duration: 3000
                }).showToast();
            }
        });
    });
</script>
</body>
</html>
