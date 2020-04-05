<!DOCTYPE html>
<?php
@ob_start();
session_start();
?>
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
$link = mysqli_connect("localhost","root","", "inventory");
if($link === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}
$query1 = $_POST['search'];
$new_stock1 = $_POST['new_stock1'];
$query2 = "SELECT * FROM items WHERE item_name = '$query1' ";
$sql2 = mysqli_query($link,$query2);
$row = mysqli_fetch_array($sql2);
$stock1 = "SELECT * FROM items WHERE item_name = '$query1' ";
$sql = mysqli_query($link,$stock1);
$sql1 = "UPDATE items SET stock = stock - '$new_stock1' WHERE item_name = '$query1' ";
$res = mysqli_query($link,$sql1);	
echo '<img src="https://previews.123rf.com/images/theerakit/theerakit1802/theerakit180200002/94761130-green-tick-icon-on-white-background-green-check-mark-icon-tick-symbol-flat-style-vector-tick-sign-.jpg" alt="tick" class="center">' ;
echo "<h3>Bought Successfully</h3>";


?>

</body>
</html>