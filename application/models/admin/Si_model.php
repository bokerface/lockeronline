<?php
	class SI_model extends CI_Model{

		public function ambil_dokumen($id_kategori){ 
			$query = $this->db->get_where('dokumen_apt',array('id_kategori_dokumen'=>$id_kategori,'id_prodi'=>0,'internasional'=>'si'));
			return $query->result_array();
		} 

		public function get_dokumen_by_id($id)
		{
			$query = $this->db->get_where('dokumen_apt', array('id' => $id));
			return $result = $query->row_array(); 
		}
 
		public function ambil_kategori()
		{
			$query = $this->db->query('select kategori_dokumen.id as a, kategori_dokumen.kategori_dokumen as nama_kategori,(select count(id) from dokumen_apt where id_kategori_dokumen = a) as jumlah from `kategori_dokumen`');
			return $result = $query->result_array();
		}

		public function get_kategori_by_id($id)
		{
			$query = $this->db->get_where('kategori_dokumen', array('id' => $id));
			return $result = $query->row_array();
		}

		public function add_evaluasi_borang($data)
		{
			return $this->db->insert('dokumen_apt', $data);
		}

		public function add_kategori($data)
		{
			return $this->db->insert('kategori_dokumen',$data);
		}

		public function edit_kategori($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('kategori_dokumen', $data);
		}

	}

?>
