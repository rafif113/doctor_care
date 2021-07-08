<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 16:05:16 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Login Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="<?= base_url('assets/admin/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>assets/css/forms/theme-checkbox-radio.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>assets/css/forms/switches.css">
</head>

<body class="form">

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
	<?php unset($_SESSION['message']); ?>
	<div class="form-container outer">
		<div class="form-form">
			<div class="form-form-wrap">
				<div class="form-container">
					<div class="form-content">

						<h1 class="">Dokter</h1>
						<p class="">Silahkan masuk sebagai dokter untuk masuk.</p>

						<form class="text-left" action="<?= base_url('dokter/auth/proses_login') ?>" method="POST">
							<div class="form">

								<div id="username-field" class="field-wrapper input">
									<label for="username">USERNAME</label>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg>
									<input name="username" type="text" class="form-control" placeholder="e.g juda">
									<span class="form-text text-danger"><?= form_error('username'); ?></span>
								</div>

								<div id="password-field" class="field-wrapper input mb-2">
									<div class="d-flex justify-content-between">
										<label for="password">PASSWORD</label>
									</div>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
										<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
										<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
									</svg>
									<input name="password" type="password" class="form-control" placeholder="Password">
									<span class="form-text text-danger"><?= form_error('password'); ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
										<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
										<circle cx="12" cy="12" r="3"></circle>
									</svg>
								</div>
								<div class="d-sm-flex justify-content-between">
									<div class="field-wrapper">
										<button type="submit" class="btn btn-primary" value="">Log In</button>
									</div>
								</div>

								<p class="signup-link">Belum mempunyai akun ? <a href="<?= base_url('dokter/auth/registrasi') ?>">Buat Akun!</a></p>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
	<script src="<?= base_url('assets/admin/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>bootstrap/js/bootstrap.min.js"></script>

	<!-- END GLOBAL MANDATORY SCRIPTS -->
	<script src="<?= base_url('assets/admin/') ?>assets/js/authentication/form-2.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		const flashData = $('.flash-data').data('flashdata');
		console.log(flashData);
		if (flashData) {
			Swal.fire({
				icon: 'error',
				title: 'Error!',
				text: flashData
			});
		}
	</script>

</body>

</html>
