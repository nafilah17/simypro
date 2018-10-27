<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ad_proposal extends CI_Model{
    function __construct(){
        parent::__construct();
	}
	
	public $table ="af_proposal";
	function getproposal(){
        return $this->db->query("SELECT * FROM af_proposal ORDER BY id_proposal ASC")->result();
	}
	
	public function getAll(){
		$result = array();
		$this->db->select('*');
		$this->db->from('af_proposal');
	
		$af_proposal = $this->db->get();
	
		if($af_proposal->num_rows() > 0){
			$result = $af_proposal->result();
		}
		return $result;
	}

    function af_proposal(){
        $query = $this->db->get('af_proposal');
        return $query->result_array();
    }

    function get_option1(){
        $this->db->select('*');
        $this->db->from('af_program');
        $query = $this->db->get();
        return $query->result();
    }

    function get_option2(){
        $this->db->select('*');
        $this->db->from('af_bidang');
        $query = $this->db->get();
        return $query->result();
    }

    function get_option3(){
        $this->db->select('*');
        $this->db->from('af_kategori');
        $query = $this->db->get();
        return $query->result();
    }
    
	public function Simpan2($table, $data){
		return $this->db->insert($table, $data);
	}

	
    public function simpan($data){
        $query = $this->insert("af_proposal", $data);

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
        $q = $this->db->query("SELECT MAX(RIGHT(id_proposal,3)) as kd_max from af_proposal");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            };
        } else {
            $kd = "0001";
        }
        return "PR-" .$kd;
    }
}