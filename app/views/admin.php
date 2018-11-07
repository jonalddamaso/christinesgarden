	<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="card" style="margin: 20px 0 25px 0;">
					<img class="card-img-top" src="../assets/images/landingplant5.jpg">
				
			</div>
		</div>
		<div class="col-lg-6">
		<div  style="margin: 20px 0 25px 0;">
			<div class="jumbotron text-center">

				<h3>Your Personal Information</h3>
			</div>
			<form action="" method="POST">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>
							<h4>Name: <?php echo $_SESSION['user']['firstname']?> <?php echo $_SESSION['user']['lastname']?> </h4>
							</label>
							<br>
							<label> 
							<h5>Email: <?php echo $_SESSION['user']['email']?></h5>
							</label>
							<br>
							<label>
							<h5>Home: <?php echo $_SESSION['user']['address']?></h5>
							</label>
						</div>
					</div>
				</div>
			</form>
		</div>		
	</div>
	</div>
	</div>

<?php } ?>