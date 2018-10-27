<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();

	}
	
	public function index()
	{
		
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_cont_beranda');
		$this->load->view('v_footer');
		
	}

}
