<?php
  class M_tipe extends CI_Model{
    function get_all_tipe(){
      return $this->db->query("SELECT * FROM tbl_tipe_status");
    }

    function get_tipe_by_id($id){
      return $this->db->query("SELECT * FROM tbl_tipe_status WHERE id_tipe='$id'");
    }

    function insert_tipe($nama){
      return $this->db->query("INSERT INTO tbl_tipe_status(nama_tipe) VALUES('$nama')");
    }

    function update_tipe($id,$nama){
      return $this->db->query("UPDATE tbl_tipe_status SET nama_tipe='$nama' WHERE id_tipe='$id'");
    }

    function delete_tipe($id){
      return $this->db->query("DELETE FROM tbl_tipe_status WHERE id_tipe='$id'");
    }
  }
