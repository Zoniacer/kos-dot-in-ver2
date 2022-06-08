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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
	<img src="assets/logover2.png" alt=""  width="80" height="50">  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link mt-1">Kenalkan Kos Kamu</a>
		</div>
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link mt-1">Cari Kos</a>
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
=======
=======
>>>>>>> fix commit
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		<img src="assets/logover2.png" alt="" width="80" height="50">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collection of nav links, forms, and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<div class="navbar-nav">
				<a href="#" class="nav-item nav-link mt-1">Kenalkan Kos Kamu</a>
			</div>
			<div class="navbar-nav">
				<a href="{{ route('search') }}" class="nav-item nav-link mt-1">Cari Kos</a>
			</div>
			<div class="navbar-nav ml-auto action-buttons">
				@auth
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="">
						<ion-icon name="accessibility-outline"></ion-icon>
					</a>
					<div class="dropdown-menu action-form">
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Selamat datang {{ auth()->user()->name }}</p>

						</form>
					</div>
				</div>
				@else
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mt-1 mr-4">Masuk</a>
					<div class="dropdown-menu action-form">
						<form action="{{ route('login') }}" method="post">
							@csrf
							<!-- {{ csrf_field() }} -->
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Kata Sandi"
									required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Masuk">
						</form>
					</div>
				</div>
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown"
						class="btn btn-primary dropdown-toggle sign-up-btn mt-1">Registrasi</a>
					<div class="dropdown-menu action-form">
						<form action="{{ route('register') }}" method="post">
							@csrf
							<!-- {{ csrf_field() }} -->
							<p class="hint-text">Isi form berikut ini untuk membuat akun anda!</p>
							<div class="form-group">
								<input name='name' type="text" class="form-control" placeholder="Nama Akun"
									required="required">
							</div>
							<div class="form-group">
								<input name='email' type="email" class="form-control" placeholder="Email"
									required="required">
							</div>
							<div class="form-group">
								<input name='password' type="password" class="form-control" placeholder="Kata Sandi"
									required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi"
									required="required">
							</div>
							<div class="form-group">
								<label class="form-check-label"><input type="checkbox" required="required"> Saya setuju
									dengan <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Registrasi">
						</form>
					</div>
					@endauth
				</div>
>>>>>>> add search frontend
			</div>
=======
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		<img src="assets/logover2.png" alt="" width="80" height="50">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collection of nav links, forms, and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<div class="navbar-nav">
				<a href="#" class="nav-item nav-link mt-1">Kenalkan Kos Kamu</a>
			</div>
			<div class="navbar-nav">
				<a href="{{ route('search') }}" class="nav-item nav-link mt-1">Cari Kos</a>
			</div>
			<div class="navbar-nav ml-auto action-buttons">
				@auth
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="">
						<ion-icon name="accessibility-outline"></ion-icon>
					</a>
					<div class="dropdown-menu action-form">
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Selamat datang {{ auth()->user()->name }}</p>

						</form>
					</div>
				</div>
				@else
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mt-1 mr-4">Masuk</a>
					<div class="dropdown-menu action-form">
						<form action="{{ route('login') }}" method="post">
							@csrf
							<!-- {{ csrf_field() }} -->
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Kata Sandi"
									required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Masuk">
						</form>
					</div>
				</div>
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown"
						class="btn btn-primary dropdown-toggle sign-up-btn mt-1">Registrasi</a>
					<div class="dropdown-menu action-form">
						<form action="{{ route('register') }}" method="post">
							@csrf
							<!-- {{ csrf_field() }} -->
							<p class="hint-text">Isi form berikut ini untuk membuat akun anda!</p>
							<div class="form-group">
								<input name='name' type="text" class="form-control" placeholder="Nama Akun"
									required="required">
							</div>
							<div class="form-group">
								<input name='email' type="email" class="form-control" placeholder="Email"
									required="required">
							</div>
							<div class="form-group">
								<input name='password' type="password" class="form-control" placeholder="Kata Sandi"
									required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi"
									required="required">
							</div>
							<div class="form-group">
								<label class="form-check-label"><input type="checkbox" required="required"> Saya setuju
									dengan <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Registrasi">
						</form>
					</div>
					@endauth
				</div>
			</div>
>>>>>>> f584dbf1f6314520ce1309e990c3438395ac3feb
		</div>
	</nav>
	@show
	@yield("isi")
	<footer>
		@section('footer')
		@show
	</footer>
</body>

</html>