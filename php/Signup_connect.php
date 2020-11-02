<?php
$server="localhost";
$username="root";
$password="";
$database="assignment_db";

$link=mysqli_connect($server,$username,$password,$database);

if(!$link){
	die("Could not connect ".mysqli_connect_error());
}
echo "Connected Successfully";

?>