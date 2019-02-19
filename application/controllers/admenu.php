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
	public function addadmin(){
		$data['judul'] = "Add Admin";
		$data['page'] = $this->load->view('admin/add_admin', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function addmenu(){
		$data['judul'] = "Add Menu";
		$data['page'] = $this->load->view('admin/add_menu', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function addcafepict(){
		$data['judul'] = "Add Cafe Pict";
		$data['page'] = $this->load->view('admin/add_cafepict', '', TRUE);
		$this->load->view('admin/adm_index',$data);
	}
	public function comment(){
		$table			=	'ulasan';
		$get['id']		=	$this->input_m->get_data($table);
		$data['judul']	=	"Customer Comment";
		$data['page']	=	$this->load->view('admin/adm_ulasan', $get, TRUE);
		$this->load->view('admin/adm_index',$data);
	}
}

?>