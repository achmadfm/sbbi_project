<?php
class M_status extends CI_Model{

	function get_all_status(){
		$hsl=$this->db->query("select * from tbl_status_siswa");
		return $hsl;
	}
	function simpan_status($status,$id_tipe,$nama_tipe){
		$hsl=$this->db->query("insert into tbl_status_siswa(nama_status,id_tipe,nama_tipe) values('$status','$id_tipe','$nama_tipe')");
		return $hsl;
	}
	function update_status($kode,$status,$id_tipe,$nama_tipe){
		$hsl=$this->db->query("update tbl_status_siswa set nama_status='$status', id_tipe='$id_tipe', nama_tipe='$nama_tipe' where id_status='$kode'");
		return $hsl;
	}
	function hapus_status($kode){
		$hsl=$this->db->query("delete from tbl_status_siswa where id_status='$kode'");
		return $hsl;
	}

	function get_status_byid($status_id){
		$hsl=$this->db->query("select * from tbl_status_siswa where id_status='$status_id'");
		return $hsl;
	}

}
