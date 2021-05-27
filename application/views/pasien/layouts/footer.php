<!-- Footer -->
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<h4 class="footer-title">Location</h4>
						<div class="about-clinic">
							<p><strong>Address:</strong>
								<br>1603 Old York Rd,
								<br>Houma, LA, 75429
							</p>
							<p class="m-b-0"><strong>Phone</strong>:
								<a href="tel:+8503867896">(850) 386-7896</a>
								<br> <strong>Fax</strong>:
								<a href="tel:+8503867896">(850) 386-7896</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<h4 class="footer-title">Sitemap</h4>
						<ul class="footer-menu">
							<li>
								<a href="about-us.html">About Us</a>
							</li>
							<li>
								<a href="departments.html">Departments</a>
							</li>
							<li>
								<a href="services.html">Services</a>
							</li>
							<li>
								<a href="doctors.html">Doctors</a>
							</li>
							<li>
								<a href="contact-us.html">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<h4 class="footer-title">Blog</h4>
						<ul class="footer-menu">
							<li>
								<a href="blog.html">Right Sidebar</a>
							</li>
							<li>
								<a href="blog-left-sidebar.html">Left Sidebar</a>
							</li>
							<li>
								<a href="blog-full-width.html">Full Width</a>
							</li>
							<li>
								<a href="blog-grid.html">Blog Grid</a>
							</li>
							<li>
								<a href="blog-details.html">Blog Details</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<h4 class="footer-title">Appointment</h4>
						<div class="appointment-btn">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<ul class="social-icons clearfix">
								<li>
									<a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li>
									<a href="#" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a>
								</li>
								<li>
									<a href="#" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="copyright">
				<div class="row">
					<div class="col-12">
						<div class="copy-text text-center">
							<p>&#xA9; 2019 <a href="#">Medifab</a>. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer /-->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff="#side_menu"></div>

<!-- jQuery -->
<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?= base_url('assets/pasien/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/pasien/') ?>js/bootstrap.min.js"></script>

<!-- Owl Carousel JS -->
<script src="<?= base_url('assets/pasien/') ?>js/owl.carousel.min.js"></script>

<!-- Custom JS -->

<!-- Select2 JS -->
<script src="<?= base_url('assets/pasien/') ?>js/select2.min.js"></script>
<script src="<?= base_url('assets/pasien/') ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>dropify/js/dropify.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.dropify').dropify({
			messages: {
				default: ' ',
				replace: 'Ganti',
				remove: 'Hapus',
				error: 'error'
			}
		});
	});
</script>
<!-- Datetimepicker JS -->
<script src="<?= base_url('assets/pasien/') ?>js/bootstrap-datetimepicker.min.js"></script>
<script src="<?= base_url('assets/pasien/') ?>js/datepicker.js"></script>
<script src="<?= base_url('assets/pasien/') ?>js/theme.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript">
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

</body>

</html>