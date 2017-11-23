<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>เที่ยวตามราง</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'ROBOTO';
                font-weight: 100;
                height: auto;
                margin: 0;
                padding: 0;
            }


            .full-height {
                height: 100vh;
                padding: auto;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: right;

            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .title {
                font-size: 100px;
                color: #000;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .content .links > a {
                display: inline-block;
                margin-top: 40px;
                margin-left: 30px;
                border: 1px solid black;
                color: #636b6f;
                padding: auto;
                font-size: 20px;
                font-weight: 340;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: right;
            }


            .image {
                margin-top: -830px;
                position: absolute;
                z-index: 99;
            }


            .maintitle {
                margin-top: -54%;
                position: absolute;
                width: 100%;
                font-family: 'Supermarket';
                font-size: 200px;
                color: #000;
                text-align: center;
                z-index: 199;
            }

            .content-wrapper {
                width: = 100%;
                z-index: 99;
            }

            .content-wrapper img {
                position: absolute;
                margin-top: -150px; 

            }


            .station img {
                margin-top: 350px;

            }

            .station h2{
                position: absolute;
                font-size: 100px;
                font-weight: 100;
                margin-top: 980px;
                left: 312px;
                line-height: 102%;
                border-bottom: 2px solid black;
                border-top: 2px solid black;
            }

            .station h3{
                position: absolute;
                font-size: 40px;
                font-weight: 20;
                margin-top: 625px;
                left: 1220px;
                line-height: 150%;
            }


            .text-wrapper {
                font-size: 100px;
                position: relative;
            }

            .text-wrapper h1 {
                text-align: center;
                font-size: 100px;
                margin-top: 300px;
            }

            .text-wrapper p {
                text-align: center;
                font-size: 30px;
                font-family: 'Supermarket';
                width: 700px;
                height: 200px;
                margin: 0 auto;
                padding-top: 100px;
                border: 1px solid black;
            }

            .navbar {
                position: fixed;
                width: 100%;
                z-index: 999;

            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: #000;
                overflow: hidden;
            }

            ul li {
                float: left;
            }

            ul li a {
                display: block;
                color: white;
                text-align: center;
                padding: 3px 20px;
                text-decoration: none;
                font-size: 50px;
            }

            .home {
                font-size: 20px;
            }

            li a:hover {
                background-color: pink;
            }
            ul li ul ul{
                display: none;
                }
                
            ul li:hover ul ul{
                width: auto;
                height: 50px;
                display: block;
            }


        </style>
    </head>

    <body>

        <div class="navbar">
            <ul>
                <li><a>=</a>
                    <ul>
                        <ul><a class="home" href="#home">Home</a></ul>
                        <ul><a class="home" href="{{url('about')}}">About</a></ul>
                        <ul><a class="home" href="#about">Station</a></ul>
                        <ul><a class="home" href="content-wrapper">Contact</a></ul>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="content">
            <div class="links">
                <a href="https://laravel.com/docs">ABOUT</a>
                <a href="{{url('station')}}">STATION</a>
                <a href="https://github.com/laravel/laravel">CONTACT</a>
            </div>
        </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="#">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>


        <div class='image'>
            <center><img src="{{asset('cover.jpg')}}" style="width: 100%;max-height: 100%"></center><br>
        </div>

        <div class="maintitle">
            เที่ยวตามราง
        </div>

        <div class="content-wrapper" id="about">
            <img src="{{asset('about3.png')}}" style="width: 100%;max-height: 100%">
            <div class="text-wrapper">
                <h1>ABOUT</h1>
                <p>รอเพื่อนๆเด้อ</p>
                
            </div>

            <div class="station">
                <img src="{{asset('gif2.gif')}}" style="width: 100%;max-height: 100%">
                <a href="{{url('station')}}"><img src="{{asset('station.png')}}" style="width: 100%;max-height: 100%"></a>
                <img src="{{asset('gif1.gif')}}" style="width: auto;max-height: 100%">
                <h2>STATION </h2>
                <h3>T  A  B  <br> < M  E  </h3>
            </div>
        </div>


    </body>

    <footer>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <ul class="social-icon wow fadeInUp">
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

</html>
