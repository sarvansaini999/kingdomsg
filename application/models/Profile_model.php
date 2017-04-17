<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	
	function get_admin_info(){
			
		$this->db->select('*');	
		 $query =$this->db->get('users');
		 
		if($query->num_rows() > 0){
		
			$results = $query->result();
			return $results;
		}
		else{
			return false;
		}
	}
	
	
	function update($id){
		
		
			$data = array(
				'id' 			=> $this->input->post('user_id'),
				'first_name' 	=> $this->input->post('fname'),
				'last_name' 	=> $this->input->post('lname'),
				'username' 		=> $this->input->post('uname'),
				'email' 		=> $this->input->post('email'),
				'phone' 		=> $this->input->post('phone'),
				
			);
	
	
			$this->db->where('id', $id);
			$this->db->update('users', $data);
		}
	
}