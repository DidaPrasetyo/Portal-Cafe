<?php

class input_m extends CI_Model{
	
	function add_data($data,$tabel) {
		$this->db->insert($tabel,$data);
	}
	
}