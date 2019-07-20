<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Prestasi | Bosowa Bina Insani Bogor</title>

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
										<img alt="Porto" width="90" height="90" src="<?php echo base_url()?>template/logo_b.png">
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
									<li><a href="#">Home</a></li>
									<li class="active">Prestasi</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Prestasi Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Bidang-bidang</h2>
					<?php
						$k = $kategori->num_rows();
						$p = $prestasi->num_rows();
						if(empty($k) || empty($p)):
					?>
					<center>
					<table>
						<tr>
							<td><h2>Data Prestasi Belum Ada</h2></td>
						</tr>
					</table>
				</center>
				<?php else: ?>
					<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
						<li data-option-value="*" class="active"><a href="#">Lihat Semua</a></li>
						<?php
							foreach($kategori->result_array() as $data){
								$id = $data['id_prestasi'];
								$nama = $data['nama_prestasi'];
						?>
						<li data-option-value=".<?php echo $id;?>"><a href="#"><?php echo $nama;?></a></li>
					<?php }?>
					</ul>

					<hr>

					<div class="row">

						<div class="sort-destination-loader sort-destination-loader-showing">
							<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
								<?php
									foreach($prestasi->result_array() as $i) :
										$id_prestasi = $i['id_prestasi'];
										$nama_prestasi = $i['nama_prestasi'];
										$deskripsi = $i['deskripsi'];
										$id_kat_prestasi = $i['id_kategori_prestasi'];
										$nama_kategori = $i['nama_kategori'];
										$id_kelas = $i['id_kelas'];
										$kelas = $i['kelas'];
										$id_siswa = $i['id_siswa'];
										$nama_siswa = $i['nama_siswa'];
										$fotosiswa = $i['foto_siswa'];
										$sampul = $i['sampul'];
										$slug = $i['slug'];
								?>
								<li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $id_kat_prestasi;?>">
									<div class="portfolio-item">
										<a href="<?php echo site_url().'achievements/'.$slug;?>">
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="<?php echo base_url().'template/students/prestasi/'.$sampul;?>" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner"><?php echo $nama_prestasi;?></span>
														<span class="thumb-info-type"><?php echo $nama_kategori;?></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>
								</li>
							<?php endforeach;?>
							</ul>
						</div>
					</div>
				<?php endif;?>
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
		<!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d2eaa739b94cd38bbe7bdab/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
	</body>
</html>
