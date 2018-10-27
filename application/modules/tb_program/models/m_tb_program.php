<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tb_program extends CI_Model{
	function __construct(){
		parent::__construct();
	}

public $table ="af_program";
function getprogram(){
        return $this->db->query("SELECT * FROM af_program ORDER BY id_program ASC")->result();
    }

    function af_program(){
        $query = $this->db->get('af_program');
        return $query->result_array();
}
public function getAll(){
	$hasil=$this->db->query("SELECT * FROM af_program");
    return $hasil;
}

function get_option_bidang1(){
        $this->db->select('*');
        $this->db->from('af_bidang');
        $query = $this->db->get();
        return $query->result();
    } 

    function input_data($table, $data){
    return $this->db->insert($table, $data);
    }

    function ubah($data,$no){
        $this->db->where('no',$no);
        if ($this->db->update('af_program', $data))
            return true;
        else
            return false;
    }

    // function edit_data($where,$table){
    //     return $this->db->get_where($table,$where);
    // }

    // function update_data($where,$data,$table){
    //     $this->db->where($where);
    //     $this->db->update($table);
    // }
    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);        
    }

    
function kdunik(){
    $q = $this->db->query("SELECT MAX(RIGHT(id_program,3)) as kd_max from af_program");
    $kd = "";
    if($q->num_rows()>0){
        foreach($q->result() as $k){
            $tmp = ((int)$k->kd_max)+1;
            $kd = sprintf("%05s", $tmp);
        }
    } else {
        $kd = "0001";
    }
    return "PRO-" .$kd;
}
}