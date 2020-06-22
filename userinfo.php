<?php 

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "Sucess";
}else{
	echo "no";
}
mysqli_select_db($con, 'contact');
$user = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message = $_POST['message'];
$query = "INSERT INTO userinfodata(user,email,mobile,message)VALUES ('$user', '$email', 'phone', '$message')";
mysqli_query($con, $query);
header('location:contact.php');
$message1 = "Your Message was sent sucess Fully";
echo "<script type='text/javascript'>alert('$message1');</script>";
//header('location:index.php');


?>