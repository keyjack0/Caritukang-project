
<?php

class Madmin extends CI_Model
{
	function login($inputan)
	{
		$username = $inputan['username'];
		$password = $inputan['password'];
		// $password = sha1($password); //pakai ini jika di table memakai keamanan password SHa1 password

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$q = $this->db->get('admin');
		$cekadmin = $q->row_array();

		if (!empty($cekadmin)) {
			$this->session->set_userdata("id_admin", $cekadmin["id_admin"]);
			$this->session->set_userdata("username", $cekadmin["username"]);
			$this->session->set_userdata("nama_admin", $cekadmin["nama_admin"]);
			return "ada";
		} else {
			return "gak ada";
		}
	}
}
?>