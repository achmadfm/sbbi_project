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
    	   
    	if ($this->uri->segment(1)=='article'){ 
    	    $rows = $this->m_artikel->view_where('tbl_artikel',array('artikel_slug' => $this->uri->segment(2)))->row_array();
	        echo  '<meta property="og:title" content="'.$title.'" />';
	        echo  '<meta property="og:description" content="'.$deskripsi.'"/>';
	        echo  '<meta property="og:type" content="article" />';
	        echo	'<meta property="og:url" content="'.base_url().''.$this->uri->segment(2).'" />';
	         if(empty($rows['foto_penulis'])){
	             echo '<meta property="og:image" content="'.base_url().'template/images/userblank.png"/> ';
	         }else{
	             echo '<meta property="og:image" content="'.base_url().'template/users/'.$rows['foto_penulis'].'" /> ';
	         }
			 
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
									<li class="active">Insight Reading</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1><?php echo $title;?></h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-lg-2">
						    <?php if(empty($foto)) :?>
						        <img src="<?php echo base_url().'template/images/userblank.png';?>" height="150px" width="150px" class="img-circle appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0" data-appear-animation-duration="1s">
						    <?php else : ?>
							    <img src="<?php echo base_url().'template/users/'.$foto;?>" height="150px" width="150px" class="img-circle appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0" data-appear-animation-duration="1s">
							<?php endif;?>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h3 class="heading-primary"><?php echo $title;?></h3>
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i> Diposting pada : <?php echo Insight_reading::format_tanggal($tanggal);?> </span> <br>
									<span><i class="fa fa-user"></i> Penulis : <?php echo $author;?> </span> <br>
									<span><i class="fa fa-tags"></i> <?php echo $kategori;?></span> <br>
									<span><i class="fa fa-eye"></i> dibaca : <strong><?php echo $views;?></strong> kali</span>
									<span><div class="fb-root"></div>
									    <div class="fb-like" data-href="<?php echo site_url().'article/'.$slug;?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true"></div></span>
								</div>
								<br>
								<?php echo $isi;?>
								<br>
								<h4 class="heading-primary">Follow Me / Add Me</h4>
								<ul class="header-social-icons social-icons hidden-xs">
								    <?php if(empty($fb)) : ?>
						                <li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						            <?php else : ?>
						                <li class="social-icons-facebook"><a href="<?php echo $fb;?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						            <?php endif;
						                if(empty($twit)):
						            ?>
						                <li class="social-icons-twitter"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						            <?php else : ?>
						                <li class="social-icons-twitter"><a href="<?php echo $twit;?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						            <?php endif;
						                if(empty($ins)):
						            ?>
                                        <li class="social-icons-instagram"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <?php else :?>
                                        <li class="social-icons-instagram"><a href="<?php echo $ins;?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <?php endif;?>
                                    
                                </ul>
								<div class="post-block post-share">
									<h3 class="heading-primary"><i class="fa fa-share"></i>Bagikan</h3>
									<div class="addthis_inline_share_toolbox"></div>
									<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a3c9df7bac34d25"></script>

								</div>
							</div>
							<div class="tabs tabs-bottom tabs-left tabs-simple">
								<ul class="nav nav-tabs">
									<li class="nav-item active">
										<a class="nav-link" href="#tabsNavigationSimple1" data-toggle="tab">Komentar Melalui Facebook Anda</a>
									</li>
								</ul>
								<div class="tab-content">

									<div class="tab-pane active" id="tabsNavigationSimple1">
											<div class="post-block post-comments clearfix">
												<h3 class="heading-primary"><i class="fa fa-comments"></i>Komentar </h3>
													<div class="fb-root"></div>
													<div class="fb-comments" data-href="<?php echo site_url().'article/'.$slug;?>" data-numposts="5"></div>
											</div>
									</div>
								</div>
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
	               swal("Thank you!!","Your Comment Successfully added, wait until our administrator accept and reply your comment","success")
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
