
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
	$firstName = $_POST['first_Name'];
	$lastName = $_POST['last_Name'];
	$phone = $_POST['phone'];
	$e_mail = $_POST['email'];
	$message = $_POST['message'];
	$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
  
  //send email
  mail( $firstName , $lastName , $phone , $e_mail , $message , $headers);
  
  //Email response
  echo "Thank you for contacting me!";
  }
  
?>
<?php 

 $email_to = "johnnykru@gmail.com";
 $email_subject = "MESSAGE FROM KRU DESIGN";

?>





