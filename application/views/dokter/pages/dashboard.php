 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
 	<div class="layout-px-spacing">

 		<div class="row layout-top-spacing">

 			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 				<div class="widget widget-card-four">
 					<div class="widget-content">
 						<div class="w-header">
 							<div class="w-info">
 								<h6 class="value">Pasien Diproses</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $number_proses ?> <span>Pasien</span> </p>
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>

 			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 				<div class="widget widget-card-four">
 					<div class="widget-content">
 						<div class="w-header">
 							<div class="w-info">
 								<h6 class="value">Pasien Selesai</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $number_selesai ?> <span>Pasien</span> </p>
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>

 			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 				<div class="widget widget-card-four">
 					<div class="widget-content">
 						<div class="w-header">
 							<div class="w-info">
 								<h6 class="value">Total Pendapatan</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= "Rp " . number_format($pendapatan, 2, ",", ".") ?> </p>
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>



 			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
 				<div class="widget widget-chart-three">
 					<div class="widget-heading">
 						<div class="">
 							<h5 class="">Grafik Pasien</h5>
 						</div>
 					</div>

 					<div class="widget-content">
 						<div id="mixed-chart"></div>
 					</div>
 				</div>
 			</div>

 		</div>

 	</div>
 	<script src="<?= base_url('assets/admin/') ?>plugins/apex/apexcharts.min.js"></script>
 	<script>
 		var options = {
 			chart: {
 				height: 350,
 				type: 'bar',
 				toolbar: {
 					show: false,
 				}
 			},
 			series: [{
 				name: 'Pasien Konsultasi',
 				type: 'column',
 				data: [<?= $month2 ?>, <?= $month1 ?>, <?= $week3 ?>, <?= $week2 ?>, <?= $week1 ?>]
 			}],
 			stroke: {
 				width: [0, 4]
 			},
 			title: {
 				// text: 'Grafik Pasien'
 			},
 			labels: ['< 2 Bulan', '< 1 Bulan', '< 3 Minggu', '< 2 Minggu', '< 1 Minggu'],
 			xaxis: {
 				type: 'date'
 			},
 			yaxis: [{
 				title: {
 					text: 'Pasien Konsultasi',
 				},

 			}]

 		}

 		var chart = new ApexCharts(
 			document.querySelector("#mixed-chart"),
 			options
 		);

 		chart.render();
 	</script>
