<!-- Content -->

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<?php unset($_SESSION['success']); ?>
<div class="main-content">
	<section class="section home-banner row-middle">
		<div class="inner-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9">
					<div class="banner-content">
						<h1>Doctor Care</h1>
						<p>Konsultasi lah bersama dokter professional kami secara online dengan biaya konsultasi yang terjangkau</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="banner-content">
						<h4>Buat Janji Dengan Dokter Terpecaya</h4>
						<select id="myselect" class="wide mb-2" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
							<option value="" data-display="Select">Daftar Dokter</option>
							<?php foreach ($dokter as $row) { ?>
								<option value="<?= base_url('pasien/dokter/detail_dokter/' . $row->id_dokter) ?>"><?= $row->nama_dokter ?></option>
							<?php	} ?>
						</select>
						<span><a href="<?= base_url('pasien/dokter') ?>">Lihat Semua Dokter</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section features">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header text-center">
						<h3 class="header-title">Tentang Doctor Care</h3>
						<div class="line"></div>
						<p>Berikut merupakan unggulan jika anda memakai applikasi doctor care.</p>
					</div>
				</div>
			</div>
			<div class="row feature-row">
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-img">
							<img width="60" height="60" alt="Book an Appointment" src="<?= base_url('assets/pasien/') ?>img/icon-01.png">
						</div>
						<h4>Buat janji</h4>
						<p>Disini anda bisa membuat janji sesuai jadwal dokter yang tersedia.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-img">
							<img width="60" height="60" alt="Consult with a Doctor" src="<?= base_url('assets/pasien/') ?>img/icon-02.png">
						</div>
						<h4>Konsultasi dengan dokter</h4>
						<p>Disini anda bisa konsultasi dengan dokter mengenai penyakit ataupun masalah kecantikan anda.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-img">
							<img width="60" height="60" alt="Make a family Doctor" src="<?= base_url('assets/pasien/') ?>img/icon-03.png">
						</div>
						<h4>Dokter cepat tanggap.</h4>
						<p>Disini anda akan mendapatkan pelayanan terbaik dan juga dokter yang cepat tanggap dalam melayani anda.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Content /-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>nice-select/js/jquery.nice-select.js"></script>
<!-- Script -->

<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			icon: 'success',
			title: 'Sukses!',
			text: flashData
		});
	}
</script>
<script>
	$(document).ready(function() {
		$("#myselect").niceSelect();
	});
</script>
