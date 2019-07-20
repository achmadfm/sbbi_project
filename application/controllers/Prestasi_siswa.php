<?php
class Prestasi_siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_prestasi');
		$this->load->model('m_katprestasi');
		$this->load->model('m_pengunjung');
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
		$data['prestasi'] = $this->m_prestasi->get_all_prestasi();
		$data['kategori'] = $this->m_katprestasi->get_all_kat_prestasi();
		$this->load->view('depan/v_achievement',$data);
	}

	function achieve_details($slugs){
		$slug = htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_prestasi',array('slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$id=$b['id_prestasi'];
			$data = $this->m_prestasi->get_prestasi_byid($id);
			$row = $data->row_array();
			$x['id'] = $row['id_prestasi'];
			$x['judul'] = $row['nama_prestasi'];
			$x['sampul'] = $row['sampul'];
			$x['desk'] = $row['deskripsi'];
			$x['fsiswa'] = $row['foto_siswa'];
			$x['tanggal'] = $row['tanggal'];
			$x['kategori'] = $row['nama_kategori'];
			$x['skelas'] = $row['kelas'];
			$x['nsiswa'] = $row['nama_siswa'];
		}else{
			redirect('prestasi_siswa');
		}
		$this->load->view('depan/v_achiv_detail',$x);
	}
}
