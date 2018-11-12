<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn; ?>

<!-- place checking here -->
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
<!-- end checking here -->


<div class="container py-2">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4>Users Page</h4>
				</div>
			
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-2 table-responsive">
					<table class="table table-striped">
						<thead class="modify-header">
							<tr class="text-center">
								<td>Username</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>E-mail</td>
								<td>Role</td>
								<td>Action</td>						
							</tr>
						</thead>
						<tbody class="modify-body">
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
													echo "<a href='../controllers/grant_admin.php?id=$id' class='uk-button uk-button-default' id = 'admin-user'><span uk-icon='user' uk-tooltip='title: Change to user; pos: bottom'></span></a>";
											} else {

													echo "<a href='../controllers/grant_admin.php?id=$id' class='uk-button uk-button-default' id = 'user-user'><span uk-icon='user' uk-tooltip='title: Change to admin; pos: bottom'></span></a>";
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
	</div>
</div>

<!-- go to top -->
		<button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg></button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			        document.getElementById("myBtn").style.display = "block";
			    } else {
			        document.getElementById("myBtn").style.display = "none";
			    }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			    document.body.scrollTop = 0;
			    document.documentElement.scrollTop = 0;
			}
			</script>

		<!-- end of go to top -->



<!-- place else statment here -->
<?php } else {
	header("Location: ./error.php");
} ?>

<?php } ?>