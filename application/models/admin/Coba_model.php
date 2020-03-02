<?php
	class Coba_model extends CI_Model{

		public function ambil_coba(){

			//$query = $this->db->query('select * from coba where id_coba=34');
			$query = $this->db->get('coba');
			
			return $query->result_array();
			
		}

		

	}

?>