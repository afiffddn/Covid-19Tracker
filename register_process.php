<?php
include 'covid_db.php';

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$password=$_POST['password'];


$sql=mysqli_query($con, "INSERT INTO account (first_name, last_name, address, phone_number, email, password, level) VALUES('$firstname', '$lastname', '$address', '$phone_number', '$email' , '$password' , 1)");

if(!$sql)
{
	echo "Fail to add Record";
}
else
{
	echo "Succesfully add 1 record";
}