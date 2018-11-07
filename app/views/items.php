<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn; ?>
<div class="container py-2">
	<div class="row">
		<div class="container">
			<div class="row">
			<a href="new_item.php" class="btn btn-primary">Add New Items</a>
			</div>
			<div class="row">
				<?php
					if(isset($_SESSION['message'])){
						echo "<h5>". $_SESSION['message']." </h5>";
						unset($_SESSION['message']);
					}

				 ?>
			</div>
				<div class="row py-2">
					<?php 
					$item_query = "SELECT * FROM items";
					$items = mysqli_query($conn, $item_query);
					?>
					<table class="table table-stripped">
						<thead>
							<tr class="text-center">
								<td>Item Name</td>
								<td>Item Price</td>
								<td>Item Description</td>
								<td>Actions</td>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($items as $item) { ?>
								<tr>
									<td><?php echo $item['name']; ?></td>
									<td><?php echo '₱'. $item['price']; ?></td>
									<td><?php echo $item['description']; ?></td>
									<td><a href="./edit_item.php?id=<?php echo $item['id'] ?>" class ="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z"/></svg></a>
									<!-- <a href="../controllers/delete_item.php?id=<?php echo $item['id']; ?>" class="btn btn-danger uk-button uk-button-default demo" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Deleted Item'})"><i class="fas fa-times"></i></a> -->
									<a class="uk-button uk-button-default btn" href="#delete" uk-toggle><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg></a>
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
<?php } ?>