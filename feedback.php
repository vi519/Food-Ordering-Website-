<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$email_from='Easytutorials@avinashkr.com';

$email_subject="New Form Submit";
/*
$email_body="Name: $name.\n",
			"Email: $email.\n",
			"Message: $message.\n";
			*/
$to="shivalikirdat@gmail.com";
$headers="From: $email_from \r\n";
$headers="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:feedback.html");
	
?>