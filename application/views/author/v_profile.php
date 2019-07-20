<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Profile - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>materialize/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>materialize/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>materialize/css/colors/megna-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
      <?php $this->load->view('author/v_nav_header');?>
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav">
              <div class="sidebar-head">
                  <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                  <ul class="nav" id="side-menu">
                  <li> <a href="<?php echo base_url('author/dashboard_author')?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a></li>
                  <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Articles<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level two-li">
                          <li><a href="<?php echo base_url('author/tulisan')?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">Your Articles List</span></a></li>
                          <li><a href="<?php echo base_url('author/tulisan/add_tulisan')?>" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Post Article</span></a></li>
                      </ul>
                  </li>
                  <li><a href="<?php echo base_url('author/profile')?>" class="waves-effect active"><i class="mdi mdi-account fa-fw"></i><span class="hide-menu">Profile</span></a></li>
              </ul>
          </div>
        </div>
        <?php
          $pengguna = $user->row_array();
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $pengguna['pengguna_nama'];?>'s Profile</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)">Dashboard</a></li>
                            <li><a href="javascript:void(0)">Profile</a></li>
                            <li class="active">Your Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url()?>template/sampul.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <?php if(empty($pengguna['pengguna_photo'])) :?>
                                          <a href="javascript:void(0)"><img src="<?php echo base_url().'template/images/userblank.png';?>" class="thumb-lg img-circle" alt="img"></a>
                                        <?php else:?>
                                        <a href="javascript:void(0)"><img src="<?php echo base_url().'template/users/'.$pengguna['pengguna_photo'];?>" class="thumb-lg img-circle" alt="img"></a>
                                      <?php endif;?>
                                        <h4 class="text-white"><?php echo $pengguna['pengguna_nama'];?></h4>
                                        <h5 class="text-white"><?php echo $pengguna['pengguna_email'];?></h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                <?php if(empty($pengguna['pengguna_facebook'])) : ?>
                                    <a href="#" class="btn btn-facebook btn-circle btn-lg"><i class="fa fa-facebook"></i></a>
                                <?php else: ?>
                                    <a href="<?php echo $pengguna['pengguna_facebook'];?>" class="btn btn-facebook btn-circle btn-lg"><i class="fa fa-facebook"></i></a>
                                <?php endif;?>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                <?php if(empty($pengguna['pengguna_twitter'])) : ?>
                                    <a href="#" class="btn btn-twitter btn-circle btn-lg"><i class="fa fa-twitter"></i></a>
                                <?php else: ?>
                                    <a href="<?php echo $pengguna['pengguna_twitter'];?>" class="btn btn-twitter btn-circle btn-lg"><i class="fa fa-twitter"></i></a>
                                <?php endif;?>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                <?php if(empty($pengguna['pengguna_instagram'])) :?>
                                    <a href="#" class="btn btn-instagram btn-circle btn-lg"><i class="fa fa-instagram"></i></a>
                                <?php else: ?>
                                    <a href="<?php echo $pengguna['pengguna_instagram'];?>" class="btn btn-instagram btn-circle btn-lg"><i class="fa fa-instagram"></i></a>
                                <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="active tab">
                                    <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $pengguna['pengguna_nama'];?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $pengguna['pengguna_nohp'];?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $pengguna['pengguna_email'];?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6"> <strong>Join</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $pengguna['register'];?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <strong>About <?php echo $pengguna['pengguna_nama'];?></strong>
                                    <p class="m-t-30"><?php echo $pengguna['pengguna_tentang'];?></p>
                                </div>

                                <div class="tab-pane" id="settings">
                                    <form action="<?php echo base_url('author/profile/update_profile')?>" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="hidden" name="kode" value="<?php echo $pengguna['pengguna_id'];?>">
                                                <input type="text" name="xnama" placeholder="Johnathan Doe" value="<?php echo $pengguna['pengguna_nama'];?>" class="form-control form-control-line"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" name="xemail" placeholder="johnathan@admin.com" value="<?php echo $pengguna['pengguna_email'];?>" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Facebook Account</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xfb" placeholder="Ex : https://www.facebook.com/yourusername" value="<?php echo $pengguna['pengguna_facebook'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Twitter Account</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xtwitter" placeholder="Ex : https://www.twitter.com/yourusername" value="<?php echo $pengguna['pengguna_twitter'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Instagram Account</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xig" placeholder="Ex : https://www.instagram.com/yourusername" value="<?php echo $pengguna['pengguna_instagram'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xusername" value="<?php echo $pengguna['pengguna_username'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" name="xpassword" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Confirm Password</label>
                                            <div class="col-md-12">
                                                <input type="password" name="xpassword2" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xkontak" placeholder="+628XXXXXXXXXX" value="<?php echo $pengguna['pengguna_nohp'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Motto</label>
                                            <div class="col-md-12">
                                                <input type="text" name="xmotto" placeholder="Motto" value="<?php echo $pengguna['pengguna_moto'];?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">About You</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" name="xtentang" class="form-control form-control-line"><?php echo $pengguna['pengguna_tentang'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Your Photo</label>
                                            <div class="col-md-12">
                                              <input type="file" class="form-control form-control-line" name="filefoto">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>materialize/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>materialize/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <?php $this->load->view('author/sweetalert')?>
</body>

</html>
