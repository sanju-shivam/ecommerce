<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register || Jantrik Bootstrap4 Template for Tools, Equipment Store</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!-- Google Font css -->
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet"> 

    <!-- mobile menu css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/meanmenu.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/animate.css')}}">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/nivo-slider.css')}}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/owl.carousel.min.css')}}">
    <!-- slick css -->
   <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/slick.css')}}">
    <!-- price slider css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/jquery-ui.min.css')}}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/font-awesome.min.css')}}">
     <!-- fancybox css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/jquery.fancybox.css')}}">     
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- default css  -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/default.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
        @endif

        <!-- Register Account Start -->
        <div class="register-account pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">LOGIN ACCOUNT</h3>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" action="{{url('login_verify')}}" method="POST">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="form-group">
                                    <label class="control-label" for="email"><span class="require">*</span>Enter your email address here...</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address here...">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group">
                                    <label class="control-label"  for="pwd"><span class="require">*</span>Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                                    </div>
                                </div>
                            </fieldset>
                            <input type="submit" value="Continue" class="newsletter-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->

        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="{{ URL::asset('assets/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- mobile menu js  -->
    <script src="{{ URL::asset('assets/frontend/js/jquery.meanmenu.min.js')}}"></script>
    <!-- scroll-up js -->
    <script src="{{ URL::asset('assets/frontend/js/jquery.scrollUp.js')}}"></script>
    <!-- owl-carousel js -->
    <script src="{{ URL::asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{ URL::asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ URL::asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- price slider js -->
    <script src="{{ URL::asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{ URL::asset('assets/frontend/js/jquery.countdown.min.js')}}"></script>
    <!-- nivo slider js -->
    <script src="{{ URL::asset('assets/frontend/js/jquery.nivo.slider.js')}}"></script>
    <!-- fancybox js -->
    <script src="{{ URL::asset('assets/frontend/js/jquery.fancybox.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- popper -->
    <script src="{{ URL::asset('assets/frontend/js/popper.js')}}"></script>
    <!-- plugins -->
    <script src="{{ URL::asset('assets/frontend/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{ URL::asset('assets/frontend/js/main.js')}}"></script>
</body>

</html>