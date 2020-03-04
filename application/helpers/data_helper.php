<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    // -----------------------------------------------------------------------------
    function getUserbyId($id){
        $CI = & get_instance();
        return $CI->db->get_where('ci_users', array('id' => $id))->row_array()['firstname'];
    }

    // function getProdiById($id){
    //     $CI = & get_instance();
    //     return $CI->db->get_where('prodi', array('id_prodi' => $id))->row_array()['prodi'];
    // }

	function menu_category()
	{
		$CI = & get_instance();
		$query = $CI->db->get('kategori_dokumen');
		return $query->result_array();
	}
  
	function menu_fakultas()
	{
		$CI = & get_instance();
		$query = $CI->db->query('select * from fakultas where id !=8');
		return $query->result_array();
	}

	function breadcrumb($kategori)
	{
		$CI = & get_instance();
		$query = $CI->db->query('select kategori_dokumen from kategori_dokumen where id='.$kategori);
		$nama_kategori = $query->row_array();
		return $nama_kategori['kategori_dokumen'];
	}

	function prodi($prodi)
	{
		$CI = & get_instance();
		$query = $CI->db->query('select nama_prodi from prodi where id='.$prodi);
		$nama_prodi = $query->row_array();
		return $nama_prodi['nama_prodi'];
	}

?> 
