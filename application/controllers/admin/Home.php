<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->library('upload');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		
		$this->lang->load('auth');
		$this->load->model('home_model','home');
		
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
		//$data['info'] = $this->profile->get_admin_info();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/profile', $data);
		
		return $this->load->view('dashboard/default', $data);
	}
	
	public function list_exclusive(){
		
		$data['title'] = "Exclusive List";
		$data['info'] = $this->home->get_exclusive();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/exclusive', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
	public function add_new_exclusive(){
		
		$data['title'] = "Add New Exclusive";
		$data['countries'] = $this->home->get_countries();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/add_exclusive', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
	public function save_exclusive(){
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('file', 'File');
		
		if($this->form_validation->run() == FALSE){
			redirect('new-exclusive');
			//$this->add_new_exclusive();
		}else{
		
			$this->load->library('upload');

			if (!empty($_FILES['file']['name'])){
				
				$config['upload_path'] = './upload';
				$config['allowed_types'] = '*';
				$config['max_size'] = '1000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';       

				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file')){
					$data = array('upload_data' => $this->upload->data());
					$upload_data = $this->upload->data();
					
					
					//$this->job_model->save_applyInfo($upload_data);      
					$this->home->save_exclusive($upload_data);
					$this->session->set_flashdata('success_msg', 'you applied done for this job');
					redirect('list-exclusive');
				}
				else{
					$fileErrors = $this->upload->display_errors();
					$this->form_validation->set_message('file_upload', $fileErrors);
					return false;
				}
			}
			
		}
		
	}
	
	public function edit($id){
		
		$data['title'] = 'Edit';
		$data['countries'] = $this->home->get_countries();
		$data['info'] = $this->home->edit($id);
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/edit_exclusive', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	} 
	
	public function delete($id){
		$this->home->delete($id);
		$this->session->set_flashdata('success_msg', 'Deleted this exclusive...');
		redirect('list-exclusive');
	}
	
	public function update(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		//$this->form_validation->set_rules('file', 'File');
		$id = $this->input->post('id');
		if($this->form_validation->run() == FALSE){
			redirect('list-second-exclusive');
			$this->session->set_flashdata('success_msg', 'not updated this exclusive...');
		}else{
			$this->home->update($id);
			$this->session->set_flashdata('success_msg', 'updated this exclusive...');
			redirect('list-second-exclusive');
		}
	}
	
	public function list_second_exclisive(){
		
		$data['title'] = "Exclusive List";
		$data['info'] = $this->home->get_second_exclisive();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/exclusive_second', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
	public function add_second_exclisive(){
		
		$data['title'] = "Add New Exclusive";
		$data['countries'] = $this->home->get_countries();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/add_exclusive_second', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
	public function save_second_exclisive(){
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('file', 'File');
		
		if($this->form_validation->run() == FALSE){
			redirect('new-second-exclusive');
			//$this->add_new_exclusive();
		}else{
		
			$this->load->library('upload');

			if (!empty($_FILES['file']['name'])){
				
				$config['upload_path'] = './upload';
				$config['allowed_types'] = '*';
				$config['max_size'] = '1000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';       

				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file')){
					$data = array('upload_data' => $this->upload->data());
					$upload_data = $this->upload->data();
					
					
					//$this->job_model->save_applyInfo($upload_data);      
					$this->home->save_second_exclisive($upload_data);
					$this->session->set_flashdata('success_msg', 'you applied done for this job');
					redirect('list-second-exclusive');
				}
				else{
					$fileErrors = $this->upload->display_errors();
					$this->form_validation->set_message('file_upload', $fileErrors);
					return false;
				}
			}
			
		}
		
	}
	
	public function edit_second_exclisive($id){
		
		$data['title'] = 'Edit';
		$data['countries'] = $this->home->get_countries();
		$data['info'] = $this->home->edit_second_exclisive($id);
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/edit_exclusive_second', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	} 
	
	public function delete_second_exclisive($id){
		$this->home->delete_second_exclisive($id);
		$this->session->set_flashdata('success_msg', 'Deleted this exclusive...');
		redirect('list-second-exclusive');
	}
	
	
	public function update_second_exclisive(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		//$this->form_validation->set_rules('file', 'File');
		$id = $this->input->post('id');
		if($this->form_validation->run() == FALSE){
			redirect('list-second-exclusive');
			$this->session->set_flashdata('success_msg', 'not updated this exclusive...');
		}else{
			$this->home->update_second_exclisive($id);
			$this->session->set_flashdata('success_msg', 'updated this exclusive...');
			redirect('list-second-exclusive');
		}
	}
	
	public function header_footer(){
		
		$data['title'] = 'Homepage Header and Footer Settings';
		$data['info'] = $this->home->get_settings();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/head_foot', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
	public function settings(){
		$id = $this->input->post('id');
		
			$this->load->library('upload');

			if (!empty($_FILES['hlogo']['name'])){
				
				$config['upload_path'] = './upload';
				$config['allowed_types'] = '*';
				$config['max_size'] = '1000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';   
				$config['overwrite'] = TRUE;				

				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('hlogo')){
					$data = array('upload_data' => $this->upload->data());
					$upload_data = $this->upload->data();
					
					$this->session->set_flashdata('success_msg', 'you applied done for this job');
					
				}
				else{
					$fileErrors = $this->upload->display_errors();
					$this->form_validation->set_message('file_upload', $fileErrors);
					return false;
				}
			}
			if (!empty($_FILES['b_img']['name'])){
				
				$config['upload_path'] = './upload';
				$config['allowed_types'] = '*';
				$config['max_size'] = '5000';
				$config['max_width']  = '1920';
				$config['max_height']  = '1500';   
				$config['overwrite'] = TRUE;				

				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('b_img')){
					$data = array('upload_data' => $this->upload->data());
					$upload_data = $this->upload->data();
					
					
					
				}
				else{
					$fileErrors = $this->upload->display_errors();
					$this->form_validation->set_message('file_upload', $fileErrors);
					return false;
				}
			}
		
		if(isset($id) && $id != ""){
			$this->home->update_settings($id, $hlogo_url);
			
			$this->session->set_flashdata('success_msg', 'changes are updated');
		}else{
			$this->home->insert_settings();
		}
		redirect('header-footer');
	}
	
	public function newsletter(){
		
		$data['title'] = 'Subscriber List';
		$data['info'] = $this->home->get_subscriber();
		$data['header'] = $this->load->view('dashboard/header', $data);
		$data['main'] = $this->load->view('dashboard/subscriber', $data);
		
		return $this->load->view('dashboard/default', $data);
		
	}
	
}
