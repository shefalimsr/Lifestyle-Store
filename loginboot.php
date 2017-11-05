
<?php
	include ('common.php');
?>
	
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
		<?php
			include ('header.php');
		?>	
	<div class="content">	
		<div class="container ">
			<div class="row">
				<div class="col-xs-12">
					<div class=" panel-body panel panel-primary mytype">
						<div class="panel-heading">
							<h4>LOGIN</h4>
						</div>	
						<div class="text-warning">
							<p><b><i>Login to make purchase</i></b></p>
						</div>
						<form  method="post" action="login_submit.php">
							<div class="form-group">
								<input type="text" class="form-control" name="user_name" placeholder="user_name"><br>
								<input type="password" class="form-control" name="password" placeholder="password"><br>
								<input type="submit" name="submit" value:"Enter">
							</div>
						</form>	
						<div class="panel-footer">
							<p>Don't have an account?<a href="#">Register</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<?php
		include 'footer.php';
	?>	
	</body>
</html>			