<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}

	function simpan_kelas($nama,$jum){
		$hsl = $this->db->query("INSERT INTO tbl_kelas(kelas_nama) VALUES ('$nama')");
		return $hsl;
	}

	function update_kelas($id,$nama,$jum){
		$hsl = $this->db->query("UPDATE tbl_kelas set kelas_nama='$nama' where kelas_id='$id'");
		return $hsl;
	}

	function delete_kelas($id){
		$hsl = $this->db->query("DELETE from tbl_kelas where kelas_id='$id'");
		return $hsl;
	}

	function get_kelas_byid($id){
		$hsl = $this->db->query("SELECT * FROM tbl_kelas WHERE kelas_id='$id'");
		return $hsl;
	}

}
