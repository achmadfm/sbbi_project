<?php
  class Profile extends CI_Controller{
    function __construct(){
  		parent::__construct();
  		if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
      $this->load->model('m_pengguna');
  		$this->load->library('upload');
  	}

    function index(){
      $kode=$this->session->userdata('idadmin');
  		$x['user']=$this->m_pengguna->get_pengguna_login($kode);
      $this->load->view('author/v_profile',$x);
    }

    function update_profile(){
      $config['upload_path'] = './template/users/'; //path folder
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
            $config['source_image']='./template/users/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '80%';
            $config['width']= 300;
            $config['height']= 300;
            $config['new_image']= './template/users/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $gambar=$gbr['file_name'];
            $kode=$this->input->post('kode');
            $nama=$this->input->post('xnama');
            $motto=$this->input->post('xmotto');
    				$username=$this->input->post('xusername');
    				$password=$this->input->post('xpassword');
        		$konfirm_password=$this->input->post('xpassword2');
        		$email=$this->input->post('xemail');
            $fb=$this->input->post('xfb');
            $twit=$this->input->post('xtwitter');
            $ig=$this->input->post('xig');
        		$nohp=$this->input->post('xkontak');
            $tentang=$this->input->post('xtentang');
          	if (empty($password) && empty($konfirm_password)) {
            	$this->m_pengguna->update_profile_tanpa_pass($kode,$nama,$motto,$username,$tentang,$email,$fb,$twit,$ig,$nohp,$gambar);
        			echo $this->session->set_flashdata('msg','success');
   						redirect('author/profile');
							}elseif ($password <> $konfirm_password) {
								echo $this->session->set_flashdata('msg','error');
   						  redirect('author/profile');
              }else{
   						$this->m_pengguna->update_profile_pengguna($kode,$nama,$motto,$username,$password,$tentang,$email,$fb,$twit,$ig,$nohp,$gambar);
        			echo $this->session->set_flashdata('msg','success2');
   						redirect('author/profile');
         			}

          }else{
              echo $this->session->set_flashdata('msg','warning');
              redirect('author/profile');
          }

      }else{
        $kode=$this->input->post('kode');
        $nama=$this->input->post('xnama');
        $motto=$this->input->post('xmotto');
        $username=$this->input->post('xusername');
        $email=$this->input->post('xemail');
        $fb=$this->input->post('xfb');
        $twit=$this->input->post('xtwitter');
        $ig=$this->input->post('xig');
        $nohp=$this->input->post('xkontak');
        $tentang=$this->input->post('xtentang');
      	if (empty($password) && empty($konfirm_password)) {
              $this->m_pengguna->update_profile_tanpa_pass_dan_gambar($kode,$nama,$motto,$username,$tentang,$email,$fb,$twit,$ig,$nohp);
              echo $this->session->set_flashdata('msg','success3');
         		redirect('author/profile');
  				}elseif ($password <> $konfirm_password) {
  						echo $this->session->set_flashdata('msg','error');
         		redirect('author/profile');
  				}else{
         		$this->m_pengguna->update_profile_tanpa_gambar($kode,$nama,$motto,$username,$password,$tentang,$email,$fb,$twit,$ig,$nohp);
            echo $this->session->set_flashdata('msg','success');
         		redirect('author/profile');
         	}
      }
    }
  }
