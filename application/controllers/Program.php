<?php
  class Program extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('M_web_admin');
      $this->load->model('m_pengunjung');
      $this->m_pengunjung->count_visitor();
      $this->m_pengunjung->get_hits()->row_array();
  		$this->m_pengunjung->visitor_online()->num_rows();
    }

    function index(){
      $x['program'] = $this->M_web_admin->get_program();
      $this->load->view('depan/v_program',$x);
    }

    function program_bsm(){
      $namaunit = 'BSM';
      $x['prog_bsm'] = $this->M_web_admin->get_program_sekolah($namaunit);
      $this->load->view('depan/v_program_bsm',$x);
    }

    function program_sab(){
      $namaunit = 'SAB';
      $x['prog_sab'] = $this->M_web_admin->get_program_sekolah($namaunit);
      $this->load->view('depan/v_program_sab',$x);
    }

    function program_detail($slugs){
      $slug = htmlspecialchars($slugs,ENT_QUOTES);
      $query = $this->db->get_where('tbl_program',array('slug' => $slug));
      if($query->num_rows() > 0){
        $b = $query->row_array();
        $kode = $b['id_program'];
        $data = $this->M_web_admin->get_program_by_kode($kode);
        $row = $data->row_array();
        $x['id']=$row['id_program'];
        $x['title']=$row['nama_program'];
        $x['desk']=$row['deskripsi'];
        $x['author']=$row['nama_author'];
        $x['slug']=$row['slug'];
        $x['foto']=$row['foto_program'];
        $x['tentang']=$this->M_web_admin->get_tentang();
      }else{
        redirect('program');
      }
      $this->load->view('depan/v_program_detail',$x);
    }
  }
