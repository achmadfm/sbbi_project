<?php
  class M_posisi extends CI_Model{
    function get_all_posisi(){
      $hasil = $this->db->query("SELECT * FROM tbl_posisi");
      return $hasil;
    }

    function get_posisi_by_id($id){
      $hasil = $this->db->query("SELECT * FROM tbl_posisi WHERE id_posisi='$id'");
      return $hasil;
    }
  }
