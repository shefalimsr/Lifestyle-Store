<?php 
$connect = mysql_connect("localhost", "root", "" ) or die(mysql_error());
$database = mysql_select_db("estore") or die(mysql_error());

if($connect){
	echo "Sucess";
	
}
else
{
	echo "Not Connected";
}

?>
	