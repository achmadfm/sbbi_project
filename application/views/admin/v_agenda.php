<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Agenda - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'plugins/daterangepicker/daterangepicker.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url().'plugins/datepicker/datepicker3.css'?>">
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
                  <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">News<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level two-li">
                          <li><a href="<?php echo base_url('admin/tulisan')?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">News List</span></a></li>
                          <li><a href="<?php echo base_url('admin/tulisan/add_tulisan')?>" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Post News</span></a></li>
                          <li><a href="<?php echo base_url('admin/kategori')?>"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Category</span></a></li>
                      </ul>
                  </li>
                  <li> <a href="<?php echo base_url('admin/users')?>" class="waves-effect "><i class="mdi mdi-account fa-fw"></i> <span class="hide-menu">Users</span></a></li>
                  <li class="mega-nav"> <a href="<?php echo base_url('admin/agenda')?>" class="waves-effect active"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Agenda</span></a></li>
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

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Agenda</h4> </div>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                            <li class="active">Agenda</li>
                        </ol>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus fa-fw"></span>Tambah Agenda</button>
                            <hr>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Sampul</th>
                                            <th>Agenda</th>
                                            <th>Tanggal</th>
                                            <th>Tempat</th>
                                            <th>Waktu</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                  			$no=0;
                                  				foreach ($data->result_array() as $i) :
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
                                        <tr>
                                          <td><?php echo $no;?></td>
                                          <td><img src="<?php echo base_url().'template/sampul/agenda/'.$sampul;;?>" class="img img-rounded" style="width:90px;"></td>
                                          <td><?php echo $agenda_nama;?></td>
                                          <td><?php echo $agenda_mulai.' s/d '.$agenda_selesai;?></td>
                                          <td><?php echo $agenda_tempat;?></td>
                                          <td><?php echo $agenda_waktu;?></td>
                                          <td style="text-align:right;">
                                              <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#ModalEdit<?php echo $agenda_id;?>"><span class="fa fa-pencil"></span></a>
                                              <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalHapus<?php echo $agenda_id;?>"><span class="fa fa-trash"></span></a>
                                        </td>
                                        </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                              <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                          </div>
                          <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/simpan_agenda'?>" method="post" enctype="multipart/form-data">
                          <div class="modal-body">

                                  <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                      <div class="col-sm-7">
                                        <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                      <div class="col-sm-7">
                                        <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                                    <div class="col-sm-7">
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="xmulai" class="form-control pull-right" id="datepicker" required>
                                      </div>
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                  <!-- /.form group -->

                                  <!-- Date range -->
                                  <div class="form-group">
                                   <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                                    <div class="col-sm-7">
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="xselesai" class="form-control pull-right" id="datepicker2" required>
                                      </div>
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                  <!-- /.form group -->
                                  <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                      <div class="col-sm-7">
                                        <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                      <div class="col-sm-7">
                                          <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                      <div class="col-sm-7">
                                        <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Sampul</label>
                                    <div class="col-sm-7">
                                        <input type="file" name="filefoto"/>
                                    </div>
                                </div>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success btn-flat" id="simpan">Simpan</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>

          <?php foreach ($data->result_array() as $i) :
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
            $tangal=$i['tanggal'];
          ?>
<!--Modal Edit Pengguna-->
      <div class="modal fade" id="ModalEdit<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                      <h4 class="modal-title" id="myModalLabel">Edit Agenda</h4>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/update_agenda'?>" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                              <div class="col-sm-7">
                                <input type="hidden" name="kode" value="<?php echo $agenda_id;?>">
                                <input type="text" name="xnama_agenda" class="form-control" value="<?php echo $agenda_nama;?>" id="inputUserName" placeholder="Nama Agenda" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required><?php echo $agenda_deskripsi;?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                            <div class="col-sm-7">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="xmulai" value="<?php echo $agenda_mulai;?>" class="form-control pull-right datepicker3" required>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->

                          <!-- Date range -->
                          <div class="form-group">
                           <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                            <div class="col-sm-7">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="xselesai" value="<?php echo $agenda_selesai;?>" class="form-control pull-right datepicker4" required>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->
                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                              <div class="col-sm-7">
                                <input type="text" name="xtempat" class="form-control" value="<?php echo $agenda_tempat;?>" id="inputUserName" placeholder="Tempat" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                              <div class="col-sm-7">
                                  <input type="text" name="xwaktu" class="form-control" value="<?php echo $agenda_waktu;?>" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."><?php echo $agenda_keterangan;?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Sampul</label>
                              <div class="col-sm-7">
                                  <input type="file" name="filefoto"/>
                              </div>
                          </div>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-info btn-flat" id="simpan">Update</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
        <?php endforeach;?>

        <?php foreach ($data->result_array() as $i) :
              $agenda_id=$i['agenda_id'];
              $agenda_nama=$i['agenda_nama'];
              $agenda_deskripsi=$i['agenda_deskripsi'];
              $agenda_mulai=$i['agenda_mulai'];
              $agenda_selesai=$i['agenda_selesai'];
              $agenda_tempat=$i['agenda_tempat'];
              $agenda_waktu=$i['agenda_waktu'];
              $agenda_keterangan=$i['agenda_keterangan'];
              $agenda_author=$i['agenda_author'];
              $sampul = $i['sampul'];
              $tangal=$i['tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/hapus_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							      <input type="hidden" name="kode" value="<?php echo $agenda_id;?>"/>
                    <input type="hidden" value="<?php echo $sampul;?>" name="sampul">
                            <p>Apakah Anda yakin mau menghapus Agenda <b><?php echo $agenda_nama;?></b> ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
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
    <script src="<?php echo base_url()?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()?>plugins/daterangepicker/moment.js"></script>
    <script src="<?php echo base_url()?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.js"></script>

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

        $('#datepicker').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd'
        });
        $('#datepicker2').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd'
        });
        $('.datepicker3').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd'
        });
        $('.datepicker4').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd'
        });
        $(".timepicker").timepicker({
          showInputs: true
        });
    </script>
    <?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                swal("Whoops!","Something Wrong please try again","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                swal("Hooray!!","Agenda successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
      <script type="text/javascript">
              swal("Careful!","your picture too large","warning")
      </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                swal("Hooray!!","Agenda successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                swal("Hooray!!","Agenda successful deleted","success")
        </script>
      <?php else:?>
      <?php endif;?>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
