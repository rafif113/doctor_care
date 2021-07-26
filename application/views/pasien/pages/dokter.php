<!-- Content -->
<div class="main-content">
	<!-- Page Header -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header text-center">
						<h3 class="header-title">Dokter Kami</h3>
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row doctors-list">
				<?php foreach ($dokter as $data) { ?>
					<div class="col-12 col-md-6 col-lg-4 col-xl-4">
						<div class="doctor-list">
							<div class="doctor-inner">
								<img class="img-fluid" alt="" src="<?= base_url('uploads/profile/' . $data->foto) ?>">
								<div class="doctor-details">
									<div class="doctor-info">
										<h4 class="doctor-name"><a href="doctor-details.html"><?= $data->nama_dokter ?></a></h4>
										<p>
											<span class="depart"><?= $data->keahlian ?></span>
											<span class="depart"><?= "Rp " . number_format($data->harga, 2, ",", ".") ?></span>
										</p>
									</div>
									<ul class="social-list">
										<li>
											<a class="facebook" href="#"><i class="fab fa-twitter"></i></a>
										</li>
										<li>
											<a class="twitter" href="#"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li>
											<a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
										</li>
										<li>
											<a class="g-plus" href="#"><i class="fab fa-google-plus-g"></i></a>
										</li>
									</ul>
									<div class="view-profie">
										<a href="<?= base_url('pasien/dokter/detail_dokter/' . $data->id_dokter) ?>">Detail Dokter</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php	} ?>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->
