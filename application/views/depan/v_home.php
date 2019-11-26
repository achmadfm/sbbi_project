<!DOCTYPE html>
<html>
    
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Home | Bosowa Bina Insani Bogor</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">
    	<meta name="google-site-verification" content="cze8aR-AS_TmcnexzJQZxfJjL6la79AIubhiRvn79RY" />

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

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/circle-flip-slideshow/css/component.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/nivo-slider/nivo-slider.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/nivo-slider/default/default.css">

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
				<div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1366, 'gridheight': 720, 'disableProgressBar': 'on'}">
						<ul>
							<?php
								foreach ($slider->result_array() as $slide) :
									$sld = $slide['nama'];
							?>
							<li data-transition="fade">
								<img src="<?php echo base_url().'/template/sliders/'.$sld;?>"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">
							</li>
						<?php endforeach;?>
						</ul>
					</div>
				</div>
				<br>

				<div class="container">

					<div class="row center">
						<div class="col-md-12">
							<?php $p = $tentang->row_array();?>
							<h1 class="mb-sm word-rotator-title">
								<?php echo $p['judul'];?>
							</h1>
							<p class="lead">
								<?php echo $p['isi'];?>
							</p>
						</div>
					</div>

				</div>

				<hr class="tall">

				<div class="container">
                    <center>
                        <div class="featured-boxes featured-boxes-style-3">
                            <div class="col-lg-12">
                                <div class="featured-box featured-box-primary featured-box-effect-3">
            				        <div class="box-content">
            				            <i class="icon-featured fa fa-mortar-board"></i>
            				            <h2>Jenjang Pendidikan</h2>
            				        </div>
            				    </div>
                            </div>
                        </div>
							<a class="btn btn-primary btn-lg round" href="<?php echo base_url('Sbbi/info_sma')?>">Sekolah Menengah Atas</a>
							<a class="btn btn-danger btn-lg round" href="<?php echo base_url('Sbbi/info_smp')?>">Sekolah Menengah Pertama</a>
							<a class="btn btn-primary btn-lg round" href="<?php echo base_url('Sbbi/info_sd')?>">Sekolah Dasar</a>
							<a class="btn btn-danger btn-lg round" href="<?php echo base_url('Sbbi/info_tk')?>">Taman Kanak-kanak</a>
						    <a class="btn btn-primary btn-lg round" href="<?php echo base_url('Sbbi/info_pg')?>">Play Group</a>
					</center>	
				</div>
				
				<hr class="tall">

				<div class="center">
					<img src="<?php echo base_url()?>template/keunggulan_sbbi.jpg" width="1366px" alt="" />
				</div>

                <hr class="tall">
                
				<section class="parallax section section-text-light section-parallax" data-plugin-parallax data-plugin-options="{'speed': 1}" data-image-src="<?php echo base_url()?>template/pendidikan/daftar_sbbi.jpg">
					<section class="call-to-action">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- <div class="call-to-action-content align-left pb-md mb-xl ml-none">
										<h2 class="text-color-light mb-none">Pendaftaran Siswa Baru <br> Bosowa Bina Insani Bogor untuk sementara <strong>Belum DiBuka</strong></h2>
										<br>
										<a href="http://bit.ly/Register_BSM" target="_blank" class="btn btn-md btn-primary">Daftar? Klik disini!</a>
									</div> -->
									<div class="call-to-action-content align-left pb-md mb-xl ml-none">
										<h2 class="text-color-light mb-none">Pendaftaran Siswa Baru <br> Bosowa Bina Insani Bogor Tahun Ajaran 2019/2020 <br> <strong>Sudah DiBuka</strong></h2>
										<br>
										<a href="http://bit.ly/Register_SBBI" target="_blank" class="btn btn-md btn-primary">Daftar? Klik disini!</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
				

				<hr>

					<div class="container">
					  <div class="row">
							<div class="col-lg-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content">
									<h4 class="text-uppercase">BERITA TERBARU</h4>
									<ul class="list list-icons text-left">
										<?php foreach ($berita->result() as $row) :
										?>
										<li>
											<a href="<?php echo site_url().'news/'.$row->tulisan_slug;?>"><img width="250" height="150" src="<?php echo base_url().'template/cover/'.$row->tulisan_gambar;?>"  alt=" " /></a>
											<br>
											<h4><strong><?php echo $row->tulisan_judul;?></strong></h4>
											<i class="fa fa-calendar-o"></i><strong><em> Tanggal <?php echo Home::format_tanggal($row->tanggal);?></em></strong><br>
                      <i class="fa fa-user-circle"></i><em> (Editor : <?php echo $row->tulisan_author;?>)</em>
                      <?php echo limit_words($row->tulisan_isi,12).'...';?>
										</li>
										<hr>
									<?php endforeach;?>
									</ul>
									<a class="btn btn-primary" href="<?php echo site_url('news')?>">Lihat Semua</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content">
									<h4 class="text-uppercase">Pengumuman</h4>
									<ul class="list list-icons text-left">
										<?php
											$no=0;
											foreach ($pengumuman->result_array() as $p) :
											$no++;
											$id=$p['pengumuman_id'];
											$judul=$p['pengumuman_judul'];
											$deskripsi=$p['pengumuman_deskripsi'];
											$author=$p['pengumuman_author'];
											$tanggal=$p['tanggal'];

										?>
										<li>
											<center><a href="<?php echo base_url().'pengumuman'?>"><img width="100" height="100" src="<?php echo base_url().'template/toas.png'?>"  alt=" " /></a></center>
											<br>
											<h6><strong><?php echo $judul;?></strong></h6>
											<i class="fa fa-calendar-o"></i><strong><em> Posted : <?php echo Home::format_tanggal($tanggal);?></em></strong><br>
											<i class="fa fa-user-circle"></i> (Editor : <?php echo $author;?>)<br>
											<?php echo limit_words($deskripsi,15).'...';?>
										</li>
										<hr>
										<?php endforeach;?>
									</ul>
								<?php
									$data = $pengumuman->num_rows();
									if(empty($data)):
								?>
								<?php else:?>
									<a class="btn btn-primary" href="<?php echo base_url('pengumuman')?>">Lihat Semua</a>
									<?php endif;?>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="featured-box featured-box-primary">
									<div class="box-content">
										<h4 class="text-uppercase">Acara</h4>
										<ul class="list list-icons text-left">
											<?php
												$no=0;
												foreach ($agenda->result_array() as $g) :
												$no++;
												$agenda_id=$g['agenda_id'];
												$agenda_nama=$g['agenda_nama'];
												$agenda_deskripsi=$g['agenda_deskripsi'];
												$agenda_mulai=$g['agenda_mulai'];
												$agenda_selesai=$g['agenda_selesai'];
												$agenda_tempat=$g['agenda_tempat'];
												$agenda_waktu=$g['agenda_waktu'];
												$agenda_keterangan=$g['agenda_keterangan'];
												$agenda_author=$g['agenda_author'];
												$tanggal=$g['tanggal'];
											?>
											<li>
												<center><img width="100" height="100" src="<?php echo base_url().'template/agenda.png'?>"  alt=" " /></center><br>
												<center><h6><strong><a href="<?php echo base_url().'pengumuman'?>"><?php echo $agenda_nama;?></a></strong></h6></center>
												<i class="fa fa-calendar-o"></i><strong> Posted : <?php echo Home::format_tanggal($tanggal);?></strong><br>
												<?php echo limit_words($agenda_deskripsi,10).'...'?>
											</li>
											<hr>
										<?php endforeach;?>
										</ul>

									</div>
								</div>
							</div>
						</div>
					<div class="col-lg-4">
						<div class="featured-box featured-box-primary">
							<div class="box-content">
								<h4 class="text-uppercase">Galeri Instagram</h4>
								<ul class="thumbnail-gallery">
									<div id="instafeedhome">
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>

					  </div>
					</div>
					</div>
					
					<hr class="tall">

					<div class="container">
						<div class="row counters">
							<div class="col-sm-6 col-lg-6">
								<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
								<iframe width="420" height="320" src="https://www.youtube.com/embed/j2PQQxqsbY4" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<label><b>Profil Sekolah Bosowa Bina Insani Bogor</b></label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6">
								<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
								<iframe width="420" height="320" src="https://www.youtube.com/embed/BaAlsV_eYJQ" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<label><b>Ramah Tamah Anak SD Bosowa Bina Insani Bogor</b></label>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="container">
						<div class="row counters">
								<div class="col-sm-6 col-lg-3">
									<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
										<i style="color:#EE564B;" class="fa fa-user-o"></i>
										<strong style="color:#EE564B;" data-to="<?php echo $visitoronline;?>">0</strong>
										<label>Pengunjung Online Saat ini</label>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
										<i style="color:#EE564B;" class="fa fa-users"></i>
										<strong style="color:#EE564B;" data-to="<?php echo $pengunjung?>">0</strong>
										<label>Pengunjung Hari ini</label>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="900">
										<i style="color:#EE564B;" class="fa fa-exchange"></i>
										<strong style="color:#EE564B;" data-to="<?php echo $hits['total'];?>">0</strong>
										<label>Hits hari ini</label>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="counter counter-warning appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="1200">
										<i style="color:#EE564B;" class="fa fa-line-chart"></i>
										<strong style="color:#EE564B;" data-to="<?php echo $lastyear['visitor_last_year'];?>">0</strong>
										<label>Pengunjung Tahun Terakhir</label>
									</div>
								</div>
						</div>
					</div>

			<?php $this->load->view('depan/v_footer')?>
		</div>
		
		
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
		
		<script src="<?php echo base_url()?>template/js/theme.js"></script>

		<script src="<?php echo base_url()?>template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="<?php echo base_url()?>template/js/views/view.home.js"></script>

		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>
		<script src="<?php echo base_url()?>template/js/instagram/instafeed.min.js"></script>
		<script src="<?php echo base_url()?>template/js/instagram/home.js"></script>
	</body>
</html>
