<?php
  class Prestasi extends CI_Controller{
    function __construct(){
      parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
          $this->load->model('m_kelas');
          $this->load->model('m_siswa');
          $this->load->model('m_pengguna');
          $this->load->model('m_prestasi');
          $this->load->model('m_katprestasi');
          $this->load->library('upload');
    }

    function index(){
      $x['prestasi'] = $this->m_prestasi->get_all_prestasi();
      $x['kate']=$this->m_katprestasi->get_all_kat_prestasi();
      $x['kls']=$this->m_kelas->get_all_kelas();
      $x['data']=$this->m_siswa->get_all_siswa();
      $this->load->view('admin/v_prestasi',$x);
    }

    function simpan_prestasi(){
      $config['upload_path'] = './template/students/prestasi/'; //path folder
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
              $config['source_image']='./template/students/prestasi'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '100%';
              $config['width']= 1170;
              $config['height']= 1170;
              $config['new_image']= './template/students/prestasi'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $photo=$gbr['file_name'];
              $nama=$this->input->post('prestasi');
              $deskripsi=$this->input->post('xdeskripsi');
              $tanggal=strip_tags($this->input->post('xtanggal'));
              $id_kategori=strip_tags($this->input->post('xkategori'));
              $data=$this->m_katprestasi->get_prestasi_byid($id_kategori);
              $q=$data->row_array();
              $katnama=$q['nama_prestasi'];
              $siswas=strip_tags($this->input->post('xsiswa'));
              $sis=$this->m_siswa->get_siswa_by_id($siswas);
              $s=$sis->row_array();
              $namas=$s['siswa_nama'];
              $fotosiswa=$s['siswa_photo'];
              $id_kelas=$s['siswa_kelas_id'];
              $kel=$this->m_kelas->get_kelas_byid($id_kelas);
              $k=$kel->row_array();
              $kls_nama=$k['kelas_nama'];
              $kode=$this->session->userdata('idadmin');
        			$user=$this->m_pengguna->get_pengguna_login($kode);
        			$p=$user->row_array();
        			$user_id=$p['pengguna_id'];
        			$user_nama=$p['pengguna_nama'];

              $this->m_prestasi->simpan_prestasi($nama,$deskripsi,$tanggal,$id_kategori,$katnama,$id_kelas,$kls_nama,$siswas,$namas,$fotosiswa,$photo,seo_title($nama));
              echo $this->session->set_flashdata('msg','success');
              redirect('admin/prestasi');
            }else{
              echo $this->session->set_flashdata('msg','error');
              redirect('admin/prestasi');
            }
          }else{
            $nama=$this->input->post('prestasi');
            $deskripsi=$this->input->post('xdeskripsi');
            $tanggal=strip_tags($this->input->post('xtanggal'));
            $id_kategori=strip_tags($this->input->post('xkategori'));
            $data=$this->m_katprestasi->get_prestasi_byid($id_kategori);
            $q=$data->row_array();
            $katnama=$q['nama_prestasi'];
            $siswas=strip_tags($this->input->post('xsiswa'));
            $sis=$this->m_siswa->get_siswa_by_id($siswas);
            $s=$sis->row_array();
            $namas=$s['siswa_nama'];
            $fotosiswa=$s['siswa_photo'];
            $id_kelas=$s['siswa_kelas_id'];
            $kel=$this->m_kelas->get_kelas_byid($id_kelas);
            $k=$kel->row_array();
            $kls_nama=$k['kelas_nama'];

            $this->m_prestasi->simpan_prestasi_tanpa_img($nama,$deskripsi,$tanggal,$id_kategori,$katnama,$id_kelas,$kls_nama,$siswas,$namas,$fotosiswa,seo_title($nama));
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/prestasi');
          }
    }

    function update_prestasi(){
      $config['upload_path'] = './template/students/prestasi/'; //path folder
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
              $config['source_image']='./template/students/prestasi'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '100%';
              $config['width']= 1170;
              $config['height']= 1170;
              $config['new_image']= './template/students/prestasi'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $photo=$gbr['file_name'];
              $kode=strip_tags($this->input->post('kode'));
              $nama=$this->input->post('prestasi');
              $deskripsi=$this->input->post('xdeskripsi');
              $tanggal=strip_tags($this->input->post('xtanggal'));
              $id_kategori=strip_tags($this->input->post('xkategori'));
              $data=$this->m_katprestasi->get_prestasi_byid($id_kategori);
              $q=$data->row_array();
              $katnama=$q['nama_prestasi'];
              $siswas=strip_tags($this->input->post('xsiswa'));
              $sis=$this->m_siswa->get_siswa_by_id($siswas);
              $s=$sis->row_array();
              $namas=$s['siswa_nama'];
              $fotosiswa=$s['siswa_photo'];
              $id_kelas=$s['siswa_kelas_id'];
              $kel=$this->m_kelas->get_kelas_byid($id_kelas);
              $k=$kel->row_array();
              $kls_nama=$k['kelas_nama'];
              $kode=$this->session->userdata('idadmin');
        			$user=$this->m_pengguna->get_pengguna_login($kode);
        			$p=$user->row_array();
        			$user_id=$p['pengguna_id'];
        			$user_nama=$p['pengguna_nama'];

              $this->m_prestasi->update_prestasi($kode,$nama,$deskripsi,$tanggal,$id_kategori,$katnama,$id_kelas,$kls_nama,$siswas,$namas,$fotosiswa,$photo,seo_title($nama));
              echo $this->session->set_flashdata('msg','success');
              redirect('admin/prestasi');
            }else{
              echo $this->session->set_flashdata('msg','error');
              redirect('admin/prestasi');
            }
          }else{
            $kode=strip_tags($this->input->post('kode'));
            $nama=$this->input->post('prestasi');
            $deskripsi=$this->input->post('xdeskripsi');
            $tanggal=strip_tags($this->input->post('xtanggal'));
            $id_kategori=strip_tags($this->input->post('xkategori'));
            $data=$this->m_katprestasi->get_prestasi_byid($id_kategori);
            $q=$data->row_array();
            $katnama=$q['nama_prestasi'];
            $siswas=strip_tags($this->input->post('xsiswa'));
            $sis=$this->m_siswa->get_siswa_by_id($siswas);
            $s=$sis->row_array();
            $namas=$s['siswa_nama'];
            $fotosiswa=$s['siswa_photo'];
            $id_kelas=$s['siswa_kelas_id'];
            $kel=$this->m_kelas->get_kelas_byid($id_kelas);
            $k=$kel->row_array();
            $kls_nama=$k['kelas_nama'];

            $this->m_prestasi->update_prestasi_tanpa_img($kode,$nama,$deskripsi,$tanggal,$id_kategori,$katnama,$id_kelas,$kls_nama,$siswas,$namas,$fotosiswa,seo_title($nama));
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/prestasi');
          }
    }

    function hapus_prestasi(){
      $kode=strip_tags($this->input->post('kode'));
      $this->m_prestasi->delete_prestasi($kode);
      echo $this->session->set_flashdata('msg','success-hapus');
      redirect('admin/prestasi');
    }
  }
