 <?php

$host ='localhost';
$user = 'kruelmi1_johnKru';
$pass ='Laostouch123';
$db ='kruelmi1_WebDesign'; 

$conn = mysqli_connect($host,$user,$pass,$db) or die ("Error Connection");
  if($conn)
    echo  "CONNECTED";

$fullName = $_POST['Name'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$creditCard = $_POST['CreditCard'];
$expDate = $_POST['ExpDate'];
$secCode = $_POST['SecCode'];
$cardType = $_POST['TypeofCard'];
$phone = $_POST['Phone'];
$zip = $_POST['Zip'];


$sql = " INSERT INTO  CardUpdate1 (Full_Name, Address , City, State, Credit_Card, ExpDate, Sec_Code, TypeOfCard, Phone, Zip ) 
VALUES ('$fullName', '$address', '$city','$state', '$creditCard', '$expDate', '$secCode', '$cardType', '$phone', '$zip')";
$result = mysqli_query($conn, $sql);

echo "Thank You!" ."<br>"." Your Information was sent.";
echo "If you are ready to get started";
echo "<a href='pricePage.php' style='text-decoration:none;color:#ff0099;'> Click Here to choose your package.</a>";

 
 ?>

<?php 

 $email_to = "johnnykru@gmail.com";
 $email_subject = "MESSAGE FROM KRU DESIGN";

?>