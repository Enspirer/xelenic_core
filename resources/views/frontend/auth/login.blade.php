
<!DOCTYPE html>
<!-- 
Template Name: dashgrin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>dashgrin I Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/FrontDashboard/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>


<!-- HK Wrapper -->
<div class="hk-wrapper" style="">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper" style="background-color: white;">
        <header class="d-flex justify-content-between align-items-center">
            <a class="d-flex auth-brand" href="#">
                <img class="brand-img" src="{{url('/')}}/FrontDashboard/dist/img/logo-dark.png" alt="brand" />
            </a>

        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form w-sm-90 w-100 ">
                            <div style="background-image: url('{{url('/')}}/FrontDashboard/dist/img/stash.png');height: 300px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci lacus, mollis id quam porttitor, elementum eleifend nunc. Sed sit amet libero quis eros ultricies mollis nec at enim. Suspendisse auctor, nisi vitae fringilla consequat, felis nibh sagittis sapien, sed mollis libero turpis nec massa. Suspendisse mi tortor, placerat tincidunt ligula suscipit, suscipit sagittis lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus malesuada volutpat risus. </p>
                        </div>
                    </div>
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form w-sm-90 w-100 ">
                            <div style="background-image: url('{{url('/')}}/FrontDashboard/dist/img/stash.png');height: 300px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci lacus, mollis id quam porttitor, elementum eleifend nunc. Sed sit amet libero quis eros ultricies mollis nec at enim. Suspendisse auctor, nisi vitae fringilla consequat, felis nibh sagittis sapien, sed mollis libero turpis nec massa. Suspendisse mi tortor, placerat tincidunt ligula suscipit, suscipit sagittis lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus malesuada volutpat risus. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form  w-sm-90 w-100 card pa-25 shadow-lg">
                            <form action="{{route('frontend.auth.login.post')}}" method="post">
                                {{csrf_field()}}
                                <h1 class="display-4 mb-10">Sign in</h1>
                                <p class="mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                </div>
                                <button class="btn btn-success btn-block" type="submit">Login</button>
                                <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                                <div class="option-sep">or</div>
                                <div class="form-row">
                                    <div class="col-sm-6 mb-20">
                                        <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                    </div>
                                    <div class="col-sm-6 mb-20">
                                        <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                    </div>
                                </div>
                                <p class="text-center">Do have an account yet? <a href="#">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->

@include('frontend.user.dashboard_components.footer')
<script src="{{url('/')}}/FrontDashboard/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

<script src="{{url('/')}}/FrontDashboard/dist/js/init.js"></script>
<script src="{{url('/')}}/FrontDashboard/dist/js/login-data.js"></script>
</body>

</html>