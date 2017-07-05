<?php

class Dishonor_reason_model extends CI_Model {
	
	public function get_dishonor_reasons()
	{
		$this->db->order_by('code');
		
		$query = $this->db->get('dishonor_reasons');
		
		return $query->result();
	}
	
	public function add_dishonor_reason($data)
	{
		$query = $this->db->insert('dishonor_reasons', $data);
		
		return $query;
	}
	
	public function get_dishonor_reason($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('dishonor_reasons');
		
		return $query->row();
	}
	
	public function update_dishonor_reason($data, $id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('dishonor_reasons', $data);
		
		return $query;
	}
	
	public function delete_dishonor_reason($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('dishonor_reasons');
		
		return $query;
	}
	
}