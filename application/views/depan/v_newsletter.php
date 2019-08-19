<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>News Letter | Bosowa Bina Insani Bogor</title>	

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">
    	<meta name="google-site-verification" content="cze8aR-AS_TmcnexzJQZxfJjL6la79AIubhiRvn79RY" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>materialize/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>template/img/apple-touch-icon.png">

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
			page_id="1778541652456050"
	theme_color="#0084ff"
	logged_in_greeting="Halo! ada yang bisa kami bantu? silahkan chat disini yah"
	logged_out_greeting="Halo! ada yang bisa kami bantu? silahkan chat disini yah">
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
									<?php $this->load->view('depan/logo')?>
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
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li><a href="#">Info</a></li>
									<li class="active">News Letter</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>News Letter</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<?php
								$files = $data->num_rows();
								if(empty($files)):
							?>
							<center>
								<table>
									<tr>
										<td><h2>Data News Letter Belum Ada</h2></td>
									</tr>
								</table>
							</center>
							<?php else: ?>
							<?php foreach($data->result() as $row):?>
							<div class="row">
								<div class="col-lg-4">
									<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
										<div>
											<span class="img-thumbnail d-block">
												<img alt="" width="250" height="350" class="img-fluid" src="<?php echo base_url()?>template/default.jpg">
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-8">
									<h2 class="mb-0"><strong><?php echo $row->file_judul;?></strong></h2>
									<hr class="solid">
									<p align="justify"><?php echo $row->file_deskripsi;?></p>
										<a href="<?php echo base_url().'template/files/'.$row->file_data;?>" target="_blank" class="btn btn-3d btn-info btn-xs mb-2"><i class="fa fa-search"></i> Lihat</a>
										<a href="<?php echo site_url('newsletter/get_file/'.$row->file_id);?>" class="btn btn-3d btn-primary btn-xs mb-2"><i class="fa fa-cloud-download"></i> Download</a>
								</div>
							</div>
							<hr class="tall">
								<?php endforeach;?>
								<?php  error_reporting(0); echo $page;?>
							<?php endif;?>
						</div>
						<div class="col-lg-3">
							<h4 class="heading-primary">Link-link Terkait</h4>
							<ul class="nav nav-list flex-column">
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('berita')?>">Berita Sekolah</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('insight_reading')?>">Insight Reading</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('kontak')?>">Hubungi Kami</a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>

			<?php $this->load->view('depan/v_footer');?>
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
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
