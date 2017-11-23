<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

    <div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
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
<section id="header" class="header-two">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                <div class="header-thumb">
                    <h1 class="wow fadeIn" data-wow-delay="1.6s">เส้นสีลม</h1>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Location section
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
                            @foreach ($silom_stations as $station)
                            <div class="iso-box art col-md-4 col-sm-6">
                                <div class="portfolio-thumb">
                                    <img src="{{ asset('images/'.$station->id.'.jpg') }}" class="img-responsive" alt="Portfolio">
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
                <p class="wow fadeInUp"  data-wow-delay="0.3s">@IT KMITL by PUGPUENG</p>
            </div>

        </div>
    </div>
</footer>


<!-- Javascript
================================================== -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>