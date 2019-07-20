<?php
class Kontak extends CI_Controller{
  function __construct(){
		parent::__construct();
    $this->load->model('m_kontak');
    $this->load->model('m_pengunjung');
    $this->m_pengunjung->count_visitor();
    $this->m_pengunjung->get_hits()->row_array();
		$this->m_pengunjung->visitor_online()->num_rows();
	}
	function index(){
    $this->load->library('googlemaps');
    $config=array();
    $config['center']="-5.1516846, 119.4204944";
    $config['zoom']='auto';
    $config['map_height']="400px";
    $this->googlemaps->initialize($config);
    $marker=array();
    $marker['position']="-5.1515996, 119.4206914";
    $this->googlemaps->add_marker($marker);
    $data['map']=$this->googlemaps->create_map();
		$this->load->view('depan/v_contact',$data);
	}

  function kirim_pesan(){
    $nama=str_replace("'", "", $this->input->post('xnama',TRUE));
    $email=str_replace("'", "", $this->input->post('xemail',TRUE));
    $kontak=str_replace("'", "", $this->input->post('xkontak',TRUE));
    $pesan=str_replace("'", "", $this->input->post('xpesan',TRUE));
    $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
    echo $this->session->set_flashdata('msg','success');
    redirect('kontak');
  }
}
