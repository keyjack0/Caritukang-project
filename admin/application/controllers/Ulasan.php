<?php

class Ulasan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {

        // echo $this->config->item('assets_kategori');

        // exit();

        $this->load->model('Mulasan');
        $data['ulasan'] = $this->Mulasan->tampil();


        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('ulasan_tampil', $data);
        $this->load->view('footer');
    }
}
 ?>