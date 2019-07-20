<div class="sidebar-nav">
    <div class="sidebar-head">
        <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <ul class="nav" id="side-menu">
        <li> <a href="<?php echo base_url('admin/dashboard')?>" class="waves-effect <?php echo activate_menu('admin/dashboard');?>"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a></li>
        <li> <a href="#" class="waves-effect <?php echo activate_menu('admin/tulisan'); echo activate_menu('admin/tulisan/add_tulisan'); echo activate_menu('admin/kategori');?>"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">News<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level two-li">
                <li><a href="<?php echo base_url('admin/tulisan')?>" class="waves-effect"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">News List</span></a></li>
                <li><a href="<?php echo base_url('admin/tulisan/add_tulisan')?>" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Post News</span></a></li>
                <li><a href="<?php echo base_url('admin/kategori')?>" class="waves-effect"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Category</span></a></li>
            </ul>
        </li>
        <li> <a href="<?php echo base_url('admin/users')?>" class="waves-effect <?php echo activate_menu('admin/users');?>"><i class="mdi mdi-account fa-fw"></i> <span class="hide-menu">Users</span></a></li>
        <li class="mega-nav"> <a href="<?php echo base_url('admin/agenda')?>" class="waves-effect <?php echo activate_menu('admin/agenda');?>"><i class="mdi mdi-format-color-fill  fa-fw"></i> <span class="hide-menu">Agenda</span></a></li>
        <li> <a href="<?php echo base_url('admin/pengumuman')?>" class="waves-effect <?php echo activate_menu('admin/pengumuman');?>"><i class="mdi mdi-volume-high fa-fw"></i> <span class="hide-menu">Pengumuman</span></a></li>
        <li> <a href="<?php echo base_url('admin/files')?>" class="waves-effect <?php echo activate_menu('admin/files');?>"><i class="mdi mdi-cloud-download fa-fw"></i> <span class="hide-menu">Download</span></a></li>
        <li class="last-nav"><a href="#" class="waves-effect <?php echo activate_menu('admin/album'); echo activate_menu('admin/galeri');?>"><i class="mdi mdi-google-photos fa-fw"></i> <span class="hide-menu">Galeri<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('admin/album')?>" class="waves-effect"><i class="mdi mdi-image-album fa-fw"></i><span class="hide-menu">Album</span></a></li>
                <li><a href="<?php echo base_url('admin/galeri')?>" class="waves-effect"><i class="fa fa-file-image-o fa-fw"></i><span class="hide-menu">Photos</span></a></li>
            </ul>
        </li>
        <li> <a href="#" class="waves-effect <?php echo activate_menu('admin/guru'); echo activate_menu('admin/siswa'); echo activate_menu('admin/prestasi'); echo activate_menu('admin/kelas'); echo activate_menu('admin/kat_prestasi'); echo activate_menu('admin/web_admin'); echo activate_menu('admin/inbox');?>"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Lainnya</span></a>
          <ul class="nav nav-second-level">
              <li><a href="<?php echo base_url('admin/guru')?>"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Data Guru</span></a></li>
              <li><a href="#" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kesiswaan<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li><a href="<?php echo base_url('admin/siswa')?>"><i class="mdi mdi-school fa-fw"></i><span class="hide-menu">Data Siswa</span></a></li>
                  <li><a href="<?php echo base_url('admin/prestasi')?>" class="waves-effect"><i class="mdi mdi-trophy-variant fa-fw"></i><span class="hide-menu">Prestasi Siswa</span></a></li>
                  <li><a href="<?php echo base_url('admin/kelas')?>" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Kelas</span></a></li>
                  <li><a href="<?php echo base_url('admin/kat_prestasi')?>" class="waves-effect"><i class="ti-layout-sidebar-left fa-fw"></i><span class="hide-menu">Kategori</span></a></li>
                </ul>
                <li><a href="<?php echo base_url('admin/web_admin')?>" class="waves-effect"><i class="fa fa-wrench fa-fw"></i><span class="hide-menu">Web Administration</span></a></li>
                <li><a href="<?php echo base_url('admin/inbox')?>" class="waves-effect"><i class="mdi mdi-email fa-fw"></i><span class="hide-menu">Inbox</span></a></li>
              </li>
          </ul>
        </li>
    </ul>
</div>
