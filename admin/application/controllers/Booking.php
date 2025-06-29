<?php
class booking extends  CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata("id_admin")) {
        //     redirect('/', 'refresh');
        // }
    }
    function index()
    {
        $this->load->model('Mbooking');
        $data['booking'] = $this->Mbooking->tampil();
        // $data['peran'] = $this->Mbooking->peran();
        $data['keahlian'] = $this->Mbooking->keahlian();
        // $data['customer'] = $this->Mbooking->keahlian();

        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('booking_tampil', $data);
        $this->load->view('footer');
    }

    function hapus($id_booking) {
		$this->load->model("Mbooking");
		$this->Mbooking->hapus($id_booking);
		$this->session->set_flashdata('pesan_sukses','Data booking terhapus');
		redirect('booking','refresh');
	}
}