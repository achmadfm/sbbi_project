<?php
  class M_katprestasi extends CI_Model{
    function get_all_kat_prestasi(){
      $hsl = $this->db->query("select * from tbl_kat_prestasi");
      return $hsl;
    }

    function simpan_prestasi($kat_prestasi){
      $hsl = $this->db->query("insert into tbl_kat_prestasi(nama_prestasi) values('$kat_prestasi')");
      return $hsl;
    }

    function update_prestasi($id,$kat_prestasi){
      $hsl = $this->db->query("update tbl_kat_prestasi set nama_prestasi='$kat_prestasi' where id_prestasi='$id'");
      return $hsl;
    }

    function delete_prestasi($id){
      $hsl = $this->db->query("delete from tbl_kat_prestasi where id_prestasi='$id'");
      return $hsl;
    }

    function get_prestasi_byid($id){
      $hsl = $this->db->query("select * from tbl_kat_prestasi where id_prestasi='$id'");
      return $hsl;
    }
  }
