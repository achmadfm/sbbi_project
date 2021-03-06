<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Sambutan Kepala Sekolah | Bosowa Bina Insani Bogor</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>template/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>template/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
							<div class="header-logo">
									<a href="<?php echo base_url()?>">
										<?php $this->load->view('depan/logo')?>
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<?php $this->load->view('depan/search')?>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<?php $this->load->view('depan/social')?>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
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
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Profil</a></li>
									<li class="active">Sambutan Kepala Sekolah</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Sambutan-sambutan Kepala Sekolah</h1>
							</div>
						</div>
					</div>
				</section>

					<div class="container">
						<div class="col-md-12">
							<?php $s = $speech->row_array();?>
							<h2>Sambutan Kepala TK-KB Sekolah Bosowa Bina Insani Bogor</h2>
							<div class="sticky-container">
								<div class="row">
									<div class="col-md-8">
										<p align="justify"><?php echo $s['isi_sambutan'];?></p>
									</div>
									<div class="col-md-4">
										<div class="center" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 110}}">
											<img class="pull-right img-responsive" width="300" height="211" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" alt="">
											<strong>(Kepala Sekolah | <?php echo $s['nama_kepsek'];?>)</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="container">
						<div class="col-md-12">
							<?php $s = $speechsd->row_array();?>
							<h2 align="right">Sambutan Kepala Sekolah SD Bosowa Bina Insani Bogor</h2>
							<div class="row">
								<div class="col-lg-4">
									<aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
										<img class="pull-left img-responsive" width="300" height="211" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" alt="">
										<strong>(Kepala Sekolah | <?php echo $s['nama_kepsek'];?>)</strong>
									</aside>
								</div>
								<div class="col-lg-8">
									<p align="justify"><?php echo $s['isi_sambutan'];?></p>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">
					
					<div class="container">
						<div class="col-md-12">
							<?php $s = $speechsmp->row_array();?>
							<h2>Sambutan Kepala Sekolah SMP Bosowa Bina Insani Bogor</h2>
							<div class="sticky-container">
								<div class="row">
									<div class="col-md-8">
										<p align="justify"><?php echo $s['isi_sambutan'];?></p>
									</div>
									<div class="col-md-4">
										<div class="center" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 110}}">
											<img class="pull-right img-responsive" width="300" height="211" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" alt="">
											<strong>(Kepala Sekolah | <?php echo $s['nama_kepsek'];?>)</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="container">
						<div class="col-md-12">
							<?php $s = $speechsma->row_array();?>
							<h2 align="right">Sambutan Kepala Sekolah SMA Bosowa Bina Insani Bogor</h2>
							<div class="row">
								<div class="col-lg-4">
									<aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
										<img class="pull-left img-responsive" width="300" height="211" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" alt="">
										<strong>(Kepala Sekolah | <?php echo $s['nama_kepsek'];?>)</strong>
									</aside>
								</div>
								<div class="col-lg-8">
									<p align="justify"><?php echo $s['isi_sambutan'];?></p>
								</div>
							</div>
						</div>
					</div>
				</div>


			<?php $this->load->view('depan/v_footer')?>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery-cookie/jquery-cookie.min.js"></script>
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

		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>
	</body>
</html>
