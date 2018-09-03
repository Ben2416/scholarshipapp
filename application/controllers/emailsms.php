<?php
include "sample.php";

class EmailSms{

	private $fname;
	private $sname;
	private $email;
	private $pass;
	private $phone;

	public function __construct($fname,$sname,$email,$pass,$phone){
		//$this->con = $con;
		$this->fname = $fname;
		$this->sname = $sname;
		$this->email = $email;
		$this->pass = $pass;
		$this->phone = $phone;
	}
	
	public function emailsms(){
		//Send Email
        $message = "<html><head><title>BSSB Registration</title></head>";
		$message.= "<body><img src='".base_url()."assets/logo.png' /><br/>";
		$message.= "Hi $this->fname $this->sname<br/><br/>Congratulations! <br/>Your registration was successful.<br/>";
		$message.= "<br/><br/>Your username is : $this->email<br/>Your password is : $this->pass";
		$message.= "<br/><br/>You can now <a href='http://uoaonline.com'>sign in</a> with your details.<br/>Goodluck.<br/><br/>Admin.</body>";
                $message.= "</html>";

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: <admin@bssb.com.ng>' . "\r\n";
	
		if(mail($this->email,"BSSB Registration",$message,$headers)){
			//echo "mail sent<br>";
		}else{
			//echo "mail not sent<br>";
		}
		
		//Send SMS
		if(!sendSMS($this->email,$this->pass,$this->phone)){ 
			//updateSMS($this->con,$this->email,0);//continue;
		}else{ 
			//updateSMS($this->con,$this->email,1);
		}
		
	}
}//class
	
	//$es = new EmailSms($con,'Benedict','Onabe','realbenten@gmail.com','password','08026036842');
	//$es->start();
	//$es->emailsms();
	//echo "<br>end";
	
?>