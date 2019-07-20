<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->load->model('m_web_admin');
		$this->load->model('m_slider');
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
		$user_ip=$_SERVER['REMOTE_ADDR'];
		if ($this->agent->is_browser()){
		    $agent = $this->agent->browser();
		}elseif ($this->agent->is_robot()){
		    $agent = $this->agent->robot();
		}elseif ($this->agent->is_mobile()){
		    $agent = $this->agent->mobile();
		}else{
			$agent='Other';
		}

		$cek_ip=$this->m_pengunjung->cek_ip($user_ip);
		$cek=$cek_ip->num_rows();
		if($cek > 0){
			$x['galeri']=$this->m_galeri->get_galeri_home();
			$x['brt']=$this->m_tulisan->get_slider();
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['download']=$this->m_files->get_files_home();
			$x['tentang']=$this->m_web_admin->get_tentang();
			$x['pengunjung']=$this->m_pengunjung->get_all_visitors()->num_rows();
			$x['lastyear']=$this->m_pengunjung->get_sum_visitor_last_year()->row_array();
			$x['hits']=$this->m_pengunjung->get_hits()->row_array();
			$x['visitoronline']=$this->m_pengunjung->visitor_online()->num_rows();
			$x['slider'] = $this->m_slider->get_all_slider();
			$this->load->view('depan/v_home',$x);
		}else{
			$this->m_pengunjung->simpan_user_agent($user_ip,$agent);
			$x['galeri']=$this->m_galeri->get_galeri_home();
			$x['brt']=$this->m_tulisan->get_slider();
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['download']=$this->m_files->get_files_home();
			$x['tentang']=$this->m_web_admin->get_tentang();
			$x['pengunjung']=$this->m_pengunjung->get_all_visitors()->num_rows();
			$x['lastyear']=$this->m_pengunjung->get_sum_visitor_last_year()->row_array();
			$x['hits']=$this->m_pengunjung->get_hits()->row_array();
			$x['visitoronline']=$this->m_pengunjung->visitor_online()->num_rows();
			$x['slider'] = $this->m_slider->get_all_slider();
			$this->load->view('depan/v_home',$x);
		}
	}
}
