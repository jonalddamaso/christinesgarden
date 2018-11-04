<?php 
	require_once 'connections.php';

	$item_name = $_POST['name'];
	$item_desc = $_POST['description'];
	$item_image = $_POST['image_path'];
	$item_price = $_POST['price'];
	$item_category = $_POST['category_id'];
	
	$sql_query = "SELECT * FROM items WHERE name = '$item_name'";
	$result = mysqli_query($conn, $sql_query);
	if(mysqli_num_rows($result) > 0){
		die("item_exists");
	} else{
		$insert_query = "INSERT INTO items(name, description, image_path, price, category_id) VALUES ('$item_name', '$item_desc', '$item_image', '$item_price', '$item_category');";
		$result = mysqli_query($conn, $insert_query);
	}	

	mysqli_close($conn);

?>