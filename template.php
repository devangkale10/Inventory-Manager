<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://myob-gm-digital-production-blog-assets.s3.amazonaws.com/uploads/2016/06/5-tools-for-inventory-management-blog.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
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

input[type=text], input[type=password] 
  {
    width: 100%;
 
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius:25px;
  }
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
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
    border-radius:25px;
    opacity: 0.8;
    font-family: 'Lato';
    font-size: 25px;
  }

  /* The Close Button (x) */
  .close 
  {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
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
 input[type=text]:focus {
  border: 2.4px solid #2ECC71;
  border-radius: 25px;
  outline:none;
}
input[type=password]:focus {
  border: 2.4px solid #2ECC71;
  border-radius: 25px;
  outline:none;
}
.button1
{
  width: 25%;
  position: relative;
  left: 38%;
}
</style>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <div class="trans">
        <a class="w3-bar-item w3-button w3-hide-small" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user"></i><span>  LOGIN</span></a>
      </div>
      <div id="id01" class="modal">
       <form class="modal-content animate" action="process.php" method="POST">
        <div class="imgcontainer">
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         <img src="https://image.freepik.com/free-icon/user-image-with-black-background_318-34564.jpg" alt="Avatar" class="avatar">
       </div>
       <div class="container">
         <label for="email_id">Email ID :</label>
         <input type="text" placeholder=" Enter Email ID" name="email_id" required>
         <label for="password">Password :</label>
         <input type="password" placeholder=" Enter Password" name="password" required> 
         <button class="button button1" type="submit">Login</button>
       </div>
     </form>
   </div>
   <div class="trans">
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i><span> SIGN UP</span></a>
  </div>
  <div class="trans">
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i><span> ADMIN LOGIN</span></a>
  </div>
  <div class="trans">
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i><span> CONTACT</span></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ELECTRONICS <span class="w3-hide-small">INVENTORY</span> MANAGER</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT </h3>
  <p class="w3-center"><em>This is a Electronics Inventory Manager and Shopping Portal</em></p>
  <p>We have created this website as an Inventory Manager. You can also shop for items. The admin can add items, remove and also update items.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <!-- Hide this text on small devices -->
    </div>
    <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
  </div>

  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">14+</span><br>
      Partners
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">55+</span><br>
      Projects Done
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">89+</span><br>
      Happy Clients
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">150+</span><br>
      Meetings
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
  </div>

  <!-- Container (Portfolio Section) -->
  <div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
      </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
      <div class="w3-col m3">
        <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
      </div>
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Third Parallax Image with Portfolio Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
   </div>
 </div>

 <!-- Container (Contact Section) -->
 <div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>
  var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  var navbar = document.getElementById("myNavbar");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
  } else {
    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
  }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>