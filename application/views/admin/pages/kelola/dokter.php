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
								<th>No.</th>
								<th>Nama Dokter</th>
								<th>Email</th>
								<th>Keahlian</th>
								<th>Status</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Dr Haga</td>
								<td>haga@gmail.com </td>
								<td>Bedah kulit</td>
								<td class="text-text-center"><span class="badge badge-success"> Aktif </span></td>
								<td class="text-center">
									<a href="<?= base_url('admin/kelola/detail_dokter/') ?>">
										<button class="btn btn-primary btn-sm">Info Dokter
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
												<circle cx="12" cy="12" r="10"></circle>
												<line x1="12" y1="16" x2="12" y2="12"></line>
												<line x1="12" y1="8" x2="12.01" y2="8"></line>
											</svg>
										</button>
									</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Dr Alvin</td>
								<td>alvin@gmail.com </td>
								<td>Bedah Hidung</td>
								<td class="text-text-center"><span class="badge badge-warning"> Tidak Aktif </span></td>
								<td class="text-center">
									<a href="<?= base_url('admin/kelola/detail_dokter/') ?>">
										<button class="btn btn-primary btn-sm">Info Dokter
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
												<circle cx="12" cy="12" r="10"></circle>
												<line x1="12" y1="16" x2="12" y2="12"></line>
												<line x1="12" y1="8" x2="12.01" y2="8"></line>
											</svg>
										</button>
									</a>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Nama Dokter</th>
								<th>Email</th>
								<th>Keahlian</th>
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