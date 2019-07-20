<?php
  class Sbbi extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('m_pengunjung');
      $this->load->model('m_slider');
      $this->load->model('m_guru');
      $this->load->model('m_galeri');
      $this->load->model('m_web_admin');
      $this->m_pengunjung->count_visitor();
      $this->m_pengunjung->get_hits()->row_array();
  		$this->m_pengunjung->visitor_online()->num_rows();
    }

    function index(){
      $this->load->view('depan/v_errorpage');
    }

    function info_sma(){
      $x['home']=$this->m_galeri->get_galeri_home();
      $x['guru'] = $this->m_guru->get_all_guru_sma();
      $x['units'] = $this->m_slider->get_opsi_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit_sma();
      $x['testi'] = $this->m_web_admin->get_testimoni();
      $this->load->view("depan/v_info_sma",$x);
    }

    function info_smp(){
      $x['home']=$this->m_galeri->get_galeri_home();
      $x['guru'] = $this->m_guru->get_all_guru_smp();
      $x['units'] = $this->m_slider->get_opsi_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit_smp();
      $x['testi'] = $this->m_web_admin->get_testimoni();
      $this->load->view("depan/v_info_smp",$x);
    }

    function info_sd(){
      $x['home']=$this->m_galeri->get_galeri_home();
      $x['guru'] = $this->m_guru->get_all_guru_sd();
      $x['units'] = $this->m_slider->get_opsi_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit_sd();
      $x['testi'] = $this->m_web_admin->get_testimoni();
      $this->load->view("depan/v_info_sd",$x);
    }

    function info_tk(){
      $x['home']=$this->m_galeri->get_galeri_home();
      $x['guru'] = $this->m_guru->get_all_guru_tk();
      $x['units'] = $this->m_slider->get_opsi_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit_tk();
      $x['testi'] = $this->m_web_admin->get_testimoni();
      $this->load->view("depan/v_info_tk",$x);
    }

    function info_pg(){
      $x['home']=$this->m_galeri->get_galeri_home();
      $x['guru'] = $this->m_guru->get_all_guru_pg();
      $x['units'] = $this->m_slider->get_opsi_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit_pg();
      $x['testi'] = $this->m_web_admin->get_testimoni();
      $this->load->view("depan/v_info_pg",$x);
    }
  }
