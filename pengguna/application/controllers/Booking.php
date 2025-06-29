<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbooking');
        $this->load->model('Mkeahlian');
    }
    public function index()
    {
        $data['keahlian'] = $this->Mkeahlian->get_all();
        $data['customer'] = [
            'nama_booking' => $this->session->userdata('nama_customer'),
            'wa_booking' => $this->session->userdata('wa_customer'),
        ];

        $this->form_validation->set_rules('kabupaten/kota', 'kabupaten/kota', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('tanggal_booking', 'tanggal', 'required');
        $this->form_validation->set_rules('id_keahlian', 'Jenis Keahlian', 'required');

        $this->form_validation->set_message('required', '%s wajib di isi');
        $this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

        $data_booking = $this->input->post();
        if ($this->form_validation->run() == TRUE) {

            $id_keahlian = $this->input->post('id_keahlian');
            $keahlian = $this->Mkeahlian->get_by_id($id_keahlian);

            $data_booking = [
                'id_customer'      => $this->session->userdata('id_customer'),
                'id_keahlian'      => $id_keahlian,
                'nama_booking'     => $this->session->userdata('nama_customer'),
                'wa_booking'       => $this->session->userdata('wa_customer'),
                'kabupaten/kota'   => $this->input->post('kabupaten/kota'),
                'kecamatan'        => $this->input->post('kecamatan'),
                'alamat_lengkap'   => $this->input->post('alamat_lengkap'),
                'tanggal_booking'  => $this->input->post('tanggal_booking'),
                'harga_layanan'    => $keahlian['harga_per_hari'],
                'deskripsi_booking'  => $this->input->post('deskripsi_booking'),
                
            ];

            $this->Mbooking->simpan($data_booking);
            $this->session->set_flashdata('pesan_sukses', 'Data booking tersimpan');
            return redirect('notifikasi', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('form_booking', $data);
        $this->load->view('footer');
    }

   
}
