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
                z-index: 1000;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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
        </div>


        <img src="{{asset('baring.jpg')}}" style="width: auto; height: auto">

        


    </body>
</html>
