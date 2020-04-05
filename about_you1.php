<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About You</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
body,html{
	height: 100%;
	margin: 0;
	font-family: 'Poppins';
	font-size: 25px;
	color: white;
	opacity: 1;
}
.backgr{
	margin:15px;
	background-color: black;
	opacity:0.8;
	width: 500px;
	height: 600px;
	position: absolute;
	left:30.4%;
	top:2%;
	border-radius: 25px;

}	
.bg{
	background-image: url("gestão-de-estoque.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
p
{
	padding-left: 30px;
}

</style>

<body>
	<?php
	$email_id = $_SESSION['email_id'];
	$query1 = "SELECT * FROM user_register WHERE email_id = '$email_id'";
	$sql1 = mysqli_query($db,$query1);
	$rows = mysqli_fetch_assoc($sql1);
	$fname = $rows['fname'];
	$lname = $rows['lname'];
	$address = $rows['address'];
	?>
	<div class="bg">
		<div class="backgr">
			<p>Email : </p>
			<p><?php echo $_SESSION['email_id']; ?></p>
			<p>Name : </p>
			<p> <?php echo $rows['fname'] ;echo" "; echo $rows['lname']; ?></p>
			<p>Address : </p>
			<p><?php echo $rows['address']; ?></p>
		</div>
	</div>
</body>
</html>