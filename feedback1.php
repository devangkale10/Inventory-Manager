<?php
require 'connect.php';
$full_name=$_POST['name'];
$email_id=$_POST['email'];
$mess1=$_POST['message'];
$query1="INSERT INTO feedback VALUES ('$full_name','$email_id','$mess1')";
$sql1=mysqli_query($db,$query1);
if($sql1){
	echo"Thank You For Your Valuable Response!";
}
else {
	echo "Error";
}
?>
