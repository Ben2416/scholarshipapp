<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "emailsms.php";
class Bssbform extends CI_Controller {
	private $ufiles;
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
		if ( !$this->input->server('HTTP_REFERER') )
		{
		    redirect('login');
		}

		$data['page_title'] = ucfirst('BSSB FORM');
		$data['username'] = $this->session->username;
		$data['firstname']= $this->session->firstname;
		$data['lastname'] = $this->session->lastname;
		$data['passport'] = $this->session->passport;
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		$this->form_validation->set_rules('student_id','Student ID','trim|required');
		$this->form_validation->set_rules('course_of_study','Course of Study','trim|required');
		/*$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[11]|max_length[11]|is_unique[users.phone]');
		$this->form_validation->set_rules('address','Contact Address','trim|required');
		 */
		$this->form_validation->set_rules('attestation', 'Attestation','required|callback_accept_terms');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('bssb_form_view',$data);
		}else{
			$this->ufiles = array();
			if($this->upload()){
				$this->Bssbform_model->update($data['username'],$this->ufiles);
				$this->session->set_flashdata('rsuccess_msg', 'Your request has been submitted.');
				//redirect(base_url().'success_view');//'logout');
				$data['page_title'] = 'BSSB Success';
				$this->load->view('header', $data);
				$this->load->view('success_view');
				$this->load->view('footer');
			}else{
				$this->load->view('bssb_form_view',$data);
			}
		}
		
	}
	
	public function upload()
    {
		$this->load->library('upload');
		$fupload_field = array('scholarship_award_letter','university_admission_letter', 'evidence_of_payment');
		$fupload_dir = array('./assets/award_letters','./assets/admission_letters', './assets/evidence_of_payments');
		$error = 0;
		$errors = array();
		
		$uname = explode('@',$this->session->username);
		$fdata = array();
		
		for($i=0;$i<count($fupload_dir);$i++){
			if( $this->input->post('hidden_'.$fupload_field[$i]) == "1" ) continue;
			if( $fupload_field[$i]=="evidence_of_payment" ){
				$filesCount = count($_FILES[$fupload_field[$i]]['name']);
				
				for( $j=0; $j<$filesCount; $j++ ){
					
					$_FILES['eop']['name'] 	= $_FILES[$fupload_field[$i]]['name'][$j];
					$_FILES['eop']['type'] 	= $_FILES[$fupload_field[$i]]['type'][$j];
					$_FILES['eop']['tmp_name'] = $_FILES[$fupload_field[$i]]['tmp_name'][$j];
					$_FILES['eop']['error'] 	= $_FILES[$fupload_field[$i]]['error'][$j];
					$_FILES['eop']['size'] 	= $_FILES[$fupload_field[$i]]['size'][$j];
					
					$config['upload_path'] = $fupload_dir[$i];
					$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|bmp';
					$config['max_size'] = '2048';
					$config['overwrite'] = true;
					$un = $uname[0].'_'.$fupload_field[$i].'_'.$j;
					$dname = str_replace(".","", $un);
					$config['file_name'] = $dname;
					
					$this->upload->initialize($config);
					
					if( !$this->upload->do_upload('eop') ){
						$errors = array('error' => $this->upload->display_errors());
						$error += 1;
					}else{
						$fdata[$i+$j+1] = array('upload_data' => $this->upload->data());
					}
					unset($config);
					if($j==0)
						@$this->ufiles[$i] .= $uname[0].'_'.$fupload_field[$i].'_'.$j.$fdata[$i+$j+1]['upload_data']['file_ext'];
					else
						@$this->ufiles[$i] .= ','.$uname[0].'_'.$fupload_field[$i].'_'.$j.$fdata[$i+$j+1]['upload_data']['file_ext'];
				}
			}else{
				$config['upload_path'] = $fupload_dir[$i];
				$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|bmp';
				$config['max_size'] = '2048';
				$config['overwrite'] = true;
				$un = $uname[0].'_'.$fupload_field[$i];
				$dname = str_replace(".","", $un);
				$config['file_name'] = $dname;
				
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload($fupload_field[$i])){
					$errors = array('error' => $this->upload->display_errors());
					$error += 1;
				}else{
					$fdata[$i] = array('upload_data' => $this->upload->data());
				}
				unset($config);
				@$this->ufiles[$i] = $uname[0].'_'.$fupload_field[$i].$fdata[$i]['upload_data']['file_ext'];
			}

		}
		if($error == 0){
			return true;
		}else{
			$erm = "";
			foreach($errors as $er){
				$erm.=$er.'<br>';
			}
			$this->session->set_flashdata('error_msg',$erm);
			for($i=0;$i<count($fdata);$i++){
				@unlink($fdata[$i]);
			}
			return false;
		}
    }
	
	function populateForm(){
		$output = $this->Bssbform_model->getUserDetails($this->session->username);
		echo json_encode($output);
	}
	
	function accept_terms(){
		if($this->input->post('attestation')){
			return TRUE;
		}else{
			$error = '<div class="alert-danger"><i class="fa fa-close"></i> Please read and accept our terms and conditions.</div>';
			$this->form_validation->set_message('accept_terms', $error);
			$this->session->set_flashdata('error_msg',$error);
			return FALSE;
		}
	}
	
	public function fileUploaded($fileField)
	{
		if(empty($_FILES)) {
			return false;       
		} 
		$this->file = $_FILES[$fileField];
		if(!file_exists($this->file['tmp_name']) || !is_uploaded_file($this->file['tmp_name'])){
			//$this->errors['FileNotExists'] = true;
			return false;
		}   
		return true;
	}
	
}
