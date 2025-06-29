<?php
class Logout extends CI_Controller
{
	public function index()
	{
		$this->session->set_userdata("id_customer");
		$this->session->set_userdata("email_customer");
		$this->session->set_userdata("username_customer");
		$this->session->set_userdata("nama_customer");
		$this->session->set_userdata("alamat_customer");
		$this->session->set_userdata("wa_customer");


		$this->session->set_flashdata('pesan_sukses',' Anda Berhasil Logout');
		redirect("/","refresh");
	}
}
