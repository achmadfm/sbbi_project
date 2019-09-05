<?php
  class M_web_admin extends CI_Model{

    function get_unit(){
      $query = $this->db->query("SELECT * FROM tbl_unit");
      return $query;
    }

    function get_unit_by_id($id){
      $query = $this->db->query("SELECT * FROM tbl_unit WHERE id_unit='$id'");
      return $query;
    }

    function get_tentang(){
      $query = $this->db->query("SELECT * FROM tbl_tentang");
      return $query;
    }

    function get_sejarah(){
      $query = $this->db->query("SELECT * FROM tbl_sejarah");
      return $query;
    }

    function update_sejarah($isi){
      $query = $this->db->query("UPDATE tbl_sejarah SET isi_sejarah='$isi' WHERE id_sejarah='1'");
      return $query;
    }

    function update_tentang($id,$judul,$isi){
      $query = $this->db->query("UPDATE tbl_tentang SET judul='$judul', isi='$isi' WHERE id_tentang='$id'");
      return $query;
    }

    function get_tentang_by_id($id){
      $query = $this->db->query("SELECT * FROM tbl_tentang WHERE id_tentang='$id'");
      return $query;
    }

    function get_speech(){
      $query = $this->db->query("SELECT * FROM tbl_sambutan");
      return $query;
    }

    function get_speech_by_id($id){
      $query = $this->db->query("SELECT * FROM tbl_sambutan WHERE id_sambutan='$id'");
      return $query;
    }

    function up_sambutan($id_speech,$nama,$isi,$gambar){
      $query = $this->db->query("UPDATE tbl_sambutan SET nama_kepsek='$nama',isi_sambutan='$isi',foto_sambutan='$gambar' WHERE id_sambutan='$id_speech'");
      return $query;
    }

    function up_sambutan_no_gambar($id_speech,$nama,$isi){
      $query = $this->db->query("UPDATE tbl_sambutan SET nama_kepsek='$nama', isi_sambutan='$isi' WHERE id_sambutan='$id_speech'");
      return $query;
    }

    function up_sambutan_sab($id_speech,$nama,$isi,$gambar){
      $query = $this->db->query("UPDATE tbl_sambutan SET nama_kepsek='$nama',isi_sambutan='$isi',foto_sambutan='$gambar' WHERE id_sambutan='$id_speech'");
      return $query;
    }

    function up_sambutan_no_gambar_sab($id_speech,$nama,$isi){
      $query = $this->db->query("UPDATE tbl_sambutan SET nama_kepsek='$nama', isi_sambutan='$isi' WHERE id_sambutan='$id_speech'");
      return $query;
    }

    function get_fasilitas(){
      $query = $this->db->query("SELECT * FROM tbl_fasilitas");
      return $query;
    }

    function get_fasilitas_by_kode($id){
      $query = $this->db->query("SELECT * FROM tbl_fasilitas WHERE id_fasilitas='$id'");
      return $query;
    }

    function get_fasilitas_unit($namaunit){
      $query = $this->db->query("SELECT * FROM tbl_fasilitas WHERE unit_sekolah='$namaunit'");
      return $query;
    }

    function tambah_fasilitas($namafasilitas,$desk,$idunit,$unitsekolah,$id_user,$namauser,$gambar,$slug){
      $query = $this->db->query("INSERT INTO tbl_fasilitas (nama_fasilitas,deskripsi,id_unit,unit_sekolah,id_author,nama_author,foto_fasilitas,slug) VALUES ('$namafasilitas','$desk','$idunit','$unitsekolah','$id_user','$namauser','$gambar','$slug')");
      return $query;
    }

    function update_fasilitas($id,$namafasilitas,$desk,$idunit,$unitsekolah,$id_user,$namauser,$gambar,$slug){
      $query = $this->db->query("UPDATE tbl_fasilitas SET nama_fasilitas='$namafasilitas', deskripsi='$desk', id_author='$id_user', id_unit='$idunit', unit_sekolah='$unitsekolah', nama_author='$namauser', foto_fasilitas='$gambar', slug='$slug' WHERE id_fasilitas='$id'");
      return $query;
    }

    function update_fasilitas_no_gambar($id,$namafasilitas,$desk,$idunit,$unitsekolah,$id_user,$namauser,$slug){
      $query = $this->db->query("UPDATE tbl_fasilitas SET nama_fasilitas='$namafasilitas', deskripsi='$desk',id_unit='$idunit', unit_sekolah='$unitsekolah', id_author='$id_user', nama_author='$namauser', slug='$slug' WHERE id_fasilitas='$id'");
      return $query;
    }

    function del_fasilitas($id){
      $query = $this->db->query("DELETE FROM tbl_fasilitas WHERE id_fasilitas='$id'");
      return $query;
    }

    function get_program(){
      $query = $this->db->query("SELECT * FROM tbl_program");
      return $query;
    }

    function get_program_sekolah($namaunit){
      $query = $this->db->query("SELECT * FROM tbl_program WHERE unit_sekolah='$namaunit'");
      return $query;
    }

    function tambah_program($namaprogram,$desk,$idunit,$unitsekolah,$id_user,$namauser,$gambar,$slug){
      $query = $this->db->query("INSERT INTO tbl_program (nama_program,deskripsi,id_unit_sekolah,unit_sekolah,id_author,nama_author,foto_program,slug) VALUES ('$namaprogram','$desk','$idunit','$unitsekolah','$id_user','$namauser','$gambar','$slug')");
      return $query;
    }

    function update_program($id,$namaprogram,$desk,$idunit,$unitsekolah,$id_user,$namauser,$gambar,$slug){
      $query = $this->db->query("UPDATE tbl_program SET nama_program='$namaprogram', deskripsi='$desk', id_unit_sekolah='$idunit', unit_sekolah='$unitsekolah', id_author='$id_user', nama_author='$namauser', foto_program='$gambar', slug='$slug' WHERE id_program='$id'");
      return $query;
    }

    function update_program_no_gambar($id,$namaprogram,$desk,$idunit,$unitsekolah,$id_user,$namauser,$slug){
      $query = $this->db->query("UPDATE tbl_program SET nama_program='$namaprogram', deskripsi='$desk',id_unit_sekolah='$idunit', unit_sekolah='$unitsekolah', id_author='$id_user', nama_author='$namauser', slug='$slug' WHERE id_program='$id'");
      return $query;
    }

    function del_program($id){
      $query = $this->db->query("DELETE FROM tbl_program WHERE id_program='$id'");
      return $query;
    }

    function get_testimoni(){
      $query = $this->db->query("SELECT * FROM tbl_testimoni");
      return $query;
    }

    function tambah_testimoni($tnama,$tisi,$temail,$id_status,$nstatus,$id_tipe,$ntipe,$tfoto){
      $query = $this->db->query("INSERT INTO tbl_testimoni (testimoni_nama,testimoni_isi,testimoni_email,id_status,nama_status,id_tipe,nama_tipe,testimoni_foto) VALUES ('$tnama','$tisi','$temail','$id_status','$nstatus','$id_tipe','$ntipe','$tfoto')");
      return $query;
    }

    function update_testimoni($tid,$tnama,$tisi,$temail,$id_status,$nstatus,$id_tipe,$ntipe,$tfoto){
      $query = $this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$tnama', testimoni_isi='$tisi', testimoni_email='$temail', id_status='$id_status', nama_status='$nstatus', id_tipe='$id_tipe', nama_tipe='$ntipe', testimoni_foto='$tfoto' WHERE testimoni_id='$tid'");
      return $query;
    }

    function update_testimoni_no_gambar($tid,$tnama,$tisi,$temail,$id_status,$nstatus,$id_tipe,$ntipe){
      $query = $this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$tnama', testimoni_isi='$tisi', testimoni_email='$temail', id_status='$id_status', nama_status='$nstatus', id_tipe='$id_tipe', nama_tipe='$ntipe' WHERE testimoni_id='$tid'");
      return $query;
    }

    function hapus_testimoni($tid){
      $query = $this->db->query("DELETE FROM tbl_testimoni WHERE testimoni_id='$tid'");
      return $query;
    }
  }
