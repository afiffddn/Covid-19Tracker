<?php
$con=mysqli_connect("localhost" , "root" , ""); //connect to the host
$db=mysqli_select_db($con, "covid_tracker");//connect to database

if(!$con || !$db)
{
	echo "Not successfully to databse or host";
}
?>