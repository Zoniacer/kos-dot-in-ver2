<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kos.in | @yield('title')</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			font-family: 'Varela Round', sans-serif;
		}

		.form-control {
			box-shadow: none;
			font-weight: normal;
			font-size: 13px;
		}

		.navbar {
			background: #fff;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1px solid #dfe3e8;
			border-radius: 0;
		}

		.nav-link img {
			border-radius: 50%;
			width: 36px;
			height: 36px;
			margin: -8px 0;
			float: left;
			margin-right: 10px;
		}

		.navbar .navbar-brand {
			padding-left: 0;
			font-size: 20px;
			padding-right: 50px;
		}

		.navbar .navbar-brand b {
			color: #33cabb;
		}

		.navbar .form-inline {
			display: inline-block;
		}

		.navbar a {
			color: #888;
			font-size: 15px;
		}

		.search-box {
			position: relative;
		}

		.search-box input {
			padding-right: 35px;
			border-color: #dfe3e8;
			border-radius: 4px !important;
			box-shadow: none
		}

		.search-box .input-group-text {
			min-width: 35px;
			border: none;
			background: transparent;
			position: absolute;
			right: 0;
			z-index: 9;
			padding: 7px;
			height: 100%;
		}

		.search-box i {
			color: #a0a5b1;
			font-size: 19px;
		}

		.navbar .sign-up-btn {
			min-width: 110px;
			max-height: 36px;
		}

		.navbar .dropdown-menu {
			color: #999;
			font-weight: normal;
			border-radius: 1px;
			border-color: #e5e5e5;
			box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
		}

		.navbar a,
		.navbar a:active {
			color: #888;
			padding: 8px 20px;
			background: transparent;
			line-height: normal;
		}

		.navbar .navbar-form {
			border: none;
		}

		.navbar .action-form {
			width: 280px;
			padding: 20px;
			left: auto;
			right: 0;
			font-size: 14px;
		}

		.navbar .action-form a {
			color: #33cabb;
			padding: 0 !important;
			font-size: 14px;
		}

		.navbar .action-form .hint-text {
			text-align: center;
			margin-bottom: 15px;
			font-size: 13px;
		}

		.navbar .btn-primary,
		.navbar .btn-primary:active {
			color: #fff;
			background: #33cabb !important;
			border: none;
		}

		.navbar .btn-primary:hover,
		.navbar .btn-primary:focus {
			color: #fff;
			background: #31bfb1 !important;
		}

		.navbar .social-btn .btn,
		.navbar .social-btn .btn:hover {
			color: #fff;
			margin: 0;
			padding: 0 !important;
			font-size: 13px;
			border: none;
			transition: all 0.4s;
			text-align: center;
			line-height: 34px;
			width: 47%;
			text-decoration: none;
		}

		.or-seperator {
			margin-top: 32px;
			text-align: center;
			border-top: 1px solid #e0e0e0;
		}

		.or-seperator b {
			color: #666;
			padding: 0 8px;
			width: 30px;
			height: 30px;
			font-size: 13px;
			text-align: center;
			line-height: 26px;
			background: #fff;
			display: inline-block;
			border: 1px solid #e0e0e0;
			border-radius: 50%;
			position: relative;
			top: -15px;
			z-index: 1;
		}

		.navbar .action-buttons .dropdown-toggle::after {
			display: none;
		}

		.form-check-label input {
			position: relative;
			top: 1px;
		}

		.navbar .btn-secondary {
			color: #fff;
			border: 2px solid #33cabb !important;
			border: none;
		}

		.site-footer {
			background-color: #3e7963;
			padding: 45px 0 20px;
			font-size: 15px;
			line-height: 24px;
			color: #ffffff;
		}

		.site-footer hr {
			border-top-color: #bbb;
			opacity: 0.5
		}

		.site-footer hr.small {
			margin: 20px 0
		}

		.site-footer h6 {
			color: #91DD76;
			font-size: 16px;
			text-transform: uppercase;
			margin-top: 5px;
			letter-spacing: 2px
		}

		.site-footer a {
			color: #ffffff;
		}

		.site-footer a:hover {
			color: #ffffff;
			text-decoration: none;
		}

		.footer-links {
			padding-left: 0;
			list-style: none
		}

		.footer-links li {
			display: block
		}

		.footer-links a {
			color: #ffffff
		}

		.footer-links a:active,
		.footer-links a:focus,
		.footer-links a:hover {
			color: #213e33;
			text-decoration: none;
		}

		.footer-links.inline li {
			display: inline-block
		}

		.site-footer .social-icons {
			text-align: right
		}

		.site-footer .social-icons a {
			width: 40px;
			height: 40px;
			line-height: 40px;
			margin-left: 6px;
			margin-right: 0;
			border-radius: 100%;
			background-color: #213e33
		}

		.copyright-text {
			margin: 0
		}

		@media (max-width:991px) {
			.site-footer [class^=col-] {
				margin-bottom: 30px
			}
		}

		@media (max-width:767px) {
			.site-footer {
				padding-bottom: 0
			}

			.site-footer .copyright-text,
			.site-footer .social-icons {
				text-align: center
			}
		}

		.social-icons {
			padding-left: 0;
			margin-bottom: 0;
			list-style: none
		}

		.social-icons li {
			display: inline-block;
			margin-bottom: 4px
		}

		.social-icons li.title {
			margin-right: 15px;
			text-transform: uppercase;
			color: #96a2b2;
			font-weight: 700;
			font-size: 13px
		}

		.social-icons a {
			background-color: #eceeef;
			color: #818a91;
			font-size: 16px;
			display: inline-block;
			line-height: 44px;
			width: 44px;
			height: 44px;
			text-align: center;
			margin-right: 8px;
			border-radius: 100%;
			-webkit-transition: all .2s linear;
			-o-transition: all .2s linear;
			transition: all .2s linear
		}

		.social-icons a:active,
		.social-icons a:focus,
		.social-icons a:hover {
			color: #fff;
			background-color: #29aafe
		}

		.social-icons.size-sm a {
			line-height: 34px;
			height: 34px;
			width: 34px;
			font-size: 14px
		}

		.social-icons a.facebook:hover {
			background-color: #3b5998
		}

		.social-icons a.twitter:hover {
			background-color: #00aced
		}

		.social-icons a.linkedin:hover {
			background-color: #007bb6
		}

		.social-icons a.dribbble:hover {
			background-color: #ea4c89
		}

		@media (max-width:767px) {
			.social-icons li.title {
				display: block;
				margin-right: 0;
				font-weight: 600
			}
		}

		@media (min-width: 1200px) {
			.form-inline .input-group {
				width: 300px;
				margin-left: 30px;
			}
		}

		@media (max-width: 768px) {
			.navbar .dropdown-menu.action-form {
				width: 100%;
				padding: 10px 15px;
				background: transparent;
				border: none;
			}

			.navbar .form-inline {
				display: block;
			}

			.navbar .input-group {
				width: 100%;
			}
		}
	</style>
	<script>
		// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
	</script>
	<link rel="icon" type="image/x-icon" href="assets/logover2.png">
