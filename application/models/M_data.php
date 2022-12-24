<?php 

class M_data extends CI_Model{

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	//dari sini
	// function get_about(){
	// 	$this->db->get('tbl_navigation');
	// 	return $this->db->get('tbl_navigation');
	// }





}
?>