<?php

	require_once "connections.php";
	$id = $_GET['id'];
	$complete_order_query = "UPDATE orders SET status_id = 2 WHERE id = $id;";
	mysqli_query($conn, $complete_order_query);
	header("Location: ../views/orders.php");

 ?>

 