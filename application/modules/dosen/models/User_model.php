<?php
	class User_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('ci_users', $data);
			return true;
		}

		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_all_users(){
			$wh =array();
			$SQL ='SELECT * FROM ci_users';
			$wh[] = " is_admin = 0";
			if(count($wh)>0)
			{
				$WHERE = implode(' and ',$wh);
				return $this->datatable->LoadJson($SQL,$WHERE);
			}
			else
			{
				return $this->datatable->LoadJson($SQL);
			}
		}

		//---------------------------------------------------
		// get all user records
		public function get_all_simple_users(){
			$this->db->where('is_admin', 0);
			$query = $this->db->get('ci_users');
			return $result = $query->result_array();
		}

		//---------------------------------------------------
		// Count total user for pagination
		public function count_all_users(){
			return $this->db->count_all('ci_users');
		}

		//---------------------------------------------------
		// Get all users for pagination
		public function get_all_users_for_pagination($limit, $offset){
			$wh =array();	
			$this->db->order_by('created_at','desc');
			$this->db->limit($limit, $offset);

			if(count($wh)>0){
				$WHERE = implode(' and ',$wh);
				$query = $this->db->get_where('ci_users', $WHERE);
			}
			else{
				$query = $this->db->get('ci_users');
			}
			return $query->result_array();
			//echo $this->db->last_query();
		}


		//---------------------------------------------------
		// get all users for server-side datatable with advanced search
		public function get_all_users_by_advance_search(){
			$wh =array();
			$SQL ='SELECT * FROM ci_users';
			if($this->session->userdata('user_search_type')!='')
			$wh[]="is_active = '".$this->session->userdata('user_search_type')."'";
			if($this->session->userdata('user_search_from')!='')
			$wh[]=" `created_at` >= '".date('Y-m-d', strtotime($this->session->userdata('user_search_from')))."'";
			if($this->session->userdata('user_search_to')!='')
			$wh[]=" `created_at` <= '".date('Y-m-d', strtotime($this->session->userdata('user_search_to')))."'";

			$wh[] = " is_admin = 0";
			if(count($wh)>0)
			{
				$WHERE = implode(' and ',$wh);
				return $this->datatable->LoadJson($SQL,$WHERE);
			}
			else
			{
				return $this->datatable->LoadJson($SQL);
			}
		}

		//---------------------------------------------------
		// Get user detial by ID
		public function get_user_by_id($id){
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}

		//---------------------------------------------------
		// Edit user Record
		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

		//---------------------------------------------------
		// Get User Role/Group
		public function get_user_groups(){
			$query = $this->db->get('ci_user_groups');
			return $result = $query->result_array();
		}

		public function penempatan($data){
			$this->db->insert('ci_penempatan', $data);
			return true;
		}

		// get all user records
		public function get_penempatan($id){
			$this->db->where('id', $id);
			$query = $this->db->get('ci_penempatan');
			return $result = $query->result_array();
		}

		// get all user records
		public function get_all_penempatan(){
			$query = $this->db->get('ci_penempatan');
			return $result = $query->result_array();
		}

		// get all user records
		public function get_penempatan_by_kantor($id){
			$this->db->where('id_kantor', $id);
			$query = $this->db->get('ci_penempatan');
			return $result = $query->result_array();
		}
		
	}

?>