<?php

/*
Theme Name: Alamben - Creative Bootstrap Responsive Template
Theme URI: http://themeforest.net/user/responsiveexperts
Description: This css file is for template layout alignments
Version: 1.0
Author: 
Author URI: 

-------------------------------------------------------------------------------------
This file is using for contact form SUBMISSION. Just replace the  To email ID bellow.
-------------------------------------------------------------------------------------
*/


	$msg = "no"; 
    $name     = $_POST['name'];
    $email    = $_POST['email'];
	$contact  =  $_POST['phone'];
	$subject    = "Contact Message Received";
    $msgs     = $_POST['msg'];
    
    if($name !='' && $email!='' && $msgs !=''){
        $to = "mail.responsiveexpert@gmail.com"; /* Enter Your Specific email ID Here */
	$subject = $subject;
	$message = "<p>Dear Admin,</p><p>You have a contact request </p><p>Please find the below information</p>
                    <p>Name :".$name."</p>
                    <p>Email :".$email."</p>
					<p>Contact :".$contact."</p>					
                    <p>Message:</p><p>".$msgs."</p>";
	$header .= "To: ".$to. "\r\n";
	$header .= "From:".$email."\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$send = mail ($to,$subject,$message,$header);
        if($send){
	$msg = "ok"; 
	} else{
	$msg = "no"; 
	}
        echo $msg;
    }
	else
	{
		echo $msg;
	}
?>
