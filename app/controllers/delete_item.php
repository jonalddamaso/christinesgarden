<?php 
	require_once "connections.php";
	session_start();
	$id = $_GET['id'];
	$delete_item_query = "DELETE FROM items WHERE id = $id;";
	$result = mysqli_query($conn, $delete_item_query);
	if(!$result){
		$_SESSION['message'] = "Item cannot be deleted. Transaction history found";
	} else {
		$_SESSION['message'] = "Item successfully deleted.";
	}
	
	mysqli_close($conn);
	header("Location: ../views/items.php");


?>