<?php
class Kat_prestasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_katprestasi');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_katprestasi->get_all_kat_prestasi();
		$this->load->view('admin/v_kat_prestasi',$x);
	}

	function simpan_katprestasi(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_katprestasi->simpan_prestasi($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kat_prestasi');
	}

	function update_katprestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_katprestasi->update_prestasi($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kat_prestasi');
	}
	function hapus_katprestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_katprestasi->delete_prestasi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kat_prestasi');
	}

}
