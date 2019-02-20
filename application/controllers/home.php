<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('input_m');
	}

	public function index(){
		redirect('home/beranda');
	}

	public function beranda(){
		$data['judul']	=	"Home";
		$data['page']	=	$this->load->view('v1_beranda', '', TRUE);
		$this->load->view('v1_index',$data);
	}
	public function gallery(){
		$table			=	'gallery';
		$get['id']		=	$this->input_m->get_data($table);
		$data['judul']	=	"Gallery";
		$data['page']	=	$this->load->view('v1_gallery', $get, TRUE);
		$this->load->view('v1_index',$data);
	}
	public function menu(){
		$data['judul'] = "Food and Beverages";
		$data['page'] = $this->load->view('v1_menu', '', TRUE);
		$this->load->view('v1_index',$data);
	}
	public function contact(){
		$data['judul'] = "Contact Us";
		$data['page'] = $this->load->view('v1_contact', '', TRUE);
		$this->load->view('v1_index',$data);
	}
	public function location(){
		$data['judul'] = "Location";
		$data['page'] = $this->load->view('v1_location', '', TRUE);
		$this->load->view('v1_index',$data);
	}
}

?>