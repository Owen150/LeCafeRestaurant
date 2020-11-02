<?php

include once './db.php'
include once './user.php'
$Full_name=$_POST["fname"];
$Email_address=$_POST["email"];
$City_name=$_POST["cname"];
$Password=$_POST["password"];
$Profile_picture=$_POST["pic"];

$con = new DBConnector();

$pdo = $con->connectToDB();
 
//We want to register

$user = new User();

//Set the member variables
$user->setFullName($full_name);
$user->setEmail($email);
$user->setCityName($city);
$user->setPassword($password);
$user->setProfilePicture($pic);

echo $user->register($pdo);

?>