<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('v_login');
		}

	public function cek_login() {
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('m_login'); // load model_login
		$hasil = $this->m_login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
						}
			if ($this->session->userdata('level')=='admin') {
				redirect('ad_beranda');
			}		
			elseif ($this->session->userdata('level')=='member') {
				redirect('ad_beranda');
			}
		}
			else
		 	{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}
	// public function regis_baru(){
	// 	$data = array(
	// 			'username' 	=>$this->input->post('username'),
	// 			'email'	=>$this->input->post('email'),
	// 			'password'		=>$this->input->post('password')				
	// 		);
			
	// 		$this->m_login->regis_data('af_login',$data);
	// 		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 //        redirect('auth');
	// 	}
	// }

