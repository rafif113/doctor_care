<!-- Content -->
<div class="main-content account-content">
	<div class="content">
		<div class="container">
			<div class="account-box">
				<form class="form-signin" action="<?= base_url('pasien/auth/proses_registrasi') ?>" method="post">
					<div class="account-title">
						<h3>registrasi</h3>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="nama_pasien" class="form-control" value="<?php echo set_value('nama_pasien') ?>">
						<span class="form-text text-danger"><?= form_error('nama_pasien'); ?></span>
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input type="text" name="no_telp" class="form-control" value="<?php echo set_value('no_telp') ?>">
						<span class="form-text text-danger"><?= form_error('no_telp'); ?></span>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
						<span class="form-text text-danger"><?= form_error('username'); ?></span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						<span class="form-text text-danger"><?= form_error('password'); ?></span>
					</div>
					<div class="form-group">
						<label>Ketik Ulang Password</label>
						<input type="password" name="password2" class="form-control">
						<span class="form-text text-danger"><?= form_error('password2'); ?></span>
					</div>
					<div class="form-group text-center">
						<button class="btn btn-primary account-btn" type="submit">Buat Akun</button>
					</div>
					<div class="text-center login-link">Sudah mempunyai akun?
						<a href="<?= base_url('pasien/auth') ?>">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->
