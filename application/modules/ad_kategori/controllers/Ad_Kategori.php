<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ad_kategori');
	}
	
	public function index(){
		$data = array(
			'kategori' =>$this->m_ad_kategori->getAll(),
			'data' => $this->m_ad_kategori->af_kategori(),
			'kdunik' => $this->m_ad_kategori->kdunik(),
			'kategori' => $this->m_ad_kategori->getkategori(),
		);
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_cont_kategori',$data);
		$this->load->view('v_footer');
	}

	function simpan(){
		$data=array(
			'id_kategori' =>$this->input->post('id_kategori'),
			'nama_kategori' =>$this->input->post('nama_kategori'),
			'deskripsi' =>$this->input->post('deskripsi'));
		$this->m_ad_kategori->Simpan2('af_kategori',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_kategori');
		}

}


