<?php

class Taxpayers extends CI_Controller {
	
	public function index()
	{
		$data['taxpayers'] = $this->taxpayer_model->get_taxpayers();
		
		$data['main_content'] = 'taxpayers/index';
		
		$this->load->view('layouts/main', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('name', 'Taxpayer Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('tax_id_number', 'Taxpayer ID Number', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('address', 'Address', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'taxpayers/add';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name'			=> $this->input->post('name'),
					'tax_id_number' => $this->input->post('tax_id_number'),
					'address'		=> $this->input->post('address'),
					'user_id'		=> $this->session->userdata('user_id')
				);
			
			if($this->taxpayer_model->add_taxpayer($data))
			{
				$this->session->set_flashdata('taxpayer_added', 'Taxpayer has been added');
				
				redirect('taxpayers/index');
			}
		}
	}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Taxpayer Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('tax_id_number', 'Taxpayer ID Number', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('address', 'Address', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['taxpayer'] = $this->taxpayer_model->get_taxpayer($id);
			
			$data['main_content'] = 'taxpayers/update';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'tax_id_number' => $this->input->post('tax_id_number'),
					'address' => $this->input->post('address')
				);
			
			if($this->taxpayer_model->update_taxpayer($data, $id))
			{
				$this->session->set_flashdata('taxpayer_updated', 'Taxpayer has been updated');
				
				redirect('taxpayers/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->taxpayer_model->delete_taxpayer($id))
		{
			$this->session->set_flashdata('taxpayer_deleted', 'Taxpayer has been deleted');
				
			redirect('taxpayers/index');
		}
	}
	
}