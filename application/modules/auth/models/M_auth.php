<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function validasi($username, $password)
	{
		$data = $this->db->get_where('user', array('user_nama LIKE BINARY' => $username))->result();
		// var_dump($data); die;
		if (count($data) === 1) {
			if (password_verify($password, $data[0]->user_password)) {
				
				return array(
					'is_logged_in'		=> true,
					'user_nama'			=> $username,
					'user_level'		=> $data[0]->user_level,
					'user_namalengkap'	=> $data[0]->user_namalengkap,
					'user_id'			=> $data[0]->user_id,
					'add_by'			=> $data[0]->add_by,
					'user_foto'			=> $data[0]->user_foto,
					'unit_id'			=> $data[0]->unit_id
				);
			} else {
				return 0;
			}
		}
	}
}