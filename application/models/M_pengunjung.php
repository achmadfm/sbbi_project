<?php
class M_pengunjung extends CI_Model{
    
	function statistik_pengujung(){
        $query = $this->db->query("SELECT DATE_FORMAT(pengunjung_tanggal,'%d') AS tgl,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE()) GROUP BY DATE(pengunjung_tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function visitor_this_year(){
        $query = $this->db->query("SELECT DATE_FORMAT(pengunjung_tanggal,'%M') AS bulan,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(CURDATE()) GROUP BY MONTH(pengunjung_tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

		function get_hits(){
            date_default_timezone_set("Asia/Makassar");
			$query = $this->db->query("SELECT SUM(pengunjung_hits) as total FROM tbl_pengunjung WHERE DATE(pengunjung_tanggal)=DATE(CURDATE())");
			return $query;
		}

		function visitor_online(){
            date_default_timezone_set("Asia/Makassar");
			$bataswaktu = time() - 300;
			$query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE(pengunjung_tanggal)=DATE(CURDATE()) && pengunjung_online > '$bataswaktu'");
			return $query;
		}

    function get_all_visitors(){
        $hsl=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE(pengunjung_tanggal)=DATE(CURDATE()) GROUP BY pengunjung_ip");
        return $hsl;
    }

    function get_sum_visitor_last_year(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS visitor_last_year FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))");
        return $hsl;
    }

    function get_sum_visitor_this_day(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE DAY(pengunjung_tanggal)=DAY(CURDATE())");
        return $hsl;
    }

    function get_average_perbulan(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip)/COUNT(DISTINCT MONTH(pengunjung_tanggal)) AS jumlah FROM tbl_pengunjung WHERE YEAR(pengunjung_tanggal)=YEAR(CURDATE())");
        return $hsl;
    }

    function get_sum_visitor_this_month(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE())");
        return $hsl;
    }

    function get_sum_visitor_last_month(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))");
        return $hsl;
    }

    function get_average_perday(){
        $hsl=$this->db->query("SELECT COUNT(pengunjung_ip)/COUNT(DISTINCT DAY(pengunjung_tanggal)) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE())");
        return $hsl;
    }

    function simpan_user_agent($user_ip,$agent){
    	$hsl=$this->db->query("INSERT INTO tbl_pengunjung (pengunjung_ip,pengunjung_perangkat) VALUES('$user_ip','$agent')");
    	return $hsl;
    }

    function cek_ip($user_ip){
    	$hsl=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_ip='$user_ip' AND DATE(pengunjung_tanggal)=CURDATE()");
    	return $hsl;
    }

    function count_visitor(){
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
                date_default_timezone_set("Asia/Makassar");
				$waktu = time();
                $cek=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_ip='$user_ip' AND DATE(pengunjung_tanggal)=CURDATE()");
				$row = $cek->row_array();
                if($cek->num_rows() == 0){
                    $datadb = array('pengunjung_ip'=>$user_ip, 'pengunjung_hits'=>'1', 'pengunjung_online'=>$waktu, 'pengunjung_perangkat'=>$agent);
                                $this->db->insert('tbl_pengunjung',$datadb);
                }else{
					$hits = $row['pengunjung_hits'] + 1;
					$datadb = array('pengunjung_ip'=>$user_ip,
    							'pengunjung_hits'=>$hits,
    							'pengunjung_online'=>$waktu,
    							'pengunjung_perangkat'=>$agent);
					$array = array('pengunjung_ip'=>$user_ip,);
					$this->db->where($array);
					$this->db->update('tbl_pengunjung',$datadb);
				}
    }

}
