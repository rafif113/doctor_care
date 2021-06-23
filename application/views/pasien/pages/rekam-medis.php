<!-- Content -->
<div class="main-content">
	<!-- Page Header -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-4 col-xl-4 doctor-sidebar">
					<div class="doctor-list doctor-view">
						<div class="doctor-inner">
							<a href="<?= base_url('pasien/konsultasi/download_diagnosa/' . $diagnosa->no_record) ?>">
								<img class="img-fluid" alt="" src="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>">
							</a>
						</div>
					</div>
					<div class="working-hours mt-3">
						<h3>Resep Dokter</h3>
						<ul>
							<!-- <li>
								<span>Monday</span> <b>9.00 AM To 5.00 PM</b>
							</li> -->
						</ul>
						<div class="book-appointment">
							<a href="<?= base_url('pasien/konsultasi/index/' . $diagnosa->no_record) ?>">Tebus Resep</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8 col-lg-8 col-xl-8">
					<div class="about-doctor">
						<h3 class="sub-title">Info Rekam Medis</h3>
						<p>No Rekam Medis : <?= $diagnosa->no_rekam_medis ?></p>
						<p>Tanggal : <?= $diagnosa->tanggal ?>, <?= $diagnosa->jam ?></p>
					</div>
					<div class="about-doctor">
						<h3 class="sub-title">Diagnosa Penyakit</h3>
						<p><?= $diagnosa->diagnosa ?>.</p>
					</div>
					<div class="about-doctor">
						<h3 class="sub-title">Catatan</h3>
						<p><?= $diagnosa->catatan ?>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->