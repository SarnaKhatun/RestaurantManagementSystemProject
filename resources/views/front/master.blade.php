<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurant | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('/')}}front-assets/img/favicon.png" rel="icon">
    <link href="{{asset('/')}}front-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/')}}front-assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}front-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/')}}front-assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- =======================================================
    * Template Name: Delicious - v4.7.1
    * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
        <i class="bi bi-phone d-flex align-items-center "><span class="text-info">+1 5589 55488 55</span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center "><span class="text-info">{{\Illuminate\Support\Carbon::parse('')->toDayDateTimeString()}}</span></i>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1><a href="{{route('/')}}">Delicious</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="{{asset('/')}}front-assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto text-info active" href="{{route('/')}}">Home</a></li>
                <li><a class="nav-link scrollto text-info" href="#about">About</a></li>
                <li><a class="nav-link scrollto text-info" href="{{route('show-menu')}}">Menu</a></li>
                <li><a class="nav-link scrollto text-info" href="{{route('show-special')}}">Specials</a></li>
                <li><a class="nav-link scrollto text-info" href="{{route('show-event')}}">Events</a></li>
                <li><a class="nav-link scrollto text-info" href="{{route('show-chef')}}">Chefs</a></li>
                <li><a class="nav-link scrollto text-info" href="{{route('show-gallery')}}">Gallery</a></li>
                <li><a class="nav-link scrollto text-info" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#book-a-table" class="book-a-table-btn scrollto text-info">Book a table</a>

    </div>
</header><!-- End Header -->

@yield('body')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Delicious</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('/')}}front-assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}front-assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}front-assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('/')}}front-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}front-assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}front-assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/')}}front-assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if(Session::has('message'))
    <script>
        toastr.success('{{Session::get('message')}}');
    </script>
@endif


@if(Session::has('error'))
    <script>
        toastr.error('{{Session::get('error')}}');
    </script>
@endif

</body>

</html>
