<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mtransaksi extends CI_Model
{

    public function cek_transaksi_by_booking($id_booking)
    {
        return $this->db->get_where('transaksi', ['id_booking' => $id_booking])->num_rows() > 0;
    }

    public function get_kode_pembayaran_by_booking($id_booking)
    {
        $this->db->select('kode_pembayaran');
        $this->db->from('transaksi');
        $this->db->where('id_booking', $id_booking);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->kode_pembayaran;
        } else {
            return null;
        }
    }


    public function insert_transaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }

    public function get_by_booking($id_booking)
    {
        return $this->db->get_where('transaksi', ['id_booking' => $id_booking])->row_array();
    }

    public function set_lunas($id_transaksi)
    {
        return $this->db->update('transaksi', [
            'status_transaksi' => 'settlement',
            'tanggal_transaksi' => date('Y-m-d H:i:s')
        ], ['id_transaksi' => $id_transaksi]);
    }

    public function get_transaksi_by_id_booking($id_booking)
{
    $this->db->where('id_booking', $id_booking);
    $query = $this->db->get('transaksi');
    return $query->row_array(); // atau ->row() jika kamu ingin objek
}




    
}
