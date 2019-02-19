<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('input_m');
		$this->load->helper('form','url');
	}

	public function input_admin(){
		$name	=	$this->input->post('name');
		$uname	=	$this->input->post('username');
		$pass	=	$this->input->post('pass');

		$data = array(
			'nama'		=>	$name,
			'username'	=>	$uname,
			'password'	=>	md5($pass)
		);
		$this->input_m->add_data($data,'admin');
		redirect('admenu/addadmin');
	}

	public function input_menu(){
		$config['upload_path']		=	'./img/';
		$config['allowed_types']	=	'gif|jpg|png';
		$config['file_name']		=	$this->input->post('name');
		$config['overwrite']		=	true;
		// $config['max_width']		= 1024;
		// $config['max_height']	= 768;

		$this->load->library('upload', $config);
		$this->upload->do_upload('img');
		$this->upload->data();
		$name	=	$this->input->post('name');
		$price	=	$this->input->post('price');
		$desc	=	$this->input->post('desc');
		$type	=	$this->input->post('type');
		$img	=	$this->upload->data("file_name");

		$data = array(
			'product_nama'	=>	$name,
			'product_price'	=>	$price,
			'product_desc'	=>	$desc,
			'product_type'	=>	$type,
			'product_pict'	=>	$img
		);
		$this->input_m->add_data($data,'product');
		redirect('admenu/addmenu');
		
	}
}