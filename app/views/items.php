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
									<td><a href="./edit_item.php?id=<?php echo $item['id'] ?>" class ="btn uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
									<!-- <a href="../controllers/delete_item.php?id=<?php echo $item['id']; ?>" class="btn btn-danger uk-button uk-button-default demo" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Deleted Item'})"><i class="fas fa-times"></i></a> -->
									<a class="uk-button uk-button-default btn uk-icon-link" href="#delete" uk-toggle uk-icon="trash">
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