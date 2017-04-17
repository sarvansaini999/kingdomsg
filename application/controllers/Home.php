<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		
		$this->load->database();
		$this->load->model('home_model','home');
		
	}
	public function index()
	{
		
		$data['title'] = "Home";
		$data['info'] = $this->home->get_active_exclusive();
		$data['settings'] = $this->home->get_settings();
		$data['exclusive'] = $this->home->get_second_exclisive_active();
		$data['header'] = $this->load->view('includes/header', $data);
		$data['main'] = $this->load->view('page/home', $data);
		$data['footer'] = $this->load->view('includes/footer', $data);
		
		
		return $this->load->view('default', $data);
	}
	
	public function newsletter()
	{
		
		$email = $_POST['email'];
		
		$this->home->newsletter($email);
	}
	
}
