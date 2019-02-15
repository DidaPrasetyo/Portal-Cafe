<?php 
 
class admin_m extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function get_ulasan(){
		return $this->db->get('ulasan');
	}
}