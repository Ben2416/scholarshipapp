<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FileUpload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//$this->load->model('Bssbform_model');
    }
	
	public function index(){
		$data['page_title'] = ucfirst('File Upload');
		$data['username'] = $this->session->username;
		
		$this->load->view('fileupload_view');
	}

    public function upload()
    {
		$this->load->library('upload');
		$fupload_field = array('scholarship_award_letter','university_admission_letter');
		$fupload_dir = array('./assets/award_letters','./assets/admission_letters');
		$error = 0;
		
		$uname = explode('@',$this->session->username);
		$fdata = array();
		
		for($i=0;$i<count($fupload_dir);$i++){
			$config['upload_path'] = $fupload_dir[$i];
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size'] = '2048';
			$config['file_name'] = $uname[0].'_'.$fupload_field[$i];
			$config['overwrite'] = true;

			$this->upload->initialize($config);
			
			if(!$this->upload->do_upload($fupload_field[$i])){
                $errors = array('error' => $this->upload->display_errors());
                $error += 1;
            }else{
                $fdata[$i] = array('upload_data' => $this->upload->data());
            }
		}
		
		if($error == 0){
			//$this->Bssbform_model->update();
			//$this->session->set_flashdata('rsuccess_msg', 'Congratulations! Your request has submitted.');
			//echo 'no errors';
			//redirect('fileupload');
			return true;
		}else{
			for($i=0;$i<count($fdata);$i++){
				unlink($fdata[$i]);
			}
			return false;
		}
		
        /* if (isset($_FILES['upload']['name'])) {
            // total files //
            $count = count($_FILES['upload']['name']);
            // all uploads //
            $uploads = $_FILES['upload'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) {
                    //move_uploaded_file($uploads['tmp_name'][$i], './assets/awardletter/' . $uploads['name'][$i]);
                    echo $uploads['name'][$i] . "\n";
                }
            }
        } */
    }
	
	/*
	<IfModule mod_rewrite.c>
RewriteEngine On
#RewriteBase /
RewriteCond $1 !^(index\.php|global|assets|assets2|images|js|css|uploads|passports|award_letters|admission_letters|favicon.png)
RewriteCond %(REQUEST_FILENAME) !-f
RewriteCond %(REQUEST_FILENAME) !-d
RewriteRule ^(.*)$ ./index.php/$1 [L]
</IfModule>
<IfModule !mod_rewrite.c>
ErrorDocument 404 /index.php
</IfModule>
	*/

}