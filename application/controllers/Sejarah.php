<?php
  class Sejarah extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('m_pengunjung');
      $this->load->model('M_web_admin');
      $this->m_pengunjung->count_visitor();
    }

    function index(){
      $x['sejarah'] = $this->M_web_admin->get_sejarah();
      $this->load->view('depan/v_sejarah',$x);
    }
  }
