<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->database();
          $this->load->helper('url');
          $this->load->model('Login_Model');
     }

     public function index()
     {
          $this->load->view('loginView');
     }

     public function process()
     {

          $userEmail = $this->input->post('userEmail');
          $userPassword = $this->input->post('userPassword');
          $result = $this->Login_Model->loginChkFn($userEmail, $userPassword);

          if ($result) {
               redirect(base_url() . 'dashboard');
          } else {
               $this->session->set_flashdata('error', 'Invalid Username and Password');
               $_SESSION['loginError'] = "Invalid User Email ID or Password...!";
               redirect(base_url() . 'login');
          }
     }
     function enter()
     {
          if ($this->session->userdata('userEmail') != '') {
               $this->load->view('loginView');
          } else {
               redirect(base_url() . 'login');
          }
     }
     function logout()
     {
          $this->session->unset_userdata('userEmail');
          redirect(base_url() . 'login');
     }
}
