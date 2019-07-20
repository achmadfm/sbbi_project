<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Hubungi Kami | Bosowa Bina Insani Bogor</title>

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
		<link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
		<?php echo $map['js'];?>


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
									<li class="active">Hubungi Kami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Hubungi Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-6">
							<h2 class="mb-sm mt-sm"><strong>Hubungi</strong> Kami</h2>
							<form action="<?php echo base_url().'kontak/kirim_pesan'?>" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nama Anda *</label>
											<input type="text" maxlength="100" class="form-control" name="xnama"  required>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email"  maxlength="100" class="form-control" name="xemail" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Nomor Hp Anda *</label>
											<input type="text" maxlength="100" minlength="15" class="form-control" name="xkontak" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Pesan Anda *</label>
											<textarea maxlength="5000" rows="10" class="form-control" name="xpesan" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg">
									</div>
								</div>
							</form>
						</div>

						<hr>
						<div class="col-md-6">

							<h4 class="heading-primary"><strong>Kantor</strong></h4>
								<a class="mt-1 mb-1 popup-gmaps btn btn-primary" href="https://www.google.com/maps/place/Bosowa+Bina+Insani/@-6.5583025,106.7852204,16z/data=!4m5!3m4!1s0x2e69c46e2834b39d:0xabfc5661d9f99759!8m2!3d-6.5567943!4d106.7854672" target="_blank">Open Google Map</a>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Alamat:</strong> Jl. Seremped Wetan, Sukadamai, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164</li>
								<li><i class="fa fa-phone"></i> <strong>Contact Person 1:</strong> 081296631779 (Ms. Yulia)</li>
								<li><i class="fa fa-phone"></i> <strong>Contact Person 2:</strong> 08514196761 (Ms. Alia)</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="#">yayasanbosowabinainsani@gmail.com</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Jam <strong>Kerja</strong></h4>
							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Senin - Jum'at - 7am to 4pm</li>
								<li><i class="fa fa-clock-o"></i> Sabtu - 8am to 12pm</li>
								<li><i class="fa fa-clock-o"></i> Minggu - Tutup</li>
							</ul>

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
		<script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url()?>template/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url()?>template/js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>
		
		 <?php if($this->session->flashdata('msg')=='error'):?>
         <script type="text/javascript">
                 swal("Whoops!","Something Wrong please try again","error")
         </script>
     <?php elseif($this->session->flashdata('msg')=='success'):?>
	       <script type="text/javascript">
	               swal("Thank you!!","Your Message Delivered to our Administrator","success")
	       </script>
			 <?php else:?>
       <?php endif;?>
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
