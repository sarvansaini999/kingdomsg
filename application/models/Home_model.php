<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
		
	function save_exclusive($file){
		$active = 0;
		if(isset($_POST['active'])){
			$active = 1;
		}
		if(isset($_FILES['file']['name'])){
			$file_name = $_FILES['file']['name'];
		}
		$data = array(
			'country'		=>$this->input->post('country'),
			'thumb'			=>$file_name,
			'is_active'		=>$active
			
		);
		
		$this->db->insert('exclusive', $data);
		if( $this->db->insert_id() > 0 ) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}
	
	function get_countries(){
		$this->db->select('*');	
		$this->db->order_by("name", "asc");
		$query =$this->db->get('country');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	function get_exclusive(){
		
		$this->db->select('*');	
		$query =$this->db->get('exclusive');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	function get_active_exclusive(){
		$s = "1";
		$this->db->select('*');	
		$this->db->where('is_active', $s);
		$query =$this->db->get('exclusive');
			 
			if($query->num_rows() > 0){
			
				$results = $query->result();
				return $results;
			}
			else{
				return false;
			}
	}
	
	function edit($id){
		$this->db->where('id', $id);
		$this->db->select('*');
		$query = $this->db->get('exclusive');
		if($query->num_rows() > 0){
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	function update($id){
		$active = 0;
		if(isset($_POST['active'])){
			$active = 1;
		}
		$data = array(
			'country'		=>$this->input->post('country'),
			'is_active'		=>$active
			
		);
		$this->db->where('id', $id);
		$this->db->update('exclusive', $data);
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('exclusive');
	}
	
	function save_second_exclisive($file){
		$active = 0;
		if(isset($_POST['active'])){
			$active = 1;
		}
		if(isset($_FILES['file']['name'])){
			$file_name = $_FILES['file']['name'];
		}
		$data = array(
			'country'		=>$this->input->post('country'),
			'thumb'			=>$file_name,
			'is_active'		=>$active,
			'created_at'	=>date('y-m-d h:i:s')
			
		);
		
		$this->db->insert('exclisive_second', $data);
		if( $this->db->insert_id() > 0 ) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}
	
	function get_second_exclisive(){
		
		$this->db->select('*');	
		$query =$this->db->get('exclisive_second');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	function get_second_exclisive_active(){
		$s = "1";
		$this->db->select('*');	
		$this->db->where('is_active', $s);
		$query =$this->db->get('exclisive_second');
			 
			if($query->num_rows() > 0){
			
				$results = $query->result();
				return $results;
			}
			else{
				return false;
			}
	}
	
	function edit_second_exclisive($id){
		$this->db->where('id', $id);
		$this->db->select('*');
		$query = $this->db->get('exclisive_second');
		if($query->num_rows() > 0){
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	function update_second_exclisive($id){
		$active = 0;
		if(isset($_POST['active'])){
			$active = 1;
		}
		$data = array(
			'country'		=>$this->input->post('country'),
			'is_active'		=>$active
			
		);
		$this->db->where('id', $id);
		$this->db->update('exclisive_second', $data);
	}
	
	function delete_second_exclisive($id){
		$this->db->where('id', $id);
		$this->db->delete('exclisive_second');
	}
	
	function newsletter($email){
	
		$this->db->select('email');	
		$this->db->where('email', $email);
		$query =$this->db->get('newsletter');
		
		
		if($query->num_rows() >= 1){
			$results = $query->result();
			echo "email address already exist";
		}
		else{
			
			$data = array(
			'email'		=>$email,
			'created_at'	=>date('y-m-d h:i:s')
			
			);
		
			$this->db->insert('newsletter', $data);
			if( $this->db->insert_id() > 0 ) {
				echo 1;
				//return $this->db->insert_id();
			} else {
				return FALSE;
			}
			
		}
		
		
	}
	
	function get_settings(){
		
		$this->db->select('*');	
		$query =$this->db->get('settings');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			//print_r($results);
			return $results;
		}
		else{
			return false;
		}
	}
	
	function insert_settings(){
		
		$data = array(
			'banner_heading'		=>$this->input->post('bhead'),
			'banner_sub_text'		=>$this->input->post('bstext'),
			'banner_btn_text'		=>$this->input->post('bbtext'),
			'banner_btn_link'		=>$this->input->post('bblink'),
			'bottom_footer_logo'	=>$this->input->post('bblink'),
			'footer_link'			=>$this->input->post('flink'),
			'footer_sub_link'		=>$this->input->post('fslink'),
			'contact_us'			=>$this->input->post('contact_us'),
			'facebook'				=>$this->input->post('fb'),
			'instagram'				=>$this->input->post('ins'),
			'twitter'				=>$this->input->post('tw')
			
		);
		$this->db->insert('settings', $data);
	}
	
	function update_settings($id){
		
		
		$data = array(
			'header_logo'			=>$this->input->post('hlogo_url'),
			'banner_img'			=>$this->input->post('banner_img'),
			'banner_heading'		=>$this->input->post('bhead'),
			'banner_sub_text'		=>$this->input->post('bstext'),
			'banner_btn_text'		=>$this->input->post('bbtext'),
			'banner_btn_link'		=>$this->input->post('bblink'),
			'bottom_footer_logo'	=>$this->input->post('bblogo'),
			'footer_link'			=>$this->input->post('flink'),
			'footer_sub_link'		=>$this->input->post('fslink'),
			'contact_us'			=>$this->input->post('contact_us'),
			'facebook'				=>$this->input->post('fb'),
			'instagram'				=>$this->input->post('ins'),
			'twitter'				=>$this->input->post('tw')
			
		);
		$this->db->where('id', $id);
		$this->db->update('settings', $data);
	}
	function get_subscriber(){
		$this->db->select('*');	
		$query =$this->db->get('newsletter');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			//print_r($results);
			return $results;
		}
		else{
			return false;
		}
	}
}