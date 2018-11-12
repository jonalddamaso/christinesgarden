<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn; ?>

<!-- place checking here -->
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
<!-- end checking here -->

	<div class="container">
		<div class="row">
			<h4>Orders Admin Page</h4>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2 table-responsive">
				<table class="table table-striped">
					<thead class="modify-header">
						<tr class="text-center">
							<td>Transaction Code</td>
							<td>Status</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody class="modify-body">
						<?php 
						$order_query = "SELECT o.id, o.transaction_code, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id);";
						$orders = mysqli_query($conn, $order_query);

						foreach ($orders as $indiv_order) { ?>

							<tr>
								<td><?php echo $indiv_order['transaction_code']; ?></td>
								<td><?php echo $indiv_order['status']; ?></td>
								<td><?php if ($indiv_order['status'] == "pending") { ?> 
								<a href="../controllers/complete_order.php?id=<?php echo $indiv_order['id']?>" class="btn btn-success"><span uk-icon="check" uk-tooltip='title: Complete Order; pos: bottom'></span></a>

								<a href="../controllers/cancel_order.php?id=<?php echo $indiv_order['id']?>" class="btn btn-danger"><span uk-icon="close" uk-tooltip='title: Cancel Order; pos: bottom'></span></a>
								</td>
								<?php } ?>
							</tr>

						<?php } ?>

						
					</tbody>
				</table>
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