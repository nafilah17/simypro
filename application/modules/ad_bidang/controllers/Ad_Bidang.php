<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Bidang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ad_bidang');
	}

	function index(){
			$data = array(
			'bidang' =>$this->m_ad_bidang->getAll(),
			'data' => $this->m_ad_bidang->af_bidang(),
			'kdunik' => $this->m_ad_bidang->kdunik(),
			'bidang' => $this->m_ad_bidang->getbidang(),
		);
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_cont_bidang',$data	);
		$this->load->view('v_footer');
	}

	function simpan(){
		$data=array(
			'id_bidang' =>$this->input->post('id_bidang'),
			'nama_bidang' =>$this->input->post('nama_bidang'),
			'deskripsi' =>$this->input->post('deskripsi'));
		$this->m_ad_bidang->Simpan2('af_bidang',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_bidang');
		}
}
