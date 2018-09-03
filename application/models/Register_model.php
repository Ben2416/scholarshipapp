<?php

class Register_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function register($post_image, $pass){
		
		$data['firstname'] = $this->input->post('firstname');
		$data['lastname'] = $this->input->post('lastname');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['sex'] = $this->input->post('sex');
		$data['clearpass'] = $pass;
		$data['password'] = sha1($pass);
		$data['passport'] = $post_image;
		$data['address'] = $this->input->post('address');
		
		$udata = array(
			'email' => $this->input->post('email')
		);
		
		$this->db->insert('scholarship_details',$udata);
		return $this->db->insert('users',$data);
		//$user_id = $this->db->insert_id();
	}
	
	
	
}