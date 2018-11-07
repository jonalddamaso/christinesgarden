<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php  $user = $_SESSION['user']; ?>
<?php global $conn; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-3 py-2">
			<div class="list-group" id="list-tab" role = "tablist">
				<a href="#profile" class="list-group-item" data-toggle="list" role="tab">User Information</a>
				<a href="#history" class="list-group-item" data-toggle="list" role="tab">Order History</a>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="tab-content">
				<div class="tab-pane" id="profile" role="tabpanel">
					<h3>User Information</h3>
					<form action="../controllers/update_user.php" method="POST">
					<!-- TODO: make update_user.php -->
						<div class="container">
							<input type="text" name="user_id" class="form-control" value="<?php echo $user['id']; ?>" hidden>
							<label for="username">Username:</label>
							<input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" id = "username" disabled>
							<span class="validation"></span><br>

							<label for="old_password">Old Password</label>
							<input type="password" name="old_password" class="form-control" id="old_password">
							<span class="validation"></span><br>

							<label for="new_password">New Password</label>
							<input type="password" name="new_password" class="form-control" id="new_password">
							<span class="validation"></span><br>

							<label for="firstname">First Name</label>
							<input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $user['firstname']; ?>" disabled>
							<span class="validation"></span><br>	

							<label for="lastname">Last Name</label>
							<input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $user['lastname']; ?>" disabled>
							<span class="validation"></span><br>

							<label for="email">E-mail Address</label>
							<input type="email" name="email" class="form-control" id="email" value="<?php echo $user['email']; ?>" disabled>
							<span class="validation"></span><br>

							<label for="address">Home Address</label>
							<input type="text" name="address" class="form-control" id="address" value="<?php echo $user['address']; ?>" disabled>
							<span class="validation"></span><br>

							<button type="submit" class="btn btn-primary">Update Info</button><br><br>

						</div>
					</form>
				</div>

				<div class="tab-pane" id="history" role="tabpanel">
					<div class="row">
						<div class="col-md-6">
							<h3>Order History</h3>							
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr class="text-center">
										<th>Transaction Number</th>
										<th>Purchase Date</th>
										<th>Status</th>
										<th>Payment Mode</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$order_hist_query = "SELECT o.transaction_code, o.purchase_date, s.name AS status, p.name AS payment_mode FROM orders o JOIN statuses s JOIN payment_modes p ON (o.status_id = s.id AND o.payment_mod_id = p.id) WHERE o.user_id =". $_SESSION['user']['id'];

										$transactions = mysqli_query($conn, $order_hist_query); 
										foreach($transactions as $transaction) { ?>

											<tr>
												<td><?php echo $transaction['transaction_code']; ?>
												</td>
												<td><?php echo $transaction['purchase_date']; ?>
												</td>
												<td><?php echo $transaction['status']; ?>
												</td>
												<td><?php echo $transaction['payment_mode']; ?>
												</td>
											</tr>

										<?php }  ?>
								</tbody>
							</table>
						</div>						
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
<?php } ?>