<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		// $this->load->model('Course_Model');
		// $this->load->model('Staff_Model');

		 if(empty($this->session->userdata("userEmail")))
         {
         	redirect(site_url(),'login/index');
         }
	}


	public function index()
	{
		// $result['courseCount']=$this->Course_Model->getCourseCount();
		// $result['staffCount']=$this->Staff_Model->getStaffCount();
		// $this->load->view('dashboard_view',$result);
		$this->load->view('dashboard_view');
	}
	
}
