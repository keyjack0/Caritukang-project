<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ulasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mulasan');
    }

    public function index()
    {

        // $data['ulasan'] = $this->Mulasan->tampil()
        $data['ulasan'] = $this->Mulasan->dapatkan_semua_ulasan();

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/detail_ulasan', $data);
    }
 
    public function tambah()  
    {  
        $customer_id = $this->session->userdata('id_customer');   
      

        $jumlah_booking = $this->Mulasan->hitung_booking($customer_id);    
        $jumlah_ulasan = $this->Mulasan->hitung_ulasan_per_booking($customer_id);  
      
        if ($jumlah_ulasan >= $jumlah_booking) {  
            $this->session->set_flashdata('message', 'Anda belum melakukan booking');  
            redirect('ulasan'); // Redirect ke halaman ulasan  
            return;  
        }  
      
        // Cek apakah form disubmit  
        if ($this->input->post()) {  
            $data = [  
                'jumlah_ulasan' => $this->input->post('jumlah_ulasan'),  
                'deskripsi_ulasan' => $this->input->post('deskripsi_ulasan'),  
                'waktu_ulasan' => date('Y-m-d H:i:s'),  
                'id_customer' => $customer_id   
            ];  
      
            if ($this->Mulasan->tambah($data)) {  
                $this->session->set_flashdata('pesan_sukses', 'ulasan di tambahkan');
                redirect('ulasan');   
            } else {  
                echo "Gagal menambahkan ulasan!";  
            }  
        } else {  
            // Jika tidak disubmit, tampilkan form  
            $this->load->view('header');  
            $this->load->view('profil/side_profil');  
            $this->load->view('profil/tambah_ulasan');  
        }  
    }  
    
    


    // Menghapus ulasan  
    public function hapus($id)
    {
        if ($this->Mulasan->hapus($id)) {
            redirect('ulasan'); 
        } else {
            echo "Gagal menghapus ulasan!";
        }
    }

    public function ubah($id) {  
        $customer_id = $this->session->userdata('id_customer'); 
        $ulasan = $this->Mulasan->dapatkan_id_ulasan($id); 
        if ($ulasan['id_customer'] != $customer_id) {  
            show_error('Anda tidak memiliki akses untuk mengubah ulasan ini.');  
        }  
   
        // Cek apakah form disubmit  
        if ($this->input->post()) {  
            
            $data = [  
                'jumlah_ulasan' => $this->input->post('jumlah_ulasan'),  
                'deskripsi_ulasan' => $this->input->post('deskripsi_ulasan'),  
                'waktu_ulasan' => date('Y-m-d H:i:s')  
            ];  
   
            if ($this->Mulasan->ubah($id, $data)) {  
                redirect('ulasan');   
            } else {  
                echo "Gagal mengubah ulasan!";  
            }  
        } else {   
            $data['ulasan'] = $ulasan; 
   
            $this->load->view('header');  
            $this->load->view('profil/side_profil');  
            $this->load->view('profil/ubah_ulasan', $data);  
        }  
    }  
 
}
