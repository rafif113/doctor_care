 <!-- Content -->
 <div class="main-content account-content">
 	<div class="content">
 		<div class="container">
 			<div class="account-box">
 				<form class="form-signin" action="<?= base_url('pasien/auth/proses_login') ?>" method="POST">
 					<div class="account-title">
 						<h3>Login</h3>
 					</div>
 					<div class="form-group">
 						<label>Username</label>
 						<input type="text" name="username" class="form-control" autofocus>
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
 					<div class="text-center register-link">Don&#x2019;t have an account?
 						<a href="<?= base_url('pasien/auth/registrasi') ?>">Register Now</a>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Content /-->
