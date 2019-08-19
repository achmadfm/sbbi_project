<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Informasi SMA | Bosowa Bina Insani Bogor</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>template/favicon.ico" type="image/x-icon" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/circle-flip-slideshow/css/component.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/nivo-slider/nivo-slider.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/nivo-slider/default/default.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/skins/default-tk.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url()?>template/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
      <script>
			window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v4.0'
			});
			};

			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
		<div class="fb-customerchat"
			attribution=setup_tool
			page_id="215855235280329"
			theme_color="#67b868"
			logged_in_greeting="Halo. Ada yang bisa kami bantu?"
			logged_out_greeting="Halo. Ada yang bisa kami bantu?">
      	</div>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
								<div class="header-logo">
									<a href="<?php echo base_url()?>">
										<?php $this->load->view('depan/logo')?>
									</a>
								</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<?php $this->load->view('depan/search')?>
								</div>
								<div class="header-row">
									<div class="header-nav">

										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
                    <ul class="header-social-icons social-icons hidden-xs">
											<?php $this->load->view('depan/social')?>
										</ul>
                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<?php $this->load->view('depan/nav_menu')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Program Pendidikan</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>SMA Bosowa Bina Insani Bogor</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="nivo-slider">
								<div class="slider-wrapper theme-default">
									<div id="nivoSlider" class="nivoSlider">
										<?php foreach($slider->result_array() as $slide) :
												$foto = $slide['slider_foto'];
												$opsi = $slide['opsi'];
												if($opsi=='SMA'):
											?>
										<img src="<?php echo base_url().'template/sliders_pendidikan/'.$foto;?>" data-thumb="<?php echo base_url().'template/sliders_pendidikan/'.$foto;?>" alt="<?php echo 'Slider '.$opsi;?>" />
									<?php endif;?>
									<?php endforeach;?>
									</div>
									<div id="htmlcaption" class="nivo-html-caption"></div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row text-center">
						<div class="col">
							<?php $t = $tentang->row_array();
								if($t['singkatan_unit']=='SMA'):
							?>
							<h1 class="mb-2 word-rotator-title">
								<?php echo $t['judul']?>
							</h1>
							<p class="lead" style="font-size:18px;">
								<?php echo $t['isi']?>
							</p>
						<?php endif;?>
						</div>
					</div>
				</div>
				
				<hr>

				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="font-weight-bold text-color-dark" align="center">Mata Pelajaran dan Guru Pendidik </h2>
						</div>
						<div class="col-lg-8">
								<div class="featured-box featured-box-primary featured-box-text-left">
									<div class="box-content">
										<div class="row">
											<div class="col-lg-6 mb-4 mb-lg-0">

												<h3 class="heading-primary">Mata Pelajaran</h3>

												<ul class="list list-icons list-primary">
													<?php
														foreach($guru->result_array() as $g):
															$matpel = $g['guru_mapel'];
													?>
													<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fa fa-book"></i>Mata Pelajaran <strong><?php echo $matpel;?></strong></li>
												<?php endforeach;?>
												</ul>

											</div>
											<div class="col-lg-6">

												<h3 class="heading-primary">Guru</h3>

												<ul class="list list-icons list-primary">
													<?php
															foreach($guru->result_array() as $g):
																$namaguru = $g['guru_nama'];
													?>
													<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fa fa-user"></i> <?php echo $namaguru;?></li>
												<?php endforeach;?>
												</ul>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="featured-box featured-box-primary">
									<div class="box-content">
										<h4 class="text-uppercase">Galeri Instagram</h4>
										<ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}" id="instafeed">
											
										</ul>
										<center><a class="btn btn-primary" href="https://www.instagram.com/bosowabinainsani/" target="_blank">Click Here for More Photos</a></center>
									</div>
								</div>
							</div>

							</div>
				</div>

				<section class="custom-section-padding">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark">Testimoni</h2>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true,'autoplayTimeout': 9000, 'loop': true, 'nav': false, 'dots': true}">
									<?php foreach($testi->result_array() as $t):
											$nama = $t['testimoni_nama'];
											$foto = $t['testimoni_foto'];
											$email = $t['testimoni_email'];
											$isi = $t['testimoni_isi'];
											$status = $t['nama_status'];
											$namatipe = $t['nama_tipe'];

											if($namatipe=='SMA'):
										?>
									<div class="row">
										<div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
											<?php if(empty($foto)):?>
											<img src="<?php echo base_url()?>template/img/demos/business-consulting/testimonials/testimonial-author-2.jpg" alt class="img-circle custom-rounded-image" />
										<?php else :?>
											<img src="<?php echo base_url().'template/testimoni/'.$foto;?>" alt class="img-circle custom-rounded-image" />
										<?php endif;?>
										</div>
										<div class="col-12 col-sm-12 col-lg-10">
											<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
												<blockquote class="pb-2">
													<p><?php echo $isi;?></p>
												</blockquote>
												<div class="testimonial-author float-left">
													<p><strong><?php echo $nama;?></strong><span class="text-color-primary"><?php echo $status;?></span></p>
												</div>
											</div>
										</div>
									</div>
								<?php endif;?>
								<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="parallax section section-text-light section-parallax" data-plugin-parallax data-plugin-options="{'speed': 1}" data-image-src="<?php echo base_url()?>template/pendidikan/daftar_sbbi.jpg">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="call-to-action-content align-left pb-md mb-xl ml-none">
										<h3 class="text-color-light mb-none">Pendaftaran Siswa Baru Tahun Ajaran 2019 - 2020 <strong>Telah DiBuka</strong></h3>
										<br>
										<p class="lead mb text-color-light">
										    <strong>Gelombang : </strong> <br>
										    I : November 2018 - Januari 2019<br>
										   II : Februari 2019 - April 2019<br>
										  III : Mei 2019 - Juni 2019
										</p>
										<a href="http://bit.ly/Register_BSM" target="_blank" class="btn btn-md btn-primary">Daftar? Klik disini!</a>
									</div>
								</div>
							</div>
						</div>
				</section>

			</div>

			<?php $this->load->view('depan/v_footer')?>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url()?>template/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url()?>template/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
		<script src="<?php echo base_url()?>template/js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>
		<script src="<?php echo base_url()?>template/js/examples/examples.gallery.js"></script>
		<script src="<?php echo base_url()?>template/js/instagram/instafeed.min.js"></script>
		<script src="<?php echo base_url()?>template/js/instagram/unit.js"></script>
	</body>
</html>
