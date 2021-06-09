<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->
<style>
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 1900;
	}
</style>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<form class="section contact" action="<?= base_url('dokter/diagnosa/proses_tambah_diagnosa/' . $id_konsultasi) ?>" method="POST" enctype="multipart/form-data">
								<div class="info">
									<h5 class="">Input Diagnosa</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>No Rekam Medis</label>
														<input type="text" name="no_rekam_medis" class="form-control mb-4" placeholder="No rekam medis" value="<?= $diagnosa->no_rekam_medis ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Diagnosa</label>
														<input type="text" name="diagnosa" class="form-control mb-4" placeholder="Input diagnosa disini" value="<?= $diagnosa->diagnosa ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Tanggal</label>
														<input id="myDate" name="tanggal" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Tanggal.." value="<?= $diagnosa->tanggal ?>">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Jam</label>
														<input id="myID" data-enable-time="true" name="jam" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Jam.." value="<?= $diagnosa->jam ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Catatan</label>
														<textarea name="catatan" class="form-control mb-4" cols="30" rows="7"><?= $diagnosa->catatan ?></textarea>
													</div>
												</div>
											</div>
											<?php if ($diagnosa->foto_pemeriksaan != NULL) : ?>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Foto Pemeriksaan</label>
															<img src="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>" class="img-fluid rounded">
														</div>
													</div>
												</div>
											<?php endif; ?>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Foto Pemeriksaan</label>
														<input type="file" name="foto_pemeriksaan" class="form-control mb-4 dropify">
													</div>
												</div>
											</div>
											<button class="btn btn-primary mb-2">Tambah</button>
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
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>

	<script>
		flatpickr("#myDate", {
			enableTime: true,
			dateFormat: "Y-m-d",
		});
	</script>
	<script>
		flatpickr("#myID", {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
		});
	</script>
