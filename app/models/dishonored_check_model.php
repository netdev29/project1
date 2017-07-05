<?php

class Dishonored_check_model extends CI_Model {
	
	public function get_dishonored_checks()
	{
		$this->db->order_by('date', 'DESC');
		
		$query = $this->db->get('dishonored_checks');
		
		return $query->result();
	}
	
	public function add_dishonored_check($data)
	{
		$query = $this->db->insert('dishonored_checks', $data);
		
		return $query;
	}
	
	public function get_dishonored_check($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('dishonored_checks');
		
		return $query->row();
	}
	
	public function update_dishonored_check($data, $id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('dishonored_checks', $data);
		
		return $query;
	}
	
	public function delete_dishonored_check($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('dishonored_checks');
		
		return $query;
	}
	
}