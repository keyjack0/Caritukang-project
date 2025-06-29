<?php
class Register extends CI_Controller
{
	function index()
	{

        $data['url_register'] = $this->config->item('url_register'); 
		// $this->load->model('Mongkir');
		$this->load->model('Mcustomer');
		
		// $data['distrik'] = $this->Mongkir->tampil_distrik();;

		$this->form_validation->set_rules('email_customer', 'email customer', 'required|is_unique[customer.email_customer]');
        $this->form_validation->set_rules('username_customer', 'username customer', 'required');
        $this->form_validation->set_rules('nama_customer', 'nama customer', 'required');
        $this->form_validation->set_rules('wa_customer', 'No Telephone', 'required');
		$this->form_validation->set_rules('password_customer', 'password customer', 'required');
		$this->form_validation->set_rules('alamat_customer', 'alamat customer', 'required');

		$this->form_validation->set_message('required', '%s wajib di isi');
		$this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

		if ($this->form_validation->run() == TRUE) {

			$m['email_customer'] = $this->input->post('email_customer');
            $m['username_customer'] = $this->input->post('username_customer');
            $m['nama_customer'] = $this->input->post('nama_customer');
            $m['wa_customer'] = $this->input->post('wa_customer');
			$m['password_customer'] = $this->input->post('password_customer');
            $m['password_customer'] = sha1($m['password_customer']);
			$m['alamat_customer'] = $this->input->post('alamat_customer');
			


			// $this->load->model('Mcustomer');
			// $id_customer = $this->session->userdata("id_customer");

			$this->Mcustomer->register($m);
			$this->session->set_flashdata('pesan_sukses', 'reggistrasi berhasil, silahkan login');

			
			redirect('welcome','refresh');
			
			
		}
		$this->load->view('register', $data);
	}
}
