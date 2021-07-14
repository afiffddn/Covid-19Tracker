<?php
include 'covid_db.php';
$state=$_POST['state'];
$city=$_POST['city'];
$totalcase=$_POST['totalcase'];
$recovered=$_POST['recovered'];
$deaths=$_POST['deaths'];
$email=$_POST['email'];

$sql=mysqli_query($con,"INSERT INTO account (state,city,totalcase,recovered,deaths) VALUES ('$state','$city','$totalcase','$recovered','$deaths') WHERE email='$email'");

if ($sql) {
  echo include 'About.php' ;
}

?>