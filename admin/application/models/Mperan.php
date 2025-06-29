<?php 
class Mperan extends CI_Model {
	function tampil() {
		$data = $this->db->get('peran');
		$dt = $data->result_array();
		return $dt;
	}

    function detail($id_peran)
	{
		$this->db->where('id_peran', $id_peran);
		$q = $this->db->get('peran');
		$d = $q->row_array();

		return $d;
	}

    function simpan($inputan)
	{
		$this->db->insert('peran', $inputan);
	}

    function ubah($inputan, $id_peran)
	{

		$this->db->where('id_peran', $id_peran);
		$this->db->update('peran', $inputan);
	}

    function hapus($id_peran)
	{
		$this->db->Where('id_peran', $id_peran);
		$this->db->delete('peran');
	}


}