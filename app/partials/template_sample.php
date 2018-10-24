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
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

	<!-- popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- bootstrap js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>Mia's Garden</title>

</head>
<body>

		<?php 
		require_once "header_sample.php";
		require_once "../controllers/connect_sample.php";
		 ?>

		 <?php get_page_content();
		 mysqli_close($conn);
		  ?>

		 <?php 
		require_once "footer_sample.php";
		 ?>
		

</body>
</html>