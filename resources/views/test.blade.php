<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<!-- PWA  -->
	<meta name="theme-color" content="#6777ef" />
	<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.hero-image {
			background-image: url("bgi1.jpg");
			background-color: #cccccc;
			height: 800px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.hero-text {
			text-align: center;
			position: absolute;
			top: 65%;
			left: 76%;
			transform: translate(-50%, -50%);
			color: Black;
		}
	</style>

</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item">
									<a title="+123 456 789" href="#"><span class="icon label-before fa fa-mobile"></span>+123 456 789</a>
								</li>

								<li class="menu-item">
									&nbsp;
									&nbsp;
									<a title="tran@gmail.com" href="#"><span class="icon label-before fa fa-envelope"></span>tran@gmail.com</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item menu-item-has-children parent">
									<a title="My account" href="#">My account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="Dashboard" href="#">Dashboard</a>
										</li>
										<li class="menu-item">
											<a title="Categories" href="#">All Categories</a>
										</li>
										<li class="menu-item">
											<a title="Sliders" href="#"> All Sliders</a>
										</li>
										<li class="menu-item">
											<a title="Home Categories" href="#">Manage Home Categories</a>
										</li>
										<li class="menu-item">
											<a title="Sale Setting" href="#">Sale Setting</a>
										</li>
										<li class="menu-item">
											<a title="All Sellers" href="#">All Sellers</a>
										</li>
										<li class="menu-item">
											<a title="All Coupons" href="#">All Coupons</a>
										</li>
										<li class="menu-item">
											<a title="All Coupons" href="#">All Orders</a>
										</li>
										<li class="menu-item">
											<a title="Contact Messages" href="#">Contact Messages</a>
										</li>
										<li class="menu-item">
											<a title="Setting" href="#">Setting</a>
										</li>
										<li class="menu-item">
											<a title="Logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										</li>
										<form id="logout-form" method="POST" action="#">
											@csrf
										</form>
										<li class="menu-item">
											<a title="Dashboard" href="#">Admin</a>
										</li>
									</ul>
								</li>


								<li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a></li>
								<li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Register</a></li>

							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">
						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/tran.png') }}" alt="mercado"></a>
						</div>
					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/about-us" class="link-term mercado-item-title">About</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Causes</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Event</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Blog</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="hero-image">
		<div class="hero-text">
			<div class="wraper">
				<div class="callout callout-info">
					<button class="btn btn-success btn-lg">Donate Now</button>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('/sw.js') }}"></script>
	<script>
		if (!navigator.serviceWorker.controller) {
			navigator.serviceWorker.register("/sw.js").then(function(reg) {
				console.log("Service worker has been registered for scope: " + reg.scope);
			});
		}
	</script>
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	@livewireScripts

	@stack('scripts')
</body>

</html>