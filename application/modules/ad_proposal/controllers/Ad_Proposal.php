<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Proposal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_ad_proposal');
	}

	function index(){
			$data = array(
			'proposal' =>$this->m_ad_proposal->getAll(),
			'data' => $this->m_ad_proposal->af_proposal(),
			'kdunik' => $this->m_ad_proposal->kdunik(),
			'proposal' => $this->m_ad_proposal->getproposal(),
			'get_category1' => $this->m_ad_proposal->get_option1(),
			'get_category2' => $this->m_ad_proposal->get_option2(),
			'get_category3' => $this->m_ad_proposal->get_option3(),
		);
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_cont_proposal',$data	);
		$this->load->view('v_footer');
	}

	function simpan(){
		$data=array(
			'id_proposal' 		=>$this->input->post('id_proposal'),
			'nama_kontak' 		=>$this->input->post('nama_kontak'),
			'nama_lembaga' 		=>$this->input->post('nama_lembaga'),
			'alamat_lembaga' 	=>$this->input->post('alamat_lembaga'),
			'kecamatan' 		=>$this->input->post('kecamatan'),
			'kota_kab' 			=>$this->input->post('kota_kab'),
			'wil_malang' 		=>$this->input->post('wil_malang'),
			'telepon' 			=>$this->input->post('telepon'),
			'tgl_masuk' 		=>date_format(date_create($this->input->post('tgl_masuk')), 'Y-m-d'),
			'bulan_masuk' 		=>$this->input->post('bulan_masuk'),
			'id_program' 		=>$this->input->post('id_program'),
			'nama_program' 		=>$this->input->post('nama_program'),
			'id_bidang' 		=>$this->input->post('id_bidang'),
			'nama_bidang' 		=>$this->input->post('nama_bidang'),
			'id_kategori' 		=>$this->input->post('id_kategori'),
			'nama_kategori' 	=>$this->input->post('nama_kategori'),
			'jml_pengajuan' 	=>$this->input->post('jml_pengajuan'),
			'bentuk_pengajuan' 	=>$this->input->post('bentuk_pengajuan'),
			'tgl_survei' 		=>date_format(date_create($this->input->post('tgl_survei')), 'Y-m-d'),
			'rekomendasi' 		=>$this->input->post('rekomendasi'),
		);
		$this->m_ad_proposal->Simpan2('af_proposal',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('tb_proposal');
		}
}
