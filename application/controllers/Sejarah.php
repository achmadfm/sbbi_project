<?php
  class Sejarah extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('m_pengunjung');
      $this->load->model('M_web_admin');
      $this->m_pengunjung->count_visitor();
    }

    function index(){
      $id = 2;
      $x['sejarah'] = $this->M_web_admin->get_sejarah();
      $x['sejarahsab'] = $this->M_web_admin->get_sejarah_by_id($id);
      $this->load->view('depan/v_sejarah',$x);
    }
  }
