<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Mberanda extends CI_Model {  
  
    public function get_total_bookings() {  
        return $this->db->count_all('booking');  
    }  
  
    public function get_total_mitra() {  
        return $this->db->count_all('mitra');  
    }  
}  