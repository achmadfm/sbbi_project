<?php
class Files extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_files');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		$x['data']=$this->m_files->get_all_files();
		$this->load->view('admin/v_files',$x);
	}

	function download(){
		$id=$this->uri->segment(4);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./template/files/'.$file;
		$data =  file_get_contents($path);
		$name = $file;

		force_download($name, $data);
		redirect('admin/files');
	}

	function simpan_file(){
		$config['upload_path'] = './template/files/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$file=$gbr['file_name'];
				$judul=strip_tags($this->input->post('xjudul'));
				$deskripsi=$this->input->post('xdeskripsi');
				$this->m_files->simpan_file($judul,$deskripsi,$file);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/files');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/files');
			}

		}else{
			redirect('admin/files');
		}
	}

	function update_file(){

		$query = $this->db->query("SELECT * FROM tbl_files");

		$config['upload_path'] = './template/files/'; //path folder
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto')){
				$gbr = $this->upload->data();
				$file=$gbr['file_name'];
				$kode=$this->input->post('kode');
				$judul=strip_tags($this->input->post('xjudul'));
				$deskripsi=$this->input->post('xdeskripsi');
				$data=$this->input->post('file');
				$path='./template/files/'.$data;
				unlink($path);
				$this->m_files->update_file($kode,$judul,$deskripsi,$file);
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/files');

			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/files');
			}

		}else{
				$kode=$this->input->post('kode');
				$judul=strip_tags($this->input->post('xjudul'));
				$deskripsi=$this->input->post('xdeskripsi');
				$this->m_files->update_file_tanpa_file($kode,$judul,$deskripsi);
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/files');
		}
	}

	function hapus_file(){
		$kode=$this->input->post('kode');
		$data=$this->input->post('file');
		$path='./template/files/'.$data;
		unlink($path);
		$this->m_files->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/files');
	}

}
