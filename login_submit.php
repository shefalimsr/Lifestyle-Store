<?php

	require 'common.php';
	if (isset($_POST['submit'])) 
		{
	$user_name= $_POST['user_name'];
	$password =  $_POST['password'];
	$result = mysql_query("SELECT email_id,user_name,password FROM customer_details WHERE user_name = ' $user_name' and password = '$password'");
	while($_POST=mysql_fetch_assoc($result))
			{ 
		        echo  $email_id=$_POST['email_id'];
				echo $user_name=$_POST['user_name'];
				echo  $password=$_POST['password'];
			}
		if ($user_name=" ")
			{
				echo "no user exits";		
			}
		else
			{
				
				$_SESSION['username'] = $username;
				$_SESSION['password_id'] = $password;
				$_SESSION['email_id'] = $email_id;
				header('singupboot.php');
			}
		}

?>