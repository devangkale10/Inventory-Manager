<?php
require 'connect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$address = $_POST['address'];
$fnameErr=$emailErr=$lnameErr=$passErr=$AddressErr="";
if(!(preg_match("/^[a-zA-Z]*$/",$fname)))
{
	$fnameErr = "Only letters and white space allowed in First Name";
	echo $fnameErr;
}
else if(!(preg_match("/^[a-zA-Z]*$/",$lname)))
{
	$lnameErr = "Only letters and white space allowed in Last Name";
	echo $lnameErr;
}
else if(!(filter_var($email_id,FILTER_VALIDATE_EMAIL))){
	$emailErr = "Not a valid email address";
	echo $emailErr;
}
else
{
	//$email_id = mysqli_real_escape_string($db, $_POST['email_id']);
	//$password = mysqli_real_escape_string($db, $_POST['password']);
	$sql1 = "INSERT INTO user_register VALUES ('$fname','$lname','$email_id','$password','$address')";
	$query1 = mysqli_query($db,$sql1);
	if($query1) {
		header('location:register_success.php');
	}
}
?>
