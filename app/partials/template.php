<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<!-- device compatability -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<!-- browser compatability -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="icon" type="image/gif/png" href="../assets/images/pageicon1.png">
	<!-- <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a> -->
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!-- animate -->
	<link rel="stylesheet" href="../assets/styles/animate.css">	
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/css/uikit.min.css" />


	<!-- google fonts pairing -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran|Lato:400i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Elsie|Life+Savers|Macondo|Macondo+Swash+Caps|Pacifico|Sevillana|Spirax|Parisienne" rel="stylesheet">

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

		<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit-icons.min.js"></script>

	<title>Christine's Garden</title>

</head>
<body>

		<?php 
		require_once "header.php";
		require_once "../controllers/connections.php";
		 ?>

		 <?php get_page_content();
		 mysqli_close($conn);
		  ?>

		 <?php 
		require_once "footer.php";
		 ?>
		

</body>
</html>