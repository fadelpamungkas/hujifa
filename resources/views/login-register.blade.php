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
	<title>Login/Register Holiyaay!</title>

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
							<a href="index.html" class="standard-logo"><img src="demos/course/images/logo1.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="demos/course/images/logo@2x.png" alt="Canvas Logo"></a>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Instructors</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Events</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">About Us</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>

				</div>
			</div>

			<div id="header-wrap" class="bg-light">
				<div class="container">
					<div class="header-row flex-row-reverse flex-lg-row justify-content-between">

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>My Account</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed icon-lock3"></i>
								<i class="accordion-open icon-unlock"></i>
							</div>
							<div class="accordion-title">
								Login to your Account
							</div>
						</div>
						<div class="accordion-content clearfix">
							<form id="login-form" name="login-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="#" class="float-right">Forgot Password?</a>
								</div>
							</form>
						</div>

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed icon-user4"></i>
								<i class="accordion-open icon-ok-sign"></i>
							</div>
							<div class="accordion-title">
								New Signup? Register for an Account
							</div>
						</div>
						<div class="accordion-content clearfix">
							<form id="register-form" name="register-form" class="row mb-0" action="#" method="post">
								<div class="col-12 form-group">
									<label for="register-form-name">Name:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="register-form-email">Email Address:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="register-form-username">Choose a Username:</label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
								</div>
							</form>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
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