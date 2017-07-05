<?php

class Tax_type_model extends CI_Model {
	
	public function get_tax_types()
	{
		$this->db->order_by('code');
		
		$query = $this->db->get('tax_types');
		
		return $query->result();
	}
	
	public function add_tax_type($data)
	{
		$query = $this->db->insert('tax_types', $data);
		
		return $query;
	}
	
	public function get_tax_type($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('tax_types');
		
		return $query->row();
	}
	
	public function update_tax_type($data, $id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('tax_types', $data);
		
		return $query;
	}
	
	public function delete_tax_type($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('tax_types');
		
		return $query;
	}
	
}