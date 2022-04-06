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
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">{{ __('Hochzeit') }}<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.html">{{ __('Start') }}</a></li>
                        @auth
                            <li><a href="{{ url('/profile')}}">{{ __('Mein Profil') }}</a></li>
                            <li><a href="/wd-logout">{{ __('Abmelden') }}</a></li>
                        @else
                            <li><a href="{{ url('/profile')}}">{{ __('Anmelden') }}</a></li>
                        @endauth
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>{{ __('Stefan + Eli') }}</h1>
							<h2>{{ __('Wir Heiraten') }}</h2>
							<div class="simply-countdown simply-countdown-one"></div>
                            <br>
                            @auth
                                <p><a href="#attending" class="btn btn-default btn-sm">{{ __('Du bist dabei') }}</a></p>
                            @else
                                 <p><a href="#attending" class="btn btn-default btn-sm">{{ __('Zusagen') }}</a></p>
                            @endauth

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>{{ __('Hallo!') }}</h2>
					<h3>{{ __('23. Juli, 2022 Blagoevgrad, Bulgarien') }}</h3>
					<p>{{ __('Wir laden dich ein, mit uns zu feiern') }}</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/groom.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>{{ __('Stefan Fränkel') }}</h3>
						<p>{{ __('Der Bräutigam') }}</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/bride.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>{{ __('Elitsa Stambolova') }}</h3>
						<p>{{ __('Die Braut') }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

        <div id="attending"></div>
        <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                @auth
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>{{ __('Du bist angemeldet') }}</h2>
                            <p>{{ __('Das ist für uns das schönste Geschenk!')}}</p>
                            <br>
                            <p><a href="/profile" class="btn btn-default btn-sm" style="height: 54px; line-height: 38px;">{{ __('Dein Profil') }}</a></p>
                            <br>
                            <p>{{ __('Hier kannst du alles weitere erledigen.') }}</p>
                        </div>
                    </div>
                @else
                            <div class="row animate-box">
                                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                    <h2>{{ __('Feiert mit uns!')}}</h2>
                                    <p>{{ __('Eine Reise nach Bulgarien ist nicht selbstverständlich.')}}<br>
                                    {{ __('Darum wünschen wir uns nur ein Geschenk: Dass ihr möglichst alle kommt.')}}</p>
                                </div>
                            </div>
                            <div class="row animate-box">
                                <div class="col-md-10 col-md-offset-1">
                                    <form class="form-inline" method="POST" action={{route("attend")}}>
                                        @csrf
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="adults" class="sr-only"></label>
                                                <select class="form-control" name="adults" id="adults">
                                                    <option style="display: none" value="">{{ __('Erwachsene')}}</option>
                                                    <option style="color: grey" value="1">1 {{ __('Erwachsenen')}}</option>
                                                    <option style="color: grey" value="2">2 {{ __('Erwachsenen')}}</option>
                                                    <option style="color: grey" value="3">3 {{ __('Erwachsenen')}}</option>
                                                    <option style="color: grey" value="4">4 {{ __('Erwachsenen')}}</option>
                                                    <option style="color: grey" value="5">5 {{ __('Erwachsenen')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="children" class="sr-only"></label>
                                                <select class="form-control" name="children" id="children">
                                                    <option style="display: none" value="0">{{ __('Kinder')}}</option>
                                                    <option style="color: grey" value="0">{{ __('keine Kinder')}}</option>
                                                    <option style="color: grey" value="1">1 {{ __('Kind')}}</option>
                                                    <option style="color: grey" value="2">2 {{ __('Kinder')}}</option>
                                                    <option style="color: grey" value="3">3 {{ __('Kinder')}}</option>
                                                    <option style="color: grey" value="4">4 {{ __('Kinder')}}</option>
                                                    <option style="color: grey" value="5">5 {{ __('Kinder')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <button type="submit" class="btn btn-default btn-block">{{ __('zusagen')}}</button>
                                        </div>
                                    </form>
                                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                        <br>
                                        <p>{{ __('Tragt euch bitte bis zum 30.04. ein. Danke.')}}</p>
                                    </div>
                                </div>
                            </div>
                    <br>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>{{ __('Schon zugesagt?') }}</h2>
                            <p>{{ __('Hier kannst du alles weitere erledigen.') }}</p>
                            <p><a href="/profile" class="btn btn-default btn-sm" style="height: 54px; line-height: 38px;">{{ __('Dein Profil') }}</a></p>
                        </div>
                    </div>
                @endauth
            </div>
        </div>

        <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>{{ __('Wir sind verliebt') }}</span>
                        <h2>{{ __('Unsere Geschichte') }}</h2>
                        <p>{{ __('Politikwissenschaft ist in Bamberg sehr romantisch.') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/meet.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ __('Das erste Treffen') }}</h3>
                                        <span class="date">{{ __('14. Oktober, 2008') }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Kennengelernt haben wir uns auf einer Erstsemester Party. Eli hatte gerade angefangen, zu studieren. Zufällig hat der Veranstalter damals ein Foto von uns aufgenommen.') }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image:url(images/date.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ __('Das erste Date') }}</h3>
                                        <span class="date">{{ __('20. Oktober, 2008') }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Dachte Stefan zumindest. Eli wollte sich eigentlich nur das Schwimmen beibringen lassen. Zum Glück klappt das nicht an einem Tag.') }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/couple.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ __('In einer Beziehung') }}</h3>
                                        <span class="date">{{ __('26. Oktober, 2008') }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Nach einigem Tumult haben wir uns in die Arme geschlossen und seit dem nicht wieder losgelassen.') }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>{{ __('Wichtige Termine') }}</span>
					<h2>{{ __('Veranstaltungen') }}</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>{{ __('Stadtführung') }}</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        <span>{{ __('10:00 - 11:30 Uhr') }}</span>
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>{{ __('Freitag, 22.07.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>{{ __('Tanzkurs') }}</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        <span>{{ __('16:30 - 18:00 Uhr') }}</span>
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>{{ __('Freitag, 22.07.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>{{ __('Hochzeitszeremonie') }}</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>{{ __('17:30 - 18:15 Uhr') }}</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>{{ __('Samstag, 23.07.') }}</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>{{ __('Hochzeitsfeier') }}</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>{{ __('ab 18:30 Uhr') }}</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>{{ __('Samstag, 23.07.') }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
        <div id="travel"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>{{ __('Auf ins Abenteuer')}}</span>
					<h2>{{ __('Kleiner Reiseführer')}}</h2>
					<p>{{ __('Tipps rund um Bulgarien')}}</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/country.jpg); ">
						<a href="/travel-info">
							<div class="case-studies-summary">
								<span>{{ __('Wie komme ich da hin?') }}</span>
								<h2>{{ __('Reisen nach Bulgarien') }}</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/capitol.jpg); ">
						<a href="/country-info" class="color-2">
							<div class="case-studies-summary">
								<span>{{ __('Was sollte ich wissen?') }}</span>
								<h2>{{ __('Eine kleine Landeskunde') }}</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/city.jpg); ">
						<a href="/bg-info" class="color-3">
							<div class="case-studies-summary">
								<span>{{ __('Was gibt es sonst noch?') }}</span>
								<h2>{{ __('Besuch in Blagoevgrad') }}</h2>
							</div>
						</a>
					</li>
					</ul>
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

