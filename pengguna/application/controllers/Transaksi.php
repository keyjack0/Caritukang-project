<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Load Midtrans library
include 'midtrans-php/Midtrans.php';

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mtransaksi');
        $this->load->model('Mbooking');


    }

    

    
}
