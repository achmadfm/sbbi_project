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
    <title>Dashboard - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>materialize/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>materialize/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>materialize/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
    /* Mengambil query report*/
    if(is_array($visitor)){
      foreach($visitor as $result){
          $bulan[] = $result->tgl; //ambil bulan
          $value[] = (float) $result->jumlah; //ambil nilai
        }
    }
    /* end mengambil query*/

?>
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="wrapper">
        <?php $this->load->view('admin/v_nav_header')?>

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav">
              <div class="sidebar-head">
                  <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                  <ul class="nav" id="side-menu">
                  <li> <a href="<?php echo base_url('admin/dashboard')?>" class="waves-effect active"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a></li>
                  <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">News<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level two-li">
                          <li><a href="<?php echo base_url('admin/tulisan')?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">News List</span></a></li>
                          <li><a href="<?php echo base_url('admin/tulisan/add_tulisan')?>" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Post News</span></a></li>
                          <li><a href="<?php echo base_url('admin/kategori')?>"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Category</span></a></li>
                      </ul>
                  </li>
                  <li> <a href="<?php echo base_url('admin/users')?>" class="waves-effect "><i class="mdi mdi-account fa-fw"></i> <span class="hide-menu">Users</span></a></li>
                  <li class="mega-nav"> <a href="<?php echo base_url('admin/agenda')?>" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Agenda</span></a></li>
                  <li> <a href="<?php echo base_url('admin/pengumuman')?>" class="waves-effect"><i class="mdi mdi-volume-high fa-fw"></i> <span class="hide-menu">Pengumuman</span></a></li>
                  <li> <a href="<?php echo base_url('admin/files')?>" class="waves-effect"><i class="mdi mdi-cloud-download fa-fw"></i> <span class="hide-menu">Download</span></a></li>
                  <li class="last-nav"><a href="#" class="waves-effect"><i class="mdi mdi-google-photos fa-fw"></i> <span class="hide-menu">Galeri<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level">
                          <li><a href="<?php echo base_url('admin/album')?>"><i class="mdi mdi-image-album fa-fw"></i><span class="hide-menu">Album</span></a></li>
                          <li><a href="<?php echo base_url('admin/galeri')?>" class="waves-effect"><i class="fa fa-file-image-o fa-fw"></i><span class="hide-menu">Photos</span></a></li>
                      </ul>
                  </li>
                  <li> <a href="#" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Lainnya</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url('admin/guru')?>"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Data Guru</span></a></li>
                        <li><a href="#" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kesiswaan<span class="fa arrow"></span></span></a>
                          <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/siswa')?>"><i class="mdi mdi-school fa-fw"></i><span class="hide-menu">Data Siswa</span></a></li>
                            <li><a href="<?php echo base_url('admin/status')?>" class="waves-effect"><i class="icon-user-following fa-fw"></i><span class="hide-menu">Status</span></a></li>
                            <li><a href="<?php echo base_url('admin/tipe_status')?>" class="waves-effect"><i class="fa fa-bars fa-fw"></i><span class="hide-menu">Tipe Status</span></a></li>
                            <li><a href="<?php echo base_url('admin/prestasi')?>" class="waves-effect"><i class="mdi mdi-trophy-variant fa-fw"></i><span class="hide-menu">Prestasi Siswa</span></a></li>
                            <li><a href="<?php echo base_url('admin/kelas')?>" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kelas</span></a></li>
                            <li><a href="<?php echo base_url('admin/kat_prestasi')?>" class="waves-effect"><i class="ti-layout-sidebar-left fa-fw"></i><span class="hide-menu">Kategori</span></a></li>
                          </ul>
                          <li><a href="#" class="waves-effect"><i class="fa fa-wrench fa-fw"></i><span class="hide-menu">Web Administration<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo base_url('admin/web_admin')?>" class="waves-effect"><i class="fa fa-globe fa-fw"></i><span class="hide-menu">Umum</span></a></li>
                              <li><a href="<?php echo base_url('admin/slider')?>" class="waves-effect"><i class="ti-layout-slider fa-fw"></i><span class="hide-menu">Slider</span></a></li>
                              <li><a href="<?php echo base_url('admin/slider_unit_pendidikan')?>" class="waves-effect"><i class="mdi mdi-view-carousel fa-fw"></i><span class="hide-menu">Slider Unit Pendidikan</span></a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url('admin/inbox')?>" class="waves-effect"><i class="mdi mdi-email fa-fw"></i><span class="hide-menu">Inbox</span></a></li>
                        </li>
                    </ul>
                  </li>
              </ul>
          </div>
        </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="page-title">Dashboard</h3></div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('admin/dashboard')?>">Dashboard</a></li>
                        </ol>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                      <div class="white-box">
                        <?php
                          $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Chrome'");
                          $jml = $query->num_rows();
                        ?>
                          <h3 class="box-title">Google Chrome</h3>
                          <ul class="list-inline two-part">
                              <li><i class="mdi mdi-google-chrome fa-fw"></i></li>
                              <li class="text-right"><span class="counter"><?php echo $jml;?></span></li>
                          </ul>
                      </div>
                      <div class="white-box">
                        <?php
                          $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Safari'");
                          $jml = $query->num_rows();
                        ?>
                          <h3 class="box-title">Safari</h3>
                          <ul class="list-inline two-part">
                              <li><i class="mdi mdi-apple-safari fa-fw"></i></li>
                              <li class="text-right"><span class=""><?php echo $jml;?></span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="white-box">
                        <?php
                          $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Firefox' OR pengunjung_perangkat='Mozilla'");
                          $jml = $query->num_rows();
                        ?>
                          <h3 class="box-title">Mozilla Firefox</h3>
                          <ul class="list-inline two-part">
                              <li><i class="mdi mdi-firefox fa-fw"></i></li>
                              <li class="text-right"><span class="counter"><?php echo $jml;?></span></li>
                          </ul>
                      </div>
                      <div class="white-box">
                        <?php
                          $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Edge'");
                          $jml = $query->num_rows();
                        ?>
                          <h3 class="box-title">Microsoft Edge</h3>
                          <ul class="list-inline two-part">
                              <li><i class="mdi mdi-edge fa-fw"></i></li>
                              <li class="text-right"><span class=""><?php echo $jml;?></span></li>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url('template/sampul.jpg')?>">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <?php
                                      $id_admin=$this->session->userdata('idadmin');
                                      $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
                                      $c=$q->row_array();
                                    ?>
                                    <?php if(empty($c['pengguna_photo'])) :?>
                                      <img src="<?php echo base_url().'template/images/userblank.png'?>" class="thumb-lg img-circle" alt="img">
                                    <?php else: ?>
                                      <img src="<?php echo base_url().'template/users/'.$c['pengguna_photo']?>" class="thumb-lg img-circle" alt="img">
                                    <?php endif; ?>
                                    <h4 class="text-white"><?php echo $c['pengguna_nama'];?></h4>
                                    <h5 class="text-white"><?php echo $c['pengguna_email'];?></h5> </div>
                            </div>
                        </div>
                        <div class="user-btm-box">
                            <center><h2>Selamat Beraktifitas <strong><?php echo $c['pengguna_username'];?></strong></h2></center>
                        </div>
                    </div>
                    </div>
              </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Statistik Pengunjung Bulan Ini (<?php echo date_default_timezone_set("Asia/Jakarta");?>)</h3>
                        <canvas id="canvas" width="600" height="280"></canvas>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Populer News</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                      <?php
                                          $query=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC");
                                          foreach ($query->result_array() as $i) :
                                              $tulisan_id=$i['tulisan_id'];
                                              $tulisan_judul=$i['tulisan_judul'];
                                              $tulisan_views=$i['tulisan_views'];
                                              $tulisan_author=$i['tulisan_author'];
                                      ?>
                                        <tr>
                                            <td class="txt-oflo"><?php echo $tulisan_judul;?></td>
                                            <td class="txt-oflo">By : <?php echo $tulisan_author;?></td>
                                            <td style="align=right;"><span class="label label-success label-rouded"><?php echo $tulisan_views.' Views';?></span> </td>
                                        </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ampleadmin brought to you by themedesigner.in </footer>
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
    <!--Counter js -->
    <script src="<?php echo base_url()?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>materialize/js/toastr.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/jquery.slimscroll.js"></script>

    <!--Wave Effects -->
    <script src="<?php echo base_url()?>materialize/js/waves.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url()?>plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/Chart.js/Chart.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [

                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($value);?>
                    }

                ]

            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });

        </script>
        
        <script type="text/javascript">
          $("#alerttopright").fadeToggle(350);
          $("#alerttopleft").fadeToggle(350);
          $(".myadmin-alert .closed").click(function (event) {
              $(this).parents(".myadmin-alert").fadeToggle(350);
              return false;
          });
          /* Click to close */
          $(".myadmin-alert-click").click(function (event) {
              $(this).fadeToggle(350);
              return false;
          });
        </script>
</body>

</html>
