<?php defined('BASEPATH') or exit('No direct script access allowed');

class SI extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/si_model', 'si_model');
	}

	public function details($id)
	{
		$data['dokumen'] = $this->si_model->get_dokumen_by_id($id);
		$data['view'] = 'admin/borang/detail_dokumen.php';
		$this->load->view('admin/layout', $data);
	}

	public function index() 
	{
		redirect(base_url('admin/internasional/dokumen/14'));
	}

	public function dokumen($id_kategori)
	{
		$data['ambil_dokumen'] = $this->si_model->ambil_dokumen($id_kategori);
		$data['view'] = 'admin/borang/si/index';
		$this->load->view('admin/layout', $data);
	}

	public function tambah()
	{ 
		$data['view'] = 'admin/borang/si/tambah_dokumen';
		$this->load->view('admin/layout', $data);
	}

	public function store($kategori)
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama', 'Nama Dokumen', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi Dokumen', 'trim|required');
			$this->form_validation->set_rules('tahun', 'Tahun Dokumen', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/borang/si/tambah_borang';
				$this->load->view('admin/layout', $data);
			} else {

				$upload_path = './uploads/dokumen';

				if (!is_dir($upload_path)) {
					mkdir($upload_path, 0777, TRUE);
				}
				$config = array(
					'upload_path' => $upload_path,
					'allowed_types' => "docx|pdf|",
					'overwrite' => FALSE,
				);

				$this->load->library('upload', $config);
				$this->upload->do_upload('dokumen');
				$dokumen = $this->upload->data();

				// $this->db->select('id');
				// $query = $this->db->get_where('kategori_dokumen',array('singkatan'=>$kategori));
				// $id_kategori = $query->row_array();

				$data = array(
					'nama_dokumen' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'id_prodi' => '',
					'id_kategori_dokumen' => $kategori,
					'tahun' => $this->input->post('tahun'),
					'file' => $upload_path . '/' . $dokumen['file_name'],
					'internasional' => 'si',
				);

				$data = $this->security->xss_clean($data);
				$result = $this->si_model->add_evaluasi_borang($data);
				if ($result) {
					$this->session->set_flashdata('msg', 'Dokumen baru berhasil ditambahkan!');
					redirect(base_url('admin/si/dokumen/' . $kategori));
				}
			}
		} else {
			$data['view'] = 'admin/borang/si/tambah_dokumen';
			$this->load->view('admin/layout', $data);
		}
	}

	public function destroy($id,$kategori)
	{
		$this->db->delete('dokumen_apt', array('id' => $id));
		$this->session->set_flashdata('msg', 'Dokumen berhasil dihapus!');
		redirect(base_url('admin/si/dokumen/'.$kategori));
	}
}
