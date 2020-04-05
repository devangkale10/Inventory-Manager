<?php
require 'connect.php';
$newitem_id = $_POST['newitem_id'];
$new_stock = $_POST['new_stock'];
$new_price = $_POST['new_price'];
$sql = "UPDATE items SET item_id='$newitem_id',stock ='$new_stock',price='$new_price' WHERE item_id='$newitem_id'";
$res2 = mysqli_query($db,$sql);
?>