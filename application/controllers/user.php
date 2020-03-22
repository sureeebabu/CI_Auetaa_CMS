<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('User_Model');
		if (empty($this->session->userdata("userEmail"))) {
			redirect(site_url(), 'login/index');
		}
	}

	public function index()
	{
		$result['data'] = $this->User_Model->displayrecords();
		$this->load->view('list_users_view', $result);
	}


	public function insertUserData()
	{
		if ($this->input->post('chkIsActive') == 'on') {
			$userIsActive = 1;
		} else {
			$userIsActive = 0;
		}

		$InsUserData = array(
			'userName' => $this->input->post('txtUserName'),
			'userEmail' => $this->input->post('txtUserEmail'),
			'userPassword' => $this->input->post('txtUserPassword'),
			'userMobileNo' => $this->input->post('txtUserMobNo'),
			'userIsActive' => $userIsActive,
			'userRole' => "Admin",
			'userRole' =>$this->input->post('ddlUserRole'),
			'userImageName' => "noImg.png",

		);
		//means this data insert into table name std
		$this->db->insert('usermaster', $InsUserData);

		$_SESSION['msg'] = "Created New User";

		redirect("user/index");
	}

	public function addEditUsers()
	{
		$data['mode'] = "Add New ";
		$this->load->view('add_users_view', $data);
	}

	public function edit($userID)
	{

		$row = $this->User_Model->getDataByID($userID);
		$data['r'] = $row;
		$data['mode'] = 'Edit';
		$data['userID'] = $userID;
		$this->load->view('add_users_view', $data);
		//redirect('Student/edit');
	}

	public function deleteFn($userID)
	{
		$userID = $this->db->where('userID', $userID);
		$this->db->delete('usermaster', $userID);
		$_SESSION['msg'] = "User Deleted Successfully";
		redirect("user/index");
	}

	public function updateUserData($userID)
	{

		if ($this->input->post('chkIsActive') == 'on') {
			$userIsActive = 1;
		} else {
			$userIsActive = 0;
		}
		// echo $userIsActive;
		$data = array(
			'userName' => $this->input->post('txtUserName'),
			'userEmail' => $this->input->post('txtUserEmail'),
			'userMobileNo' => $this->input->post('txtUserMobNo'),
			'userIsActive' => $userIsActive,
			'userRole' =>$this->input->post('ddlUserRole'),

		);
		$this->db->where('userID', $userID);
		$this->db->update('usermaster', $data);

		$_SESSION['msg'] = "Updated User Details";
		redirect("user/index");
	}
}
