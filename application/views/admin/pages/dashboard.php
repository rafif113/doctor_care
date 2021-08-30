 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
 	<div class="layout-px-spacing">

 		<div class="row layout-top-spacing">

 			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 				<h2></h2>
 				<div class="widget widget-card-four">
 					<div class="widget-content">
 						<div class="w-header">
 							<div class="w-info">
 								<h6 class="value">Total Pasien Terdaftar</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $pasien ?> <span>Pasien</span> </p>
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
 								<h6 class="value">Selesai Proses Konsultasi</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $selesai_konsultasi ?> <span>Konsultasi</span> </p>
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
 								<h6 class="value">Dalam Proses Konsultasi</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $proses_konsultasi ?> <span>Konsultasi</span> </p>
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
 								<h6 class="value">Pembayaran Belum Diproses</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $belum_pembayaran ?> <span>Pembayaran</span> </p>
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
 								<h6 class="value">Pembayaran Selesai Diproses</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= $selesai_pembayaran ?> <span>Pembayaran</span> </p>
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
 								<h6 class="value">Total Pendapatan Pembayaran Keseluruhan</h6>
 							</div>
 						</div>

 						<div class="w-content">

 							<div class="w-info">
 								<p class="value"><?= "Rp " . number_format($total_pembayaran[0]->total, 2, ",", ".") ?><span></span> </p>
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>


 		</div>

 	</div>
