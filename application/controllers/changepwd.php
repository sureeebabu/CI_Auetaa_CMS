<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class changepwd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('ChangePwd_Model');
		if(empty($this->session->userdata("userEmail")))
         {
         	redirect(site_url(),'login/index');
         }
	}

	public function checkOldPass()
	{
		$userEmail = $_SESSION['userEmail'];

		$this->db->where('userEmail', $userEmail);
    			$this->db->where('userPassword', $this->input->post('txtOldPwd'));
    			$query = $this->db->get('usermaster');
  			
    			if($query->num_rows() > 0)
    			{

    				$result['data'] ="";
	        		//$this->updatePwdByUserType();
	        		echo "string";

					$data= array(
					'userPassword' => $this->input->post('txtNewPwd'),
					);
						$this->db->where('userEmail',$userEmail);
						$this->db->update('usermaster',$data);

						session_destroy();
						redirect("Login/index");
	        	} else {
					$result['data'] ="Invalid Old Password";
    				//return 0;
    				$this->load->view('changepwd_view',$result);
				}
	}
    

	public function index()
	{
		$result['data'] ="";
		$this->load->view('changepwd_view',$result);
	}
 
 
	// function updatePwdByUserType()
	// {
	// 	$userType = $_SESSION['userType'];
	// 	$userEmail = $_SESSION['userEmail'];
	// 	echo $userType;
	// 	echo $userEmail;
	// 	echo  $this->input->post('txtNewPwd');

	// 	if($userType =="Admin")
	// 	{
	// 			$data= array(
	// 				'userPassword' => $this->input->post('txtNewPwd'),
	// 				);
	// 					$this->db->where('userEmail',$userEmail);
	// 					$this->db->update('usermaster',$data);
	// 	}
	// 	elseif($userType =="Staff")
	// 	{
	// 		$data= array(
	// 				'userPassword' => $this->input->post('txtNewPwd'),
	// 				);
	// 					$this->db->where('staffEmail',$userEmail);
	// 					$this->db->update('staffmaster',$data);
	// 	}
	// 	session_destroy();
	// 	redirect("Login");
	// }
	
}
