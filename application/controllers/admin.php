<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('admin_m');
	}

	public function index(){
		redirect('admin/login');
	}

	public function login(){
		$this->load->view('admin/adm_login');
	}

	function loginact(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->admin_m->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect('admenu');

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

?>