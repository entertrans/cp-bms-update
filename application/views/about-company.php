<section class="page-header padding">
	<div class="container">
		<div class="page-content text-center">
			<h2>Tentang Kami</h2>
			<p>Perusahaan yang bergerak pada Jasa Alat Transportasi & Supplier</p>
		</div>
	</div>
</section>
<section class="service-section section-2 bg-grey padding">
	<div class="dots"></div>
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 sm-padding">
				<div class="service-content wow fadeInLeft">
					<span>Profile Perusahaan</span>
					<h2>PT. BINTANG MUARA SEJATI</h2>
					<p>Kami menyediakan berbagai mode transportasi yang profesional, jasa kontraktor yang
						berpengalaman pada bidangnya dan bahan material pasir yang sesuai dengan spesifikasi
						yang ditentukan dengan memperetimangkan faktor efisiensi sehingga menghasilkan
					produk yang berkualitas dengan harga yang wajar.</p>
					<p>
						VISI :
						<br>Menjadikan perusahaan jasa pelaksanaan kontruksi terdepan di Indonesia yang
						berkembang secara berkesinambungan dengan mengutamakaan keselamatan dan
						keshatan kerja
					</p>
					<p>MISI :
						<br>1. Memberikan Pelayanan , Mutu, dan kepuasan yang terbaik kepda pelanggan
						<br>2. Mengutamakan keselamatan dan kesehatan kerja didalam pelaksanaan pekerjaan
						<br>3. Membangun serta menciptakan citra baik perusahaan
						<br>4. Mengusung nili-nilai pengembangan kompetensi karyawan secara berkelanjutan
						<br>5. Turut berpartisipasi dalam pembanguan Negara Republik Indonesia</p>
						<!-- <a href="#" class="default-btn">Our All Services</a> -->
					</div>
				</div>
				<div class="col-lg sm-padding">
					<div class="row services-list">
						<div class="col-md padding-15">
							<div class="service-item box-shadow wow fadeInUp" data-wow-delay="100ms">
								<i class="flaticon-tanks"></i>
								<div class="col-md d-flex">
									<div class="col-md-6">
										<h3>Office :</h3>
										<br>Jl. Cilincing Baru Pangkalan Pasir
										No. 38 Cilincing, Jakarta Utara
										<br>Telp. : (021) 4494 0288 - 440 5323
										<br>Fax. : (021) 440 5323
										<br>Email : bintang.muara09@yahoo.com
									</div>
									<div class="col-md-6">
										<h3>Factory :</h3>
										<br>Komp. Kawasan Dermaga Jl. Jayapura
										KBN MarundaJakarta Utara
										<br>Telp. : (021) 4494 0288 - 440 5323
										<br>Fax. : (021) 440 5323
										<br>Email : bintang.muara09@yahoo.com
									</div>
								</div>
							<!-- <h3>Office :</h3>
										<br>Jl. Cilincing Baru Pangkalan Pasir
										No. 38 Cilincing, Jakarta Utara
										<br>Telp. : (021) 4494 0288 - 440 5323
										<br>Fax. : (021) 440 5323
										<br>Email : bintang.muara09@yahoo.com -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial-section bg-grey padding">
				<div class="dots"></div>
				<div class="container">
					<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
						<span>Testimonial</span>
						<h2>Apa Kata Mereka</h2>
					</div>
					<div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
						<?php foreach ($testimonial as $dt) {
							?>
							<div class="testi-item d-flex align-items-center">
								<img src="<?= base_url('assets/mockup/core/img/testimoni/'). $dt['photo_testi']?>" alt="img">
								<div class="testi-content">
									<p>"<?= $dt['desc_testi'] ?>"</p>
									<h3><?= $dt['nm_testi'] ?></h3>
									<ul class="rattings">
										<?php for ($i=1; $i <= $dt['bintang'] ; $i++) { 
										 ?>
										<li><i class="fa fa-star"></i></li>
										<?php } ?>
									</ul>
									<span><?= $dt['jbt_testi'] ?></span>
								</div>
								<i class="fa fa-quote-right"></i>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<?php $this->load->view('mockup/layout/core/js'); ?>