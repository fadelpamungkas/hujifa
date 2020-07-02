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
	<link rel="stylesheet" href="css/components/radio-checkbox.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Cart | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

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
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container">
				<h1>Beli Tiket Desa Wisata</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item"><a href="/portfolio">Desa Wisata</a></li>
					<li class="breadcrumb-item active" aria-current="page">Beli Tiket</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="table-responsive mb-5">
						<table class="table cart">
							<thead>
								<tr>
									<th class="cart-product-remove">&nbsp;</th>
									<th class="cart-product-thumbnail">&nbsp;</th>
									<th class="cart-product-name">Nama Desa Wisata</th>
									<th class="cart-product-price">Harga Tiket</th>
									<th class="cart-product-quantity">Jumlah</th>
									<th class="cart-product-subtotal">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="cart_item">
									<td class="cart-product-remove">
										<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
									</td>

									<td class="cart-product-thumbnail">
										<a href="#"><img width="64" height="64" src="images/portfolio/4/tamansari.jpg" alt="Pink Printed Dress"></a>
									</td>

									<td class="cart-product-name">
										<a href="#">Desa Wisata Tamansari</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">Rp 18.000</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="1" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">Rp 18.000</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td colspan="6">
										<div class="row">
											<div class="col-lg-4 col-4 p-0">
												<div class="row">
													<div class="col-lg-8 col-7">
														<input type="text" value="" class="sm-form-control" placeholder="Enter Coupon Code.." />
													</div>
													<div class="col-lg-4 col-5">
														<a href="#" class="button button-3d button-black m-0">Apply Coupon</a>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr class="cart_item">
									<td colspan="2">
										<div>
											<input id="radio-7" class="radio-style" name="radio-group-2" type="radio" checked>
											<label for="radio-7" class="radio-style-2-label">Transfer Bank</label>
										</div>
										<div>
											<input id="radio-8" class="radio-style"name="radio-group-2" type="radio">
											<label for="radio-8" class="radio-style-2-label">Virtual Account</label>
										</div>
										<div>
											<input id="radio-9" class="radio-style" name="radio-group-2" type="radio">
											<label for="radio-9" class="radio-style-2-label">OVO</label>
										</div>
									</td>
									<td>
										<div>
												<a href="#" class="button button-3d"> Bayar</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
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