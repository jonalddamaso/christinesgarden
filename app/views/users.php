<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn; ?>

<!-- place checking here -->
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
<!-- end checking here -->


<div class="container">
	<div class="row">
		<h4>User Admin page</h4>
	</div>

	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>Username</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>E-mail</td>
						<td>Role</td>
						<td>Action</td>						
					</tr>
				</thead>
				<tbody>
					<?php 
						$get_user_query = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name AS role FROM users u JOIN role r ON (u.role = r.id);";
						//edit your query as needed.
						$user_list = mysqli_query($conn, $get_user_query);
						foreach ($user_list as $indiv_user) { ?>
							<tr>
								<td><?php echo $indiv_user['username']; ?></td>
								<td><?php echo $indiv_user['firstname']; ?></td>
								<td><?php echo $indiv_user['lastname']; ?></td>
								<td><?php echo $indiv_user['email']; ?></td>
								<td><?php echo $indiv_user['role']; ?></td>
								<td>
									<?php
									$id = $indiv_user['id'];
									if($indiv_user['role'] == "admin")
										{
											echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-danger'> Revoke Admin</a>";
									} else {

											echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-primary'> Make Admin </a>";
										}
									 ?>
									
									
								</td>
							</tr>

						<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>



<!-- place else statment here -->
<?php } else {
	header("Location: ./error.php");
} ?>

<?php } ?>