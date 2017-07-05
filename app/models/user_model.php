<?php

class User_model extends CI_Model {
	
	public function create_user()
	{
		$enc_password = md5($this->input->post('password'));
		
		$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'	 => $this->input->post('last_name'),
				'username'	 => $this->input->post('username'),
				'password'	 => $enc_password
			);
		
		$query = $this->db->insert('users', $data);
		
		return $query;
	}
	
	public function login_user($username, $password)
	{
		$enc_password = md5($password);
		
		$this->db->where('username', $username);
		$this->db->where('password', $enc_password);
		
		$query = $this->db->get('users') or die($this->db->_error_message());
		
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}
	
}