<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_guru');
		$this->load->model('m_posisi');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
		$this->m_pengunjung->get_hits()->row_array();
		$this->m_pengunjung->visitor_online()->num_rows();
	}

	function index(){
		// $jum=$this->m_guru->guru();
    // $page=$this->uri->segment(3);
    // if(!$page):
    //     $offset = 0;
    // else:
    //     $offset = $page;
    // endif;
    // $limit=7;
    // $config['base_url'] = base_url() . 'guru/index/';
    // $config['total_rows'] = $jum->num_rows();
    // $config['per_page'] = $limit;
    // $config['uri_segment'] = 3;
    // $config['first_link'] = 'Awal';
    // $config['last_link'] = 'Akhir';
    // $config['next_link'] = 'Next >>';
    // $config['prev_link'] = '<< Prev';
    // // $this->pagination->initialize($config);
    // $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_guru->guru();
		$x['posi']=$this->m_posisi->get_all_posisi();
		$this->load->view('depan/v_guru',$x);
	}
}
