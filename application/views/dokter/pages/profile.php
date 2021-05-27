<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />


<!--  END CUSTOM STYLE FILE  -->

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

<?php if (isset($_SESSION['flash'])) {
	unset($_SESSION['flash']);
}
if (isset($_SESSION['gagal'])) {
	unset($_SESSION['gagal']);
} ?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<form id="general-info" action="<?= base_url('dokter/profile/update_profile') ?>" method="POST" enctype="multipart/form-data" class="section general-info">
								<div class="info">
									<h6 class="">General Information</h6>
									<div class="row">
										<div class="col-lg-11 mx-auto">
											<div class="row">
												<div class="col-xl-2 col-lg-12 col-md-4">
													<div class="upload mt-4 pr-md-4">
														<?php if ($profile->foto == NULL || $profile->foto == "") { ?>
															<input type="file" name="foto" id="input-file-max-fs" class="dropify" data-default-file="<?= base_url('assets/admin/') ?>assets/img/profile-1.jpg" data-max-file-size="2M" />
														<?php	} else { ?>
															<input type="file" name="foto" id="input-file-max-fs" class="dropify" data-default-file="<?= base_url('uploads/profile/' . $profile->foto) ?>" data-max-file-size="2M" />
														<?php	} ?>
														<p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
													</div>
												</div>

												<div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
													<div class="form">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="fullName">Nama Lengkap</label>
																	<input type="text" name="nama_dokter" class="form-control mb-4" placeholder="Nama Lengkap" value="<?= $profile->nama_dokter ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Username</label>
																	<input type="text" name="username" class="form-control mb-4" placeholder="Username" value="<?= $profile->username ?>">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">No Telepon</label>
																	<input type="text" name="no_telp" class="form-control mb-4" placeholder="Nomer Telepon" value="<?= $profile->no_telp ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Pengalaman Kerja</label>
																	<input type="text" name="pengalaman_kerja" class="form-control mb-4" placeholder="Pengalaman Kerja" value="<?= $profile->pengalaman_kerja ?>">
																</div>
															</div>
														</div>
														<!-- <div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Profession</label>
																	<input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="Web Developer">
																</div>
															</div>

															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Profession</label>
																	<input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="Web Developer">
																</div>
															</div>
														</div> -->
														<button class="btn btn-primary mb-2">Update</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>

						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<form id="contact" class="section contact">
								<div class="info">
									<h5 class="">Ubah Password</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="row">

												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="Jimmy@gmail.com">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="website1">Website</label>
														<input type="text" class="form-control mb-4" id="website1" placeholder="Write your website here">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>