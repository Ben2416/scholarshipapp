<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "emailsms.php";
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
		$data['page_title'] = ucfirst('register');
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		$this->form_validation->set_rules('firstname','First Name','trim|required');
		$this->form_validation->set_rules('lastname','Last Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[11]|max_length[11]|is_unique[users.phone]',array('is_unique'=>'This %s already exists.'));
		$this->form_validation->set_rules('sex', 'Sex', 'required');
		$this->form_validation->set_rules('address','Contact Address','trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$data);
			$this->load->view('register_view');
			$this->load->view('footer');
		}else{
			$uname = explode('@',$this->input->post('email'));
			$dname = str_replace(".","", $uname[0]);
            $config['upload_path'] = './assets/passports';
            $config['allowed_types'] = 'png|jpg|gif|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '500';
            $config['max_height'] = '500';
			$config['file_name'] = $dname;
			$config['overwrite'] = true;
			
			$this->upload->initialize($config);
			
			if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
				$erm = "";
				foreach($errors as $er){
					$erm.=$er.'<br>';
				}
				$this->session->set_flashdata('error_msg',$erm);
				$this->load->view('header',$data);
				$this->load->view('register_view');
				$this->load->view('footer'); 
            }else{
                $data = array('upload_data' => $this->upload->data());
			
				@$post_image = $dname.$data['upload_data']['file_ext'];
                
				$pass = $this->createPass(8);
				$this->Register_model->register($post_image,$pass);
				$es = new EmailSms($this->input->post('firstname'),$this->input->post('lastname'),$this->input->post('email'),$pass,$this->input->post('phone'));
				$es->emailsms();
				$this->session->set_flashdata('rsuccess_msg', 'Your account has been created successfully. Kindly check your email for login details.');
				redirect(base_url().'login');
            }
		}
	}
	
	function createPass( $length = 6 ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$password = substr( str_shuffle( $chars ), 0, $length );
		return $password;
	}
}
