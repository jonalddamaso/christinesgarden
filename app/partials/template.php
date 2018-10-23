<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<!-- device compatability -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<!-- browser compatability -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="icon" type="image/gif/png" href="./assets/images/time64.png">
	<!-- <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a> -->

	<!-- local css -->
	<!-- <link rel="stylesheet" type="text/css" href="./assets/styles/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Arizonia|Combo" rel="stylesheet">
	<!-- bootstrap cdn 4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	

	<title>Mia's Garden</title>

</head>
<body>
		<?php 
		require_once "header.php";
		 ?>

		 <?php get_page_content(); ?>

		 <?php 
		require_once "footer.php";
		 ?>
		

</body>
</html>