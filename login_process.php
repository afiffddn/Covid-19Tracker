<html>
<body style="background-image: back.jpg";>
</body>
</head>
</html>

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

	include "home.php";
	echo "<br>";
	echo "Succesfully login into the system";
	echo "<br>";
	echo "Welcome Admin";


    }
else
{


		echo "<br>";
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