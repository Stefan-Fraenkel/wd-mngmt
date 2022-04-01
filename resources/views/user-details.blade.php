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
					<h2> {{ __('Programm und Menu') }}</h2>
				</div>
			</div>
            <div class="row animate-box"style="padding-bottom: 1%;">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center fh5co-heading" style="padding-left: 3%; padding-right: 3%;">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <p style="color: white; padding-bottom: 1%;">
                                <br>
                                {{ __('Für den Vortag der Hochzeitsfeier haben wir eine Stadtführung und einen Tanzkurs organisiert.') }} <br>
                                {{ __('Beim Tanzkurs lernt ihr einen bulgarischen Reihentanz, den wir am Samstag tanzen wollen.') }} <br>
                                {{ __('Die Stadtführung stellt Elis Heimatstadt Blagoewgrad vor.') }} <br>
                                {{ __('Für die Feier könnt ihr zwischen verschiedenen Menus wählen.') }} <br>
                                {{ __('Wo ihr mitmachen wollt und was ihr essen mögt, könnt ihr uns hier mitteilen.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
                    <form class="form-inline" method="POST" action={{route("updateGuest")}}>
                        @csrf
                        @foreach($group as $members)
                            <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                {{$members->first_name}}
                            </div>
                        <div style="padding-left: 2%; padding-right: 2%;">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: white; color: #F14E95; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        Allgemein
                                    </div>
                                </div>
                                <input type="hidden" name="members[{{$members->id}}][id]" value="{{$members->id}}">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="dinner" class="sr-only"></label>
                                        <select class="form-control" name="members[{{$members->id}}][dinner]" id="dinner{{$members->id}}" required>
                                            <option style="display: none" value="">Menu</option>
                                            <option style="color: grey" value="beef">Rind</option>
                                            <option style="color: grey" value="chicken">Hühnchen</option>
                                            <option style="color: grey" value="fish">Fisch</option>
                                            <option style="color: grey" value="vegan">Vegan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="covid" class="sr-only"></label>
                                        <select class="form-control" name="members[{{$members->id}}][covid]" id="covid{{$members->id}}" required>
                                            <option style="display: none" value="">Corona Impfstatus</option>
                                            <option style="color: grey" value="none">keine Impfung</option>
                                            <option style="color: grey" value="first">1. Impfung</option>
                                            <option style="color: grey" value="second">2. Impfung</option>
                                            <option style="color: grey" value="third">3. Impfung</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: white; color: #F14E95; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        {{ __('Tanzkurs') }}
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 34px; text-align: center;">
                                        {{ __('Ja') }}
                                        <input class="form-check-input" type="radio" name="members[{{$members->id}}][dancing]" id="dancing{{$members->id}}1" value="1" required>
                                        <label class="form-check-label" for="dancing{{$members->id}}1"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 34px; text-align: center;">
                                        {{ __('Nein')}}
                                        <input class="form-check-input" type="radio" name="members[{{$members->id}}][dancing]" id="dancing{{$members->id}}2" value="0" required>
                                        <label class="form-check-label" for="dancing{{$members->id}}2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group center" style="background: white; color: #F14E95; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                        {{ __('Stadtführung') }}
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 34px; text-align: center;">
                                        {{ __('Ja') }}
                                        <input class="form-check-input" type="radio" name="members[{{$members->id}}][sightseeing]" id="sightseeing{{$members->id}}1" value="1" required>
                                        <label class="form-check-label" for="sightseeing{{$members->id}}1"></label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 34px; text-align: center;">
                                        {{ __('Nein') }}
                                        <input class="form-check-input" type="radio" name="members[{{$members->id}}][sightseeing]" id="sightseeing{{$members->id}}2" value="0" required>
                                        <label class="form-check-label" for="sightseeing{{$members->id}}2"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div>&nbsp<br></div>
                        @endforeach
                        <div style="padding-left: 2%; padding-right: 2%;">
                            <div class="row">
                                <div class="col-md-4 col-sm-4" style="float: left">
                                    <a href="/profile"  class="btn btn-default btn-block" style="background: white; color: #F14E95; height: 54px; line-height: 40px; text-align: center;">{{ __('später entscheiden') }}</a>
                                </div>
                                <div class="col-md-4 col-sm-4" style="float: right">
                                    <button type="submit" class="btn btn-default btn-block">{{ __('weiter') }}</button>
                                </div>
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

