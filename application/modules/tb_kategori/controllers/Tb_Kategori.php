<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tb_Kategori extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_tb_kategori');
		}
		function index(){
			$data = array(
				'kategori' => $this->m_tb_kategori->getAll(),
				'data'	=> $this->m_tb_kategori->af_kategori(),
				'kdunik' => $this->m_tb_kategori->kdunik(),
				'kategori' => $this->m_tb_kategori->getkategori(),
			);
			
			$this->load->view('v_header');
			$this->load->view('v_sidebar');
			$this->load->view('v_tb_kategori',$data);
			$this->load->view('v_footer');
		}

		// untuk modal tambah
		function tambah(){
			$data = array(
				'id_kategori'	=>$this->input->post('id_kategori'),
				'nama_kategori'	=>$this->input->post('nama_kategori'),
				'deskripsi'		=>$this->input->post('deskripsi')
			);
			$this->m_tb_kategori->input_data('af_kategori',$data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_kategori');
			
		}

		public function hapus($id_kategori){
			$where = array('id_kategori' => $id_kategori);
			$this->m_tb_kategori->hapus_data($where,'af_kategori');
			$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible"> Data Telah Dihapus</div>');
			redirect ('tb_kategori');
		}

		function ubah(){
			$no = $this->input->post('no');
			$data = array(
				'id_kategori' 	=> $this->input->post('id_kategori'),
				'nama_kategori'	=> $this->input->post('nama_kategori'),
				'deskripsi'		=> $this->input->post('deskripsi')
			);
			if($this->m_tb_kategori->ubah($data,$no)){

			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('tb_kategori');
        	} else {
        		echo "tes";
        	}
        }



		// function update(){
		// 	$data = array(
		// 		'id_kategori' 	=>$this->input->post('id_kategori'),
		// 		'nama_kategori'	=>$this->input->post('nama_kategori'),
		// 		'deskripsi'		=>$this->input->post('deskripsi')
		// 	);
		// 	$this->m_tb_kategori->update_data('af_kategori',$data);
		// 	$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  //       redirect('tb_kategori');
		
}
	