<?php 
	require_once 'connections.php';

	$item_name = $_POST['name'];
	$item_desc = $_POST['description'];
	$item_image = $_POST['image_path'];
	$item_category = $_POST['category_id'];
	

		$insert_query = "INSERT INTO items(name, description, image_path, price, category_id) VALUES ('$item_name', '$item_desc', '$item_image', '$item_category');";
		$result = mysqli_query($conn, $insert_query);

	mysqli_close($conn);

?>