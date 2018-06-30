<?php
	class Registration_model extends CI_Model {

		public function getReg(){
		$result = array();
		$this->db->select('orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber,validDate');
		$this->db->from('maablist');
		$query = $this->db->get();
		if($query->num_rows() >0){
			$results = $query->result();
		}
		return $results;
		}
	}
?>