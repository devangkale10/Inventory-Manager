<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<style>
body,html{
	height: 100%;
	margin: 0;
	font-family: 'Raleway';
	font-size: 10px;
	color: black;
}
.bg{
	background-image: url("5d6291d4f7be91e68597555bc4e86334f80d.png");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

input{
	width: 25%;
	padding: 12px;
	border-radius: 4px;
	margin: 5px 0;
	opacity: 0.85;
	display: inline-block;
	font-size: 17px;
	line-height: 20px;
	text-decoration: none; /* remove underline from anchors */
	border:2px solid #2C3E50;
}
.btn {
	width: 25%;
	padding: 12px;
	border-radius: 4px;
	margin: 5px 0;
	opacity: 1;
	display: inline-block;
	font-size: 17px;
	line-height: 20px;
	text-decoration: none; /* remove underline from anchors */
}
input:hover,
.btn:hover {
	opacity: 1;
}
input[type=submit] {
	position: absolute;
	width: 15%;
	left:6%;
	background-color: #52D017;
	color: white;
	cursor: pointer;
	border: none;
}
input[type=submit]:hover {
	background-color: #54c571;
}
form{
	position:fixed;
	top:5%;
	left:40%;
	width:900px;
	margin: 0 auto;
}
.backgr{
	margin:15px;
	background-color: white;
	opacity:0.8;
	width: 500px;
	height: 620px;
	position: absolute;
	left:30.4%;
	top:1%;
	border-radius: 25px;
}
.error
{
	color: #FF0000;
}
input[type=text]:focus
{
	outline: none;
	border: 2px solid #2ECC71;
}
input[type=password]:focus{
	outline: none;
	border: 2px solid #2ECC71;
}
textarea{
	border: 2px solid #2C3E50;
	border-radius: 4px;
}
textarea:focus{
	outline: none;
	border: 2px solid #2ECC71;
}

</style>
<body>
	<div class="bg">
		<div class="backgr">
			<form action = "register2.php" method="POST">  
				<!--form action="register1.php" method="POST"-->
				<b><h2>First Name :</h2></b>
				<input type="text" name="fname" placeholder="First Name" required>
				<b><h2>Last Name :</h2></b>
				<input type="text" name="lname" placeholder="Last Name" required>
				<b><h2>Email ID :</h2></b>
				<input type="text" name="email_id" placeholder="Email ID" required>
				<b><h2>Password :</h2></b>
				<input type="password" name="password" placeholder="Password" required>
				<br><br>
		        <b><h2>Address :</h2></b>
				<textarea rows="4" cols="30" name="address" placeholder="Address" required></textarea>
				<br><br>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>
</body>
</html>