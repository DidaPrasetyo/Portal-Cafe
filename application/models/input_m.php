<?php

class input_m extends CI_Model{

	function get_where($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function get_data($table){
		return $this->db->get($table);
	}
	function add_data($data,$tabel) {
		$this->db->insert($tabel,$data);
	}
	function delet($table,$col,$where){
		$this->db->where($col, $where);
		$this->db->delete($table);
	}
	function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}