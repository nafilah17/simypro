<?php 
	class Product extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_product');
		}
		function index(){
			$data['title']='tampil database';
			// product sesuaikan dengan yang di view $product
			$data['product']=$this->m_product->getAll();
			$this->load->view('v_product',$data);
			

		}
	}