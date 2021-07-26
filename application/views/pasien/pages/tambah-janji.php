<!-- Content -->
<div class="main-content account-content">
	<div class="content">
		<div class="container">
			<div class="account-box">
				<div class="appointment">
					<h3>Isi Data Dibawah Ini</h3>
					<p>Data dibawah ini nantinya akan diarahkan untuk berkonsultasi dengan salah satu dokter kami yaitu, <?= $dokter->nama_dokter ?>.</p>
					<div class="tab-content">
						<div class="tab-pane active" id="clinic-consultation">
							<?= form_open_multipart('pasien/konsultasi/tambah_janji', array('method' => 'POST')) ?>
							<div class="form-group">
								<label>Tanggal <span class="text-red">*</span>
								</label>
								<select name="tanggal" id="tangl" class="form-control">
									<option>Pilih Tanggal</option>
									<?php foreach ($jadwal as $data) { ?>
										<option value="<?= $data->tanggal ?>" data-id="<?= $data->jam_mulai . " - " . $data->jam_berakhir ?>"><?= longdate_indo($data->tanggal) ?></option>
									<?php	} ?>
								</select>
								<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
							</div>
							<div class="form-group">
								<label>Jam Konsultasi <span class="text-red">*</span>
								</label>
								<input type="text" id="timepicker" name="jam" class="form-control timepicker">
								<span class="form-text" style="font-size: 12px;" id="info-jam"></span>
								<span class="form-text text-danger"><?= form_error('jam'); ?></span>
							</div>
							<div class="form-group">
								<label>Keluhan</label>
								<textarea name="keluhan" class="form-control"></textarea>
								<span class="form-text text-danger"><?= form_error('keluhan'); ?></span>
							</div>
							<div class="form-group">
								<label>Foto Keluhan</label>
								<input type="file" name="foto_keluhan" class="dropify" data-height="200">
								<span class="form-text text-danger"><?= form_error('foto_keluhan'); ?></span>
							</div>
							<input type="hidden" name="id_dokter" class="form-control" value="<?= $dokter->id_dokter ?>">
							<input type="hidden" name="nominal" class="form-control" value="<?= $dokter->harga ?>">
							<div class="form-group text-center m-b-0">
								<input type="submit" class="btn btn-primary account-btn" value="Submit">
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->
<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>dropify/js/dropify.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript">
	$("#tangl").on('change', function() {
		var jam_mulai = $(this).find(':selected').data('id')
		console.log(jam_mulai);
		$('#info-jam').text(`*Diharapkan menginput pada pukul ${jam_mulai}`);
	})
	$(document).ready(function() {
		$('.timepicker').timepicker({
			timeFormat: 'H:mm',
			interval: 60,
			minTime: '08',
			maxTime: '8:00pm',
			defaultTime: '11',
			startTime: '08:00',
			dynamic: false,
			dropdown: true,
			scrollbar: true
		});
	});
</script>
