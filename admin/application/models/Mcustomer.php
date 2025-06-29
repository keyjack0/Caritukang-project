<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 
class Mcustomer extends CI_Model{
	function tampil() {
		$q = $this->db->get('customer');
		$d = $q->result_array();
		return $d;
	}

	function detail($id_customer) {
		$this->db->where('id_customer', $id_customer);
		$q = $this->db->get('customer');
		$d = $q->row_array();

		return $d;
	}

	// function jumlah_customer_distrik() {
	// 	$q = $this->db->query("SELECT COUNT(*) as jumlah, nama_distrik_customer FROM `customer` GROUP BY nama_distrik_customer");
	// 	$d = $q->result_array();
	// 	return $d;
	// }
}
?>
