<?php
$from_name = $_POST['name'];
$from_email = $_POST['email'];
$from_phone = $_POST['phone'];
$from_website = $_POST['website'];
$Comments = $_POST['message'];
$formcontent=" From: $from_name \n Phone: $from_phone \n Website: $from_website \n  Message: $Comments";
$recipient = "revvit.connect@gmail.com";
$subject = "Contact Form Submission";
$mailheader = "From: $from_email \r\n";

?>
