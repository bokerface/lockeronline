<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


// -----------------------------------------------------------------------------
function getUserbyId($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('ci_users', array('id' => $id))->row_array()['firstname'];
}

// function getProdiById($id){
//     $CI = & get_instance();
//     return $CI->db->get_where('prodi', array('id_prodi' => $id))->row_array()['prodi'];
// }

function menu_category()
{
	$CI = &get_instance();
	$query = $CI->db->query('select * from kategori_dokumen where id != 18 and id != 19 and id != 20 order by sort asc');
	return $query->result_array();
}

function kategori_internasional()
{
	$CI = &get_instance();
	$query = $CI->db->query('select * from kategori_dokumen where id = 18 or id = 19 or id = 20');
	return $query->result_array();
}

function menu_fakultas()
{
	$CI = &get_instance();
	$query = $CI->db->query('select * from fakultas where id !=8 and id !=10 and id !=12');
	return $query->result_array();
}

function breadcrumb($kategori)
{
	$CI = &get_instance();
	$query = $CI->db->query('select kategori_dokumen from kategori_dokumen where id=' . $kategori);
	if ($query->num_rows() > 0) {
		$nama_kategori = $query->row_array();
		return $nama_kategori['kategori_dokumen'];
	} else {
		redirect(base_url('admin/aps/not_found'));
	}
}

function prodi($prodi)
{
	$CI = &get_instance();
	$query = $CI->db->query('select nama_prodi from prodi where id=' . $prodi);
	$nama_prodi = $query->row_array();
	return $nama_prodi['nama_prodi'];
}
