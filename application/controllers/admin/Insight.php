<?php
class Insight extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_kategori');
        $this->load->model('m_artikel');
        $this->load->model('m_jenis');
    }

    function index(){
        $x['data'] = $this->db->query("SELECT * FROM tbl_artikel");
        $this->load->view('admin/v_art_publish',$x);
    }

    function publish(){
        $kode = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
        $this->db->query("UPDATE tbl_artikel SET publish_status='1' WHERE artikel_id='$kode'");
        echo $this->session->set_flashdata('msg','success-publish');
        redirect('admin/insight');
    }

    function unpublish(){
        $kode = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
        $this->db->query("UPDATE tbl_artikel SET publish_status='0' WHERE artikel_id='$kode'");
        echo $this->session->set_flashdata('msg','success-unpublish');
        redirect('admin/insight');
    }

    function lihat(){
        $kode=$this->uri->segment(4);
		$x['data']=$this->m_artikel->get_article_by_id($kode);
        $x['kat']=$this->m_kategori->get_kategori_artikel();
		$x['ins']=$this->m_jenis->get_insight();
        $this->load->view('admin/v_lihat',$x);
    }
}