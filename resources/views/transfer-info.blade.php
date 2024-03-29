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
    <div id="fh5co-started" class="fh5co-bg" style="background-color: white;">
        <br>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2 style="color: #F14E95">{{ __('Von Sofia nach Blagoevgrad') }}</h2>
                    <p>{{ __('Mit diesen Tipps kommst du schneller ans Ziel.') }}</p>
                    <div class="row animate-box">
                        <div class="row">
                            <div style="display: flex; justify-content: center">
                                <a href="/#travel" class="btn btn-default btn-sm" style="background: #F14E95; color: white; width: 50%; height: 54px; line-height: 38px;">{{ __('zur Startseite') }}</a>
                            </div>
                            <br>
                            <div style="display: flex; justify-content: center">
                                <a href="/travel-info" class="btn btn-default btn-block" style="background: #F14E95; color: white; width: 50%; height: 54px; line-height: 38px;">{{ __('zurück') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Auto')}}</h2>
                            <br>
                            <p style="color: #828282">
                                {{ __('Sollte frühzeitig gemietet werden, da Preise im Sommer sehr hoch steigen können.')}}<br>
                                {{ __('Am besten große Anbieter wie Sixt verwenden. Lokale Unternehmen sind häufig nicht vertrauenswürdig.')}}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="https://g.page/orbitaspahotelblagoevgrad" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Hotel auf Google Maps')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Bus und Bahn')}}</h2>
                            <br>
                            <p style="color: #828282">
                                {{ __('Vom Bahnhof / ZOB fahren Züge und Busse nach Blagoevgrad.')}}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="http://centralnaavtogara.bg/index.php?lang=_de" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Bustickets')}}</a>
                                <a href="https://www.bdz.bg/en" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Zugtickets')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('U-Bahn zum Bahnhof')}}</h2>
                            <br>
                            <p style="color: #828282">
                                {{ __('Vom Flughafen fährt eine U-Bahn Linie direkt zum Bahnhof / ZOB.')}}<br>
                                {{ __('In der U-Bahn muss bei Mitführung von Reisegepäck ein zweites Ticket gelöst werden')}}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="https://goo.gl/maps/pWDkGak9DkfPMpRb6" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('U-Bahn Station')}}</a>
                                <a href="https://www.metrosofia.com/en" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Tickets U-Bahn')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2 style="color: #F14E95">{{ __('Taxi zum Bahnhof') }}</h2>
                            <br>
                            <p style="color: #828282">
                                {{ __('Am besten an der Information im Flughafen nachfragen.')}}<br>
                                {{ __('Preis vor Abfahrt vereinbaren. Sollte 10 - 15 € (20 - 30 Lew) betragen.')}}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="https://goo.gl/maps/ugrnaJto44XwGqGn8" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Busbahnhof')}}</a>
                                <a href="https://goo.gl/maps/mUBb1CSzegxDhrNU6" target="_blank" class="btn btn-default btn-sm" style="background: #F14E95; color: white; height: 54px; line-height: 38px;">{{ __('Bahnhof')}}</a>
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

