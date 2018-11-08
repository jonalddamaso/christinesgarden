<?php
	require_once "connections.php";
	$id = $_GET['id'];
	$update_user_query = "SELECT role FROM users WHERE id = $id;";
	$query_result = mysqli_query($conn, $update_user_query);
	$user_role = mysqli_fetch_assoc($query_result);

	if($user_role['role'] == 2){
		$update_user_query = "UPDATE users SET role = 1 WHERE id = $id;";
	} else {
		$update_user_query = "UPDATE users SET role = 2 WHERE id = $id;";
	}

	mysqli_query($conn, $update_user_query);
	header("Location: ../views/users.php");
 ?>