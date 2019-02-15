<?php

class input_m extends CI_Model{
	
	function add_data($data,$tabel) {
		$this->db->insert($tabel,$data);
	}

	public function img_upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('ppict')){
			$return = array(
				'result' => 'success',
				'file' => $this->upload->data(),
				'error' => ''
			);
			return $return;
		} else {
			$return = array(
				'result' => 'failed',
				'file' => '',
				'error' => $this->upload->display_errors()
			);
			return $return;
		}
	}

	public function upload_menu($img_upload){
		$pname = $this->input->post('pname');
		$pharga = $this->input->post('pprice');
		$pket = $this->input->post('pdesc');
		$ptipe = $this->input->post('ptype');
		$pict = $img_upload['file']['file_name'];

		$data = array(
			'product_nama' => $pname,
			'product_price' => $pharga,
			'product_desc' => $pket,
			'product_type' => $ptipe,
			'product_pict' => $pict
		);
		$this->db->insert('product',$data);
	}
}