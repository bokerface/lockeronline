<?php
	class Dashboard_model extends CI_Model{

		public function get_all_users(){
			return $this->db->count_all('ci_users');
		}
		public function get_active_users(){
			$this->db->where('is_active', 1);
			return $this->db->count_all_results('ci_users');
		}
		public function get_deactive_users(){
			$this->db->where('is_active', 0);
			return $this->db->count_all_results('ci_users');
		}

		public function get_all_fakultas(){
			$this->db->where('kode =', 'f');
			return $this->db->count_all_results('ci_unit_kerja');
		}

		public function get_all_prodi(){
			$this->db->where('kode =', 'p');
			return $this->db->count_all_results('ci_unit_kerja');
		}

		public function get_all_biro(){
			$this->db->where('kode =', 'b');
			return $this->db->count_all_results('ci_unit_kerja');
		}
	}

?>
