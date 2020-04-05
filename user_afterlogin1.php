<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<?php
$email_id = $_SESSION['email_id'];
$query5 = "SELECT fname FROM user_register WHERE email_id = '$email_id'";
$sql5 = mysqli_query($db,$query5);
$row5 = mysqli_fetch_assoc($sql5);
$fname = $row5['fname'];
?>
<head>
  <title>Your Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  * {box-sizing: border-box;}

  body {
    margin: 0;
    font-family: 'Raleway';
    font-size: 16px;
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
    background-color: #85C1E9;
    color: black;
  }

  .topnav a.active {
    background-color: #48C9B0;
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
  }
  input[type=text]:focus {
    border: 1.4px solid #2ECC71;
    border-radius: 15px;
    outline:none;
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
    background-color: white;
    opacity:0.4;
    width: 680px;
    height: 125px;
    position: absolute;
    left:24%;
    top:7%;
    border-radius: 25px;
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
  p
  {
    font-size: 35px;
  }
  .button1{

  }
</style>
</head>
<body background="https://thumbs.dreamstime.com/z/home-office-flat-design-vector-illustration-modern-home-office-interior-designer-desktop-computer-furniture-71504898.jpg">
  <?php
  $query1 = "SELECT * FROM cart WHERE email_id='$email_id'";
  $sql1=mysqli_query($db,$query1);
  $rowcount= mysqli_num_rows($sql1);
  ?>
  <div class="topnav">
    <a class="active" href="#">Home</a>
    <div class="trans">
      <a href="about_you1.php"><span>About You</span></a>
    </div>
    <div class="trans">
      <a href="logout.php"><span>Logout</span></a>
    </div>
    <a href="shopping_cart1.php">
     <i class="fa fa-shopping-cart" style="font-size:21px"></i>
      <?php echo "".$rowcount." Item(s)";?>
    </a>
    <div class="search-container">
      <form action="search_results.php">
        <input type="text" placeholder="Search..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>

<div class="backgr">
<div style="padding-left:16px">
  <p align="center">Welcome, <strong><?php echo $fname; ?>!</strong></p>
</div>
</div>
<!--nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:320px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="https://cdn1.iconfinder.com/data/icons/business-users/512/circle-512.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $fname ?></strong></span><br>
      <span><strong><?php echo $_SESSION['email_id'] ?></strong></span><br>
    </div>
  </div-->
</div>
</body>
</html>
