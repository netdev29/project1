<?php

class Tax_types extends CI_Controller {
	
	public function index()
	{
		$data['tax_types'] = $this->tax_type_model->get_tax_types();
		
		$data['main_content'] = 'tax_types/index';
		
		$this->load->view('layouts/main', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('name', 'Tax Type Name', 'required|trim|min_length[2]|is_unique[tax_types.name]');
		$this->form_validation->set_rules('code', 'Tax Type Code', 'required|trim|min_length[2]|is_unique[tax_types.code]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'tax_types/add';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->tax_type_model->add_tax_type($data))
			{
				$this->session->set_flashdata('tax_type_added', 'Tax type has been added');
				
				redirect('tax_types/index');
			}
		}
	}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Tax Type Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('code', 'Tax Type Code', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['tax_type'] = $this->tax_type_model->get_tax_type($id);
			
			$data['main_content'] = 'tax_types/update';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->tax_type_model->update_tax_type($data, $id))
			{
				$this->session->set_flashdata('tax_type_updated', 'Tax type has been updated');
				
				redirect('tax_types/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->tax_type_model->delete_tax_type($id))
		{
			$this->session->set_flashdata('tax_type_deleted', 'tax_type has been deleted');
				
			redirect('tax_types/index');
		}
	}
	
}