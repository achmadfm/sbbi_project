<?php

  class M_slider extends CI_Model{
    function get_all_slider(){
      return $this->db->query("SELECT * FROM tbl_slider");
    }

    function delete_slider($id){
      return $this->db->query("DELETE FROM tbl_slider WHERE id='$id'");
    }

    function get_slider_pendidikan(){
      return $this->db->query("SELECT * FROM tbl_slider_pendidikan");
    }

    function get_unit_pendidikan(){
      $query = $this->db->query("SELECT * FROM tbl_opsi");
      return $query;
    }

    function get_opsi_pendidikan(){
      $query = $this->db->query("SELECT opsi_guru FROM tbl_opsi");
      return $query;
    }

    function get_unit_by_opsi(){
      $query = $this->db->query("SELECT * FROM tbl_slider_pendidikan WHERE opsi='SMA'");
      return $query;
    }

    function get_opsi_by_id($id){
      return $this->db->query("SELECT * FROM tbl_opsi WHERE id_opsi='$id'");
    }

    function get_tentang_unit(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit");
    }
    
    function get_tentang_unit_sma(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit WHERE singkatan_unit='SMA'");
    }
    
    function get_tentang_unit_smp(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit WHERE singkatan_unit='SMP'");
    }
    
    function get_tentang_unit_sd(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit WHERE singkatan_unit='SD'");
    }
    
    function get_tentang_unit_tk(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit WHERE singkatan_unit='TK'");
    }
    
    function get_tentang_unit_pg(){
      return $this->db->query("SELECT * FROM tbl_tentang_unit WHERE singkatan_unit='PG'");
    }

    function insert_slider_unit($sliderunit,$foto,$id_opsi,$opsi){
      return $this->db->query("INSERT INTO tbl_slider_pendidikan(slider_unit,slider_foto,id_opsi,opsi) VALUES('$sliderunit','$foto','$id_opsi','$opsi')");
    }

    function insert_tentang_unit($judul,$isi,$id_unit,$namaunit,$singkatan){
      return $this->db->query("INSERT INTO tbl_tentang_unit(judul,isi,id_unit,nama_unit,singkatan_unit) VALUES('$judul','$isi','$id_unit','$namaunit','$singkatan')");
    }

    function update_tentang_unit($id,$judul,$isi,$id_unit,$namaunit,$singkatan){
      return $this->db->query("UPDATE tbl_tentang_unit SET judul='$judul',isi='$isi',id_unit='$id_unit',nama_unit='$namaunit',singkatan_unit='$singkatan' WHERE id_tentang='$id'");
    }

    function delete_slider_pendidikan($id){
      return $this->db->query("DELETE FROM tbl_slider_pendidikan WHERE id_slider_unit='$id'");
    }

    function delete_tentang_unit($id){
      return $this->db->query("DELETE FROM tbl_tentang_unit WHERE id_tentang='$id'");
    }
  }
