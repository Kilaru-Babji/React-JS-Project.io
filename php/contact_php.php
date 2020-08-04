<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone_number = $_POST['phone'];
	$gender = $_POST['gender'];
	$message = $_POST['message'];
	
	$email_from = 'babjikilaru@gmail.com';
	
	$email_subject = "New Form Submission from travels website";
	
	$email_body = "User Name: $name.\n".
					"User PhoneNumber: $phone_number.\n".
					"User Gender: $gender.\n".
					"User Email: $visitor_email.\n".
					"user Message: $message.\n";
				
	$to = "kilaru_babji@srmap.edu.in";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: ../html/Contact.html");
?>