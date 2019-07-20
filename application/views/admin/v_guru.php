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
    <title>Teachers and Staff - Admin Bosowa Bina Insani Bogor</title>
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
                  <li> <a href="#" class="waves-effect active"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Lainnya</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url('admin/guru')?>" class="waves-effect active"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Data Guru</span></a></li>
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
                        <h4 class="page-title">Data Guru</h4> </div>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                            <li>Lainnya</li>
                            <li class="active">Data Guru</li>
                        </ol>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus fa-fw"></span>Tambah Guru</button>
                            <hr>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Posisi</th>
                                            <th>Opsi Ajaran</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                            					$no=0;
                            					foreach ($data->result_array() as $i) :
                            					   $no++;
                            					   $id=$i['guru_id'];
                            					   $nip=$i['guru_nip'];
                            					   $nama=$i['guru_nama'];
                            					   $jenkel=$i['guru_jenkel'];
                            					   $tmp_lahir=$i['guru_tmp_lahir'];
                            					   $tgl_lahir=$i['guru_tgl_lahir'];
                                         $mapel=$i['guru_mapel'];
                                         $id_posisi=$i['id_posisi'];
                                         $nama_posisi=$i['nama_posisi'];
                                         $list_ajaran=$i['opsi_ajaran'];
                                         $status=$i['status_mengajar'];
                                         $photo=$i['guru_photo'];
                                      ?>
                                        <tr>
                                          <?php if(empty($photo)):?>
                                          <td><img width="100px" height="100px" class="img-circle" src="<?php echo base_url().'template/images/userblank.png';?>"></td>
                                          <?php else:?>
                                          <td><img width="100px" height="100px" class="img-circle" src="<?php echo base_url().'template/teachers/'.$photo;?>"></td>
                                          <?php endif;?>
                                          <td><?php echo $nip;?></td>
                                				  <td><?php echo $nama;?></td>
                                          <td><?php echo $tmp_lahir.', '.$tgl_lahir;?></td>
                                          <td><?php echo $mapel;?></td>
                                          <td><?php echo $nama_posisi;?></td>
                                          <td><?php echo $list_ajaran;?></td>
                                          <td style="text-align:right;">
                                                <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                                          </td>
                                        </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="modal fade modal fade bs-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">Add Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/guru/simpan_guru'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">NIP</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnip" class="form-control" id="inputUserName" placeholder="NIP" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Nama</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="checkbox" class="col-sm-3 control-label">Ajaran</label>
                                      <div class="col-sm-7">
                                          <input type="checkbox" name="list_ajaran[]" value="PG"> Play Group <br>
                                          <input type="checkbox" name="list_ajaran[]" value="TK"> Taman Kanak-Kanak <br>
                                          <input type="checkbox" name="list_ajaran[]" value="SD"> Sekolah Dasar <br>
                                          <input type="checkbox" name="list_ajaran[]" value="SMP"> Sekolah Menengah Pertama <br>
                                          <input type="checkbox" name="list_ajaran[]" value="SMA"> Sekolah Menengah Akhir
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_lahir" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputUserName" class="col-sm-2 control-label">Tentang</label>
                                      <div class="col-sm-9">
                                          <textarea id="editor1" class="form-control" name="xtentang" style="height:260px" required></textarea>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Mata Pelajaran</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmapel" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Posisi</label>
                                        <div class="col-sm-7">
                                          <select name="xposisi" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($pos->result_array() as $k) {
                                                  $id_posisi=$k['id_posisi'];
                                                  $nm_posisi=$k['nama_posisi'];

                                            ?>
                                            <option value="<?php echo $id_posisi;?>"><?php echo $nm_posisi;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Status Ajaran</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Y" name="xajar" checked>
                                                <label for="inlineRadio1"> Mengajar </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="T" name="xajar">
                                                <label for="inlineRadio2"> Tidak Mengajar </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Photo</label>
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

        <?php foreach ($data->result_array() as $i) :
              $id=$i['guru_id'];
              $nip=$i['guru_nip'];
              $nama=$i['guru_nama'];
              $jenkel=$i['guru_jenkel'];
              $tmp_lahir=$i['guru_tmp_lahir'];
              $tgl_lahir=$i['guru_tgl_lahir'];
              $tentang=$i['guru_tentang'];
              $mapel=$i['guru_mapel'];
              $id_pos=$i['id_posisi'];
              $nama_posisi=$i['nama_posisi'];
              $list=$i['opsi_ajaran'];
              $status=$i['status_mengajar'];
              $photo=$i['guru_photo'];
            ?>

        <div class="modal fade bs-example-modal-lg" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">Edit Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/guru/update_guru'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">NIP</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnip" value="<?php echo $nip;?>" class="form-control" id="inputUserName" placeholder="NIP" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Nama</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                          <?php if($jenkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="checkbox" class="col-sm-3 control-label">Ajaran</label>
                                      <div class="col-sm-7">
                                        <?php
                                          $_arrNilai = explode(", ", $list);
                                          foreach ($opsi->result_array() as $ops) {
                                            $_ck = (array_search($ops['opsi_guru'], $_arrNilai) === false)? ' ' : 'checked';
                                            echo "<input type=checkbox value=$ops[opsi_guru] name=list_ajaran[] $_ck>$ops[nama_opsi] <br>";
                                          }
                                        ?>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputUserName" class="col-sm-2 control-label">Tentang</label>
                                      <div class="col-sm-9">
                                          <textarea id="editor1" class="form-control" name="xtentang" style="height:260px" required><?php echo $tentang;?></textarea>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Mata Pelajaran</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmapel" value="<?php echo $mapel;?>" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Posisi</label>
                                        <div class="col-sm-7">
                                          <select name="xposisi" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($pos->result_array() as $k) {
                                                  $id_posisi=$k['id_posisi'];
                                                  $nm_posisi=$k['nama_posisi'];
                                                  if ($id_pos==$id_posisi)
                                                    echo "<option value='$id_posisi' selected>$nm_posisi</option>";
                                                  else
                                                    echo "<option value='$id_posisi'>$nm_posisi</option>";
                                                  }
                                            ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Status Ajaran</label>
                                        <div class="col-sm-7">
                                          <?php if($status=='Y'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Y" name="xajar" checked>
                                                <label for="inlineRadio1"> Mengajar </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="T" name="xajar">
                                                <label for="inlineRadio2"> Tidak Mengajar </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Y" name="xajar">
                                                <label for="inlineRadio1"> Mengajar </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="T" name="xajar" checked>
                                                <label for="inlineRadio2"> Tidak Mengajar </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-3 control-label">Photo</label>
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
              $id=$i['guru_id'];
              $nip=$i['guru_nip'];
              $nama=$i['guru_nama'];
              $jenkel=$i['guru_jenkel'];
              $tmp_lahir=$i['guru_tmp_lahir'];
              $tgl_lahir=$i['guru_tgl_lahir'];
              $mapel=$i['guru_mapel'];
              $photo=$i['guru_photo'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">Hapus Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/guru/hapus_guru'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                     <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus guru <b><?php echo $nama;?></b> ?</p>

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
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                swal("Hooray!!","Teacher successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                swal("Hooray!!","Teacher successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                swal("Hooray!!","Teacher successful deleted","success")
        </script>
      <?php else:?>
      <?php endif;?>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url()?>plugins/ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('editor1' ,{
      filebrowserImageBrowseUrl : '<?php echo base_url('plugins/kcfinder'); ?>'
    });
  </script>
</body>
</html>
