<?php
	class Penelitian_model extends CI_Model{	
		
		public function get_penelitian($status){
			
			
			 if($this->session->userdata('id_prodi')==0)
			{
			
			$this->db->select('penelitian.*,ci_users.firstname ,prodi.prodi');
			$this->db->from('penelitian');	
			$this->db->join('ci_users', 'ci_users.id = penelitian.id_dosen ', 'left');
			$this->db->join('prodi', 'prodi.id_prodi = penelitian.id_prodi ', 'left');
			

			//cek pada url jika kategorinya kosong, maka menampilkan semua penelitian, jika ada isinya maka menampilkan sesuai isinya
			//http://localhost/sipasca/penelitian/[kategorinya] 

			/*if($status != '') {		
				$this->db->where('status', $status);
			}*/
			$this->db->order_by('id_penelitian', 'ASC');
			$query = $this->db->get();

			return $result = $query->result_array();	
					 
			}
			
			
			elseif($this->session->userdata('is_admin')==4)
			{
		
			$this->db->select('penelitian.*,ci_users.firstname');
			$this->db->from('penelitian');	
			$this->db->join('ci_users', 'ci_users.id = penelitian.id_dosen ', 'left');
			
			$this->db->where('penelitian.id_dosen', $this->session->userdata('user_id'));

			$this->db->order_by('id_penelitian', 'ASC');
			$query = $this->db->get();

			return $result = $query->result_array();	
			
			}
			
			
			
			
			else
			{
		
			$this->db->select('penelitian.*,ci_users.firstname');
			$this->db->from('penelitian');	
			$this->db->join('ci_users', 'ci_users.id = penelitian.id_dosen ', 'left');
			
			$this->db->where('penelitian.id_prodi', $this->session->userdata('id_prodi'));

			$this->db->order_by('id_penelitian', 'ASC');
			$query = $this->db->get();

			return $result = $query->result_array();	
			
			}
			
			}
		
		
		
		
			public function detail_penelitian($id_penelitian)
			{
			return $this->db->query("select a.*,b.prodi, c.firstname as nama_dosen , c.photo, d.firstname as nama_pengupload from penelitian a
		
			left join prodi b on a.id_prodi=b.id_prodi
		
			left join ci_users c on a.id_dosen=c.id
		
			left join ci_users d on a.id_pengupload=d.id

		  	where a.id_penelitian='$id_penelitian' ");

	
			}
		
		
			public function dokumentasi_kegiatan($id_penelitian)
			{
			return $this->db->query("select * from dokumentasi_kegiatan  where id_penelitian='$id_penelitian' ");

			}
		
		
			public function update_penelitian($data, $where)
			{
			return $this->db->update('penelitian', $data, $where);
			}		
		
		
			public function dosen()
			{
		 	if($this->session->userdata('id_prodi')==0)
			{	
			return $this->db->query("select * from ci_users  where is_admin=4 ");
			}
			else
			{
			return $this->db->query("select * from ci_users  where is_admin=4 and id_prodi='".$this->session->userdata('id_prodi')."'");
			}

			}
	
			public function tambah($data){
				return $this->db->insert('penelitian', $data);
			}
			
			public function tambah_kegiatan_proses($data){
				return $this->db->insert('dokumentasi_kegiatan', $data);
			}
		
		
		
		
	}

?>
