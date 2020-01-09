<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Slider Unit Pendidikan - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>materialize/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>materialize/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>materialize/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
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
                              <li><a href="<?php echo base_url('admin/web_admin')?>" class="waves-effect"><i class="fa fa-globe fa-fw"></i><span class="hide-menu">Umum</span></a></li>
                              <li><a href="<?php echo base_url('admin/slider')?>" class="waves-effect"><i class="ti-layout-slider fa-fw"></i><span class="hide-menu">Slider</span></a></li>
                              <li><a href="<?php echo base_url('admin/slider_unit_pendidikan')?>" class="waves-effect active"><i class="mdi mdi-view-carousel fa-fw"></i><span class="hide-menu">Slider Unit Pendidikan</span></a></li>
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
                        <h4 class="page-title">Slider Unit Pendidikan</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)">Lainnya</a></li>
                            <li><a href="javascript:void(0)">Web Administrator</a></li>
                            <li class="active">Slider Unit Pendidikan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <section class="m-t-40">
                                <div class="sttabs tabs-style-linebox">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-linebox-1"><span>Slider Unit Pendidikan</span></a></li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap text-center">
                                        <section id="section-linebox-1">
                                          <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">Slider</div>
                                                    <div class="panel-wrapper p-b-10 collapse in">
                                                        <div id="owl-demo2" class="owl-carousel owl-theme">
                                                          <?php foreach($slider->result_array() as $row):
                                                              $id = $row['id_slider_unit'];
                                                              $foto = $row['slider_foto'];
                                                              $unit = $row['opsi'];
                                                            ?>
                                                            <div class="item">
                                                              <img src="<?php echo base_url().'template/sliders_pendidikan/'.$foto;?>" alt="Owl Image">
                                                              <div class="carousel-caption">
                                                                  <h3 class="text-white font-600">Slider <?php echo $unit;?></h3>
                                                              </div>
                                                              <br>
                                                              <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                                                            </div>
                                                          <?php endforeach;?>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus fa-fw"></span>Tambah Slider</button>
                                        </section>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>
                        </div>
                    </div>
                </div>

                <?php $this->load->view('admin/tabs_penjelasan');?>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="white-box">
                          <h3 class="box-title m-b-0">Data Tentang Unit</h3>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal1"><span class="fa fa-plus fa-fw"></span>Tambah Tentang</button>
                          
                          <hr>
                          <div class="table-responsive">
                              <table id="example25" class="display wrap" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>Nama Unit</th>
                                          <th>Judul</th>
                                          <th>Deskrkipsi Tentang</th>
                                          <th style="text-align:right;">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($tentang->result_array() as $a):
                                      $id = $a['id_tentang'];
                                      $nama = $a['nama_unit'];
                                      $judul = $a['judul'];
                                      $isi = $a['isi'];
                                    ?>
                                    <tr>
                                      <td><?php echo $nama; ?></td>
                                      <td><?php echo $judul; ?></td>
                                      <td><?php echo $isi; ?></td>
                                      <td style="text-align:right;">
                                            <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#TEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                                            <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#THapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
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
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>

    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                  <h4 class="modal-title" id="myModalLabel">Add Slider</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/tambah_slider_unit'?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <div class="form-group">
                  <label class="col-sm-4 control-label">Unit Slider</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="xunit" data-placeholder="Choose a Type" tabindex="1">
                        <option value="Category 1">-Pilih-</option>
                        <?php
                          foreach($units->result_array() as $i) :
                            $id = $i['id_opsi'];
                            $nama = $i['nama_opsi'];
                        ?>
                        <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Photo upload</label>
                  <div class="col-sm-7">
                    <input type="file" name="filefoto">
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

  <?php
    foreach($slider->result_array() as $s):
      $slider_id = $s['id_slider_unit'];
      $slider_foto = $s['slider_foto'];
      $slider_unit = $s['slider_unit'];
  ?>
  <div class="modal fade" id="ModalHapus<?php echo $slider_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                  <h4 class="modal-title" id="myModalLabel">Hapus Slider</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/hapus_slider_unit'?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $slider_id;?>"/>
                <input type="hidden" value="<?php echo $slider_foto;?>" name="gambar">
                      <p>Apakah Anda yakin mau menghapus Slider <b><?php echo $slider_unit;?></b> ini?</p>

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

