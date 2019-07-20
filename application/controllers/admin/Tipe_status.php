<?php
  class Tipe_status extends CI_Controller{
    function __construct(){
      parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
      $this->load->model('m_pengguna');
      $this->load->model('M_web_admin');
      $this->load->model('m_status');
      $this->load->model('m_tipe');
    }

    function index(){
      $x['data'] = $this->m_tipe->get_all_tipe();
      $this->load->view('admin/v_tipe',$x);
    }

    function tambah_tipe(){
      $tipe = $this->input->post('xtipe');
      $this->m_tipe->insert_tipe($tipe);
      echo $this->session->set_flashdata('msg','success');
      redirect('admin/tipe_status');
    }

    function ubah_tipe(){
      $kode = $this->input->post('kode');
      $tipe = $this->input->post('xtipe');
      $this->m_tipe->update_tipe($kode,$tipe);
      echo $this->session->set_flashdata('msg','info');
      redirect('admin/tipe_status');
    }

    function hapus_tipe(){
      $kode = $this->input->post('kode');
      $this->m_tipe->delete_tipe($kode);
      echo $this->session->set_flashdata('msg','success-hapus');
      redirect('admin/tipe_status');
    }
  }
