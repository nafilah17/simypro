<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tb_Program extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_tb_program');
		}

		function index(){
			$data = array(
				'program' =>$this->m_tb_program->getAll(),
				'data' => $this->m_tb_program->af_program(),
				'kdunik' => $this->m_tb_program->kdunik(),
				'program' => $this->m_tb_program->getprogram(),
				'get_bidang' =>$this->m_tb_program->get_option_bidang1(),
				
			);
			$this->load->view('v_header');
			$this->load->view('v_sidebar');
			$this->load->view('v_tb_program',$data);
			$this->load->view('v_footer');
		}
		
		// untuk modal tambah
		function tambah(){
			$data = array(
				'id_program' 	=>$this->input->post('id_program'),
				'nama_bidang' 	=>$this->input->post('nama_bidang'),
				'nama_program'	=>$this->input->post('nama_program'),
				'deskripsi'		=>$this->input->post('deskripsi')
			);
			$this->m_tb_program->input_data('af_program',$data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_program');
		}

		function ubah(){
			$no = $this->input->post('no');
			$data = array(
				'nama_bidang' 	=> $this->input->post('nama_bidang'),
				'id_program' 	=> $this->input->post('id_program'),
				'nama_program'	=> $this->input->post('nama_program'),
				'deskripsi'		=> $this->input->post('deskripsi')
			);
			if($this->m_tb_program->ubah($data,$no)){

			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('tb_program');
        	} else {
        		echo "tes";
        	}
		}

		public function hapus($id_program){
			$where = array('id_program' => $id_program);
			$this->m_tb_program->hapus_data($where,'af_program');
			$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible"> Data Telah Dihapus</div>');
			redirect ('tb_program');
		}
	}

	// 	function edit($id_program){ 
	// 		$where = array('id_program' => $id_program);
	// 		$data['af_program'] = $this->m_tb_program->edit_data($where, 'af_program')->result();
	// 		$this->load->view('v_tb_program',$data);
	// 	}
	
	// 	function update(){
	// 		$data = array(
	// 			'id_program' 	=>$this->input->post('id_program'),
	// 			'nama_bidang' 	=>$this->input->post('nama_bidang'),
	// 			'nama_program'	=>$this->input->post('nama_program'),
	// 			'deskripsi'		=>$this->input->post('deskripsi')
	// 		);
	// 		$this->m_tb_program->update_data('af_program',$data);
	// 		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 //        redirect('tb_program');
	// 	}
