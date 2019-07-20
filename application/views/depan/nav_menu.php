<nav>
  <ul class="nav nav-pills" id="mainNav">
    <li class="<?php echo activate_menu('');?>">
      <a href="<?php echo base_url();?>">
        Home
      </a>
    </li>
    <li class="dropdown <?php echo activate_menu('kata_sambutan'); echo activate_menu('guru'); echo activate_menu('visi_misi'); echo activate_menu('galeri'); echo activate_menu('fasilitas');?>">
      <a class="dropdown-toggle" href="#">
        Profil Sekolah
      </a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo base_url('kata_sambutan')?>">Sambutan Kepala Sekolah</a></li>
        <li><a href="<?php echo base_url('guru')?>">Guru dan Staff</a></li>
        <li><a href="<?php echo base_url('visi_misi')?>">Visi dan Misi</a></li>
        <li><a href="<?php echo base_url('sejarah')?>">Sejarah</a></li>
        <li><a href="<?php echo base_url('galeri')?>">Galeri</a></li>
        <li><a  href="<?php echo base_url('fasilitas')?>">Fasilitas</a></li>
      </ul>
    </li>
    <li class="dropdown <?php echo activate_menu('Sbbi');?>">
      <a class="dropdown-toggle" href="#">
        Program
      </a>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo base_url('Sbbi/info_sma')?>">Sekolah Menengah Atas</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url('Sbbi/info_smp')?>">Sekolah Menengah Pertama</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url('Sbbi/info_sd')?>">Sekolah Dasar</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url('Sbbi/info_tk')?>">Taman Kanak-Kanak</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url('Sbbi/info_pg')?>">Play Group</a></li>
      </ul>
    </li>
    <li class="dropdown <?php echo activate_menu('berita'); echo activate_menu('berita_boarding'); echo activate_menu('pengumuman'); echo activate_menu('insight_reading');?>">
      <a class="dropdown-toggle" href="#">
        Berita
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo base_url('berita')?>">Berita Sekolah</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('berita_boarding')?>">Berita Asrama</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('pengumuman')?>">Pengumuman | Acara</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('insight_reading')?>">Insight reading</a></li>
      </ul>
    </li>
    <li class="<?php echo activate_menu('prestasi_siswa');?>">
      <a href="<?php echo base_url('prestasi_siswa')?>">
        Prestasi
      </a>
    </li>
    <li class="<?php echo activate_menu('program');?>">
      <a href="<?php echo base_url('program')?>">Keunggulan</a>
    </li>
    <li class="<?php echo activate_menu('kontak');?>">
      <a href="<?php echo base_url('kontak')?>">
        Hubungi Kami
      </a>
    </li>
  </ul>
</nav>
