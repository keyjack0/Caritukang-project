<?php
	class Customer extends  CI_Controller{

		function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata("id_admin"))
		// {
		// 	redirect('/','refresh');
		// }
	}
		function index() {
			$this->load->model('Mcustomer');
		$data['customer'] = $this->Mcustomer->tampil();


		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('customer_tampil',$data);
		$this->load->view('footer');
		}

		function detail($id_customer) {

			$this->load->model('Mcustomer');
			$data["customer"] = $this->Mcustomer->detail($id_customer);

			// $this->load->model("Mtransaksi");
			// $data['jual'] = $this->Mtransaksi->transaksi_customer_jual($id_customer);
			// $data['beli'] = $this->Mtransaksi->transaksi_customer_beli($id_customer);

			$this->load->view('sidebar');
			$this->load->view('header');
			$this->load->view('customer_detail', $data); 
			$this->load->view('footer');
		}
	}

?>
