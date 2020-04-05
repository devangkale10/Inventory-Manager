<!DOCTYPE html>
<html>
<head>
	<title>Buy Item</title>
</head>
<style>
img{

	
	width:250px;
	height:250px;
}
.center{
	display: block;
    margin-left: auto;
    margin-right: auto;
}
h3{
	text-align: center;
}
</style>
<body>

<?php
$link = mysqli_connect("localhost", "root", "", "inventory");
if($link === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}
$query1 = $_POST['query1'];
$new_stock1 = $_POST['new_stock1'];
$query2 = "SELECT stock from items WHERE item_name = '$query1' ";
$sql2 = mysqli_query($link,$query2);
if(mysqli_num_rows($sql2)>0)
{
	$row = mysqli_fetch_array($sql2);
	if($new_stock1 < $row['stock']){
$stock1 = "SELECT stock FROM items WHERE item_name = '$query1' ";
if($sql = mysqli_query($link,$stock1))
{
	if(mysqli_num_rows($sql)>0)
	{
	$sql1 = "UPDATE items SET stock = stock - '$new_stock1' WHERE item_name = '$query1' ";

	$res = mysqli_query($link,$sql1);
	if($res === true)
	{
		echo '<img src="https://previews.123rf.com/images/theerakit/theerakit1802/theerakit180200002/94761130-green-tick-icon-on-white-background-green-check-mark-icon-tick-symbol-flat-style-vector-tick-sign-.jpg" alt="tick" class="center">' ;
		echo "<h3>Bought Successfully</h3>";
	}
}

}
}
else
{
	echo '<img src="https://openclipart.org/download/267591/aaaacrosss.svg" alt="cross" class="center">';
	echo "<h3>Not enough stock</h3>";
}
}
?>