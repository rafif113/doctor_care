<!-- Content -->
<div class="main-content account-content">
	<div class="content">
		<div class="container">
			<div class="account-box">
				<div class="appointment">
					<h3>Isi Data Dibawah Ini</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="clinic-consultation">
							<?= form_open_multipart('pasien/konsultasi/tambah_janji', array('method' => 'POST')) ?>
							<div class="form-group">
								<label>Nama Dokter <span class="text-red">*</span>
								</label>
								<select class="select" name="id_dokter">
									<option selected disabled>Please select</option>
									<?php foreach ($dokter as $data) { ?>
										<option value="<?= $data->id_dokter ?>" <?php echo set_select('id_dokter',  $data->id_dokter, (!empty($dataOption) && $dataOption == $data->id_dokter ? TRUE : FALSE)); ?>><?= $data->nama_dokter ?></option>
									<?php } ?>
								</select>
								<span class="form-text text-danger"><?= form_error('id_dokter'); ?></span>
							</div>
							<div class="form-group">
								<label>Tanggal <span class="text-red">*</span>
								</label>
								<div class="calendar">
									<div class="input-wrapper">
										<input name="tanggal" data-date-format="yyyy/mm/dd" id="datepicker" class="cal-input" autocomplete="off"> <i class="far fa-calendar-alt input-icon"></i>
									</div>
								</div>
								<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
							</div>
							<div class="form-group">
								<label>Jam Konsultasi <span class="text-red">*</span>
								</label>
								<input type="text" id="timepicker" name="jam" class="form-control timepicker">
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
