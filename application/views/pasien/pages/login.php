 <!-- Content -->
 <div class="main-content account-content">
 	<div class="content">
 		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
 		<?php unset($_SESSION['message']); ?>
 		<div class="container">
 			<div class="account-box">
 				<form class="form-signin" action="<?= base_url('pasien/auth/proses_login') ?>" method="POST">
 					<div class="account-title">
 						<h3>Login</h3>
 					</div>
 					<div class="form-group">
 						<label>Username</label>
 						<input type="text" name="username" class="form-control" autofocus value="<?php echo set_value('username') ?>">
 						<span class="form-text text-danger"><?= form_error('username'); ?></span>
 					</div>
 					<div class="form-group">
 						<label>Password</label>
 						<input type="password" name="password" class="form-control">
 						<span class="form-text text-danger"><?= form_error('password'); ?></span>
 					</div>
 					<div class="form-group text-center">
 						<button class="btn btn-primary account-btn" type="submit">Login</button>
 					</div>
 					<div class="text-center register-link">Belum mempunyai akun?
 						<a href="<?= base_url('pasien/auth/registrasi') ?>">Daftar Sekarang</a>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Content /-->

 <script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
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
