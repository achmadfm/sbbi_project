<?php
 class Web_admin extends CI_Controller{
   function __construct(){
     parent::__construct();
     if($this->session->userdata('masuk') !=TRUE){
             $url=base_url('administrator');
             redirect($url);
         };
     $this->load->model('m_pengguna');
     $this->load->model('M_web_admin');
     $this->load->model('m_status');
   }

   function index(){
     $id2 = 2;
     $id3 = 3;
     $id4 = 4;
     $x['unit'] = $this->M_web_admin->get_unit();
     $x['tentang'] = $this->M_web_admin->get_tentang();
     $x['status'] = $this->m_status->get_all_status();
     $x['speech'] = $this->M_web_admin->get_speech();
     $x['speechsd'] = $this->M_web_admin->get_speech_by_id($id2);
     $x['speechsmp'] = $this->M_web_admin->get_speech_by_id($id3);
     $x['speechsma'] = $this->M_web_admin->get_speech_by_id($id4);
     $x['fasilitas'] = $this->M_web_admin->get_fasilitas();
     $x['program'] = $this->M_web_admin->get_program();
     $x['sejarah'] = $this->M_web_admin->get_sejarah();
     $x['testi'] = $this->M_web_admin->get_testimoni();
     $this->load->view('admin/v_webadmin',$x);
   }

   function up_sejarah(){
     $isi=$this->input->post('isis');
     $this->M_web_admin->update_sejarah($isi);
     echo $this->session->set_flashdata('msg','successs');
     redirect('admin/web_admin');
   }

   function up_tentang(){
     $id=strip_tags($this->input->post('id'));
     $judul = $this->input->post('judul');
     $isi = $this->input->post('isi');
     $this->M_web_admin->update_tentang($id,$judul,$isi);
     echo $this->session->set_flashdata('msg','success');
     redirect('admin/web_admin');
   }

   function update_sambutansatu(){
    $config['upload_path'] = './template/speech/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if(!empty($_FILES['filefoto1']['name'])) {
      if($this->upload->do_upload('filefoto1')) {
        $gbr=$this->upload->data();
        $config['image_library']='gd2';
        $config['source_image']='./template/speech/'.$gbr['file_name'];
        $config['create_thumb']=FALSE;
        $config['maintain_ratio']=FALSE;
        $config['quality']='100%';
        $config['width']=260;
        $config['height']=370;
        $config['new_image']='./template/speech/'.$gbr['file_name'];
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
        $foto=$gbr['file_name'];
        $images=$this->input->post('gambar1');
        $path='./template/speech/'.$images;
        unlink($path);
        $id_speech = $this->input->post('xkode1');
        $nama = $this->input->post('kepsek1');
        $isi = $this->input->post('sambutan1');
        $this->M_web_admin->up_sambutan($id_speech,$nama,$isi,$foto);
        echo $this->session->set_flashdata('msg','info');
        redirect('admin/web_admin');
      }else{
        echo $this->session->set_flashdata('msg','error');
        redirect('admin/web_admin');
      }
    }else{
      $id_speech = $this->input->post('xkode1');
      $nama = $this->input->post('kepsek1');
      $isi = $this->input->post('sambutan1');
      $this->M_web_admin->up_sambutan_no_gambar($id_speech,$nama,$isi);
      echo $this->session->set_flashdata('msg','info2');
      redirect('admin/web_admin');
    }
  }

   function update_sambutandua(){
     $config['upload_path'] = './template/speech/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if(!empty($_FILES['filefoto2']['name'])) {
       if($this->upload->do_upload('filefoto2')) {
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/speech/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=260;
         $config['height']=370;
         $config['new_image']='./template/speech/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto=$gbr['file_name'];
         $images=$this->input->post('gambar2');
         $path='./template/speech/'.$images;
         unlink($path);
         $id_speech = $this->input->post('xkode2');
         $nama = $this->input->post('kepsek2');
         $isi = $this->input->post('sambutan2');
         $this->M_web_admin->up_sambutan($id_speech,$nama,$isi,$foto);
         echo $this->session->set_flashdata('msg','info');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error');
         redirect('admin/web_admin');
       }
     }else{
       $id_speech = $this->input->post('xkode2');
       $nama = $this->input->post('kepsek2');
       $isi = $this->input->post('sambutan2');
       $this->M_web_admin->up_sambutan_no_gambar($id_speech,$nama,$isi);
       echo $this->session->set_flashdata('msg','info2');
       redirect('admin/web_admin');
     }
   }

   function update_sambutantiga(){
    $config['upload_path'] = './template/speech/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if(!empty($_FILES['filefoto3']['name'])) {
      if($this->upload->do_upload('filefoto3')) {
        $gbr=$this->upload->data();
        $config['image_library']='gd2';
        $config['source_image']='./template/speech/'.$gbr['file_name'];
        $config['create_thumb']=FALSE;
        $config['maintain_ratio']=FALSE;
        $config['quality']='100%';
        $config['width']=260;
        $config['height']=370;
        $config['new_image']='./template/speech/'.$gbr['file_name'];
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
        $foto=$gbr['file_name'];
        $images=$this->input->post('gambar3');
        $path='./template/speech/'.$images;
        unlink($path);
        $id_speech = $this->input->post('xkode3');
        $nama = $this->input->post('kepsek3');
        $isi = $this->input->post('sambutan3');
        $this->M_web_admin->up_sambutan($id_speech,$nama,$isi,$foto);
        echo $this->session->set_flashdata('msg','info');
        redirect('admin/web_admin');
      }else{
        echo $this->session->set_flashdata('msg','error');
        redirect('admin/web_admin');
      }
    }else{
      $id_speech = $this->input->post('xkode3');
      $nama = $this->input->post('kepsek3');
      $isi = $this->input->post('sambutan3');
      $this->M_web_admin->up_sambutan_no_gambar($id_speech,$nama,$isi);
      echo $this->session->set_flashdata('msg','info2');
      redirect('admin/web_admin');
    }
  }

  function update_sambutanempat(){
    $config['upload_path'] = './template/speech/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if(!empty($_FILES['filefoto4']['name'])) {
      if($this->upload->do_upload('filefoto4')) {
        $gbr=$this->upload->data();
        $config['image_library']='gd2';
        $config['source_image']='./template/speech/'.$gbr['file_name'];
        $config['create_thumb']=FALSE;
        $config['maintain_ratio']=FALSE;
        $config['quality']='100%';
        $config['width']=260;
        $config['height']=370;
        $config['new_image']='./template/speech/'.$gbr['file_name'];
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
        $foto=$gbr['file_name'];
        $images=$this->input->post('gambar4');
        $path='./template/speech/'.$images;
        unlink($path);
        $id_speech = $this->input->post('xkode4');
        $nama = $this->input->post('kepsek4');
        $isi = $this->input->post('sambutan4');
        $this->M_web_admin->up_sambutan($id_speech,$nama,$isi,$foto);
        echo $this->session->set_flashdata('msg','info');
        redirect('admin/web_admin');
      }else{
        echo $this->session->set_flashdata('msg','error');
        redirect('admin/web_admin');
      }
    }else{
      $id_speech = $this->input->post('xkode4');
      $nama = $this->input->post('kepsek4');
      $isi = $this->input->post('sambutan4');
      $this->M_web_admin->up_sambutan_no_gambar($id_speech,$nama,$isi);
      echo $this->session->set_flashdata('msg','info2');
      redirect('admin/web_admin');
    }
  }


   function simpan_fasilitas(){
     $config['upload_path'] = './template/fasilitas/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if (!empty($_FILES['fasilitasfoto']['name'])) {
       if ($this->upload->do_upload('fasilitasfoto')) {
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/fasilitas/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=600;
         $config['height']=300;
         $config['new_image']='./template/fasilitas/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $nama = strip_tags($this->input->post('nama_fasilitas'));
         $deskripsi = $this->input->post('desk');
         $idunit = $this->input->post('xunit');
         $data = $this->M_web_admin->get_unit_by_id($idunit);
         $row = $data->row_array();
         $idu = $row['id_unit'];
         $namaunit = $row['singkatan_unit'];
         $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
         $trim     = trim($string);
         $slug     = strtolower(str_replace(" ", "-", $trim));
         $kode = $this->session->userdata('idadmin');
         $author = $this->m_pengguna->get_pengguna_login($kode);
         $user = $author->row_array();
         $id = $user['pengguna_id'];
         $username = $user['pengguna_nama'];
         $this->M_web_admin->tambah_fasilitas($nama,$deskripsi,$idu,$namaunit,$id,$username,$foto,$slug);
         echo $this->session->set_flashdata('msg','success2');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error');
         redirect('admin/web_admin');
       }
     }else{
       echo $this->session->set_flashdata('msg','error2');
       redirect('admin/web_admin');
     }
   }

   function up_fasilitas(){
     $config['upload_path'] = './template/fasilitas/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if (!empty($_FILES['fasilitasfoto']['name'])) {
       if ($this->upload->do_upload('fasilitasfoto')) {
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/fasilitas/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=600;
         $config['height']=300;
         $config['new_image']='./template/fasilitas/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $idf = $this->input->post('idf');
         $nama = strip_tags($this->input->post('nama_fasilitas'));
         $deskripsi = $this->input->post('desk');
         $idunit = $this->input->post('xunit');
         $data = $this->M_web_admin->get_unit_by_id($idunit);
         $row = $data->row_array();
         $idu = $row['id_unit'];
         $namaunit = $row['singkatan_unit'];
         $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
         $trim     = trim($string);
         $slug     = strtolower(str_replace(" ", "-", $trim));
         $kode = $this->session->userdata('idadmin');
         $author = $this->m_pengguna->get_pengguna_login($kode);
         $user = $author->row_array();
         $id = $user['pengguna_id'];
         $username = $user['pengguna_nama'];
         $this->M_web_admin->update_fasilitas($idf,$nama,$deskripsi,$idu,$namaunit,$id,$username,$foto);
         echo $this->session->set_flashdata('msg','success2');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error');
         redirect('admin/web_admin');
       }
     }else{
       $idf = $this->input->post('idf');
       $nama = strip_tags($this->input->post('nama_fasilitas'));
       $deskripsi = $this->input->post('desk');
       $idunit = $this->input->post('xunit');
       $data = $this->M_web_admin->get_unit_by_id($idunit);
       $row = $data->row_array();
       $idu = $row['id_unit'];
       $namaunit = $row['singkatan_unit'];
       $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
       $trim     = trim($string);
       $slug     = strtolower(str_replace(" ", "-", $trim));
       $kode = $this->session->userdata('idadmin');
       $author = $this->m_pengguna->get_pengguna_login($kode);
       $user = $author->row_array();
       $id = $user['pengguna_id'];
       $username = $user['pengguna_nama'];
       $this->M_web_admin->update_fasilitas_no_gambar($idf,$nama,$deskripsi,$idu,$namaunit,$id,$username);
       echo $this->session->set_flashdata('msg','info3');
       redirect('admin/web_admin');
     }
   }

   function hapus_fasilitas(){
     $idf = $this->input->post('idf');
     $gambar = $this->input->post('foto');
     $path = './template/fasilitas/'.$gambar;
     unlink($path);
     $this->M_web_admin->del_fasilitas($idf);
 		 echo $this->session->set_flashdata('msg','success-hapus');
 		 redirect('admin/web_admin');
   }

   function simpan_program(){
     $config['upload_path'] = './template/program/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if (!empty($_FILES['programfoto']['name'])) {
       if ($this->upload->do_upload('programfoto')) {
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/program/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=600;
         $config['height']=300;
         $config['new_image']='./template/program/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $nama = $this->input->post('nama_program');
         $deskripsi = $this->input->post('desk1');
         $idunit = $this->input->post('xunit2');
         $data = $this->M_web_admin->get_unit_by_id($idunit);
         $row = $data->row_array();
         $idu = $row['id_unit'];
         $namaunit = $row['singkatan_unit'];
         $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
         $trim     = trim($string);
         $slug     = strtolower(str_replace(" ", "-", $trim));
         $kode = $this->session->userdata('idadmin');
         $author = $this->m_pengguna->get_pengguna_login($kode);
         $user = $author->row_array();
         $id = $user['pengguna_id'];
         $username = $user['pengguna_nama'];
         $this->M_web_admin->tambah_program($nama,$deskripsi,$idu,$namaunit,$id,$username,$foto,$slug);
         echo $this->session->set_flashdata('msg','success3');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error');
         redirect('admin/web_admin');
       }
     }else{
       echo $this->session->set_flashdata('msg','error2');
       redirect('admin/web_admin');
     }
   }

   function up_program(){
     $config['upload_path'] = './template/program/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if (!empty($_FILES['programfoto']['name'])) {
       if ($this->upload->do_upload('programfoto')) {
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/program/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=600;
         $config['height']=300;
         $config['new_image']='./template/program/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $idp = $this->input->post('idp');
         $nama = $this->input->post('nama_program');
         $deskripsi = $this->input->post('desk1');
         $idunit = $this->input->post('xunit2');
         $data = $this->M_web_admin->get_unit_by_id($idunit);
         $row = $data->row_array();
         $idu = $row['id_unit'];
         $namaunit = $row['singkatan_unit'];
         $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
         $trim     = trim($string);
         $slug     = strtolower(str_replace(" ", "-", $trim));
         $kode = $this->session->userdata('idadmin');
         $author = $this->m_pengguna->get_pengguna_login($kode);
         $user = $author->row_array();
         $id = $user['pengguna_id'];
         $username = $user['pengguna_nama'];
         $this->M_web_admin->update_program($idp,$nama,$deskripsi,$idu,$namaunit,$id,$username,$foto,$slug);
         echo $this->session->set_flashdata('msg','info5');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error');
         redirect('admin/web_admin');
       }
     }else{
       $idp = $this->input->post('idp');
       $nama = $this->input->post('nama_program');
       $deskripsi = $this->input->post('desk1');
       $idunit = $this->input->post('xunit2');
       $data = $this->M_web_admin->get_unit_by_id($idunit);
       $row = $data->row_array();
       $idu = $row['id_unit'];
       $namaunit = $row['singkatan_unit'];
       $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
       $trim     = trim($string);
       $slug     = strtolower(str_replace(" ", "-", $trim));
       $kode = $this->session->userdata('idadmin');
       $author = $this->m_pengguna->get_pengguna_login($kode);
       $user = $author->row_array();
       $id = $user['pengguna_id'];
       $username = $user['pengguna_nama'];
       $this->M_web_admin->update_program_no_gambar($idp,$nama,$deskripsi,$idu,$namaunit,$id,$username,$slug);
       echo $this->session->set_flashdata('msg','info4');
       redirect('admin/web_admin');
     }
   }

   function hapus_program(){
     $idp = $this->input->post('idp');
     $gambar = $this->input->post('fotop');
     $path = './template/program/'.$gambar;
     unlink($path);
     $this->M_web_admin->del_program($idp);
 		 echo $this->session->set_flashdata('msg','success-hapus2');
 		 redirect('admin/web_admin');
   }

   function tambah_testimoni(){
     $config['upload_path'] = './template/testimoni/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if(!empty($_FILES['testifoto']['name'])){
       if($this->upload->do_upload('testifoto')){
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/testimoni/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=234;
         $config['height']=225;
         $config['new_image']='./template/testimoni/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $nama = $this->input->post('nama_testi');
         $isi = $this->input->post('isi_testi');
         $email = $this->input->post('email_testi');
         $status = $this->input->post('status_testi');
         $data = $this->m_status->get_status_byid($status);
         $stts = $data->row_array();
         $ids = $stts['id_status'];
         $nstts = $stts['nama_status'];
         $id_tipe = $stts['id_tipe'];
         $ntipe = $stts['nama_tipe'];
         $this->M_web_admin->tambah_testimoni($nama,$isi,$email,$ids,$nstts,$id_tipe,$ntipe,$foto);
         echo $this->session->set_flashdata('msg','success4');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error22');
         redirect('admin/web_admin');
       }
     }
   }

   function up_testimoni(){
     $config['upload_path'] = './template/testimoni/'; //path folder
     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
     $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
     if(!empty($_FILES['testifoto']['name'])){
       if($this->upload->do_upload('testifoto')){
         $gbr=$this->upload->data();
         $config['image_library']='gd2';
         $config['source_image']='./template/testimoni/'.$gbr['file_name'];
         $config['create_thumb']=FALSE;
         $config['maintain_ratio']=FALSE;
         $config['quality']='100%';
         $config['width']=234;
         $config['height']=225;
         $config['new_image']='./template/testimoni/'.$gbr['file_name'];
         $this->load->library('image_lib',$config);
         $this->image_lib->resize();
         $foto = $gbr['file_name'];
         $idt = $this->input->post('idt');
         $nama = $this->input->post('nama_testi');
         $isi = $this->input->post('isi_testi');
         $email = $this->input->post('email_testi');
         $status = $this->input->post('status_testi');
         $data = $this->m_status->get_status_byid($status);
         $stts = $data->row_array();
         $ids = $stts['id_status'];
         $nstts = $stts['nama_status'];
         $id_tipe = $stts['id_tipe'];
         $ntipe = $stts['nama_tipe'];
         $this->M_web_admin->update_testimoni($idt,$nama,$isi,$email,$ids,$nstts,$id_tipe,$ntipe,$foto);
         echo $this->session->set_flashdata('msg','info6');
         redirect('admin/web_admin');
       }else{
         echo $this->session->set_flashdata('msg','error3');
         redirect('admin/web_admin');
       }
     }else{
       $idt = $this->input->post('idt');
       $nama = $this->input->post('nama_testi');
       $isi = $this->input->post('isi_testi');
       $email = $this->input->post('email_testi');
       $status = strip_tags($this->input->post('status_testi'));
       $data = $this->m_status->get_status_byid($status);
       $stts = $data->row_array();
       $ids = $stts['id_status'];
       $nstts = $stts['nama_status'];
       $id_tipe = $stts['id_tipe'];
       $ntipe = $stts['nama_tipe'];
       $this->M_web_admin->update_testimoni_no_gambar($idt,$nama,$isi,$email,$ids,$nstts,$id_tipe,$ntipe);
       echo $this->session->set_flashdata('msg','info7');
       redirect('admin/web_admin');
     }
   }

   function del_testimoni(){
     $idt = $this->input->post('idt');
     $gambar = $this->input->post('testifoto');
     $path = './template/testimoni/'.$gambar;
     unlink($path);
     $this->M_web_admin->hapus_testimoni($idt);
 		 echo $this->session->set_flashdata('msg','success-hapus3');
 		 redirect('admin/web_admin');
   }
 }
