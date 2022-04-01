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
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_hands.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Hallo, {{$group[0]->first_name}}, dies ist deine Seite</h2>
                    @if(isset($group[1]))
                        <p>Du kommst zusammen mit
                            @if(isset($group[2]))
                            @php
                                $counter=1;
                                foreach ($group as $members) {
                                    if ($counter > 1) {
                                        if ($number > $counter) {
                                            echo $members->first_name . ', ';
                                        }
                                        else echo 'und ' . $members->first_name . '.';
                                    }
                                $counter++;
                                }
                            @endphp
                            @else
                                {{$group[1]->first_name}}.
                            @endif
                            Vielen Dank für eure Zusage!</p>
                    @else
                        <p>Vielen Dank für deine Zusage!</p>
                    @endif
                    <div class="row animate-box">
                        <div class="row">
                            <div style="display: flex; justify-content: center">
                        <a href="/" class="btn btn-default btn-block" style="background: #F14E95; color: white; width: 50%; height: 54px; line-height: 38px;">{{ __('zurück zur Startseite') }}</a>

                    </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row animate-box">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2>{{ __('Programm und Menu') }}</h2>
                            <br>
                            <p style="color: white">
                                {{ __('Wenn du dich noch nicht entschieden hast, kannst du das hier nachholen.') }}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="/update" class="btn btn-default btn-sm" style="background: white; color: #F14E95; height: 54px; line-height: 38px;">{{ __('Wochenende planen') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2>{{ __('Hotel') }}</h2>
                            <br>
                            <p style="color: white">
                                {{ __('Falls du doch im Hotel übernachten willst, kannst du das hier nachtragen.') }}
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="/booking" class="btn btn-default btn-sm" style="background: white; color: #F14E95; width: 50%; height: 54px; line-height: 38px;">{{ __('Zimmer buchen') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($group[1]))
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <h2>{{ __('Gruppe verwalten') }}</h2>
                            <br>
                            <p style="color: white">
                                {{ __('Falls du für ein weiteres Mitglied deiner Gruppe ein eigenes Profil anlegen möchtest, kannst du das hier erledigen.') }} <br>
                            </p>
                            <div class="row" style="padding-top: 20px">
                                <a href="#" class="btn btn-default btn-sm" style="background: white; color: #F14E95; width: 50%; height: 54px; line-height: 38px;">{{ __('Profil anlege') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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

