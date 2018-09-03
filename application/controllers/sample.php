<?php

function sendMessage($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}

function updateSMS($con,$email,$val){
	$query = "UPDATE users SET sms=$val WHERE email LIKE '%$email%' LIMIT 1";
	$rs = mysqli_query($con, $query) or die(mysqli_error($con));
	if($rs && mysqli_affected_rows($con)>0){/*echo 'SMS Updated';*/}else{/*echo 'SMS Not Updated';*/}
}

 function validPhone($phone){
 	if(strlen($phone)==11) return true;
 	else return false;
}

function formatPhone($phone){
	if(substr($phone,0,1) == 0){
		return '234'.substr($phone,1,11);
	}
	else return "";
}

function sendSMS($email,$password,$mobile){
	$text = "Your account has been created. \nYour username is : ".$email.". \nYour password is : ".$password;
	$text = urlencode($text);
	$username= 'xtreemhackzone@gmail.com';
	$password='password';
	$sender='BSSB';	
	if(validPhone($mobile)){
		$mobile = formatPhone($mobile);
		if(!empty($mobile)){
			 $url="http://sms.bbnplace.com/bulksms/bulksms.php?username=$username&password=$password&mobile=$mobile&sender=$sender&message=$text";
			 $reply = sendMessage($url);
			 if($reply == "1801" || $reply == 1801) return true;
			 else return false;
		}
		else return false;
	}
	else return false;
}

?>