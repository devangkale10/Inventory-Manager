<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<?php
$query1 = "SELECT * FROM items";
$sql1 = mysqli_query($db,$query1);
$res1 = mysqli_num_rows($sql1);
$sum1 = $res1;
$query2 = "SELECT * FROM transactions";
$sql2 = mysqli_query($db,$query2);
$res2 = mysqli_num_rows($sql2);
$sum2 = $res2;
$query7 = "SELECT * FROM user_register";
$sql7 = mysqli_query($db,$query7);
$res7 = mysqli_num_rows($sql7);
$sum7 = $res7;
?>
<head>
	<title>Administrator Page</title>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
table {

	font-family: 'Raleway';
	border-collapse: collapse;
	width: 50%;
	overflow: hidden;
} 	
td, th {
	border: 1px solid #34495E;
	text-align: center;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #dddddd;
}
tr:nth-child(odd){
	background-color: white;
}
table.center {
	margin-left:auto; 
	margin-right:auto;
}
.button {

	border: none;
	padding: 10px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
.button1 {

	background-color: #4CAF50;
	border-radius: 12px;
	color: white;

}
.button2 {
	background-color: slateblue;
	border-radius: 12px;
	color: white; 	
}
.button3 
{
	background-color: red;
	border-radius: 12px;
	color: black;

}
.bg{
	background-image: url("https://www.softwaresuggest.com/blog/wp-content/uploads/2018/06/inventory_management6.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
body,html{
	height: 100%;
	margin: 0;
	font-family: 'Raleway';
	font-size: 15px;
	

}
.image {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
}
.backgr{
	margin:15px;
	background-color: white;
	opacity:0.2;
	width: 680px;
	height: 125px;
	position: absolute;
	left:24%;
	top:1%;
	border-radius: 25px;

}

h1 {
	color: black;
	text-align: center;
	top: 100px; 
	left: 450px; 
	width: 100%;
	padding-top: 50px;

}

hr
{
	border: 1px solid #dddddd;
	width :40%;
	margin-left: 420px;
}
.curs
{
	cursor: pointer;
}
</style>
<body>
	<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
		<div class="w3-container w3-row">
			<div class="w3-col s4">
				<img src="https://cdn3.iconfinder.com/data/icons/glypho-generic-icons/64/user-man-circle-invert-512.png" class="w3-circle w3-margin-right" style="width:46px">
			</div>
			<div class="w3-col s8 w3-bar">
				<span>Welcome, <strong><?php echo $_SESSION['email_id'];?></strong></span><br>
			</div>
		</div>
		<hr>
		<div class="w3-container">
			<h5>Dashboard</h5>
		</div>
		<div class="w3-bar-block">
			<a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
			<a href="add_item.php" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-plus-square-o fa-fw"></i>  Add Item</a>
			<a href="update_item.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i>  Update Item</a>
			<a href="delete_item.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-exclamation-circle fa-fw"></i>  Delete Item</a>
			<a href="transaction.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Transactions</a>
			<a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Log Out</a>
		</div>
	</nav>
	
	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px;margin-top:0px;">

		<!-- Header -->
		<header class="w3-container" style="padding-top:22px">
			<h5><b> Dashboard</b></h5>
		</header>

		<div class="w3-row-padding w3-margin-bottom">
			<div class="w3-quarter">
				<div class="w3-container w3-red w3-padding-16">
					<div class="w3-center">
						<h3><?php echo $sum1 ?></h3>

						<div class="w3-clear"></div>
						<h4>Items</h4>
					</div>
				</div>
			</div>
			<div class="w3-quarter">
				<div class="w3-container w3-blue w3-padding-16">
					<div class="w3-center">
						<h3><?php echo $sum2 ?></h3>
						<div class="w3-clear"></div>
						<h4>Transactions</h4>
					</div>
				</div>
			</div>
			<div class="w3-quarter">
				<div class="w3-container w3-orange w3-text-white w3-padding-16">
					<div class="w3-center">
						<h3><?php echo $sum7 ?></h3>
						<div class="w3-clear"></div>
						<h4>Users</h4></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<?php
$query4 = "SELECT * FROM items ORDER BY item_id";

$rs = mysqli_query($db, $query4);
if(mysqli_num_rows($rs)>0){
	echo '<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:300px;margin-top:0px;">
	<header class="w3-container" style="padding-top:0px">
	<h2><b> Items</b></h2><br>
	</header>';
	echo "</div>";
	echo "<table class='center'>
	<tr>
	<th>Item ID</th>
	<th>Item Name</th>
	<th>Stock</th>
	<th>Price</th>
	</tr>";
	if(mysqli_num_rows($rs)){
		while($rows = mysqli_fetch_assoc($rs)){
			echo "<tr>";
			echo "<td>".$rows['item_id']."</td>";
			echo "<td>".$rows['item_name']."</td>";
			echo "<td>".$rows['stock']."</td>";
			echo "<td>".$rows['price']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}
else
{
	echo "No Items";
}
?>
</body>
</html>
