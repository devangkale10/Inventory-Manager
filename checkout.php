<?php
require 'connect.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<style>
img{
	margin-left: auto;
	margin-right: auto;
	margin-top: auto;
	margin-bottom: auto; 
	width:20%;
	height: 30%;
	padding-left: 540px;
}
h3
{
	text-align: center;
}
</style>
<body>
	<?php
	$email_id = $_SESSION['email_id'];
	$query1 = "SELECT * FROM cart WHERE email_id = '$email_id'";
	$sql1 = mysqli_query($db,$query1);
	$count = mysqli_num_rows($sql1);
	while($rows = mysqli_fetch_assoc($sql1)) {
		$sql8 = "INSERT INTO transactions (item_name,email_id,t_type,quantity) VALUES ('".$rows['item_name']."','$email_id','SOLD','".$rows['quantity']."')" ;
		$query8 = mysqli_query($db,$sql8);
		$query2 = "UPDATE items SET stock = stock - '".$rows['quantity']."' WHERE item_name = '".$rows['item_name']."' ";
		$sql2 = mysqli_query($db,$query2);
		$query4 = "DELETE FROM cart WHERE email_id = '$email_id'";
		$sql4 = mysqli_query($db,$query4);
	}
	?>
	<img src="ok-green.png" alt="Success">
	<h3>Items Bought Successfully</h3>
	<a href = "user_afterlogin1.php"><h3>Return To Your Account</h3></a>
</body>
</html>