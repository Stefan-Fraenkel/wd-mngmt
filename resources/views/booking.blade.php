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
                        <div id="fh5co-logo"><a href="index.html">{{ __('Hochzeit') }}<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.html">{{ __('Start') }}</a></li>
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
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
        <br>
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{ __('Hotelzimmer')}}</h2>
				</div>
			</div>
            <div class="row animate-box">
                <div class="row" style="display: flex; justify-content: center; padding-bottom: 20px">
                    <div style="display: flex; justify-content: center">
                        <a href="/profile"  class="btn btn-default btn-block" style="background: white; color: #F14E95; height: 54px; line-height: 38px; text-align: center;">{{ __('Ich benötige kein Hotelzimmer')}}</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center fh5co-heading" style="padding-left: 3%; padding-right: 3%;">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            <p style="color: white; padding-bottom: 1%;">
                                <br>
                                {{ __('Falls ihr in dem Hotel übernachten wollt, in dem auch die Feier stattfindet, könnt ihr dies hier anmelden.')}}<br>
                                {{ __('Wir haben für euch spezielle Konditionen ausgehandelt, die unter den regulären Preisen liegen.')}}<br>
                                {{ __('Sie gelten auch, wenn ihr direkt vor oder nach der Hochzeitsfeier noch weitere Tage dort verbringen wollt.')}}<br>
                                {{ __('Bei den Preisen ist außerdem ein Frühstück und der Zugang zum Spa-Bereich inklusive sowie ein Stellplatz für ein Auto.')}}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box" style="padding-bottom: 1%;">
				<div class="col-md-10 col-md-offset-1">
                    <div class="row" style="padding-left: 2%; padding-right: 2%;">
                        <div class="form-group form-control" style="height: 100%; text-align: center; padding: 20px">
                            {{ __('Preis pro Person und Nacht:')}}<br><br>
                            {{ __('1 Person: 89 lv (ca. 45 €)')}}<br>
                            {{ __('ab 2 Personen 99 lv (ca. 50 €)')}}<br><br>
                            {{ __('Kinder unter 6 Jahren kostenlos')}}<br>
                            {{ __('Kinder unter 12 Jahren 35 lv (ca. 18 €)')}}<br><br>
                            {{ __('Die größten Zimmer bieten Platz für bis zu 4 Erwachsene mit 2 Kinder.')}}<br>
                            {{ __('Auf die Auswahl des genauen Zimmers haben wir keinen Einfluss.')}}<br>
                            {{ __('Mehr Informationen findet ihr auf der ')}} <a style="color: white;" href="https://hotel-orbita.bg/en/" target="_blank"><u>{{ __('offiziellen Seite des Hotels')}}</u></a>.
                        </div>
                    </div>
                    <form class="form-inline" id="booking" method="POST" action={{route("bookRoom")}}>
                        @csrf
                        <div class="row" style="padding-left: 2%; padding-right: 2%;">
                                <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                    {{ __('Für wen soll gebucht werden?')}}
                                </div>
                            <div class="row">
                            @foreach($group as $members)
                                @if($members->adult == 1)
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group form-control adults" style="height: 54px; line-height: 35px; text-align: center;">
                                                {{$members->first_name}}&nbsp&nbsp<input type="checkbox" name="guests[]" value="{{$members->id}}" required checked>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group form-control children" style="height: 54px; line-height: 35px; text-align: center;">
                                                {{$members->first_name}}&nbsp&nbsp<input type="checkbox" name="guests[]" value="{{$members->id}}" checked>
                                            </div>
                                        </div>
                                    @endif
                            @endforeach
                            </div>
                        </div>
                        <div><br></div>
                        <div class="row"  style="padding-left: 2%; padding-right: 2%;">
                            <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                {{ __('Aufenthalt')}}
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 28px; text-align: center;">
                                        <label for="arrival">{{ __('Anreise')}}:&nbsp&nbsp</label>
                                        <input type="date" style="color: grey" id="arrival" name="arrival" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-4">
                                    <div class="form-group form-control" style="height: 54px; line-height: 28px; text-align: center;">
                                        <label for="departure">{{ __('Abreise')}}:&nbsp&nbsp</label>
                                        <input type="date" style="color: grey" id="departure" name="departure" required>
                                    </div>
                                </div>
                            </div>
                            <div><br></div>
                            <div class="row" style="padding-left: 2%; padding-right: 2%;">
                                <div class="form-group center" style="background: #F14E95; color: white; border-radius: 4px; height: 54px; line-height: 54px; text-align: center;">
                                    {{ __('Kommentar zur Buchung')}}
                                </div>
                                <textarea class="form-group center form-control" name="comment" placeholder="{{ __('Schreibe hier einen Kommentar')}}"></textarea>
                                <div>
                                    <br>
                                </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4" style="float: right">
                                <button type="submit" class="btn btn-default btn-block">{{ __('buchen')}}</button>
                            </div>
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

	<!-- Main -->
	<script src="js/main.js"></script>

    <script>
        $(function(){
            var requiredCheckboxes = $('.adults :checkbox[required]');
            requiredCheckboxes.change(function(){
                if(requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });
        });
    </script>

	</body>
</html>

