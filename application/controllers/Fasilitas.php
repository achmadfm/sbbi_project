<?php
  class Fasilitas extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('M_web_admin');
      $this->load->model('m_pengunjung');
      $this->m_pengunjung->count_visitor();
      $this->m_pengunjung->get_hits()->row_array();
  		$this->m_pengunjung->visitor_online()->num_rows();
    }

    function index(){
      $x['fasilitas'] = $this->M_web_admin->get_fasilitas();
      $this->load->view('depan/v_fasilitas',$x);
    }

    function fasilitas_bsm(){
      $namaunit = 'BSM';
      $x['fasilitasbsm'] = $this->M_web_admin->get_fasilitas_unit($namaunit);
      $this->load->view('depan/v_fasilitas_bsm',$x);
    }

    function fasilitas_sab(){
      $namaunit = 'SAB';
      $x['fasilitassab'] = $this->M_web_admin->get_fasilitas_unit($namaunit);
      $this->load->view('depan/v_fasilitas_sab',$x);
    }

    function fasilitas_detail($slugs){
      $slug = htmlspecialchars($slugs,ENT_QUOTES);
  		$query = $this->db->get_where('tbl_fasilitas',array('slug' => $slug));
  		if($query->num_rows() > 0){
  			$b = $query->row_array();
  			$kode = $b['id_fasilitas'];
  			$data = $this->M_web_admin->get_fasilitas_by_kode($kode);
  			$row = $data->row_array();
  			$x['id']=$row['id_fasilitas'];
  			$x['title']=$row['nama_fasilitas'];
  			$x['desk']=$row['deskripsi'];
  			$x['author']=$row['nama_author'];
  			$x['slug']=$row['slug'];
        $x['foto']=$row['foto_fasilitas'];
  			$x['tentang']=$this->M_web_admin->get_tentang();
  		}else{
  			redirect('fasilitas');
  		}
  		$this->load->view('depan/v_fasilitas_detail',$x);
    }
  }
