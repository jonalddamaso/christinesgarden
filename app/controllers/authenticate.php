<?php 
	session_start();
	require_once "connections.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql_query = "SELECT * FROM users WHERE username = '$username' ";
	$result = mysqli_query($conn, $sql_query);
	$user_info = mysqli_fetch_assoc($result);

	if(!password_verify($password, $user_info['password'])) {
		//this compares a non hashed password to the hashed value store in the database.
		die("login_failed");
	} else {
		$_SESSION['user'] = $user_info;
	}
	echo "login_success";	
	mysqli_close($conn);
?>