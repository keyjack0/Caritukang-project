<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index() {

        $this->load->model('Mbooking');  
        $data['total_tukang'] = $this->Mbooking->dapatkan_booking(); 

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/dashboard_profil', $data);
        // $this->load->view('footer');
        

    }
}
