<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Dosen extends MY_Controller {
		public function __construct(){
			parent::__construct();			
		}

		public function index(){
			$data['view'] = 'dashboard_dosen';
			$this->load->view('layout', $data);
		}

	}

?>	