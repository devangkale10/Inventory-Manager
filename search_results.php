<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
input,
.btn {
  width: 25%;
  padding: 7px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 16px;
  text-decoration: none;
  background-color:   #DCDCDC;
  /* remove underline from anchors */
}

body {
  margin: 0;
  font-family: 'Raleway';
  font-size: 25px;
}

.topnav {
  font-family: 'Poppins'; 
  position: sticky;
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  border-radius: 15px;
  width: 230px;
  background-color: white;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #e9e9e9;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-radius: 15px;
}

.topnav .search-container button:hover {
  background: #ccc;
} 

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.backgr{
  margin:15px;
  background-color: black;
  opacity:0.2;
  width: 680px;
  height: 50px;
  position: absolute;
  left:24%;
  top:8%;
  border-radius: 25px;
}
p
{
  color: lawngreen;
  position: absolute;
  top: -32%;
  left: 35%
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  overflow: hidden;
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
  margin-top: 100px;

}
.button {
 /* Green */
 border: none;
 color: lawngreen;
 padding: 10px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
 margin: 4px 2px;
 cursor: pointer;
 outline: none;
}
.button1 {

  background-color: #4CAF50;
  border-radius: 12px;
  color: white;


}
.button2
{
  background-color: #2196F3;
  border-radius: 12px;
  color: white;
}
.trans
{
  transition: all 0.2s;
  cursor: pointer;


}
.trans span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.2s;
}

.trans span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.2s;
}

.trans:hover span {
  padding-right: 25px;
}
.trans:hover span:after {
  opacity: 1;
  right: 0;
}
input[type=text]:focus {
  border: 1.4px solid #2ECC71;
  border-radius: 25px;
  outline:none;
}
input[type=text]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius:25px;
}

/* Set a style for all buttons */

button:hover 
{
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn 
{
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%; /* Could be more or less, depending on screen size */
  border-radius:25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
   display: block;
   float: none;
 }
 .cancelbtn {
   width: 100%;
 }
}
</style>
</head>
<body background="https://thumbs.dreamstime.com/z/home-office-flat-design-vector-illustration-modern-home-office-interior-designer-desktop-computer-furniture-71504898.jpg">
  <?php
  $db = mysqli_connect("localhost","root","","inventory");
  $email_id= $_SESSION['email_id'];
  $query1 = "SELECT * FROM cart WHERE email_id='$email_id'";
  $sql1=mysqli_query($db,$query1);
  $rowcount= mysqli_num_rows($sql1);
  ?>
  <div class="topnav">
    <a class="active" href="#">Home</a>
    <div class="trans">
      <a href="about_you.php"><span>About You</span></a>
    </div>
    <div class="trans">
      <a href="logout.php"><span>Logout</span></a>
    </div>
    <a href="shopping_cart.php">
      <i class="fa fa-shopping-cart" style="font-size:21px"></i>
      <?php echo "".$rowcount." Items";?>
    </a>
    <div class="search-container">
      <form action="search_results.php">
        <input type="text" placeholder="Search..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  <div class="backgr"><p>Search Results</p>
  </div>

  <?php
  $db = mysqli_connect("localhost","root","","inventory");
  $search1 = $_GET['search'];
  $sql1 = "SELECT DISTINCT * FROM items WHERE item_name = '$search1' ";
  $query1 = mysqli_query($db,$sql1);
  if(mysqli_num_rows($query1) > 0)
  {

    echo "<table class='center'>
    <tr>
    <th>Item Name</th>
    <th>Stock</th>
    <th>Price</th>
    </tr>";

    while($rows = mysqli_fetch_assoc($query1)){
     echo "<tr>";
     echo "<td>".$rows['item_name']."</td>";
     echo "<td>".$rows['stock']."</td>";
     echo "<td>".$rows['price']."</td>";
     echo "<tr>";
   }
   echo "</table>";
   echo "<div style = 'text-align:center'>";
   echo '<button class = "button button1" onclick = "show()">Buy Item</button>';
   echo "</div>";
 }
 else
 {
  echo "Not found";
}
?>
 <div id="show1" class="modal">
   <form class="modal-content animate" action = "insertintocart.php" method="POST">
     <div class="container">
       <label for="quantity" style = "font-family: Arial">Quantity</label>
       <input type="text" placeholder="Enter quantity" name="quantity" required>
       <input type = "hidden" name = "search1" value = "<?php echo $search1?>">
       <input type = "hidden" name = "price" value = "<?php echo $rows['price']?>">
       <button class="button button1" type="submit">Add To Cart</button>
     </div>
   </div>
 </div>

</form>
<script type="text/javascript">
  var modal = document.getElementById("show1");
  function show()
  {
    document.getElementById("show1").style.display = "block";
  }
  window.onclick = function(event)
  {
    if(event.target == modal)
    {
      modal.style.display = "none";
    }
  }
</script>
<!--form method="POST">
</form-->
</body>
</html>