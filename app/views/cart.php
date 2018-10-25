<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>

	<div class="container my-4">
		<div class="row">
			<div class="col-lg-12">
				<h1>Cart page</h1>
			</div>
		</div>
		<hr>
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="cart-items">
				<thead>
					<tr class="text-center">
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Item Quantity</th>
						<th>Item Subtotal</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						if(count($_SESSION['cart']) != 0) {
							$cart_total = 0;
							foreach ($_SESSION['cart'] as $id => $qty) {
								$sql_query = "SELECT * FROM items WHERE id = '$id';";
								
								$itemInfo = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($itemInfo);
								$subTotal = $_SESSION['cart'][$id] * $item['price'];
								$cart_total += $subTotal;
								echo "<tr> <td class = 'item_name'>".$item['name']."</td>";
								echo "<td class = 'item_price'>". $item['price']. "</td>";
								echo "<td class = 'item_quantity'>".$qty."</td>";
								echo "<td class = 'item_subtotal'>".$subTotal."</td> </tr>";
							}
						?>

						<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
<?php } ?>
