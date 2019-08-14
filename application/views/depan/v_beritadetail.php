<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php echo $title;?> | Bosowa Bina Insani Bogor</title>
		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Bina Insani Bogor, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">
    	 
    	<?php 
    	   
    	if ($this->uri->segment(1)=='news'){ 
    	    $rows = $this->m_tulisan->view_where('tbl_tulisan',array('tulisan_slug' => $this->uri->segment(2)))->row_array();
	    echo '<meta property="og:title" content="'.$title.'" />
			 <meta property="og:type" content="article" />
			 <meta property="og:url" content="'.base_url().''.$this->uri->segment(2).'" />
			 <meta property="og:image" content="'.base_url().'template/cover/'.$rows['tulisan_gambar'].'" /> 
			 <meta property="og:description" content="'.$deskripsi.'"/>';
	    } ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>template/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>img/apple-touch-icon.png">

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
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

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

				<section class="page-header page-header-color page-header-primary page-header-more-padding">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-9">
								<h1><?php echo $title;?></h1>
							</div>
							<div class="col-lg-3">
								<ul class="breadcrumb">
									<li><a href="#">Berita</a></li>
									<li><a href="#">Berita Sekolah</a></li>
									<li class="active">Detail Berita</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="<?php echo base_url().'template/cover/'.$image;?>" alt="">
												</div>
											</div>
										</div>
									</div>
									<?php
										$tgl = $tanggal;
										$hari = date('d', strtotime($tgl));
										$bulan = date('M',strtotime($tgl));
									?>
									<div class="post-date">
										<span class="day"><?php echo $hari;?></span>
										<span class="month"><?php echo $bulan;?></span>
									</div>

									<div class="post-content">

										<div class="post-meta">
											<span><i class="fa fa-user"></i> Penulis : <?php echo $author;?> </span>
											<span><i class="fa fa-tags"> <?php echo $kategori;?></i></span>
											<span><i class="fa fa-eye"></i> dibaca : <strong><?php echo $views;?></strong> kali</span>
											<span><div class="fb-root"></div>
											<div class="fb-like" data-href="<?php echo site_url().'news/'.$slug;?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true"></div></span>
										</div>

										<p><?php echo $blog;?></p>
										<div class="post-block post-share">
											<h3 class="heading-primary"><i class="fa fa-share"></i>Bagikan</h3>
											<div class="addthis_inline_share_toolbox"></div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a3c9df7bac34d25"></script>

										</div>

										<div class="col-sm-12">
											<div class="tabs tabs-bottom tabs-left tabs-simple">
												<ul class="nav nav-tabs">
													<li class="nav-item active">
														<a class="nav-link" href="#tabsNavigationSimple1" data-toggle="tab">Komentar Melalui Facebook Anda</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#tabsNavigationSimple2" data-toggle="tab">Komentar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#tabsNavigationSimple3" data-toggle="tab">Tinggalkan Komentar anda</a>
													</li>
												</ul>
												<div class="tab-content">

													<div class="tab-pane active" id="tabsNavigationSimple1">
															<div class="post-block post-comments clearfix">
																<h3 class="heading-primary"><i class="fa fa-comments"></i>Komentar </h3>
																	<div class="fb-root"></div>
																	<div class="fb-comments" data-href="<?php echo site_url().'news/'.$slug;?>" data-numposts="5"></div>
															</div>
													</div>

													<div class="tab-pane" id="tabsNavigationSimple2">
															<div class="post-block post-comments clearfix">
																<h3 class="heading-primary"><i class="fa fa-comments"></i>Komentar </h3>
																	<ul class="comments">
																		<?php
				                              $colors = array(
				                                  '#ff9e67',
				                                  '#10bdff',
				                                  '#14b5c7',
				                                  '#f98182',
				                                  '#8f9ce2',
				                                  '#ee2b33',
				                                  '#d4ec15',
				                                  '#613021',
				                              );
				                              foreach ($show_komentar->result() as $row) :
				                              shuffle($colors);
				                            ?>
																		<li>
																		<div class="comment">
																			<div class="img-thumbnail d-none d-sm-block" style="background-color:<?php echo reset($colors);?>;width: 75px;height: 75px;border-radius:50px 50px 50px 50px;">
                                          <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama,0,1);?></h2></center>
                                      </div>
																			<div class="comment-block">
																				<div class="comment-arrow"></div>
																				<span class="comment-by">
																					<strong><?php echo $row->komentar_nama;?></strong>
																				</span>
																				<p><?php echo $row->komentar_isi;?></p>
																				<span class="date float-right"><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></span>
																			</div>
																		</div>

																		<ul class="comments reply">
																			<?php
	                					            $komentar_id=$row->komentar_id;
	                					            $query=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");
	                					            foreach ($query->result() as $res) :
	                                        shuffle($colors);
                					        		?>
																			<li>
																				<div class="comment">
																					<div class="img-thumbnail d-none d-sm-block" style="background-color:<?php echo reset($colors);?>;width:75px; height:75px;border-radius:50px 50px 50px 50px;">
                                              <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($res->komentar_nama,0,1);?></h2></center>
                                          </div>
																					<div class="comment-block">
																						<div class="comment-arrow"></div>
																						<span class="comment-by">
																							<strong><?php echo $res->komentar_nama;?></strong> <em>(Balasan)</em>
																						</span>
																						<p><?php echo $res->komentar_isi;?></p>
																						<span class="date float-right"><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></span>
																					</div>
																				</div>
																			</li>
																		<?php endforeach;?>
																		</ul>
																	</li>
																<?php endforeach;?>
																</ul>

															</div>
													</div>
													<div class="tab-pane" id="tabsNavigationSimple3">
														<div class="post-block post-leave-comment">
															<h3 class="heading-primary">Tinggalkan Komentar anda</h3>
															<form action="<?php echo base_url('berita/komentar');?>" method="post">
																<div class="form-row">
																	<div class="form-group col-sm-6">
																		<label>Nama *</label>
																		<input type="text" value="" maxlength="100" class="form-control" name="nama" placeholder="Nama Lengkap" required >
																	</div>
																	<div class="form-group col-sm-6">
																		<label>Email *</label>
																		<input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Email" required>
																	</div>
																</div>
																<div class="form-row">
																	<div class="form-group col-sm-12">
																		<label>Isi Komentar *</label>
																		<textarea maxlength="5000" rows="10" class="form-control" name="komentar" required></textarea>
																	</div>
																</div>
																<div class="form-row">
																	<div class="form-group col-sm-2">
																		<input type="hidden" name="id" value="<?php echo $id;?>" required>
																		<input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>

							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">

								<form action="<?php echo site_url('berita/search');?>" method="get">
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>

								<hr>

								<div class="tabs mb-xlg">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Populer</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Terbaru</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<?php foreach($populer->result() as $row) :
													?>

												<li>
													<div class="post-image">
														<div class="img-thumbnail">
																<img src="<?php echo base_url().'template/cover/'.$row->tulisan_gambar;?>" height="50px" width="50px">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="<?php echo site_url().'news/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a>
														<div class="post-meta">
															<?php echo Berita::format_tanggal($row->tanggal);?>
														</div>
													</div>
												</li>
											<?php endforeach;?>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<?php
                                                  foreach($recent->result() as $row):
                                                ?>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="<?php echo base_url().'news/'.$row->tulisan_slug;?>">
																<img src="<?php echo base_url().'template/cover/'.$row->tulisan_gambar;?>" height="50px" width="50px">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="<?php echo base_url().'news/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul?></a>
														<div class="post-meta">
															 <?php echo Berita::format_tanggal($row->tanggal);?>
														</div>
													</div>
												</li>
											<?php endforeach;?>
											</ul>
										</div>
									</div>
								</div>

								<hr>

								<h4 class="heading-primary">Tentang Kami</h4>
								<?php $p = $tentang->row_array();?>
								<p><?php echo $p['isi'];?></p>
							</aside>
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
		 <?php if($this->session->flashdata('msg')=='error'):?>
         <script type="text/javascript">
                 swal("Whoops!","Something Wrong please try again","error")
         </script>
     <?php elseif($this->session->flashdata('msg')=='success'):?>
	       <script type="text/javascript">
	               swal("Terima Kasih!!","Komentar anda Berhasil terkirim, Admin akan memproses Komentar anda","success")
	       </script>
			 <?php else:?>
       <?php endif;?>
	</body>
</html>
