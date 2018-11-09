<?php
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "capstone2";

$conn = mysqli_connect($host, $db_username, $db_password, $db_name); //opening database connections
if(!$conn){
	die("Connection failed:" . mysqli_error_($conn));
}


?>