<?php
include 'covid_db.php';
$email=$_POST['email'];
$password=$_POST['password'];

$sql=mysqli_query($con,"SELECT * FROM account WHERE email='$email' AND password='$password'");

$count=mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);


if($count==1)
{
	if($row['level']==1)
	{


   include 'index.php';
	echo "Succesfully login into the system";
	
	echo "Welcome Admin";


    }
else
{
	echo "Succesfully login into the system";
	echo "<br>";
	echo "Welcome user";
}

}

else
{
	echo "Wrong username and password";

}

?>