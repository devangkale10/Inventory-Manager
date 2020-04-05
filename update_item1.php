<?php
require 'connect.php';
$newitem_id = $_POST['newitem_id'];
$new_stock = $_POST['new_stock'];
$new_price = $_POST['new_price'];
if(!(preg_match("/^[0-9]*$/",$new_stock)&&(preg_match("/^[0-9]*$/",$new_price)))) {
	echo "Please enter valid number";
}
else {
$query1="SELECT * FROM items WHERE item_id = '$newitem_id'";
$res1 = mysqli_query($db,$query1);
if(mysqli_num_rows($res1)>0) { 
	$sql = "UPDATE items SET item_id='$newitem_id',stock = stock + '$new_stock',price='$new_price' WHERE item_id='$newitem_id'";
	$res2 = mysqli_query($db,$sql);
	if($res2) {
		echo "Record Updated Successfully";
	}
}
else
{
	echo "Could Not Update. Item ID Does Not Exist"; 
}
}
?>