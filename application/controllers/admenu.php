<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admenu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('input_m');
		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin'));
		}
	}

	public function index(){
		redirect('admenu/beranda');
	}

	public function beranda(){
		$data['judul'] = "Dashboard";
		$data['page'] = $this->load->view('admin/adm_beranda', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}


	//ADMIN//
	public function admin(){
		$table			=	'admin';
		$get['id']		=	$this->input_m->get_data($table);
		$data['judul']	=	"Admin";
		$data['page']	=	$this->load->view('admin/adm_admin', $get, TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function addadmin(){
		$data['judul'] = "Add Admin";
		$data['page'] = $this->load->view('admin/add_admin', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function editadmin(){
		$table			=	'admin';
		$get['id']		=	$this->input_m->get_data($table);
		$data['judul']	=	"Admin";
		$data['page']	=	$this->load->view('admin/adm_editadmin', $get, TRUE);
		$this->load->view('admin/adm_index',$data);
	}


	//UPLOAD//
	public function upload(){
		$table			=	'gallery';
		$table2			=	'product';
		$get			=	array(
				'gallery'	=>	$this->input_m->get_data($table),
				'product'	=>	$this->input_m->get_data($table2)
			);
		$data['judul']	=	"Upload";
		$data['page']	=	$this->load->view('admin/adm_upload', $get, TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function addmenu(){
		$data['judul'] = "Add Menu";
		$data['page'] = $this->load->view('admin/add_menu', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}

	public function addcafepict(){
		$data['judul'] = "Add Cafe Pict";
		$data['page'] = $this->load->view('admin/add_cpict', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}


	//COMMENT//
	public function comment(){
		$table			=	'ulasan';
		$get['id']		=	$this->input_m->get_data($table);
		$data['judul']	=	"Customer Comment";
		$data['page']	=	$this->load->view('admin/adm_ulasan', $get, TRUE);
		$this->load->view('admin/adm_index',$data);
	}
}

?>