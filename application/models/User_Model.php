<?php
class User_Model extends CI_Model 
{

	
	function displayrecords()
	{
		$query=$this->db->query("select * from usermaster order by userName asc");
		return $query->result();
	}

	public function getDataByID($userID)
	{
		$this->db->where('userID',$userID);
		$query=$this->db->get('usermaster');
		return $query->row();
	}
}