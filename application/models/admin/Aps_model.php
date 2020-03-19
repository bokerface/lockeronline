<?php
class Aps_model extends CI_Model
{
	public function get_fakultas_by_id($id)
	{
		$query = $this->db->get_where('kategori_dokumen', array('id' => $id));

		if ($query->num_rows()>0) {
			return $query->row_array();	
		} else {
			redirect(base_url('admin/aps/not_found'));
		}
	}

	public function ambil_prodi($fakultas)
	{
		if ($fakultas == '') {
			$query = $this->db->query("select id,nama_prodi,id_fakultas,singkatan_prodi,(SELECT singkatan from fakultas WHERE id = id_fakultas) AS fakultas_singkatan from prodi WHERE id_fakultas = 'any' order by sort asc");
			redirect(base_url('admin/aps/not_found'));
		} else {
			$query = $this->db->query('select id,nama_prodi,id_fakultas,singkatan_prodi,(SELECT singkatan from fakultas WHERE id = id_fakultas) AS fakultas_singkatan from prodi WHERE id_fakultas =' . $fakultas . ' order by sort asc');
			return $query->result_array();
		}
	} 

	public function get_dokumen_by_id($id)
	{
		$query = $this->db->get_where('dokumen_apt', array('id' => $id));
		return $query->row_array();
	}

	public function ambil_dokumen($prodi, $kategori)
	{
		$query = $this->db->get_where('dokumen_apt', array('id_prodi' => $prodi, 'id_kategori_dokumen' => $kategori));
		return $query->result_array();
	}

	public function add_dokumen($data)
	{
		return $this->db->insert('dokumen_apt', $data);
	}

	public function get_fakultas_by_prodi($prodi)
	{
		$query = $this->db->query("SELECT nama_fakultas, singkatan FROM `fakultas` 
			INNER JOIN prodi
			ON fakultas.id = prodi.id_fakultas AND prodi.id= " . $prodi);
		return $query->row_array();
	}
}
