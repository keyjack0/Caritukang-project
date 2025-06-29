<?php 
class Mulasan extends CI_Model {
	function tampil() {

        $this->db->select('ulasan.*, customer.nama_customer');
		$this->db->from('ulasan');
		$this->db->join('customer', 'ulasan.id_customer = customer.id_customer', 'left'); // Sesuaikan kolom relasi
        $q = $this->db->get();
		return $q->result_array();
        
        // $data = $this->db->get('ulasan');
		// $dt = $data->result_array();
		// return $dt;
	}

}

?>