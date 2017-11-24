<!DOCTYPE html>
<html lang="en">
<head>
    <!--

    Template 2082 Pure Mix

    http://www.tooplate.com/view/2082-pure-mix

    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
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
                <div class="header-thumb" style="padding: 0px 0px 0px 0px">
                    <h1 class="wow fadeIn" data-wow-delay="1.6s">{{$places->name}}</h1>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Single Project section
================================================== -->
<section id="single-project">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4">
                <div class="project-info">
                    <h4 style="font-size: 28px">{{$places->name}}</h4>
                </div>
                <div class="project-info">
                    <h4>Station</h4>
                    <p>{{$places->station}}</p>
                </div>
                <div class="project-info">
                    <h4>OPEN/CLOSE</h4>
                    <p>{{$places->openclose}}</p>
                </div>
            </div>

            <div class="wow fadeInUp col-md-7 col-sm-7">
                <p>{{$places->detail}}</p>
                <img src="{{ secure_asset('images/'.$places->id.'.jpg') }}" class="img-responsive" alt="Single Project">
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
<script src="{{ secure_asset('js/jquery.js') }}"></script>
<script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('js/wow.min.js') }}"></script>
<script src="{{ secure_asset('js/custom.js') }}"></script>

</body>
</html>