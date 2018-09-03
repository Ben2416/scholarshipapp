<?php
include "emailsms.php";
class Mail extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		//$this->load->helper('form');
	}
	public function index(){echo "here<br>";
		$es = new EmailSms('Benedict','Onabe','ben2416@live.com','password','07035484893');
	    $es->emailsms();
		echo "there<br>";
		//$this->send_mail('Benedict','Onabe','ben2416@live.com','password','07035484893');
	}
	
	public function send_mail($fname,$sname,$email,$pass,$phone){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_timeout' => '7',
			'smtp_user' => 'nand@gmail.com',
			'smtp_pass' => 'fdsfjo#$j',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'newline' => '\r\n',
			'wordwrap' => TRUE
		);  
		//$config['protocol'] = 'sendmail';
		//$config['mailpath'] = 'c:/wamp/sendmail/sendmail.exe -t -i';
		
		$message = "<html><head><title>BSSB Registration</title></head>";
		//$message.= "<body><img src='http://uoaonline.com/admission/uoa_logo.png' /><br/>";
		$message.= "Hi $fname $sname<br/><br/>Congratulations! <br/>Your registration was successful.<br/>";
		$message.= "<br/><br/>Your username is : $email<br/>Your password is : $pass";
		$message.= "<br/><br/>You can now <a href='http://bssb.com.ng'>sign in</a> with your details.<br/>Goodluck.<br/><br/>Admin.</body>";
        $message.= "</html>";
		$this->load->library('email',$config);
		$this->email->clear();
		$this->email->set_newline('\r\n');
		$this->email->from('admin@bssb.com.ng','Admin');
		$this->email->to($email);
		$this->email->subject('BSSB Regisration.');
		$this->email->message($message);
		
		//send mail
		if($this->email->send()){
			echo 'email sent';
		}else{
			echo 'email not sent';
			show_error($this->email->print_debugger());
		}
	}
}