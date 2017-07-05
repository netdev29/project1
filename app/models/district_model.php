<?php

class District_model extends CI_Model {
	
	public function get_districts()
	{
		$this->db->order_by('code');
		
		$query = $this->db->get('districts');
		
		return $query->result();
	}
	
	public function add_district($data)
	{
		$query = $this->db->insert('districts', $data);
		
		return $query;
	}
	
	public function get_district($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('districts');
		
		return $query->row();
	}
	
	public function update_district($data, $id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('districts', $data);
		
		return $query;
	}
	
	public function delete_district($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('districts');
		
		return $query;
	}
	
}