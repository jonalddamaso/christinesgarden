<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<div class="container">
		<div style="margin: 20px 0 25px 0;" class="col-sm-6 mx-auto">
			<div class="jumbotron text-center" id="login_img">
				<h4>Login</h4>
			</div>
			<form action="" method="POST">
				<div class="row">			
					<div class="col-sm-12">
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
							<span class="validation"></span>
						</div>
						
					</div>
				</div>
			</form>
			<div class="d-block text-center py-4">
				<a href="register.php" class="btn btn-secondary">Register</a>
				<button type="button" class="btn btn-primary" id="login">Login</button>
			</div>
		</div>		
	</div>


<?php } ?>