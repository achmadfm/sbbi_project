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
		$id1 = 2;
		$id2 = 3;
		$id3 = 4;
		$x['speech']=$this->M_web_admin->get_speech();
		$x['speechsd'] = $this->M_web_admin->get_speech_by_id($id1);
		$x['speechsmp'] = $this->M_web_admin->get_speech_by_id($id2);
		$x['speechsma'] = $this->M_web_admin->get_speech_by_id($id3);
		$this->load->view('depan/v_kata_sambutan',$x);
	}
}
