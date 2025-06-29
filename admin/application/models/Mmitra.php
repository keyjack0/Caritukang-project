	<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	class Mmitra extends CI_Model
	{
		function tampil()
		{
			// $q = $this->db->get('mitra');
			// $d = $q->result_array();
			// return $d;

			$this->db->select('mitra.*, peran.nama_peran, keahlian.nama_keahlian');
			$this->db->from('mitra');
			$this->db->join('peran', 'mitra.id_peran = peran.id_peran', 'left'); // Sesuaikan kolom relasi
			$this->db->join('keahlian', 'mitra.id_keahlian = keahlian.id_keahlian', 'left'); // Sesuaikan kolom relasi
			$q = $this->db->get();
			return $q->result_array();
		}

		function detail($id_mitra)
		{
			$this->db->where('id_mitra', $id_mitra);
			$q = $this->db->get('mitra');
			$d = $q->row_array();

			return $d;
		}

		function peran()
		{
			// $this->db->where('id_mitra', $id_mitra);
			$q = $this->db->get('peran');
			$d = $q->result_array();

			return $d;
		}

		function keahlian()
		{
			// $this->db->where('id_mitra', $id_mitra);
			$q = $this->db->get('keahlian');
			$d = $q->result_array();

			return $d;
		}


		public function update_mitra($id, $data) {  
			$this->db->where('id_mitra', $id);  
			return $this->db->update('mitra', $data);  
		} 

		function hapus($id_mitra)
		{
			$this->db->Where('id_mitra', $id_mitra);
			$this->db->delete('mitra');
		}
	}
