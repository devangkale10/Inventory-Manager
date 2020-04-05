<?php
$x=$_POST['email_id'];
$y=$_POST['password'];
$servername="localhost";
$username= "root";
$password= "";
$dbname= "inventory";
//create connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error) {
	die("connection error" . $conn->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO `login` (`email_id`, `password`) VALUES ('$x','$y')";

if($conn->query($sql)== TRUE) {
	echo "New Record Inserted Successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>