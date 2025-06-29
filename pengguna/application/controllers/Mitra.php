<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mmitra');
        $this->load->model('Mkeahlian');
        $this->load->model('Mperan');
        // Ambil data 
        $data['peran'] = $this->Mperan->get_all();
        $data['keahlian'] = $this->Mkeahlian->get_all();

        $this->form_validation->set_rules('nama_mitra', 'Nama Lengkap', 'required|is_unique[mitra.nama_mitra]');
        $this->form_validation->set_rules('usia_mitra', 'Usia ', 'required');
        $this->form_validation->set_rules('wa_mitra', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kabupaten/kota', 'kabupaten/kota', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
		$this->form_validation->set_rules('pengalaman_mitra', 'Pengalaman ', 'required');


		// $this->form_validation->set_rules('peran', 'peran', 'required');
		// $this->form_validation->set_rules('keahlian', 'keahlian', 'required');



		$this->form_validation->set_message('required', '%s wajib di isi');
		$this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

        $inputan = $this->input->post();


        if ($this->form_validation->run() == TRUE) {
            
            $inputan['nama_mitra'] = $this->input->post('nama_mitra');
            $inputan['usia_mitra'] = $this->input->post('usia_mitra');
            $inputan['wa_mitra'] = $this->input->post('wa_mitra');
            $inputan['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $inputan['kabupaten/kota'] = $this->input->post('kabupaten/kota');
            $inputan['kecamatan'] = $this->input->post('kecamatan');
            $inputan['pengalaman_mitra'] = $this->input->post('pengalaman_mitra');		


			$this->Mmitra->simpan($inputan);
			$this->session->set_flashdata('pesan_sukses', 'anda telah berhasil mendaftar sebagai mitra cari tukang');

			
			redirect('beranda','refresh');
			
			
		}

        $this->load->view('header');
        $this->load->view('form_mitra', $data);
        $this->load->view('footer');
    }
}
