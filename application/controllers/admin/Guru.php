<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->model('m_pengguna');
		$this->load->model('m_posisi');
		$this->load->library('upload');
	}


	function index(){
		$x['opsi']=$this->m_guru->get_opsi_ajaran();
		$x['data']=$this->m_guru->get_all_guru();
		$x['pos']=$this->m_posisi->get_all_posisi();
		$this->load->view('admin/v_guru',$x);
	}

	function simpan_guru(){
				$config['upload_path'] = './template/teachers/'; //path folder
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
                      $config['source_image']='./template/teachers/'.$gbr['file_name'];
                      $config['create_thumb']= FALSE;
                      $config['maintain_ratio']= FALSE;
                      $config['quality']= '80%';
                      $config['width']= 250;
                      $config['height']= 400;
                      $config['new_image']= './template/teachers/'.$gbr['file_name'];
                      $this->load->library('image_lib', $config);
                      $this->image_lib->resize();

                      $photo=$gbr['file_name'];
						$nip=strip_tags($this->input->post('xnip'));
						$nama=strip_tags($this->input->post('xnama'));
						$jenkel=strip_tags($this->input->post('xjenkel'));
						$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
						$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
						$tentang=strip_tags($this->input->post('xtentang'));
						$mapel=strip_tags($this->input->post('xmapel'));
						$posisi=strip_tags($this->input->post('xposisi'));
						if($this->input->post('list_ajaran') != ''){
							$opsi=$this->input->post('list_ajaran');
							$list = implode(", ", $opsi);
						}else{
							$list = '';
						}
						$ps=$this->m_posisi->get_posisi_by_id($posisi);
						$p=$ps->row_array();
						$namapos=$p['nama_posisi'];
						$status=strip_tags($this->input->post('xajar'));
						$this->m_guru->simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$posisi,$namapos,$list,$status,$photo);
						echo $this->session->set_flashdata('msg','success');
						redirect('admin/guru');
					}else{
						echo $this->session->set_flashdata('msg','warning');
						redirect('admin/guru');
					}

	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$tentang=strip_tags($this->input->post('xtentang'));
					$mapel=strip_tags($this->input->post('xmapel'));
					$posisi=strip_tags($this->input->post('xposisi'));
					if($this->input->post('list_ajaran') != ''){
						$opsi=$this->input->post('list_ajaran');
						$list = implode(", ", $opsi);
					}else{
						$list = '';
					}
					$ps=$this->m_posisi->get_posisi_by_id($posisi);
					$p=$ps->row_array();
					$namapos=$p['nama_posisi'];
					$status=strip_tags($this->input->post('xajar'));
					$this->m_guru->simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$posisi,$namapos,$list,$status);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/guru');
				}

	}

	function update_guru(){

	            $config['upload_path'] = './template/teachers/'; //path folder
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
                    $config['source_image']='./template/teachers/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '80%';
                    $config['width']= 250;
                    $config['height']= 400;
                    $config['new_image']= './template/teachers/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $gambar=$this->input->post('gambar');
					$path='./template/teachers/'.$gambar;
					unlink($path);

		            $photo=$gbr['file_name'];
		            $kode=$this->input->post('kode');
					$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$tentang=strip_tags($this->input->post('xtentang'));
					$mapel=strip_tags($this->input->post('xmapel'));
					$posisi=strip_tags($this->input->post('xposisi'));
					if($this->input->post('list_ajaran') != ''){
						$opsi=$this->input->post('list_ajaran');
						$list = implode(", ", $opsi);
					}else{
						$list = '';
					}
					$ps=$this->m_posisi->get_posisi_by_id($posisi);
					$p=$ps->row_array();
					$namapos=$p['nama_posisi'];
					$status=strip_tags($this->input->post('xajar'));
					$this->m_guru->update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$posisi,$namapos,$list,$status,$photo);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/guru');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	            }else{
					$kode=$this->input->post('kode');
					$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$tentang=strip_tags($this->input->post('xtentang'));
					$mapel=strip_tags($this->input->post('xmapel'));
					$posisi=strip_tags($this->input->post('xposisi'));
					if($this->input->post('list_ajaran') != ''){
						$opsi=$this->input->post('list_ajaran');
						$list = implode(", ", $opsi);
					}else{
						$list = '';
					}
					$ps=$this->m_posisi->get_posisi_by_id($posisi);
					$p=$ps->row_array();
					$namapos=$p['nama_posisi'];
					$status=strip_tags($this->input->post('xajar'));
					$this->m_guru->update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$tentang,$mapel,$posisi,$namapos,$list,$status);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/guru');
	            }

	}

	function hapus_guru(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./template/teachers/'.$gambar;
		unlink($path);
		$this->m_guru->hapus_guru($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/guru');
	}

}
