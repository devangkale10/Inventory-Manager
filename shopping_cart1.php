<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<?php
$email_id = $_SESSION['email_id'];
$query1 = "SELECT * FROM cart WHERE email_id = '$email_id'";
$sql1 = mysqli_query($db,$query1);
$rows = mysqli_fetch_assoc($sql1);
?>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Your Cart</title>
	<style>
	* {
		box-sizing: border-box;
	}

	html,
	body {
		
		background: url(sc.jpg);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		margin: 0;
		background-color: #7EC855;
		font-family: 'Roboto', sans-serif;
	}
	.shopping-cart {
		width: 800px;
		height: 500px;
		margin: 60px auto;
		background: #FFFFFF;

		box-shadow: 1px 2px 3px 0px rgba(0,0,1,0.20);
		border-radius: 20px;
		display: flex;
		flex-direction: column;
	}
	.title {
		height: 60px;
		border-bottom: 1px solid #E1E8EE;
		padding: 20px 30px;
		color: #5E6977;
		font-size: 20px;
		font-weight: 400;
	}

	.item {
		padding: 20px 30px;
		height: 120px;
		display: flex;
	}

	.item:nth-child(3) {
		border-top:  1px solid #E1E8EE;
		border-bottom:  1px solid #E1E8EE;
	}
	.buttons {
		position: relative;
		padding-top: 30px;
		margin-right: 60px;
	}
	.delete-btn,
	.like-btn {
		display: inline-block;
		Cursor: pointer;
	}
	.delete-btn {
		width: 18px;
		height: 17px;
		background: url(&quot;delete-icn.svg&quot;) no-repeat center;
	}

	.like-btn {
		position: absolute;
		top: 9px;
		left: 15px;
		background: url('twitter-heart.png');
		width: 60px;
		height: 60px;
		background-size: 2900%;
		background-repeat: no-repeat;
	}
	.is-active {
		animation-name: animate;
		animation-duration: .8s;
		animation-iteration-count: 1;
		animation-timing-function: steps(28);
		animation-fill-mode: forwards;
	}

	@keyframes animate {
		0%   { background-position: left;  }
		50%  { background-position: right; }
		100% { background-position: right; }
	}
	.image {
		margin-right: 50px;
	}

	.description {
		padding-top: 20px;
		margin-right: 60px;
		width: 120px;	
		font-weight: 500;

	}

	.description span {
		display: block;
		font-size: 14px;
		color: #43484D;
		font-weight: 400;

	}

	.description span:first-child {
		margin-bottom: 5px;

	}
	.description span:last-child {
		font-weight: 300;
		margin-top: 8px;
		color: #86939E;
	}
	.quantity {
		padding-top: 25px;
		margin-right: 100px;
		padding-left: 100px;
	}
	.quantity input {
		-webkit-appearance: none;
		border: none;
		text-align: center;
		width: 32px;
		font-size: 16px;
		color: #43484D;
		font-weight: 300;
	}


	.billing{

		text-align: center;
	}

	button[class*=btn] {
		width: 30px;
		height: 30px;
		background-color: #E1E8EE;
		border-radius: 6px;
		border: none;
		cursor: pointer;
	}
	.minus-btn img {
		margin-bottom: 3px;
	}
	.plus-btn img {
		margin-top: 2px;
	}

	button:focus,
	input:focus {
		outline:0;
	}
	.total-price {
		width: 83px;
		padding-top: 27px;
		text-align: center;
		font-size: 16px;
		color: #43484D;
		font-weight: 300;
	}
	@media (max-width: 800px) {
		.shopping-cart {
			width: 100%;
			height: auto;
			overflow: hidden;
		}
		.item {
			height: auto;
			flex-wrap: wrap;
			justify-content: center;
		}
		.image img {
			width: 50%;
		}
		.image,
		.quantity,
		.description {
			width: 100%;
			text-align: center;
			margin: 6px 0;
		}
		.buttons {
			margin-right: 20px;
		}
	}
	.deletebutton
	{
		margin-top: 10px;
		margin-left: 150px;
		width: 60px;
		height: 20px;
		cursor: pointer;
		text-align: center;

		font-size: 13px;
	}
	h1,h2,h3,h4,h5,h6,p{
		text-align: center;
	}
	input[type=submit]
	{
		cursor: pointer;
		margin-left: 350px;
	}
	.button1{
		border: none;
		color: white;
		padding: 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #2ECC71;
		border-radius: 15px;
	}
	.button1:hover{
		opacity: 0.7;
	}
</style>
</head>

<body>
	
	<div class="shopping-cart">

		<div class="title">
			Shopping Bag
		</div>
		<?php
		$query1 = "SELECT * FROM cart WHERE email_id = '$email_id' ";
		$sql1 = mysqli_query($db,$query1);
		$query2 = "SELECT SUM(price) AS value_sum FROM cart WHERE email_id = '$email_id'";
		$sql2 = mysqli_query($db,$query2);
		$row1 = mysqli_fetch_assoc($sql2);
		$sum = $row1['value_sum'];
		if(mysqli_num_rows($sql1)> 0){
			while($rows=mysqli_fetch_assoc($sql1)){
				echo "<div class='item'>";
				echo "<div class='description'>";
				echo"<span>".$rows['item_name']."</span>";
				echo "</div>";
				echo "<div class='total-price'>";
				echo "<span>".$rows['quantity']."</span>";
				echo "</div>";
				echo "<div class = 'quantity'>";
				echo "<span>".$rows['price']."</span>";
				echo "</div>";
				echo "</div>";
				
		//echo "<div class='item'>";
		//echo "<div class = 'quantity'>";
				echo"<div class ='billing'>";
				
				echo "</div>";

			}
			echo "<h3>Billing Amount : <span>".$sum."</span></h3>";
		//echo "</div>";
			echo '<a href ="checkout.php"><input type="submit" class="button button1" name="delete" value="Checkout"/></a>';
		}
		else {
			echo "<div style = 'text-align:center'>";
			echo "No items in the Bag!";
			echo "</div>";

		}

		?>
     <!--
     <div class="total-price">
     	<?php
     	
     	?>
    </div>
      <!--
      <span>Bball High</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
-->


  <!-- Product #2 
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-2.png" alt=""/>
    </div>
 
    <div class="description">
      <span>Maison Margiela</span>
      <span>Future Sneakers</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$870</div>
  </div>
-->
  <!-- Product #3
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-3.png" alt="" />
    </div>
 
    <div class="description">
      <span>Our Legacy</span>
      <span>Brushed Scarf</span>
      <span>Brown</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
       ` <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$349</div>
  </div>
</div>
<script>
	$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;gt; 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;lt; 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});

</script>
-->
<!--
<script>
	$(document).ready(function(){
		$('.button').click(function(){
			var clickBtnValue = $(this).val();
			var ajaxurl = 'ajax.php',
			data =  {'action': clickBtnValue};
			$.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
		});

	});
</script>
-->
</body>
</html>