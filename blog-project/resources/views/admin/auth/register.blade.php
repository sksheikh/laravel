
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/pages-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('/')}}admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="{{route('home')}}" class="logo-dark">
                        <span><img src="{{asset('/')}}admin/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                    <a href="{{route('home')}}" class="logo-light">
                        <span><img src="{{asset('/')}}admin/images/logo.png" alt="" height="18"></span>
                    </a>
                </div>

                <!-- title-->
                <h4 class="mt-0">Free Sign Up</h4>
                <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>

                <!-- form -->
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input class="form-control" name="name" type="text" id="fullname" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" name="email" type="email" id="emailaddress" required placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" name="password" type="password" required id="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input class="form-control" name="password_confirmation" type="password" required id="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <div class="mb-0 d-grid text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                    </div>
                    <!-- social-->
                    <div class="text-center mt-4">
                        <p class="text-muted font-16">Sign up using</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="pages-login-2.html" class="text-muted ms-1"><b>Log In</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>
                - Hyper Admin User
            </p>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- bundle -->
<script src="{{asset('/')}}admin/js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
</html>
