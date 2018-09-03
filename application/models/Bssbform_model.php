<?php

class Bssbform_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function update($username, $ufiles){
		
		$data['email'] = $username;
		
		$data['scholarship_type'] = $this->input->post('scholarship_type');
		$data['country'] = $this->input->post('country');
		$data['university'] = $this->input->post('university');
		$data['local_university'] = $this->input->post('local_university');
		$data['other_university'] = $this->input->post('other_university');
		$data['other_university_country'] = $this->input->post('other_university_country');
		$data['student_id'] = $this->input->post('student_id');
		$data['course_of_study'] = $this->input->post('course_of_study');
		$data['expected_degree'] = $this->input->post('expected_degree');
		$data['university_address'] = $this->input->post('university_address');
		if( $this->input->post('hidden_scholarship_award_letter')==0 )
			$data['scholarship_award_letter'] = $ufiles[0];
		if( $this->input->post('hidden_university_admission_letter')==0 )
			$data['university_admission_letter'] = $ufiles[1];
		$data['start_date'] = $this->input->post('start_date');
		$data['end_date'] = $this->input->post('end_date');
		$data['university_contact_name'] = $this->input->post('university_contact_name');
		$data['university_contact_position'] = $this->input->post('university_contact_position');
		$data['university_contact_phone'] = $this->input->post('university_contact_phone');
		$data['university_contact_email'] = $this->input->post('university_contact_email');
		
		$data['currency_type'] = $this->input->post('currency_type');
		$data['total_tuition'] = $this->input->post('total_tuition');
		$data['total_paid'] = $this->input->post('total_paid');
		$data['total_due'] = $this->input->post('total_due');
		if( $this->input->post('hidden_evidence_of_payment')==0 )
			$data['evidence_of_payment'] = $ufiles[2];
		$data['stipend_paid'] = $this->input->post('stipend_paid');
		
		$data['university_bank_name'] = $this->input->post('university_bank_name');
		$data['university_account_name'] = $this->input->post('university_account_name');
		$data['university_account_number'] = $this->input->post('university_account_number');
		$data['swift_code'] = $this->input->post('swift_code');
		$data['iban_number'] = $this->input->post('iban_number');
		$data['personal_bank_name'] = $this->input->post('personal_bank_name');
		$data['personal_account_name'] = $this->input->post('personal_account_name');
		$data['personal_account_number'] = $this->input->post('personal_account_number');
		$data['attestation'] = $this->input->post('attestation');
		
		
		$this->db->where('email', $username);
		return $this->db->update('scholarship_details',$data);
		//$user_id = $this->db->insert_id();
	}
	
	function getUserDetails($username){
		$this->db->from('scholarship_details');
		$this->db->where('email', $username);
		$query = $this->db->get();
		return $query->row();
	}
	
}