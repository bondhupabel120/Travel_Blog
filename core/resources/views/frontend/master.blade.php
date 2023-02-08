<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Historical Place">
    <meta name="author" content="Eastern University">


    <!-- Website Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">HistoryBD</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="{{ route('index') }}">
        <img src="{{ asset('assets/frontend/images/history.png') }}" alt="alternative">
    </a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('index') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('about') }}">ABOUT US</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT BANGLADESH</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('map') }}"><span class="item-text">MAP OF BD</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ route('art.culture') }}"><span class="item-text">ART & CULTURE OF BD</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ route('history.place') }}"><span class="item-text">HISTORY OF BD</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('contact') }}">CONTACT US</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->


@yield('content')

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container about">
                    <h4>Few Words About HistoryBD</h4>
                    <p class="white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-md-6">
                <div class="text-container">
                    <h4>Links</h4>
                    <ul class="list-unstyled li-space-lg white">
                        <li>
                            <a class="white" href="http://www.easternuni.edu.bd" target="_blank">Eastern University</a>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © {{ \Carbon\Carbon::now()->format('Y') }} <a href="#">by Eastern University</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('assets/frontend/js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
<script src="{{ asset('assets/frontend/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>