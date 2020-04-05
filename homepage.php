<?php 
require 'connect.php';
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <title>Homepage</title>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
  
  input[type=text], input[type=password] 
  {
    width: 100%;
    font-family: 'Lato';
    margin: 8px 0;
    padding: 6px 20px;
    display: inline-block;
    border: 2px solid #17202A;
    box-sizing: border-box;
    border-radius:25px;
  }

  /* Set a style for all buttons */
  button 
  {
    background-color: #3498DB;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 15px;
    text-align: center;
  }

  button:hover
  {
    opacity: 0.8;
  }

  /*For the cancel button */
  .cancelbtn 
  {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer 
  {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar 
  {
    width: 50%;
    background-blend-mode: 
    background-color: black;
    background-blend-mode: darken;
    border-radius: 100px;
    opacity: 1;
  }

  .container 
  {
    padding: 16px;
  }

  span.psw 
  {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal 
  {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 20px;
  }

  /* Modal Content/Box */
  .modal-content 
  {
    background-color: black;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 30%; 
    border-radius:25px;
    font-family: 'Lato';
    font-size: 20px;
  }

  /* The Close Button (x) */
  .close 
  {
    position: absolute;
    right: 25px;
    top: 0;
    color: white;
    font-size: 35px;
    font-weight: bold;
  }
  .close:hover,
  .close:focus 
  {
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
  @media screen and (max-width: 300px) {
    span.psw {
     display: block;
     float: none;
   }
   .cancelbtn {
     width: 100%;
   }
 }
 input[type=text]:focus {
  border: 2px solid #2ECC71;
  border-radius: 25px;
  outline:none;
}
input[type=password]:focus {
  border: 2px solid #2ECC71;
  border-radius:255px;
  outline:none;
}
body,html{
 height: 100%;
 margin: 0;
 font-size: 30px;
 color: white;
 top:50%;
 left: 50%;
 color: #777;
 line-height: 1.8;
}
.topnav{
 overflow: hidden;
 background-color: black;

}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #76D7C4;
  color: black;
}
.topnav a.active {
  background-color: #389eed;
  color: white;
}
.backgr{
	margin:15px;
	background-color: black;
	opacity:0.5;
	width: 1000px;
	height: 500px;
	position: absolute;
	top: 17%;
	left:10%;
	border-radius: 24px;

}
img
{
  opacity: 1;
  width: 30%;
  height:72%;
  border-radius: 25px;
  position: relative;
}

div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.button1
{
	width: 25%;
	position: relative;
	left: 38%;
}
.curs
{
	cursor: pointer;
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
  text-align: center;
  color: white;
}
.backgr p
{
  float:right;
  text-align: center;
  color: green;
  font-size: 23px;
  margin-top: 30px;
  margin-right:10px;
  font-weight: bold; 
}
.ontop
{
  position: relative;
  color: #2ECC71;
  font-size: 23px;
  margin-right: 220px;
  margin-top: 50px;
}
.button2
{
  width:10%;
  float: right;
  position: relative;
  margin-top: 200px;
  margin-right: 230px;
  background-color: #FDFEFE;
  border-radius: 25px;
  color: black;
  font-weight: bold;
  text-align: center;
}
.bgimg-1 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgimg-1 {
  background-image: url('5-tools-for-inventory-management-blog.jpg');
  min-height: 100%;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
hr
{
  border:0.5px solid #7F8C8D;
}
</style>
</head>
<body>
  <div class="w3-top">
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
      <div class="topnav">
        <a class="active" href="homepage.php">Home</a>
        <div class="trans">
          <div class="curs">
           <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span>Login</span></a>
         </div>
       </div>
       <div id="id01" class="modal">
         <form class="modal-content animate" action="process.php" method="POST">
          <div class="imgcontainer">
           <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
           <img src="https://image.freepik.com/free-icon/user-image-with-black-background_318-34564.jpg" alt="Avatar" class="avatar">
         </div>
         <div class="container">
           <label for="email_id">Email ID :</label>
           <input type="text" placeholder="Enter Email ID" name="email_id" required>
           <label for="password">Password :</label>
           <input type="password" placeholder="Enter Password" name="password" required> 
           <button class="button button1" type="submit">Login</button>
         </div>
       </form>
     </div>
     <div class="trans">
      <div class="curs">
        <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span>Admin Login</span></a>
      </div>
    </div>
    <div id="id02" class="modal">
     <form class="modal-content animate" action="process123.php" method="POST">
      <div class="imgcontainer">
       <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
       <img src="https://image.freepik.com/free-icon/user-image-with-black-background_318-34564.jpg" alt="Avatar" class="avatar">
     </div>
     <div class="container">
       <label for="email_id">Email ID :</label>
       <input type="text" placeholder="Enter Email ID" name="email_id" required>
       <label for="password">Password :</label>
       <input type="password" placeholder="Enter Password" name="password" required> 
       <button class="button button1" type="submit">Login</button>
     </div>
   </form>
 </div>
 <div class="trans">
  <a href="register4.php"><span>Sign Up</span></a>
</div>
<div class="trans">
  <a href="feedback.php"><span>Feedback</span></a>    
</div>
</div> 
<div class="w3-display-middle" style="white-space:nowrap;">
  <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ELECTRONICS <span class="w3-hide-small">INVENTORY</span> MANAGER</span>
</div>
</div>
<div class="w3-content w3-container w3-padding-64" id="about">
  <h2 class="w3-center">ABOUT </h3>
    <hr>
    <h3 class="w3-center">This is an Electronics Inventory Manager and Online Shopping Portal</h3>
    <h4 class="w3-center">You can manage your inventory online and also shop for different electronic items.</h4>
    <div class="w3-row">
    </div>
  </div>

  <script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
</body>
</html>