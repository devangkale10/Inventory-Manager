<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";
$_SESSION['success'] = "";
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'inventory');
if ($db->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
if(!empty($_POST['email_id']))
{
	$email_id = mysqli_real_escape_string($db, $_POST['email_id']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if (empty($email_id)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	$query = "SELECT * FROM login WHERE email_id='$email_id' AND password='$password'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 1) {
		$_SESSION['email_id'] = $email_id;
		$_SESSION['success'] = "You are now logged in";
		header('location: userinfo.php');
	}
	else {
		echo "Wrong username or password";
	}
}
?>