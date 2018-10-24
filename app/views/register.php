<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<div class="container">
		<div style="margin: 20px 0 25px 0;">
			<div class="jumbotron text-center">
				<h4>Register</h4>
			</div>
			<form action="" method="POST">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="firstname">
								First Name:
							</label>
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="lastname">
								Last Name:
							</label>
							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="gender">
								Gender:
							</label>
							<input type="text" class="form-control" id="gender" name="gender" placeholder="Enter gender">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="email">
								Email:
							</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="phone">
								Phone:
							</label>
							<input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="address">
								Home:
							</label>
							<input type="text" class="form-control" id="address" name="address" placeholder="Enter home address">
							<span class="validation"></span>
						</div>
					</div>
					<div class="col-sm-6">
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
						<div class="form-group">
							<label for="cpassword">Confirm password:</label>
							<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter confirm password">
							<span class="validation"></span>
						</div>
					</div>
				</div>
			</form>
			<div class="d-block text-center py-4">
				<a href="login.php" class="btn btn-secondary">Login</a>
				<button type="button" class="btn btn-primary" id="add_user">Register</button>
			</div>
		</div>		
	</div>


<?php } ?>