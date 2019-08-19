<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>template/favicon.ico">
    <title>Upload Slider - Admin Bosowa Bina Insani Bogor</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>materialize/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>materialize/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>materialize/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>materialize/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <script src="<?php echo base_url()?>plugins/bower_components/jquery/dist/jquery.js"></script>

    <style>
		html, body {
		  height: 100%;
		}
		#actions {
		  margin: 2em 0;
		}

		/* Mimic table appearance */
		div.table {
		  display: table;
		}
		div.table .file-row {
		  display: table-row;
		}
		div.table .file-row > div {
		  display: table-cell;
		  vertical-align: top;
		  border-top: 1px solid #ddd;
		  padding: 8px;
		}
		div.table .file-row:nth-child(odd) {
		  background: #f9f9f9;
		}

		/* The total progress gets shown by event listeners */
		#total-progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the progress bar when finished */
		#previews .file-row.dz-success .progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the delete button initially */
		#previews .file-row .delete {
		  display: none;
		}

		/* Hide the start and cancel buttons and show the delete button */

		#previews .file-row.dz-success .start,
		#previews .file-row.dz-success .cancel {
		  display: none;
		}
		#previews .file-row.dz-success .delete {
		  display: block;
		}
	</style>
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
                              <li><a href="<?php echo base_url('admin/slider')?>" class="waves-effect active"><i class="ti-layout-slider fa-fw"></i><span class="hide-menu">Slider</span></a></li>
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
                        <h4 class="page-title">Upload Slider</h4> </div>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                            <li>Lainnya</li>
                            <li class="active">Slider</li>
                        </ol>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <div class="white-box">
                        <div id="actions" class="row">
                          <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-info fileinput-button">
                              <i class="glyphicon glyphicon-plus"></i>
                              <span>Add files...</span>
                            </span>
                            <button type="submit" class="btn btn-success start">
                              <i class="glyphicon glyphicon-upload"></i>
                              <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-danger cancel">
                              <i class="glyphicon glyphicon-ban-circle"></i>
                              <span>Cancel upload</span>
                            </button>
                            <a href="<?php echo base_url('admin/slider')?>" class="btn btn-warning">
                              <i class="fa fa-mail-reply"></i>
                              <span>Back</span>
                            </a>
                          </div>

                          <div class="col-lg-5">
                            <!-- The global file processing state -->
                            <span class="fileupload-process">
                              <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                              </div>
                            </span>
                          </div>
                        </div>

                        <div class="table table-striped" class="files" id="previews">
                          <div id="template" class="file-row">
                            <!-- This is used as the file preview template -->
                            <div>
                              <span class="preview"><img data-dz-thumbnail /></span>
                            </div>
                            <div>
                              <p class="name" data-dz-name></p>
                              <strong class="error text-danger" data-dz-errormessage></strong>
                            </div>
                            <div>
                              <p class="size" data-dz-size></p>
                              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                              </div>
                            </div>
                            <div>
                              <button class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start</span>
                              </button>
                              <button data-dz-remove class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel</span>
                              </button>
                              <p data-dz-remove class="delete">
                                <i class="glyphicon glyphicon-check"></i>
                                <span>Finish</span>
                              </p>
                            </div>
                          </div>
                          <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
                        </div>
                      </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

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
    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url()?>materialize/js/dropzone/dropzone.js"></script>
	  <script src="<?php echo base_url()?>materialize/js/dropzone/build.js"></script>
    <script>
		var Dropzone = require("enyo-dropzone");
		Dropzone.autoDiscover = false;
	</script>
	<script>
	  // Dapatkan HTML Template dan menghapusnya dari dokumen
      var previewNode = document.querySelector("#template");
      previewNode.id = "";
      var previewTemplate = previewNode.parentNode.innerHTML;
      previewNode.parentNode.removeChild(previewNode);

      var myDropzone = new Dropzone(document.body, {
        url: "<?php echo site_url('admin/slider/upload_slider');?>", // mengatur url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
		    maxFilesize: 2, // membatasi ukuran file yang di upload
		    acceptedFiles: "image/*", // menentukan tipe file yang akan di upload
        previewTemplate: previewTemplate,
        autoQueue: false, // Pastikan bahwa file tidak antri sampai ditambahkan secara manual
        previewsContainer: "#previews", // menentukan elemen untuk menampilkan preview
        clickable: ".fileinput-button" // menentukan elemen pemicu untuk memilih file
      });

      myDropzone.on("addedfile", function(file) {
        // menghubungkan tombol trart
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
      });

      // Update total progress bar pada saat proses upload
      myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
      });

      myDropzone.on("sending", function(file) {
        // menampilkan total progressbar
        document.querySelector("#total-progress").style.opacity = "1";
        // pada saat upload berlangsung, tombol start akan mati(disabled)
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
      });

      // progressbar akan di sembunyikan ketika prosess upload sudah selesai
      myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0";
      });

      // Membuat fungsi mengunggah semua gambar pada tombol start
		  document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
      };
      // Membuat fungsi pembatalan semua gambar pada saat upload
      document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true);
      };
    </script>

    <!--Dropzone Upload -->
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>plugins/bower_components/dropzone-master/dist/min/dropzone.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <?php $this->load->view('admin/sweetalert')?>
</body>
</html>
