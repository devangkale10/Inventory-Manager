<?php
require 'connect.php';
$query1 = $_POST['query1'];
$sql1 = "SELECT * FROM items WHERE item_id = '$query1'";
$res1 = mysqli_query($db,$sql1);
if(mysqli_num_rows($res1)>0)
{
	$sql2 = "DELETE FROM items WHERE item_id = '$query1' ";
	$res2 = mysqli_query($db,$sql2);
	echo "Item Deleted";
	header('location:userinfo.php');
}
else
{
	echo "Item ID Not Found";
}
?>
