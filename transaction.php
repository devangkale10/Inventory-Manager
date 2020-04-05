<!DOCTYPE html>
<html>
<head>
	<title>Transaction</title>
</head>
<style>
table
{
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width:50%;
	margin: 0 auto;

}
td,th
{
	border:1px solid #dddddd;
	text-align: center;
	padding:8px;
}
tr:nth-child(even)
{
	background-color: #dddddd;
}
tr:nth-child(odd)
{
	background-color: white;
}
table.center
{
	margin-left:auto;
	margin-right:auto;
}
body,html
{
	height:100%;
	margin:0;
	font-family: Arial,Helvetica,sans-serif;
	color:black;
}
.bg{
	background-image: url("https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?ixlib=rb-0.3.5&s=cc82c0c3d0fdb898451339f203c7463a&w=1000&q=80");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.image {

position: relative; 
width: 100%;

}
</style>
<body>
	<div class="bg">
	<div class="image">
<?php
session_start();
$db=mysqli_connect("localhost","root","","inventory");
$query1 = "SELECT * FROM transactions";
$rs = mysqli_query($db,$query1);
if($rs->num_rows > 0){
echo "<table class='center'>
<tr>
<th>Transaction ID</th>
<th>Item Name</th>
<th>Email ID</th>
<th>Transaction Type</th>
<th>Quantity</th>
</tr>";
if(mysqli_num_rows($rs))
{
	while($rows=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		echo "<td>".$rows['t_id']."</td>";
		echo "<td>".$rows['item_name']."</td>";
		echo "<td>".$rows['email_id']."</td>";
		echo "<td>".$rows['t_type']."</td>";
		echo "<td>".$rows['quantity']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}



}

?>
</div>
</div>
</body>
</html>