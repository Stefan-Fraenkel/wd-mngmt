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



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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

<div id="attending"></div>
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Hier kannst du alle Gäste eintragen.</h2>
					<p>Wir benötigen mindestens eine E-Mail und eine Telefonnummer, unter der wir eure Gruppe erreichen können.</p>
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
                                        {{$i}}. Erwachsene
                                    </div>
                                </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="first_name" class="sr-only"></label>
                                    <input type="text" name="adult[{{$i}}][first_name]" class="form-control" id="first_name" required placeholder="Vorname*">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="last_name" class="sr-only"></label>
                                    <input type="text" name="adult[{{$i}}][last_name]" class="form-control" id="last_name" required placeholder="Nachname*">
                                </div>
                            </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    @if($i==1)
                                    <input type="email" name="adult[{{$i}}][email]" class="form-control" id="email" required placeholder="Email*">
                                    @else
                                        <input type="email" name="adult[{{$i}}][email]" class="form-control" id="email" placeholder="Email">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="phone" class="sr-only">Telefon</label>
                                    @if($i==1)
                                        <input type="tel" name="adult[{{$i}}][phone]" class="form-control" id="phone" required placeholder="Telefon">
                                    @else
                                        <input type="tel" name="adult[{{$i}}][phone]" class="form-control" id="phone" placeholder="Telefon">
                                    @endif
                                </div>
                            </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="password" class="sr-only">Password</label>
                                        @if($i==1)
                                            <input type="password" name="adult[{{$i}}][password]" class="form-control" id="password" required placeholder="Passwort*">
                                        @else
                                            <input type="password" name="adult[{{$i}}][password]" class="form-control" id="password" placeholder="Passwort">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="password" class="sr-only">Password</label>
                                        @if($i==1)
                                            <input type="password" name="adult[{{$i}}][password_wdh]" class="form-control" id="password" required placeholder="Wiederholung Passwort*">
                                        @else
                                            <input type="password" name="adult[{{$i}}][password_wdh]" class="form-control" id="password" placeholder="Wiederholung Passwort">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp</div>
                        @endfor
                        @for($i=1; $i <= $children; $i++)
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        {{$i}}. Kind
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="first_name" class="sr-only"></label>
                                        <input type="text" name="child[{{$i}}][first_name]" class="form-control" id="first_name" required placeholder="Vorname*">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="text" class="sr-only"></label>
                                        <input type="text" name="child[{{$i}}][last_name]" class="form-control" id="last_name" required placeholder="Nachname*">
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp</div>
                        @endfor
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                    *Pflichtfelder
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" style="float: right">
							<button type="submit" class="btn btn-default btn-block">anmelden</button>
						</div>
                </div>
					</form>
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
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: 2022, // required
        month: 7, // required
        day: 23, // required
       // year: d.getFullYear(),
      //  month: d.getMonth() + 1,
      //  day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: 2022, // required
        month: 7, // required
        day: 23, // required
       // year: d.getFullYear(),
      //  month: d.getMonth() + 1,
      //  day: d.getDate(),
        enableUtc: false
    });


</script>

	</body>
</html>

