<?php 

	$to = "uddinasib@gmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$business = $_POST['business'];

	$subject = "Form submission";
	$message = $sender_name . " has send the contact message. His / her phone number is : " .  $phone . " and his / her selected business type is " . $business;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>