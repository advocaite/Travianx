<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Mailer.php                                                  ##
##  Developed by:  Dixie                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

class Mailer {
	
	function sendActivate($email,$username,$pass,$act) {
		
		$subject = "Welcome to ".SERVER_NAME;
		
		$message = "Hello ".$username."

Thank you for your registration.

----------------------------
Name: ".$username."
Password: ".$pass."
Activation code: ".$act."
----------------------------

Click the following link in order to activate your account:
".SERVER."activate.php?code=".$act."

Greetings,
TravianX";
				
		$headers = "From: Mailer@".SERVER_NAME."\n";
		//$headers .= 'MIME-Version: 1.0' . "\r\n";
		//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		mail($email, $subject, $message, $headers);
	}
	
};
$mailer = new Mailer;
?>