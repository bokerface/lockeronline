<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/apt_model','apt_model');
	}

	public function tambah()
	{
		$data['view'] = 'admin/borang/kategori/tambah_kategori';
		$this->load->view('admin/layout', $data);
	}

	public function update($id)
	{
		$data['kategori'] = $this->apt_model->get_kategori_by_id($id);

		$data['view'] = 'admin/borang/kategori/edit_kategori';
		$this->load->view('admin/layout', $data);
	}
	 
	public function post_update($id)
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required');
			$this->form_validation->set_rules('singkatan', 'Singkatan', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/borang/kategori/edit_kategori';
				$this->load->view('admin/layout', $data);
			} else 
			{

				$data = array(
					'kategori_dokumen' => $this->input->post('nama'),
					'singkatan' => $this->input->post('singkatan'),
				);
				// print_r($data);
				$data = $this->security->xss_clean($data);
				$result = $this->apt_model->edit_kategori($data,$id);
				if($result){
					$this->session->set_flashdata('msg', 'data kategory berhasil diubah!');
					redirect(base_url('admin/apt/kategori'));
				}
			}
		}
		else {
			$data['siswa'] = $this->siswa_model->get_kategori_by_id($id);	
			$data['view'] = 'admin/borang/kategori/edit_kategori';
			$this->load->view('admin/layout', $data);
		}
	}

	public function store_kategori()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required');
			$this->form_validation->set_rules('singkatan', 'Singkatan', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/borang/kategori/tambah_kategori';
				$this->load->view('admin/layout', $data);
			}
			else{

				$data = array(
					'kategori_dokumen' => $this->input->post('nama'),
					'singkatan' => $this->input->post('singkatan'),
				);

				print_r($data);

				$data = $this->security->xss_clean($data);
				$result = $this->apt_model->add_kategori($data);
				if($result){
					$this->session->set_flashdata('msg', 'Kategori baru berhasil ditambahkan!');
					redirect(base_url('admin/kategori'));
				}
			}
		}
		else {
			$data['view'] = 'admin/borang/kategori/tambah_kategori';
			$this->load->view('admin/layout', $data);
		}
	}
}


?>
