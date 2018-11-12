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
					<h4>Modification Page</h4>
					<a href="new_item.php" class="admin-add"><span uk-icon="icon: plus"></span> Add New Items</a>
				</div>
			
			</div>
			<div class="row">
				<?php
					if(isset($_SESSION['message'])){
						echo "<h5>". $_SESSION['message']." </h5>";
						unset($_SESSION['message']);
					}

				 ?>
			</div>
				<div class="row py-2 table-responsive">
					<?php 
					$item_query = "SELECT * FROM items";
					$items = mysqli_query($conn, $item_query);
					?>
					<table class="table table-striped">
						<thead class="modify-header">
							<tr class="text-center">
								<td>Item Name</td>
								<td>Item Price</td>
								<td>Item Description</td>
								<td>Actions</td>
							</tr>
						</thead>
						<tbody class="modify-body">
							<?php
							foreach ($items as $item) { ?>
								<tr>
									<td><?php echo $item['name']; ?></td>
									<td><?php echo '₱'. $item['price']; ?></td>
									<td><?php echo $item['description']; ?></td>
									<td><a href="./edit_item.php?id=<?php echo $item['id'] ?>" class ="btn uk-icon-link uk-margin-small-right" uk-icon="file-edit" uk-tooltip='title: Edit; pos: bottom'></a>
									<!-- <a href="../controllers/delete_item.php?id=<?php echo $item['id']; ?>" class="btn btn-danger uk-button uk-button-default demo" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Deleted Item'})"><i class="fas fa-times"></i></a> -->
									<a class="uk-button uk-button-default btn uk-icon-link" href="#delete" uk-toggle uk-icon="trash" uk-tooltip='title: Delete; pos: bottom'>
									</td>
									
									<!-- start of modal -->
											<div id="delete" class="uk-flex-top" uk-modal>
											    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
											        <p class="uk-modal-body">Are you sure you want to delete this item?</p> 
											        <p class="uk-text-right">
											            <button class="uk-button uk-button-default uk-modal-close" type="button">No</button>
											            <button type="button" class="uk-button uk-button-default demo" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Deleted Item'})"><a href="../controllers/delete_item.php?id=<?php echo $item['id']; ?>">Yes</button></a>
											        </p>
											    </div>
											</div>
										<!-- end of modal -->

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