<?php 
	//$_FILES -> superglobal variable that takes file uploads

	$temp_name = $_FILES["image_upload"]["tmp_name"];
	$name = $_FILES["image_upload"]["name"];
	$size = $_FILES["image_upload"]["size"];
	$file_extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));

	// echo $file_extension;
	// echo $temp_name . "<br>";
	// echo $name . "<br>";
	// echo $size . "<br>";
	// var_dump($_FILES["image_upload"]);


	// Syntax:
	//$_FILES[<name in the form>]['tmp_name']
	//$_FILES[<name in the form>]['name']
	//$_FILES[<name in the form>]['size']
	//$_FILES[<name in the form>]['type']
	//$_FILES[<name in the form>]['errors']

	//1 Check if file uploaded is an image
	$no_error_flag = true;

	if($file_extension != "jpg" && $file_extension != "jpeg" && $file_extension != "png" && $file_extension != "gif" && $file_extension != "bmp") {
			$no_error_flag = false;
		echo "File is NOT an image";
	}

	//2. Check if file size is too large
	if ($size > 500000){ //size is arbitrary in bytes
		echo "File is too large";
			$no_error_flag = false;
	}

	if ($no_error_flag){
		move_uploaded_file($temp_name, "./assets/images/" . $name);
		echo "File uploaded successfully";
	} else {
		echo "Can't upload file.";	
	}


	//chmod 777 -R mod07-03
?>