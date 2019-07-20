<!DOCTYPE html>
<html>
    
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Guru dan Staff | Bosowa Bina Insani Bogor</title>

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
									<li><a href="#">Profil</a></li>
									<li class="active">Guru dan Staff</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Guru dan Staff</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2><strong>Guru dan Staff</strong></h2>

					<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
						<li data-option-value="*" class="active"><a href="#">Lihat Semua</a></li>
						<?php
							foreach($posi->result_array() as $i) {
								$id = $i['id_posisi'];
								$nm = $i['nama_posisi'];
						?>
						<li data-option-value=".<?php echo $id;?>"><a href="#"><?php echo $nm;?></a></li>
					<?php }?>
					</ul>

					<hr>

					<div class="row">
						<div class="sort-destination-loader sort-destination-loader-showing">
							<ul class="team-list sort-destination" data-sort-id="team">
								<?php
                                    $no=0;
                                    foreach ($data->result_array() as $i) :
                                       $no++;
                                       $id=$i['guru_id'];
                                       $nip=$i['guru_nip'];
                                       $nama=$i['guru_nama'];
                                       $jenkel=$i['guru_jenkel'];
                                       $tmp_lahir=$i['guru_tmp_lahir'];
									   $tgl_lahir=$i['guru_tgl_lahir'];
									   $tentang=$i['guru_tentang'];
                                       $mapel=$i['guru_mapel'];
									   $id_posisi=$i['id_posisi'];
									   $namapos=$i['nama_posisi'];
                                       $photo=$i['guru_photo'];
                                ?>
								<li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $id_posisi;?>">
									<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
										<span class="thumb-info-wrapper">
										    <?php if(empty($photo)) :?>
											<a href="#team-content-<?php echo $id;?>" class="popup-with-zoom-anim text-decoration-none">
												<img src="<?php echo base_url()?>template/images/userblank.png" width="250px" height="400px" class="img-fluid" alt="">
											<?php else:?>
											<a href="#team-content-<?php echo $id;?>" class="popup-with-zoom-anim text-decoration-none">
												<img src="<?php echo base_url().'template/teachers/'.$photo;?>" width="250px" height="400px" class="img-fluid" alt="">
											<?php endif;?>
											</a>
											<?php if($namapos=='Kepala Sekolah' || $namapos=='Wakil Kepala Sekolah'):?>
												<span class="thumb-info-title">
													<span class="thumb-info-inner"><?php echo $nama;?></span>
													<span class="thumb-info-type"><?php echo $namapos;?></span>
												</span>
											<?php else: ?>
											    <span class="thumb-info-title">
													<span class="thumb-info-inner"><?php echo $nama;?></span>
													<span class="thumb-info-type"><?php echo $mapel;?></span>
												</span>
											<?php endif;?>
										</span>
									</span>
									<div id="team-content-<?php echo $id;?>" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
										<div class="row">
											<div class="col-lg-4 col-sm-4">
											<?php if(empty($photo)) :?>
												<img src="<?php echo base_url()?>template/images/userblank.png" width="250px" height="400px" class="img-fluid mb-4" alt="">
											<?php else:?>
												<img src="<?php echo base_url().'template/teachers/'.$photo;?>" width="250px" height="400px" class="img-fluid mb-4" alt="">
											<?php endif;?>
												<!-- <ul class="social-icons custom-social-icons text-center">
													<li class="social-icons-facebook">
														<a href="http://www.facebook.com/" target="_blank" title="Facebook">
															<i class="fa fa-facebook"></i>
														</a>
													</li>
													<li class="social-icons-twitter">
														<a href="http://www.twitter.com/" target="_blank" title="Twitter">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li class="social-icons-google">
														<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
															<i class="fa fa-google-plus" aria-hidden="true"></i>
														</a>
													</li>
													<li class="social-icons-linkedin">
														<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
															<i class="fa fa-linkedin"></i>
														</a>
													</li>
												</ul> -->
											</div>
											<div class="col-lg-8 col-sm-8">
												<h2 class="font-weight-semibold text-color-dark mb-1"><?php echo $nama;?></h2>
												<?php
													if($namapos=="Kepala Sekolah"){
														echo "<p class='custom-font-style-1 font-weight-semibold'>".$namapos."</p>";
													}else if($namapos=="Wakil Kepala Sekolah"){
														echo "<p class='custom-font-style-1 font-weight-semibold'>".$namapos."</p>";
													}else if($namapos=="Guru"){
														echo "<p class='custom-font-style-1 font-weight-semibold'>".$namapos." ".$mapel."</p>";
													}else{
														echo "<p class='custom-font-style-1 font-weight-semibold'>".$namapos." Bagian ".$mapel."</p>";
													}
												?>
												
												<?php
													if(empty($tentang)){
														if($jenkel=='P')
															echo "<p class='text-2 custom-line-height-1'>Maaf Untuk Sementara Informasi tentang Ibu ".$nama. " belum kami tampilkan</p>";
														else
															echo "<p class='text-2 custom-line-height-1'>Maaf Untuk Sementara Informasi tentang Bapak ".$nama. " belum kami tampilkan</p>";
													}else{
														echo $tentang;
													}
												?>
											</div>
										</div>
									</div>
								</li>
							<?php endforeach?>
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
		<script src="<?php echo base_url()?>template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Demo -->
		<script src="<?php echo base_url()?>template/js/demos/demo-finance.js"></script>
		
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
