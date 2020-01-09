<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Web Administration - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
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
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
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
                    <li> <a href="<?php echo base_url('admin/dashboard')?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a></li>
                    <li> <a href="#" class="waves-effect "><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">News<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level two-li">
                            <li><a href="<?php echo base_url('admin/tulisan')?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">News List</span></a></li>
                            <li><a href="<?php echo base_url('admin/tulisan/add_tulisan')?>" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Post News</span></a></li>
                            <li><a href="<?php echo base_url('admin/kategori')?>"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Category</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url('admin/users')?>" class="waves-effect "><i class="mdi mdi-account fa-fw"></i> <span class="hide-menu">Users</span></a></li>
                    <li class="mega-nav"> <a href="<?php echo base_url('admin/agenda')?>" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Agenda</span></a></li>
                    <li> <a href="<?php echo base_url('admin/pengumuman')?>" class="waves-effect"><i class="mdi mdi-volume-high fa-fw"></i> <span class="hide-menu">Pengumuman</span></a></li>
                    <li> <a href="<?php echo base_url('admin/files')?>" class="waves-effect"><i class="mdi mdi-book-multiple fa-fw"></i> <span class="hide-menu">News Letter</span></a></li>
                    <li class="last-nav"><a href="#" class="waves-effect"><i class="mdi mdi-google-photos fa-fw"></i> <span class="hide-menu">Galeri<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/album')?>"><i class="mdi mdi-image-album fa-fw"></i><span class="hide-menu">Album</span></a></li>
                            <li><a href="<?php echo base_url('admin/galeri')?>" class="waves-effect"><i class="fa fa-file-image-o fa-fw"></i><span class="hide-menu">Photos</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect active"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Lainnya</span></a>
                      <ul class="nav nav-second-level">
                          <li><a href="<?php echo base_url('admin/guru')?>"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Data Guru</span></a></li>
                          <li><a href="#" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kesiswaan<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                              <li><a href="<?php echo base_url('admin/siswa')?>"><i class="mdi mdi-school fa-fw"></i><span class="hide-menu">Data Siswa</span></a></li>
                              <li><a href="<?php echo base_url('admin/status')?>" class="waves-effect"><i class="icon-user-following fa-fw"></i><span class="hide-menu">Status</span></a></li>
                              <li><a href="<?php echo base_url('admin/tipe_status')?>" class="waves-effect"><i class="fa fa-bars fa-fw"></i><span class="hide-menu">Tipe Status</span></a></li>
                              <li><a href="<?php echo base_url('admin/prestasi')?>" class="waves-effect"><i class="mdi mdi-trophy-variant fa-fw"></i><span class="hide-menu">Prestasi Siswa</span></a></li>
                              <li><a href="<?php echo base_url('admin/kelas')?>" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kelas</span></a></li>
                              <li><a href="<?php echo base_url('admin/kat_prestasi')?>" class="waves-effect"><i class="ti-layout-sidebar-left fa-fw"></i><span class="hide-menu">Kategori</span></a></li>
                            </ul>
                            <li><a href="#" class="waves-effect active"><i class="fa fa-wrench fa-fw"></i><span class="hide-menu">Web Administration<span class="fa arrow"></span></span></a>
                              <ul class="nav nav-third-level">
                                <li><a href="<?php echo base_url('admin/web_admin')?>" class="waves-effect active"><i class="fa fa-globe fa-fw"></i><span class="hide-menu">Umum</span></a></li>
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Web Administration</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)">Dashboard</a></li>
                            <li><a href="javascript:void(0)">Lainnya</a></li>
                            <li class="active">Web Administration</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">About School</h3>
                            <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit tentang sekolah) </p>
                            <?php $p = $tentang->row_array();?>
                            <form class="form-horizontal">
                              <div class="form-group">
                                    <label class="col-md-12">Judul (Saat ini)</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo $p['id_tentang'];?>">
                                        <input type="text" class="form-control" value="<?php echo $p['judul'];?>" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Isi Tentang Sekolah (Saat ini)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" disabled><?php echo $p['isi'];?></textarea>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="<?php echo base_url().'admin/web_admin/up_tentang'?>" method="post">
                              <div class="form-group">
                                    <label class="col-md-12">Judul (Baru)</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="<?php echo $p['id_tentang'];?>">
                                        <input type="text" name="judul" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Isi Tentang Sekolah (Baru)</label>
                                    <div class="col-md-12">
                                        <textarea id="mymce" name="isi" rows="5"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                            </form>
                        </div>

                        <div class="white-box">
                            <h3 class="box-title m-b-0">School History of Bosowa Bina Insani Bogor</h3>
                            <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit sejarah sekolah) </p>
                            <?php $sh = $sejarah->row_array();?>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12">Isi Sejarah Sekolah (Saat ini)</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="ids" value="1">
                                        <textarea class="form-control" rows="5" disabled><?php echo $sh['isi_sejarah'];?></textarea>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="<?php echo base_url().'admin/web_admin/up_sejarah'?>" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Isi Sejarah Sekolah (Baru)</label>
                                    <div class="col-md-12">
                                        <textarea id="mymce" name="isis" rows="5"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                            </form>
                        </div>
                    </div>
                <?php $this->load->view("admin/tab_sambutan");?>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Data Fasilitas</h3>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addfasilitas"><span class="fa fa-plus fa-fw"></span>Tambah Fasilitas</button>
                        <hr>
                        <div class="table-responsive">
                            <table id="example23" class="display wrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nama Fasilitas</th>
                                        <th>Deskripsi</th>
                                        <th>Unit Sekolah</th>
                                        <th>Author</th>
                                        <th style="text-align:right;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    foreach($fasilitas->result_array() as $i):
                                    $no++;
                                    $id=$i['id_fasilitas'];
                                    $nama=$i['nama_fasilitas'];
                                    $deskripsi=$i['deskripsi'];
                                    $id_unit=$i['id_unit'];
                                    $unit=$i['unit_sekolah'];
                                    $id_user=$i['id_author'];
                                    $user=$i['nama_author'];
                                    $foto=$i['foto_fasilitas'];
                                ?>
                                <tr>
                                    <td><img src="<?php echo base_url().'template/fasilitas/'.$foto;?>" class="img img-rounded" style="width:200px; height:100px;"></td>
                                    <td><?php echo $nama;?></td>
                                    <td><?php echo $deskripsi;?></td>
                                    <td><?php echo $unit;?></td>
                                    <td><?php echo $user;?></td>
                                    <td style="text-align:right;">
                                        <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#FEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                                        <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#FHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Program Sekolah</h3>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addprogram"><span class="fa fa-plus fa-fw"></span>Tambah Program</button>
                            <hr>
                            <div class="table-responsive">
                                <table id="example24" class="display wrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nama Program</th>
                                            <th>Deskrkipsi</th>
                                            <th>Unit Sekolah</th>
                                            <th>Author</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($program->result_array() as $prog) :
                                        $idp = $prog['id_program'];
                                        $namaprogram = $prog['nama_program'];
                                        $deskripsip = $prog['deskripsi'];
                                        $unitsekolah = $prog['unit_sekolah'];
                                        $idu = $prog['id_author'];
                                        $namau = $prog['nama_author'];
                                        $fotop = $prog['foto_program'];
                                        ?>
                                        <tr>
                                            <td><img src="<?php echo base_url().'template/program/'.$fotop;?>" class="img img-rounded" style="width:200px; height:100px;"></td>
                                            <td><?php echo $namaprogram;?></td>
                                            <td><?php echo $deskripsip;?></td>
                                            <td><?php echo $unitsekolah;?></td>
                                            <td><?php echo $namau;?></td>
                                            <td style="text-align:right;">
                                                <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#PEdit<?php echo $idp;?>"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#PHapus<?php echo $idp;?>"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="white-box">
                          <h3 class="box-title m-b-0">Data Testimoni</h3>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addtesti"><span class="fa fa-plus fa-fw"></span>Tambah Testimoni</button>
                          <hr>
                          <div class="table-responsive">
                              <table id="example25" class="display wrap" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>Photo</th>
                                          <th>Nama Testi</th>
                                          <th>Deskrkipsi</th>
                                          <th>Email</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      foreach($testi->result_array() as $test) :
                                        $idt = $test['testimoni_id'];
                                        $nama = $test['testimoni_nama'];
                                        $isi = $test['testimoni_isi'];
                                        $email = $test['testimoni_email'];
                                        $sts = $test['nama_status'];
                                        $foto = $test['testimoni_foto'];
                                    ?>
                                    <tr>
                                      <td><img src="<?php echo base_url().'template/testimoni/'.$foto;?>" class="img img-circle" style="width:100px; height:100px;"></td>
                                      <td><?php echo $nama;?></td>
                                      <td><?php echo $isi;?></td>
                                      <td><?php echo $email;?></td>
                                      <td><?php echo $sts;?></td>
                                      <td style="text-align:right;">
                                            <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#TEdit<?php echo $idt;?>"><span class="fa fa-pencil"></span></a>
                                            <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#THapus<?php echo $idt;?>"><span class="fa fa-trash"></span></a>
                                      </td>
                                    </tr>
                                  <?php endforeach;?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
                <?php $this->load->view('admin/modals')?>
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
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>materialize/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>plugins/bower_components/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url()?>materialize/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>materialize/js/jasny-bootstrap.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!--Style Switcher -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });

        $('#example24').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });

        $('#example25').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>
    <?php $this->load->view('admin/sweetalert')?>
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script>
        $(document).ready(function () {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce"
                    , theme: "modern"
                    , height: 300
                    , plugins: [
   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker"
   , "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"
   , "save table contextmenu directionality emoticons template paste textcolor textpattern"
   ]
                    , toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons"
                , });
            }
        });
    </script>
</body>

</html>
