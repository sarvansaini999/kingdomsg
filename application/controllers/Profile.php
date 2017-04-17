<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		
		$this->lang->load('auth');
		
		$usrdata = $this->session->all_userdata();
		$user_id = $usrdata['user_id'];
		
		$username = $this->ion_auth->get_user_by_id($user_id);
		$this->session->set_userdata("USER_NAME", $username);
		
	}
	
	public function index()
	{
		//error_reporting(0);
		//$this->load->view('welcome_message');
		$data['title'] = "Profile";
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/profile', $data);
		//$data['footer'] = $this->load->view('dashboard/footer', $data);
		
		
		return $this->load->view('dashboard/default', $data);
	}
	
}
