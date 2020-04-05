<?php
require 'connect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$fnameErr=$emailErr=$lnameErr=$passErr="";
if(!(preg_match("/^[a-zA-Z]*$/",$fname)))
{
	$fnameErr = "Only letters and white space allowed";
	echo $fnameErr;
}	
else
{
	//$email_id = mysqli_real_escape_string($db, $_POST['email_id']);
	//$password = mysqli_real_escape_string($db, $_POST['password']);
	$sql1 = "INSERT INTO user_register VALUES ('$fname','$lname','$email_id','$password')";
	$query1 = mysqli_query($db,$sql1);
	if($query1) {
		header('location:register_success.php');
	}
	else
	{
		echo "Email ID already  exists";
	}
}
?>
