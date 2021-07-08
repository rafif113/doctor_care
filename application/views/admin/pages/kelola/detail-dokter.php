<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />


<!--  END CUSTOM STYLE FILE  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<div class="section general-info">
								<div class="info">
									<h6 class="">Informasi Dokter</h6>
									<div class="row">
										<div class="col-lg-11 mx-auto">
											<div class="row">
												<div class="col-xl-2 col-lg-12 col-md-4">
													<div class="upload mt-4 pr-md-4">
														<!-- <?php if ($profile->foto == NULL || $profile->foto == "") { ?> -->
														<input type="file" disabled id="input-file-max-fs" class="dropify" data-default-file="<?= base_url('assets/admin/') ?>assets/img/profile-1.jpg" data-max-file-size="2M" />
														<!-- <?php	} else { ?>
															<input type="file" name="foto" id="input-file-max-fs" class="dropify" data-default-file="<?= base_url('uploads/profile/' . $profile->foto) ?>" data-max-file-size="2M" />
														<?php	} ?> -->
														<button type="button" class="btn btn-warning mt-3">Non Aktifkan</button>
													</div>
												</div>

												<div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
													<div class="form">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="fullName">Nama Lengkap</label>
																	<input type="text" readonly name="nama_dokter" class="form-control mb-4" value="Dr Juda">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Username</label>
																	<input type="text" readonly name="username" class="form-control mb-4" value="juda">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">No Telepon</label>
																	<input type="text" readonly name="no_telp" class="form-control mb-4" placeholder="Nomer Telepon" value="085447518586">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Email</label>
																	<input type="text" readonly name="email" class="form-control mb-4" placeholder="Email" value="juda@mail">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Tarif Konsultasi</label>
																	<input type="number" readonly name="harga" class="form-control mb-4" placeholder="Harga" value="Rp 50.000">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Pengalaman Kerja</label>
																	<input type="text" readonly name="pengalaman_kerja" class="form-control mb-4" placeholder="Pengalaman Kerja" value="Menjadi Dokter terbaik">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">STR</label>
																	<input type="number" readonly name="str" class="form-control mb-4" placeholder="STR" value="1122323">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Keahlian</label>
																	<input type="text" readonly name="keahlian" class="form-control mb-4" placeholder="Keahlian" value="Dokter Wajah">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>