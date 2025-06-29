<?php
class Beranda extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->model('Mberanda');
		$this->load->model('Mulasan');

    }
	public function index()
	{
		
		

		$data['url_bgalur'] = $this->config->item('url_bgalur');
		$data['total_bookings'] = $this->Mberanda->get_total_bookings();    
        $data['total_mitra'] = $this->Mberanda->get_total_mitra();   
		$data['ulasan'] = $this->Mulasan->dapatkan_semua_ulasan(); 

		$this->load->view('header');
		$this->load->view('beranda', $data);
		$this->load->view('footer');
		
	}

	public function FAQ()
	{

		$data['url_bgalur'] = $this->config->item('url_bgalur');

		$this->load->view('header');
		$this->load->view('faq', $data);
		$this->load->view('footer');
		
	}
}
?>