</head>

<body>
	@section('navbar')
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		<a href="/dashboard">
			<img src="assets/logover2.png" alt="" width="80" height="50">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collection of nav links, forms, and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<div class="navbar-nav">
				<a href="{{ route('add-kos.page') }}" class="nav-item nav-link mt-1">Kenalkan Kos Kamu</a>
			</div>
			<div class="navbar-nav">
				<a href="{{ route('search.page') }}" class="nav-item nav-link mt-1">Cari Kos</a>
			</div>
			<div class="navbar-nav ml-auto action-buttons">
				@auth
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="">
						<ion-icon name="accessibility-outline"></ion-icon>
					</a>
					<div class="dropdown-menu action-form">
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Selamat datang, {{ auth()->user()->name }}</p>

						</form>
					</div>
				</div>
				@else
				<div class="nav-item dropdown">
					<a href="{{ route('login-page') }}" class="nav-link mt-1 mr-4">Masuk</a>
					<!-- <div class="dropdown-menu action-form">
					<form action="{{ route('login') }}" method="post">
						@csrf {{ csrf_field() }}
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Kata Sandi" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Masuk">
					</form>
				</div> -->
				</div>
				<div class="nav-item dropdown">
					<a href="{{ route('registration-page') }}" class="btn btn-primary sign-up-btn mt-1">Registrasi</a>
					<!-- <div class="dropdown-menu action-form">
					<form action="{{ route('register') }}" method="post">
						@csrf 
						<p class="hint-text">Isi form berikut ini untuk membuat akun anda! {{ auth()->check() }}</p>
						<div class="form-group">
							<input name='name' type="text" class="form-control" placeholder="Nama Akun" required="required">
						</div>
						<div class="form-group">
							<input name='email' type="email" class="form-control" placeholder="Email" required="required">
						</div>
						<div class="form-group">
							<input name='password' type="password" class="form-control" placeholder="Kata Sandi" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi" required="required">
						</div>
						<div class="form-group">
							<label class="form-check-label"><input type="checkbox" required="required"> Saya setuju dengan <a href="#">Terms &amp; Conditions</a></label>
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Registrasi">
					</form>
				</div> -->
					@endauth
				</div>
			</div>
		</div>
		</div>
	</nav>
	@show
	@yield("isi")

	@section('footer')
	<!-- Site footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>About</h6>
					<p class="text-justify">Kos.In memanfaatkan teknologi untuk mengembangkan aplikasi cari kos agar
						menjadi aplikasi yang memudahkan
						calon anak kos untuk booking properti kos dan juga melakukan pembayaran kos. Kos.In berharap
						agar dapat memudahkan
						pemilik kos untuk mendapatkan calon anak kos secepat mungkin. Kos.In berusaha untuk bisa terus
						menyajikan daftar rumah kos dengan data ketersediaan
						kamar yang akurat, fasilitas kos terperinci, dan dilengkapi dengan foto serta detail harga kos
						agar calon penghuni mendapatkan
						kenyamanan dalam proses pencarian dan booking kos.</p>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Kebijakan</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/category/c-language/">Kebijakan Privasi</a></li>
						<li><a href="http://scanfcode.com/category/front-end-development/">Syarat dan Ketentuan Umum</a>
						</li>
					</ul>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Contact Us</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/about/">customer@kos.in.com</a></li>
						<li><a href="http://scanfcode.com/contact/">+62 8992 3335 2222</a></li>
					</ul>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
						<a href="#">Kos.In</a>.
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	@show
</body>

</html>