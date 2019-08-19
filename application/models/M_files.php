<?php
class M_files extends CI_Model{

	function get_all_files(){
		$hsl=$this->db->query("SELECT file_id,file_judul,file_deskripsi,DATE_FORMAT(file_tanggal,'%d-%M-%Y') AS tanggal,file_download,file_data FROM tbl_files ORDER BY file_id DESC");
		return $hsl;
	}
	function simpan_file($judul,$deskripsi,$file){
		$hsl=$this->db->query("INSERT INTO tbl_files(file_judul,file_deskripsi,file_data) VALUES ('$judul','$deskripsi','$file')");
		return $hsl;
	}
	function update_file($kode,$judul,$deskripsi,$file){
		$hsl=$this->db->query("UPDATE tbl_files SET file_judul='$judul',file_deskripsi='$deskripsi',file_data='$file' WHERE file_id='$kode'");
		return $hsl;
	}
	function update_file_tanpa_file($kode,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_files SET file_judul='$judul',file_deskripsi='$deskripsi' WHERE file_id='$kode'");
		return $hsl;
	}
	function hapus_file($kode){
		$hsl=$this->db->query("DELETE FROM tbl_files WHERE file_id='$kode'");
		return $hsl;
	}

	function get_file_byid($id){
		$hsl=$this->db->query("SELECT file_id,file_judul,file_deskripsi,DATE_FORMAT(file_tanggal,'%d-%M-%Y') AS tanggal,file_download,file_data FROM tbl_files WHERE file_id='$id'");
		return $hsl;
	}

	//Front-end
	function get_files_home(){
		$hsl=$this->db->query("SELECT file_id,file_judul,file_deskripsi,DATE_FORMAT(file_tanggal,'%d-%M-%Y') AS tanggal,file_download,file_data FROM tbl_files ORDER BY file_id DESC limit 7");
		return $hsl;
	}

	function get_files_perpage($offset, $limit){
		$hasil = $this->db->query("SELECT file_id,file_judul,file_deskripsi,DATE_FORMAT(file_tanggal,'%d-%M-%Y') AS tanggal,file_download,file_data FROM tbl_files ORDER BY file_id DESC limit $offset,$limit");
		return $hasil;
	}

}
