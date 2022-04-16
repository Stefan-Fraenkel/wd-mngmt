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
                        <div id="fh5co-logo"><a href="/">{{ __('Hochzeit') }}<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="/">{{ __('Start') }}</a></li>
                            @auth
                                <li class="active"><a href="/profile">{{ __('Mein Profil') }}</a></li>
                                <li><a href="/wd-logout">{{ __('Abmelden') }}</a>
                            @else
                                <li><a href="/profile">{{ __('Anmelden') }}</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
        <br>
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{ __('Hier kannst du alle Gäste eintragen.')}}</h2>
					<p>{{ __('Wir benötigen mindestens eine E-Mail und eine Telefonnummer, unter der wir euch erreichen können.')}}</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
                    <form class="form-inline" method="POST" action={{route("createGuest")}}>
                        @csrf
                        @for($i=1; $i <= $adults; $i++)
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        {{$i}}. {{ __('Erwachsene')}}
                                    </div>
                                </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="first_name" class="sr-only"></label>
                                    <input type="text" name="adults[{{$i}}][first_name]" maxlength="125" class="form-control" id="first_name" required placeholder={{ __('Vorname*')}}>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="last_name" class="sr-only"></label>
                                    <input type="text" name="adults[{{$i}}][last_name]" maxlength="125" class="form-control" id="last_name" required placeholder={{ __('Nachname*')}}>
                                </div>
                            </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">{{ __('Email')}}</label>
                                    @if($i==1)
                                    <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" name="adults[{{$i}}][email]" maxlength="250" class="form-control" id="email" required placeholder={{ __('Email*')}}>
                                    @else
                                        <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" name="adults[{{$i}}][email]" maxlength="250" class="form-control" id="email" placeholder={{ __('Email')}}>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="phone" class="sr-only">{{ __('Telefon')}}</label>
                                    @if($i==1)
                                        <input type="tel" name="adults[{{$i}}][phone]" maxlength="250" class="form-control" id="phone" required placeholder={{ __('Telefon*')}}>
                                    @else
                                        <input type="tel" name="adults[{{$i}}][phone]" maxlength="250" class="form-control" id="phone" placeholder={{ __('Telefon')}}>
                                    @endif
                                </div>
                            </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                                @if($i==1)
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="password" class="sr-only">{{ __('Passwort')}}</label>
                                            <input type="password" name="adults[{{$i}}][password]" maxlength="250" class="form-control" id="password" required placeholder={{ __('Passwort*')}}>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div>&nbsp</div>
                        @endfor
                        @for($i=1; $i <= $children; $i++)
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        {{$i}}. {{ __('Kind')}}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="first_name" class="sr-only"></label>
                                        <input type="text" name="children[{{$i}}][first_name]" maxlength="125" class="form-control" id="first_name" required placeholder={{ __('Vorname*')}}>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="text" class="sr-only"></label>
                                        <input type="text" name="children[{{$i}}][last_name]" maxlength="125" class="form-control" id="last_name" required placeholder={{ __('Nachname*')}}>
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp</div>
                        @endfor
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group center" style="background:white; color: #F14E95; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                    *{{ __('Pflichtfelder')}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" style="float: right">
							<button type="submit" class="btn btn-default btn-block">{{ __('weiter')}}</button>
						</div>
                </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

@if(isset($message))
    <script>
        setTimeout(function(){
            alert("{{$message}}");
        }, 1000);
    </script>
@endif

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
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

