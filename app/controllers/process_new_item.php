<?php 
session_start();
require_once "connections.php";
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = "../assets/images/" . $_FILES['image']['name'];
$category_id = $_POST['category_id'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);
$new_item = "INSERT INTO items(name, description, image_path, price, category_id) VALUES ('$name','$description','$image','$price','$category_id');";
mysqli_query($conn, $new_item);
mysqli_close($conn);
header("Location: ../views/items.php");
?>