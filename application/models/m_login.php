<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_login extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tb_login', $data);
			return $query;
		}

		// public function regis_data($table,$data){
		// 	 return $this->db->insert($table, $data);
  //  		 }
		

	}

?>