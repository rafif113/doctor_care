<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Admin Apotek </title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/admin/') ?>assets/img/favicon.ico" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/loader.css" rel="stylesheet" type="text/css" />
	<script src="<?= base_url('assets/admin/') ?>assets/js/loader.js"></script>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="<?= base_url('assets/admin/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<link href="<?= base_url('assets/admin/') ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/admin/') ?>assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>plugins/animate/animate.css" rel="stylesheet" type="text/css" />
	<!-- <script src="<?= base_url('assets/admin/') ?>plugins/sweetalerts/promise-polyfill.js"></script>
	<link href="<?= base_url('assets/admin/') ?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" /> -->
	<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
	<!-- BEGIN LOADER -->
	<div id="load_screen">
		<div class="loader">
			<div class="loader-content">
				<div class="spinner-grow align-self-center"></div>
			</div>
		</div>
	</div>
	<!--  END LOADER -->

	<!--  BEGIN NAVBAR  -->
	<div class="header-container fixed-top">
		<header class="header navbar navbar-expand-sm">

			<ul class="navbar-item theme-brand flex-row  text-center">
				<li class="nav-item theme-logo">
					<a href="<?= base_url('admin/') ?>">
						<img src="<?= base_url('assets/admin/') ?>assets/img/logo.svg" class="navbar-logo" alt="logo">
					</a>
				</li>
				<li class="nav-item theme-text">
					<a href="<?= base_url('admin/') ?>" class="nav-link"> DOKTORCARE </a>
				</li>
			</ul>

			<ul class="navbar-item flex-row ml-md-0 ml-auto">
				<li class="nav-item align-self-center search-animated">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
						<circle cx="11" cy="11" r="8"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
					</svg>
					<form class="form-inline search-full form-inline search" role="search">
						<div class="search-bar">
							<input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
						</div>
					</form>
				</li>
			</ul>

			<ul class="navbar-item flex-row ml-md-auto">

				<li class="nav-item dropdown user-profile-dropdown">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

						<?php if ($this->session->foto == NULL || $this->session->foto == '') { ?>
							<img src="<?= base_url('assets/admin/') ?>assets/img/profile-16.jpg" alt="avatar">
						<?php	} else { ?>
							<img src="<?= base_url('uploads/profile/' . $this->session->foto) ?>" alt="avatar">
						<?php	} ?>

					</a>
					<div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
						<div class="">
							<div class="dropdown-item">
								<a class="" href="<?= base_url('apotek/profile') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg> Profile</a>
							</div>
							<div class="dropdown-item">
								<a class="" href="<?= base_url('apotek/auth/logout') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
										<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
										<polyline points="16 17 21 12 16 7"></polyline>
										<line x1="21" y1="12" x2="9" y2="12"></line>
									</svg> Sign Out</a>
							</div>
						</div>
					</div>
				</li>
				</li>

			</ul>
		</header>
	</div>
	<!--  END NAVBAR  -->

	<!--  BEGIN NAVBAR  -->
	<div class="sub-header-container">
		<header class="header navbar navbar-expand-sm">
			<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
					<line x1="3" y1="12" x2="21" y2="12"></line>
					<line x1="3" y1="6" x2="21" y2="6"></line>
					<line x1="3" y1="18" x2="21" y2="18"></line>
				</svg></a>

			<ul class="navbar-nav flex-row">
				<li>
					<div class="page-header">

						<nav class="breadcrumb-one" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url('apotek/') ?>">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page"><span><?= $this->uri->segment(3); ?></span></li>
							</ol>
						</nav>

					</div>
				</li>
			</ul>
		</header>
	</div>
	<!--  END NAVBAR  -->

	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">

		<div class="overlay"></div>
		<div class="search-overlay"></div>

		<?php $this->load->view('apotek/layouts/sidebar'); ?>
