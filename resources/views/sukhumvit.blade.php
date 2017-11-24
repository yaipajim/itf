<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>เที่ยวตามราง</title>

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>

<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<div class="nav-container">
    <nav class="nav-inner transparent">

        <div class="navbar">
            <div class="container">
                <div class="row">

                    <div class="brand">
                        <a href="/index">HOME</a>
                    </div>

                    <div class="navicon">
                        <div class="menu-container">
                            <div class="circle dark inline">
                                <i class="icon ion-navicon"></i>
                            </div>
                            <div class="list-menu">
                                <i class="icon ion-close-round close-iframe"></i>
                                <div class="intro-inner">
                                    <ul id="nav-menu">
                                        <li><a href="/index">Home</a></li>
                                        <li><a href="/silom">Silom</a></li>
                                        <li><a href="/sukhumvit">Sukhumvit</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </nav>
</div>

<!-- Header section
================================================== -->
<section id="header" class="header-one">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                <div class="header-thumb">
                    <h1 class="wow fadeIn" data-wow-delay="1.6s">เส้นสุขุมวิท</h1>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">

                <!-- iso section -->
                <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                    <!-- iso box section -->

                    <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                        <div class="iso-box-wrapper col4-iso-box">
                            @foreach ($sukhumvit_stations as $station)
                            <div class="iso-box temple col-md-4 col-sm-6">
                                <div class="portfolio-thumb">
                                    <img src="{{ secure_asset('images/'.$station->id.'.jpg') }}" class="img-responsive" alt="Portfolio">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                            <a href="/places/{{$station->id}}"><i class="fa fa-link"></i></a>
                                            <h2>{{$station->station}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer section

================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Your Company Name - Designed by Tooplate</p>
                <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-behance"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Javascript
================================================== -->
<script src="{{ secure_asset('js/jquery.js') }}"></script>
<script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('js/isotope.js') }}"></script>
<script src="{{ secure_asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ secure_asset('js/wow.min.js') }}"></script>
<script src="{{ secure_asset('js/custom.js') }}"></script>

</body>
</html>