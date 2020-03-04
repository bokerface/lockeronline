<?php
	class Siswa_model extends CI_Model{

		public function ambil_siswa(){ 

			$query = $this->db->get('siswa');
			
			return $query->result_array();
			
		}

		public function add_siswa($data)
		{
			return $this->db->insert('siswa', $data);
		}

		public function get_user_by_id($id) 
		{
			$query = $this->db->get_where('siswa', array('id_siswa' => $id));
			return $result = $query->row_array();
		}
 
		public function edit_siswa($data,$id)
		{
			$this->db->where('id_siswa', $id);
			return $this->db->update('siswa', $data);
		}
	}

?>
