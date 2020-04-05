<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<head>
	<title>Update Item</title>
</head>
<style>
body,html{
	height: 100%;
	margin: 0;
	font-family: 'Lato';
	font-size: 15px;
	color: black;
}
.bg{
	background-image: url("https://cn.pling.com/img/1/a/7/d/5d6291d4f7be91e68597555bc4e86334f80d.png");
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
	background-color: #5DADE2;
	color: white;
	cursor: pointer;
	border: none;
}
input[type=submit]:hover {
	background-color: #3498DB;
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
	background-color: black;
	opacity:0.8;
	width: 500px;
	height: 600px;
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
.bgimg-1, .bgimg-2, .bgimg-3 {
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.bgimg-1 {
	background-image: url('https://image.shutterstock.com/z/stock-vector-flat-design-vector-illustration-of-modern-office-interior-with-designer-desktop-showing-design-155524427.jpg');
	min-height: 100%;
}
form
{
	padding-top: 60px;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
	.bgimg-1, .bgimg-2, .bgimg-3 {
		background-attachment: scroll;
		min-height: 100px;
	}
}
img
{
	width: 25%;
	height: 75%;
	padding-top: 100px;
	margin-left: 100px;
	border-radius: 25px;

}
</style>
<body>
	<div class="w3-top">
		<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
			<div class="w3-display-middle" style="white-space:nowrap;">
				<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">UPDATE ITEM</span>
			</div>
			<form action="update_item1.php" method="post">
				<b><h3>Item ID:  </h3></b>
				<input type="text" name="newitem_id" placeholder="Item ID" required>
				<b><h3>Stock:  </h3></b>
				<input type="text" name="new_stock" placeholder="Stock" required>
				<b><h3>Price:  </h3></b>
				<input type="text" name="new_price" placeholder="Price" required>
				<br><br>
				<input type="submit" value="Update">
			</form>
		</div>
	</div>
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkI1a18kp0pcxcbC4JRWYJ01JzTJJVi5zYherhstBOho6LwGex" alt="notepad">
</body>
</html>