<div class="modal fade" id="addModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Add Tentang Unit Pendidikan</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/tambah_tentang_unit'?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label class="col-sm-4 control-label">Unit</label>
              <div class="col-sm-7">
                <select class="form-control" name="xunit" data-placeholder="Choose a Type" tabindex="1">
                    <option value="Category 1">-Pilih-</option>
                    <?php
                      foreach($units->result_array() as $i) :
                        $id = $i['id_opsi'];
                        $nama = $i['nama_opsi'];
                    ?>
                    <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-sm-4 control-label">Judul Unit</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="xjudul" id="recipient-name1">
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Tentang Unit</label>
              <div class="col-sm-7">
                <textarea name="xtentang" class="form-control" rows="5"></textarea>
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

<?php
    foreach($tentang->result_array() as $t) :
        $idt = $t['id_tentang'];
        $judul = $t['judul'];
        $isi = $t['isi'];
        $ido = $t['id_unit'];
        $namau = $t['nama_unit'];
  ?>
<div class="modal fade" id="TEdit<?php echo $idt;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Tentang Unit Pendidikan</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/edit_tentang_unit'?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label class="col-sm-4 control-label">Unit</label>
              <div class="col-sm-7">
                <select class="form-control" name="xunit" tabindex="1">
                    <option value="Category 1">-Pilih-</option>
                    <?php
                      foreach($units->result_array() as $i) {
                        $id = $i['id_opsi'];
                        $nama = $i['nama_opsi'];
                        if($ido==$id)
                         echo "<option value='$id' selected>$nama</option>";
                        else
                         echo "<option value='$id' >$nama</option>";
                      }
                    ?>
                </select>
              </div>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-sm-4 control-label">Judul Unit</label>
                <div class="col-sm-7">
                  <input type="hidden" name="id" value="<?php echo $idt;?>">
                  <input type="text" class="form-control" name="xjudul" id="inputUserName" value="<?php echo $judul;?>">
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Tentang Unit</label>
              <div class="col-sm-7">
                <textarea name="xtentang" class="form-control" id="inputUserName" rows="5"><?php echo $isi;?></textarea>
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
<?php endforeach;?>



<?php
  foreach($tentang->result_array() as $t):
    $id_tentang = $t['id_tentang'];
    $unit = $t['nama_unit'];
?>
<div class="modal fade" id="THapus<?php echo $id_tentang;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Tentang</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/hapus_tentang_unit'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="id" value="<?php echo $id_tentang;?>"/>
                    <p>Apakah Anda yakin mau menghapus Tentang <b><?php echo $unit;?></b> ini?</p>

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
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>materialize/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/owl.carousel/owl.custom.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>materialize/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>materialize/js/cbpFWTabs.js"></script>
    <script src="<?php echo base_url()?>materialize/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
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
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
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
        $('#example25').DataTable({
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
    <?php elseif($this->session->flashdata('msg')=='successslider'):?>
        <script type="text/javascript">
                swal("Hooray!!","Slider Unit successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successunit'):?>
        <script type="text/javascript">
                swal("Hooray!!","Unit About successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successupunit'):?>
        <script type="text/javascript">
                swal("Hooray!!","Unit About successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successdelunit'):?>
        <script type="text/javascript">
                swal("Hooray!!","Slide Unit successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successvisi'):?>
        <script type="text/javascript">
                swal("Hooray!!","Visi, Misi & Tujuan Unit successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successunggul'):?>
        <script type="text/javascript">
                swal("Hooray!!","Keunggulan Unit successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successkur'):?>
        <script type="text/javascript">
                swal("Hooray!!","Kurikulum Unit successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successeks'):?>
        <script type="text/javascript">
                swal("Hooray!!","Ekstrakurikuler Unit successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successprofil'):?>
        <script type="text/javascript">
                swal("Hooray!!","Profil Unit successful updated","info")
        </script>
      <?php else:?>
      <?php endif;?>
</body>
</html>
