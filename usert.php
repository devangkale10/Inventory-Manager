<html>
<head>
	<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
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
     /* Green */
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
	background-image: url("https://i1.wp.com/www.deteched.com/wp-content/uploads/2017/04/Backgrounds-download-abstract-minimalist-wallpaper-HD.jpg?fit=1920%2C1080");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
body,html{
	height: 100%;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
	color: black;
	

}
.image {

position: relative; 
width: 100%;

}

h1 {

position: absolute; 
top: 50px; 
left: 450px; 
width: 100%;
color: white;

}
</style>
</head>
<body>
	<div class="bg">
	<div class="image">
		<img src="https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-Background-HD-Images-Screen-Download-PIC-WPD0013520.jpg" width="100%" height="30%">
	

<?php 
	session_start(); 
        $db = mysqli_connect('localhost', 'root', '', 'inventory');
	if (!isset($_SESSION['email_id'])) {
		$_SESSION['msg'] = "You must log in first";
		//header('location: purchase.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email_id']);
		//header("location: purchase.php");
	}

?>
<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

<?php  if (isset($_SESSION['email_id'])) : ?>
<h1>Welcome, <strong><?php echo $_SESSION['email_id']; ?></strong></h1></div>
<?php
                            $uname = $_SESSION['email_id'];
                           // $pwd = $_SESSION['password']
                            $query1 = "SELECT * FROM items WHERE email_id='$uname'";




                            $rs = mysqli_query($db, $query1);
                            if($rs->num_rows>0){

                            
                            
                            echo "<table class='center'>
                            <tr>
                            <th>Item Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            </tr>";
                            if(mysqli_num_rows($rs)){
                                while($rows = mysqli_fetch_assoc($rs)){
                                     //echo "Name : ".$rows['name'];
                                    //echo "<br>Username : ".$rows['username'];
                                    //echo "<br>Email : ".$rows['email_id'];
                                    //echo "<br>Address : ".$rows['address'];
                                    //echo "<br>Mobile : ".$rows['mobile'];
                                    //echo "<br>Password : ".$rows['password'];
                                    //mysqli_free_result($result);
                                    //echo "<br>Email: ".$rows['email_id'];
                                    echo "<tr>";
                                    echo "<td>".$rows['item_name']."</td>";
                                    echo "<td>".$rows['stock']."</td>";
                                    echo "<td>".$rows['price']."</td";
                                    echo "<tr>";


                                }
                                echo "</table>";
                            }
                           }
                        
                                
                            
                            
                        ?>
                        
                        
		<?php endif ?>
	}

	<br>
	&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
	&nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp; &nbsp;	
	&nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp; &nbsp;	
	&nbsp; &nbsp; &nbsp; &nbsp;		
	<a href = "buy_item.php"><button class="button button1">Buy Item</button></a>
	&nbsp; &nbsp;
	<a href="#"><button class="button button2">Show Transacions</button></a>
	&nbsp; &nbsp;	
	<a href="#"><button class="button button3">Logout</button></a>

</div>
</body>
</html>
