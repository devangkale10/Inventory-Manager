<?php 
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart</title>
</head>
<?php
$db = mysqli_connect("localhost","root","","inventory");
$search1 = $_POST['search1'];
$email_id=$_SESSION['email_id'];
$price = $_POST['price'];
$sql2 = "SELECT * FROM items WHERE item_name = '$search1'";
$query2 = mysqli_query($db,$sql2);
$rows = mysqli_fetch_assoc($query2);
$quantity = $_POST['quantity'];
$stock1 = $rows['stock'];
$price = $rows['price']*$quantity;
if($stock1 >= $quantity){
$sql1 = "INSERT INTO cart(item_name,email_id,quantity,price) VALUES ('$search1','$email_id','$quantity','$price')";
$query1 = mysqli_query($db,$sql1);
if($query1 === TRUE)
{
	header('location:user_afterlogin1.php');
}
}
else{
	echo "Not Enough Stock";
}
?>