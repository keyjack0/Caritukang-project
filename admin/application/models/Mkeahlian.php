<?php 
class MKeahlian extends CI_Model {
	function tampil() {
		$data = $this->db->get('keahlian');
		$dt = $data->result_array();
		return $dt;
	}

    function detail($id_keahlian)
	{
		$this->db->where('id_keahlian', $id_keahlian);
		$q = $this->db->get('keahlian');
		$d = $q->row_array();

		return $d;
	}

    function simpan($inputan)
	{
		$this->db->insert('keahlian', $inputan);
	}

    function ubah($inputan, $id_keahlian)
	{

		$this->db->where('id_keahlian', $id_keahlian);
		$this->db->update('keahlian', $inputan);
	}

    function hapus($id_keahlian)
	{
		$this->db->Where('id_keahlian', $id_keahlian);
		$this->db->delete('keahlian');
	}


}