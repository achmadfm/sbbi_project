<?php
class Berita_boarding extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_web_admin');
		$this->m_pengunjung->count_visitor();
		$this->m_pengunjung->get_hits()->row_array();
		$this->m_pengunjung->visitor_online()->num_rows();
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
		$jum=$this->m_tulisan->berita_boarding();
    $page=$this->uri->segment(3);
    if(!$page):
        $offset = 0;
    else:
        $offset = $page;
    endif;
    $limit=5;
    $config['base_url'] = base_url() . 'berita/index/';
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
		$x['data']=$this->m_tulisan->berita_boarding_perpage($offset,$limit);
		$x['tentang']=$this->m_web_admin->get_tentang();
		$this->load->view('depan/v_berita_boarding',$x);
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' AND nama_jenis='Boarding' ORDER BY tulisan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori');
 			 $x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			 $x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
			 $x['tentang']=$this->m_web_admin->get_tentang();
			 $this->load->view('depan/v_berita_boarding',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada Berita untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('berita');
		 }
	}

	// function berita_detail(){
	// 	$kode=$this->uri->segment(3);
  //   $this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
	// 	$x['data']=$this->m_tulisan->get_berita_by_kode_boarding($kode);
	// 	$this->load->view('depan/v_beritadetail',$x);
	// }

	function berita_detail($slugs){
		$slug = htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan',array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b = $query->row_array();
			$kode = $b['tulisan_id'];
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data = $this->m_tulisan->get_berita_by_kode($kode);
			$row = $data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['views']=$row['tulisan_views'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			 $x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");
			$x['tentang']=$this->m_web_admin->get_tentang();
			$this->load->view('depan/v_beritadetail',$x);
		}else{
			redirect('berita');
		}
	}


  // function search(){
  //     $keyword=str_replace("'", "", $this->input->post('textcari'));
  //     $x['data']=$this->m_tulisan->cari_berita($keyword);
  //     $this->load->view('depan/v_berita_search',$x);
  // }
		function search(){
				$keyword=str_replace("'", "", htmlspecialchars($this->input->get('textcari',TRUE),ENT_QUOTES));
				$query=$this->m_tulisan->cari_berita($keyword);
				if($query->num_rows() > 0){
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori');
					$x['populer']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			        $x['recent']=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC LIMIT 5");;
					$x['tentang']=$this->m_web_admin->get_tentang();
					$this->load->view('depan/v_berita_search',$x);
			 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('artikel');
			 }
		}


				function komentar(){
						$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
						$data=$this->m_tulisan->get_berita_by_kode($kode);
						$row=$data->row_array();
						$slug=$row['tulisan_slug'];
						$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
						$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
						$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
						if(empty($nama) || empty($email)){
							$this->session->set_flashdata('msg','error');
							redirect('news/'.$slug);
						}else{
							$data = array(
					        'komentar_nama' 			=> $nama,
					        'komentar_email' 			=> $email,
					        'komentar_isi' 				=> $komentar,
									'komentar_status' 		=> 0,
									'komentar_tulisan_id' => $kode
							);

							$this->db->insert('tbl_komentar', $data);
							$this->session->set_flashdata('msg','success');
							redirect('news/'.$slug);
						}
				}
}
