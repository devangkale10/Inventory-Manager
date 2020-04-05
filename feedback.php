<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>

</head>
<style>
body{
	font-family: 'Poppins';
}

.submit
{
	margin-top: 15px;
	padding: 10px 20px 11px;
	font-size: 20px;
	background-color: transparent;
	text-shadow: 1px 1px #F36C8C;
	color: #ffffff;
	border-radius: 100px;
	border: 1px solid #2ECC71;
	cursor: pointer;
	text-align: center;
}
.form-control{

	border:none;
	width:500px;
	background:transparent;
	outline: none;
	padding:15px;
	border-bottom:1px solid black;
	font-size: 20px;

}
input[type=text]:focus {
	outline: none;
	border-bottom:1px solid #2ECC71;

}
textarea:focus{
	outline: none;
	border-bottom:1px solid #2ECC71;

}
</style>

<body>
<div class="contact-title">
	<h1>Hello!</h1>
	<h2>We are always ready to serve you!</h2>
</div>

<div class="contact-form">
	<form class="contact-form" method="post" action="feedback1.php">
		<br><input name="name" type="text" class="form-control" placeholder="Full Name" required><br>
		<input name="email" type="text" class="form-control" placeholder="Email" required><br>
		<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
		<input type="submit" class="submit" value="SEND MESSAGE">
	</form>
</div>
</body>
</html>