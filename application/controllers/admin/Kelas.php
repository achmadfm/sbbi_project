<?php
  class Kelas extends CI_Controller{
    function __construct(){
  		parent::__construct();
  		if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
          $this->load->model('m_kelas');
  	}

  	function index(){
  	  $x['data']=$this->m_kelas->get_all_kelas();
  		$this->load->view('admin/v_kelas',$x);
  	}

  	function simpan_kelas(){
  		$kelas=strip_tags($this->input->post('xkelas'));
  		$this->m_kelas->simpan_kelas($kelas);
  		echo $this->session->set_flashdata('msg','success');
  		redirect('admin/kelas');
  	}

  	function update_kelas(){
  		$kode=strip_tags($this->input->post('kode'));
  		$kelas=strip_tags($this->input->post('xkelas'));
  		$this->m_kelas->update_kelas($kode,$kelas);
  		echo $this->session->set_flashdata('msg','info');
  		redirect('admin/kelas');
  	}
  	function hapus_kelas(){
  		$kode=strip_tags($this->input->post('kode'));
  		$this->m_kelas->hapus_kelas($kode);
  		echo $this->session->set_flashdata('msg','success-hapus');
  		redirect('admin/kelas');
  	}
  }
