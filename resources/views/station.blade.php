<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">

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

        <div class='header'>
            <video autoplay controls loop>
                <source src="{{asset('headblur.mp4')}}" type="video/mp4">
            </video>
        </div>
        
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
                        <a href="index.html">Pure Mix</a>
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
                      <h1 class="wow fadeIn" data-wow-delay="1.6s">Lorem ipsum dolor</h1>
                      <h3 class="wow fadeInUp" data-wow-delay="1.9s">Six HTML pages included</h3>
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

                          <ul class="filter-wrapper clearfix">
                                   <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                                   <li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
                                   <li><a href="#" class="opc-main-bg" data-filter=".template">Web template</a></li>
                                   <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".branding">Branding</a></li>
                                </ul>

                                <!-- iso box section -->
                                <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                                   <div class="iso-box-wrapper col4-iso-box">

                                      <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img1.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project One</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

                                      <div class="iso-box graphic template col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img2.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project Two</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

                                      <div class="iso-box template graphic col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img3.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project Three</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

                                      <div class="iso-box graphic template col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img4.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project Four</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

                                      <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img5.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project Five</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

                                      <div class="iso-box graphic branding col-md-4 col-sm-6">
                                         <div class="portfolio-thumb">
                                            <img src="images/portfolio-img6.jpg" class="img-responsive" alt="Portfolio">
                                               <div class="portfolio-overlay">
                                                  <div class="portfolio-item">
                                                        <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                        <h2>Project Six</h2>
                                                     </div>
                                               </div>
                                         </div>
                                      </div>

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
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/imagesloaded.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>


    </body>
</html>
