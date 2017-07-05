<?php

class Taxpayer_model extends CI_Model {
	
	public function get_taxpayers()
	{
		$this->db->order_by('name');
		
		$query = $this->db->get('taxpayers');
		
		return $query->result();
	}
	
	public function add_taxpayer($data)
	{
		$query = $this->db->insert('taxpayers', $data);
		
		return $query;
	}
	
	public function get_taxpayer($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('taxpayers');
		
		return $query->row();
	}
	
	public function update_taxpayer($data, $id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('taxpayers', $data);
		
		return $query;
	}
	
	public function delete_taxpayer($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('taxpayers');
		
		return $query;
	}
	
}