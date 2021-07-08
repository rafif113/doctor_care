<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

<style>
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 1900;
	}
</style>



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Id Pembayaran.</th>
								<th>Nama Pasien</th>
								<th>Nominal</th>
								<th>Tanggal Bayar</th>
								<th class="text-center">Bukti Bayar</th>
								<th>Status</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>PB-12197418</td>
								<td>Haga</td>
								<td>Rp. 80.000</td>
								<td>7 Juli 2019</td>
								<td class="text-center">
									<button class="btn btn-white btn-sm" data-toggle="modal" data-target="#buktiBayar"> Lihat Bukti
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-primary">
											<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
											<circle cx="12" cy="12" r="3"></circle>
										</svg>
									</button>
								</td>
								<td class="text-text-center"><span class="badge badge-success"> Terbayar </span></td>
								<td class="text-center">
									<button type="button" disabled class="btn btn-success btn-sm"> Pembayaran Diterima
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
											<polyline points="20 6 9 17 4 12"></polyline>
										</svg>
									</button>
								</td>
							</tr>
							<tr>
								<td>PB-12197419</td>
								<td>Juda</td>
								<td>Rp. 90.000</td>
								<td>7 Juli 2019</td>
								<td class="text-center">
									<button class="btn btn-white btn-sm" data-toggle="modal" data-target="#buktiBayar"> Lihat Bukti
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-primary">
											<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
											<circle cx="12" cy="12" r="3"></circle>
										</svg>
									</button>
									<!-- Modal -->
									<div class="modal fade" id="buktiBayar" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12 mx-auto">
															<input type="file" disabled class="dropify" data-default-file="imagePath">
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Tutup</button>
												</div>
											</div>
										</div>
									</div>
									<!-- End Modal -->
								</td>
								<td class="text-text-center"><span class="badge badge-warning"> Belum Terbayar </span></td>
								<td class="text-center">
									<button class="btn btn-warning btn-sm">Terima Pembayaran
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
											<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
											<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
										</svg>
									</button>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Id Pembayaran.</th>
								<th>Nama Pasien</th>
								<th>Nominal</th>
								<th>Tanggal Bayar</th>
								<th>Bukti Bayar</th>
								<th>Status</th>
								<th class="invisible"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>

		</div>

	</div>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>
	<script>
		var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			defaultDate: "09:45"
		});
	</script>
	<script>
		var f4 = flatpickr(document.getElementById('timeFlatpickr2'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			defaultDate: "16:45"
		});
	</script>