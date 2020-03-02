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
		
		
		
		
		public function jumlah_penelitian(){
			
			if($this->session->userdata('id_prodi')==0)
			{	
			return $this->db->query("select * from penelitian");
			}
			elseif($this->session->userdata('is_admin')==4)
			{	
			return $this->db->query("select * from penelitian where id_dosen='".$this->session->userdata('user_id')."'");
			}
			else
			{
			return $this->db->query("select * from penelitian  where id_prodi='".$this->session->userdata('id_prodi')."'");
			}
		}
	}
?>
