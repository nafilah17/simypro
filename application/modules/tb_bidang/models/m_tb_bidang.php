<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tb_bidang extends CI_Model{
    function __construct(){
        parent::__construct();
    }

public $table ="af_bidang";
function getbidang(){
        return $this->db->query("SELECT * FROM af_bidang ORDER BY id_bidang ASC")->result();
    }

    function af_bidang(){ // memilih tabel untuk di tampilkan
        $query = $this->db->get('af_bidang');
        return $query->result_array();
    }
    
public function getAll(){
    $hasil=$this->db->query('SELECT * FROM af_bidang');
    return $hasil;
    }
    
    function input_data($table,$data){ // record baru kedalam tabel
    return $this->db->insert($table, $data);
    }

    function ubah($data,$no){
        $this->db->where('no',$no);
        if ($this->db->update('af_bidang', $data))
            return true;
        else
            return false;
    }
    // function edit_data($where,$table){
    // return $this->db->get_where($table,$where);
    // }
    // function update_data($where,$data,$table){ //merubah record
    //     $this->db->where($where);
    //     $this->db->update($table);
        
    // }

    function hapus_data($where, $table){ //
        $this->db->where($where);
        $this->db->delete($table);        
    }

    function kdunik(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_bidang,3)) as kd_max from af_bidang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        return "BID-" .$kd;
    }   
    }

   