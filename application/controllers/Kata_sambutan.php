<?php
class Kata_sambutan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_web_admin');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
		$this->m_pengunjung->get_hits()->row_array();
		$this->m_pengunjung->visitor_online()->num_rows();
	}
	function index(){
		$id = 2;
		$x['speech']=$this->M_web_admin->get_speech();
		$x['speechsab'] = $this->M_web_admin->get_speech_by_id($id);
		$this->load->view('depan/v_kata_sambutan',$x);
	}
}
