<?php
  class Coming extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('m_pengunjung');
      $this->m_pengunjung->count_visitor();
      $this->m_pengunjung->get_hits()->row_array();
  		$this->m_pengunjung->visitor_online()->num_rows();
    }
    function index(){
      $this->load->view('depan/coming_soon');
    }
  }
