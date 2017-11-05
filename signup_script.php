<?php
	include 'common.php';
	if (isset($_POST['submit']))
{
	$email_id = $_POST['email_id'];
	$result=mysqli_query( "SELECT email_id FROM 		customer_details WHERE email_id='$email_id' ");
	if (mysqli_num_rows($result)>0)
		{
			$errormsg = "Email already exits";
		}
	else
		{
		echo	$user_name=$_POST['user_name'];
		echo	$email_id=$_POST['email_id'];
		echo	$password=$_POST['password'];
		echo	$contact=$_POST['contact'];
		echo	$city=$_POST['city'];
		echo	$address=$_POST['address'];
		
			$sql=mysql_query("insert into 		customer_details	(user_name,email_id,password,contact,city,address)value ('$user_name','$email_id','$password','$contact','$city','$address')");
					echo "user successfully inserted";
			
		
       }
}
			$_SESSION['email_id'] = $POST['email_id'];
			if($sql == 1){
		//header('Location:productboot.php');
	}else{
		echo "Some technical problem";
	}
			
		
?>

