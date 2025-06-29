<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mkeahlian extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('keahlian')->result_array();
    }

    public function get_by_id($id_keahlian)
    {
        return $this->db->get_where('keahlian', ['id_keahlian' => $id_keahlian])->row_array();
    }
}
