<?php
class Logout extends CI_Controller
{
	public function index()
	{

		$this->load->model('Madmin');
		$this->session->set_userdata("id_admin");
		$this->session->set_userdata("username");
		$this->session->set_userdata("nama");


		$this->session->set_flashdata('pesan_sukses',' Anda Berhasil Logout');
		redirect("/","refresh");
	}
}
