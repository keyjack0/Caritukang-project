<?php  
class Dashboard extends CI_Controller  
{  
    function __construct()  
    {  
        parent::__construct();  
        $this->load->model('Mdashboard'); // Pastikan ini sesuai dengan nama file model  
        // if(!$this->session->userdata("id_admin"))  
        // {  
        //     redirect('/','refresh');  
        // }  
    }  
  
    public function index()  
    {  
        $data['total_bookings'] = $this->Mdashboard->get_total_bookings();    
        $data['total_mitra'] = $this->Mdashboard->get_total_mitra();    
  
        $this->load->view('sidebar');  
        $this->load->view('header');  
        $this->load->view('dashboard', $data);  
        $this->load->view('footer');  
    }  
}  
