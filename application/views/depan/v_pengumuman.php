<!DOCTYPE html>
<html>
    
	<head>
    		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Pengumuman | Bosowa Bina Insani Bogor</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>template/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>img/apple-touch-icon.png">

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
		<?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
    ?>
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
										<img alt="Porto" width="100" height="100" src="<?php echo base_url()?>template/logo_b.png">
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
									<li class="active">Pengumuman | Acara</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Pengumuman | Acara Timeline</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div class="blog-posts">
								<section class="timeline">
									<div class="timeline-body">
										<?php
											$d = $data->num_rows();
											$a = $agenda->num_rows();
											if(empty($d) && empty($a)) :
										?>
										<div class="timeline-date">
											<h3 class="heading-primary">Data Tidak Ada</h3>
										</div>
									    <?php else: ?>
										<div class="timeline-date">
											<h3 class="heading-primary">Pengumuman | Acara</h3>
										</div>
										<?php

											$no=0;
											foreach($data->result_array() as $i) :
												 $no++;
												 $id=$i['pengumuman_id'];
												 $judul=$i['pengumuman_judul'];
												 $deskripsi=$i['pengumuman_deskripsi'];
												 $author=$i['pengumuman_author'];
												 $tanggal=$i['tanggal'];
										?>
										<article class="timeline-box left post post-medium">
											<div class="row">
												<div class="col-md-12">
													<div class="post-content">
														<h4 class="heading-primary"><a href="#"><?php echo $judul;?> (Pengumuman)</a></h4>
														<p><?php echo $deskripsi;?></p>
													</div>

												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-meta">
														<span><i class="fa fa-calendar"></i> Tanggal : <?php echo Pengumuman::format_tanggal($tanggal);?></span><br>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-meta">
														<span><i class="fa fa-user"></i> Postingan : <a href="#"><?php echo $author;?></a> </span>
													</div>
												</div>
											</div>
										</article>
										<?php endforeach;?>

										<?php
											$no=0;
											foreach ($agenda->result_array() as $i) :
												 $no++;
												 $agenda_id=$i['agenda_id'];
												 $agenda_nama=$i['agenda_nama'];
												 $agenda_deskripsi=$i['agenda_deskripsi'];
												 $agenda_mulai=$i['agenda_mulai'];
												 $agenda_selesai=$i['agenda_selesai'];
												 $agenda_tempat=$i['agenda_tempat'];
												 $agenda_waktu=$i['agenda_waktu'];
												 $agenda_keterangan=$i['agenda_keterangan'];
												 $agenda_author=$i['agenda_author'];
												 $sampul=$i['sampul'];
												 $tanggal=$i['tanggal'];

											?>
										<article class="timeline-box right post post-medium">
											
											<div class="row">
												<div class="col-md-12">
													<div class="post-content">
														<h4 class="heading-primary"><a href="blog-post.html"><?php echo $agenda_nama;?> (Acara)</a></h4>
													</div>

												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-image">
														<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
															<div>
																<div class="img-thumbnail d-block">
																	<img class="img-fluid" src="<?php echo base_url().'template/sampul/agenda/'.$sampul;?>" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-content">
														<p><?php echo $agenda_deskripsi;?></p> 
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-meta">
														<span><i class="fa fa-calendar"></i> Posted : <?php echo Pengumuman::format_tanggal($tanggal);?></span><br>
														<span><i class="fa fa-map-marker"></i> Lokasi : di <?php echo $agenda_tempat;?></span><br>
														<span><i class="fa fa-calendar-check-o"></i> Tanggal Pelaksanaan : <?php echo Pengumuman::format_tanggal($agenda_mulai);?></span>
														<span><i class="fa fa-clock-o"></i> Mulai Jam <?php echo $agenda_waktu;?></span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="post-meta">
														<span><i class="fa fa-user"></i> Postingan : <a href="#"><?php echo $agenda_author;?></a> </span>
													</div>
												</div>
											</div>
										</article>
									<?php endforeach;?>
								<?php endif;?>
									</div>

								</section>

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
