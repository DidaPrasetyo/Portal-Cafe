<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('input_m');
		$this->load->helper('form','url');
	}



	//USER COMMENT CRUD//
	public function input_comment(){
		$nama	=	 $this->input->post('nama');
		$email	=	 $this->input->post('email');
		$com	=	 $this->input->post('kritsar');

		$data = array(
			'ul_nama'	=>	$nama,
			'ul_email'	=>	$email,
			'ul_ulasan'	=>	$com
		);

		$this->input_m->add_data($data,'ulasan');
		redirect('home/beranda');
	}

	public function delet_ul($ul_id){
		$table	=	'ulasan';
		$col	=	'ul_id';
		$where	=	$ul_id;
		$this->input_m->delet($table, $col, $where);
		redirect('admenu/comment');
	}



	//ADMIN USER CRUD//
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
		redirect('admenu/admin');
	}

	public function edit_admin(){
		$name	=	$this->input->post('name');
		$uname	=	$this->input->post('username');
		$pass	=	$this->input->post('pass');

		$data = array(
			'nama'		=>	$name,
			'username'	=>	$uname,
			'password'	=>	md5($pass)
		);
		$table	=	'admin';
		$col	=	'user_id';
		$where	=	$user_id;
		$this->input_m->edit($table, $col, $where, $data);
		redirect('admenu/admin');
	}

	public function delet_admin($user_id){
		$table	=	'admin';
		$col	=	'user_id';
		$where	=	$user_id;
		$this->input_m->delet($table, $col, $where);
		redirect('admenu/admin');
	}



	//MENU CAFE CRUD//
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
	public function delet_menu($product_id){
		$table	=	'product';
		$col	=	'product_id';
		$where	=	$product_id;
		$this->input_m->delet($table, $col, $where);
		redirect('admenu/upload');
	}


	//GALLETY CRUD//
	public function input_gallery(){
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
		$img	=	$this->upload->data("file_name");

		$data = array(
			'gallery_name'	=>	$name,
			'gallery_pict'	=>	$img
		);
		$this->input_m->add_data($data,'gallery');
		redirect('admenu/addcafepict');
	}
	public function delet_gallery($gallery_id){
		$table	=	'gallery';
		$col	=	'gallery_id';
		$where	=	$gallery_id;
		$this->input_m->delet($table, $col, $where);
		redirect('admenu/upload');
	}
}