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
		$this->load->library("pagination");
		if (empty($this->session->userdata("userEmail"))) {
			redirect(site_url(), 'login/index');
		}
	}

	public function index()
	{
			$config = array();
			$config["base_url"] = base_url() . "user/index";
			$config["total_rows"] = $this->User_Model->record_count();

			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			// $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
		
		
			// $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
		

			$config["per_page"] = 2;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["results"] = $this->User_Model->displayrecords($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();

			// echo $config["total_rows"];
			// echo exit;

			$this->load->view("list_users_view", $data);



		// $result['data'] = $this->User_Model->displayrecords();
		// $this->load->view('list_users_view', $result);
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
			// 'userRole' => "Admin",
			'userRole' => $this->input->post('ddlUserRole'),
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
		redirect("user");
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
			'userRole' => $this->input->post('ddlUserRole'),

		);
		$this->db->where('userID', $userID);
		$this->db->update('usermaster', $data);

		$_SESSION['msg'] = "Updated User Details";
		redirect("user");
	}
}
