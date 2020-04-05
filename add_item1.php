<?php
require 'connect.php';
$item_name = $_POST['item_name'];
$sql3 = "SELECT * FROM items WHERE item_name = '$item_name'";
$res4 = mysqli_query($db,$sql3);
if(mysqli_num_rows($res4) == 0){
$stock = $_POST['stock'];
$price = $_POST['price'];
$sql1 = "INSERT INTO items (item_name,stock,price) VALUES ('$item_name','$stock','$price')";
$res1 = mysqli_query($db,$sql1);
$sql2 = "INSERT INTO transactions (item_name,email_id,t_type,quantity) VALUES ('$item_name','ADMIN','BUY','$stock')";
$res2 = mysqli_query($db,$sql2);
if($res1&&$res2) {
	echo "New Record Inserted Successfully";
	header('location:userinfo.php');
}
else {
	echo "Error";
}
}
else {
	echo "Item name already exists";
}
?>
	