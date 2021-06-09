<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<div class="container bootstrap snippet mt-5 mb-5">

	<div class="row">
		<div class="col-sm-3">
			<!--left col-->
			<div class="text-center">
				<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
				<h6>Upload Foto...</h6>
				<input type="file" class="text-center center-block file-upload">
			</div>
			</hr><br>
		</div>
		<!--/col-3-->
		<div class="col-sm-9">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			</ul>


			<div class="tab-content">
				<div class="tab-pane active" id="home">
					<hr>
					<form class="form" action="##" method="post" id="registrationForm">
						<div class="form-group">
							<div class="col-xs-6 mt-2">
								<label for="first_name">
									<h5>Nama Pasien</h5>
								</label>
								<input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6 mt-2">
								<label for="last_name">
									<h5>Email</h5>
								</label>
								<input type="text" class="form-control" name="email" placeholder="Email" title="enter your last name if any.">
							</div>
						</div>

						<div class="form-group">

							<div class="col-xs-6">
								<label for="phone">
									<h5>Jenis Kelamin</h5>
								</label>
								<input type="text" class="form-control" name="jenis_kelamin" placeholder="enter phone" title="enter your phone number if any.">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-6">
								<label for="mobile">
									<h5>Alamat</h5>
								</label>
								<input type="text" class="form-control" name="alamat" placeholder="Alamat" title="enter your mobile number if any.">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="email">
									<h5>No Telepon</h5>
								</label>
								<input type="email" class="form-control" name="no_telp" placeholder="you@email.com" title="enter your email.">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="email">
									<h5>Tanggal Lahir</h5>
								</label>
								<input type="email" class="form-control" placeholder="somewhere">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<br>
								<button class="btn btn-md btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Simpan</button>
							</div>
						</div>
					</form>

					<hr>

				</div>


			</div>
			<!--/tab-pane-->
		</div>
		<!--/tab-content-->

	</div>
	<!--/col-9-->
</div>
<!--/row-->
