<?php
class Emagazine extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_files');
		$this->load->helper('download');
	}
	
	function index(){
		$jum=$this->m_files->get_files_home();
		$page=$this->uri->segment(3);
		if(!$page):
			$offset = 0;
		else:
			$offset = $page;
		endif;
		$limit=2;
		$config['base_url'] = base_url() . 'emagazine/index/';
		$config['total_rows'] = $jum->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<ul class="pagination pagination-lg pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
    	$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
    	$config['num_tag_close'] = '</li>';
    	$this->pagination->initialize($config);
		$x['page'] =$this->pagination->create_links();
		$x['files'] = $this->m_files->get_files_home();
		$x['data'] = $this->m_files->get_files_perpage($offset,$limit);
		$this->load->view('depan/v_emagazine',$x);
	}

	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data =  file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}
}
