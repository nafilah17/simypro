<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class m_ad_kategori extends CI_Model{
    function __construct(){
        parent::__construct();
	}
	
	public $table ="af_kategori";
	function getkategori(){
        return $this->db->query("SELECT * FROM af_kategori ORDER BY id_kategori ASC")->result();
	}

 	public function getAll(){
		$result = array();
		$this->db->select('*');
		$this->db->from('af_kategori');
	
		$af_kategori = $this->db->get();
	
		if($af_kategori->num_rows() > 0){
			$result = $af_kategori->result();
		}
		return $result;
	}

	public function Simpan2($table, $data){
		return $this->db->insert($table, $data);
	}
  
	function af_kategori(){
        $query = $this->db->get('af_kategori');
        return $query->result_array();
    }
		
	public function simpan($data){
        $query = $this->insert("af_kategori", $data);

        if($query){
            return true;
        } else {
            return false;
        }
		}

		function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

     function kdunik(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_kategori,3)) as kd_max from af_kategori");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            };
        } else {
            $kd = "0001";
        }
        return "KAT-" .$kd;
    }
}