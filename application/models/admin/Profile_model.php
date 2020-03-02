<?php
	class Profile_model extends CI_Model{

		//--------------------------------------------------------------------
		public function get_user_detail(){
			$id = $this->session->userdata('user_id');
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}
		//--------------------------------------------------------------------
		public function update_user($data){
			$id = $this->session->userdata('user_id');
			$this->db->where('id', $id);			
			return $this->db->update('ci_users', $data);
		}	
		

	}

?>