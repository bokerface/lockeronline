<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Siswa extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/siswa_model','siswa_model');
		}

		public function index( ){
			$data['ambil_siswa'] = $this->siswa_model->ambil_siswa();
			$data['view'] = 'admin/siswa/index';
			$this->load->view('admin/layout', $data);
		}	


		public function tambah(){
			$data['view'] = 'admin/siswa/tambah'; 
			$this->load->view('admin/layout', $data);
		}	


		public function store()
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('nama', 'Name', 'trim|required');
				$this->form_validation->set_rules('telp', 'No.Telp', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Address', 'trim|required');
				$this->form_validation->set_rules('umur', 'Age', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/siswa/tambah';
					$this->load->view('admin/layout', $data);
				}
				else{

					$upload_path = './uploads/fotoProfil';

					if (!is_dir($upload_path)) {
							mkdir($upload_path, 0777, TRUE);					
					}
					//$newName = "hrd-".date('Ymd-His');
					$config = array(
							'upload_path' => $upload_path,
							'allowed_types' => "jpg|png|jpeg",
							'overwrite' => FALSE,				
					);					 

					$this->load->library('upload', $config);
					$this->upload->do_upload('foto_profil');
					$foto_profil = $this->upload->data();

					$data = array(
						'nama' => $this->input->post('nama'),
						'telp' => $this->input->post('telp'),
						'alamat' => $this->input->post('alamat'),
						'umur' => $this->input->post('umur'),
						'photo' => $upload_path.'/'.$foto_profil['file_name'],
					);

					$data = $this->security->xss_clean($data);
					$result = $this->siswa_model->add_siswa($data);
					if($result){
						$this->session->set_flashdata('msg', 'Siswa berhasil ditambahkan!');
						redirect(base_url('admin/siswa'));
					}
				}
			}
			else {
				$data['view'] = 'admin/siswa/tambah';
				$this->load->view('admin/layout', $data);
			}
		} 

		public function destroy($id)
		{
			$this->db->delete('siswa', array('id_siswa' => $id));
			$this->session->set_flashdata('msg', 'Pengguna berhasil dihapus!');
			redirect(base_url('admin/siswa'));
		}

		public function show($id)
		{
			$data['siswa'] = $this->siswa_model->get_user_by_id($id);
			
			$data['view'] = 'admin/siswa/detail';
			$this->load->view('admin/layout', $data);
		}
 
		public function update($id)
		{
			$data['siswa'] = $this->siswa_model->get_user_by_id($id);

			$data['view'] = 'admin/siswa/update';
			$this->load->view('admin/layout',$data);
		}

		public function update_post($id)
		{
			if ($this->input->post('submit')) {
				echo $this->input->post('foto_profil');
				$this->form_validation->set_rules('nama', 'Name', 'trim|required');
				$this->form_validation->set_rules('telp', 'No.Telp', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Address', 'trim|required');
				$this->form_validation->set_rules('umur', 'Age', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/siswa/update';
					$this->load->view('admin/layout', $data);
				} else 
				{
					$upload_path = './uploads/fotoProfil';

						if (!is_dir($upload_path)) {
						     mkdir($upload_path, 0777, TRUE);					
						}
						$config = array(
								'upload_path' => $upload_path,
								'allowed_types' => "jpg|png|jpeg",
								'overwrite' => FALSE,				
						);					

						$this->load->library('upload', $config);
						$this->upload->do_upload('foto_profil');
					    $foto_profil = $this->upload->data();

					$data = array(
						'nama' => $this->input->post('nama'),
						'telp' => $this->input->post('telp'),
						'alamat' => $this->input->post('alamat'),
						'umur' => $this->input->post('umur'),
						'photo' => $upload_path.'/'.$foto_profil['file_name'],
					);
					print_r($data);
					$data = $this->security->xss_clean($data);
					$result = $this->siswa_model->edit_siswa($data,$id);
					if($result){
						$this->session->set_flashdata('msg', 'data siswa berhasil diubah!');
						redirect(base_url('admin/siswa'));
					}
				}
			}
			else {
				$data['siswa'] = $this->siswa_model->get_user_by_id($id);	
				$data['view'] = 'admin/siswa/update';
				$this->load->view('admin/layout', $data);
			}
		}

	}
