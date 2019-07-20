<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Insight Reading | Bosowa Bina Insani Bogor</title>

        <meta name="keywords" content="Bosowa Bina Insani Bogor" />
		<meta name="description" content="Bosowa Bina Insani Bogor Web Profile">
		<meta name="author" content="#">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>template/favicon.ico" type="image/x-icon" />
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
								<div class="header-row">
								<div class="header-logo">
									<a href="<?php echo base_url()?>">
										<img alt="Porto" width="75" height="75" src="<?php echo base_url()?>template/logo_b.png">
									</a>
								</div>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
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
                  <li><a href="#">Berita</a></li>
									<li class="active">Insight Reading</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Insight Reading</h1>
							</div>
						</div>
					</div>
				</section>

        <hr class="tall">
				<div class="container">

					<div class="row">
						<div class="col-lg-9">
							<div class="blog-posts">
								<article class="post post-medium">
									<div class="row">
									    <?php
									        $d = $data->num_rows();
									        if(empty($d)):
									    ?>
									    <center>
                						    <table>
                							    <tr>
                								    <td><h2>Data Artikel Umum Belum ada</h2></td>
                							    </tr>
                						    </table>
                					    </center>
										<?php
										else:
										echo $this->session->flashdata('msg');
										?>
										<?php foreach($data->result() as $row) : ?>
										<div class="col-lg-3">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
													<div>
														<div class="img-circle">
														    <?php if(empty($row->foto_penulis)) :?>
														        <img class="img-circle custom-rounded-image" style="height:150px; width:150px;" src="<?php echo base_url().'template/images/userblank.png'?>" alt="">
														    <?php else : ?>
															    <img class="img-circle custom-rounded-image" style="height:150px; width:150px;" src="<?php echo base_url().'template/users/'.$row->foto_penulis;?>" alt="">
															<?php endif;?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="post-content">
												<h2><a href="<?php echo site_url().'article/'.$row->artikel_slug;?>"><?php echo $row->artikel_judul;?></a></h2>
													<span><i class="fa fa-user"></i> Oleh : <strong><?php echo $row->nama_lengkap;?></strong> </span>
													<span><i class="fa fa-tag"></i> <?php echo $row->artikel_kategori;?></span>
													<?php echo limit_words($row->artikel_isi,35).'[...]';?>
												
												<a href="<?php echo site_url().'article/'.$row->artikel_slug;?>" class="btn btn-xs btn-primary pull-right">Selengkapnya</a>
											</div>
										</div>
									<?php endforeach;
									    endif;
									?>
									</div>
								</article>
								<?php  error_reporting(0); echo $page;?>
							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">
								<form action="<?php echo base_url('berita/search');?>" method="get">
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="textcari" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>

								<hr>

								<h4 class="heading-primary">Kategori Berita</h4>
								<ul class="nav nav-list flex-column mb-5">
									<?php foreach($category->result() as $row ) : ?>
										<li class="nav-item"><a class="nav-link" href="<?php echo site_url('berita/kategori/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?></a></li>
									<?php endforeach;?>
								</ul>

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
															<?php echo Insight_reading::format_tanggal($row->tanggal);?>
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
															 <?php echo Insight_reading::format_tanggal($row->tanggal);?>
														</div>
													</div>
												</li>
											<?php endforeach;?>
											</ul>
										</div>
									</div>
								</div>

								<hr>

								<h4 class="heading-primary">Tentang</h4>
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
