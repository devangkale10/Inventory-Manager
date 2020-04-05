<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<style>
	body,html{
		height: 100%;
		margin: 0;
		font-family: 'Sofia';
		font-size: 21px;
		color: white;
		opacity: 1;


	}
	.bg{
		background-image: url("gestão-de-estoque.jpg");
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	input,
	.btn {
		width: 25%;
		padding: 12px;
		border: none;
		border-radius: 4px;
		margin: 5px 0;
		opacity: 0.85;
		display: inline-block;
		font-size: 17px;
		line-height: 16px;
		text-decoration: none;
		/* remove underline from anchors */
	}
	input:hover,
	.btn:hover {
		opacity: 1;
	}
	input[type=submit] {
		position: absolute;
		left:80px;
		top:320px;
		width: 100px;
		background-color: #4CAF50;
		color: white;
		cursor: pointer;
	}
	input[type=submit]:hover {
		background-color: #45a049;
	}
	form{
		position:fixed;
		top:25%;
		left:40%;
		width:1000px;
		margin: 0 auto;
	}
	.backgr{
		margin:15px;
		background-color: black;
		opacity:0.8;
		width: 500px;
		height: 500px;
		position: absolute;
		left:30.4%;
		top:13%;
		border-radius: 25px;

	}
	.box {
		position: absolute;
		transition: box-shadow .3s;
		width: 300px;
		height: 500px;
		margin: 50px;
		border-radius:10px;
		border: 1px solid #ccc;
		background: #fff;
		float: left;


	}
	.box:hover {
		box-shadow: 0 0 11px rgba(0,0,0,0.7); 
	}
</style>
</head>
<body>
	<div class="bg">
		<div class="backgr">
			<form action="process.php" method="post">
				<h2>Email ID :</h2>
				<input type="text" name="email_id" placeholder="Email ID" required>
				<br>
				<b><h2>Password :</b></h2>
				<input type="password" name="password" placeholder="Password" required>
				<br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
</body>
</html>