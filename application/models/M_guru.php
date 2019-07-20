<?php
class M_guru extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->model('m_slider');
	}

	function get_all_guru(){
		$query = $this->db->query("SELECT * FROM tbl_guru");
		return $query;
	}

	function get_guru_by_id($id){
		$hsl = $this->db->query("SELECT * FROM tbl_guru WHERE guru_id='$id'");
		return $hsl;
	}


	function get_opsi_ajaran(){
		return $this->db->query("SELECT * FROM tbl_opsi ORDER BY id_opsi ASC");
	}

	function simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$id_posisi,$nama_posisi,$opsi_ajaran,$status,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_tentang,guru_mapel,id_posisi,nama_posisi,opsi_ajaran,status_mengajar,guru_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$tentang','$mapel','$id_posisi','$nama_posisi','$opsi_ajaran','$status','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tentang,$tgl_lahir,$mapel,$id_posisi,$nama_posisi,$opsi_ajaran,$status){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_tentang,guru_mapel,id_posisi,nama_posisi,opsi_ajaran,status_mengajar) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$tentang','$mapel','$id_posisi','$nama_posisi','$opsi_ajaran','$status')");
		return $hsl;
	}

	function update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$id_posisi,$nama_posisi,$opsi_ajaran,$status,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_tentang='$tentang',guru_mapel='$mapel',id_posisi='$id_posisi',nama_posisi='$nama_posisi',opsi_ajaran='$opsi_ajaran', status_mengajar='$status',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$id_posisi,$nama_posisi,$opsi_ajaran,$status){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_tentang='$tentang',guru_mapel='$mapel',id_posisi='$id_posisi',nama_posisi='$nama_posisi',opsi_ajaran='$opsi_ajaran', status_mengajar='$status' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

	function get_all_guru_sma(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%SMA%' AND nama_posisi='Guru'");
		return $hsl;
	}

	function get_all_guru_smp(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%SMP%' AND nama_posisi='Guru'");
		return $hsl;
	}


	function get_all_guru_sd(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%SD%' AND nama_posisi='Guru'");
		return $hsl;
	}

	function get_all_guru_tk(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%TK%' AND nama_posisi='Guru'");
		return $hsl;
	}

	function get_all_guru_pg(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%PG%' AND nama_posisi='Guru'");
		return $hsl;
	}

	function get_kepsek_wakasek_bsm(){
		$hsl = $this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%SMA%' AND opsi_ajaran LIKE '%SMP%'");
		return $hsl;
	}

	function get_kepsek_wakasek_sab(){
		$hsl = $this->db->query("SELECT * FROM tbl_guru WHERE opsi_ajaran LIKE '%SD%' AND opsi_ajaran LIKE '%TK%' AND opsi_ajaran LIKE '%PG%'");
		return $hsl;
	}

}
