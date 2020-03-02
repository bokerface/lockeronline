<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Apt extends MY_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/apt_model','apt_model');
		}

		public function index()
		{
			redirect(base_url('admin/apt/dokumen/evaluasi'));
		}

		public function dokumen($id_kategori){
			// $this->db->select('id');
			// $query = $this->db->get_where('kategori_dokumen',array('singkatan'=>$kategori));
			// $kategori = $query->row_array();
			$data['ambil_dokumen'] = $this->apt_model->ambil_dokumen($id_kategori);
			$data['view'] = 'admin/apt/index';
			$this->load->view('admin/layout', $data);
		}	

		public function led()
		{
			$data['ambil_lampiran_evaluasi'] = $this->apt_model->ambil_lampiran_evaluasi();
			$data['view'] = 'admin/apt/evaluasi/lampiran/index';
			$this->load->view('admin/layout', $data);
		}
 
		public function kategori()
		{
			$data['ambil_kategori'] = $this->apt_model->ambil_kategori();
			$data['view'] = 'admin/apt/kategori/index_kategori';
			$this->load->view('admin/layout', $data);
		}

		public function tambah()
		{
			$data['view']='admin/apt/evaluasi/borang/tambah_borang';
			$this->load->view('admin/layout',$data);
		}

		public function store_borang($kategori)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('nama', 'Nama Dokumen', 'trim|required');
				$this->form_validation->set_rules('deskripsi', 'Deskripsi Dokumen', 'trim|required');
				$this->form_validation->set_rules('tahun', 'Tahun Dokumen', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view']='admin/apt/evaluasi/borang/tambah_borang';
					$this->load->view('admin/layout', $data);
				}
				else{

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
						'file' => $upload_path.'/'.$dokumen['file_name'],
					);

					$data = $this->security->xss_clean($data);
					$result = $this->apt_model->add_evaluasi_borang($data);
					if($result){
						$this->session->set_flashdata('msg', 'Dokumen baru berhasil ditambahkan!');
						redirect(base_url('admin/apt/dokumen/'.$kategori));
					}
				}
			}
			else {
				$data['view']='admin/apt/evaluasi/borang/tambah_borang';
				$this->load->view('admin/layout', $data);
			}

		}

	}
	
?>
