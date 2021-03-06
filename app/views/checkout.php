<?php require_once "../partials/template.php";
	function get_page_content(){
		global $conn; ?>
			
		<!-- place checking here -->
		<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2)) { ?>
		<!-- end checking here -->



		<form method="POST" action="../controllers/placeorder.php">
			<!-- TODO placeorder.php controller -->
			<div class="container"  id="checkoutpage">
				<div class = "row">
					<div class="col-lg-12">
						<h1>Checkout Page</h1>
					</div>
				</div>
				<hr>
				<div class="row mt-4">
					<div class="col-sm-8">
						<h4>Shipping address</h4>
						<div class="form-group">
							<input type="text" class="form-control" name="addressLine1" value="<?php echo $_SESSION['user']['address']?>">
						</div>	
					</div>
					<div class="col-sm-4">
						<h4>Payment Method</h4>
						<select class="form-control" id="payment_mode" name="payment_mode">
							<?php
								$payment_mode_query = "SELECT * FROM payment_modes;";
								$payment_modes = mysqli_query($conn, $payment_mode_query);
								foreach ($payment_modes as $payment_mode) {
									extract($payment_mode);
									echo "<option value='$id'>$name </option>";
								}
							 ?>
						</select>
					</div>
				</div>
				<div class="row">
					<h4>Order Summary</h4>
				</div>
					<div class="row">
						<div class="col-sm-6"><p>Total</p></div>
						<div class="col-sm-6" id="total_price">
							<?php 
							$cart_total = 0;
							foreach ($_SESSION['cart'] as $id => $qty) {
								$sql_query = "SELECT * FROM items WHERE id = $id;";
								$itemInfo = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($itemInfo);
								$subTotal = $_SESSION['cart'][$id] * $item['price'];
								$cart_total += $subTotal;
							}
							echo $cart_total;
							?>
						</div>
					</div>
				<hr>
				<button type="submit" class="uk-button uk-button-default d-block" id="btn-place" >
					Place Order Now
				</button>
							
					<div class="row cart-items mt-4">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="cart-items">
								<thead class="modify-header">
									<tr class="text-center">
										<th colspan="2"> Item Name</th>
										<th>Item Price</th>
										<th>Item Quantity</th>
										<th>Item Subtotal</th>
									</tr>
								</thead>
								<tbody class="modify-body">
									<?php 
										foreach ($_SESSION['cart'] as $id => $qty) {
											$sql_query = "SELECT * FROM items WHERE id = $id;";
										$itemInfo = mysqli_query($conn, $sql_query);
										$item = mysqli_fetch_assoc($itemInfo);	
									?>
									<tr>
										<td class="item_name align-middle" colspan="2"><?php echo $item['name']; ?></td>
										<td class="item_price align-middle"><?php echo $item['price']; ?></td>
										<td class="item_quantity align-middle"><?php echo $qty; ?></td>
										<td class="item_subtotal align-middle"><?php echo $qty * $item['price']; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</form>
<?php 


	}else{
		header("Location: ./error.php");
	
	}
}
?>