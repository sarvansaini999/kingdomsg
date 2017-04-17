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
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		
		$this->lang->load('auth');
		$this->load->model('profile_model','profile');
		
		$usrdata = $this->session->all_userdata();
		$user_id = $usrdata['user_id'];
		
		$username = $this->ion_auth->get_user_by_id($user_id);
		$this->session->set_userdata("USER_NAME", $username);
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		
	}
	
	public function index()
	{
		
		$data['title'] = "Profile";
		$data['info'] = $this->profile->get_admin_info();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/profile', $data);
		//$data['footer'] = $this->load->view('dashboard/footer', $data);
		
		
		return $this->load->view('dashboard/default', $data);
	}
	public function update(){
		$user_id = $this->input->post('user_id');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		//$this->form_validation->set_rules('user_id', 'Job Title', 'trim|required' 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		
		
		if($this->form_validation->run() == FALSE) {
			$this->index();
		}else{
			$this->profile->update($user_id );
			$this->session->set_flashdata('success_msg', 'Your profile updated');
			redirect('profile');
		}
		
		
		
	}
}
