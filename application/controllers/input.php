<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('input_m');
		$this->load->helper('form','url');
	}

	public function input_admin(){
		$name = $this->input->post('name');
		$uname = $this->input->post('username');
		$pass = $this->input->post('pass');

		$data = array(
			'nama' => $name,
			'username' => $uname,
			'password' => md5($pass)
		);
		$this->input_m->add_data($data,'admin');
		redirect('admenu/addadmin');
	}
	public function input_menu(){
		$data = array(
			$pname = $this->input->post('pname'),
			$pharga = $this->input->post('pprice'),
			$pket = $this->input->post('pdesc'),
			$ptipe = $this->input->post('ptype')
		);

		if($this->input->post('submit')){
			$upload = $this->input_m->img_upload();
			if($upload['result'] == "success"){
				$this->input_m->upload_menu($upload);
				redirect('admenu/add_menu');
			}else{
				$data['message'] = $upload['error'];
			}
		}
	}
}