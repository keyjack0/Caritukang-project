<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 
class Mmitra extends CI_Model{

    function simpan($inputan)
	{
		$this->db->insert('mitra', $inputan);
	}
}               