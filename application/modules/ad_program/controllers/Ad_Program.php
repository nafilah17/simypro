<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Program extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ad_program');
	}
	
	function index(){
		$data = array(
			'program' =>$this->m_ad_program->getAll(),
			'data' => $this->m_ad_program->af_program(),
			'kdunik' => $this->m_ad_program->kdunik(),
			'program' => $this->m_ad_program->getprogram(),
			'get_bidang' =>$this->m_ad_program->get_option_bidang1(),
			
		);
        $this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_cont_program',$data);
		$this->load->view('v_footer');
        }          
		
		function simpan(){
			$data=array(
				'id_program' =>$this->input->post('id_program'),
				'nama_bidang' 	=>$this->input->post('nama_bidang'),
				'nama_program' =>$this->input->post('nama_program'),
				'deskripsi' =>$this->input->post('deskripsi'));
			$this->m_ad_program->Simpan2('af_program',$data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('tb_program');
			}
	}
