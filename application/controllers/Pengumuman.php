<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->model('m_pengunjung');
		$this->load->model('m_agenda');
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
    $x['data'] =$this->m_pengumuman->pengumuman();
		$x['agenda']=$this->m_agenda->agenda();
		//$x['brt']=$this->berita->beritaasc();
		$this->load->view('depan/v_pengumuman',$x);
	}
	function berita_detail(){
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_tulisan->get_berita_by_kode($kode);
		$this->load->view('depan/v_beritadetail',$x);
	}
}
