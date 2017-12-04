<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n E-mail: $email \n Phone: $phone \n Message: $message";
$recipient = "johnnykru@gmail.com";
$subject = "Contact Form [Kru Design]";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Your Information was sent . You will hear from us real soon.." . " -" . "<a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>