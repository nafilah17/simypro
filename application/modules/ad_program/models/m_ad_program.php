<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ad_program extends CI_Model{
    function __construct(){
        parent::__construct();
	}
	
	public $table ="af_program";
	function getprogram(){
        return $this->db->query("SELECT * FROM af_program ORDER BY id_program ASC")->result();
	}
	
	public function getAll(){
		$result = array();
		$this->db->select('*');
		$this->db->from('af_program');
	
		$af_program = $this->db->get();
	
		if($af_program->num_rows() > 0){
			$result = $af_program->result();
		}
		return $result;
    }
    
    function get_option_bidang1(){
        $this->db->select('*');
        $this->db->from('af_bidang');
        $query = $this->db->get();
        return $query->result();
    }   

  

	public function Simpan2($table, $data){
		return $this->db->insert($table, $data);
	}

	function af_program(){
        $query = $this->db->get('af_program');
        return $query->result_array();
    }

    public function simpan($data){
        $query = $this->insert("af_program", $data);

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
        $q = $this->db->query("SELECT MAX(RIGHT(id_program,3)) as kd_max from af_program");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            };
        } else {
            $kd = "0001";
        }
        return "PRO-" .$kd;
    }
}