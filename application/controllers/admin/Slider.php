<?php
  class Slider extends CI_Controller{
    function __construct(){
      parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
          $url=base_url('administrator');
          redirect($url);
      };
      $this->load->model('m_slider');
      $this->load->helper(array('url','file'));
    }

    function index(){
      $x['slider'] = $this->m_slider->get_all_slider();
      $this->load->view('admin/v_sliderpreview',$x);
    }

    function tambah_slider(){
      $this->load->view('admin/v_slider');
    }

    function hapus_slider(){
      $id = $this->input->post('id');
      $gambar = $this->input->post('gambar');
      $path='./template/sliders/'.$gambar;
  		unlink($path);
  		$this->m_slider->delete_slider($id);
  		echo $this->session->set_flashdata('msg','success-hapus4');
  		redirect('admin/slider');
    }

    function upload_slider(){
      $config['upload_path'] = './template/sliders/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

      $this->upload->initialize($config);
      if(!empty($_FILES['file']['name'])){
        if($this->upload->do_upload('file')) {
          $gbr = $this->upload->data();
          $config['image_library']='gd2';
          $config['source_image']='./template/sliders/'.$gbr['file_name'];
          $config['create_thumb']= FALSE;
          $config['maintain_ratio']= FALSE;
          $config['quality']= '100%';
          $config['width']= 1366;
          $config['height']= 720;
          $config['new_image']= './template/sliders/'.$gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

          $gambar=$gbr['file_name'];

          $this->db->insert('tbl_slider',array('nama'=>$gambar));
          echo $this->session->set_flashdata('msg','successslider');
        }

      }
    }
  }
