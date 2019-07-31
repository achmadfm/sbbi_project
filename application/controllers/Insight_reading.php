<?php
  class Insight_reading extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('m_tulisan');
      $this->load->model('m_artikel');
      $this->load->model('m_pengunjung');
      $this->load->model('m_web_admin');
      $this->load->model('m_pengguna');
      $this->m_pengunjung->count_visitor();
    }

    public static function format_tanggal($date){
  		$str = explode('-',$date);
  		$bulan = array(
  			'01'=>'Januari',
  			'02'=>'Februari',
  			'03'=>'Maret',
  			'04'=>'April',
  			'05'=>'Mei',
  			'06'=>'Juni',
  			'07'=>'Juli',
  			'08'=>'Agustus',
  			'09'=>'September',
  			'10'=>'Oktober',
  			'11'=>'November',
  			'12'=>'Desember'
  		);
  		return $str['2']." ".$bulan[$str[1]]." ".$str[0];
  	}

    function index(){
      $jum=$this->m_artikel->get_all_articles_by_status_publish();
      $page=$this->uri->segment(3);
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;
      $limit=5;
      $config['base_url'] = base_url() . 'insight_reading/index/';
      $config['total_rows'] = $jum->num_rows();
      $config['per_page'] = $limit;
      $config['uri_segment'] = 3;
  		$config['full_tag_open'] = '<ul class="pagination pagination-lg pull-right">';
  		$config['full_tag_close'] = '</ul>';
  		$config['first_link'] = '&laquo; First';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
  		$config['last_link'] = 'Last &raquo;';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
  		$config['next_link'] = 'Next &rarr;';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['prev_link'] = '&larr; Prev';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';
  		$config['cur_tag_open'] = '<li class="active"><a href="">';
      $config['cur_tag_close'] = '</a></li>';
  		$config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      $this->pagination->initialize($config);
      $x['page'] =$this->pagination->create_links();
  		$x['category']=$this->db->get('tbl_kategori');
  		$x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
	    $x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
  		$x['data']=$this->m_artikel->get_articles_perpage($offset,$limit);
  		$x['tentang']=$this->m_web_admin->get_tentang();
      $this->load->view('depan/v_insight',$x);
    }

    function kategori(){
  		 $kategori=str_replace("-"," ",$this->uri->segment(3));
  		 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
  		 if($query->num_rows() > 0){
  			 $x['data']=$query;
  			 $x['category']=$this->db->get('tbl_kategori');
   			 $x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			 $x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
  			 $x['tentang']=$this->m_web_admin->get_tentang();
  			 $this->load->view('depan/v_berita',$x);
  		 }else{
  			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
  			 redirect('berita');
  		 }
  	}

  	function artikel_detail($slugs){
  		$slug = htmlspecialchars($slugs,ENT_QUOTES);
  		$query = $this->db->get_where('tbl_artikel',array('artikel_slug' => $slug));
  		if($query->num_rows() > 0){
  			$b = $query->row_array();
  			$kode = $b['artikel_id'];
  			$kode2= $b['id_user'];
  			$this->db->query("UPDATE tbl_artikel SET artikel_views=artikel_views+1 WHERE artikel_id='$kode'");
  			$data = $this->m_artikel->get_article_by_code($kode);
  			$data2= $this->m_pengguna->getusername($kode2);
  			$row = $data->row_array();
  			$row2=$data2->row_array();
  			$x['id']=$row['artikel_id'];
  			$x['title']=$row['artikel_judul'];
  			$x['isi'] =$row['artikel_isi'];
  			$x['deskripsi']=cetak_meta($row['artikel_isi'],0,500);
  			$x['tanggal']=$row['tanggal'];
  			$x['author']=$row['nama_lengkap'];
  			$x['kategori']=$row['artikel_kategori'];
  			$x['views']=$row['artikel_views'];
            $x['foto']=$row['foto_penulis'];
  			$x['slug']=$row['artikel_slug'];
  			$x['fb']=$row2['pengguna_facebook'];
  			$x['twit']=$row2['pengguna_twitter'];
  			$x['ins']=$row2['pengguna_instagram'];
  			$x['show_komentar']=$this->m_artikel->show_komentar_by_artikel_id($kode);
  			$x['category']=$this->db->get('tbl_kategori');
  			$x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
  			$x['tentang']=$this->m_web_admin->get_tentang();
  		}else{
  			redirect('insight_reading');
  		}
  		$this->load->view('depan/v_insightdetail',$x);
  	}

    function search(){
          $keyword=str_replace("'", "", htmlspecialchars($this->input->get('textcari',TRUE),ENT_QUOTES));
          $query=$this->m_tulisan->cari_berita($keyword);
  				if($query->num_rows() > 0){
  					$x['data']=$query;
  					$x['category']=$this->db->get('tbl_kategori');
    				$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
  					$x['recent']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
  					$x['tentang']=$this->m_web_admin->get_tentang();
            $this->load->view('depan/v_berita_search',$x);
  	 		 }else{
  				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
  				 redirect('article');
  			 }
      }

  }
