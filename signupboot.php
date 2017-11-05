<?php
	include ('common.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" type="text/css" href="indexboot.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<style>
			body{ background-image:url("signupback.jpg");background-size:cover}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class ="container">
				<div class="navbar-header">
					<a href ="indexboot.php" class="navbar-brand">Lifestyle Store</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="aboutus.php"><span class="glyphicon glyphicon-user"></span>AboutUs</a></li>
						<li><a href="contactus1.php"><span class="glyphicon glyphicon-user"></span>Contact</a></li>
						<li><a href="loginboot.php"><span class="glyphicon glyphicon-log-in "></span> Login</a></li>
					</ul>
				</div>	
			</div>	
		</nav>
	
	<div class="content">	
			<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class=" panel-body panel mytype1">
						<div class="panel-heading">
							<h2><b>SIGNUP</b></h>
						</div>	
						<form method="post" action="signup_script.php">
							<div class="form-group">
								<input type="text" class="form-control" name="user_name" placeholder="user_name"><br>
								<input type="text" class="form-control" name="email_id" placeholder="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
								<input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}"><br>
								<input type="text" class="form-control" name="contact" placeholder="contact"><br>
								<input type="text" class="form-control" name="city" placeholder="city"><br>
								<input type="text" class="form-control" name="address" placeholder="address"><br>
								<input type="submit" name="submit" value:"Enter"></th>      
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>	
	<footer>	   
		<center>
	   <div class="container">
			<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us:910000000000</p>
		</div>
		</center>
	</footer>
	</body>
</html>			