


 <?php

/*$host ='localhost';
$user = 'root';
$pass ='';
$db ='test';*/

$host ='localhost';
$user = 'kruelmi1_johnKru';
$pass ='Laostouch123';
$db ='kruelmi1_WebDesign'; 

$conn = mysqli_connect($host,$user,$pass,$db) or die ("Error Connection");
  if($conn)
    echo  "YOUR CONNECTED";


$firstName = $_POST['first_Name'];
$lastName = $_POST['last_Name'];
$phone = $_POST['phone'];
$e_mail = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$type = $_POST['type'];
$webHosting = $_POST['webHost'];
$marketing = $_POST['marketing'];
$message = $_POST['message'];




$sql = "INSERT INTO ClientSignUp (First_Name, Last_Name, Phone, E_mail, Address, City, State, Zipcode, Type_of_Website, Web_Hosting, Marketing, Message ) 
VALUES ('$firstName', '$lastName', '$phone', '$e_mail', '$address', '$city','$state','$zip','$type','$webHosting','$marketing','$message')";
$result = mysqli_query($conn, $sql);

echo "Thank You!" ."<br>"." Your Information was sent.";
echo "Our developer will contact you [by phone or E-mail] to get started."."<br>";
echo "If you are ready to get started";
echo "<a href='pricePage.php' style='text-decoration:none;color:#ff0099;'> Click Here to choose your package.</a>";

 ?>