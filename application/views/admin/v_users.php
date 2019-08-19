<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Users Account - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
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
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
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
                    <li> <a href="#" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Lainnya</span></a>
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
                        <h4 class="page-title">Data Users</h4> </div>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                            <li class="active">Data Users</li>
                        </ol>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus fa-fw"></span>Tambah User</button>
                          <hr>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Password</th>
                                            <th>Kontak</th>
                                            <th>Level</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($data->result_array() as $i) :
                                         $pengguna_id=$i['pengguna_id'];
                                         $pengguna_nama=$i['pengguna_nama'];
                                         $pengguna_jenkel=$i['pengguna_jenkel'];
                                         $pengguna_email=$i['pengguna_email'];
                                         $pengguna_username=$i['pengguna_username'];
                                         $pengguna_password=$i['pengguna_password'];
                                         $pengguna_nohp=$i['pengguna_nohp'];
                                         $pengguna_level=$i['pengguna_level'];
                                         $pengguna_photo=$i['pengguna_photo'];
                                      ?>
                                        <tr>
                                          <?php if(empty($pengguna_photo)) :?>
                                          <td><img width="60" class="img-circle" src="<?php echo base_url().'template/images/userblank.png';?>"></td>
                                          <?php else: ?>
                                          <td><img width="60" class="img-circle" src="<?php echo base_url().'template/users/'.$pengguna_photo;?>"></td>
                                          <?php endif;?>
                                          <td><?php echo $pengguna_nama;?></td>
                                          <td><?php echo $pengguna_email;?></td>
                                            <?php if($pengguna_jenkel=='L'):?>
                                                  <td>Laki-Laki</td>
                                            <?php else:?>
                                                  <td>Perempuan</td>
                                            <?php endif;?>
                                            <td><?php echo $pengguna_password;?></td>
                                            <td><?php echo $pengguna_nohp;?></td>
                                            <?php if($pengguna_level=='1'):?>
                                                  <td>Administrator</td>
                                            <?php else:?>
                                                  <td>Author</td>
                                            <?php endif;?>
                                          <td style="text-align:right;">
                                                <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#ModalEdit<?php echo $pengguna_id;?>"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-info btn-circle" href="<?php echo base_url().'admin/users/reset_password/'.$pengguna_id;?>"><span class="fa fa-refresh"></span></a>
                                                <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalHapus<?php echo $pengguna_id;?>"><span class="fa fa-trash"></span></a>
                                          </td>
                                        </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal Tambah user -->
                <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add Users</h4> </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url().'admin/users/simpan_pengguna'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Nama</label>
                                        <input type="text" name="xnama" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Email</label>
                                      <input type="text" name="xemail" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Jenis Kelamin</label>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="L" checked>
                                            <label for="radio14">Laki-Laki</label>
                                          </div>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="P">
                                            <label for="radio14">Perempuan</label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Username</label>
                                        <input type="text" name="xusername" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Password</label>
                                      <input type="password" name="xpassword" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Ulangi Password</label>
                                      <input type="password" name="xpassword2" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Nomor Kontak</label>
                                      <input type="text" name="xkontak" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Level</label>
                                        <select class="form-control" name="xlevel" required>
                                          <option value="1">Administrator</option>
                                          <option value="2">Author</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label">File upload</label>
                                      <input type="file" name="filefoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php foreach ($data->result_array() as $i) :
                  $pengguna_id=$i['pengguna_id'];
                  $pengguna_nama=$i['pengguna_nama'];
                  $pengguna_jenkel=$i['pengguna_jenkel'];
                  $pengguna_email=$i['pengguna_email'];
                  $pengguna_username=$i['pengguna_username'];
                  $pengguna_password=$i['pengguna_password'];
                  $pengguna_nohp=$i['pengguna_nohp'];
                  $pengguna_level=$i['pengguna_level'];
                  $pengguna_photo=$i['pengguna_photo'];
                ?>
                <!--Modal Edit-->
                <div id="ModalEdit<?php echo $pengguna_id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit Users</h4> </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url().'admin/users/update_pengguna'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Nama</label>
                                      <input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/>
                                      <input type="text" name="xnama" class="form-control" id="recipient-name" value="<?php echo $pengguna_nama;?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Email</label>
                                      <input type="text" name="xemail" class="form-control" id="recipient-name" value="<?php echo $pengguna_email;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Jenis Kelamin</label>
                                        <?php if($pengguna_jenkel=='L'):?>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="L" checked>
                                            <label for="radio14">Laki-Laki</label>
                                          </div>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="P">
                                            <label for="radio14">Perempuan</label>
                                          </div>
                                        <?php else:?>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="L">
                                            <label for="radio14">Laki-Laki</label>
                                          </div>
                                          <div class="radio radio-success">
                                            <input type="radio" name="xjenkel" id="radio14" value="P" checked>
                                            <label for="radio14">Perempuan</label>
                                          </div>
                                        <?php endif;?>
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Username</label>
                                        <input type="text" name="xusername" class="form-control" id="recipient-name" value="<?php echo $pengguna_username;?>" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Password</label>
                                      <input type="password" name="xpassword" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Ulangi Password</label>
                                      <input type="password" name="xpassword2" class="form-control" id="recipient-name" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Nomor Kontak</label>
                                      <input type="text" name="xkontak" class="form-control" id="recipient-name" value="<?php echo $pengguna_nohp;?>" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Level</label>
                                        <select class="form-control" name="xlevel" required>
                                        <?php if($pengguna_level=='1'):?>
                                          <option value="1" selected>Administrator</option>
                                          <option value="2">Author</option>
                                        <?php else:?>
                                          <option value="1">Administrator</option>
                                          <option value="2" selected>Author</option>
                                        <?php endif;?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label">File upload</label>
                                      <input type="file" name="filefoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>

              <?php foreach ($data->result_array() as $i) :
                $pengguna_id=$i['pengguna_id'];
                $pengguna_nama=$i['pengguna_nama'];
                $pengguna_jenkel=$i['pengguna_jenkel'];
                $pengguna_email=$i['pengguna_email'];
                $pengguna_username=$i['pengguna_username'];
                $pengguna_password=$i['pengguna_password'];
                $pengguna_nohp=$i['pengguna_nohp'];
                $pengguna_level=$i['pengguna_level'];
                $pengguna_photo=$i['pengguna_photo'];
              ?>
              <!--Modal Hapus User-->
              <div id="ModalHapus<?php echo $pengguna_id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 class="modal-title">Hapus User</h4> </div>
                          <div class="modal-body">
                              <form action="<?php echo base_url().'admin/users/hapus_pengguna'?>" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/>
                                      <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $pengguna_nama;?></b> ?</p>
                                  </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>
            <?php endforeach;?>

            <!--Modal Reset Password-->
            <div id="ModalResetPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Reset Password</h4> </div>
                        <div class="modal-body">
                          <table>
                                <tr>
                                    <th style="width:120px;">Username</th>
                                    <th>:</th>
                                    <th><?php echo $this->session->flashdata('uname');?></th>
                                </tr>
                                <tr>
                                    <th style="width:120px;">Password Baru</th>
                                    <th>:</th>
                                    <th><?php echo $this->session->flashdata('upass');?></th>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">OK</button>
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
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>materialize/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
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
    </script>
    <?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                swal("Whoops!","Something Wrong please try again","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
        <script type="text/javascript">
                swal("Careful!","your picture too large","warning")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                swal("Hooray!!","User successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                swal("Hooray!!","User successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                swal("Hooray!!"," User successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='show-modal'):?>
        <script type="text/javascript">
                $('#ModalResetPassword').modal('show');
        </script>
    <?php else:?>

    <?php endif;?>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
