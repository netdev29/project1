<?php

class Dishonored_checks extends CI_Controller {
	
	public function index()
	{
		$data['dishonored_checks'] = $this->dishonored_check_model->get_dishonored_checks();
		
		$data['main_content'] = 'dishonored_checks/index';
		
		$this->load->view('layouts/main', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('taxpayer', 'Taxpayer', 'required|trim');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('bank_account_number', 'Bank Account Number', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('check_number', 'Check Number', 'required|trim|numeric|min_length[10]');
		$this->form_validation->set_rules('date', 'Check Date', 'required|trim|date|min_length[10]');
		$this->form_validation->set_rules('return_period', 'Return Period', 'required|trim|min_length[7]');
		$this->form_validation->set_rules('receiving_bank_name', 'Receiving Bank Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('district', 'District', 'required|trim');
		$this->form_validation->set_rules('dishonor_reason', 'Dishonor Reason', 'required|trim');
		$this->form_validation->set_rules('tax_type', 'Tax Type', 'required|trim');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['dishonor_reasons'] = $this->dishonor_reason_model->get_dishonor_reasons();
			$data['districts'] = $this->district_model->get_districts();
			$data['tax_types'] = $this->tax_type_model->get_tax_types();
			$data['taxpayers'] = $this->taxpayer_model->get_taxpayers();
			
			$data['main_content'] = 'dishonored_checks/add';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$check_date = date('Y-m-d', strtotime($this->input->post('date')));
			$return_period = date('Y-m-01', strtotime($this->input->post('return_period')));
			
			$data = array(
					'bank_name'			  => $this->input->post('bank_name'),
					'bank_account_number' => $this->input->post('bank_account_number'),
					'amount'			  => $this->input->post('amount'),
					'check_number'		  => $this->input->post('check_number'),
					'date'				  => $check_date,
					'return_period'		  => $return_period,
					'receiving_bank_name' => $this->input->post('receiving_bank_name'),
					'dishonor_reason__id' => $this->input->post('dishonor_reason'),
					'district_id'		  => $this->input->post('district'),
					'tax_type_id'		  => $this->input->post('tax_type'),
					'taxpayer_id'		  => $this->input->post('taxpayer')
					'user_id'			  => $this->session->userdata('user_id')
				);
			
			if($this->dishonored_check_model->add_dishonored_check($data))
			{
				$this->session->set_flashdata('dishonored_check_added', 'Dishonored check has been added');
				
				redirect('dishonored_checks/index');
			}
		}
	}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Dishonor Reason Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('code', 'Dishonor Reason Code', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['dishonored_check'] = $this->dishonored_check_model->get_dishonored_check($id);
			
			$data['main_content'] = 'dishonored_checks/update';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->dishonored_check_model->update_dishonored_check($data, $id))
			{
				$this->session->set_flashdata('dishonored_check_updated', 'Dishonored check has been updated');
				
				redirect('dishonored_checks/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->dishonored_check_model->delete_dishonored_check($id))
		{
			$this->session->set_flashdata('dishonored_check_deleted', 'Dishonored check has been deleted');
				
			redirect('dishonored_checks/index');
		}
	}
	
}