<?php
class User_Model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count()
	{
		return $this->db->count_all("usermaster");
	}

	function displayrecords($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("usermaster");

		// $query = $this->db->query("select * from usermaster order by userName asc");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
		// return $query->result();
	}

	public function getDataByID($userID)
	{
		$this->db->where('userID', $userID);
		$query = $this->db->get('usermaster');
		return $query->row();
	}
}
