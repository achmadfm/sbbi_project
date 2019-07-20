<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->model('m_jenis');
		$this->load->library('upload');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$p=$user->row_array();
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$x['data']=$this->m_tulisan->get_all_tulisan_by_user($user_id,$user_nama);
		$this->load->view('admin/v_tulisan',$x);
	}
	function add_tulisan(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$x['jen']=$this->m_jenis->get_all_jenis();
		$this->load->view('admin/v_add_tulisan',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_tulisan->get_tulisan_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$x['jen']=$this->m_jenis->get_all_jenis();
		$this->load->view('admin/v_edit_tulisan',$x);
	}

	function simpan_tulisan(){
				$config['upload_path'] = './template/cover/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./template/cover/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '100%';
                    $config['width']= 750;
                    $config['height']= 400;
                    $config['new_image']= './template/cover/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $gambar=$gbr['file_name'];
					$judul=strip_tags($this->input->post('xjudul'));
					$isi=$this->input->post('xisi');
					$imgslider=$this->input->post('ximgslider');
					$kategori_id=strip_tags($this->input->post('xkategori'));
					$data=$this->m_kategori->get_kategori_byid($kategori_id);
					$q=$data->row_array();
					$kategori_nama=$q['kategori_nama'];
					$id_jenis=strip_tags($this->input->post('xjenis'));
					$jen=$this->m_jenis->get_jenis_by_id($id_jenis);
					$j=$jen->row_array();
					$nama_jenis=$j['nama_jenis'];
					$kode=$this->session->userdata('idadmin');
					$user=$this->m_pengguna->get_pengguna_login($kode);
					$p=$user->row_array();
					$user_id=$p['pengguna_id'];
					$user_nama=$p['pengguna_nama'];
					$this->m_tulisan->simpan_tulisan($judul,$isi,$kategori_id,$kategori_nama,$id_jenis,$nama_jenis,$user_id,$user_nama,$gambar,$imgslider,seo_title($judul));
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/tulisan');
				}else{
                    echo $this->session->set_flashdata('msg','warning');
                    redirect('admin/tulisan');
	            }
            }else{
				redirect('admin/tulisan');
			}
	}

	function update_tulisan(){
      $config['upload_path'] = './template/cover/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

      $this->upload->initialize($config);
      if(!empty($_FILES['filefoto']['name'])){
          if ($this->upload->do_upload('filefoto')){
                  $gbr = $this->upload->data();
                  //Compress Image
                  $config['image_library']='gd2';
                  $config['source_image']='./template/cover/'.$gbr['file_name'];
                  $config['create_thumb']= FALSE;
                  $config['maintain_ratio']= FALSE;
									$config['quality']= '100%';
                  $config['width']= 750;
                    $config['height']= 400;
                  $config['new_image']= './template/cover/'.$gbr['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar=$gbr['file_name'];
                  $tulisan_id=$this->input->post('kode');
                  $judul=strip_tags($this->input->post('xjudul'));
    				$isi=$this->input->post('xisi');
    				$imgslider=$this->input->post('ximgslider');
    				$kategori_id=strip_tags($this->input->post('xkategori'));
    				$data=$this->m_kategori->get_kategori_byid($kategori_id);
    				$q=$data->row_array();
    				$kategori_nama=$q['kategori_nama'];
    				$id_jenis=strip_tags($this->input->post('xjenis'));
    				$jen=$this->m_jenis->get_jenis_by_id($id_jenis);
    				$j=$jen->row_array();
    				$nama=$j['nama_jenis'];
    				$kode=$this->session->userdata('idadmin');
    				$user=$this->m_pengguna->get_pengguna_login($kode);
    				$p=$user->row_array();
    				$user_id=$p['pengguna_id'];
    				$user_nama=$p['pengguna_nama'];
    				$this->m_tulisan->update_tulisan($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$id_jenis,$nama,$user_id,$user_nama,$gambar,$imgslider,seo_title($judul));
    				echo $this->session->set_flashdata('msg','info');
    				redirect('admin/tulisan');

          }else{
              echo $this->session->set_flashdata('msg','warning');
              redirect('admin/pengguna');
          }

      }else{
				$tulisan_id=$this->input->post('kode');
				$judul=strip_tags($this->input->post('xjudul'));
				$isi=$this->input->post('xisi');
				$imgslider=$this->input->post('ximgslider');
				$kategori_id=strip_tags($this->input->post('xkategori'));
				$data=$this->m_kategori->get_kategori_byid($kategori_id);
				$q=$data->row_array();
				$kategori_nama=$q['kategori_nama'];
				$id_jenis=strip_tags($this->input->post('xjenis'));
				$jen=$this->m_jenis->get_jenis_by_id($id_jenis);
				$j=$jen->row_array();
				$nama=$j['nama_jenis'];
				$kode=$this->session->userdata('idadmin');
				$user=$this->m_pengguna->get_pengguna_login($kode);
				$p=$user->row_array();
				$user_id=$p['pengguna_id'];
				$user_nama=$p['pengguna_nama'];
				$this->m_tulisan->update_tulisan_tanpa_img($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$id_jenis,$nama,$user_id,$user_nama,$imgslider,seo_title($judul));
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/tulisan');
      }
	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./template/cover/'.$gambar;
		unlink($path);
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tulisan');
	}

}
