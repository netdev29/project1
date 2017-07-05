<?php

class Users extends CI_Controller {
	
	public function register()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[2]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|min_length[8]|matches[password]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'users/register';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			if($this->user_model->create_user())
			{
				$this->session->set_flashdata('register_success', 'You are now registered');
				
				redirect('home/index');
			}
		}
	}
	
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$user = $this->user_model->login_user($username, $password);
		
		if($user)
		{
			$user_data = array(
					'user_id'	=> $user->id,
					'username'	=> $username,
					'level'		=> $user->level,
					'logged_in' => true
				);
			
			$this->session->set_userdata($user_data);
			
			$this->session->set_flashdata('login_success', 'You are now logged in');
			
			redirect('home/index');
		}
		else
		{
			$this->session->set_flashdata('login_fail', 'Sorry, the login info you entered is invalid');
			
			redirect('home/index');
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		
		redirect('home/index');
	}

}