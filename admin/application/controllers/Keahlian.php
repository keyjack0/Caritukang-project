<?php

class Keahlian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {

        // echo $this->config->item('assets_kategori');

        // exit();

        $this->load->model('Mkeahlian');
        $data['keahlian'] = $this->Mkeahlian->tampil();


        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('keahlian_tampil', $data);
        $this->load->view('footer');
    }

    function ubah($id_keahlian)
    {

        $this->load->model("Mkeahlian");
        $data['keahlian'] = $this->Mkeahlian->detail($id_keahlian);

        $inputan = $this->input->post();
        if ($inputan) {
            $this->Mkeahlian->ubah($inputan, $id_keahlian);

            $this->session->set_flashdata('pesan_sukses', 'keahlian telah di ubah');

            redirect('keahlian', 'refresh');
        }

        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('keahlian_ubah', $data);
        $this->load->view('footer');
    }

    function tambah() {
        $inputan = $this->input->post();

		$this->form_validation->set_rules("nama_keahlian","Nama keahlian","required");


		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Mkeahlian');
			$this->Mkeahlian->simpan($inputan);

			$this->session->set_flashdata('pesan_sukses','Data keahlian tersimpan');

			redirect('keahlian','refresh');
		}

		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('keahlian_tambah');
		$this->load->view('footer');
    }

    function hapus($id_keahlian) {
		$this->load->model("Mkeahlian");
		$this->Mkeahlian->hapus($id_keahlian);
		$this->session->set_flashdata('pesan_sukses','Data keahlian terhapus');
		redirect('keahlian','refresh');
	}
}
