<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->models('m_login');
	// }

	// function index(){
	// 	// $data['user'] = $this->m_login->ambil_data()->result();
	// 	$this->load->view('welcome');
	// }

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_content');
		$this->load->view('v_footer');
		
	}

}


