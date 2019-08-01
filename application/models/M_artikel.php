<?php
  class M_artikel extends CI_Model{
      
    public function view_where($table,$data){
      $this->db->where($data);
      return $this->db->get($table);
    }


    function get_user_articles($kode,$user,$kategori){
      $query = $this->db->query("SELECT tbl_artikel.*,DATE_FORMAT(artikel_tanggal,'%d-%M-%Y') AS tanggal FROM tbl_artikel WHERE id_user='$kode' OR username='$user' AND artikel_kategori='Artikel'");
      return $query;
    }

    function simpan_artikel($judul,$isi,$kategori,$jenis,$id_user,$username,$nama,$slug,$fotopenulis){
      $query = $this->db->query("INSERT INTO tbl_artikel(artikel_judul,artikel_isi,artikel_kategori,artikel_jenis,id_user,username,nama_lengkap,artikel_slug,foto_penulis) VALUES('$judul','$isi','$kategori','$jenis','$id_user','$username','$nama','$slug','$fotopenulis')");
      return $query;
    }

    function update_artikel($id,$judul,$isi,$kategori,$jenis,$id_user,$username,$nama,$slug){
      $query = $this->db->query("UPDATE tbl_artikel SET artikel_judul='$judul',artikel_isi='$isi',artikel_kategori='$kategori',artikel_jenis='$jenis',id_user='$id_user',username='$username',nama_lengkap='$nama',artikel_slug='$slug' WHERE artikel_id='$id'");
      return $query;
    }

    function get_article_by_id($id){
      $query = $this->db->query("SELECT tbl_artikel.*, DATE_FORMAT(artikel_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_artikel WHERE artikel_id='$id'");
      return $query;
    }

    function delete_artikel($id){
      $query = $this->db->query("DELETE FROM tbl_artikel WHERE artikel_id='$id'");
      return $query;
    }

    //DEPAN//

    function get_all_articles_by_status_publish(){
      $hsl=$this->db->query("SELECT tbl_artikel.*,DATE_FORMAT(artikel_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_artikel WHERE publish_status='1' ORDER BY artikel_id DESC ");
  		return $hsl;
    }

    function get_article_by_code($code){
      $query = $this->db->query("SELECT tbl_artikel.*, DATE_FORMAT(artikel_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_artikel WHERE artikel_id='$code' && publish_status='1'");
      return $query;
    }

    function get_articles_perpage($offset,$limit){
      $hsl=$this->db->query("SELECT tbl_artikel.*,DATE_FORMAT(artikel_tanggal,'%Y-%m-%d') AS tanggal FROM tbl_artikel WHERE publish_status='1' ORDER BY artikel_id DESC limit $offset,$limit");
  		return $hsl;
    }

    function show_komentar_by_artikel_id($kode){
  		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_artikel_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
  		return $hsl;
  	}
  }
