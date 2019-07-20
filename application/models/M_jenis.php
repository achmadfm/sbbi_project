<?php
  class M_jenis extends CI_Model{
    function get_all_jenis(){
      $hsl = $this->db->query("SELECT * FROM tbl_jenis_berita");
      return $hsl;
    }

    function get_jenis_by_id($id){
      $hsl = $this->db->query("SELECT * FROM tbl_jenis_berita WHERE id='$id'");
      return $hsl;
    }
    
    function get_insight(){
      $hsl = $this->db->query("SELECT * FROM tbl_jenis_berita WHERE id='3' AND nama_jenis='Insight Reading'");
      return $hsl;
    }
  }
