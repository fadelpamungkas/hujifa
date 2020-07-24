<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Portfolio - 4 Columns | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<nav class="navbar navbar-expand-lg p-0 m-0 w-100">
						<div id="logo">
							<a href="/" class="standard-logo"><img src="demos/course/images/logo1.png" alt="Holiyaay Logo"></a>
							<a href="/" class="retina-logo"><img src="demos/course/images/logo@2x.png" alt="Holiyaay Logo"></a>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="/">Home</a>
								</li>
								<li class="nav-item">
									<a href="/portfolio" class="nav-link">Desa Wisata</a>
								</li>
								<li class="nav-item">
									<a href="/forms" class="nav-link">Daftar</a>
								</li>
								<li class="nav-item">
									<a href="/about" class="nav-link">Tentang Kami</a>
								</li>
							</ul>
						</div>
					</nav>

				</div>
			</div>

			<div id="header-wrap" class="bg-light">
				<div class="container">
					<div class="header-row flex-row-reverse flex-lg-row justify-content-between">

						<div class="header-misc">

							<div class="header-buttons mr-3">
								<a href="/login" class="button button-rounded button-border button-small m-0">Log In</a>
								<a href="/login" class="button button-rounded button-small m-0 ml-2">Sign Up</a>
							</div>

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="/login" class="pl-0"><div><i class="icon-line2-login"></i>Login/Sign Up</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Daftar Desa Wisata</h1>
				<span>Temukan Kampung Wisata Terbaik Anda!</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<!-- Portfolio Items
					============================================= -->
					
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
						@foreach($wisata as $wisata)
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="/portfolio-single/{{ $wisata->id_wisata }}"><img src="{{ $wisata->path }}" alt="Shake It"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="{{ $wisata->path }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="/portfolio-single/{{ $wisata->id_wisata }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="/portfolio-single">{{ $wisata->nama_wisata }}</a></h3>
									<h6><a href="/portfolio-single/{{ $wisata->id_wisata }}">{{ $wisata->lokasi }}</a></h6>
								</div>
							</div>
						</article>
						@endforeach
						

					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row">
						<div class="col-6 col-md"  style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
							<img class="mb-3" src="demos/course/images/logo2.png" alt="Image" width="160">
							<small class="d-block mb-4 text-muted">&copy; 2020-2021</small>
							<p class="text-white-50" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, impedit quam nemo doloremque sed, dolores.</p>
							<a href="https://instagram.com/holiyaay.id" class="mb-2 d-block"><i class="icon-instagram"></i> @holiyaay.id</a>
							<a href="#"><i class="icon-line2-envelope mr-2"></i>holiyaay.id@gmail.com</a>
						</div>
						<div class="col-6 col-md">
							<h4 class="text-uppercase ls2 font-weight-normal">Contact The Developer</h4>
							<ul class="list-unstyled mb-0">
								<li><h5 class="mb-0"><a href="https://www.instagram.com/ajiperdanaa_" class="text-white">Muhammad Aji Perdana</a></h5><p>Ajiperdana@gmail.com</p></li>
								<li><h5 class="mb-0"><a href="https://www.instagram.com/fadelpamungkas_" class="text-white">Fadel Pamungkas</a></h5><p>Fadelpamungkas@gmail.com</p></li>
								<li><h5 class="mb-0"><a href="https://www.instagram.com/daffamuafa" class="text-white">Muhammad Daffa Muafa</a></h5><p>Daffamuafa99@gmail.com</p></li>
								<li><h5 class="mb-0"><a href="https://www.instagram.com/prince.husni" class="text-white">Muhammad Husni Tamiri</a></h5><p>Husnitamiri@gmail.com</p></li>
							</ul>
						</div>
						<div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
							<h4 class="text-uppercase ls2 font-weight-normal">Worldwide</h4>
							<a href="#"><img src="demos/course/images/map.png" alt="Image"></a>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row align-items-center justify-content-between">
						<div class="col-md-6">
							Copyrights &copy; 2020 All Rights Reserved by Holiyaay.id <br>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>