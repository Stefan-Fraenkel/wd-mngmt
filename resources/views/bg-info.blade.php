<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ __('Hochzeit') }} &mdash; {{ __('Stefan & Eli') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    <style>
        html{scroll-behavior:smooth}
    </style>

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 menu-1">
                    <div id="fh5co-logo"><a href="/" style="color: #828282">{{ __('Hochzeit') }}<strong>.</strong></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1" style="color: #828282">
                    <ul>
                        <li><a href="/" style="color: #828282">{{ __('Start') }}</a></li>
                        @auth
                            <li><a href="/profile" style="color: #828282">{{ __('Mein Profil') }}</a></li>
                            <li><a href="/wd-logout" style="color: #828282">{{ __('Abmelden') }}</a>
                        @else
                            <li><a href="/profile" style="color: #828282">{{ __('Anmelden') }}</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="attending"></div>
    <div id="fh5co-started" class="fh5co-bg" style="background-color: white;">
        <br>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2 style="color: #F14E95">{{ __('Blagoevgrad') }}</h2>
                    <p style="color: #828282">{{ __('Ideen für Aktivitäten rund um die Hochzeitsfeier.') }}</p>
                    <div class="row animate-box">
                        <div class="row">
                            <div style="display: flex; justify-content: center">
                                <a href="/#travel" class="btn btn-default btn-block" style="background: #F14E95; color: white; width: 50%; height: 54px; line-height: 38px;">{{ __('zur Startseite') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row animate-box">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Varosha') }}</h2>
                            <p style="color: #828282">
                                {{ __('Traditionelles Stadtviertel.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/varosha.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="https://www.tripadvisor.com/Attraction_Review-g1156161-d15037565-Reviews-Varosha_Ethnographic_Complex-Blagoevgrad_Blagoevgrad_Province.html" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Info')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/admpQAxiFNcjKXNN6" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Park Bachinovo') }}</h2>
                            <p style="color: #828282">
                                {{ __('Spazieren und verweilen.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/bachinovo.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="https://www.tripadvisor.de/Attraction_Review-g1156161-d7895781-Reviews-Park_Bachinovo-Blagoevgrad_Blagoevgrad_Province.html" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Info')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/yDVKmExSbnX6CRs69" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Raffy Bar and Gelato') }}</h2>
                            <p style="color: #828282">
                                {{ __('Internationale Küche, hier findet jeder etwas.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/raffy.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="http://raffy.bg/en/" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Website')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/nCAmEa2wXuF1zA65A" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Restaurant Diva') }}</h2>
                            <p style="color: #828282">
                                {{ __('Bulgarische Küche, direkt im Park.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/diva.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="https://de.restaurantguru.com/Diva-Blagoevgrad-2" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Info')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/YSmTj3yUKPxFXGUy6" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Yoanna Cake Boutique') }}</h2>
                            <p style="color: #828282">
                                {{ __('Kaffee und Kuchen.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/yoanna.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="https://de.restaurantguru.com/Yoanna-Cake-Boutique-Blagoevgrad" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Info')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/TbFWbfkRixmCZnK69" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Historisches Museum') }}</h2>
                            <p style="color: #828282">
                                {{ __('Museum über die Geschichte der Region.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/museum.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="http://www.museology.bg/en/museums/i20/regional-historical-museum-blagoevgrad.html" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Info')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/mdCnV1xhcAG6eU3FA" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Kino') }}</h2>
                            <p style="color: #828282">
                                {{ __('Filme laufen hier häufig OmU.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/cinema.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="http://www.cinemaxbg.com/?lng=en" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Website')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/EMwZwerAu14RxJzz5" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Club Underground') }}</h2>
                            <p style="color: #828282">
                                {{ __('Alternative / Punk / Rock.')}}
                            </p>
                            <div class="row" style="padding-top: 20px; display: flex">
                                <div class="column" style="flex: 50%; padding-right: 5%">
                                    <img src="images/underground.jpg" style="border-radius: 50%; height: 192px; float: right">
                                </div>
                                <div class="column" style="flex: 50%; padding-left: 5%; padding-top: 30px">
                                    <div class="row">
                                        <a href="https://de.restaurantguru.com/Underground-Blagoevgrad" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Website')}}</a>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="https://goo.gl/maps/od2zSqj2bCoMMkAw9" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; width: 179px; line-height: 38px; float: left">{{ __('Location')}}</a>
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

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>

