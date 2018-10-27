<?php
class m_product extends CI_Model{
// 	function selectAll()
// 	{
// 		$this->db->order_by("kd_barang");
// 		return $this->db->get('tb_barang')->result();
// 	}
// }
public function getAll(){
	$result = array();
	$this->db->select('kd_barang, nama_barang, jml_barang, harga_barang');
	$this->db->from('tb_barang');

	$tb_barang = $this->db->get();

	if($tb_barang->num_rows() > 0){
		$results = $tb_barang->result();
	}
	return $results;
}
}
