<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mperan extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('peran')->result_array();
    }
}