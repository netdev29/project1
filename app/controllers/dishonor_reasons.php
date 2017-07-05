<?php

class Dishonor_reasons extends CI_Controller {
	
	public function index()
	{
		$data['dishonor_reasons'] = $this->dishonor_reason_model->get_dishonor_reasons();
		
		$data['main_content'] = 'dishonor_reasons/index';
		
		$this->load->view('layouts/main', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('name', 'Dishonor Reason Name', 'required|trim|min_length[2]|is_unique[dishonor_reasons.name]');
		$this->form_validation->set_rules('code', 'Dishonor Reason Code', 'required|trim|min_length[2]|is_unique[dishonor_reasons.code]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'dishonor_reasons/add';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->dishonor_reason_model->add_dishonor_reason($data))
			{
				$this->session->set_flashdata('dishonor_reason_added', 'Dishonor reason has been added');
				
				redirect('dishonor_reasons/index');
			}
		}
	}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Dishonor Reason Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('code', 'Dishonor Reason Code', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['dishonor_reason'] = $this->dishonor_reason_model->get_dishonor_reason($id);
			
			$data['main_content'] = 'dishonor_reasons/update';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->dishonor_reason_model->update_dishonor_reason($data, $id))
			{
				$this->session->set_flashdata('dishonor_reason_updated', 'Dishonor reason has been updated');
				
				redirect('dishonor_reasons/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->dishonor_reason_model->delete_dishonor_reason($id))
		{
			$this->session->set_flashdata('dishonor_reason_deleted', 'Dishonor reason has been deleted');
				
			redirect('dishonor_reasons/index');
		}
	}
	
}