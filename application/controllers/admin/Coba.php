<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Coba extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('coba_model', 'coba');
		}

		public function index( ){
			// periksa kategori
			$data['ambil_coba'] = $this->coba->ambil_coba();
			$data['view'] = 'coba/index';
			$this->load->view('admin/layout', $data);
		}	

		public function tambah(){
			// periksa kategori
			$data['view'] = 'coba/tambah';
			$this->load->view('admin/layout', $data);
		}	
	}
?>
