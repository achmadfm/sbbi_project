<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_artikel');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->model('m_jenis');
		$this->load->library('upload');
	}

	function index(){
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$kategori=$this->m_kategori->get_all_kategori();
		$k=$kategori->row_array();
		$p=$user->row_array();
		$namakategori=$k['kategori_nama'];
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$x['data']=$this->m_artikel->get_user_articles($user_id,$user_nama,$namakategori);
		$this->load->view('author/v_tulisan',$x);
	}

	function add_tulisan(){
		$x['kat']=$this->m_kategori->get_kategori_artikel();
		$x['ins']=$this->m_jenis->get_insight();
		$this->load->view('author/v_add_tulisan',$x);
	}

	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_artikel->get_article_by_id($kode);
		$x['kat']=$this->m_kategori->get_kategori_artikel();
		$x['ins']=$this->m_jenis->get_insight();
		$this->load->view('author/v_edit_tulisan',$x);
	}

	function simpan_tulisan(){
			$judul=strip_tags($this->input->post('xjudul'));
			$isi=$this->input->post('xisi');
			$kategori_id=strip_tags($this->input->post('xkategori'));
			$data=$this->m_kategori->get_kategori_byid($kategori_id);
			$q=$data->row_array();
			$kategori=$q['kategori_nama'];
			$id_jenis=strip_tags($this->input->post('xjenis'));
			$jen=$this->m_jenis->get_jenis_by_id($id_jenis);
			$j=$jen->row_array();
			$jenis=$j['nama_jenis'];
			$kode=$this->session->userdata('idadmin');
			$user=$this->m_pengguna->get_pengguna_login($kode);
			$p=$user->row_array();
			$user_id=$p['pengguna_id'];
			$user=$p['pengguna_username'];
			$user_nama=$p['pengguna_nama'];
			$fotopenulis=$p['pengguna_photo'];
			$this->m_artikel->simpan_artikel($judul,$isi,$kategori,$jenis,$user_id,$user,$user_nama,seo_title($judul),$fotopenulis);
			echo $this->session->set_flashdata('msg','success');
			redirect('author/tulisan');
	}

	function update_tulisan(){
				$tulisan_id=$this->input->post('kode');
				$judul=strip_tags($this->input->post('xjudul'));
				$isi=$this->input->post('xisi');
				$kategori_id=strip_tags($this->input->post('xkategori'));
				$data=$this->m_kategori->get_kategori_byid($kategori_id);
				$q=$data->row_array();
				$kategori=$q['kategori_nama'];
				$id_jenis=strip_tags($this->input->post('xjenis'));
				$jen=$this->m_jenis->get_jenis_by_id($id_jenis);
				$j=$jen->row_array();
				$jenis=$j['nama_jenis'];
				$kode=$this->session->userdata('idadmin');
				$user=$this->m_pengguna->get_pengguna_login($kode);
				$p=$user->row_array();
				$user_id=$p['pengguna_id'];
				$user_nama=$p['pengguna_nama'];
				$user=$p['pengguna_username'];
				$this->m_artikel->update_artikel($tulisan_id,$judul,$isi,$kategori,$jenis,$user_id,$user,$user_nama,seo_title($judul));
				echo $this->session->set_flashdata('msg','info');
				redirect('author/tulisan');
	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$this->m_artikel->delete_artikel($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('author/tulisan');
	}

}
