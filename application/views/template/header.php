<!DOCTYPE html>
<html lang="en">

<head>
	<title>NC shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">


	<link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body>

	<div class="site-wrap">


		<div class="site-navbar bg-white py-2">

			<div class="search-wrap">
				<div class="container">
					<a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
					<form action="#" method="post">
						<input type="text" class="form-control" placeholder="Search keyword and hit enter...">
					</form>
				</div>
			</div>

			<div class="container">
				<div class="d-flex align-items-center justify-content-between">
					<div class="logo">
						<div class="site-logo">
							<a href="<?= base_url('home'); ?>" class="js-logo-clone">Dealers</a>
						</div>
					</div>
					<div class="main-nav d-none d-lg-block">
						<nav class="site-navigation text-right text-md-center" role="navigation">
							<ul class="site-menu js-clone-nav d-none d-lg-block">
								<li class="has-children active">
									<a href="#">Collection</a>
									<ul class="dropdown">
										<li><a href="#">Men</a></li>
										<li><a href="<?php echo base_url('shop/index/hawa'); ?>">Women</a></li>
										<li><a href="#">Children</a></li>
									</ul>
								</li>

								<li><a href="<?= base_url('shop'); ?>">Shop</a></li>
								<li><a href="#">Catalogs</a></li>
								<li><a href="<?= base_url('contak'); ?>">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="icons">
						<a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
						<a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
						<a href="<?= base_url('cart'); ?>" class="icons-btn d-inline-block bag">
							<span class="icon-shopping-bag"></span>
							<span class="number">2</span>
						</a>
						<a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
					</div>
				</div>
			</div>
		</div>
