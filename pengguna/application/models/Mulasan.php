<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mulasan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Mengambil semua ulasan  
    public function dapatkan_semua_ulasan()
    {
        $this->db->select('ulasan.*, customer.nama_customer');
		$this->db->from('ulasan');
		$this->db->join('customer', 'ulasan.id_customer = customer.id_customer', 'left');
        $q = $this->db->get();
		return $q->result_array();
    }

    // Mengambil ulasan berdasarkan ID  
    public function dapatkan_id_ulasan($id)
    {
        $this->db->where('id_ulasan', $id);
        $query = $this->db->get('ulasan');
        return $query->row_array();
    }

    public function tambah($data)
    {
        return $this->db->insert('ulasan', $data);
    }
    public function ubah($id, $data)
    {
        $this->db->where('id_ulasan', $id);
        return $this->db->update('ulasan', $data);
    }
    public function hapus($id)
    {
        return $this->db->delete('ulasan', array('id_ulasan' => $id));
    }

    public function cek_ulasan_terakhir($id_customer)
    {
        $this->db->where('id_customer', $id_customer);
        $query = $this->db->get('ulasan'); 
        return $query->num_rows() > 0; 
    }

    public function hitung_booking($customer_id)
    {

        $this->db->where('id_customer', $customer_id);
        return $this->db->count_all_results('booking'); 
    }

    public function hitung_ulasan_per_booking($customer_id)
    {
    
        $this->db->where('id_customer', $customer_id);
        return $this->db->count_all_results('ulasan'); 
    }
}
