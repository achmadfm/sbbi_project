<?php
  class Slider_unit_pendidikan extends CI_Controller{
    function __construct(){
      parent::__construct();
  		if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
      $this->load->model('m_slider');
    }

    function index(){
      $x['units'] = $this->m_slider->get_unit_pendidikan();
      $x['slider'] = $this->m_slider->get_slider_pendidikan();
      $x['tentang'] = $this->m_slider->get_tentang_unit();
      $this->load->view('admin/v_slider_unit',$x);
    }

    function hapus_slider_unit(){
      $id = $this->input->post('id');
      $gambar = $this->input->post('gambar');
      $path='./template/sliders_pendidikan/'.$gambar;
  		unlink($path);
  		$this->m_slider->delete_slider_pendidikan($id);
  		echo $this->session->set_flashdata('msg','successdelunit');
  		redirect('admin/slider_unit_pendidikan');
    }

    function tambah_tentang_unit(){
      $unit_id = strip_tags($this->input->post('xunit'));
      $unit = $this->m_slider->get_opsi_by_id($unit_id);
      $data = $unit->row_array();
      $idunit = $data['id_opsi'];
      $opsi = $data['nama_opsi'];
      $nama = $data['opsi_guru'];
      $judul = $this->input->post('xjudul');
      $tentang = $this->input->post('xtentang');
      $this->m_slider->insert_tentang_unit($judul,$tentang,$idunit,$opsi,$nama);
      echo $this->session->set_flashdata('msg','successunit');
      redirect('admin/slider_unit_pendidikan');
    }

    function hapus_tentang_unit(){
      $id = $this->input->post('id');
      $this->m_slider->delete_tentang_unit($id);
      echo $this->session->set_flashdata('msg','successdelunit');
      redirect('admin/slider_unit_pendidikan');
    }

    function edit_tentang_unit(){
      $id = $this->input->post('id');
      $unit_id = strip_tags($this->input->post('xunit'));
      $unit = $this->m_slider->get_opsi_by_id($unit_id);
      $data = $unit->row_array();
      $idunit = $data['id_opsi'];
      $opsi = $data['nama_opsi'];
      $nama = $data['opsi_guru'];
      $judul = $this->input->post('xjudul');
      $tentang = $this->input->post('xtentang');
      $this->m_slider->update_tentang_unit($id,$judul,$tentang,$idunit,$opsi,$nama);
      echo $this->session->set_flashdata('msg','successupunit');
      redirect('admin/slider_unit_pendidikan');
    }

    function tambah_slider_unit(){
      $config['upload_path'] = './template/sliders_pendidikan/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

      $this->upload->initialize($config);
      if(!empty($_FILES['filefoto']['name'])){
        if($this->upload->do_upload('filefoto')) {
          $gbr = $this->upload->data();
          $config['image_library']='gd2';
          $config['source_image']='./template/sliders_pendidikan/'.$gbr['file_name'];
          $config['create_thumb']= FALSE;
          $config['maintain_ratio']= FALSE;
          $config['quality']= '100%';
          $config['width']= 1366;
          $config['height']= 768;
          $config['new_image']= './template/sliders_pendidikan/'.$gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

          $gambar=$gbr['file_name'];
          $unit_id = strip_tags($this->input->post('xunit'));
          $unit = $this->m_slider->get_opsi_by_id($unit_id);
          $data = $unit->row_array();
          $idunit = $data['id_opsi'];
          $opsi = $data['nama_opsi'];
          $nama = $data['opsi_guru'];
          $this->m_slider->insert_slider_unit($opsi,$gambar,$idunit,$nama);
          echo $this->session->set_flashdata('msg','successslider');
          redirect('admin/slider_unit_pendidikan');
        }

      }
    }
  }
