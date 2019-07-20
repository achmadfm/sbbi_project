<?php
class Status extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_status');
		$this->load->model('m_tipe');
	}


	function index(){
		$x['data']=$this->m_status->get_all_status();
		$x['t']=$this->m_tipe->get_all_tipe();
		$this->load->view('admin/v_status',$x);
	}

	function simpan_status(){
		$status=strip_tags($this->input->post('xstatus'));
		$idtipe=strip_tags($this->input->post('xtipe'));
		$type = $this->m_tipe->get_tipe_by_id($idtipe);
		$data = $type->row_array();
		$id = $data['id_tipe'];
		$nama = $data['nama_tipe'];
		$this->m_status->simpan_status($status,$id,$nama);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/status');
	}

	function update_status(){
		$kode=strip_tags($this->input->post('kode'));
		$status=strip_tags($this->input->post('xstatus'));
		$idtipe=strip_tags($this->input->post('xtipe'));
		$type = $this->m_tipe->get_tipe_by_id($idtipe);
		$data = $type->row_array();
		$id = $data['id_tipe'];
		$nama = $data['nama_tipe'];
		$this->m_status->update_status($kode,$status,$id,$nama);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/status');
	}
	function hapus_status(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_status->hapus_status($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/status');
	}
}
