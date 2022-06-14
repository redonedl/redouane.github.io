<?php 

	$to = "uddinasib@gmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$location = $_POST['location'];
	$note = $_POST['message'];

	$subject = "Form submission";
	$message = $name . " has send the contact message. His / her location is : " .  $location . ". He / she worte the following... ". "\n\n" . $note;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>