<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Medifab - Health &amp; Medical HTML Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/pasien/') ?>img/favicon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/select2.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/owl.theme.default.min.css">

	<!-- Main Css -->
	<link rel="stylesheet" href="<?= base_url('assets/pasien/') ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pasien/') ?>dropify/css/dropify.min.css ">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">


</head>

<body>
	<!-- Header -->
	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-2 float-left">
						<div class="logo">
							<a href="<?= base_url('pasien/') ?>"><img alt="Logo" src="<?= base_url('assets/pasien/') ?>img/logo.png" width="56" height="50"></a>
						</div>
					</div>
					<div class="col-md-10">
						<nav class="navbar navbar-expand-md p-0">
							<div class="navbar-collapse collapse" id="navbar">
								<ul class="nav navbar-nav main-nav float-right ml-auto">
									<li class="nav-item">
										<a href="<?= base_url('pasien/') ?>" class="nav-link">Home</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('pasien/konsultasi/jadwal') ?>" class="nav-link">Riwayat</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('pasien/dokter') ?>" class="nav-link">Dokter</a>
									</li>
									<li class="nav-item">
										<a class="btn btn-primary appoint-btn nav-link" href="<?= base_url('pasien/konsultasi') ?>">Buat Jadwal</a>
									</li>
									<style>
										.show {
											margin-top: -1px
										}
									</style>
									<li class="dropdown nav-item">
										<a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i class="fas fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<?php if ($this->session->username) { ?>
												<a class="dropdown-item" href="<?= base_url('pasien/profile') ?>">Profile</a>
												<a class="dropdown-item" href="<?= base_url('pasien/auth/logout') ?>">Logout</a>
											<?php	} else { ?>
												<a class="dropdown-item" href="<?= base_url('pasien/auth') ?>">Login</a>
												<a class="dropdown-item" href="<?= base_url('pasien/auth/registrasi') ?>">Register</a>
											<?php	} ?>
										</div>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header /-->

	<!-- Mobile Header -->
	<header class="mobile-header">
		<div class="panel-control-left">
			<a class="toggle-menu" href="#side_menu"><i class="fas fa-bars"></i></a>
		</div>
		<div class="page_title">
			<a href="index.html"><img src="<?= base_url('assets/pasien/') ?>img/logo.png" alt="Logo" class="img-fluid" width="60" height="60"></a>
		</div>
	</header>
	<!-- Mobile Header /-->

	<!-- Mobile Sidebar -->
	<div class="sidebar sidebar-menu" id="side_menu">
		<div class="sidebar-inner slimscroll">
			<a id="close_menu" href="#"><i class="fas fa-times"></i></a>
			<ul class="mobile-menu-wrapper" style="display: block;">
				<li class="active">
					<div class="mobile-menu-item clearfix">
						<a href="index.html">Home</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="about-us.html">About Us</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="departments.html">Departments</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="services.html">Services</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="doctors.html">Doctors</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="#" class="menu-toggle">Blog <i class="fas fa-sort-down  menu-toggle"></i></a>
					</div>
					<ul class="mobile-submenu-wrapper" style="display: none;">
						<li>
							<a href="blog.html">Right Sidebar</a>
						</li>
						<li>
							<a href="blog-left-sidebar.html">Left Sidebar</a>
						</li>
						<li>
							<a href="blog-full-width.html">Full Width</a>
						</li>
						<li>
							<a href="blog-grid.html">Blog Grid</a>
						</li>
						<li>
							<a href="blog-details.html">Blog Details</a>
						</li>
					</ul>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="contact-us.html">Contact Us</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="appointment.html">Appointment</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="login.html">Login</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="register.html">Register</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="forgot-password.html">Forgot Password</a>
					</div>
				</li>
				<li>
					<div class="mobile-menu-item clearfix">
						<a href="404.html">404</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Mobile Sidebar /-->
