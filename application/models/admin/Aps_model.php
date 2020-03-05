<?php
	class Aps_model extends CI_Model 
	{
		public function get_fakultas_by_id($id)
		{
			$query = $this->db->get_where('kategori_dokumen', array('id' => $id));
			return $result = $query->row_array();
		}

		public function ambil_prodi($fakultas){
			$query = $this->db->query('select id,nama_prodi,id_fakultas,singkatan_prodi,(SELECT singkatan from fakultas WHERE id = id_fakultas) AS fakultas_singkatan from prodi WHERE id_fakultas ='.$fakultas);
			return $query->result_array();
		}

		public function ambil_prodi_by_singkatan($singkatan)
		{
			
		}

		public function ambil_dokumen($prodi,$kategori){ 

			$query = $this->db->get_where('dokumen_apt',array('id_prodi'=>$prodi,'id_kategori_dokumen'=>$kategori));
			return $query->result_array();
		}

		public function add_dokumen($data)
		{
			return $this->db->insert('dokumen_apt', $data);
		}

		public function get_fakultas_by_prodi($prodi)
		{
			$query = $this->db->query("SELECT singkatan FROM `fakultas` 
			INNER JOIN prodi
			ON fakultas.id = prodi.id_fakultas AND prodi.id= " . $prodi);
			return $query->result_array();
		}
	}
	
?>
