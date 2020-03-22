<?php
class Login_Model extends CI_Model
{


	function loginChkFn($userEmail, $userPassword)
	{

		$this->db->where('userEmail', $userEmail);
		$this->db->where('userPassword', $userPassword);
		$this->db->where('userIsActive', 1);
		$query = $this->db->get('usermaster');
		// $query1 = $this->db->query("select * from usermaster");



		if ($query->num_rows() > 0) {

			foreach ($query->result() as $row) {
				$session_data = array(
					'userID' => $row->userID,
					'userName' => $row->userName,
					'userEmail' => $row->userEmail,
				);
				$this->session->set_userdata($session_data);

				// echo $row->userID;
				// echo $row->userName;
				// echo $row->userEmail;
			}

			return true;
		} else {
			return false;
		}
	}

	public function getDataByID($userID)
	{
		$this->db->where('userID', $userID);
		$query = $this->db->get('usermaster');
		return $query->row();
	}
}
