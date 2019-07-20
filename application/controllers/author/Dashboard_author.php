<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_author extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}

	function index(){
		if($this->session->userdata('akses')=='2'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('author/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	}
}
