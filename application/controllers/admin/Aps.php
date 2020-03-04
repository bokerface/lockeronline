<?php defined('BASEPATH') or exit('No direct script access allowed');

class Aps extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/aps_model', 'aps_model');
	}

	public function index()
	{
		redirect(base_url('admin/aps/fakultas/ft'));
	}

	public function fakultas($fakultas)
	{
		$this->db->select('id');
		$query = $this->db->get_where('fakultas', array('singkatan' => $fakultas));
		$id_fakultas = $query->row_array();
		$data['ambil_prodi'] = $this->aps_model->ambil_prodi($id_fakultas['id']);
		$data['singkatan_fakultas'] = $fakultas;
		$data['view'] = 'admin/aps/index';
		$this->load->view('admin/layout', $data);
	}

	public function dokumen($prodi, $kategori)
	{
		$this->db->select('*');
		$data['ambil_dokumen'] = $this->aps_model->ambil_dokumen($prodi, $kategori);
		$data['view'] = 'admin/aps/document_type';
		$this->load->view('admin/layout', $data);
	} 

	public function tambah()
	{
		$data['view'] = 'admin/aps/tambah_dokumen';
		$this->load->view('admin/layout', $data);
	}

	public function store($prodi, $kategori)
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama', 'Nama Dokumen', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi Dokumen', 'trim|required');
			$this->form_validation->set_rules('tahun', 'Tahun Dokumen', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/apt/evaluasi/borang/tambah_borang';
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
					'id_prodi' => $prodi,
					'id_kategori_dokumen' => $kategori,
					'tahun' => $this->input->post('tahun'),
					'file' => $upload_path . '/' . $dokumen['file_name'],
				);

				$data = $this->security->xss_clean($data);
				$result = $this->aps_model->add_dokumen($data);
				if ($result) {
					$this->session->set_flashdata('msg', 'Dokumen baru berhasil ditambahkan!');
					redirect(base_url('admin/aps/dokumen/' . $prodi . '/' . $kategori));
				}
			}
		} else {
			$data['view'] = 'admin/aps/tambah_dokumen';
			$this->load->view('admin/layout', $data);
		}
	}

	public function destroy($id,$prodi,$kategori)
	{
		$this->db->select('file');
		$query = $this->db->get_where('dokumen_apt',array('id'=>$id));
		$path_file = $query->row_array();
		unlink('lockeronline/application/'.$path_file);
		//print_r($path_file);
		$this->db->delete('dokumen_apt', array('id' => $id));
		$this->session->set_flashdata('msg', 'Dokumen berhasil dihapus!');
		redirect(base_url('admin/aps/dokumen/'.$prodi.'/'.$kategori));
	}
}
