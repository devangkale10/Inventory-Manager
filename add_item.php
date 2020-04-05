<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body,html{
	height: 100%;
	margin: 0;
	font-family: 'Lato';
	font-size: 15px;
	color: black;
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
.bgimg-1 {
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.bgimg-1 {
	background-image: url('https://cdn.slidemodel.com/wp-content/uploads/6655-02-business-and-time-management-flat-icons-1.jpg');
	min-height: 100%;
}
form
{
	padding-top: 170px;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
	.bgimg-1, .bgimg-2, .bgimg-3 {
		background-attachment: scroll;
		min-height: 200px;
	}
}
img
{
	width: 27%;
	height: 90%;
	padding-top: 200px;
	margin-left: 100px;
	border-radius: 25px;

}
</style>
<body>
	<div class="w3-top">
		<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
			<div class="w3-display-middle" style="white-space:nowrap;">
				<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ADD ITEM</span>
			</div>
			<form action="add_item1.php" method="POST">
				<b><h3>Item Name:  </h3></b>
				<input type="text" name="item_name" placeholder="Item Name" required>
				<b><h3>Stock:  </h3></b>
				<input type="text" name="stock" placeholder="Stock" required>
				<b><h3>Price:  </h3></b>
				<input type="text" name="price" placeholder="Price" required>
				<br><br>
				<input type="submit" value="Add Item">
			</form>
		</div>
	</div>
	<img src="https://ithemes.com/wp-content/uploads/2015/01/website-launch-checklist.jpg" alt="notepad">
</body>
</html>

