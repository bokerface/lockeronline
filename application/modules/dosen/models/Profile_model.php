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
			$this->db->update('ci_users', $data);
			return true;
		}
		//--------------------------------------------------------------------
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

		public function tambah_keluarga($data){
					
			$this->db->insert('ci_individu_keluarga', $data);
			return true;
		}

		public function edit_keluarga($data,$id){					
			$this->db->where('id', $id);
			$this->db->update('ci_individu_keluarga', $data);
			return true;
		}

		public function get_data_keluarga(){
			$id = $this->session->userdata('user_id');
			$this->db->order_by('status_keluarga','DESC');
			$query = $this->db->get_where('ci_individu_keluarga', array('user_id' => $id));
			return $query->result_array();
		}
		//untuk table data keluarga pada menu Staff>Semua Staff>detail Staf
		public function get_detail_keluarga($id){	
			$query = $this->db->get_where('ci_individu_keluarga', array('user_id' => $id));
			return $result = $query->result_array();
		}

		public function get_detail_keluarga_individu($id){	
			$id = $this->session->userdata('user_id');		
			$query = $this->db->get_where('ci_individu_keluarga', array('user_id' => $id));
			return $result = $query->row_array();
		}

		public function get_anak(){
			$id = $this->session->userdata('user_id');
			$query = $this->db->get_where('ci_individu_keluarga', array('user_id' => $id,'status_keluarga'=>'anak'));
			return $result = $query->result_array();
		}

		public function get_anak_profil($id){
			$query = $this->db->get_where('ci_individu_keluarga', array('user_id' => $id,'status_keluarga'=>'anak'));
			return $result = $query->result_array();
		}

		public function get_penempatan($id){			
			$query = $this->db->get_where('ci_penempatan', array('user_id' => $id));
			return $result = $query->result_array();
		}

	}

?>