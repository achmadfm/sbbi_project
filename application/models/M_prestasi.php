<?php
  class M_prestasi extends CI_Model{
     function get_all_prestasi(){
       $hsl = $this->db->query("SELECT tbl_prestasi.*,DATE_FORMAT(tanggal,'%d-%M-%Y') AS tanggal FROM tbl_prestasi ORDER BY id_prestasi DESC");
       return $hsl;
     }

    function simpan_prestasi($namapres,$deskripsi,$tanggal,$id_kategori,$katpres,$id_kelas,$nama_kelas,$id_siswa,$nama_siswa,$photo,$sampul,$slug){
      $hasil = $this->db->query("INSERT INTO tbl_prestasi(nama_prestasi,deskripsi,tanggal,id_kategori_prestasi,nama_kategori,id_kelas,kelas,id_siswa,nama_siswa,foto_siswa,sampul,slug) VALUES('$namapres','$deskripsi','$tanggal','$id_kategori','$katpres','$id_kelas','$nama_kelas','$id_siswa','$nama_siswa','$photo','$sampul','$slug')");
      return $hasil;
    }

    function simpan_prestasi_tanpa_img($namapres,$deskripsi,$id_kategori,$katpres,$id_kelas,$nama_kelas,$id_siswa,$nama_siswa,$photo,$slug){
        $hasil = $this->db->query("INSERT INTO tbl_prestasi(nama_prestasi,deskripsi,tanggal,id_kategori_prestasi,nama_kategori,id_kelas,kelas,id_siswa,nama_siswa,foto_siswa,slug) VALUES('$namapres','$deskripsi','$tanggal','$id_kategori','$katpres','$id_kelas','$nama_kelas','$id_siswa','$nama_siswa','$photo','$slug')");
        return $hasil;
    }

    function update_prestasi($id,$namapres,$deskripsi,$tanggal,$id_kategori,$katpres,$id_kelas,$nama_kelas,$id_siswa,$nama_siswa,$photo,$sampul,$slug){
      $hsl = $this->db->query("update tbl_prestasi set nama_prestasi='$namapres', deskripsi='$deskripsi', tanggal='$tanggal', id_kategori_prestasi='$id_kategori', nama_kategori='$katpres', id_kelas='$id_kelas', kelas='$nama_kelas', id_siswa='$id_siswa', nama_siswa='$nama_siswa', foto_siswa='$photo', sampul='$sampul', slug='$slug' where id_prestasi='$id'");
      return $hsl;
    }

    function update_prestasi_tanpa_img($id,$namapres,$deskripsi,$tanggal,$id_kategori,$katpres,$id_kelas,$nama_kelas,$id_siswa,$nama_siswa,$photo,$slug){
      $hsl = $this->db->query("update tbl_prestasi set nama_prestasi='$namapres', deskripsi='$deskripsi', tanggal='$tanggal', id_kategori_prestasi='$id_kategori', nama_kategori='$katpres', id_kelas='$id_kelas', kelas='$nama_kelas', id_siswa='$id_siswa', nama_siswa='$nama_siswa', foto_siswa='$photo', slug='$slug' where id_prestasi='$id'");
      return $hsl;
    }

    function delete_prestasi($id){
      $hsl = $this->db->query("delete from tbl_prestasi where id_prestasi='$id'");
      return $hsl;
    }

    function get_prestasi_byid($id){
      $hsl = $this->db->query("select * from tbl_prestasi where id_prestasi='$id'");
      return $hsl;
    }
  }
