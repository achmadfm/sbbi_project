<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Album - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
                  <li> <a href="<?php echo base_url('admin/files')?>" class="waves-effect"><i class="mdi mdi-book-multiple fa-fw"></i> <span class="hide-menu">News Letter</span></a></li>
                  <li class="last-nav"><a href="#" class="waves-effect active"><i class="mdi mdi-google-photos fa-fw"></i> <span class="hide-menu">Galeri<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level">
                          <li><a href="<?php echo base_url('admin/album')?>" class="waves-effect active"><i class="mdi mdi-image-album fa-fw"></i><span class="hide-menu">Album</span></a></li>
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
                        <h4 class="page-title">Album</h4> </div>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                            <li>Galeri</li>
                            <li class="active">Album</li>
                        </ol>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus fa-fw"></span>Tambah Album</button>
                            <hr>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Album</th>
                                            <th>Tanggal</th>
                                            <th>Author</th>
                                            <th>Jumlah</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                            					$no=0;
                            					foreach ($data->result_array() as $i) :
                            					   $no++;
                            					   $album_id=$i['album_id'];
                            					   $album_nama=$i['album_nama'];
                            					   $album_tanggal=$i['tanggal'];
                            					   $album_author=$i['album_author'];
                            					   $album_cover=$i['album_cover'];
                            					   $album_jumlah=$i['album_count'];

                                      ?>
                                        <tr>
                                          <td><img src="<?php echo base_url().'template/album/'.$album_cover;?>" style="width:80px;"></td>
                                          <td><?php echo $album_nama;?></td>
                                				  <td><?php echo $album_tanggal;?></td>
                                				  <td><?php echo $album_author;?></td>
                                				  <td><?php echo $album_jumlah;?></td>
                                          <td style="text-align:right;">
                                                <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#ModalEdit<?php echo $album_id;?>"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalHapus<?php echo $album_id;?>"><span class="fa fa-trash"></span></a>
                                          </td>
                                        </tr>
                        				<?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal Tambah user -->
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Album</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/album/simpan_album'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Album</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama_album" class="form-control" id="inputUserName" placeholder="Nama Album" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Cover Album</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" required/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php foreach ($data->result_array() as $i) :
          $album_id=$i['album_id'];
          $album_nama=$i['album_nama'];
          $album_tanggal=$i['tanggal'];
          $album_author=$i['album_author'];
          $album_cover=$i['album_cover'];
          $album_jumlah=$i['album_count'];
        ?>
        <div class="modal fade" id="ModalEdit<?php echo $album_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Album</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/album/update_album'?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $album_id;?>"/>
                        <input type="hidden" value="<?php echo $album_cover;?>" name="gambar">
                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Nama Album</label>
                              <div class="col-sm-7">
                                  <input type="text" name="xnama_album" class="form-control" value="<?php echo $album_nama;?>" id="inputUserName" placeholder="Nama Album" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Cover Album</label>
                              <div class="col-sm-7">
                                  <input type="file" name="filefoto"/>
                              </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>

  <?php foreach ($data->result_array() as $i) :
    $album_id=$i['album_id'];
    $album_nama=$i['album_nama'];
    $album_tanggal=$i['tanggal'];
    $album_author=$i['album_author'];
    $album_cover=$i['album_cover'];
    $album_jumlah=$i['album_count'];
  ?>
	<!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $album_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Album</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/album/hapus_album'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
					       <input type="hidden" name="kode" value="<?php echo $album_id;?>"/>
                 <input type="hidden" value="<?php echo $album_cover;?>" name="gambar">
                        <p>Apakah Anda yakin mau menghapus Album <b><?php echo $album_nama;?></b> ?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>
	<?php endforeach;?>
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
    <script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
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
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                swal("Hooray!!","Album successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                swal("Hooray!!","Album successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                swal("Hooray!!","Album successful deleted","success")
        </script>
      <?php else:?>
      <?php endif;?>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
