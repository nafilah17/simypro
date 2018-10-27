<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tb_Bidang extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_tb_bidang');
			$this->load->helper('url');
		}
		
		function index(){					
			$data = array(
				'bidang' =>$this->m_tb_bidang->getAll(),
				'data' => $this->m_tb_bidang->af_bidang(),
				'kdunik' => $this->m_tb_bidang->kdunik(),
				'bidang' => $this->m_tb_bidang->getbidang(),
			);
			$this->load->view('v_header');
			$this->load->view('v_sidebar');
			$this->load->view('v_tb_bidang',$data);
			$this->load->view('v_footer');
		}

		// untuk modal tambah
		function tambah(){ 
			$data = array(
				'id_bidang' 	=>$this->input->post('id_bidang'),
				'nama_bidang'	=>$this->input->post('nama_bidang'),
				'deskripsi'		=>$this->input->post('deskripsi')
			);
			
			$this->m_tb_bidang->input_data('af_bidang',$data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_bidang');
		}

	public function hapus($id_bidang){
			$where = array('id_bidang' => $id_bidang);
			$this->m_tb_bidang->hapus_data($where,'af_bidang');
			$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible"> Data Telah Dihapus</div>');
			redirect ('tb_bidang');
		}
		
	function ubah(){
			$no = $this->input->post('no');
			$data = array(
				'id_bidang' 	=> $this->input->post('id_bidang'),
				'nama_bidang'	=> $this->input->post('nama_bidang'),
				'deskripsi'		=> $this->input->post('deskripsi')
			);
			if($this->m_tb_bidang->ubah($data,$no)){

			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('tb_bidang');
        	} else {
        		echo "tes";
        	}
		}
	}
	