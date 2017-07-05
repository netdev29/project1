<?php

class Districts extends CI_Controller {
	
	public function index()
	{
		$data['districts'] = $this->district_model->get_districts();
		
		$data['main_content'] = 'districts/index';
		
		$this->load->view('layouts/main', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('name', 'District Name', 'required|trim|min_length[2]|is_unique[districts.name]');
		$this->form_validation->set_rules('code', 'District Code', 'required|trim|min_length[2]|is_unique[districts.code]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'districts/add';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->district_model->add_district($data))
			{
				$this->session->set_flashdata('district_added', 'District has been added');
				
				redirect('districts/index');
			}
		}
	}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'District Name', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('code', 'District Code', 'required|trim|min_length[2]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['district'] = $this->district_model->get_district($id);
			
			$data['main_content'] = 'districts/update';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'code' => $this->input->post('code')
				);
			
			if($this->district_model->update_district($data, $id))
			{
				$this->session->set_flashdata('district_updated', 'District has been updated');
				
				redirect('districts/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->district_model->delete_district($id))
		{
			$this->session->set_flashdata('district_deleted', 'District has been deleted');
				
			redirect('districts/index');
		}
	}
	
}