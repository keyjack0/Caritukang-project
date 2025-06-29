<?php

class Peran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {

        // echo $this->config->item('assets_kategori');

        // exit();

        $this->load->model('Mperan');
        $data['peran'] = $this->Mperan->tampil();


        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('peran_tampil', $data);
        $this->load->view('footer');
    }

    function ubah($id_peran)
    {

        $this->load->model("Mperan");
        $data['peran'] = $this->Mperan->detail($id_peran);

        $inputan = $this->input->post();
        if ($inputan) {
            $this->Mperan->ubah($inputan, $id_peran);

            $this->session->set_flashdata('pesan_sukses', 'peran telah di ubah');

            redirect('peran', 'refresh');
        }

        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('peran_ubah', $data);
        $this->load->view('footer');
    }

    function tambah() {
        $inputan = $this->input->post();

		$this->form_validation->set_rules("nama_peran","Nama peran","required");


		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Mperan');
			$this->Mperan->simpan($inputan);

			$this->session->set_flashdata('pesan_sukses','Data peran tersimpan');

			redirect('peran','refresh');
		}

		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('peran_tambah');
		$this->load->view('footer');
    }

    function hapus($id_peran) {
		$this->load->model("Mperan");
		$this->Mperan->hapus($id_peran);
		$this->session->set_flashdata('pesan_sukses','Data peran terhapus');
		redirect('peran','refresh');
	}
}
