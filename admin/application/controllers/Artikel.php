<?php
class Artikel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata("id_admin"))
		// {
		// 	redirect('/','refresh');
		// }
	}

	function index()
	{

		// echo $this->config->item('assets_artikel');

		// exit();

		$this->load->model('Martikel');
		$data['artikel'] = $this->Martikel->tampil();


		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('artikel_tampil',$data);
		$this->load->view('footer');

	}

	function tambah() {

		$inputan = $this->input->post();

		$this->form_validation->set_rules("judul_artikel","Judul artikel","required");


		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Martikel');
			$this->Martikel->simpan($inputan);

			$this->session->set_flashdata('pesan_sukses','Data artikel tersimpan');

			redirect('artikel','refresh');
		}

		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('artikel_tambah');
		$this->load->view('footer');
	}

	function hapus($id_artikel) {
		$this->load->model("Martikel");
		$this->Martikel->hapus($id_artikel);
		$this->session->set_flashdata('pesan_sukses','Data artikel terhapus');
		redirect('artikel','refresh');
	}

	function ubah($id_artikel) {

		$this->load->model("Martikel");
		$data['artikel'] = $this->Martikel->detail($id_artikel);

		$inputan = $this->input->post();
		if($inputan) {
			$this->Martikel->ubah($inputan, $id_artikel);

			$this->session->set_flashdata('pesan_sukses', 'artikel telah di ubah');

			redirect('artikel', 'refresh');
		}

		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('artikel_ubah',$data);
		$this->load->view('footer');
	}

	
}