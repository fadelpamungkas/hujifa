<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="css/components/bs-filestyle.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Jobs - Forms | Canvas</title>

<style>
.file-caption.icon-visible .file-caption-name {
	font-family: 'Lato', sans-serif;
	color: #666;
}
</style>

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
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Daftar</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-6">
								<form class="row" action="/daftar" method="post" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<!-- <div class="col-12 form-group">
										<label>Nama:</label>
										<input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="" placeholder="Masukkan nama lengkap anda">
									</div>
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Masukkan Email anda">
									</div> -->
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-md-6 form-group">
												<label>Nama Desa Wisata:</label>
												<input type="varchar" name="nama_wisata" id="jobs-application-name" class="form-control" value="" placeholder="Masukkan nama Desa Wisat anda">
											</div>
											<div class="col-md-6 form-group">
												<label>No Telepon:</label>
												<input type="text" name="contact" id="jobs-application-phone" class="form-control required" value="" placeholder="Masukkan Nomor Telepon Anda">
											</div>

											<div class="w-100"></div>
											<div class="col-md-12 form-group">
												<label>Alamat:</label>
												<input type="varchar" name="lokasi" id="jobs-application-location" class="form-control" value="" placeholder="Masukkan alamat Desa Wisata anda">
											</div>
											<div class="w-100"></div>
											<div class="col-md-6 form-group">
												<label>Jam Buka:</label>
												<input type="text" name="jobs-application-jambuka" id="jobs-application-location" class="form-control" value="" placeholder="contoh : 00.00-23.59">
											</div>
											<div class="col-md-6 form-group">
												<label>Harga Tiket:</label>
												<input type="integer" name="harga" id="jobs-application-location" class="form-control" value="" placeholder="contoh : 20.000">
											</div>
										</div>
										<div class="form-group">
											<label>Upload foto desa wisata Anda:</label>
											<input type="file" id="jobs-application-resume" name="path" class="file-loading required" data-show-preview="false" />
										</div>
										<div class="form-group">
											<label>Deskripsikan kampung wisata anda:</label>
											<textarea name="description" id="jobs-application-message" class="form-control required" cols="30" rows="10"></textarea>
										</div>
									</div>

									<div class="col-12">
										<button type="submit" name="submit" class="btn btn-primary">Daftar</button>
									</div>
									
								</form>
							</div>

							<div class="col-lg-6 pl-lg-5">
								<p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, giving; fight against malnutrition experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>

								<blockquote class="topmargin bottommargin">
									<p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful, truth technology catalytic effect. Promising development capacity building international enable poverty.</p>
								</blockquote>

								<div class="w-100">
									<p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches visionary implementation. End hunger evolution, future promising development youth. Public sector, small-scale farmers; harness facilitate gender. Contribution dedicated global change movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity catalyze. Partner deep.</p>
								</div>

								<div class="w-100">
									<p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie natural resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce carbon emissions nonviolent resistance human being. Solve innovate aid communities; benefit truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief; many voices impact crisis situation poverty pride. Vaccine carbon.</p>
								</div>

							</div>

						</div>

					</div>

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

	<!-- DatePicker JS -->
	<script src="js/components/datepicker.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="js/components/bs-filestyle.js"></script>

	<!-- TinyMCE Plugin -->
	<script src="js/components/tinymce/tinymce.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		jQuery(document).ready( function(){
			$('.dobpicker').datepicker({
				autoclose: true,
			});

			$("#jobs-application-resume").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});

			tinymce.init({
				selector: '#jobs-application-message',
				menubar: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});
		})
	</script>

</body>
</html>